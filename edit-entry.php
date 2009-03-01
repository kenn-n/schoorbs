<?php
/**
 * Modify an existing booking.
 * 
 * @author Uwe L. Korn <uwelk@xhochy.org>
 * @package Schoorbs
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License
 */

/// Includes ///

/** The Configuration file */
require_once 'config.inc.php';
/** The general 'things' when viewing Schoorbs on the web */
require_once 'schoorbs-includes/global.web.php';

/// Var Init ///

/** id **/
if(isset($_REQUEST['id'])) {
	$nId = intval($_REQUEST['id']);
} else {
	SchoorbsTPL::error(Lang::_('No entry id for editing was provided!'));
	exit(1);
}

/// Main ///

// Get the booking
$oEntry = Entry::getById($nId);

// Only allow the owner or an administrator to change the booking
if (!getAuthorised(1) || !getWritable($oEntry->getCreateBy(), getUserName())) {
	showAccessDenied();
}

// Check if the name of the booking was provided in this HTTP request, if it was
// this indicates that the user has finished the editing of this booking.
if (!isset($_REQUEST['name'])) {
	// Case 1: name was not set -> Display edit page
	
	// Get all booking types 
	$aTypes = array();
	for ($c = 'A'; $c <= 'Z'; $c++) {
		if (isset($typel[$c]) && (!empty($typel[$c]))) {
			$aTypes[] = array('c' => $c, 'text' => $typel[$c]);
		}
	}

	SchoorbsTPL::populateVar('types', $aTypes);
	SchoorbsTPL::populateVar('entry', $oEntry);
	SchoorbsTPL::renderPage('edit-entry');
} else {
	// Case 2: name was set -> Save entry
	
	// For a clean request all needed values must be submitted, partial
	// changes are not allowed via the WebGUI and may only be done through
	// the REST-API. Remind that we will not guess a possible solution in 
	// Schoorbs, we rather request the data again from the user instead of
	// saving false data without its knowledge.	

	/**
	 * @todo Add all this messages to the language files, maybe a soultion 
	 *       with lesser strings needs to be done
	 */

	// We need a title for the booking.
	if (empty($_REQUEST['name'])) {
		SchoorbsTPL::error(Lang::_('An empty name for the booking was supplied.'));
		exit (1);
	} else {
		$sNewName = unslashes($_REQUEST['name']);
	}
	
	// Check if the description was included in the request, this is allowed
	// to be empty, but as this must be a complete request, the variable has
	// to be set.
	if (!isset($_REQUEST['description'])) {
		SchoorbsTPL::error(Lang::_('The description for the booking is not set.'));
		exit(1);
	} else {
		$sNewDescription = unslashes($_REQUEST['description']);
	}
	
	// Get the starting date, this consits out of the 3 components day,
	// month and year. Check if we have got a valid date, invalid dates 
	// might indicate a failure in the request. 
	if (!isset($_REQUEST['edit_day']) || !isset($_REQUEST['edit_month']) || !isset($_REQUEST['edit_year'])) {
		SchoorbsTPL::error(Lang::_('Not all needed components(day, month, year) for the date were set.'));
		exit(1);
	} else {
		// Get the components of the date as integers and check
		// afterwards if the parsed values are equal to the supplied
		// strings.
		$nNewDay = intval($_REQUEST['edit_day']);
		if (strval($nNewDay) !== $_REQUEST['edit_day']) {
			SchoorbsTPL::error(Lang::_('Supplied value for the date is not valid.'));
			exit(1);
		}
		$nNewMonth = intval($_REQUEST['edit_month']);
		if (strval($nNewMonth) !== $_REQUEST['edit_month']) {
			SchoorbsTPL::error(Lang::_('Supplied value for the date is not valid.'));
			exit(1);
		}
		$nNewYear = intval($_REQUEST['edit_year']);
		if (strval($nNewYear) !== $_REQUEST['edit_year']) {
			SchoorbsTPL::error(Lang::_('Supplied value for the date is not valid.'));
			exit(1);
		}
		
		// Check if the combination out of day, month, year is valid,
		// so that the is no false value like the 29th February 2007
		if (!checkdate($nNewMonth, $nNewDay, $nNewYear)) {
			SchoorbsTPL::error(Lang::_('Supplied value for the date is not valid.'));
			exit(1);
		}
	}
	
	if (Entry::perioded()) {
		// If the system works on a perioded basis, check that the period
		// is in the range 0..count(periods)-1
		if (!isset($_REQUEST['period'])) {
			SchoorbsTPL::error(Lang::_('A starting period was not supplied.'));
		}
		
		$nPeriod = intval($_REQUEST['period']);
		if (($nPeriod >= count($GLOBALS['periods'])) || ($nPeriod < 0)) {
			SchoorbsTPL::error(Lang::_('Supplied value for the period is not valid.'));
		}
		
		if (!in_array($_REQUEST['dur_units'], array('periods', 'days'))) {
			SchoorbsTPL::error(Lang::_('Supplied value for the duration unit is not valid.'));
		}
	} else {
		// If the system runs on a non-perioded basis, check if the 
		// starting is a valid timestamp
		if (!isset($_REQUEST['hour']) || !isset($_REQUEST['minute'])) { 
			SchoorbsTPL::error(Lang::_('Not all needed components(hour, minute) for the time were set.'));
			exit(1);
		}
		
		$nHour = intval($_REQUEST['hour']);
		$nMinute = intval($_REQUEST['minute']);
		if (($nHour < 0) || ($nHour > 23)) {
			SchoorbsTPL::error(Lang::_('Supplied value for the hour is not valid.'));
		}
		if (($nMinute < 0) || ($nHour > 59)) {
			SchoorbsTPL::error(Lang::_('Supplied value for the minute is not valid.'));
		}
		
		if (!in_array($_REQUEST['dur_units'], array('periods', 'days', 'minutes', 'hours', 'weeks'))) {
			SchoorbsTPL::error(Lang::_('Supplied value for the duration unit is not valid.'));
		}
	}
}
