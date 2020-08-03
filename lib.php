
<?php

//define('MOODLE_INTERNAL') || die();
class enrol_payment_plugin extends enrol_plugin {


    public function allow_enrol(){
        return true;
    }

    public function allow_unenrol(){
        return true;
    }

    public function allow_manage(){
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