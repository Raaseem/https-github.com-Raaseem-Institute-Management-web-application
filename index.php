<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="batch_tutor_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
							<br><br>
							
<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$sdb=mysql_select_db("project",$conn) or die(mysql_error());
if(isset($_POST['submit'])!=""){
$name=$_FILES['photo']['name'];
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];
$temp=$_FILES['photo']['tmp_name'];
//$caption1=$_POST['caption'];
//$link=$_POST['link'];

move_uploaded_file($temp,"files/".$name);
$insert=mysql_query("insert into upload(name,batch_id)values('$name','$get_id')");
if($insert){
//header("location:index.php");
echo 'successfully uploaded';
}
else{
die(mysql_error());
}
}
?>

<form enctype="multipart/form-data" action="" name="form" method="post">

<div class="control-group">
<label class="control-label" for="inputEmail">Upload File</label>
<div class="controls">
<input type="file" name="photo" id="photo" >
</div>
</div>

<div class="control-group">
<div class="controls">
<input type="submit" name="submit" id="submit" value="submit" class="btn btn-info">
</div>				  
</div>

</form>

</div>
</div>
</div>
<?php include('footer_project.php'); ?>
</div>
</div>
</div>

</body>
</html>