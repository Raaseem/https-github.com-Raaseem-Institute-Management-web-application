<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$staff_query=mysql_query("select * from staff where staff_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($staff_query);
?>

<script>
function formValidation()  
{  
var staff_id = document.staff.staff_id; 
var stf_fname = document.staff.fn;
var stf_lname = document.staff.ln; 
var no = document.staff.no;
var street = document.staff.stname;
var city = document.staff.city;
var mobile  = document.staff.mno;
var land  = document.staff.lno;
var email = document.staff.email;  

if(Staff_id(staff_id))  
{ 
if(allLetter(stf_fname))  
{   
if(allLetter(stf_lname))
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
 
function Staff_id(staff_id)  
{   
var letters =  /^[s]+[t]+[f]+\d{3}$/; 
if(staff_id.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Staff ID should be like stf001');  
staff_id.focus();  
return false;  
}  
} 
 
function allLetter(stf_fname)  
{   
var letters = /^[A-Za-z]+$/;  
if(stf_fname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Name must have alphabet characters only');  
stf_fname.focus();  
return false;  
}  
}  

function allLetter(stf_lname)  
{   
var letters = /^[A-Za-z]+$/;  
if(stf_lname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Name must have alphabet characters only');  
stf_lname.focus();  
return false;  
}  
}  

function alphanumeric(no)  
{   
var letters = /^[a-zA-Z0-9\s,'-]*$/;  
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
 
   var email = document.staff.email.value;
   atpos = email.indexOf("@");
   dotpos = email.lastIndexOf(".");
   if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length)
   {
       alert("Please enter correct email ID")
       document.staff.email.focus() ;
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
                            <a href="staff_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" name='staff' method="post" enctype="multipart/form-data" onSubmit="return formValidation();">
							
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Staff ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="staff_id" value="<?php echo $row['staff_id']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">First Name</label>
                                    <div class="controls">
                                        <input type="text" name="fn" id="inputPassword" value="<?php echo $row['stf_fname']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="ln" value="<?php echo $row['stf_lname']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">House No</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="no" value="<?php echo $row['s_house_no']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Street Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="stname" value="<?php echo $row['s_street_name']; ?>" required>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <label class="control-label" for="inputEmail">City</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="city" value="<?php echo $row['s_city']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Mobile NO</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="mno" value="<?php echo $row['s_mobile_no']; ?>" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Land No</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="lno" value="<?php echo $row['s_land_no']; ?>" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Email ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="email" value="<?php echo $row['s_email_id']; ?>" required>
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
                                $staff_id = $_POST['staff_id'];
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
			
			
			mysql_query("update staff set staff_id='$staff_id',stf_fname='$fn',stf_lname='$ln',s_house_no='$no',s_street_name='$stname',
			s_city='$city',s_mobile_no='$mno',s_land_no='$lno',s_email_id='$email',s_location='$location' where staff_id='$get_id'
			")or die(mysql_error());

                              //  header('location:staff_project.php');
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