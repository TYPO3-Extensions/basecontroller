<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

	// This array is meant to store the list of the various controller tables
	// used by the Tesseract components
	// This list is used - in particular - by Data Consumers, in the BE,
	// to find back to which Data Providers they relate so that operations
	// such as mapping database fields to placeholders can take place
	// This is necessary because - in such cases - the process is not initiated
	// by a controller
if (!isset($T3_VAR['EXT']['basecontroller']['controller_mm_tables'])) {
	$T3_VAR['EXT']['basecontroller']['controller_mm_tables'] = array();
}
?>