<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Model_Database extends Kohana_Model_Database {
	public function get_audit($username, $action)
	{
		// embuscado update dec 3
		DB::query(DATABASE::INSERT, "INSERT INTO audit_trail VALUES(null,'".$username."', '".$action."', now())")->execute();
	}
}
