<?php

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2019111802;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2019111200;        // Requires this Moodle version
$plugin->component = 'enrol_payment';      // Full name of the plugin (used for diagnostics)

// Adding plugin dependencies 
$plugin->dependencies = array(
    'mod_foo' => ANY_VERSION,   // The Foo activity must be present (any version).
    'enrol_plugin' => 2019111200, // The enrolment plugin version 2019111200 or higher must be present.
);
