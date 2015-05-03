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

class BattleNetAccountModel extends CI_Model {

	public function __construct()
	{
        $this->_tableName = "battlenet_accounts";
	}
	
    public function CreateAccount($email,$password)
    {
        $safeEmail = $this->database->escape_str($email, false);

        $record = array(
            "email" => $safeEmail,
            "sha_pass_hash" => $this->_calculateX($safeEmail, $password)
        );

        $this->database->insert('battlenet_accounts', $record);
    }

    public function CheckCredentials($email, $password)
    {
        $safeEmail = $this->database->escape_str($email, false);
        $x = $this->_calculateX($safeEmail, $password);

        $query = $this->database->get_where($this->_tableName, array( "email" => $safeEmail));

        if($query->num_rows() > 0){
            $row = $query->row();

            if($row->sha_pass_has == $x) {
                return true;
            }
        }

        return false;
    }

    private function _calculateX($I, $password)
    {
        $safePass = strtoupper($this->database->escape_str($password, false));
        $I = hash("sha256", strtoupper($I));
        return hash("sha256", $I.":".$safePass);
    }
}
