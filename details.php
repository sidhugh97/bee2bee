<?php include("header.php");
session_start();
$data = $_SESSION['tracking'];
// echo '<pre>';
// print_r($_SESSION['tracking']);
// echo '</pre>';
?>

<div style="width: 65%;margin:auto; background-color: yellow;"><h5 class="text-center p-3"><a href="http://bee2beeshipping.in/">bee2beeshipping.in&#8482;
</a></h5></div>
<div style="width: 65%;margin:auto;" class="bg-light p-3">
  
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Bee2Bee - Domestic - </label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['tracking_no']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Date of Booking</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['datetime']; ?>">
    </div>

    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Time of Booking</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['time']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Channel Partner</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['channel_partner']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Matching Tracking number</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="tr_no" readonly value="<?php echo $data['match_tracking_no']; ?>">
      <button class="btn btn-primary" onclick="copyText()" style="height:40px;">Copy No.</button>
    </div>
    
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Type Company_Code</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['type_company_code']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">URL For Tracking</label>
    <div class="col-sm-3">
        <a href="<?php echo $data['url']; ?>" target="_blank">Click Here to go to <?php echo $data['channel_partner']; ?></a>
      
    </div>
  </div>

  <hr style="height:3px;border:none;color:#333;background-color:#333;" />
  <b><h6 class="text-center">Details</h6></b>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Doc. / Non-Doc.</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['doc_non_doc']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">From PinCode</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['sender_pin_code']; ?>">
    </div>

    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Sender Name</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['sender_name']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">To Pincode</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['reciever_pin_code']; ?>">
    </div>

    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">Receiver Name</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['reciever_name']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label bg-warning">T. Round OFF Amt.</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" readonly value="<?php echo $data['round_of_amt']; ?>">
    </div>
  </div>


  <br>
  <div class="text-center">

    <button class="btn btn-primary">Raise a Query</button>
  </div>
  <br>
  1. Please Raise a query if there is an error in the information shown above <br>		
2. Please raise a query if you have paid more than the above specified Amount.			
  </div>
  

<script>
function copyText() {
  var copyText = document.getElementById("tr_no");

  copyText.select();
  // copyText.setSelectionRange(0, 99999); // For mobile devices

  document.execCommand("copy");
}
</script>


<?php include("footer.php");?>