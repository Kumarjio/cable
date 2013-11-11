<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * allows the common form validation to be called from the controller itself
 */
class MY_Form_validation extends CI_Form_validation {

    protected $CI;

    function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

    /**
     * validates the name.
     * only a-to-z, A-to-Z and blank space are allowed
     *
     * @param type $field_value
     *            is the field's value which we are validating
     * @return boolean is the true false value telling whether the field's valus
     *         is valid or not
     */
    function name_validator($field_value) {

        // here * is used so blank is a valid data
        if (!preg_match('/^[a-zA-Z ]*$/', $field_value)) {
            // set the field vaues given by user
            $this->CI->form_validation->set_value($field_value);
            $this->CI->form_validation->set_message('name_validator', '%s is not a valid');
            return false;
        } else {
            return true;
        }
    }

    /**
     * validates the name.
     * only a-to-z, A-to-Z , blank space , dt and dash are allowed
     *
     * @param type $field_value
     *            is the field's value which we are validating
     * @return boolean is the true false value telling whether the field's valus
     *         is valid or not
     */
    function name_with_dotdash_validator($field_value) {

        // here * is used so blank is a valid data
        if (!preg_match('/^[a-zA-Z .-]*$/', $field_value)) {
            // set the field vaues given by user
            $this->CI->form_validation->set_value($field_value);
            $this->CI->form_validation->set_message(
                    'name_with_dotdash_validator', '%s is not a valid Name');
            return false;
        } else {
            return true;
        }
    }

    /**
     *
     * @param type $field_value
     *            is the field's value which we are validating
     * @return boolean is the true false value telling whether the field's valus
     *         is valid or not
     */
    function date_validator($field_value) {
        if ($field_value != '') {
            // if the pattern matches then we will check if the date mathces or
            // not
            // matches with 0-1-2011 or 01-1-2011 or 1-22-5201 or 11-11-1111
            if (preg_match('/^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$/', $field_value)) {

                // of the pattern matches then get the values of day,month and
                // year
                // from input that are separated by '-' delim
                $date_value_array = explode("-", $field_value);

                // get the values and cast them to integers
                $day = (int) $date_value_array[0];
                $month = (int) $date_value_array[1];
                $year = (int) $date_value_array[2];

                // check if the date is valid or not
                // if not valid set the error message
                if (!checkdate($month, $day, $year)) {
                    // set the field vaues given by user
                    $this->CI->form_validation->set_value($field_value);
                    // set the error message and return false
                    $this->CI->form_validation->set_message('date_validator', '%s is not a valid date(eg. 25-12-2001)');
                    return false;
                }
                // return true if the date is a valid date
                return true;
            } else {
                // if the date entered does not match with the regular
                // expression then return a false with the error code
                $this->CI->form_validation->set_message('date_validator', '%s is not a valid date(eg. 25-12-2001)');
                return false;
            }
        }
    }

    /**
     * validation for a phone number
     *
     * @param type $field_value
     *            is the field's value which we are validating
     * @return boolean is the true false value telling whether the field's valus
     *         is valid or not
     */
    function phone_number_validator($field_value) {

        // we check the number by reqired validation. so if it is blank no need
        // to check
        // for any other validation. simply return true as it would be validated
        // by required
        if ($field_value != '') {
            // check ofr number by regx
            // 30digits without + sign and 29 digits if + is there
            if (!preg_match('/^[0-9]{1,30}|[+]{0,1}[0-9]{1,29}$/', $field_value)) {
                // set the field vaues given by user
                $this->CI->form_validation->set_value($field_value);
                $this->CI->form_validation->set_message(
                        'phone_number_validator', '%s is not a valid Number');
                return false;
            } else {
                return true;
            }
        }
        return true;
    }

    /**
     * checks if the first date is older than the second date
     *
     * @param type $field_value
     *            is the second date
     * @param type $date_from
     *            is the first date
     * @return boolean
     */
    function date_greater($field_value, $date_from) {

        // get the difference between two dates
        $days = strtotime($date_from) - strtotime($field_value);

        // if the difference is greater than 0 then it is an error so we need
        // to set the error
        if ($days > 0) {
            // set the error and return true
            $this->CI->form_validation->set_message('date_greater', 'Select the date greater than ' . $date_from);
            return false;
        } else {
            // second date is newer than first date so return true indicating
            // that the validation passed
            return true;
        }
    }

    /**
     * this function will check that is the value enter in textbox of form
     * details is already taken or not.
     * If the name is alredy enter in database it will give an error.
     *
     * @param type $field_value            
     * @return boolean
     */
    function isDataExit_validator($field_value, $param) {
        $values = explode(",", $param);
        $id = $values[0];
        $filed_name = $values[1];
        $model = $values[2];

        // get the data from database.
        $res = $this->CI->$model->isDataExit($id, $filed_name, $field_value);

        // if data is changed then check for uniquesness
        if (isset($res[0]->$filed_name) &&
                strtolower($res[0]->$filed_name) === strtolower($field_value)) {
            $this->CI->form_validation->set_value($field_value);
            $this->CI->form_validation->set_message('isDataExit_validator', '%s is Already Taken.');
            return false;
        } else {
            return true;
        }
    }

    /**
     * This function check the data in datbase at the time of edit data.
     * if it is same as n database then it will do nothing
     * but if it is changed the it will check of the unique name.
     *
     * @param type $field_value
     *            : current filed value
     * @param type $param            
     * @return boolean
     */
    function edit_isDataExit_validator($field_value, $param) {
        list($primary_key, $primary_key_field, $forigen_key, $field, $model) = explode(',', $param);

        // get the data from database.
        $res = $this->CI->$model->selectSingleRecord($primary_key_field, $primary_key);

        // if same as in databaase do nothing
        if (strtolower($res[0]->$field) === strtolower($field_value)) {
            return true;
        } else {
            // if data is changed then check for uniquesness
            // get data from database
            $res_1 = $this->CI->$model->isDataExit($forigen_key, $field, $field_value);

            // if data is changed then check for uniquesness
            if (isset($res_1[0]->$field) &&
                    strtolower($res_1[0]->$field) === strtolower($field_value)) {
                $this->CI->form_validation->set_value($field_value);
                $this->CI->form_validation->set_message(
                        'edit_isDataExit_validator', 'The %s field must contain a unique value.');
                return false;
            } else {
                return true;
            }
        }
    }
    
    function edit_isDataExitSingTable_validator($field_value, $param) {
        $value = explode(",", $param);
        $primary_key = $value[0];
        $primary_key_field = $value[1];
        $field = $value[2];
        $model = $value[3];
    
        //get the data from database.
        $res = $this->CI->$model->getWhere(array($primary_key_field => $primary_key));
    
        //if same as in databaase do nothing
        if (strtolower($res[0]->$field) === strtolower($field_value)) {
            return true;
        } else {
            //if data is changed then check for uniquesness
            //get data from database
            $res_1 = $this->CI->$model->getWhere(array($field => $field_value));
    
            //if data is changed then check for uniquesness
            if (isset($res_1[0]->$field) && strtolower($res_1[0]->$field) === strtolower($field_value)) {
                $this->CI->form_validation->set_value($field);
                $this->CI->form_validation->set_message('edit_isDataExitSingTable_validator', 'The %s field must contain a unique value.');
                return false;
            } else {
                return true;
            }
        }
    }

    function set_required_for_validator($field_value) {
        $this->CI->form_validation->set_value(1);
        $this->CI->form_validation->set_message('set_required_for_validator', 'Please enter value in this field.');
        return false;
    }

    /**
     * This method compares the integer value.
     * It makes sure that the
     * value entered is more than the parameter value.
     * It can be called like:
     *
     * int_value_more_than_check[99]
     *
     * If called as shown above, this would show error if the value entered is
     * not more than 99
     *
     * @param int $field_value
     *            is the value of the field automatically passed
     *            by the codeiginiter
     * @param int $param
     *            is the value with which you will compare the value
     * @return boolean true if the value is valid false otherwise
     *        
     */
    function int_value_more_than_check($field_value, $param) {
        $success = true;

        // the value 0 itself is passed then we
        // set the status as true and simply return true

        if ($field_value == '0' || $field_value == '+0' || $field_value == '-0') {
            $success = true;
        } else {
            $value = intval($field_value);

            // 0 would be returned if the value was invalid
            if ($value == 0) {
                $success = false;
            } else {
                // check if both the parsed value and
                // the actual field value are same
                //
                // this check is required because
                // parsing 123a123 would return 123 as
                // value but will not give error

                $str_value = (string) $value;

                if ($str_value != $field_value) {
                    $success = false;
                } else {
                    // if the parsing was success then we can
                    // check if the value is in valid range

                    if ($value < $param) {
                        $success = FALSE;
                    }
                }
            }
        }

        if ($success == TRUE) {
            return true;
        } else {
            $this->CI->form_validation->set_message('int_value_more_than_check', '%s must more than ' . $param);
            return FALSE;
        }
    }

    /**
     * This method compares the integer value.
     * It makes sure that the
     * value entered is less than the parameter value.
     * It can be called like:
     *
     * int_value_less_than_check[99]
     *
     * If called as shown above, this would show error if the value entered is
     * not less than 99.
     *
     * @param int $field_value
     *            is the value of the field automatically passed
     *            by the codeiginiter
     * @param int $param
     *            is the value with which you will compare the value
     * @return boolean true if the value is valid false otherwise
     *        
     */
    function int_value_less_than_check($field_value, $param) {
        $success = true;

        // the value 0 itself is passed then we
        // set the status as true and simply return true

        if ($field_value == '0' || $field_value == '+0' || $field_value == '-0') {
            $success = true;
        } else {
            $value = intval($field_value);

            // 0 would be returned if the value was invalid
            if ($value == 0) {
                $success = false;
            } else {
                // check if both the parsed value and
                // the actual field value are same
                //
                // this check is required because
                // parsing 123a123 would return 123 as
                // value but will not give error

                $str_value = (string) $value;

                if ($str_value != $field_value) {
                    $success = false;
                } else {
                    // if the parsing was success then we can
                    // check if the value is in valid range

                    if ($value > $param) {
                        $success = FALSE;
                    }
                }
            }
        }

        if ($success == TRUE) {
            return true;
        } else {
            $this->CI->form_validation->set_message('int_value_less_than_check', '%s must be less than ' . $param);
            return FALSE;
        }
    }

}

