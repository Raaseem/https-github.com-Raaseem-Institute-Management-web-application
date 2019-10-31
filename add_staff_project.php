<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php $id_query=mysql_query("select * from staff ORDER BY staff_id DESC LIMIT 0,1")or die(mysql_error());
$row=mysql_fetch_array($id_query);
$staff_id=$row['staff_id'];
?>

<script>
function formValidation()  
{  
var staff_id = document.staff.staff_id; 
var stf_fname = document.staff.fn;
var stf_lname = document.staff.ln; 
var no = document.staff.no;
var street = document.staff.street;
var city = document.staff.city;
var mobile  = document.staff.mobile;
var land  = document.staff.land;
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
                          	
								<?php
								$output = str_split($staff_id, 3);
								$id=$output[1]+1;
								//echo $id;
								?>
							
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Staff ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="staff_id" value="<?php echo "stf00" . $id; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">First Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="fn" placeholder="First Name" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="ln" placeholder="Last Name" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">House No</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="no" placeholder="House No" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Street Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="street" placeholder="Street Name" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">City</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="city" placeholder="City" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Mobile No</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="mobile" placeholder="0000000000" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Land No</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="land" placeholder="Land No" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Email ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="email" placeholder="email@email.com" required>
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
                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>

                            </form>

							<?php
							//Insert details into login(user)table
							 if (isset($_POST['save'])) {
								$username = $_POST['staff_id'];
								$password = $_POST['staff_id'];
								$fn = $_POST['fn'];
								$ln = $_POST['ln'];
								
								mysql_query("insert into login (user_id,password,fname,lname)
												values ('$username','$password','$fn','$ln')         
										") or die(mysql_error());
								
							}
							?>
							
                            <?php
							//Insert details into admin table
                            if (isset($_POST['save'])) {
                           
								$staff_id = $_POST['staff_id'];
								$fn = $_POST['fn'];
								$ln = $_POST['ln'];
								$no = $_POST['no'];
								$street = $_POST['street'];
								$city = $_POST['city'];
								$mobile = $_POST['mobile'];
								$land = $_POST['land'];
								$email = $_POST['email'];
								

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								$username = $_POST['staff_id'];
								$password = $_POST['staff_id'];
								
                                mysql_query("insert into staff (staff_id,stf_fname,stf_lname,s_house_no,s_street_name,s_city,s_mobile_no,s_land_no,s_email_id,s_location,username,password)
												values ('$staff_id','$fn','$ln','$no','$street','$city','$mobile','$land','$email','$location','$username','$password')         
										") or die(mysql_error());
                             //   header('location:staff_project.php');
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