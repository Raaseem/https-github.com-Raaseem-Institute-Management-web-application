<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); 
$get_id=$_SESSION['sid'];
?>

<script>
var total=0;

function fnRadio1(){
total=total+1;
}

function fnRadio2(){
total=total+2;
}

function fnRadio3(){
total=total+3;
}

function fnRadio4(){
total=total+4;
}

function fn5(){
//alert(total);
total=(total/40) * 100
document.getElementById('viewResult').value=total;
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
						 <a href="student_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
								 <form class="form-horizontal" method="POST" action="feedback_save_project.php">
								 
								 <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Feed Back Form</strong>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls">
                                       <select name="batch_id" class="span2" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select batch_id from student_batch where stu_id='$get_id'");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['batch_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Year</label>
									<div class="controls">
										<select name="year" class="span2" >
										<option selected="selected"></option>
										<option>2007</option>
										<option>2008</option>
										<option>2009</option>
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
										<option>2019</option>
										<option>2020</option>	
										</select>
									</div>
								</div>
							
                            <table align="center" border="1" cellpadding="3" cellspacing="0" >                              
								
                                <thead>
                                    <tr>
                            
                                        <th>View</th>
										<th>Strongly Disagree</th>
										<th>Disagree</th>
										<th>Agree</th>
										<th>Strongly Agree</th>
										
                                    </tr>
                                </thead>
								
								<tbody>
									<tr>
										<td width="68%">1. The learning outcomes were clearly explained at the commencement of the course unit</td>
										<td width="8%" align="center"><input name="rating1" type="radio" value="1" onclick="fnRadio1()"></td>
										<td width="8%" align="center"><input name="rating1" type="radio" value="2" onclick="fnRadio2()"></td>
										<td width="8%" align="center"><input name="rating1" type="radio" value="3" onclick="fnRadio3()"></td>
										<td width="8%" align="center"><input name="rating1" type="radio" value="4" onclick="fnRadio4()"></td>
									</tr>
									
									<tr>
										<td width="68%">2. The tutor came prepared for the class</td>
										<td width="8%" align="center"><input name="rating2" type="radio" value="1" onclick="fnRadio1()"></td>
										<td width="8%" align="center"><input name="rating2" type="radio" value="2" onclick="fnRadio2()"></td>
										<td width="8%" align="center"><input name="rating2" type="radio" value="3" onclick="fnRadio3()"></td>
										<td width="8%" align="center"><input name="rating2" type="radio" value="4" onclick="fnRadio4()"></td>
									</tr>
									
									<tr>
										<td width="68%">3.   Lectures were well organized</td>
										<td width="8%" align="center"><input name="rating3" type="radio" value="1" onclick="fnRadio1()"></td>
										<td width="8%" align="center"><input name="rating3" type="radio" value="2" onclick="fnRadio2()"></td>
										<td width="8%" align="center"><input name="rating3" type="radio" value="3" onclick="fnRadio3()"></td>
										<td width="8%" align="center"><input name="rating3" type="radio" value="4" onclick="fnRadio4()"></td>
									</tr>
									
									<tr>
										<td width="68%">4.   The tutor was very clear in teaching and was easy to understand</td>
										<td width="8%" align="center"><input name="rating4" type="radio" value="1" onclick="fnRadio1()"></td>
										<td width="8%" align="center"><input name="rating4" type="radio" value="2" onclick="fnRadio2()"></td>
										<td width="8%" align="center"><input name="rating4" type="radio" value="3" onclick="fnRadio3()"></td>
										<td width="8%" align="center"><input name="rating4" type="radio" value="4" onclick="fnRadio4()"></td>
									</tr>
									
									<tr>
										<td width="68%">5.   Lectures were clearly audible</td>
										<td width="8%" align="center"><input name="rating5" type="radio" value="1" onclick="fnRadio1()"></td>
										<td width="8%" align="center"><input name="rating5" type="radio" value="2" onclick="fnRadio2()" ></td>
										<td width="8%" align="center"><input name="rating5" type="radio" value="3" onclick="fnRadio3()" ></td>
										<td width="8%" align="center"><input name="rating5" type="radio" value="4" onclick="fnRadio4()" ></td>
									</tr>
									
									<tr>
										<td width="68%">6.  The pace of lecturing was right for me</td>
										<td width="8%" align="center"><input name="rating6" type="radio" value="1" onclick="fnRadio1()" ></td>
										<td width="8%" align="center"><input name="rating6" type="radio" value="2" onclick="fnRadio2()" ></td>
										<td width="8%" align="center"><input name="rating6" type="radio" value="3" onclick="fnRadio3()" ></td>
										<td width="8%" align="center"><input name="rating6" type="radio" value="4" onclick="fnRadio4()" ></td>
									</tr>
									
									<tr>
										<td width="68%">7.   Method of lecturing held my attention</td>
										<td width="8%" align="center"><input name="rating7" type="radio" value="1" onclick="fnRadio1()" ></td>
										<td width="8%" align="center"><input name="rating7" type="radio" value="2" onclick="fnRadio2()" ></td>
										<td width="8%" align="center"><input name="rating7" type="radio" value="3" onclick="fnRadio3()" ></td>
										<td width="8%" align="center"><input name="rating7" type="radio" value="4" onclick="fnRadio4()" ></td>
									</tr>
									
									<tr>
										<td width="68%">8.   Used the Learning System in teaching process when necessary</td>
										<td width="8%" align="center"><input name="rating8" type="radio" value="1" onclick="fnRadio1()" ></td>
										<td width="8%" align="center"><input name="rating8" type="radio" value="2" onclick="fnRadio2()" ></td>
										<td width="8%" align="center"><input name="rating8" type="radio" value="3" onclick="fnRadio3()" ></td>
										<td width="8%" align="center"><input name="rating8" type="radio" value="4" onclick="fnRadio4()" ></td>
									</tr>
									
									<tr>
										<td width="68%">9.   Class tests and MCQ practice exams have been helpful in understanding the subject matter</td>
										<td width="8%" align="center"><input name="rating9" type="radio" value="1" onclick="fnRadio1()" ></td>
										<td width="8%" align="center"><input name="rating9" type="radio" value="2" onclick="fnRadio2()" ></td>
										<td width="8%" align="center"><input name="rating9" type="radio" value="3" onclick="fnRadio3()" ></td>
										<td width="8%" align="center"><input name="rating9" type="radio" value="4" onclick="fnRadio4()" ></td>
									</tr>									
									<tr>
										<td width="68%">10. Students were encouraged to ask questions</td>
										<td width="8%" align="center"><input name="rating10" type="radio" value="1" onclick="fnRadio1()" ></td>
										<td width="8%" align="center"><input name="rating10" type="radio" value="2" onclick="fnRadio2()" ></td>
										<td width="8%" align="center"><input name="rating10" type="radio" value="3" onclick="fnRadio3()" ></td>
										<td width="8%" align="center"><input name="rating10" type="radio" value="4" onclick="fnRadio4()" ></td>
									</tr>									
									
								</tbody>
								
							</table>
							
							<br><br>
							
								<div class="control-group">
                                    <label class="control-label" for="inputEmail"><strong>Overall Performance Of The Tutor</strong></label>
                                    <div class="controls">
                                        <input type="text" name="performance"  placeholder="" id="viewResult">%
                                    </div>
                                </div> 
							
								<div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Submit</button>
                                    </div>
                                </div>	
								
								</form>
								
								<div class="control-group">
                                    <div class="controls">
                                        <button  type="submit" name="submit" onclick="fn5()" class="btn btn-info"><i class="icon-ok icon-large"></i>&nbsp;View Results</button>
                                    </div>
                                </div>
											
                        </div>
                    </div>
                </div>
                <?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>