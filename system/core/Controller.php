<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {
    private $_layout = "";
    protected $bootstrap;
    protected $arguments;

	/**
	 * Constructor
	 */
	public function __construct($layout = "")
	{
        $this->_layout = $layout;
        ob_start();
	}

    public function render()
    {
        $viewData = ob_get_contents();
        ob_end_clean();
        return $viewData;
    }

    public function hasLayout()
    {
        return $this->_layout != "";
    }

    public function getLayout()
    {
        return ucfirst($this->_layout);
    }

    public function setArguments($args)
    {
        $this->arguments = $args;
    }

    public function setBootstrapper($bootstrapper)
    {
        $this->bootstrap = $bootstrapper;
    }

}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */