<?php
session_start();
if(isset($_SESSION['username'])){
  include("../header.php");
  include("dbconn.php");
  $obj = new Dbconn;
  $row = $obj->tracking_details();
  
  ?>


<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Date</th>
                <th>Time</th>
                <th>Tracking No</th>
                <th>Match Tracking no</th>
                <th>DC Non DC</th>
                <th>Sender Name</th>
                <th>Sender Pin</th>
                <th>Reciever Name</th>
                <th>Reciever Name</th>
                <th>Channel Partner</th>
                <th>Type Company Code</th>
                <th>Weight Company Code</th>
                <th>Amount</th>
                <th>URL</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
          <?php $cnt = 1; foreach($row as $rows){ ?>

            <tr>
                <td><?php echo $cnt; ?></td>
                <td><?php echo $rows['datetime']; ?></td>
                <td><?php echo $rows['time']; ?></td>
                <td><?php echo $rows['tracking_no']; ?></td>
                <td><?php echo $rows['match_tracking_no']; ?></td>
                <td><?php echo $rows['doc_non_doc']; ?></td>
                <td><?php echo $rows['sender_name']; ?></td>
                <td><?php echo $rows['sender_pin_code']; ?></td>
                <td><?php echo $rows['reciever_name']; ?></td>
                <td><?php echo $rows['reciever_pin_code']; ?></td>
                <td><?php echo $rows['channel_partner']; ?></td>
                <td><?php echo $rows['type_company_code']; ?></td>
                <td><?php echo $rows['weight_company_code']; ?></td>
                <td><?php echo $rows['round_of_amt']; ?></td>
                <td><?php echo $rows['url']; ?></td>
                <td><a href="tracking_details_edit.php?id=<?php echo $rows['tracking_id']; ?>"><button class="btn btn-primary">EDIT</button></a></td>
            </tr>


         <?php $cnt++; }    ?>
   
            
      
        </tbody>
        <tfoot>
        <tr>
                <th>Sr No</th>
                <th>Date</th>
                <th>Time</th>
                <th>Tracking No</th>
                <th>Match Tracking no</th>
                <th>DC Non DC</th>
                <th>Sender Name</th>
                <th>Sender Pin</th>
                <th>Reciever Name</th>
                <th>Reciever Name</th>
                <th>Channel Partner</th>
                <th>Type Company Code</th>
                <th>Weight Company Code</th>
                <th>Amount</th>
                <th>URL</th>
            </tr>
        </tfoot>
    </table>




<br>

<br>
<br>
<br>
  <?php
  include("../footer.php");
}else{
  header("Location:../admin.php");
}
