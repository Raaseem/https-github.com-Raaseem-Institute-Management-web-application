<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php   session_start();$get_id=$_SESSION['sid']; ?>
<?php
$student_query=mysql_query("select * from student where stu_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($student_query);
?>

<script>
function formValidation()  
{  
var stu_fname = document.student.fn;
var stu_lname = document.student.ln; 
var no = document.student.no;
var street = document.student.stname;
var city = document.student.city;
var mobile  = document.student.mno;
var land  = document.student.lno;
var email = document.student.email;  
 
if(allLetter(stu_fname))  
{   
if(allLetter(stu_lname))
{  
if(alphanumeric(no))  
{
if(alphanumeric(street))  
{
if(alphanumeric(city))  
{
if(ValidatePhone(mobile))  
{
if(ValidatePhone(land))  
{  
if(ValidateEmail(email))  
{
return true;
}
}
}
}
}
}
}
}    
return false;  
  
} 
 
function allLetter(stu_fname)  
{   
var letters = /^[A-Za-z]+$/;  
if(stu_fname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Firstname must have alphabet characters only');  
stu_fname.focus();  
return false;  
}  
}  

function allLetter(stu_lname)  
{   
var letters = /^[A-Za-z]+$/;  
if(stu_lname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Lastname must have alphabet characters only');  
stu_lname.focus();  
return false;  
}  
}  

function alphanumeric(no)  
{   
var letters = /^[0-9\s,'-]*$/;  
if(no.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('House No must have numbers and - only');  
no.focus();  
return false;  
}  
}

function alphanumeric(street)  
{   
var letters = /^[a-zA-Z0-9\s,'-]*$/;  
if(street.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Street Name must have alphabet characters, numbers and - only');  
street.focus();  
return false;  
}  
} 

function alphanumeric(city)  
{   
var letters = /^[a-zA-Z0-9\s,'-]*$/;  
if(city.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('City Name must have alphabet characters, numbers and - only');  
city.focus();  
return false;  
}  
}

//wrong with phone number
function ValidatePhone(mobile)  
{   
var letters = /^\d{10}$/;  
if(mobile.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Phone number must have 10 numbers only');  
mobile.focus();  
return false;  
}  
}

function ValidatePhone(land)  
{   
var letters = /^\d{10}$/;  
if(land.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Phone number must have 10 numbers only');  
land.focus();  
return false;  
}  
}

function ValidateEmail(email){
 
   var email = document.student.email.value;
   atpos = email.indexOf("@");
   dotpos = email.lastIndexOf(".");
   if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length)
   {
       alert("Please enter correct email ID")
       document.student.email.focus() ;
       return false;
   }
   return( true );
}

</script>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
                            <a href="student_stu_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
                            <form class="form-horizontal" name='student' method="post" enctype="multipart/form-data" onSubmit="return formValidation();">
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">First Name</label>
                                    <div class="controls">
                                        <input type="text" name="fn" id="inputPassword" value="<?php echo $row['stu_fname']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="ln" value="<?php echo $row['stu_lname']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">House No</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="no" value="<?php echo $row['house_no']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Street Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="stname" value="<?php echo $row['street_name']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">City</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="city" value="<?php echo $row['city']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Mobile NO</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="mno" value="<?php echo $row['mobile_no']; ?>" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Land No</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="lno" value="<?php echo $row['land_no']; ?>" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Email ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="email" value="<?php echo $row['email_id']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
									<label class="control-label" for="input01">Image:</label>
									<div class="controls">
										<input type="file" name="image" class="font"> 
									</div>
								</div>
		
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            
							</form>

                            <?php
                            if (isset($_POST['save'])) {
                             
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $no = $_POST['no'];
                                $stname = $_POST['stname'];
                                $city = $_POST['city'];
								$mno = $_POST['mno'];
								$lno = $_POST['lno'];
								$email = $_POST['email'];
								

								$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
			
								$sql = mysql_query("update student set stu_fname='$fn',stu_lname='$ln',house_no='$no',street_name='$stname',
											city='$city',mobile_no='$mno',land_no='$lno',email_id='$email',location='$location' where stu_id='$get_id'")or die(mysql_error());
					
								if($sql){
								echo "Successfully updated the details";
								}
								else{
								echo "There may be a mistake, sorry couldn't update the details";
								}
                               // header('location:student_stu_project.php');
                            }
                            ?>
							
                        </div>
                    </div>
                </div>
                <?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>