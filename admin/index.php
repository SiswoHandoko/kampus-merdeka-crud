<?php include "reusable/config/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "reusable/template/head.php" ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include "reusable/template/navbar.php" ?>

  <?php include "reusable/template/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>

             
              <!-- /.card-header -->
              <div class="card-body">
                <a href="add_form.php" class="btn btn-info" role="button">ADD CLOTHES</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Tag</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  
                    $query = mysqli_query($conn ,"SELECT cl.*, category_name FROM clothes as cl join categories as ct on cl.category_id = ct.id"); //silahkan ganti jika error (sesuaikan dengan nama table yang ada di local)
                    $count = mysqli_num_rows($query);
                  
                    if($count>0){ 
                      while($clothes=mysqli_fetch_array($query)){
                  ?>
                  <tr>
                    <td><?php echo $clothes['name'];?> </td>
                    <td><?php echo "IDR ".number_format($clothes['price'], 0, ',', '.'); ?></td>
                    <td>
                      <?php if($clothes['tag_type']=="new"){ ?> 
                        <span class="label label-danger">NEW</span>
                      <?php }else if ($clothes['tag_type']=="best_seller"){ ?> 
                        <span class="label label-primary">BEST</span>
                      <?php } ?>
                    </td>
                    <td><?php echo $clothes['status'] ?></td>
                    <td><?php echo $clothes['category_name'] ?></td>
                    <td><span class="label label-warning fas fa-pen"><a href="edit_form.php?id=<?php echo $clothes["id"]; ?>"> Edit </a></span> <span class="label label-danger fas fa-trash"> <a href="delete_process.php?id=<?php echo $clothes["id"]; ?>"> Delete </a></span></td>
                  </tr>
                  <?php 
                      }
                    }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Tag</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include "reusable/template/footer.php" ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include "reusable/template/script.php" ?>
</body>
</html>
