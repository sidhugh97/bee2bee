<?php 
session_start();
if(isset($_SESSION['username'])){
  include("../header.php");
  include("dbconn.php");
  $id = $_GET['id'];
  $obj = new Dbconn;
  $row = $obj->tracking_details_by_id($id);
  $data = $row[0];

?>

<div style="width: 65%;margin:auto; background-color: yellow;"><h5 class="text-center p-3"><a href="http://bee2beeshipping.in/">bee2beeshipping.in&#8482;
</a></h5></div>
<div style="width: 65%;margin:auto;" class="bg-light p-3">
  <form action="add_one_more_track.php" method="POST">
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Bee2Bee - Domestic - </label>
    <div class="col-sm-3">
      <input type="text" name="tracking_no" class="form-control" id="inputEmail3"  value="<?php echo $data['tracking_no']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Date of Booking</label>
    <div class="col-sm-3">
      <input type="text" name="datetime" class="form-control" id="inputEmail3"  value="<?php echo $data['datetime']; ?>">
      <input type="hidden" name="tracking_id" class="form-control" id="inputEmail3"  value="<?php echo $data['tracking_id']; ?>">
    </div>

    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Time of Booking</label>
    <div class="col-sm-3">
      <input type="text" name="time" class="form-control" id="inputEmail3"  value="<?php echo $data['time']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Channel Partner</label>
    <div class="col-sm-3">
      <input type="text" name="channel_partner" class="form-control" id="inputEmail3"  value="<?php echo $data['channel_partner']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Matching Tracking number</label>
    <div class="col-sm-3">
      <input type="text" name="match_tracking_no" class="form-control" id="tr_no"  value="<?php echo $data['match_tracking_no']; ?>">
    </div>
    
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Type Company_Code</label>
    <div class="col-sm-3">
      <input type="text" name="type_company_code" class="form-control" id="inputEmail3"  value="<?php echo $data['type_company_code']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">URL For Tracking</label>
    <div class="col-sm-3">
    <input type="text" class="form-control" name="url" id="inputEmail3"  value="<?php echo $data['url']; ?>">
      
    </div>
  </div>

  <hr style="height:3px;border:none;color:#333;background-color:#333;" />
  <b><h6 class="text-center">Details</h6></b>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Doc. / Non-Doc.</label>
    <div class="col-sm-3">
      <input type="text" name="doc_non_doc" class="form-control" id="inputEmail3"  value="<?php echo $data['doc_non_doc']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">From PinCode</label>
    <div class="col-sm-3">
      <input type="text" name="sender_pin_code" class="form-control" id="inputEmail3"  value="<?php echo $data['sender_pin_code']; ?>">
    </div>

    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Sender Name</label>
    <div class="col-sm-3">
      <input type="text" name="sender_name" class="form-control" id="inputEmail3"  value="<?php echo $data['sender_name']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">To Pincode</label>
    <div class="col-sm-3">
      <input type="text" name="reciever_pin_code" class="form-control" id="inputEmail3"  value="<?php echo $data['reciever_pin_code']; ?>">
    </div>

    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Receiver Name</label>
    <div class="col-sm-3">
      <input type="text" name="reciever_name" class="form-control" id="inputEmail3"  value="<?php echo $data['reciever_name']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">T. Round OFF Amt.</label>
    <div class="col-sm-3">
      <input type="text" name="round_of_amt" class="form-control" id="inputEmail3"  value="<?php echo $data['round_of_amt']; ?>">
    </div>
  </div>


  <br>
  <div class="text-center">
    <input type="submit" class="btn btn-primary" value="Update Records">
  </div>
	</form>
  </div>
  

<script>
function copyText() {
  var copyText = document.getElementById("tr_no");

  copyText.select();
  // copyText.setSelectionRange(0, 99999); // For mobile devices

  document.execCommand("copy");
}
</script>


<?php
  include("../footer.php");
}else{
  header("Location:../admin.php");
}