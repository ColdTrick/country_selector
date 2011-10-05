<?php 
	/**
	* Country Selector
	* 
	* Input view for Canada or US state selection
	* 
	* @package country_selector
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	* @version 0.1
	*/

	$internalname = $vars["internalname"];
	$internalid = $vars["internalid"];
	$js = $vars["js"];
	$class = $vars["class"];
	$value = $vars["value"]; 
	
	if(empty($class)){
		$class = "input-pulldown";
	}
	
?>
<select id="<?php echo $internalid; ?>" name="<?php echo $internalname; ?>" <?php echo $js; ?> class="<?php echo $class; ?>">
	<option value=""><?php echo elgg_echo("country_selector:input:ca_us_state:choose"); ?></option>
	
	<optgroup label="<?php echo elgg_echo("country_selector:input:ca_us_state:label:canada"); ?>">
		<option value="AB" <?php if(strtoupper($value) == "AB") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ab"); ?></option>
		<option value="BC" <?php if(strtoupper($value) == "BC") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:bc"); ?></option>
		<option value="MB" <?php if(strtoupper($value) == "MB") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:mb"); ?></option>
		<option value="NB" <?php if(strtoupper($value) == "NB") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nb"); ?></option>
		<option value="NF" <?php if(strtoupper($value) == "NF") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nf"); ?></option>
		<option value="NT" <?php if(strtoupper($value) == "NT") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nt"); ?></option>
		<option value="NS" <?php if(strtoupper($value) == "NS") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ns"); ?></option>
		<option value="NU" <?php if(strtoupper($value) == "NU") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nu"); ?></option>
		<option value="ON" <?php if(strtoupper($value) == "ON") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:on"); ?></option>
		<option value="PE" <?php if(strtoupper($value) == "PE") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:pe"); ?></option>
		<option value="QC" <?php if(strtoupper($value) == "QC") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:qc"); ?></option>
		<option value="SK" <?php if(strtoupper($value) == "SK") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:sk"); ?></option>
		<option value="YT" <?php if(strtoupper($value) == "YT") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:yt"); ?></option>
	</optgroup>
				
	<optgroup label="<?php echo elgg_echo("country_selector:input:ca_us_state:label:usa"); ?>">
		<option value="AK" <?php if(strtoupper($value) == "AK") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ak"); ?></option>
		<option value="AL" <?php if(strtoupper($value) == "AL") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:al"); ?></option>
		<option value="AR" <?php if(strtoupper($value) == "AR") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ar"); ?></option>
		<option value="AZ" <?php if(strtoupper($value) == "AZ") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:az"); ?></option>
		<option value="CA" <?php if(strtoupper($value) == "CA") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ca"); ?></option>
		<option value="CO" <?php if(strtoupper($value) == "CO") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:co"); ?></option>
		<option value="CT" <?php if(strtoupper($value) == "CT") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ct"); ?></option>
		<option value="DC" <?php if(strtoupper($value) == "DC") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:dc"); ?></option>
		<option value="DE" <?php if(strtoupper($value) == "DE") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:de"); ?></option>
		<option value="FL" <?php if(strtoupper($value) == "FL") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:fl"); ?></option>
		<option value="GA" <?php if(strtoupper($value) == "GA") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ga"); ?></option>
		<option value="HI" <?php if(strtoupper($value) == "HI") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:hi"); ?></option>
		<option value="IA" <?php if(strtoupper($value) == "IA") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ia"); ?></option>
		<option value="ID" <?php if(strtoupper($value) == "ID") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:id"); ?></option>
		<option value="IL" <?php if(strtoupper($value) == "IL") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:il"); ?></option>
		<option value="IN" <?php if(strtoupper($value) == "IN") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:in"); ?></option>
		<option value="KS" <?php if(strtoupper($value) == "KS") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ks"); ?></option>
		<option value="KY" <?php if(strtoupper($value) == "KY") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ky"); ?></option>
		<option value="LA" <?php if(strtoupper($value) == "LA") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:la"); ?></option>
		<option value="MA" <?php if(strtoupper($value) == "MA") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ma"); ?></option>
		<option value="MD" <?php if(strtoupper($value) == "MD") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:md"); ?></option>
		<option value="ME" <?php if(strtoupper($value) == "ME") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:me"); ?></option>
		<option value="MI" <?php if(strtoupper($value) == "MI") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:mi"); ?></option>
		<option value="MN" <?php if(strtoupper($value) == "MN") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:mn"); ?></option>
		<option value="MO" <?php if(strtoupper($value) == "MO") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:mo"); ?></option>
		<option value="MS" <?php if(strtoupper($value) == "MS") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ms"); ?></option>
		<option value="MT" <?php if(strtoupper($value) == "MT") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:mt"); ?></option>
		<option value="NC" <?php if(strtoupper($value) == "NC") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nc"); ?></option>
		<option value="ND" <?php if(strtoupper($value) == "ND") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nd"); ?></option>
		<option value="NE" <?php if(strtoupper($value) == "NE") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ne"); ?></option>
		<option value="NH" <?php if(strtoupper($value) == "NE") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nh"); ?></option>
		<option value="NJ" <?php if(strtoupper($value) == "NH") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nj"); ?></option>
		<option value="NM" <?php if(strtoupper($value) == "NJ") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nm"); ?></option>
		<option value="NV" <?php if(strtoupper($value) == "NM") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:nv"); ?></option>
		<option value="NY" <?php if(strtoupper($value) == "MY") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ny"); ?></option>
		<option value="OH" <?php if(strtoupper($value) == "OH") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:oh"); ?></option>
		<option value="OK" <?php if(strtoupper($value) == "OK") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ok"); ?></option>
		<option value="OR" <?php if(strtoupper($value) == "OR") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:or"); ?></option>
		<option value="PA" <?php if(strtoupper($value) == "PA") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:pa"); ?></option>
		<option value="PR" <?php if(strtoupper($value) == "PR") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:pr"); ?></option>
		<option value="RI" <?php if(strtoupper($value) == "RI") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ri"); ?></option>
		<option value="SC" <?php if(strtoupper($value) == "SC") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:sc"); ?></option>
		<option value="SD" <?php if(strtoupper($value) == "SD") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:sd"); ?></option>
		<option value="TN" <?php if(strtoupper($value) == "TN") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:tn"); ?></option>
		<option value="TX" <?php if(strtoupper($value) == "TX") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:tx"); ?></option>
		<option value="UT" <?php if(strtoupper($value) == "UT") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:ut"); ?></option>
		<option value="VA" <?php if(strtoupper($value) == "VA") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:va"); ?></option>
		<option value="VT" <?php if(strtoupper($value) == "VT") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:vt"); ?></option>
		<option value="WA" <?php if(strtoupper($value) == "WA") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:wa"); ?></option>
		<option value="WI" <?php if(strtoupper($value) == "WI") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:wi"); ?></option>
		<option value="WV" <?php if(strtoupper($value) == "WV") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:wv"); ?></option>
		<option value="WY" <?php if(strtoupper($value) == "WY") echo "selected='selected'"; ?>><?php echo elgg_echo("state_code:wy"); ?></option>
	</optgroup>
</select>