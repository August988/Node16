<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

/*
 * Error Handler Dependency for form validator.
 */
if (!defined('BASEPATH')) {
    die();
}

class TidyBB_ErrorHandler
{

    protected $errors = array();

    public function addError($error, $key = null)
    {
        if ($key) {
            $this->errors[$key][] = $error;
        } else {
            $this->errors[] = $error;
        }
    }

    public function all($key = null)
    {
        return isset($this->errors[$key]) ? $this->errors['$key'] : $this->errors;
    }

    public function hasErrors()
    {
        return count($this->all()) ? true : false;
    }

    public function first($key)
    {
        $all = $this->all();
        return isset($all[$key][0]) ? $all[$key][0] : '';
    }

}

?>