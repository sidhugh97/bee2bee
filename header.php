<?php error_reporting(0); ?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

    
    <title>b2b</title>
    <style>
   #footer {
   position: static;
   bottom: 0;
   width: 100%;
}
label{font-size:13px;
   font-weight:bold;
}
input[type="text"] {
    font-size:14px;
}
#rcorners1 {
  border-radius: 25px;
  background: #98B4D4;
  padding: 20px; 
  width: 80%;
  height: 100px;  
}


#rcorners1{
transition: 0.3s ease;
}

#rcorners1:hover{
-webkit-transform: scale(1.03);
-ms-transform: scale(1.03);
transform: scale(1.03);
transition: 0.3s ease;
background: #7FCDCD;
}


    </style>
  </head>
  <body>
<nav class="navbar navbar-light bg-secondary">
  <a class="navbar-brand" href="#">
    <img src="admin/images/15.jpg" width="200" height="100" alt="" class="p-0">
  </a>
  <div class="text-white logout">
    <?php if(isset($_SESSION['username'])){ echo "Hi,".$_SESSION['name']; ?>
    <a href="controller.php?logout=true"><i class="fa fa-sign-out" aria-hidden="true"></i></a> <?php } ?>

  </div>
</nav>
