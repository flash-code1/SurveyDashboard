<?php
$web_title = "View Data";
include("header.php");
?>
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $get_farmer = mysqli_query($con, "SELECT * FROM `warehouse` WHERE id = '$id'");

    // displayall data
    if (mysqli_num_rows($get_farmer) > 0) {

        $row = mysqli_fetch_array($get_farmer);

        // Make a push
        ?>
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-6">
                  <h3>Display Warehouse data</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">View Survey Data</li>
                  </ol>
                </div>
                <div class="col-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form" action="#" method="get">
                          <div class="form-group form-control-search">
                            <div class="Typeahead Typeahead--twitterUsers">
                              <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                              </div>
                              <div class="Typeahead-menu"></div>
                              <script id="result-template" type="text/x-handlebars-template">
                                <div class="ProfileCard u-cf">                        
                                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                                <div class="ProfileCard-details">
                                <div class="ProfileCard-realName">{{name}}</div>
                                </div>
                                </div>
                              </script>
                              <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                            </div>
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Server Side Processing start-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5><?php echo $row["StateHeadquarter"]." - ".$row["EnumeratorName"] ; ?> </b> </h5><span>This page help you view all the information collected from <?php echo $row["EnumeratorName"]; ?>.</span>
                    <!-- button to create -->
                    
                    <!-- end button -->
                  </div>
                  <div class="card-body">

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Satet Headquarter: <b> <?php echo $row["StateHeadquarter"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Enumerator Name: <b> <?php echo $row["EnumeratorName"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Ward: <b> <?php echo $row["Ward"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Mode of Trasportation Tricycle: <b> <?php echo $row["Tricycle"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Mode of Trasportation AnimalDrawn: <b> <?php echo $row["AnimalDrawn"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Mode of Trasportation MotorCycle: <b> <?php echo $row["MotorCycle"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Mode of Trasportation Car/trucks: <b> <?php echo $row["Cartrucks"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Crops Cotton Delivery?: <b> <?php echo $row["Crops_Cotton"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Crops Maize Delivery?: <b> <?php echo $row["Crops_Maize"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Crops Rice Delivery?: <b> <?php echo $row["Crops_Rice"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Farmers Rice Delivered: <b> <?php echo $row["FarmerDeliveredCotton"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Farmers Metric Tons Delivered: <b> <?php echo $row["MerticTonRice"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Value of Rice Delivered: <b> NGN <?php echo number_format($row["TotalValueRice"], 2); ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Farmers Delivered Maize: <b> <?php echo $row["FarmersDeliveredMaiza"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Metric Ton Maize: <b> <?php echo $row["MetricTonMaize"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Total Maize Value: <b> NGN<?php echo number_format($row["TotalValueMaize"], 2); ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Farmer Delivered Cotton: <b> <?php echo $row["FarmerDeliveredCotton"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Metric Tons Cotton: <b> <?php echo $row["MetricTonsCotton"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Value of Cotton: <b> NGN<?php echo number_format($row["valueCotton"], 2); ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12">
                              <div class="shadow shadow-showcase p-25">
                                  <h5 class="m-0 f-18">Image of Warehouse</h5>
                                  <br>
                                  <img src="<?php echo $row["WarehousePicture"] ?>" height="100%" width="100%" alt="">
                              </div>
                             
                          </div>
                      </div>
                  
                  </div>
                </div>
              </div>
              <!-- Server Side Processing end-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
<!-- end -->
        <?php
    } else {
        ?>
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-6">
                  <h3>No Data</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">View Farmer Survey Data</li>
                  </ol>
                </div>
                <div class="col-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form" action="#" method="get">
                          <div class="form-group form-control-search">
                            <div class="Typeahead Typeahead--twitterUsers">
                              <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                              </div>
                              <div class="Typeahead-menu"></div>
                              <script id="result-template" type="text/x-handlebars-template">
                                <div class="ProfileCard u-cf">                        
                                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                                <div class="ProfileCard-details">
                                <div class="ProfileCard-realName">{{name}}</div>
                                </div>
                                </div>
                              </script>
                              <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                            </div>
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Server Side Processing start-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>NO DATA</h5><span>User Data is Missing.</span>
                    <!-- button to create -->
                    
                    <!-- end button -->
                  </div>
                </div>
              </div>
              <!-- Server Side Processing end-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
<!-- end -->
        <?php

    }
?>
<?php
} else {
    echo '<script type="text/javascript">
  $(document).ready(function(){
   swal.fire({
    type: "error",
    title: "Data Error",
    text: "No Data is being Previewed",
   showConfirmButton: false,
    timer: 2000
    }).then(
    function (result) {
      history.go(-1);
    }
    )
    });
   </script>
  ';
}
?>
<?php
include("footer.php");
?>