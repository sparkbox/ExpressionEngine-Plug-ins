<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * GetHash Class
 *
 * @package   URL
 * @author    Sparkbox
 * @copyright Copyright (c) 2011 Sparkbox, LLC
 */
 
class URL {

  var $info = array(
    'name'     => 'GetHash',
    'version'  => '0.1'
  );
  
  function __construct() {
    // Make a local reference of the ExpressionEngine super object
    $this->EE =& get_instance();
  }
  
  function query() {
    print_r($_GET['page']);
    return parse_url($_SERVER['REQUEST_URI'])->fragment;
  }

}


/* End of file pi.url.php */
/* Location: ./system/expressionengine/plugins/pi.Url.php */