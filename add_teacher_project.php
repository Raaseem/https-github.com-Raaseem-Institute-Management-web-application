<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php $id_query=mysql_query("select * from tutor ORDER BY tutor_id DESC LIMIT 0,1")or die(mysql_error());
$row=mysql_fetch_array($id_query);
$tutor_id=$row['tutor_id'];
?>

<script>
function formValidation()  
{  
var tutor_id = document.tutor.tut_id; 
var tut_fname = document.tutor.fn;
var tut_lname = document.tutor.ln; 
var no = document.tutor.no;
var street = document.tutor.street;
var city = document.tutor.city;
var mobile  = document.tutor.mobile;
var land  = document.tutor.land;
var email = document.tutor.email;  

if(Tutor_id(tutor_id))  
{ 
if(allLetter(tut_fname))  
{   
if(allLetter(tut_lname))
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
 
function Tutor_id(tutor_id)  
{   
var letters =  /^[t]+[u]+[t]+\d{3}$/; 
if(tutor_id.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Tutor ID should be like tut001');  
tutor_id.focus();  
return false;  
}  
} 
 
function allLetter(tut_fname)  
{   
var letters = /^[A-Za-z]+$/;  
if(tut_fname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Name must have alphabet characters only');  
tut_fname.focus();  
return false;  
}  
}  

function allLetter(tut_lname)  
{   
var letters = /^[A-Za-z]+$/;  
if(tut_lname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Name must have alphabet characters only');  
tut_lname.focus();  
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
 
   var email = document.tutor.email.value;
   atpos = email.indexOf("@");
   dotpos = email.lastIndexOf(".");
   if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length)
   {
       alert("Please enter correct email ID")
       document.tutor.email.focus() ;
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
                            <a href="teacher_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" onSubmit="return formValidation();" name='tutor' method="post" enctype="multipart/form-data" >
                           
								<?php
								$output = str_split($tutor_id, 3);
								$id=$output[1]+1;
								//echo $id;
								?>
						   
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Tutor ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="tut_id" value="<?php echo "tut00" . $id; ?>" required>
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
                                    <label class="control-label" for="inputEmail">Qualification</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="qual" placeholder="Qualification" >
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Basic Salary</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="sal" placeholder="Salary" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Registration Date</label>
                                    <div class="controls">
                                        <input type="date" id="inputEmail" name="regdate" placeholder="dd/mm/yyyy" required>
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
							//Insert into login(user) table
							 if (isset($_POST['save'])) {
								$username = $_POST['tut_id'];
								$password = $_POST['tut_id'];
								$fn = $_POST['fn'];
								$ln = $_POST['ln'];
								
								
                                mysql_query("insert into login (user_id,password,fname,lname)
											values ('$username','$password','$fn','$ln')         
												") or die(mysql_error());
								
							}
							?>
							
                            <?php
							//Insert into tutor table
                            if (isset($_POST['save'])) {
                            
								$tut_id = $_POST['tut_id'];
								$fn = $_POST['fn'];
								$ln = $_POST['ln'];
								$no = $_POST['no'];
								$street = $_POST['street'];
								$city = $_POST['city'];
								$mobile = $_POST['mobile'];
								$land = $_POST['land'];
								$email = $_POST['email'];
								$qual = $_POST['qual'];
								$sal = $_POST['sal'];
								$regdate = $_POST['regdate'];

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								$username = $_POST['tut_id'];
								$password = $_POST['tut_id'];

                                mysql_query("insert into tutor (tutor_id,tut_fname,tut_lname,t_house_no,t_street_name,t_city,t_mobile_no,t_land_no,t_email_id,qualification,basic_sal,reg_date,t_location,username,password)
											values ('$tut_id','$fn','$ln','$no','$street','$city','$mobile','$land','$email','$qual','$sal','$regdate','$location','$username','$password')         
												") or die(mysql_error());
                              //  header('location:teacher_project.php');
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