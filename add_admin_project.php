<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php $id_query=mysql_query("select * from admin ORDER BY admin_id DESC LIMIT 0,1")or die(mysql_error());
$row=mysql_fetch_array($id_query);
$admin_id=$row['admin_id'];
?>

<script>
function formValidation()  
{  
var admin_id = document.admin.admin_id; 
var adm_fname = document.admin.fn;
var adm_lname = document.admin.ln; 
var no = document.admin.no;
var street = document.admin.street;
var city = document.admin.city;
var mobile  = document.admin.mobile;
var land  = document.admin.land;
var email = document.admin.email;  

if(Admin_id(admin_id))  
{ 
if(allLetter(adm_fname))  
{   
if(allLetter(adm_lname))
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
 
function Admin_id(admin_id)  
{   
var letters =  /^[a]+[d]+[m]+\d{3}$/; 
if(admin_id.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Admin ID should be like adm001');  
admin_id.focus();  
return false;  
}  
} 
 
function allLetter(adm_fname)  
{   
var letters = /^[A-Za-z]+$/;  
if(adm_fname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Firstname must have alphabet characters only');  
adm_fname.focus();  
return false;  
}  
}  

function allLetter(adm_lname)  
{   
var letters = /^[A-Za-z]+$/;  
if(adm_lname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Lastname must have alphabet characters only');  
adm_lname.focus();  
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
 
   var email = document.admin.email.value;
   atpos = email.indexOf("@");
   dotpos = email.lastIndexOf(".");
   if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length)
   {
       alert("Please enter correct email ID")
       document.admin.email.focus() ;
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
                            <a href="admin_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
                            <form class="form-horizontal" name='admin' method="post" enctype="multipart/form-data" onSubmit="return formValidation();">
                           		
								<?php
								$output = str_split($admin_id, 3);
								$id=$output[1]+1;
								//echo $id;
								?>								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Admin ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="admin_id" value="<?php echo "adm00" . $id; ?>" required>
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
								$username = $_POST['admin_id'];
								$password = $_POST['admin_id'];
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
                           
								$admin_id = $_POST['admin_id'];
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
								
								$username = $_POST['admin_id'];
								$password = $_POST['admin_id'];
								
                                mysql_query("insert into admin (admin_id,adm_fname,adm_lname,a_house_no,a_street_name,a_city,a_mobile_no,a_land_no,a_email_id,a_location,username,password)
												values ('$admin_id','$fn','$ln','$no','$street','$city','$mobile','$land','$email','$location','$username','$password')         
										") or die(mysql_error());
                              //  header('location:admin_project.php');
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