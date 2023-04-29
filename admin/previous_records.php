<?php
session_start();
if(isset($_SESSION['username'])){
  include("../header.php");
  include("dbconn.php");
  $obj = new Dbconn;
  // $row = $obj->tracking_details();
  
  ?>

<div class="container">
  <br>
  <form action="" method="POST">
<input type="text" name="tracking_no" id="typeEmailX" placeholder="Enter tracking no." class="form-control form-control-lg" /> 
<input type="submit">
</form>

<?php
if(isset($_POST)){

  $data =  $obj->track($_POST['tracking_no']);

  if($data['message']=='success'){
    echo "<h4><span>Current Updated</span></h4>";
    foreach($data['data'] as $key=>$val){
      ?> <h6> <?php echo str_replace("_"," ","$key")." :   "; ?><span class="text-danger"><?php echo $val ?></span></h6> <?php 

    }
    
    $data =  $obj->add_track($data['data']['tracking_id']);
    if($data['message']=='success'){
      foreach($data['data'] as $key=>$val){
         echo "<h4><span>Previous Updated</span></h4>"; 
        foreach ($val  as $key=>$vals){
          ?> <h6> <?php echo str_replace("_"," ","$key")." :   "; ?><span class="text-danger"><?php echo $vals ?></span></h6> <?php 
      }
    }
  }
 

  }else{
    echo "Invalid tracking no";
  }
}

?>
</div>
  <?php
  include("../footer.php");
}else{
  header("Location:../admin.php");
}
