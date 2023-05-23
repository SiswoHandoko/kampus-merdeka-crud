<?php include "reusable/config/connection.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "reusable/template/head.php"?>
</head>

<body>

  <!-- Navbar -->
  <?php include "reusable/template/navbar.php"?>
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%282%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Learn Bootstrap 4 with MDB</strong>
              </h1>

              <p>
                <strong>Best & free guide of responsive web design</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
                  written versions
                  available. Create your own, stunning website.</strong>
              </p>

              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Learn Bootstrap 4 with MDB</strong>
              </h1>

              <p>
                <strong>Best & free guide of responsive web design</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
                  written versions
                  available. Create your own, stunning website.</strong>
              </p>

              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Learn Bootstrap 4 with MDB</strong>
              </h1>

              <p>
                <strong>Best & free guide of responsive web design</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
                  written versions
                  available. Create your own, stunning website.</strong>
              </p>

              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Categories:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">All
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shirts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sport wears</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Outwears</a>
            </li>

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">
          <?php
            $limit = 4; 
            $offsetQuery = "";
            if(isset($_GET["page"])){
              $offset = ($_GET["page"]*$limit) - $limit;

              $offsetQuery = "offset $offset";
            }
            $query = mysqli_query($conn ,"SELECT * FROM clothes as cl join categories as ct on cl.category_id = ct.id LIMIT $limit $offsetQuery"); //silahkan ganti jika error (sesuaikan dengan nama table yang ada di local)
            $count = mysqli_num_rows($query);
          
            if($count>0){ 
              while($clothes=mysqli_fetch_array($query)){
          ?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                  <!--Card-->
                  <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                      <img src="<?php echo "img/uploaded/".$clothes['image'] ?>" class="card-img-top"
                        alt="">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                      <!--Category & Title-->
                      <a href="" class="grey-text">
                        <h5><?php echo $clothes['category_name'] ?></h5>
                      </a>
                      <h5>
                        <strong>
                          <a href="" class="dark-grey-text"><?php echo $clothes['name'] ?>
                          <?php if($clothes['tag_type']=="new"){ ?> 
                            <span class="badge badge-pill danger-color">NEW</span>
                          <?php }else if ($clothes['tag_type']=="best_seller"){ ?> 
                            <span class="badge badge-pill primary-color">BEST</span>
                          <?php } ?>
                          </a>
                        </strong>
                      </h5>

                      <h4 class="font-weight-bold blue-text">
                        <strong><?php echo "IDR ".number_format($clothes['price'], 0, ',', '.'); ?></strong>
                      </h4>

                    </div>
                    <!--Card content-->

                  </div>
                  <!--Card-->

                </div>
                <!--Grid column-->
          <?php 
              }
            }
          ?>
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <?php 
            $queryTotal = mysqli_query($conn, "SELECT COUNT(*) AS total FROM clothes");

            $row = mysqli_fetch_assoc($queryTotal);
            $countTotal = $row['total'];
            $page = ceil($countTotal/$limit);

            for($i=0;$i<$page;$i++){

              $active = "";
              if(isset($_GET["page"])){
                if($i+1 == $_GET["page"]){
                  $active = "active";
                }
              }
          ?>
          <li class="page-item <?php echo $active ?>">
            <a class="page-link" href="index.php?page=<?php echo $i+1 ?>"><?php echo $i+1; ?>
            </a>
          </li>
          <?php 
            }
          ?>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Pagination-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <?php include "reusable/template/footer.php"?>
  <!--/.Footer-->

  <!--SCRIPTS -->
  <?php include "reusable/template/script.php"?>
  <!--/.SCRIPTS -->
</body>

</html>