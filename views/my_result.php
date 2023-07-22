<?php include_once 'navbar.php';  ?>

<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <!-- <a class="breadcrumb-item" href="#">Sub</a> -->
      <span class="breadcrumb-item active" aria-current="page"> tmp</span>
    </nav>
    <div class="row ps-3">
      <!-- <div class="col-1"><b>Name :</b></div>
      <div class="col-11"></div>
      <div class="col-1"><b>ID :</b></div>
      <div class="col-11">210203020007</div> -->

      <div class="table-responsive">
        <table class="table w-auto">
          <tbody>
            <tr>
              <td scope="row"><b>Name</b></td><td><b>:</b></td>
              <td id="stdName"></td>
            </tr>
            <tr>
              <td scope="row"><b>ID</b></td><td><b>:</b></td>
              <td id="stdId"></td>
            </tr>
            <tr>
              <td scope="row"><b>Deprtment</b></td><td><b>:</b></td>
              <td id="stdDept"></td>
            </tr>
            <tr>
              <td scope="row"><b>
                Session
              </b></td><td><b>:</b></td>
              <td id="stdSession">
              </td>
            </tr>
            <tr>
              <td scope="row"><b>
                Credit completed
              </b></td><td><b>:</b></td>
              <td id="stdCredit">
              </td>
            </tr>
            <tr>
              <td scope="row"><b>
                CGPA
              </b></td><td><b>:</b></td>
              <td id="stdCgpa">
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="table-responsive-md">
        <h5 class="text-center">Result
        </h5>
        <table class="table        table-bordered
        table-striped
        align-middle">
          <thead class="">
            <tr>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit</th>
              <th scope="col">Session</th>
              <th scope="col">GPA</th>
              <th scope="col">Grade</th>
            </tr>
          </thead>
          <tbody class="table-group-divider" id="tbody_result">
            
          </tbody>
          <tfoot>
            
          </tfoot>
        </table>
        <!-- <button class="btn btn-dark float-left" id="button_register">
        <i class="fa-light fa-print"></i>
        </button> -->
      </div>
      

    </div>
  </div>
</div>
 <?php include_once 'body_mid.php';  ?>
<script>
  $(document).ready(function(){

    loadNav();
  // page personal script
  // Sample URL
 
    $.ajax({
      type: "GET",
      url: "../database/result_std_get_cgpa.php",
      success: function (response) {
        var row = JSON.parse(response);
        // console.log(row);
        $(stdName).text(row.name);
        $(stdId).text(row.id);
        $(stdDept).text(row.dept);
        $(stdSession).text(row.session);
        $(stdCredit).text(row.credit);
        $(stdCgpa).text(sort( row.cgpa ));
        // console.log(datas);
        $.ajax({
          type: "POST",
          url: "../database/result_std_get_result.php",
          data: {
            std_id : row.id
          },
          success: function (response) {
            var courses=JSON.parse(response);
            courses.forEach(course => {
              $(tbody_result).append(
                createRow(
                  course.course_id,
                  course.course_tittle,
                  course.course_credit,
                  course.session_n,
                  course.gpa
                )
              );
            });
          }
        });
        
      }
    });
    

    

    

    function createRow(code, title, credit,session,gpa){
      // console.log(color[status]);
      var row=`
      <tr>
        <td scope="row">${code}</td>
        <td>${title}</td>
        <td>${credit}</td>
        <td>${session}</td>
        <td>${sort(gpa)}</td>
        <td>${grade( gpa )}</td>
      </tr>
      `;
      console.log(row);
      return row;
    }

    // taking value 2 digit
    function sort(number) {
      number =Number(number);
      return number.toFixed(2);
    }
    // grade
    function grade(gpa){
      if ( gpa >=4){
        return "A+";
      }else if(gpa >=3.75){
        return "A";
      } else if ( gpa >= 3.5){
        return "A-";
      }else if ( gpa >= 3.25){
        return "B+";
      }else if ( gpa >= 3){
        return "B";
      }else if ( gpa >= 2.75){
        return "B-";
      }else if ( gpa >= 2.5){
        return "C+";
      }else if ( gpa >= 2.25){
        return "C";
      }else if ( gpa >= 2){
        return "D";
      }else{
        return "F" ;
      }
    }
  

  });
</script>
<?php include_once 'body_last.php';  ?>


