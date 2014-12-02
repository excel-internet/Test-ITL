<?php
try {
require_once('admin/includes/config.inc.php');
    }
catch(Exception $error) {
print $error->getMessage();
}
?>
<?php include("header.inc.php") ?> 
<div class="content">
<h1 class="page-heading">Add New Institute </h1>
<form name="frmIns" id="frmIns" action="do_add_institute1.php" method="post" enctype="multipart/form-data">
<table  border="0" cellspacing="0"  cellpadding="5"   width="100%">
<tr><td><label class="left user_field">Select Category<span class="req">*</span>: </label><select  class="text_sex" name="cid" id="cid"  >
<!--<option selected="selected" value="" >Select Category</option>-->
<?
    $ins = explode("-", $_GET[c]);
	$qr = "select * from  category where STATUS='A' AND CAT_ID='$ins[0]' and PARENT_ID!=0 and  TYPE = 'I' order by NAME ";
	$rr = mysql_query($qr) or die(mysql_error());
	while($ar = mysql_fetch_array($rr))
	{
	$nam=ucwords(strtolower($ar['NAME']));
    echo "<option value=\"$ar[CAT_CODE]\">$nam</option>";
	}
?>
</select>
</td></tr>
<tr><td><? $qpg = "select DISTINCT STATE_ID  from institute ";
	$rpg = mysql_query($qpg) or die(mysql_error());
	$rowsg=mysql_num_rows($rpg);
	 
 	echo "<label class=\"left user_field\">Select State : </label><select    onChange=\"htmlData3('sub_cat1.php', 'ch='+this.value)\"  class=\"required text_sex\"  name=\"sid\" id=\"sid\"  >
	";
	
	$qpg1 = "select * from geo_states where sta_id = '$ins[1]'  order by name";
	$rpg1 = mysql_query($qpg1) or die(mysql_error());
	$apg1 = mysql_fetch_array($rpg1);
	
    echo "<option value=\"$apg1[sta_id]-$ins[2]\">$apg1[name]</option>";
    
	echo "</select>";?>
	
	</td></tr>
    <tr><td>
<script src="ajax_req.js" type="text/javascript"></script>
<!--<label class="left user_field">Select District <span class="req">*</span>: </label><select  class="required text_sex"  name="cn" id="cn"  >
<option value="">Select District</option>
--><?php  $qpg3 = "select * from city_list where city_name = '$ins[2]' ORDER BY city_name";
	$rpg3 = mysql_query($qpg3) or die(mysql_error());
	
	 
 	echo '<label class="left user_field">Select District : </label> <select class= "text_sex"  name="cn"  required>'; 
	
	while($apg3 = mysql_fetch_array($rpg3))
	{
    echo "<option value=\"$apg3[city_name]\">$apg3[city_name]</option>";
	}

 echo "</select>  ";

?>

    </td></tr>
    <tr>

<td><label class="left user_field">Name<span class="req">*</span>:</label> <input  type="text" name="NAME" id="name"  class="required text_sex"/><br /></td></tr>
<tr><td><label class="left user_field" id="l_NAME">Approved By<span class="req">*</span>: </label><select name="APPROVED_BY"   id="APPROVED_BY"  class="r_username" required>
<option value="" selected="selected">Select</option>
<option value="Institutional Page" >UGC</option>
<option value="Micro Site" >AICTE</option></select>
</td>
</tr>

<tr>
<td><input style="background-color:#0371cb; color:#FFFFFF; font-size:18px; padding:10px 20px;"   type="submit" name="submit"  onClick="validate()"  value="Submit" /></td></tr>
</table></form></div>
