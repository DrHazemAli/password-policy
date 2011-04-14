<?php
/**
 * Password Policy
 * A class to simplify enforcement of a password formatting policy
 *
 * @author Craig Russell
 * @version 0.1
 */
class PasswordPolicy 
{
    /* Internal variables */
    private $rules;     // Array of policy rules
    private $errors;    // Array of errors for the last validation
    
    /**
     * Constructor
     *
     * Allows an array of policy parameters to be passed on construction.
     * For any rules not listed in parameter array default values are set.
     *
     * @param  array $params optional array of policy configuration parameters
     */
    function __construct ($params=NULL)
    {
        // Define defaults
        $this->rules['min_length'] = array(
            'value' => false,
            'string' => 'Password must be more than #VALUE# characters long');
        $this->rules['max_length'] = array(
            'value' => false,
            'string' => 'Password must be less than #VALUE# characters long');
        $this->rules['min_unique_chars'] = array(
            'value' => false,
            'string' => 'Password must contain at least #VALUE# unique characters');
        $this->rules['allow_numeric_chars'] = array(
            'value' => false,
            'string' => 'Password may not contain numbers');
        $this->rules['allow_numeric_first'] = array(
            'value' => false,
            'string' => 'First character cannot be numeric');
        $this->rules['allow_numeric_last'] = array(
            'value' => false,
            'string' => 'Last character cannot be numeric');
        $this->rules['min_numeric_chars'] = array(
            'value' => false,
            'string' => 'Password must contain at least #VALUE# numbers');
        $this->rules['max_numeric_chars'] = array(
            'value' => false,
            'string' => 'Password must contain no more than #VALUE# numbers');
        $this->rules['allow_nonalphanumeric_chars'] = array(
            'value' => false,
            'string' => 'Password may not contain non-alphanumeric characters');
        $this->rules['allow_nonalphanumeric_first'] = array(
            'value' => false,
            'string' => 'First character cannot be non-alphanumeric');
        $this->rules['allow_nonalphanumeric_last'] = array(
            'value' => false,
            'string' => 'Last character cannot be non-alphanumeric');
        $this->rules['min_nonalphanumeric_chars'] = array(
            'value' => false,
            'string' => 'Password must contain at least #VALUE# non-aplhanumeric characters');
        $this->rules['max_nonalphanumeric_chars'] = array(
            'value' => false,
            'string' => 'Password must contain no more than #VALUE# non-alphanumeric characters');
        
        // Apply params from constructor array
        foreach( $params as $k=>$v ) { $this->$k = $v; }
        
        return 1;
    }

    /*
     * Get a rule configuration parameter
     *
     * @param  string $rule Identifier for a rule
     * @return mixed        Rule configuration parameter
     */
    public function __get($rule)
    {
        return 1;   
    }
    
    /*
     * Set a rule configuration parameter
     *
     * @param  string $rule  Identifier for a rule
     * @param  string $value Parameter for rule
     * @return boolean       1 on success
     *                       0 otherwise
     */
    public function __set($rule, $value)
    {
        return 1;
    }
    
    /*
     * Get human readable representation of policy rules
     *
     * Returns array of strings where each element is a string description of 
     * the active rules in the policy
     *
     * @return array        Array of descriptive strings
     */
    public function policy()
    {
        return array();
    }
    
    /*
     * Validate a password against the policy
     *
     * @param  string  password The password string to validate
     * @return boolean          1 if password conforms to policy
     *                          0 otherwise
     */
    public function validate($password)
    {
        return 1;
    }
    
    /*
     * Get the errors showing which rules were not matched on the last validation
     *
     * Returns array of strings where each element has a key that is the failed
     * rule identifier and a string value that is a human readable description 
     * of the rule
     *
     * @return array        Array of descriptive strings
     */
    public function get_errors()
    {
        return array();
    }
    
/***** PRIVATE FUNCTIONS ******************************************************/

    /*
     * Validate a password against a specific rule
     *
     * @param  string   $rule       Identifier for the rule to be applied
     * @param  string   $password   The password string to validate
     * @return boolean              1 if pasword conforms to rule
     *                              0 otherwise
     */
    private function validate_rule($rule, $password)
    {
        return 1;
    }
    
    /*
     * Get the string description for a rule
     *
     * @param  string   $rule       Identifier for the rule to be applied
     * @return string               Descriptive string for rule if it exists
     *                              0 otherwise
     */
    private function get_rule_string($rule)
    {
        return ( isset($this->rules[$rule]) ) 
        ? str_replace( '#VALUE#', $this->rules[$rule]['value'], $this->rules[$rule]['string'] )
        : 0;
    }
}
