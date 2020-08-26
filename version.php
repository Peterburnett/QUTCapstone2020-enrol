<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Payment enrolment enrolment plugin version specification.
 *
 * This plugin allows you to set up paid courses.
 *
 * @package    enrol_payment
 * @copyright  2020 Aaron Dang
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2020082600;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2019111200;        // Requires this Moodle version
$plugin->component = 'enrol_payment';      // Full name of the plugin (used for diagnostics)

// Adding plugin dependencies 
$plugin->dependencies = array(
    'tool_paymentplugin' => 2020042101, // The enrolment plugin version 2020042101 or higher must be present.
);
