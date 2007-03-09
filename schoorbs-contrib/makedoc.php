#!/usr/bin/php
<?php
/**
 * Generates automatically the sourcecode documentation of Schoorbs
 * 
 * @author Uwe L. Korn <uwelk@xhochy.org>
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License 
 */
 
$aDirs = array('.','includes',
	'schoorbs-includes',
	'schoorbs-includes/input',
	'schoorbs-includes/rest-plugins',
	'schoorbs-includes/session-plugins',
	'schoorbs-includes/authentication', 
	'schoorbs-includes/database'
);

$aFiles = array();

foreach($aDirs as $sDir)
	foreach(glob($sDir.'/*.php') as $sFile)
		$aFiles[] = $sFile;

system('./schoorbs-contrib/phpdoc -pp on ' .
		'--readmeinstallchangelog ChangeLog' .
		'-s on ' .
		'--output HTML:Smarty:XhochY '.
		'-dc "Schoorbs" ' .
		'-tb '.dirname(__FILE__).'/PhpDocumentor/phpDocumentor/ '.
		'--title "Schoorbs Sourcecode Documentation" -t schoorbs-doc/ -f '.implode(',',$aFiles));
?>
