
<?php

defined('MOODLE_INTERNAL') || die();
class enrol_payment_plugin extends enrol_plugin {

    public function roles_protected() {
        // Return true if plugin allows manual modification of user enrolments from other code. 
        //False is usually returned from plugins that synchronise data with external systems, 
        //otherwise the manual changes would be reverted immediately upon synchronisation.
        return false;
    }

    public function allow_enrol(){
        //true means other code can call enrol users false means online the plugin can enrol the users.
        return true;
    }

    public function allow_unenrol(){
        //Is other code allowed to unenrol everybody from one instance or one specific user?    
        return true;
    }

    public function allow_manage(){
        //Return true if plugin allows manual modification of user enrolments from other code.
        //False is usually returned from plugins that synchronise data with external systems,
        //otherwise the manual changes would be reverted immediately upon synchronisation.
        return true;
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

    }
}