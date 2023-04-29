<?php

$user = $_COOKIE['user'];
$email =$user = $pc= $eth=  $gala =$other=$refered=$played_by=$discord = $task_1= $task_2= $task_3= 'false';
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST["email"];
 } 
//  $email='chandudyryf@gmail.com';
 require 'database.php';
 $sql="select * from email where email='" . $email . "'";
 $data ="";
 $result = $conn->query($sql);
 while($row = $result->fetch_assoc()){ 
    $eth=$row["eth"];
    $refered=$row["refered_id"];
    $discord=$row["discord"];
    $task_1=$row["task1"];
    $task_2=$row["task2"];
    $task_3=$row["task3"];
    $gala=$row["gala"];
    $other=$row["other"];
    $played_by=$row["player"];
    $pc=$row["pc"];
    
 } 


 echo $task_2;
// $data='<form class="shadow-lg row ">

$data='<form id="form_email_2022" class="float-start shadow-lg ms-auto me-auto mb-5 g-1 p-3 bg-body col-md-10 rounded text-start">

      <div class="row ">
        <div class="col-10"></div>
        <div class="col-2 text-end">
          <button type="close" class="btn-close btn " id="btn_close"></button>
        </div>
        
        
        <div class="col-md-12 text-center">
          <label class="form-label">Email : '; $data.=$email;
$data.='</label>
        </div>
        
        <div class="form-floating mb-3 mt-3 col-4">
          <input type="text" class="form-control" id="eth" name="eth"';
        if(strlen($eth)>1){
          $data.= ' value="'.$eth.'" disabled> ';
        }else{
          $data.= ' value=""> ';
        }
$data.=' <label for="formId1">Eth Address </label>
        </div> 
        
        <div class="col-md-12 ">
          <label class="form-label">Refered from  : '.$refered.' </label>
        </div>';
  if($pc === 'PC 1'){
    $data.='
    <select id="pc" class="form-select col-2 m-2" style="width:30%" aria-label="Default select example">
      <option value="">Select the pc you are playing</option>
      <option value="PC 1" selected>PC 1</option>
      <option value="PC 2">PC 2</option>
      <option value="PC 3">PC 3</option>
      <option value="PC 4">PC 4</option>
      <option value="PC 5">PC 5</option>
      <option value="PC 6">PC 6</option>
    </select>
    ';
  } else if($pc === 'PC 2'){
    $data.='
    <select id="pc" class="form-select col-2 m-2" style="width:30%" aria-label="Default select example">
      <option value="">Select the pc you are playing</option>
      <option value="PC 1" >PC 1</option>
      <option value="PC 2" selected>PC 2</option>
      <option value="PC 3">PC 3</option>
      <option value="PC 4">PC 4</option>
      <option value="PC 5">PC 5</option>
      <option value="PC 6">PC 6</option>
    </select>
    ';
  }else if($pc === 'PC 3'){
    $data.='
    <select id="pc" class="form-select col-2 m-2" style="width:30%" aria-label="Default select example">
      <option value="">Select the pc you are playing</option>
      <option value="PC 1">PC 1</option>
      <option value="PC 2">PC 2</option>
      <option value="PC 3" selected>PC 3</option>
      <option value="PC 4">PC 4</option>
      <option value="PC 5">PC 5</option>
      <option value="PC 6">PC 6</option>
    </select>
    ';
  }else if($pc === 'PC 4'){
    $data.='
    <select id="pc" class="form-select col-2 m-2" style="width:30%" aria-label="Default select example">
      <option value="">Select the pc you are playing</option>
      <option value="PC 1">PC 1</option>
      <option value="PC 2">PC 2</option>
      <option value="PC 3">PC 3</option>
      <option value="PC 4" selected>PC 4</option>
      <option value="PC 5">PC 5</option>
      <option value="PC 6">PC 6</option>
    </select>
    ';
  }else if($pc === 'PC 5'){
    $data.='
    <select id="pc" class="form-select col-2 m-2" style="width:30%" aria-label="Default select example">
      <option value="">Select the pc you are playing</option>
      <option value="PC 1">PC 1</option>
      <option value="PC 2">PC 2</option>
      <option value="PC 3">PC 3</option>
      <option value="PC 4">PC 4</option>
      <option value="PC 5" selected>PC 5</option>
      <option value="PC 6">PC 6</option>
    </select>
    ';
  }else if($pc === 'PC 6'){
    $data.='
    <select id="pc" class="form-select col-2 m-2" style="width:30%" aria-label="Default select example">
      <option value="">Select the pc you are playing</option>
      <option value="PC 1">PC 1</option>
      <option value="PC 2">PC 2</option>
      <option value="PC 3">PC 3</option>
      <option value="PC 4">PC 4</option>
      <option value="PC 5">PC 5</option>
      <option value="PC 6" selected>PC 6</option>
    </select>
    ';
  }else {
    $data.='
    <select id="pc" class="form-select col-2 m-2" style="width:30%" aria-label="Default select example">
      <option value="" selected>Select the pc you are playing</option>
      <option value="PC 1">PC 1</option>
      <option value="PC 2">PC 2</option>
      <option value="PC 3">PC 3</option>
      <option value="PC 4">PC 4</option>
      <option value="PC 5">PC 5</option>
      <option value="PC 6">PC 6</option>
    </select>
    ';
  }

 $data.='<div class="form-check ms-3">
          <input class="form-check-input" type="checkbox" value="Done" id="discord" name="discord" ';
          if($discord  === 'true'){
            $data.='checked disabled';
          }
          $data.='>
          <label class="form-check-label" >Discord</label>
        </div>
        <div class="form-check ms-3">
          <input class="form-check-input" type="checkbox" value="Done" name="task1" id="task1" ';
          if($task_1  === 'true'){
            $data.='checked disabled';
          }
          $data.='>
          <label class="form-check-label" >Task 1</label>
        </div>
        <div class="form-check ms-3">
          <input class="form-check-input" type="checkbox" value="Done" name="task2" id="task2" ';
          if($task_2 === 'true'){
            $data.='checked disabled';
          }
          $data.='>
          <label class="form-check-label" >Task 2</label>
        </div>
        <div class="form-check ms-3">
          <input class="form-check-input" type="checkbox" value="Done" name="task3" id="task3" ';
          if($task_3  === 'true'){
            $data.='checked disabled';
          }
          $data.='>
          <label class="form-check-label" >Task 3 </label>
        </div>
        <div class="form-floating mb-3 mt-3 col-4">
          <input type="text" class="form-control" name="gala_coin" id="gala_coin" value="'.$gala.'" >
          <label for="formId1">Gala Coin</label>
        </div>
        <div class="form-floating mb-3 mt-3 col-8">
          <input type="text" class="form-control" name="nft" id="nft" value="'.$other.'">
          <label for="formId1">Other Items</label>
        </div>
        <select class="form-select d-none" name="email">
            <option value="'.$email.'" selected="" id="email"> email</option> </select> 
        
        <div class="col-md-12 ">
          <label class="form-label">Played by : '.$played_by.'</label>
        </div>
        <div class="col-12 text-end">
          <button type="Update" id="btn_email_2022_update" class="btn btn-primary">Update</button>
        </div>
      </div>
      </form>


      <!-- toast  -->
      <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">'. $email .'</strong>
          <small>'. $played_by .'</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" id="not">
        </div>
      </div>
      </div>
      <script>
      const toastTrigger = document.getElementById("liveToastBtn")
      const toastLiveExample = document.getElementById("liveToast")
      const toast = new bootstrap.Toast(toastLiveExample)
      toast.hide()
      </script>
      <script>
      $("#btn_email_2022_update").click(function( e){
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "./email_2022_data_update.php",
        data:  {
          "eth": $("#eth").val(),
          "pc": $("#pc").val(),
          "discord": $("#discord").is(":checked"),
          "task1": $("#task1").is(":checked"),
          "task2": $("#task2").is(":checked"),
          "task3": $("#task3").is(":checked"),
          "gala_coin": $("#gala_coin").val(),
          "nft": $("#nft").val(),
          "email": $("#email").val(),
        },
        success: function (response) {
          $("#not").html(response);
          toast.show();
        }
      });
      });
      </script>';



echo $data;
?>