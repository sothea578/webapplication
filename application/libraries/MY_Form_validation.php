<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{
    public function __construct($rules = array())
    {
        parent::__construct($rules);
    }

    function is_money_multi($input, $params)
    {
        @list($thousand, $decimal, $message) = explode(',', $params);
        $thousand = (empty($thousand) || $thousand === 'COMMA') ? ',' : '.';
        $decimal = (empty($decimal) || $decimal === 'DOT') ? '.' : ',';
        $message = (empty($message)) ? 'The money field is invalid' : $message;

        $regExp = "/^\s*[$]?\s*((\d+)|(\d{1,3}(\{thousand}\d{3})+)|(\d{1,3}(\{thousand}\d{3})(\{decimal}\d{3})+))(\{decimal}\d{2})?\s*$/";
        $regExp = str_replace("{thousand}", $thousand, $regExp);
        $regExp = str_replace("{decimal}", $decimal, $regExp);

        $ok = preg_match($regExp, $input);
        if (!$ok) {
            $CI =& get_instance();
            $CI->form_validation->set_message('is_money_multi', $message);
            return FALSE;
        }
        return TRUE;
    }
}