<?php

class Log extends DatabaseObject{
	
	public $id;
	public $text;

	// não manipuláveis
	// apenas para a visualização
	public $created_at;
	public $updated_at;
	
	protected static $table_name = "log";
	protected static $db_fields = array(	
										"id"					=> INTEGER,
										"text"					=> STRING,
										);
}

?>