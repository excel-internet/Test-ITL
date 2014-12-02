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

<div class="msg_box1"><h2 class="db_headingw">Create Your Institute's Profile</h2>
<h2>Fill the form below to get registerd your institute. | Already Registered. <a href="inst_login.php" style="color:#FFFFFF;">Login Here.</a></h2>
</div>
</br>
<?php
if($_GET[c]!="")
{
  echo "<strong><label class='errorVal'>".$_GET[c]."</label></strong><br /> <br /> "; } ?>
<h1 class="page-heading">Add Institute</h1>
<form name="frmIns" id="frmIns" action="do_add_institute1.php" method="post" enctype="multipart/form-data">
<table  border="0" cellspacing="0"  cellpadding="5"   width="100%">

<tr>
<td><script src="ajax_req.js" type="text/javascript"></script>
<label class="left user_field" id="l_NAME">Category<span class="req">*</span>: </label>
<select name="CAT_ID"  onChange="htmlData('state_cat.php', 'ch1='+this.value)" id="CAT_ID"  class="required text_sex" required>
<option value="" selected="selected">Select Category</option>
<?php
$result=mysql_query("Select * from category where TYPE='I' AND STATUS = 'A' and PARENT_ID !='0' order by  SEQ,NAME");
while($row=mysql_fetch_array($result)){?>
<option value="<?php echo $row['CAT_ID'];?>" <?php if($aRec['CAT_ID']==$row['CAT_ID']) echo "selected";?>><?php echo $row['NAME'];?></option>
<?php } ?>
</select></td>

<td width="44%" rowspan="17" valign="top"><h2 class="db_heading">Benefits to Institutes Management</h2><br />
    <ul style=" margin-left:10px; font-size:16px; padding-left:10px; line-height:28px;">
    <li>Get you Institute rated by the actual users ( Students and Parents, Teachers, Alumni )</li>
    <li>Motivate your Students, Parents, Teachers and alumni to Rate Your Institute</li>
    <li>Helps  in your admission process</li>
    <li>Read All comments Written about your Institute</li>
    <li>Reply to those comments which you feel require your point of views</li>
  <li>Use ratings in your Future Communications</li>
</ul></td>

</tr>
<script src="ajax_req.js" type="text/javascript"></script>

<!-- <tr><td>   <div id="txtResult9"></div></td></tr>-->
<tr><td>   <div id="txtResult"></div></td></tr>

<tr><td><div id="txtCity">
<label class="left user_field">Select District : </label>
<select class="text_sex" ><option value="">Select District </option></select>

</div></td></tr>

<tr><td><div id="txtInst">
<label class="left user_field">Select Institute: </label>
<select class="text_sex" ><option value="">Select Institute</option></select>
</div></td></tr>

<tr><td width="56%"> <label class="left user_field" id="l_NAME">LOCATION<span class="req">*</span>: </label><input name="LOCATION" class="r_username" type="text"   required/></td>
 <!-- <td width="44%" rowspan="17" valign="top"><h2 class="db_heading">Benefits to Institute’s Management</h2><br />
    <ul style=" margin-left:10px; font-size:16px; padding-left:10px; line-height:28px;">
    <li>Get you Institute rated by the actual users ( Students and Parents, Teachers, Alumni )</li>
    <li>Motivate your Students, Parents, Teachers and alumni to Rate Your Institute</li>
    <li>Helps  in your admission process</li>
    <li>Read All comments Written about your Institute</li>
    <li>Reply to those comments which you feel require your point of views</li>
  <li>Use ratings in your Future Communications</li>
</ul></td>-->
</tr>
<tr><td><label class="left user_field" id="l_NAME">Email<span class="req">*</span>: </label>
<input name="EMAIL" id="EMAIL" class="r_username"  type="text"  required="required"/></td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Address1<span class="req">*</span>: </label><textarea id="ADDRESS1"  class="r_username" name="ADDRESS1"   required="required" > </textarea> </td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Address2<span class="req">*</span>: </label><textarea id="ADDRESS2" class="r_username" name="ADDRESS2" required="required"  > </textarea> </td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Address3<span class="req">*</span>: </label><textarea id="ADDRESS3" class="r_username" name="ADDRESS3"  required="required"  > </textarea> </td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Phone 1<span class="req">*</span>: </label><input name="PHONE1" id="PHONE1" value="" class="r_username" type="text" required="required" /></td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Phone 2<span class="req">*</span>: </label><input name="PHONE2" id="PHONE2" value="" class="r_username" type="text"  required="required"/></td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">FAX<span class="req">*</span>: </label><input name="FAX" id="FAX" value="" type="text" class="r_username" required="required" /></td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Web Url<span class="req">*</span>: </label><input name="WEB_URL" id="WEB_URL" value="" type="text" class="r_username" required="required" /></td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Form Link<span class="req">*</span>: </label><input name="FORM_LINK" id="FORM_LINK" value="" type="text"  class="r_username"   required="required" /></td>
</tr>
<tr><td><label class="left user_field" id="l_NAME">Page Type<span class="req">*</span>: </label>
<select name="PAGE_TYPE"   id="PAGE_TYPE"  class="required text_sex" required>
<option value="" selected="selected">Select</option>
<option value="Institutional Page" >Institutional Page</option>
<option value="Micro Site" >Micro Site</option></select>
</td>
</tr>  

<!-- ******************************************************* -->
<!-- ******************************************************* -->
<tr><td><label class="left user_field" id="l_NAME">Aff University<span class="req">*</span>: </label><input name="AFF_UNIVERSITY" id="AFF_UNIVERSITY" class="r_username" value="" type="text"  required="required" /></td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Approved By<span class="req">*</span>: </label><input name="APPROVED_BY" id="APPROVED_BY" value="" type="text" class="r_username" required/></td>
  </tr>
<tr><td><label class="left user_field" id="l_NAME">Education Medium<span class="req">*</span>: </label><input name="EDU_MEDIUM" id="EDU_MEDIUM" value="" class="r_username" type="text" required="required" /></td>
  </tr>
 
 <tr>
 
  <td>
 <div  style="margin-left:170px;">
 <?php include('common/recaptcha.php');?>
 </div>
 </td>
 
 </tr>
<tr>
 <td align="center" >
  
<input type="submit" class="btn" value="Submit" name="submit" /></td>
 </tr>
</table>
</form>
<div class="clear"></div>
</div>
<?php include("footer.inc.php") ?>