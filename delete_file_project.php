<?php
include('connect_project.php');
$get_id = $_POST['file_id'];
$batch_id=$_POST['batch_id'];

mysql_query("delete from file where file_id='$get_id'") or die(mysql_error());
?>


<script type="text/javascript">
    window.location="class_project.php<?php echo '?id=' . $batch_id; ?>";                          
</script>

