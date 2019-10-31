<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['tid']; ?>
<body>
<div class="row-fluid">
  <div class="span12">
    <?php include('navbar_project.php'); ?>
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div class="hero-unit-3">
		  	<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
		  <a href="batch_tutor_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a> <br>
            <br>

			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Learning Materials Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        <th>Batch ID</th>
										<th>Learning Material (Click To Download)</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
									$select=mysql_query("select * from upload order by id desc");
									while($row1=mysql_fetch_array($select)){
									$id=$row1['id'];
?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $id; ?>').tooltip('show')
                                            $('#e<?php echo $id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $id; ?>').tooltip('show')
                                            $('#d<?php echo $id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                       
                                        <td><?php echo $row1['batch_id']; ?></td> 
                                        <td><a href="download.php?filename=<?php echo $row1['name'];?>"><?php echo $row1['name'] ;?></a></td>
										
                                        <td width="100">
                                            <a rel="tooltip"  title="Delete Class" id="d<?php echo $id; ?>" href="#id<?php echo $id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>   
                                        </td>
										
                                        <!-- user delete modal -->
                                    <div id="id<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Learning Material?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_LM_project.php<?php echo '?id=' .$id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                        </div>
                                    </div>
                                    <!-- end delete modal -->
									
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
							
                        </div>
                    </div>
                </div>
                <?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>