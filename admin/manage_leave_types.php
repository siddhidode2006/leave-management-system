<?php include '../templates/admin-header.php';
  

  if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['leave_type'] !='') 


  {
    $department_name = $_POST['leave_type'];
    $sql = "INSERT INTO leave_types(type) VALUES ('$leave_type')";
    
    if($conn -> query ($sql) == true)
    {
      echo "<script>alert('leave type created successfully');</script>";
    }
    else
    {
      echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
  }
   
  $sql="SELECT * From leave_types";
  $data = $conn->query($sql);
  if ($data->num_rows > 0) 
  {
    // output data of each row
    while($row = $data->fetch_assoc())
   {
      $leave_typeArray[]=$row;
   }  
  } 
  else 
  {
    $leave_typeArray=[];  }
  
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Leave Type</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#add">
                Add Leave Type
              </button>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($leave_typeArray as $leave_type){
                  echo '<tr>
                    <td>'.$leave_type["id"].'</td>
                    <td>'.$leave_type["type"].'</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                    </td>
                  </tr>';
                  }?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- add leave modal -->
  <div class="modal fade" id="add" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Leave Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <div class="row g-3 p-3">
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Leave Type</label>
                    <input type="text" class="form-control" id="leave_type" name="leave_type">
                </div>
            </div><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="Submit" class="btn btn-primary">Add</button>
        </div>
        </div>
    </form>
    </div>
</div>


  <!-- update leave modal -->
  <div class="modal fade" id="update" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Leave Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <form class="row g-3 p-3">
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Leave Type</label>
                    <input type="text" class="form-control" id="leave_type" name="leave_type">
                </div>
            </form><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-warning">Update</button>
        </div>
        </div>
    </div>
</div>


  <!-- delete depertmanet modal -->
  <div class="modal fade" id="delete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Leave</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <form class="row g-3 p-3">
                <div class="col-12">
                    <h5>Are you sure? Do you want to delete ? </h5>
                </div>
            </form><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
        </div>
    </div>
</div>



<!-- End Vertically centered Modal-->