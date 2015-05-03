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
 * Language Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Language
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/language.html
 */
class CI_Language {

    protected $LanguageMap = array();
    protected $Tag = "";

    protected function addMarkerValue($markerName, $string)
    {
        if(in_array($markerName, $GLOBALS["LanguageMarkers"]))
        {
            if(!array_key_exists($markerName, $this->LanguageMap))
            {
                $this->LanguageMap[$markerName] = $string;
            }
        }
    }

    public function getMarkerValue($markerName)
    {
        if(in_array($markerName, $GLOBALS["LanguageMarkers"]))
        {
            if(array_key_exists($markerName, $this->LanguageMap))
            {
                return $this->LanguageMap[$markerName];
            }
        }
        return "";
    }
}
// END Language Class

/* End of file Lang.php */
/* Location: ./system/core/Lang.php */
