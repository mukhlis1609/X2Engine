<?php

return array(
	// The sender of the forwarded message in GMail1_fixture_testAnyone
	// (treated as preexisting contact in email dropbox test)
	'testAnyone' => array(
		'name' => 'Testfirstname Testlastname',
		'firstName' => 'Testfirstname',
		'lastName' => 'Testlastname',
		'email' => 'contact@test.com',
		'assignedTo' => 'Anyone',
		'visibility' => 1,
	),
	// Treated as assigned to test user and preexisting.
	'testUser' => array(
		'name' => 'Testfirstnametwo Testlastnametwo',
		'firstName' => 'Testfirstnametwo',
		'lastName' => 'Testlastnametwo',
		'email' => 'contact2@test.com',
		'assignedTo' => 'testuser',
		'visibility' => 1,
	),
);

?>
