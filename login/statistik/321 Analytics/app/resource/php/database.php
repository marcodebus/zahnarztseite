<?php

	if (!file_exists("database") || !is_dir("database")) 
	{
    	mkdir("database",0777,true);         
	} 

	$database_structure = array();

	include("app/config/database.php");
	


	// Application Database
	
	$database = new PDO("sqlite:database/database.sqlite");
	
	

	// Database implementation

	foreach ($database_structure as $table => $structure)
	{
		$database -> exec("CREATE TABLE IF NOT EXISTS '" . $table . "' (" . $table . "_number INTEGER PRIMARY KEY AUTOINCREMENT)");

		$current_structure = $database -> query("SELECT * FROM '" . $table . "' LIMIT 1") -> fetchAll();
		$current_structure = $current_structure[0];

		foreach ($structure as $id => $column)
		{
			if ($current_structure == null || !array_key_exists($column,$current_structure))
			{
				$database -> exec("ALTER TABLE '" . $table . "' ADD '" . $column . "' TEXT NOT NULL DEFAULT ''");
			} 
		}
	}











	// Get database table

	function get_table($key)
	{
		global $database_structure;

		foreach ($database_structure as $table => $structure) { foreach ($structure as $id => $column) { if (strpos($column,$key) !== false) { return $table; break; } } }

		return null;
	}


	// Database commands

	function insert_data($key,$value)
	{
		global $database;

		$table = get_table($key);

		$query = $database -> prepare("INSERT INTO " . $table . " (" . $key . ") VALUES (?)"); $query -> execute(array($value));
	}

	function get_data($key,$where,$is)
	{
		global $database;

		$table = get_table($key);

		$query = $database -> prepare("SELECT " . $key . " FROM " . $table . " WHERE " . $where . "=? LIMIT 1"); $query -> execute(array($is));

		return $query -> fetchColumn(); return null;
	}

	function update_data($key,$value,$where,$is)
	{
		global $database;

		$table = get_table($key);

		$query = $database -> prepare("UPDATE " . $table . " SET " . $key . "=? WHERE " . $where . "=?"); $query -> execute(array($value,$is));
	}

	function delete_data($where,$is)
	{
		global $database;

		$table = get_table($where);

		$query = $database -> prepare("DELETE FROM " . $table . " WHERE " . $where . "=?"); $query -> execute(array($is));
	}

?>