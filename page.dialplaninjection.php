<?php
//
//This program is free software; you can redistribute it and/or
//modify it under the terms of the GNU General Public License
//as published by the Free Software Foundation; either version 2
//of the License, or (at your option) any later version.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.

$dispnum = 'dialplaninjection'; //used for switch on config.php

?>

<div class="rnav">

<?php 

$contexts = dialplaninjection_getinjections();
drawListMenu($contexts, $skip, $type, $display, $extdisplay, _("Injection"));

?>
</div>

<?php
// check to see if user has automatic updates enabled in FreePBX settings
$cm =& cronmanager::create($db);
$online_updates = $cm->updates_enabled() ? true : false;

// check dev site to see if new version of module is available
if ($online_updates && $foo = dialplaninjection_vercheck()) {
	echo "<br>A <b>new version of this module is available</b> from the <a target='_blank' href='http://pbxossa.org'>PBX Open Source Software Alliance</a><br>";
	}
?>

<!--
			<tr><td colspan="2"><br><h5><?php echo _("Destination if no answer")?>:<hr></h5></td></tr>
-->
<?php 
//draw goto selects
//echo drawselects($goto,0);
?>