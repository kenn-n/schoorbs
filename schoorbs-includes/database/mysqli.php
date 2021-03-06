<?php
/**
 * mysqli.php - Simple PHP database support for MySQL, using mysqli extension.
 * 
 * Include this file after defining the following variables:
 *   $db_host = The hostname of the database server
 *   $db_login = The username to use when connecting to the database
 *   $db_password = The database account password
 *   $db_database = The database name.
 * Including this file connects you to the database, or exits on error.
 * 
 * @author jberanek, Uwe L. Korn
 * @package Schoorbs/DB/MySQLi
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License
 */

/**
 * Free a results handle. You need not call this if you call sql_row
 * until the row returns 0, since sql_row frees the results
 * handle when you finish reading the rows.
 * 
 * @param $r MySQLi-Result The MySQLi-Result to be freed 
 */
function sql_free ($r)
{
  $r->close();
}

/**
 * Execute a non-SELECT SQL command (insert/update/delete).
 * Returns the number of tuples affected if OK (a number >= 0).
 * Returns -1 on error; use sql_error to get the error message.
 * 
 * @param $sql string A non-SELECT SQL-Query
 */
function sql_command ($sql)
{
	return MySQLiSingleton::command($sql);}

/**
 * Execute an SQL query which should return a single non-negative number value.
 * This is a lightweight alternative to sql_query, good for use with count(*)
 * and similar queries. It returns -1 on error or if the query did not return
 * exactly one value, so error checking is somewhat limited.
 * It also returns -1 if the query returns a single NULL value, such as from
 * a MIN or MAX aggregate function applied over no rows.
 * 
 * @param $sql string A SQL-Query
 */
function sql_query1 ($sql)
{
    $r = MySQLiSingleton::getInstance()->query($sql);
    if (! $r) return -1;
    if (($r->num_rows != 1) || ($r->field_count != 1) ||
        (($row = $r->fetch_row()) == NULL)) {
        return -1;
    }
    $r->close();
    return $row[0];
}

/**
 * Execute an SQL query. Returns a database-dependent result handle,
 * which should be passed back to sql_row or sql_row_keyed to get the results.
 * Returns 0 on error; use sql_error to get the error message.
 * 
 * @return MySQLi-Result
 * @param $sql string A SQL-Query
 */
function sql_query ($sql)
{
    return MySQLiSingleton::getInstance()->query($sql);
}

/**
 * Return a row from a result. The first row is 0.
 * The row is returned as an array with index 0=first column, etc.
 * When called with i >= number of rows in the result, cleans up from
 * the query and returns 0.
 * Typical usage: $i = 0; while ((a = sql_row($r, $i++))) { ... }
 * 
 * @return array
 * @param $r MySQLi-Result
 * @param $i int
 */
function sql_row ($r, $i)
{
	if ($r == null) return 0;
    if ($i >= $r->num_rows) {
      $r->close();
      
      return 0;
    }
    $r->data_seek($i);
    return $r->fetch_row();
}

/**
 * Return the number of rows returned by a result handle from sql_query.
 * 
 * @return int 
 * @param $r MySQLi-Result
 */
function sql_count ($r)
{
    return $r->num_rows;
}

/**
 * Return the value of an autoincrement field from the last insert.
 * Must be called right after an insert on that table!
 * 
 * @return int 
 * @param $table string
 * @param $field string
 */
function sql_insert_id($table, $field)
{
    return MySQLiSingleton::getInstance()->insert_id;
}

/**
 * Return the text of the last error message.
 * 
 * @return string 
 */ 
function sql_error()
{
    return MySQLiSingleton::getInstance()->error;
}

/**
 * Begin a transaction, if the database supports it. This is used to
 * improve PostgreSQL performance for multiple insert/delete/updates.
 * There is no rollback support, since MySQL doesn't support it.
 */
function sql_begin()
{
}

/**
 * Commit (end) a transaction. See sql_begin().
 */
function sql_commit()
{
}

/**
 * Acquire a mutual-exclusion lock on the named table. For portability:
 * This will not lock out SELECTs.
 * It may lock out DELETE/UPDATE/INSERT or not, depending on the implementation.
 * It will lock out other callers of this routine with the same name argument.
 * It may timeout in 20 seconds and return 0, or may wait forever.
 * It returns 1 when the lock has been acquired.
 * Caller must release the lock with sql_mutex_unlock().
 * Caller must not have more than one mutex at any time.
 * Do not mix this with sql_begin()/sql_end() calls.
 * 
 * In MySQL, we avoid table locks, and use low-level locks instead.
 * 
 * @param $name string
 */
function sql_mutex_lock($name)
{
    global $sql_mutex_shutdown_registered, $sql_mutex_unlock_name;
    if (!sql_query1("SELECT GET_LOCK('$name', 20)")) {
        return 0;
    }
    $sql_mutex_unlock_name = $name;
    if (empty($sql_mutex_shutdown_registered)) {
        register_shutdown_function("sql_mutex_cleanup");
        $sql_mutex_shutdown_registered = 1;
    }
    return 1;
}

/**
 * Release a mutual-exclusion lock on the named table. See sql_mutex_unlock.
 *
 * @param $name string
 */
function sql_mutex_unlock($name)
{
    global $sql_mutex_unlock_name;
    sql_query1("SELECT RELEASE_LOCK('$name')");
    $sql_mutex_unlock_name = "";
}

/**
 * Shutdown function to clean up a forgotten lock. For internal use only.
 */
function sql_mutex_cleanup()
{
    global $sql_mutex_shutdown_registered, $sql_mutex_unlock_name;
    if (!empty($sql_mutex_unlock_name)) {
        sql_mutex_unlock($sql_mutex_unlock_name);
        $sql_mutex_unlock_name = "";
    }
}

/**
 * Escapes a string for use as a SQL parameter
 * 
 * @author Uwe L. Korn <uwelk@xhochy.org>
 */
function sql_escape_arg($sArg)
{
	return MySQLiSingleton::escapeString($sArg);
}

/**
 * The place where we store the MySQLi connection
 * 
 * Save the connection as a Singleton and not as a global variable to provide 
 * Support for PHPUnit TestCases. Since MySQLi is only available with php5, we
 * are able to use PHP5 structures too.
 * 
 * @author Uwe L. Korn
 * @package Schoorbs/DB/MySQLi
 */
class MySQLiSingleton {
    /**
     * Establish a database connection.
     * On connection error, the message will be output without a proper HTML
     * header. There is no way I can see around this; if track_errors isn't on
     * there seems to be no way to supress the automatic error message output and
     * still be able to access the error text.
     * 
     * @author Uwe L. Korn
     */
    public static function connect($db_host, $db_login, $db_password, $db_database) {
        self::$mysqli = new mysqli($db_host, $db_login, $db_password, $db_database);
        
        // check connection
        if (mysqli_connect_errno()) {
           echo "\n<p>\n" . get_vocab("failed_connect_db") . " : " . mysqli_connect_error();
           exit(1);
        }
    }
    
    /**
	 * Execute a non-SELECT SQL command (create/insert/update/delete).
	 * Returns -1 on error; use sql_error to get the error message.
	 * 
	 * @param $sQuery string A non-SELECT SQL-Query
	 * @return The number of affected rows or -1 on error
	 */
    public static function command($sQuery) {
    	$ret = -1;

		if (self::$mysqli->query($sQuery) === true) {
			$ret = self::$mysqli->affected_rows;
		}
		return $ret;
    }
    
    /**
	 * Escapes a string for use as a SQL parameter
	 * 
	 * @author Uwe L. Korn <uwelk@xhochy.org>
	 * @param $sString string 
	 * @return string
	 */
    public static function escapeString($sString) {
    	return self::$mysqli->real_escape_string($sString);
    }
    
    private static $mysqli = null;
    
    /**
     * Get the active MySQLi connection
     * 
     * @return mysqli 
     */
    public static function getInstance() {
        return self::$mysqli;
    }
}

/** 
 * Automatically connect to the database
 */
MySQLiSingleton::connect($db_host, $db_login, $db_password, $db_database);
