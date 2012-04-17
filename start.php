<?php 
	/**
	* Country Selector
	* 
	* Main init file
	* 
	* @package country_selector
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	* @version 0.1
	*/

	function country_selector_init(){
		
		if(elgg_is_active_plugin("profile_manager")){
			// default profile options
			$profileoptions = array(
				"show_on_register" => true,
				"mandatory" => true,
				"user_editable" => true,
				"output_as_tags" => false,
				"admin_only" => true,
				"simple_search" => true,
				"advanced_search" => true
			);
			
			// default group options
			$groupoptions = array(
				"output_as_tags" => false,
				"admin_only" => true
			);		
			
			// Add profile fields
			add_custom_field_type("custom_profile_field_types", 'country', elgg_echo("country_selector:field_type:country"), $profileoptions);
			add_custom_field_type("custom_profile_field_types", 'ca_us_state', elgg_echo("country_selector:field_type:ca_us_state"), $profileoptions);
			
			// Add group fields
			add_custom_field_type("custom_group_field_types", 'country', elgg_echo("country_selector:field_type:country"), $groupoptions);
			add_custom_field_type("custom_group_field_types", 'ca_us_state', elgg_echo("country_selector:field_type:ca_us_state"), $groupoptions);
			
		}
	}

	// register default events
	elgg_register_event_handler("init", "system", "country_selector_init");
