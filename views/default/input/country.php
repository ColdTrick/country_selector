<?php 
	/**
	* Country Selector
	* 
	* Input view for Country selection 
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
	<option value=""><?php echo elgg_echo("country_selector:input:country:choose"); ?></option>
	<option value="AF" <?php if(strtoupper($value) == "AF") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:af"); ?></option>
	<option value="AL" <?php if(strtoupper($value) == "AL") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:al"); ?></option>
	<option value="DZ" <?php if(strtoupper($value) == "DZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:dz"); ?></option>
	<option value="AS" <?php if(strtoupper($value) == "AS") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:as"); ?></option>
	<option value="AD" <?php if(strtoupper($value) == "AD") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ad"); ?></option>
	<option value="AO" <?php if(strtoupper($value) == "AO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ao"); ?></option>
	<option value="AI" <?php if(strtoupper($value) == "AI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ai"); ?></option>
	<option value="AQ" <?php if(strtoupper($value) == "AQ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:aq"); ?></option>
	<option value="AG" <?php if(strtoupper($value) == "AG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ag"); ?></option>
	<option value="AR" <?php if(strtoupper($value) == "AR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ar"); ?></option>
	<option value="AM" <?php if(strtoupper($value) == "AM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:am"); ?></option>
	<option value="AW" <?php if(strtoupper($value) == "AW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:aw"); ?></option>
	<option value="AU" <?php if(strtoupper($value) == "AU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:au"); ?></option>
	<option value="AT" <?php if(strtoupper($value) == "AT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:at"); ?></option>
	<option value="AZ" <?php if(strtoupper($value) == "AZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:az"); ?></option>
	<option value="BS" <?php if(strtoupper($value) == "BS") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bs"); ?></option>
	<option value="BH" <?php if(strtoupper($value) == "BH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bh"); ?></option>
	<option value="BD" <?php if(strtoupper($value) == "BD") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bd"); ?></option>
	<option value="BB" <?php if(strtoupper($value) == "BB") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bb"); ?></option>
	<option value="BY" <?php if(strtoupper($value) == "BY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:by"); ?></option>
	<option value="BE" <?php if(strtoupper($value) == "BE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:be"); ?></option>
	<option value="BZ" <?php if(strtoupper($value) == "BZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bz"); ?></option>
	<option value="BJ" <?php if(strtoupper($value) == "BJ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bj"); ?></option>
	<option value="BM" <?php if(strtoupper($value) == "BM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bm"); ?></option>
	<option value="BT" <?php if(strtoupper($value) == "BT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bt"); ?></option>
	<option value="BO" <?php if(strtoupper($value) == "BO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bo"); ?></option>
	<option value="BA" <?php if(strtoupper($value) == "BA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ba"); ?></option>
	<option value="BW" <?php if(strtoupper($value) == "BW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bw"); ?></option>
	<option value="BV" <?php if(strtoupper($value) == "BV") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bv"); ?></option>
	<option value="BR" <?php if(strtoupper($value) == "BR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:br"); ?></option>
	<option value="IO" <?php if(strtoupper($value) == "IO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:io"); ?></option>
	<option value="BN" <?php if(strtoupper($value) == "BN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bn"); ?></option>
	<option value="BG" <?php if(strtoupper($value) == "BG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bg"); ?></option>
	<option value="BF" <?php if(strtoupper($value) == "BF") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bf"); ?></option>
	<option value="BI" <?php if(strtoupper($value) == "BI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:bi"); ?></option>
	<option value="KH" <?php if(strtoupper($value) == "KH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:kh"); ?></option>
	<option value="CM" <?php if(strtoupper($value) == "CM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cm"); ?></option>
	<option value="CA" <?php if(strtoupper($value) == "CA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ca"); ?></option>
	<option value="CV" <?php if(strtoupper($value) == "CV") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cv"); ?></option>
	<option value="KY" <?php if(strtoupper($value) == "KY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ky"); ?></option>
	<option value="CF" <?php if(strtoupper($value) == "CF") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cf"); ?></option>
	<option value="TD" <?php if(strtoupper($value) == "TD") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:td"); ?></option>
	<option value="CL" <?php if(strtoupper($value) == "CL") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cl"); ?></option>
	<option value="CN" <?php if(strtoupper($value) == "CN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cn"); ?></option>
	<option value="CX" <?php if(strtoupper($value) == "CX") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cx"); ?></option>
	<option value="CC" <?php if(strtoupper($value) == "CC") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cc"); ?></option>
	<option value="CO" <?php if(strtoupper($value) == "CO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:co"); ?></option>
	<option value="KM" <?php if(strtoupper($value) == "KM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:km"); ?></option>
	<option value="CG" <?php if(strtoupper($value) == "CG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cg"); ?></option>
	<option value="CK" <?php if(strtoupper($value) == "CK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ck"); ?></option>
	<option value="CR" <?php if(strtoupper($value) == "CR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cr"); ?></option>
	<option value="HR" <?php if(strtoupper($value) == "HR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:hr"); ?></option>
	<option value="CU" <?php if(strtoupper($value) == "CU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cu"); ?></option>
	<option value="CY" <?php if(strtoupper($value) == "CY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cy"); ?></option>
	<option value="CZ" <?php if(strtoupper($value) == "CZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cz"); ?></option>
	<option value="DK" <?php if(strtoupper($value) == "DK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:dk"); ?></option>
	<option value="DJ" <?php if(strtoupper($value) == "DJ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:dj"); ?></option>
	<option value="DM" <?php if(strtoupper($value) == "DM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:dm"); ?></option>
	<option value="DO" <?php if(strtoupper($value) == "DO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:do"); ?></option>
	<option value="TP" <?php if(strtoupper($value) == "TP") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tp"); ?></option>
	<option value="EC" <?php if(strtoupper($value) == "EC") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ec"); ?></option>
	<option value="EG" <?php if(strtoupper($value) == "EG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:eg"); ?></option>
	<option value="SV" <?php if(strtoupper($value) == "SV") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sv"); ?></option>
	<option value="GQ" <?php if(strtoupper($value) == "GQ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gq"); ?></option>
	<option value="ER" <?php if(strtoupper($value) == "ER") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:er"); ?></option>
	<option value="EE" <?php if(strtoupper($value) == "EE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ee"); ?></option>
	<option value="ET" <?php if(strtoupper($value) == "ET") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:et"); ?></option>
	<option value="FK" <?php if(strtoupper($value) == "FK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:fk"); ?></option>
	<option value="FO" <?php if(strtoupper($value) == "FO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:fo"); ?></option>
	<option value="FJ" <?php if(strtoupper($value) == "FJ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:fj"); ?></option>
	<option value="FI" <?php if(strtoupper($value) == "FI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:fi"); ?></option>
	<option value="CS" <?php if(strtoupper($value) == "CS") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:cs"); ?></option>
	<option value="SU" <?php if(strtoupper($value) == "SU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:su"); ?></option>
	<option value="FR" <?php if(strtoupper($value) == "FR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:fr"); ?></option>
	<option value="FX" <?php if(strtoupper($value) == "FX") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:fx"); ?></option>
	<option value="GF" <?php if(strtoupper($value) == "GF") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gf"); ?></option>
	<option value="TF" <?php if(strtoupper($value) == "TF") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tf"); ?></option>
	<option value="GA" <?php if(strtoupper($value) == "GA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ga"); ?></option>
	<option value="GM" <?php if(strtoupper($value) == "GM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gm"); ?></option>
	<option value="GE" <?php if(strtoupper($value) == "GE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ge"); ?></option>
	<option value="DE" <?php if(strtoupper($value) == "DE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:de"); ?></option>
	<option value="GH" <?php if(strtoupper($value) == "GH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gh"); ?></option>
	<option value="GI" <?php if(strtoupper($value) == "GI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gi"); ?></option>
	<option value="GB" <?php if(strtoupper($value) == "GB") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gb"); ?></option>
	<option value="GR" <?php if(strtoupper($value) == "GR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gr"); ?></option>
	<option value="GL" <?php if(strtoupper($value) == "GL") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gl"); ?></option>
	<option value="GD" <?php if(strtoupper($value) == "GD") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gd"); ?></option>
	<option value="GP" <?php if(strtoupper($value) == "GP") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gp"); ?></option>
	<option value="GU" <?php if(strtoupper($value) == "GU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gu"); ?></option>
	<option value="GT" <?php if(strtoupper($value) == "GT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gt"); ?></option>
	<option value="GN" <?php if(strtoupper($value) == "GN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gn"); ?></option>
	<option value="GW" <?php if(strtoupper($value) == "GW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gw"); ?></option>
	<option value="GY" <?php if(strtoupper($value) == "GY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gy"); ?></option>
	<option value="HT" <?php if(strtoupper($value) == "HT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ht"); ?></option>
	<option value="HM" <?php if(strtoupper($value) == "HM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:hm"); ?></option>
	<option value="HN" <?php if(strtoupper($value) == "HN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:hn"); ?></option>
	<option value="HK" <?php if(strtoupper($value) == "HK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:hk"); ?></option>
	<option value="HU" <?php if(strtoupper($value) == "HU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:hu"); ?></option>
	<option value="IS" <?php if(strtoupper($value) == "IS") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:is"); ?></option>
	<option value="IN" <?php if(strtoupper($value) == "IN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:in"); ?></option>
	<option value="ID" <?php if(strtoupper($value) == "ID") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:id"); ?></option>
	<option value="INT" <?php if(strtoupper($value) == "INT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:int"); ?></option>
	<option value="IR" <?php if(strtoupper($value) == "IR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ir"); ?></option>
	<option value="IQ" <?php if(strtoupper($value) == "IQ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:iq"); ?></option>
	<option value="IE" <?php if(strtoupper($value) == "IE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ie"); ?></option>
	<option value="IL" <?php if(strtoupper($value) == "IL") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:il"); ?></option>
	<option value="IT" <?php if(strtoupper($value) == "IT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:it"); ?></option>
	<option value="CI" <?php if(strtoupper($value) == "CI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ci"); ?></option>
	<option value="JM" <?php if(strtoupper($value) == "JM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:jm"); ?></option>
	<option value="JP" <?php if(strtoupper($value) == "JP") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:jp"); ?></option>
	<option value="JO" <?php if(strtoupper($value) == "JO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:jo"); ?></option>
	<option value="KZ" <?php if(strtoupper($value) == "KZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:kz"); ?></option>
	<option value="KE" <?php if(strtoupper($value) == "KE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ke"); ?></option>
	<option value="KI" <?php if(strtoupper($value) == "KI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ki"); ?></option>
	<option value="KW" <?php if(strtoupper($value) == "KW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:kw"); ?></option>
	<option value="KG" <?php if(strtoupper($value) == "KG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:kg"); ?></option>
	<option value="LA" <?php if(strtoupper($value) == "LA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:la"); ?></option>
	<option value="LV" <?php if(strtoupper($value) == "LV") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:lv"); ?></option>
	<option value="LB" <?php if(strtoupper($value) == "LB") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:lb"); ?></option>
	<option value="LS" <?php if(strtoupper($value) == "LS") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ls"); ?></option>
	<option value="LR" <?php if(strtoupper($value) == "LR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:lr"); ?></option>
	<option value="LY" <?php if(strtoupper($value) == "LY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ly"); ?></option>
	<option value="LI" <?php if(strtoupper($value) == "LI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:li"); ?></option>
	<option value="LT" <?php if(strtoupper($value) == "LT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:lt"); ?></option>
	<option value="LU" <?php if(strtoupper($value) == "LU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:lu"); ?></option>
	<option value="MO" <?php if(strtoupper($value) == "MO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mo"); ?></option>
	<option value="MK" <?php if(strtoupper($value) == "MK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mk"); ?></option>
	<option value="MG" <?php if(strtoupper($value) == "MG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mg"); ?></option>
	<option value="MW" <?php if(strtoupper($value) == "MW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mw"); ?></option>
	<option value="MY" <?php if(strtoupper($value) == "MY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:my"); ?></option>
	<option value="MV" <?php if(strtoupper($value) == "MV") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mv"); ?></option>
	<option value="ML" <?php if(strtoupper($value) == "ML") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ml"); ?></option>
	<option value="MT" <?php if(strtoupper($value) == "MT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mt"); ?></option>
	<option value="MH" <?php if(strtoupper($value) == "MH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mh"); ?></option>
	<option value="MQ" <?php if(strtoupper($value) == "MQ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mq"); ?></option>
	<option value="MR" <?php if(strtoupper($value) == "MR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mr"); ?></option>
	<option value="MU" <?php if(strtoupper($value) == "MU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mu"); ?></option>
	<option value="YT" <?php if(strtoupper($value) == "YT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:yt"); ?></option>
	<option value="MX" <?php if(strtoupper($value) == "MX") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mx"); ?></option>
	<option value="FM" <?php if(strtoupper($value) == "FM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:fm"); ?></option>
	<option value="MD" <?php if(strtoupper($value) == "MD") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:md"); ?></option>
	<option value="MC" <?php if(strtoupper($value) == "MC") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mc"); ?></option>
	<option value="MN" <?php if(strtoupper($value) == "MN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mn"); ?></option>
	<option value="MS" <?php if(strtoupper($value) == "MS") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ms"); ?></option>
	<option value="MA" <?php if(strtoupper($value) == "MA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ma"); ?></option>
	<option value="MZ" <?php if(strtoupper($value) == "MZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mz"); ?></option>
	<option value="MM" <?php if(strtoupper($value) == "MM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mm"); ?></option>
	<option value="NA" <?php if(strtoupper($value) == "NA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:na"); ?></option>
	<option value="NR" <?php if(strtoupper($value) == "NR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:nr"); ?></option>
	<option value="NP" <?php if(strtoupper($value) == "NP") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:np"); ?></option>
	<option value="NL" <?php if(strtoupper($value) == "NL") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:nl"); ?></option>
	<option value="AN" <?php if(strtoupper($value) == "AN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:an"); ?></option>
	<option value="NT" <?php if(strtoupper($value) == "NT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:nt"); ?></option>
	<option value="NC" <?php if(strtoupper($value) == "NC") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:nc"); ?></option>
	<option value="NZ" <?php if(strtoupper($value) == "NZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:nz"); ?></option>
	<option value="NI" <?php if(strtoupper($value) == "NI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ni"); ?></option>
	<option value="NE" <?php if(strtoupper($value) == "NE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ne"); ?></option>
	<option value="NG" <?php if(strtoupper($value) == "NG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ng"); ?></option>
	<option value="NU" <?php if(strtoupper($value) == "NU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:nu"); ?></option>
	<option value="NF" <?php if(strtoupper($value) == "NG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:nf"); ?></option>
	<option value="KP" <?php if(strtoupper($value) == "KP") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:kp"); ?></option>
	<option value="MP" <?php if(strtoupper($value) == "MP") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mp"); ?></option>
	<option value="NO" <?php if(strtoupper($value) == "NO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:no"); ?></option>
	<option value="OM" <?php if(strtoupper($value) == "OM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:om"); ?></option>
	<option value="PK" <?php if(strtoupper($value) == "PK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pk"); ?></option>
	<option value="PW" <?php if(strtoupper($value) == "PW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pw"); ?></option>
	<option value="PA" <?php if(strtoupper($value) == "PA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pa"); ?></option>
	<option value="PG" <?php if(strtoupper($value) == "PG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pg"); ?></option>
	<option value="PY" <?php if(strtoupper($value) == "PY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:py"); ?></option>
	<option value="PE" <?php if(strtoupper($value) == "PE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pe"); ?></option>
	<option value="PH" <?php if(strtoupper($value) == "PH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ph"); ?></option>
	<option value="PN" <?php if(strtoupper($value) == "PN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pn"); ?></option>
	<option value="PL" <?php if(strtoupper($value) == "PL") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pl"); ?></option>
	<option value="PF" <?php if(strtoupper($value) == "PF") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pf"); ?></option>
	<option value="PT" <?php if(strtoupper($value) == "PT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pt"); ?></option>
	<option value="PR" <?php if(strtoupper($value) == "PR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pr"); ?></option>
	<option value="QA" <?php if(strtoupper($value) == "QA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:qa"); ?></option>
	<option value="RE" <?php if(strtoupper($value) == "RE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:re"); ?></option>
	<option value="RO" <?php if(strtoupper($value) == "RO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ro"); ?></option>
	<option value="RU" <?php if(strtoupper($value) == "RU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ru"); ?></option>
	<option value="RW" <?php if(strtoupper($value) == "RW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:rw"); ?></option>
	<option value="GS" <?php if(strtoupper($value) == "GS") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gs"); ?></option>
	<option value="SH" <?php if(strtoupper($value) == "SH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sh"); ?></option>
	<option value="KN" <?php if(strtoupper($value) == "KN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:kn"); ?></option>
	<option value="LC" <?php if(strtoupper($value) == "LC") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:lc"); ?></option>
	<option value="PM" <?php if(strtoupper($value) == "PM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:pm"); ?></option>
	<option value="ST" <?php if(strtoupper($value) == "ST") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:st"); ?></option>
	<option value="VC" <?php if(strtoupper($value) == "VC") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:vc"); ?></option>
	<option value="WS" <?php if(strtoupper($value) == "WS") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ws"); ?></option>
	<option value="SM" <?php if(strtoupper($value) == "SM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sm"); ?></option>
	<option value="SA" <?php if(strtoupper($value) == "SA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sa"); ?></option>
	<option value="SN" <?php if(strtoupper($value) == "SN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sn"); ?></option>
	<option value="SC" <?php if(strtoupper($value) == "SC") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sc"); ?></option>
	<option value="SL" <?php if(strtoupper($value) == "SL") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sl"); ?></option>
	<option value="SG" <?php if(strtoupper($value) == "SG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sg"); ?></option>
	<option value="SK" <?php if(strtoupper($value) == "SK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sk"); ?></option>
	<option value="SI" <?php if(strtoupper($value) == "SI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:si"); ?></option>
	<option value="SB" <?php if(strtoupper($value) == "SB") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sb"); ?></option>
	<option value="SO" <?php if(strtoupper($value) == "SO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:so"); ?></option>
	<option value="ZA" <?php if(strtoupper($value) == "ZA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:za"); ?></option>
	<option value="KR" <?php if(strtoupper($value) == "KR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:kr"); ?></option>
	<option value="ES" <?php if(strtoupper($value) == "ES") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:es"); ?></option>
	<option value="LK" <?php if(strtoupper($value) == "LK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:lk"); ?></option>
	<option value="SD" <?php if(strtoupper($value) == "SD") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sd"); ?></option>
	<option value="SR" <?php if(strtoupper($value) == "SR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sr"); ?></option>
	<option value="SJ" <?php if(strtoupper($value) == "SJ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sj"); ?></option>
	<option value="SZ" <?php if(strtoupper($value) == "SZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sz"); ?></option>
	<option value="SE" <?php if(strtoupper($value) == "SE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:se"); ?></option>
	<option value="CH" <?php if(strtoupper($value) == "CH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ch"); ?></option>
	<option value="SY" <?php if(strtoupper($value) == "SY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:sy"); ?></option>
	<option value="TJ" <?php if(strtoupper($value) == "TJ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tj"); ?></option>
	<option value="TW" <?php if(strtoupper($value) == "TW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tw"); ?></option>
	<option value="TZ" <?php if(strtoupper($value) == "TZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tz"); ?></option>
	<option value="TH" <?php if(strtoupper($value) == "TH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:th"); ?></option>
	<option value="TG" <?php if(strtoupper($value) == "TG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tg"); ?></option>
	<option value="TK" <?php if(strtoupper($value) == "TK") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tk"); ?></option>
	<option value="TO" <?php if(strtoupper($value) == "TO") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:to"); ?></option>
	<option value="TT" <?php if(strtoupper($value) == "TT") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tt"); ?></option>
	<option value="TN" <?php if(strtoupper($value) == "TN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tn"); ?></option>
	<option value="TR" <?php if(strtoupper($value) == "TR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tr"); ?></option>
	<option value="TM" <?php if(strtoupper($value) == "TM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tm"); ?></option>
	<option value="TC" <?php if(strtoupper($value) == "TC") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tc"); ?></option>
	<option value="TV" <?php if(strtoupper($value) == "TV") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:tv"); ?></option>
	<option value="UG" <?php if(strtoupper($value) == "UG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ug"); ?></option>
	<option value="UA" <?php if(strtoupper($value) == "UA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ua"); ?></option>
	<option value="AE" <?php if(strtoupper($value) == "AE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ae"); ?></option>
	<option value="GB" <?php if(strtoupper($value) == "GB") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:gb"); ?></option>
	<option value="UY" <?php if(strtoupper($value) == "UY") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:uy"); ?></option>
	<option value="MIL" <?php if(strtoupper($value) == "MIL") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:mil"); ?></option>
	<option value="UM" <?php if(strtoupper($value) == "UM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:um"); ?></option>
	<option value="US" <?php if(strtoupper($value) == "US") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:us"); ?></option>
	<option value="UZ" <?php if(strtoupper($value) == "UZ") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:uz"); ?></option>
	<option value="VU" <?php if(strtoupper($value) == "VU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:vu"); ?></option>
	<option value="VA" <?php if(strtoupper($value) == "VA") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:va"); ?></option>
	<option value="VE" <?php if(strtoupper($value) == "VE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ve"); ?></option>
	<option value="VN" <?php if(strtoupper($value) == "VN") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:vn"); ?></option>
	<option value="VG" <?php if(strtoupper($value) == "VG") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:vg"); ?></option>
	<option value="VI" <?php if(strtoupper($value) == "VI") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:vi"); ?></option>
	<option value="WF" <?php if(strtoupper($value) == "WF") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:wf"); ?></option>
	<option value="EH" <?php if(strtoupper($value) == "EH") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:eh"); ?></option>
	<option value="YE" <?php if(strtoupper($value) == "YE") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:ye"); ?></option>
	<option value="YU" <?php if(strtoupper($value) == "YU") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:yu"); ?></option>
	<option value="ZR" <?php if(strtoupper($value) == "ZR") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:zr"); ?></option>
	<option value="ZM" <?php if(strtoupper($value) == "ZM") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:zm"); ?></option>
	<option value="ZW" <?php if(strtoupper($value) == "ZW") echo "selected='selected'"; ?>><?php echo elgg_echo("country_code:zw"); ?></option>
</select>