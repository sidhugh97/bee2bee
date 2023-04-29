<?php 
session_start();
if(isset($_SESSION['username'])){
  include("../header.php");
  include("dbconn.php");
  $obj = new Dbconn;
  $row = $obj->tracking_details_by_id($_POST['tracking_id']);
  $data = $row[0];

  $obj->add_another_row($data);
  $obj->update_racking_details($_POST);
  header("location:tracking_details_edit.php?id=$_POST[tracking_id]");
?>


<?php
  include("../footer.php");
}else{
  header("Location:../admin.php");
}