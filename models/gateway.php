<?php

class Gateway extends DatabaseObject{
	
	public $id;
	public $url;

	// não manipuláveis
	// apenas para a visualização
	public $created_at;
	public $updated_at;
	
	protected static $table_name = "gateways";
	protected static $db_fields = array(	
										"id"					=> INTEGER,
										"url"					=> STRING,
										);
}

?>