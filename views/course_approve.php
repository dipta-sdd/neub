<?php include_once 'navbar.php';  ?>

<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Teacher</a>
      <span class="breadcrumb-item active" aria-current="page">Course Approve</span>
    </nav>
    <div class="row ps-3">
      <div class="table-responsive-md" id="">
        <h5 class="text-center">Course Registration ( Status : Pending)
        </h5>
        <table class="table
          table-hover	
          table-bordered
          align-middle">
          <thead class="">
            <caption class="test-danger">Registration status Pending</caption>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">ID</th>
              <th scope="col">Total Credit</th>
              <th scope="col">Semister</th>
            </tr>
          </thead>
          <tbody class="table-group-divider" id="tbody_course_taken_pending">
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
 <?php include_once 'body_mid.php';  ?>
 <script>
$(document).ready(function(){

  loadNav();
  $.ajax({
    type: "GET",
    url: "../database/course_taken_all_pending.php",
    success: function (response) {
      var data = JSON.parse(response);
      data.forEach( std => {
        var row = createRow(
          std.std_name,
          std.std_id,
          std.total_credit,
          std.semester
        );
        $(tbody_course_taken_pending).append(row);
      });
    }
  });
  // when a row is closed
  $(document).on('click','.row_course_taken_pending',function(e){
    var std_id= $(this).attr('id');
    location.replace(`./course_approve-${std_id}`);
  });
  // create row function
  function createRow(name, id, credit, semester){
    var row=`
    <tr class="row_course_taken_pending" role="button" id="${id}">
      <td scope="row">${name}</td>
      <td>${id}</td>
      <td>${credit}</td>
      <td>${semester}</td>
    </tr>
    `;
    return row;
  }

});
</script>
<?php include_once 'body_last.php';  ?>


