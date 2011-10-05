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
		
		if(is_plugin_enabled("profile_manager")){
			// default profile options
			$profileoptions = array();
			$profileoptions["show_on_register"] = true;
			$profileoptions["mandatory"] = true;
			$profileoptions["user_editable"] = true;
			$profileoptions["output_as_tags"] = false;
			$profileoptions["admin_only"] = true;
			$profileoptions["simple_search"] = true;
			$profileoptions["advanced_search"] = true;
			
			// default group options
			$groupoptions = array();
			$groupoptions["output_as_tags"] = false;
			$groupoptions["admin_only"] = true;		
			
			// Add profile fields
			add_custom_field_type("custom_profile_field_types", 'country', elgg_echo("country_selector:field_type:country"), $profileoptions);
			add_custom_field_type("custom_profile_field_types", 'ca_us_state', elgg_echo("country_selector:field_type:ca_us_state"), $profileoptions);
			
			// Add group fields
			add_custom_field_type("custom_group_field_types", 'country', elgg_echo("country_selector:field_type:country"), $groupoptions);
			add_custom_field_type("custom_group_field_types", 'ca_us_state', elgg_echo("country_selector:field_type:ca_us_state"), $groupoptions);
			
		}
	}

	// register default events
	register_elgg_event_handler("init", "system", "country_selector_init");

?>