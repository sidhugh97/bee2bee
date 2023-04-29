<?php

class Dbconn {

  public $conn;

  public function __construct(){
    // $this->conn = mysqli_connect("localhost","root","","b2b");
    $this->conn = mysqli_connect("localhost","u176246072_root","Abi@1122","u176246072_b2b");
    // $this->conn = mysqli_connect("localhost","root","","js");
    if (!$this->conn){
      die("Connection failed: " . mysqli_connect_error());
    }
  }

  public function checkuser($username,$password){
    $query = "select * from user_details where username = '$username'";
    $data = $this->conn->query($query);
    if ($data->num_rows > 0) {
      $row = $data->fetch_assoc();
      if($row['password']==$password){
        return $data = array("name"=>$row['name'],"message"=>"success");
      }else{
        return $data = array("message"=>"Invalid Username or Password");
      }
    }else{
      return $data = array("message"=>"Invalid Username or Password");
    }
  }

  public function track($no){
    $query = "select * from tracking_details where tracking_no = '$no'";
    $data = $this->conn->query($query);
    if ($data->num_rows > 0) {
      $row = $data->fetch_assoc();
     
        return $data = array("data"=>$row,"message"=>"success");
      
    }else{
      return $data = array("message"=>"Invalid Tracking no");
    }
  }

  public function tracking_details(){
    $query = "select * from tracking_details";
    $data = $this->conn->query($query);
    $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
  
   return $row;
  }

  public function tracking_details_by_id($id){
    $query = "select * from tracking_details where tracking_id = $id";
    $data = $this->conn->query($query);
    $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
  
   return $row;
  }

  public function add_another_row($data){

     $query = "INSERT INTO `tracking_details_add`(`add_tracking_id`, `datetime`, `time`, `tracking_no`, `match_tracking_no`, `doc_non_doc`, `sender_name`, `sender_pin_code`, `reciever_name`, `reciever_pin_code`, `channel_partner`, `type_company_code`, `weight_company_code`, `round_of_amt`, `url`) VALUES ('$data[tracking_id]','$data[datetime]','$data[time]','$data[tracking_no]','$data[match_tracking_no]','$data[doc_non_doc]','$data[sender_name]','$data[sender_pin_code]','$data[reciever_name]','$data[reciever_pin_code]','$data[channel_partner]','$data[type_company_code]','$data[weight_company_code]','$data[round_of_amt]','$data[url]')";
    $data = $this->conn->query($query);
  }

  public function update_racking_details($data){

    echo $query = "UPDATE `tracking_details` SET `datetime`='$data[datetime]',`time`='$data[time]',`tracking_no`='$data[tracking_no]',`match_tracking_no`='$data[match_tracking_no]',`doc_non_doc`='$data[doc_non_doc]',`sender_name`='$data[sender_name]',`sender_pin_code`='$data[sender_pin_code]',`reciever_name`='$data[reciever_name]',`reciever_pin_code`='$data[reciever_pin_code]',`channel_partner`='$data[channel_partner]',`type_company_code`='$data[type_company_code]',`weight_company_code`='$data[weight_company_code]',`round_of_amt`='$data[round_of_amt]',`url`='$data[url]' WHERE `tracking_id`='$data[tracking_id]'";
   $data = $this->conn->query($query);
 }

 public function add_track($no){
  $query = "select * from tracking_details_add where add_tracking_id = '$no'";
  $data = $this->conn->query($query);
  if ($data->num_rows > 0) {
    $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
    $row= array_reverse($row);
      return $data = array("data"=>$row,"message"=>"success");
    
  }else{
    return $data = array("message"=>"Invalid Tracking no");
  }
}

}
