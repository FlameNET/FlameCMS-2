<?php
/*
 * Copyright (C) 2014 Flame.NET Project <http://Flame.NET>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 *
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 function lang($line, $id = '')
 {
  $CI =& get_instance();
  $line = $CI->lang->line($line);
  
  $args = func_get_args();
  
  if(is_array($args)) array_shift($args);
  
  if(is_array($args) && count($args))
  {
      foreach($args as $arg)
      {
          $line = str_replace_first('%s', $arg, $line);
      }
  }

  if ($id != '')
  {
   $line = '<label for="'.$id.'">'.$line."</label>";
  }
  
  return $line;
 }

 function str_replace_first($search_for, $replace_with, $in)
 {
     $pos = strpos($in, $search_for);
     if($pos === false)
     {
         return $in;
     }
     else
     {
         return substr($in, 0, $pos) . $replace_with . substr($in, $pos + strlen($search_for), strlen($in));
     }
 }

/* End of file MY_language_helper.php */
/* Location: ./application/helpers/MY_language_helper */