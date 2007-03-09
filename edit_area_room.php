<?php
/**
 * Edit a room in a certain area
 * 
 * @author Uwe L. Korn <uwelk@xhochy.org>, jberanek
 * @package Schoorbs
 * @subpackage Admin
 */

require_once "grab_globals.php";
require_once "config.inc.php";
require_once 'schoorbs-includes/global.functions.php';
require_once "schoorbs-includes/database/$dbsys.php";
require_once 'schoorbs-includes/authentication/schoorbs_auth.php';

die('Script would like to use PEAR, which is not GPL compatible.');

#If we dont know the right date then make it up
list($day, $month, $year) = input_DayMonthYear();
$room = input_Room();

if(!getAuthorised(2))
{
	showAccessDenied();
}

// Done changing area or room information?
if (isset($change_done))
{
	if (!empty($room)) // Get the area the room is in
	{
		$area = sql_query1("SELECT area_id from $tbl_room where id=$room");
	}
	Header("Location: admin.php?day=$day&month=$month&year=$year&area=$area");
	exit();
}

print_header($day, $month, $year, isset($area) ? $area : "");

?>

<h2><?php echo get_vocab("editroomarea") ?></h2>

<table border=1>

<?php
//TODO: PEAR-Paket entfernen
if(!empty($room)) {
    include_once 'Mail/RFC822.php';
    (!isset($room_admin_email)) ? $room_admin_email = '': '';
    $emails = explode(',', $room_admin_email);
    $valid_email = TRUE;
    $email_validator = new Mail_RFC822();
    foreach ($emails as $email)
    {
        // if no email address is entered, this is OK, even if isValidInetAddress
        // does not return TRUE
        if ( !$email_validator->isValidInetAddress($email, $strict = FALSE)
            && ('' != $room_admin_email) )
        {
            $valid_email = FALSE;
        }
    }
    //
	if ( isset($change_room) && (FALSE != $valid_email) )
	{
        if (empty($capacity)) $capacity = 0;
		$sql = "UPDATE $tbl_room SET room_name = '".sql_escape_arg($room_name)
			."', description='" . sql_escape_arg($description)
			."', capacity=".sql_escape_arg($capacity)
			.", room_admin_email='".sql_escape_arg($room_admin_email) 
			."' WHERE id = ".sql_escape_arg($room);
		if (sql_command($sql) < 0)
			fatal_error(0, get_vocab("update_room_failed") . sql_error());
	}

	$res = sql_query("SELECT * FROM $tbl_room WHERE id=$room");
	if (! $res) fatal_error(0, get_vocab("error_room") . $room . get_vocab("not_found"));
	$row = sql_row_keyed($res, 0);
	sql_free($res);
?>
<h3 ALIGN=CENTER><?php echo get_vocab("editroom") ?></h3>
<form action="edit_area_room.php" method="post">
<input type=hidden name="room" value="<?php echo $row["id"]?>">
<CENTER>
<TABLE>
<TR><TD><?php echo get_vocab("name") ?>:       </TD><TD><input type=text name="room_name" value="<?php
echo htmlspecialchars($row["room_name"]); ?>"></TD></TR>
<TR><TD><?php echo get_vocab("description") ?></TD><TD><input type=text name=description value="<?php
echo htmlspecialchars($row["description"]); ?>"></TD></TR>
<TR><TD><?php echo get_vocab("capacity") ?>:   </TD><TD><input type=text name=capacity value="<?php
echo $row["capacity"]; ?>"></TD></TR>
<TR><TD><?php echo get_vocab("room_admin_email") ?></TD><TD><input type=text name=room_admin_email MAXLENGTH=75 value="<?php
echo htmlspecialchars($row["room_admin_email"]); ?>"></TD>
<?php if (FALSE == $valid_email) {
    echo ("<TD>&nbsp;</TD><TD><STRONG>" . get_vocab('invalid_email') . "<STRONG></TD>");
} ?></TR>
</TABLE>
<input type=submit name="change_room"
value="<?php echo get_vocab("change") ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=submit name="change_done" value="<?php echo get_vocab("backadmin") ?>">
</CENTER>
</form>
<?php } ?>

<?php
if(!empty($area))
{
    include_once 'Mail/RFC822.php';
    (!isset($area_admin_email)) ? $area_admin_email = '': '';
    $emails = explode(',', $area_admin_email);
    $valid_email = TRUE;
    $email_validator = new Mail_RFC822();
    foreach ($emails as $email)
    {
        // if no email address is entered, this is OK, even if isValidInetAddress
        // does not return TRUE
        if ( !$email_validator->isValidInetAddress($email, $strict = FALSE)
            && ('' != $area_admin_email) )
        {
            $valid_email = FALSE;
        }
    }
    //
    if ( isset($change_area) && (FALSE != $valid_email) )
	{
		$sql = "UPDATE $tbl_area SET area_name='" . sql_escape_arg($area_name)
			. "', area_admin_email='" . sql_escape_arg($area_admin_email)
            . "' WHERE id=".sql_escape_arg($area);
		if (sql_command($sql) < 0)
			fatal_error(0, get_vocab("update_area_failed") . sql_error());
	}

	$res = sql_query("SELECT * FROM $tbl_area WHERE id=$area");
	if (! $res) fatal_error(0, get_vocab("error_area") . $area . get_vocab("not_found"));
	$row = sql_row_keyed($res, 0);
	sql_free($res);
?>
<h3 ALIGN=CENTER><?php echo get_vocab("editarea") ?></h3>
<form action="edit_area_room.php" method="post">
<input type=hidden name="area" value="<?php echo $row["id"]?>">
<CENTER>
<TABLE>
<TR><TD><?php echo get_vocab("name") ?>:       </TD><TD><input type=text name="area_name" value="<?php
echo htmlspecialchars($row["area_name"]); ?>"></TD></TR>
<TR><TD><?php echo get_vocab("area_admin_email") ?>:       </TD><TD><input type=text name="area_admin_email" MAXLENGTH=75 value="<?php
echo htmlspecialchars($row["area_admin_email"]); ?>"></TD>
<?php if (FALSE == $valid_email) {
    echo ("<TD>&nbsp;</TD><TD><STRONG>" . get_vocab('invalid_email') . "</STRONG></TD>");
} ?></TR>
</TABLE>
<input type=submit name="change_area"
value="<?php echo get_vocab("change") ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=submit name="change_done" value="<?php echo get_vocab("backadmin") ?>">
</CENTER>
</form>
<?php } ?>
</TABLE>
<?php include "trailer.php"
