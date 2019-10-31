<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">

<?php		
$tbl_name="forum_answer";
			
$ques_id=$_POST['ques_id'];
$stu_id=$_POST['stu_id'];

$sql3=mysql_query("select * from  student where stu_id='$stu_id'")or die(mysql_error());
$rows1=mysql_fetch_array($sql3);
$stu_fname = $rows1['stu_fname'];
$stu_lname = $rows1['stu_lname'];
$ans_name = $stu_fname . " " . $stu_lname;

$sql4=mysql_query("select batch_id from  forum_question where ques_id='$ques_id'")or die(mysql_error());
$rows2=mysql_fetch_array($sql4);
$batch_id = $rows2['batch_id'];

// Find highest answer number. 
$sql="SELECT MAX(ans_id) AS Maxa_id FROM $tbl_name WHERE ques_id='$ques_id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 

$ans_answer=$_POST['ans_answer']; 

$datetime=date("d/m/y"); // create date and time

// Insert answer 
$sql2= mysql_query("INSERT INTO $tbl_name(ques_id, ans_id, batch_id,ans_name,ans_answer, ans_datetime)VALUES('$ques_id', '$Max_id', '$batch_id', '$ans_name', '$ans_answer', '$datetime')") or die(mysql_error());
//$result2=mysql_query($sql2);

if($sql2){
echo "Successful<BR>";
echo "<a href='view_forum_project.php?id=".$ques_id."'>View your answer</a>";

// If added new answer, add value +1 in reply column 
$tbl_name2="forum_question";
$sql3=mysql_query("UPDATE $tbl_name2 SET reply='$Max_id' WHERE ques_id='$ques_id'") or die(mysql_error());
//$result3=mysql_query($sql3);

}
else {
echo "ERROR";
}

// Close connection
mysql_close();

?>