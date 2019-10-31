<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); 
$get_id=$_GET['id'];
$gett_id=$_SESSION['sid']; ?>
<?php
$tbl_name="forum_question";
$sql=mysql_query("select * from  $tbl_name where ques_id='$get_id'")or die(mysql_error());
$rows=mysql_fetch_array($sql);
?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">	
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>						
							<a href="forum_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
						<br>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By :</strong> <?php echo $rows['name']; ?> </td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE ques_id='$get_id'";
$result2=mysql_query($sql2);
while($rows=mysql_fetch_array($result2)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['ans_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"><?php echo $rows['ans_name']; ?></td>
</tr>
<tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Answer</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['ans_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Date</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['ans_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>
 
<?php
}

$sql3="SELECT view FROM $tbl_name WHERE ques_id='$get_id'";
$result3=mysql_query($sql3);
$rows=mysql_fetch_array($result3);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE ques_id='$get_id'";
$result4=mysql_query($sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE ques_id='$get_id'";
$result5=mysql_query($sql5);
mysql_close();
?>

<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_forum_answer_project.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="ans_answer" cols="45" rows="3" id="ans_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td> 
<td><input name="ques_id" type="hidden" id="ques_id" value="<?php echo $get_id?>"></td>
<td><input name="stu_id" type="hidden" id="stu_id" value="<?php echo $gett_id?>"></td>
<td><button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
<!-- <input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"> --></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

</div>
</div>
</div>
<?php include('footer_project.php'); ?>
</div>
</div>
</div>

</body>
</html>