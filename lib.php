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
 * Payment enrolment plugin.
 *
 * This plugin allows you to set up paid courses.
 *
 * @package    enrol_payment
 * @copyright  2020 Aaron Dang
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
class enrol_payment_plugin extends enrol_plugin {

     public function enrol_page_hook(stdClass $instance){  
         global $CFG, $USER, $OUTPUT, $PAGE, $DB, $html;
        $html .= html_writer::tag('p',get_string('enrol','enrol_payment'));
        $html .= html_writer::tag('p',get_string('price','enrol_payment'));
        $html .= html_writer::tag('button onClick="window.location=\'' . $CFG->wwwroot . '\';"','enrol now');

        return $html;
     }
    
    


    // public function roles_protected($instance) {
    //     // Return true if plugin allows manual modification of user enrolments from other code. 
    //     //False is usually returned from plugins that synchronise data with external systems, 
    //     //otherwise the manual changes would be reverted immediately upon synchronisation.
    //     return false;
    // }

    public function can_delete_instance($instance){
        return true;
    }
    public function can_hide_show_instance($instance){
        return true;
    }

    public function allow_enrol($instance){
        //true means other code can call enrol users false means online the plugin can enrol the users.
        return true;
    }

    public function allow_unenrol($instance){
        //Is other code allowed to unenrol everybody from one instance or one specific user?    
        return true;
    }

    public function allow_manage($instance){
        //Return true if plugin allows manual modification of user enrolments from other code.
        //False is usually returned from plugins that synchronise data with external systems,
        //otherwise the manual changes would be reverted immediately upon synchronisation.
        return true;
    }

    public function show_enrolme_link(stdClass $instance) {
        return ($instance->status == ENROL_INSTANCE_ENABLED);
    }

    /**
     * We are a good plugin and don't invent our own UI/validation code path.
     *
     * @return boolean
     */
    public function use_standard_editing_ui() {
        return true;
    }

     /**                                                                                                                             
     * Add elements to the edit instance form.                                                                                      
     *                                                                                                                              
     * @param stdClass $instance                                                                                                    
     * @param MoodleQuickForm $mform                                                                                                
     * @param context $context                                                                                                      
     * @return bool                                                                                                                 
     */                                                                                                                             
    public function edit_instance_form($instance, MoodleQuickForm $mform, $context) {
    }

        /**                                                                                                                             
     * Perform custom validation of the data used to edit the instance.                                                             
     *                                                                                                                              
     * @param array $data array of ("fieldname"=>value) of submitted data                                                           
     * @param array $files array of uploaded files "element_name"=>tmp_file_path                                                    
     * @param object $instance The instance loaded from the DB                                                                      
     * @param context $context The context of the instance we are editing                                                           
     * @return array of "element_name"=>"error_description" if there are errors,                                                    
     *         or an empty array if everything is OK.                                                                               
     * @return void                                                                                                                 
     */                                                                                                                             
    public function edit_instance_validation($data, $files, $instance, $context) {
    }

        /**                                                                                                                             
     * Return true if we can add a new instance to this course.                                                                     
     *                                                                                                                              
     * @param int $courseid                                                                                                         
     * @return boolean                                                                                                              
     */                                                                                                                             
    public function can_add_instance($courseid) {  
        return true;
    }
}