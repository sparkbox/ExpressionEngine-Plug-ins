<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Get_value Class
 *
 * @package   Get_value
 * @author    Sparkbox
 * @copyright Copyright (c) 2011 Sparkbox, LLC
 */
 
class Get_value {

  var $info = array(
    'name'     => 'Get_value',
    'version'  => '0.1'
  );
  
  function __construct() {
    // Make a local reference of the ExpressionEngine super object
    $this->EE =& get_instance();
  }
  
  function fetch() {
     $return = '';
     
     $name = $this->EE->TMPL->fetch_param('name');
     
     if(isset($_POST[$name])){
       
       $return = $_POST[$name];
       
     }
     
     return $return;
  }

}


/* End of file pi.url.php */
/* Location: ./system/expressionengine/plugins/pi.get_value.php */