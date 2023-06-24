
<?php include_once 'navbar.php';  ?>

        <div class=" col-lg-9 col-md-7 left p-0 pe-2">



          <div class="body p-2  shadow-lg">
            <nav class="breadcrumb p-2 rounded-2">
              <a class="breadcrumb-item" href="#">Home</a>
              <a class="breadcrumb-item" href="#">Student</a>
              <span class="breadcrumb-item active" aria-current="page" id="cur_page">Result</span>
            </nav>
            <div class="sign_up_std m-3">
              <div class="row">
                <div class="col-6">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Student's ID" aria-label="Student's ID" aria-describedby="button-addon2" id="std_search_fld">
                    <button class="btn btn-outline-secondary" type="button" id="std_search_button">Search</button>
                  </div>
                </div>
                <div class="col-6"></div>
                
                <div class="table-responsive">
                    <table class="table table-hover table-striped  border-dark">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Dept</th>
                          <th scope="col">CGPA</th>
                          <th scope="col">Session</th>
                        </tr>
                      </thead>
                      <tbody id="tbody_std">
                        <tr class="tbl_std" role="button" std_id="170103020037" onclick="std_result_load()">
                          <td scope="row">170103020037</td>
                          <td>Redwan Hossain</td>
                          <td>Computer Science &amp; Engineering</td>
                          <td>0.00</td>
                          <td>Spring-2017</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
              </div>
              

            </div>

          </div>
        </div>
        <?php include_once 'body_mid.php';  ?>



        <script>
    $(document).ready(function(){
      // navbar setup 
      loadNav();
      //drop down menu on mbl device
     
      function dropMBL(id){
        alert('hi');
        $(id).toggleClass("ddm_show");
      }
    
     // page personal script
      loadTable('');
    
     
      // on search 
      $('#std_search_fld').on('keyup', function (e) {
        var std_id= $('#std_search_fld').val();
        loadTable(std_id);
      });
    
      // on click any row 
      $(document.body).on('click', '.tbl_std' ,function(e){
        e.preventDefault();
        var std_id= $(this).attr('std_id');
      });
    
      //table data
      function loadTable(std_id){
        // console.log(std_id);
        $.ajax({
          type: "POST",
          url: "../database/std_list.php",
          data: {
            id : std_id
          },
          success: function (response) {
            var data= JSON.parse(response);
            $('#tbody_std').empty();
            data.forEach(std=> {
              $('#tbody_std').append(`
                <tr class="tbl_std" role="button" std_id="${std.std_id}">
                  <td scope="row" >${std.std_id}</td>
                  <td>${std.std_name}</td>
                  <td>${std.dept_name}</td>
                  <td>0.00</td>
                  <td>${std.session_n}</td>
                </tr>
            `);
            });
          }
        });
      }
    
    });
    </script>

<?php include_once 'body_last.php';  ?>
