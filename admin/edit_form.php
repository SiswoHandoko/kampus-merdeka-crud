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
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">FORM EDIT</h3>
              </div>
              <!-- /.card-header -->
              <?php 
                $id = $_GET["id"];

                $query = mysqli_query($conn, "SELECT * FROM clothes WHERE id='$id'");
                
                while($customer = mysqli_fetch_array($query)){
                    $name = $customer['name'];
                    $price = $customer['price'];
                    $type = $customer['tag_type'];
                    $category = $customer['category_id'];
                    $image = $customer['image'];
                }
                $querySizes = mysqli_query($conn, "SELECT * FROM cloth_sizes WHERE cloth_id='$id'");
                $resultSize = array();  
                while ($sizes = mysqli_fetch_array($querySizes)) {
                    $resultSize[] = $sizes;
                }
              ?>
              <!-- form start -->
              <form action="edit_process.php?id=<?php echo $id ?>" method="post" id="form-add" novalidate="novalidate" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="<?php echo $name?>">
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price" value="<?php echo $price?>">
                  </div>
                  <div class="form-group">
                    <label>Type</label>
                    <select name="type" class="form-control">
                      <option value="">Default</option>
                      <option value="best_seller" <?php if ($type == 'best_seller') echo 'selected'; ?>>Best Seller</option>
                      <option value="new" <?php if ($type == 'new') echo 'selected'; ?>>New</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select  name="category" class="form-control">
                      <option value="">Default</option>
                      <option value="1" <?php if ($category == '1') echo 'selected'; ?>>Jacket</option>
                      <option value="2" <?php if ($category == '2') echo 'selected'; ?>>Hoodie</option>
                      <option value="3" <?php if ($category == '3') echo 'selected'; ?>>Shirt</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input  name="image" type="file" class="custom-file-input" id="exampleInputFile" onchange="displayFileName(this)">
                        <label class="custom-file-label" for="exampleInputFile"><?php echo $image ?></label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group d-flex">
                      <label for="exampleInputFile">Available Sizes</label>
                      <div class="form-check">
                        <input class="form-check-input" name="sizes[]" value="1" type="checkbox" 
                        <?php 
                          foreach ($resultSize as $sizes) {
                            $sizeId = $sizes['size_id'];
                            if($sizeId==1){
                              echo "checked";
                            }
                          }
                        ?>
                        >
                        <label class="form-check-label">XS</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="sizes[]" value="2" type="checkbox"
                        <?php 
                          foreach ($resultSize as $sizes) {
                            $sizeId = $sizes['size_id'];
                            if($sizeId==2){
                              echo "checked";
                            }
                          }
                        ?>
                        >
                        <label class="form-check-label">S</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="sizes[]" value="3" type="checkbox"
                        <?php 
                          foreach ($resultSize as $sizes) {
                            $sizeId = $sizes['size_id'];
                            if($sizeId==3){
                              echo "checked";
                            }
                          }
                        ?>
                        >
                        <label class="form-check-label">M</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="sizes[]" value="4" type="checkbox"
                        <?php 
                          foreach ($resultSize as $sizes) {
                            $sizeId = $sizes['size_id'];
                            if($sizeId==4){
                              echo "checked";
                            }
                          }
                        ?>
                        >
                        <label class="form-check-label">L</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="sizes[]" value="5" type="checkbox"
                        <?php 
                          foreach ($resultSize as $sizes) {
                            $sizeId = $sizes['size_id'];
                            if($sizeId==5){
                              echo "checked";
                            }
                          }
                        ?>
                        >
                        <label class="form-check-label">XL</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="sizes[]" value="6" type="checkbox"
                        <?php 
                          foreach ($resultSize as $sizes) {
                            $sizeId = $sizes['size_id'];
                            if($sizeId==6){
                              echo "checked";
                            }
                          }
                        ?>
                        >
                        <label class="form-check-label">XXL</label>
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
</body>
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
      }
    },
    messages: {
      name: {
        required: "Please enter a name address",
      },
      price: {
        required: "Please provide a price",
      },
      category: {
        required: "Please provide a category",
      },
      type: {
        required: "Please provide a type",
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
</html>
