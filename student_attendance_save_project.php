<?php	
include('header_project.php');

$id=$_POST['selector'];
$batch_id= $_POST['batch_id'];

if ($id == '' ){ 

	header("location: attendance2_project.php");

}

else{
	
	if(isSet($_POST['selector']) && $_POST['selector'])
	{
    foreach($_POST['selector'] as $selector)
    {
        
		$studInfo = mysql_query("SELECT student.stu_id FROM student WHERE student.stu_id= '" . mysql_real_escape_string($selector) . "'") 						
						or die(mysql_error());
		
						$row = mysql_fetch_array($studInfo);
						$stu_id = $row['stu_id'];
						
	mysql_query("insert into student_attendance (stu_id,batch_id,date,status) values ('$stu_id','$batch_id',NOW(),'Present')")or die(mysql_error());
	
}
}
}
header("location: attendance2_project.php");
?>