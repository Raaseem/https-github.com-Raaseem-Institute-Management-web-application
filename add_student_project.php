<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php error_reporting(E_ERROR); ?>
<?php $id_query=mysql_query("select * from student ORDER BY stu_id DESC LIMIT 0,1")or die(mysql_error());
$row=mysql_fetch_array($id_query);
$stu_id=$row['stu_id'];
?>

<script>
function formValidation()  
{  
var student_id = document.student.stu_id; 
var stu_fname = document.student.fn;
var stu_lname = document.student.ln; 
var no = document.student.no;
var street = document.student.street;
var city = document.student.city;
var mobile  = document.student.mobile;
var land  = document.student.land;
var email = document.student.email;  

if(Student_id(student_id))  
{ 
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
}  
return false;  
  
} 
 
function Student_id(student_id)  
{   
var letters =  /^[s]+[t]+[u]+\d{3}$/; 
if(student_id.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Student ID should be like stu001');  
student_id.focus();  
return false;  
}  
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
alert('Name must have alphabet characters only');  
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
alert('Name must have alphabet characters only');  
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
							<a href="admin_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>						
                            <a href="student_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
							<form class="form-horizontal" name='student' method="POST" enctype="multipart/form-data" onSubmit="return formValidation();">
                            
							<strong>Student Registration Form</strong>
							<br><br>
							
								<?php  $get_id=$_GET['id']; ?>									
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Parent ID</label>
                                    <div class="controls">
                                       <input type="text" id="inputEmail" name="par_id" value="<?php echo $get_id; ?>" required>
									   <a href="parent_add_student_project.php" class="btn btn-success"><i class="icon-user icon-large"></i>&nbsp;Parents Details</a>									   
                                    </div>
                                </div>
													
								<?php
								$output = str_split($stu_id, 3);
								$id=$output[1]+1;
								//echo $id;
								?>
							
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Student ID</label>
                                    <div class="controls">
                                        <input type="text" name="stu_id" id="inputEmail" value="<?php echo "stu00" . $id; ?>" required>
                                    </div>
                                </div>
								
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">First Name</label>
                                    <div class="controls">
                                        <input type="text" name="fn" id="inputEmail" placeholder="First Name" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name</label>
                                    <div class="controls">
                                        <input type="text" name="ln" id="inputEmail" placeholder="Last Name" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">House No</label>
                                    <div class="controls">
                                        <input type="text" name="no" id="inputEmail" placeholder="House No" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Street Name</label>
                                    <div class="controls">
                                        <input type="text" name="street" id="inputEmail" placeholder="Street Name" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">City</label>
                                    <div class="controls">
                                    <select name="city" class="span3" >
										<option></option>
                                        <option>Kalpitiya</option>
                                        <option>Puttalam</option>
                                        <option>Anamaduwa</option>
                                        <option>Chilaw</option>
                                        <option>Anuradhapura</option>
										
									</select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Mobile No</label>
                                    <div class="controls">
                                        <input type="text" name="mobile" id="inputEmail" placeholder="0000000000" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Land No</label>
                                    <div class="controls">
                                        <input type="text" name="land" id="inputEmail" placeholder="0000000000" >
                                    </div>
								</div>
     
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Email ID</label>
                                    <div class="controls">
                                        <input type="text" name="email" id="inputEmail" placeholder="email@email.com" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Date Of Birth</label>
                                    <div class="controls">
                                        <input type="date" name="dob" id="inputEmail" placeholder="dd/mm/yyyy" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Registration Date</label>
                                    <div class="controls">
                                        <input type="date" name="reg" id="inputEmail" placeholder="dd/mm/yyyy" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image" class="font" > 
                                    </div>
                                </div>								
								
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                        
								//Insert details to login(user) table
								if (isset($_POST['submit'])) {
								$username = $_POST['stu_id'];
								$password = $_POST['stu_id'];
								$fn = $_POST['fn'];
                                $ln = $_POST['ln'];
								
								mysql_query("insert into login (user_id,password,fname,lname)
												values ('$username','$password','$fn','$ln') ") or die(mysql_error());
						
							  }
                            ?>
									
							<?php
								//Insert details to student table
								if (isset($_POST['submit'])) {
                                $stu_id = $_POST['stu_id'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $no = $_POST['no'];
                                $street = $_POST['street'];
								$city = $_POST['city'];
								$mobile = $_POST['mobile'];
								$land = $_POST['land'];
								$email = $_POST['email'];
								$dob = $_POST['dob'];
								$reg = $_POST['reg'];
								
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								$par_id = $_POST['par_id'];
								$username = $_POST['stu_id'];
								$password = $_POST['stu_id'];
								

                              $sql =   mysql_query("insert into student (stu_id,stu_fname,stu_lname,house_no,street_name,city,mobile_no,land_no,email_id,dob,reg_date,location,parent_id,username,password)
												values ('$stu_id','$fn','$ln','$no','$street','$city','$mobile','$land','$email','$dob','$reg','$location','$par_id','$username','$password') ") or die(mysql_error());
                              //  header('location:student_project.php');
							  
							  if($sql){
                               ?>
                                    <div class="alert alert-info"><strong>Successfully Student Added</strong></div>
                                <?php
							  }
							  else{
                                ?>
                                    <div class="alert alert-info"><strong>Student Detail Didn't Added</strong></div>
                                <?php
							  }
								
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