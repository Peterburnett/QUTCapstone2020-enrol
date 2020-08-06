<?php

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2019111806;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2019111200;        // Requires this Moodle version
$plugin->component = 'enrol_payment';      // Full name of the plugin (used for diagnostics)

// Adding plugin dependencies 
$plugin->dependencies = array(
    'tool_paymentplugin' => 2020042101, // The enrolment plugin version 2020042101 or higher must be present.
);
