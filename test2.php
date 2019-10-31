<?php include('header_project.php'); ?>
<?php session_start(); 
$get_id=$_SESSION['sid']; ?>


<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.batch_id.options[form.Batch_id.options.selectedIndex].value;
self.location='test2.php?batch_id=' + val ;
}

</script>

<body>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">

<?Php

@$batch_id=$_GET['batch_id']; // Use this line or below line if register_global is off
if(strlen($batch_id) > 0 and !is_numeric($batch_id)){ // to check if $cat is numeric data or not. 
echo "Data Error";
exit;
}



///////// Getting the data from Mysql table for first list box//////////
$quer2="SELECT batch_id FROM student_batch,student where student_batch.stu_id=student.stu_id and student.stu_id=$get_id "; 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
if(isset($batch_id) and strlen($batch_id) > 0){
$quer="SELECT DISTINCT test_no FROM mcq_question where batch_id=$batch_id "; 
}else{$quer="SELECT DISTINCT test_no FROM mcq_question order by test_no"; } 
////////// end of query for second subcategory drop down list box ///////////////////////////

echo "<form method=post name=f1 action='dd-check.php'>";
/// Add your form processing page address to action in above line. Example  action=dd-check.php////
//////////        Starting of first drop downlist /////////
echo "<select name='batch_id' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
foreach (($quer2) as $noticia2) {
if($noticia2['batch_id']==@$batch_id){echo "<option selected value='$noticia2[batch_id]'></option>"."<BR>";}
else{echo  "<option value='$noticia2[batch_id]'></option>";}
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////

//////////        Starting of second drop downlist /////////
echo "<select name='subcat'><option value=''>Select one</option>";
foreach (($quer) as $noticia) {
echo  "<option value='$noticia[test_no]'>$noticia[test_no]</option>";
}
echo "</select>";
//////////////////  This will end the second drop down list ///////////
//// Add your other form fields as needed here/////
echo "<input type=submit value=Submit>";
echo "</form>";
?>
<br><br>

</body>

</html>
