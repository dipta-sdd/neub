<?php
    require 'database.php';
    $email =$user =$epass=$pc = $eth=  $gala =$other=$refered=$played_by=$discord = $task_1= $task_2= $task_3= 'false';
    $color['PC 1']='#f00';
    $color['PC 2']='#0f0';
    $color['PC 3']='#00f';
    $color['PC 4']='#ff0';
    $color['PC 5']='#0ff';
    $color['PC 6']='#f0f';
    $color['PC 7']='#19f';
    $sql="SELECT * FROM `email` ORDER by `refered_id` desc;";
    $result = $conn->query($sql);
    $data ="";
    $s=1;
    $user = $_COOKIE['user'];
    while($row = $result->fetch_assoc()) {
      $email=$row['email'];
      $epass=$row['email_pass'];
      $eth=$row["eth"];
      $refered=$row["refered_id"];
      $discord=$row["discord"];
      $task_1=$row["task1"];
      $task_2=$row["task2"];
      $task_3=$row["task3"];
      $gala=$row["gala"];
      $other=$row["other"];
      $played_by=$row["player"];
      $pc=$row['pc'];
      if( $played_by === $user){
        $data.='<tr class="bg-info ">';
      }else{
        $data.='<tr class="">';
      }

      $data.=' <td>'.$s.'</td> <td class="email_2022" scope="row">'.$email.'</td><td class="text-center">'.$epass.'</td>';
      if(strlen($pc)>1){
        $data.='<td  text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16" style="color:'.$color[$pc].'">
                  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                </svg> 
               '.$pc.'</td>';
      }else {
        $data.='<td class="text-center">'.$pc.'</td>';
      }
      $data.='<td class="text-center">'.$played_by.'</td>';
      if($discord==='true'){
        $data.='<td class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color:#00f">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                </td>';
      } else{ $data.='<td></td>'; }
      if($task_1==='true'){
        $data.='<td class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color:#00f">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                </td>';
      } else{ $data.='<td></td>'; }
      if($task_2==='true'){
        $data.='<td class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color:#00f">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                </td>';
      } else{ $data.='<td></td>'; }
      if($task_3==='true'){
        $data.='<td class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color:#00f">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                </td>';
      } else{ $data.='<td></td>'; }
      
      $data.='</tr>';
      $s++;
    }

    $data.='
    <script>
    // email click popup check 
      $(".email_2022").click(function (e) { 
        var val=  $(this).text();
        $.ajax({
         type: "POST",
         url: "email_2022_data.php",
         data: {
           email: $(this).text(),

         },
         success: function (response) {
           $("#form").html(response);
           $("#form").addClass("popup_new");
         }
        });
     });
    </script>
    ';
    echo $data;
 ?>