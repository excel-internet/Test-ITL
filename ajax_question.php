<?php
try {
require_once('admin/includes/config.inc.php');
}
catch(Exception $error) {
print $error->getMessage();
}	

if(isset($_REQUEST['ajax']) && $_REQUEST['ajax']=='yes')
{
	if(isset($_REQUEST['catId']) && $_REQUEST['catId']!='')
	{ 
		$limit = 5;
		$s =$_REQUEST['start'];
 
		$result = mysql_query("SELECT `ID`,`QUESTION` FROM `question`
INNER JOIN  survey_question ON  survey_question.QUESTION_ID = question.ID
 WHERE `CAT_ID`='".$_REQUEST['catId']."' and SURVEY_ID = '".$_REQUEST['surveyid']."' AND question.STATUS='A' ORDER BY QUESTION asc");
		$rows = mysql_num_rows($result);
		$page = floor($rows/$limit);
		if($rows  > 0)
		{
		?>
		<!--<p>Showing: <?=$s+1?> &nbsp;- <?=($rows<$s+$limit)?($rows):($s+$limit)?> of <strong><?=$rows?></strong></p>-->
		<? 		
		$resultQuestion = mysql_query("SELECT `ID`,`QUESTION`,RATING FROM `question`
INNER JOIN  survey_question ON  survey_question.QUESTION_ID = question.ID
 WHERE `CAT_ID`='".$_REQUEST['catId']."' and SURVEY_ID = '".$_REQUEST['surveyid']."' AND question.STATUS='A' ORDER BY QUESTION asc LIMIT $s, $limit");
		while($row=mysql_fetch_array($resultQuestion))
		{?>
		<div class="q_holder"><?php echo stripslashes($row['QUESTION']);?></div>
		<div style="clear:both"></div>
		 <?php if((int)$row['RATING']>0)
		 {
			 $rate = $row['RATING'];
			 $mid = floor($rate/2);
			
				?><table cellspacing="5"><tr><?php
				for($i=1; $i<=$row['RATING']; $i++){?>
				   <td width="40" height="20" align="center" class="radio-bg">
				   <input type="radio" name="<?php echo 'rating_'.$row['ID'];?>" id="<?php echo 'rating_'.$row['ID'];?>" 
				   value="<?php echo $row['ID']."-".$i;?>" <?php if($mid==$i){?>checked="checked"<? }?> /></td>
				<? }
						$prod_id = 'rating_'.$row['ID'];
				   		//array_push($_SESSION['RATE_INFO'],$prod_id);
						array_push($rarry ,$prod_id);
						
						//array_push($arr, $prod_id);
			?><input type="hidden" name="questions[]" value="<?=$row['ID'];?>" /></tr></table>
			<?php }?>
			</td></tr>
			<?php }  ?>
	  <table width="100%" border="1" cellspacing="5" cellpadding="5">
	  <tr>

    <th scope="col">
	<?php if($s+$limit<$rows){?>
		<?php //echo json_encode($rarry, JSON_HEX_QUOT);
				$str = implode(".",$rarry);
			?>
		<?php //print_r($rarry);?>
		<a id="<?=$s+$limit;?>" style="border:1px solid #000; background: #CCCCCC; cursor:pointer; float:right; padding:5px;" onclick="showQuestionFormajax('', '<?=$_REQUEST['catId'];?>','<?php echo $s+$limit;?>','<?=$str;?>','<?=$_REQUEST['surveyid'];?>')">Load more</a>
		<? }?>
	</th>
  </tr>
</table>
<?php if($s+$limit>=$rows){?>
	<table width="100%" border="1" cellspacing="5" cellpadding="5">
 		<tr><td><input type="submit" name="btnSave" class="login_btn" id="btnSave" value="Save" /></td></tr>
	</table>
<? }
} else { echo "false"; }
}
die;
}
?>
