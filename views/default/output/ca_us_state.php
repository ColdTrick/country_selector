<?php 
	/**
	* Country Selector
	* 
	* Output view of Canada or US State
	* 
	* @package country_selector
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	* @version 0.1
	*/

	echo elgg_echo("state_code:" . strtolower($vars["value"]));
