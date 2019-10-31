<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php $id_query=mysql_query("select * from parent ORDER BY parent_id DESC LIMIT 0,1")or die(mysql_error());
$row=mysql_fetch_array($id_query);
$parent_id=$row['parent_id'];
?>

<script>
function formValidation()  
{  
var par_id = document.parent.par_id; 
var par_fname = document.parent.fn;
var par_lname = document.parent.ln; 
var no = document.parent.no;
var street = document.parent.street;
var city = document.parent.city;
var mobile  = document.parent.mobile;
var land  = document.parent.land;
var email = document.parent.email;  

if(parent_id(par_id))  
{ 
if(allLetter(par_fname))  
{   
if(allLetter(par_lname))
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
 
function parent_id(par_id)  
{   
var letters =  /^[p]+[a]+[r]+\d{3}$/; 
if(par_id.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Parent ID should be like par001');  
par_id.focus();  
return false;  
}  
} 
 
function allLetter(par_fname)  
{   
var letters = /^[A-Za-z]+$/;  
if(par_fname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Firstname must have alphabet characters only');  
par_fname.focus();  
return false;  
}  
}  

function allLetter(par_lname)  
{   
var letters = /^[A-Za-z]+$/;  
if(par_lname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Lastname must have alphabet characters only');  
par_lname.focus();  
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
 
   var email = document.parent.email.value;
   atpos = email.indexOf("@");
   dotpos = email.lastIndexOf(".");
   if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length)
   {
       alert("Please enter correct email ID")
       document.parent.email.focus() ;
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
                            <a href="parent_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <form class="form-horizontal" name='parent' method="post" enctype="multipart/form-data" onSubmit="return formValidation();">
                           
								<?php
								$output = str_split($parent_id, 3);
								$id=$output[1]+1;
								// echo $id;
								?>
						   
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Parent ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="par_id" value="<?php echo "par00" . $id; ?>" required>
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
								//Insert details into login(user) table
								if (isset($_POST['save'])) {
								$username = $_POST['par_id'];
								$password = $_POST['par_id'];
								$fn = $_POST['fn'];
								$ln = $_POST['ln'];
								
                                $addQuery = mysql_query("insert into login (user_id,password,fname,lname)
                                                values ('$username','$password','$fn','$ln') ") or die(mysql_error());
                                                                  
                                if($addQuery){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully Added</strong></div>
                                    <?php
                                }
								
							}
							?>
							
                            <?php
								//Insert details into parent table
                            if (isset($_POST['save'])) {
                            
								$par_id = $_POST['par_id'];
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
								
								$username = $_POST['par_id'];
								$password = $_POST['par_id'];

                                mysql_query("insert into parent (parent_id,par_fname,par_lname,p_house_no,p_street_name,p_city,p_mobile_no,p_land_no,p_email_id,p_location,username,password)
												values ('$par_id','$fn','$ln','$no','$street','$city','$mobile','$land','$email','$location','$username','$password')         
									") or die(mysql_error());
                               // header('location:parent_project.php');
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