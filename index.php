<?php 
include("header.php");?>

<section class="vh-100 gradient-custom">
  <div class="row py-5">
    <div class="col-md-4 text-center order-md-1 order-2">
      <img src="admin/images/1.jpg" width="200" height="100" alt=""> <br><br>
      <img src="admin/images/2.jpg"  width="200" height="100" alt=""> <br><br>
      <img src="admin/images/3.jpg"  width="200" height="100" alt=""><br><br>
      <img src="admin/images/12.jpg"  width="200" height="100" alt=""><br><br>
      <img src="admin/images/4.jpg"  width="200" height="100" alt="">
    </div>
    <div class="col-md-4 p-4 order-md-2 order-1"><div class="card bg-dark text-white" style="border-radius: 1rem; box-shadow: 0 60px 80px rgba(0,0,0,0.20), 0 45px 26px rgba(0,0,0,0.1);">
          <div class="card-body p-3 text-center">

            <div class="mb-md-5 mt-md-4 pb-1">
            <Form action="admin/controller.php" method="POST">
              <h5 class="fw-bold mb-2 text-uppercase">Enter Tracking No.</h5>
              <br>
              <div class="form-outline form-white mb-4">
                <div class="row">
                  <div class="col-4">
                  <select name="city" id="cars"  class="form-control" required>
  <option value="">Select</option>
  <option value="NGP-">NGP-</option>

</select>
                  </div>
                  <div class="col-8">
                  <input type="text" name="tracking_no" id="typeEmailX" placeholder="Enter tracking no." class="form-control form-control-lg" /> 
                  </div>
                </div>
                <span style="color:red;"><?php session_start(); if(isset($_SESSION['message'])){echo $_SESSION['message'];  session_destroy();} ?></span>
              </div>
              <button class="btn btn-outline-light btn-lg px-3" name="track" type="submit">SUBMIT</button>
              </Form>
            </div>

          </div>
        </div></div>
        <div class="col-md-4 text-center order-md-3 order-3">
        <img src="admin/images/5.jpg" width="200" height="100" alt=""> <br><br>
      <img src="admin/images/9.jpg"  width="200" height="100" alt=""> <br><br>
      <img src="admin/images/10.jpg"  width="200" height="100" alt=""><br><br>
      <img src="admin/images/8.jpg"  width="200" height="100" alt=""><br><br>
      <img src="admin/images/11.jpg"  width="200" height="100" alt="">
    </div>
  </div>
 
  <footer class="text-center text-lg-start bg-light text-muted" id="footer">
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
   <h6 class="text-danger">Bee2Bee Shipping Aggregator <span style="color:blue;">|</span> H. No. 449, Garoba Maidan, Bagadganj, Nagpur - 440008</h6>
   <h6 class="text-danger">Email : bee2beeshipping@gmail.com <span style="color:blue;">|  https://bee2beeshipping.in/</span></h6>
   <h6 style="color:blue;">Mob : 7058703897</h6>
   
  </div>
</footer>


</section>

<script>
  $( document ).ready(function() {
    $(".logout").hide();
});
</script>
</body>
</html>
