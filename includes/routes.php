<?php 

$routes = array(
				
				//home
				
				array('url'=>'/^\/$/','controller'=>'home','view'=>'home'),
				

				// Gateways
				array('url'=>'/^\/gateways\/?$/'			,'controller'=>'gateways','view'=>'index'),
				array('url'=>'/^\/gateways\/create\/?$/'	,'controller'=>'gateways','view'=>'create'),

				array('url'=>'/^\/log\/?$/'					,'controller'=>'log','view'=>'index'),
				array('url'=>'/^\/log\/create\/?$/'			,'controller'=>'log','view'=>'create'),
				
				);

$common_routes = array("list","new","create","edit","alter","delete");

?>