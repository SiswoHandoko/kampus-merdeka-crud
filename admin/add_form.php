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
            <h1>Add Clothes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Form</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FORM ADD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="add_process.php" method="post" id="form-add" novalidate="novalidate" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price">
                  </div>
                  <div class="form-group">
                    <label>Type</label>
                    <select name="type" class="form-control">
                      <option value="">Default</option>
                      <option value="best_seller">Best Seller</option>
                      <option value="new">New</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select  name="category" class="form-control">
                      <option value="">Default</option>
                      <option value="1">Jacket</option>
                      <option value="2">Hoodie</option>
                      <option value="3">Shirt</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input  name="image" type="file" class="custom-file-input" id="exampleInputFile" onchange="displayFileName(this)">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      form.submit();
    }
  });
  $('#form-add').validate({
    rules: {
      name: {
        required: true,
      },
      price: {
        required: true,
      },
      category: {
        required: true
      },
      type: {
        required: true
      },
      image: {
        required: true
      },
    },
    messages: {
      name: {
        required: "Please enter a name address",
      },
      price: {
        required: "Please provide a price",
      },
      category: {
        required: "Please provide a price",
      },
      type: {
        required: "Please provide a price",
      },
      image: {
        required: "Please provide a price",
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});


function displayFileName(input) {
  var label = document.querySelector('.custom-file-label');
  label.textContent = input.files[0].name;
}
</script>
</body>
</html>
