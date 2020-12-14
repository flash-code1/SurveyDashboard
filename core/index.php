<?php
$web_title = "Dashboard";
include("header.php");
// end header here
?>
<!-- start -->
 <!-- Page Sidebar Ends-->
 <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
 <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-6">
                  <h3>
                     Survey</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
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
            <div class="row second-chart-list third-news-update">
               <!-- Chart widget top Ends-->
               <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="row m-0 chart-main">
                    <div class="col-xl-6 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                            <div class="card">
                  <div class="card-header">
                    <?php 
                    $farmers = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_farm
                    FROM
                    `survey_data`");
                    $mmf = mysqli_fetch_array($farmers);
                    $total_farmers = number_format($mmf["all_farm"]);

                    $percent = ($mmf["all_farm"]/218000) * 100;
                    $percent = round($percent);
        
                    ?>
                    <h5> <a href="data_visualization.php"> <?php echo $total_farmers;?> / 218,000 Est. Farmers</a></h5><span> <b> Total Farmers Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                            <?php 
                    $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse`");
                    $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                    ?>
                            <div class="card">
                  <div class="card-header">
                    <h5> <a href="data_visualization_house.php"> <?php echo $total_house; ?> / 60 Active Est. Warehouse </a></h5><span> <b> Total Ware House </b> </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percentx ?>%" aria-valuenow="<?php echo $percentx; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media border-none align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart3 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4></h4><span>Household Income</span>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- ok -->
            <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Loan profile</h5>
                  </div>
                  <div class="card-body">
                    <div id="basic-bar"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Planting data</h5>
                  </div>
                  <div class="card-body">
                    <div id="plant_data"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>State Interviewed </h5>
                  </div>
                  <div class="card-body apex-chart">
                    <div id="state_int"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Crop Grown </h5>
                  </div>
                  <div class="card-body apex-chart">
                    <div id="crop_g"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>House Hold</h5>
                  </div>
                  <div class="card-body apex-chart">
                    <div id="household"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Crop Delivered to Warehouse</h5>
                  </div>
                  <div class="card-body">
                    <div id="modet"></div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Warehouse State Hq.</h5>
                  </div>
                  <div class="card-body apex-chart">
                    <div id="state_hq"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Warehouse --.</h5>
                  </div>
                  <div class="card-body apex-chart">
                    <div id="state_hq"></div>
                  </div>
                </div>
              </div> -->

              <!-- STAT -->
             
              <!-- FINSH -->
              <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
                <div class="card earning-card">
                  <div class="card-body p-0">
                    <div class="row m-0">
                      <div class="col-xl-3 earning-content p-0">
                        <div class="row m-0 chart-left">
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>Dashboard</h5>
                            <p class="font-roboto">Loan Profile</p>
                          </div>
                          <?php
                          // this code section is for sumary of cash to the dashboard\
                          $query_male_amt = mysqli_query($con, "SELECT SUM(valueCotton) AS amount FROM `warehouse`");
                          $qma = mysqli_fetch_array($query_male_amt);
                          $Cotton_amt = number_format($qma["amount"], 2);
                          // code section for the female
                          // this code section is for sumary of cash to the dashboard\
                          $query_female_amt = mysqli_query($con, "SELECT SUM(TotalValueMaize) AS amount FROM `warehouse`");
                          $qfa = mysqli_fetch_array($query_female_amt);
                          $Rice_amt = number_format($qfa["amount"], 2);

                          // Making Maize
                          $query_maize_amt = mysqli_query($con, "SELECT SUM(TotalValueRice) AS amount FROM `warehouse`");
                          $qta = mysqli_fetch_array($query_maize_amt);
                          $Maize_amt = number_format($qta["amount"], 2);
                          // total code
                          ?>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>NGN <?php echo $Cotton_amt; ?> </h5>
                            <p class="font-roboto">Cotton</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>NGN <?php echo $Rice_amt; ?></h5>
                            <p class="font-roboto">Rice</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>NGN <?php echo $Maize_amt; ?></h5>
                            <p class="font-roboto">Maize</p>
                          </div>
                          <div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient">Summary</a></div>
                        </div>
                      </div>
                      <div class="col-xl-9 p-0">
                        <div class="chart-right">
                          <div class="row m-0 p-tb">
                            <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                              <div class="inner-top-left">
                                <ul class="d-flex list-unstyled">
                                  <!-- <li class="active">Yearly</li> -->
                                </ul>
                              </div>
                            </div>
                            <!-- <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                              <div class="inner-top-right">
                                <ul class="d-flex list-unstyled justify-content-end">
                                  <li>Cotton</li>
                                  <li>Rice</li>
                                  <li>Maize</li>
                                </ul>
                              </div>
                            </div> -->
                          </div>
                          <div class="row">
                            <div class="col-xl-12">
                              <div class="card-body p-0">
                                <div class="current-sale-container">
                                  <div id="multic"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row border-top m-0">
                          <div class="col-xl-4 pl-0 col-md-6 col-sm-6">
                            <div class="media p-0">
                              <div class="media-left"><i class="icofont icofont-farmer"></i></div>
                              <div class="media-body">
                                <h6>Cotton Delivered</h6>
                                <?php
                            $query_male_loan = mysqli_query($con, "SELECT 
                            SUM(FarmerDeliveredCotton) AS total_cott
                        FROM
                        `warehouse`");
                        $tm = mysqli_fetch_array($query_male_loan);
                        $total_male = number_format($tm["total_cott"]);

                        // code for females
                        $query_female_loan = mysqli_query($con, "SELECT 
                        SUM(FarmerDeliveredRice) AS total_female
                    FROM
                    `warehouse`");
                    $tf = mysqli_fetch_array($query_female_loan);
                    $total_female = number_format($tf["total_female"]);

                    // code for total male and female
                    $query_maize_loan = mysqli_query($con, "SELECT 
                        SUM(FarmersDeliveredMaiza) AS total_users
                    FROM
                    `warehouse`");
                    $tu = mysqli_fetch_array($query_maize_loan);
                    $total_maize_del = number_format($tu["total_users"]);
                            ?>
                                <p><?php echo $total_male; ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="media p-0">
                              <div class="media-left bg-secondary"><i class="icofont icofont-price"></i></div>
                              <div class="media-body">
                                <h6>Rice Delivered</h6>
                                <p><?php echo $total_female; ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-12 pr-0">
                            <div class="media p-0">
                              <div class="media-left bg-success"><i class="icofont icofont-crop-plant"></i></div>
                              <div class="media-body">
                                <h6>Maize Delivered</h6>
                                <p><?php echo $total_maize_del; ?> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Chart widget top Start-->
              <!-- HARVESTED BAG QUNTITYT -->
            <!-- <div class="row"> -->
              <?php
              $query_user_maize = mysqli_query($con, "SELECT 
              SUM(*) AS total_maize
          FROM
          `warehouse` WHERE Crops_Maize = '1'");
          $tm = mysqli_fetch_array($query_user_maize);
          $total_maize = number_format($tm["total_maize"]);

          // cotton
          $query_cotton = mysqli_query($con, "SELECT 
              SUM(*) AS total_cotton
          FROM
          `warehouse` WHERE Crops_Cotton = '1'");
          $tcx = mysqli_fetch_array($query_cotton);
          $total_cotton = number_format($tcx["total_cotton"]);

          // rice
          $query_rice = mysqli_query($con, "SELECT 
              SUM(*) AS total_rice
          FROM
          `warehouse` WHERE Crops_Rice = '1'");
          $tcr = mysqli_fetch_array($query_rice);
          $total_rice = number_format($tcr["total_rice"]);
          
          //  DONE RICE
              ?>
              <div class="col-xl-9 xl-100 chart_data_left box-col-12" hidden>
                <div class="card o-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body">
                      <div class="col-5">
                        <h6 class="f-w-600 font-primary">Cotton Grown </h6><span class="num"><span class="counter">90</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
                      </div>
                      <div class="col-7 text-right">
                        <h4 class="num total-value"><?php echo $total_cotton; ?> -<span class="counter">Planted Cotton</span></h4>
                      </div>
                    </div>
                    <div>
                      <div id="chart-widget1"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 xl-100 chart_data_left box-col-12" hidden>
                <div class="card o-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body">
                      <div class="col-7">
                        <h6 class="f-w-600 font-secondary">Maize Grown</h6><span class="num"><span class="counter">4.5</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
                      </div>
                      <div class="col-5 text-right">
                      <h4 class="num total-value"><?php echo $total_maize; ?> -<span class="counter">Planted Maize</span></h4>
                      </div>
                    </div>
                    <div id="chart-widget2">
                      <div class="flot-chart-placeholder" id="chart-widget-top-second"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 xl-100 chart_data_left box-col-12" hidden>
                <div class="card o-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body">
                      <div class="col-8">
                        <h6 class="f-w-600 font-success">Rice Grown</h6><span class="num"><span class="counter">5.5</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
                      </div>
                      <div class="col-4 text-right">
                      <h4 class="num total-value"><?php echo $total_rice; ?>-<span class="counter">Planted Rice</span></h4>
                      </div>
                    </div>
                    <div id="chart-widget3">
                      <div class="flot-chart-placeholder" id="chart-widget-top-third"></div>
                    </div>
                  </div>
                </div>
              </div>
              
            <!-- </div> -->
            
            <div class="col-xl-12">
              <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- MAP -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPrkS4dgB9aLB0rRB-V3StNCwrY9k-p3g&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
                <div class="card">
                  <div class="card-header">
                    <h5>Farmers and Warehouse Location</h5>
                    <div class="row">
                    <!-- <div class="col-md-5">
                    <img src="https://firebasestorage.googleapis.com/v0/b/crush-culture.appspot.com/o/Location%2Fverified_new.png?alt=media&token=4addea67-5557-45d4-b41f-f94c9b571983" height="20px" width="20px" alt="">
                    <span>Farmers</span> 
                    </div> -->
                    <div class="col-md-5">
                    <img src="https://firebasestorage.googleapis.com/v0/b/crush-culture.appspot.com/o/Location%2Fupcoming_new.png?alt=media&token=41d3771e-65af-47c6-ad0d-53cee51c47b9" height="20px" width="20px" alt="">
                    <span>Warehouse</span> 
                    </div>
                    </div>
                    
                  </div>
                  <div class="card-body">
                  <div class="map-js-height" id="map"></div>
                  </div>
                  <!-- PHP SCRIPT TO GET ALL DATA -->
                  <?php
                  $query_two_coordinate = mysqli_query($con, "SELECT * FROM `warehouse` WHERE CurrentLocationLatitude != '' AND CurrentLocationLongitude != '' ORDER BY id DESC");
                  ?>
                  <script>
                      let map;
let lat;
let lng;
                      if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    console.log("Geolocation is not supported by this browser.");
  }
 function showPosition(position) {
  lat = " "+position.coords.latitude;
  lng = " "+position.coords.longitude;
  initMap();
}
// contry restriction
const NEW_NIGERIA_BOUNDS = {
        north: 2.213965683043,
        south: 10.124121933043,
        west: 2.131202795549269,
        east: 15.982786876781637,
      };
function initMap() {
    
  map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(lat, lng),
    restriction: {
       latLngBounds: NEW_NIGERIA_BOUNDS,
       strictBounds: false,
    },
    zoom: 7,
    streetViewControl: false,
    mapTypeControl: false,
  });
  const iconBase =
    "https://firebasestorage.googleapis.com/v0/b/crush-culture.appspot.com/o/Location%2F";
  const icons = {
    library: {
      icon: iconBase + "upcoming_new.png?alt=media&token=41d3771e-65af-47c6-ad0d-53cee51c47b9",
    },
    info: {
      icon: iconBase + "verified_new.png?alt=media&token=4addea67-5557-45d4-b41f-f94c9b571983",
    },
  };
  const features = [
    <?php
    if (mysqli_num_rows($query_two_coordinate) > 0) {
      while ($row = mysqli_fetch_array($query_two_coordinate)) {
        $lat = $row["CurrentLocationLatitude"];
        $lng = $row["CurrentLocationLongitude"];
        $image_type = "".'"library"'."";
        // echo $lat.$image_type;
        $frameit = "{ position: new google.maps.LatLng($lat, $lng), type: $image_type }, ";
        echo $frameit;
    ?>
    <?php
    }
  }
    ?>
  ];

  // Create markers.
  for (let i = 0; i < features.length; i++) {
    const marker = new google.maps.Marker({
      position: features[i].position,
      icon: icons[features[i].type].icon,
      map: map,
    });
  }
}

                  </script>
                </div>
              </div>
              
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card o-hidden profile-greeting">
                  <div class="card-body">
                    <div class="media">
                      <div class="badge-groups w-100">
                        <div class="badge f-12"><i class="mr-1" data-feather="clock"></i><span id="txt"></span></div>
                        <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                      </div>
                    </div>
                    <div class="greeting-user text-center">
                      <div class="profile-vector"><img class="img-fluid" src="../assets/images/dashboard/welcome.png" alt=""></div>
                      <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span></span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                      <p><span> Check the time.</span></p>
                      <div class="whatsnew-btn"><a class="btn btn-primary">Data Virtualization</a></div>
                      <div class="left-icon"><i class="fa fa-bell"> </i></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
                <div class="card gradient-primary o-hidden">
                  <div class="card-body">
                    <div class="setting-dot">
                      <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
                    </div>
                    <div class="default-datepicker">
                      <div class="datepicker-here" data-language="en"></div>
                    </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
<!-- end -->
<!-- PHP QUERY FOR DATA DISPLAY -->
<?php
$lp_cash = mysqli_query($con, "SELECT 
SUM(CashAmount) AS lp_cash
FROM
`survey_data`");
$lpc = mysqli_fetch_array($lp_cash);
$total_maize = $lpc["lp_cash"];

// Water Pump
$lp_pump = mysqli_query($con, "SELECT 
SUM(WaterPumpNairaValue) AS lp_pump
FROM
`survey_data`");
$lpp = mysqli_fetch_array($lp_pump);
$total_pump = $lpp["lp_pump"];

// Water Pump
$lp_blend = mysqli_query($con, "SELECT 
SUM(FertilizerSpecialBlendNairaValue) AS lp_blend
FROM
`survey_data`");
$lpb = mysqli_fetch_array($lp_blend);
$total_blend = $lpb["lp_blend"];

// Fertilizer Organic\
$lp_organic = mysqli_query($con, "SELECT 
SUM(FertilizerOrganicNairaValue) AS lp_organic
FROM
`survey_data`");
$lpo = mysqli_fetch_array($lp_organic);
$total_organic = $lpo["lp_organic"];

// NPK
$lp_npk = mysqli_query($con, "SELECT 
SUM(FertilizerNPKNairaValue) AS lp_npk
FROM
`survey_data`");
$lpn = mysqli_fetch_array($lp_npk);
$total_npk = $lpn["lp_npk"];

// HERBIC PRE
$lp_pre_em = mysqli_query($con, "SELECT 
SUM(HerbicidePre_EmergencePerLitreNairaValue) AS lp_pre
FROM
`survey_data`");
$lppe = mysqli_fetch_array($lp_pre_em);
$total_pre_em = $lppe["lp_pre"];

// HERBIC POST
$lp_pre_em = mysqli_query($con, "SELECT 
SUM(HerbicidePost_EmergencePerLitreNairaValue) AS lp_post
FROM
`survey_data`");
$lpps = mysqli_fetch_array($lp_pre_em);
$total_post_em = $lpps["lp_post"];

// pesticide
$lp_pest = mysqli_query($con, "SELECT 
SUM(PesticidesNairaValue) AS lp_pest
FROM
`survey_data`");
$lpst = mysqli_fetch_array($lp_pest);
$total_pest = $lpst["lp_pest"];

// MICRO NUTRIENT
$lp_micro = mysqli_query($con, "SELECT 
COUNT(*) AS lp_micro
FROM
`survey_data` WHERE Items_MicroNutrient = '1'");
$lpmc = mysqli_fetch_array($lp_micro);
$total_micro = $lpmc["lp_micro"];

// SEED
$lp_seed = mysqli_query($con, "SELECT 
SUM(CertifiedSeedPerKgtNairaValue) AS lp_seed
FROM
`survey_data`");
$lpsd = mysqli_fetch_array($lp_seed);
$total_seed = $lpsd["lp_seed"];

// Sprayer
$lp_sprayer = mysqli_query($con, "SELECT 
SUM(KnapsackSprayerNairaValue) AS lp_sprayer
FROM
`survey_data`");
$lpsy = mysqli_fetch_array($lp_sprayer);
$total_sprayer = $lpsy["lp_sprayer"];

// RUN JSON CODE
$loan_profile_data = $total_maize.", ".$total_pump.", ".$total_blend.", ".$total_organic.", ".$total_npk.", ".$total_pre_em.", ".$total_post_em.", ".$total_pest.", ".$total_micro.", ".$total_seed.", ".$total_sprayer;




// Data for planting data
$current_date = date('Y-m-d');
$last_date = date('Y-m-d', strtotime("-1 months", strtotime($current_date)));
$two_date = date('Y-m-d', strtotime("-2 months", strtotime($current_date)));
$three_date = date('Y-m-d', strtotime("-3 months", strtotime($current_date)));
$final_date = date('Y-m-d', strtotime("-4 months", strtotime($current_date)));

// Data description in Text\
$current_month = date('M', strtotime($current_date));
$last_month = date('M', strtotime($last_date));
$two_month = date('M', strtotime($two_date));
$three_month = date('M', strtotime($three_date));

// query data


// LAND CLEARING
$select_land_current = mysqli_query($con, "SELECT SUM(LandClearing) as land_clear FROM `survey_data` WHERE (CurrentDate > '$last_date') AND (CurrentDate <= '$current_date')");
$qx = mysqli_fetch_array($select_land_current);
$land_clear_current = $qx["land_clear"];
if ($land_clear_current == "") {
  $land_clear_current = 0;
}
// clearing data one moneth
$select_land_last = mysqli_query($con, "SELECT SUM(LandClearing) as land_clear FROM `survey_data` WHERE (CurrentDate > '$two_date') AND (CurrentDate <= '$last_date')");
$qxx = mysqli_fetch_array($select_land_last);
$land_clear_last = $qxx["land_clear"];
if ($land_clear_last == "") {
  $land_clear_last = 0;
}
// two month
$select_land_two = mysqli_query($con, "SELECT SUM(LandClearing) as land_clear FROM `survey_data` WHERE (CurrentDate > '$three_date') AND (CurrentDate <= '$two_date')");
$qxxx = mysqli_fetch_array($select_land_two);
$land_clear_two = $qxxx["land_clear"];
if ($land_clear_two == "") {
  $land_clear_two = 0;
}
// 4th month
$select_land_three = mysqli_query($con, "SELECT SUM(LandClearing) as land_clear FROM `survey_data` WHERE (CurrentDate > '$final_date') AND (CurrentDate <= '$three_date')");
$qxxxx = mysqli_fetch_array($select_land_three);
$land_clear_three = $qxxxx["land_clear"];
if ($land_clear_three == "") {
  $land_clear_three = 0;
}

//  echo $land_clear_three." ,".$land_clear_two." ,". $land_clear_last." ,".$land_clear_current."--"; 

// HarrowingG
$select_harrow_current = mysqli_query($con, "SELECT SUM(Harrowing) as harrow FROM `survey_data` WHERE (CurrentDate > '$last_date') AND (CurrentDate <= '$current_date')");
$hx = mysqli_fetch_array($select_harrow_current);
$harrow_current = $hx["harrow"];
if ($harrow_current == "") {
  $harrow_current = 0;
}
// clearing data one moneth
$select_harrow_last = mysqli_query($con, "SELECT SUM(Harrowing) as harrow FROM `survey_data` WHERE (CurrentDate > '$two_date') AND (CurrentDate <= '$last_date')");
$hxx = mysqli_fetch_array($select_harrow_last);
$harrow_last = $hxx["harrow"];
if ($harrow_last == "") {
  $harrow_last = 0;
}
// two month
$select_harrow_two = mysqli_query($con, "SELECT SUM(Harrowing) as harrow FROM `survey_data` WHERE (CurrentDate > '$three_date') AND (CurrentDate <= '$two_date')");
$hxxx = mysqli_fetch_array($select_harrow_two);
$harrow_two = $hxxx["harrow"];
if ($harrow_two == "") {
  $harrow_two = 0;
}
// 4th month
$select_harrow_three = mysqli_query($con, "SELECT SUM(Harrowing) as harrow FROM `survey_data` WHERE (CurrentDate > '$final_date') AND (CurrentDate <= '$three_date')");
$hxxxx = mysqli_fetch_array($select_harrow_three);
$harrow_three = $hxxxx["harrow"];
if ($harrow_three == "") {
  $harrow_three = 0;
}

//  echo $land_clear_three." ,".$land_clear_two." ,". $land_clear_last." ,".$land_clear_current."--"; 

// Planting
$select_plant_current = mysqli_query($con, "SELECT SUM(Planting) as plant FROM `survey_data` WHERE (CurrentDate > '$last_date') AND (CurrentDate <= '$current_date')");
$px = mysqli_fetch_array($select_plant_current);
$plant_current = $px["plant"];
if ($plant_current == "") {
  $plant_current = 0;
}
// clearing data one moneth
$select_plant_last = mysqli_query($con, "SELECT SUM(Planting) as plant FROM `survey_data` WHERE (CurrentDate > '$two_date') AND (CurrentDate <= '$last_date')");
$pxx = mysqli_fetch_array($select_plant_last);
$plant_last = $pxx["plant"];
if ($plant_last == "") {
  $plant_last = 0;
}
// two month
$select_plant_two = mysqli_query($con, "SELECT SUM(Planting) as plant FROM `survey_data` WHERE (CurrentDate > '$three_date') AND (CurrentDate <= '$two_date')");
$pxxx = mysqli_fetch_array($select_plant_two);
$plant_two = $pxxx["plant"];
if ($plant_two == "") {
  $plant_two = 0;
}
// 4th month
$select_plant_three = mysqli_query($con, "SELECT SUM(Planting) as plant FROM `survey_data` WHERE (CurrentDate > '$final_date') AND (CurrentDate <= '$three_date')");
$pxxxx = mysqli_fetch_array($select_plant_three);
$plant_three = $pxxxx["plant"];
if ($plant_three == "") {
  $plant_three = 0;
}


// HARVESTING
$select_harvest_current = mysqli_query($con, "SELECT COUNT(*) as harvest FROM `survey_data` WHERE (CurrentDate > '$last_date') AND (CurrentDate <= '$current_date') AND harvested = 'Yes'");
$hax = mysqli_fetch_array($select_harvest_current);
$harvest_current = $hax["harvest"];
if ($harvest_current == "") {
  $harvest_current = 0;
}
// clearing data one moneth
$select_harvest_last = mysqli_query($con, "SELECT COUNT(*) as harvest FROM `survey_data` WHERE (CurrentDate > '$two_date') AND (CurrentDate <= '$last_date') AND harvested = 'Yes'");
$haxx = mysqli_fetch_array($select_harvest_last);
$harvest_last = $haxx["harvest"];
if ($harvest_last == "") {
  $harvest_last = 0;
}
// two month
$select_harvest_two = mysqli_query($con, "SELECT COUNT(*) as harvest FROM `survey_data` WHERE (CurrentDate > '$three_date') AND (CurrentDate <= '$two_date') AND harvested = 'Yes'");
$haxxx = mysqli_fetch_array($select_harvest_two);
$harvest_two = $haxxx["harvest"];
if ($harvest_two == "") {
  $harvest_two = 0;
}
// 4th month
$select_harvest_three = mysqli_query($con, "SELECT COUNT(*) as harvest FROM `survey_data` WHERE (CurrentDate > '$final_date') AND (CurrentDate <= '$three_date') AND harvested = 'Yes'");
$haxxxx = mysqli_fetch_array($select_harvest_three);
$harvest_three = $haxxxx["harvest"];
if ($harvest_three == "") {
  $harvest_three = 0;
}


// OTHERS
// othering
$select_other_current = mysqli_query($con, "SELECT SUM(OtherSs) as other FROM `survey_data` WHERE (CurrentDate > '$last_date') AND (CurrentDate <= '$current_date')");
$ox = mysqli_fetch_array($select_other_current);
$other_current = $ox["other"];
if ($other_current == "") {
  $other_current = 0;
}
// clearing data one moneth
$select_other_last = mysqli_query($con, "SELECT SUM(OtherSs) as other FROM `survey_data` WHERE (CurrentDate > '$two_date') AND (CurrentDate <= '$last_date')");
$oxx = mysqli_fetch_array($select_other_last);
$other_last = $oxx["other"];
if ($other_last == "") {
  $other_last = 0;
}
// two month
$select_other_two = mysqli_query($con, "SELECT SUM(OtherSs) as other FROM `survey_data` WHERE (CurrentDate > '$three_date') AND (CurrentDate <= '$two_date')");
$oxxx = mysqli_fetch_array($select_other_two);
$other_two = $oxxx["other"];
if ($other_two == "") {
  $other_two = 0;
}
// 4th month
$select_other_three = mysqli_query($con, "SELECT SUM(OtherSs) as other FROM `survey_data` WHERE (CurrentDate > '$final_date') AND (CurrentDate <= '$three_date')");
$oxxxx = mysqli_fetch_array($select_other_three);
$other_three = $oxxxx["other"];
if ($other_three == "") {
  $other_three = 0;
}


// END SURVERY DATA DATE


// UPLOAD CURRENT FOR 
// Data for planting data
$current_date_w = date('Y/m/d');
$last_date_w = date('Y/m/d', strtotime("-1 months", strtotime($current_date_w)));
$two_date_w = date('Y/m/d', strtotime("-2 months", strtotime($current_date_w)));
$three_date_w = date('Y/m/d', strtotime("-3 months", strtotime($current_date_w)));
$final_date_w = date('Y/m/d', strtotime("-4 months", strtotime($current_date_w)));

// Data description in Text\
// $current_month = date('M', strtotime($current_date));
// $last_month = date('M', strtotime($last_date));
// $two_month = date('M', strtotime($two_date));
// $three_month = date('M', strtotime($three_date));

// query data


// LAND CLEARING
$select_cotton_current = mysqli_query($con, "SELECT SUM(valueCotton) as value_cotton FROM `warehouse` WHERE (SubmissionDate > '$last_date') AND (SubmissionDate <= '$current_date')");
$qlc = mysqli_fetch_array($select_cotton_current);
$value_cotton_current = $qlc["value_cotton"];
if ($value_cotton_current == "") {
  $value_cotton_current = 0;
}
// clearing data one moneth
$select_cotton_last = mysqli_query($con, "SELECT SUM(valueCotton) as value_cotton FROM `warehouse` WHERE (SubmissionDate > '$two_date') AND (SubmissionDate <= '$last_date')");
$qlcx = mysqli_fetch_array($select_cotton_last);
$value_cotton_last = $qlcx["value_cotton"];
if ($value_cotton_last == "") {
  $value_cotton_last = 0;
}
// two month
$select_cotton_two = mysqli_query($con, "SELECT SUM(valueCotton) as value_cotton FROM `warehouse` WHERE (SubmissionDate > '$three_date') AND (SubmissionDate <= '$two_date')");
$qlcxx = mysqli_fetch_array($select_cotton_two);
$value_cotton_two = $qlcxx["value_cotton"];
if ($value_cotton_two == "") {
  $value_cotton_two = 0;
}
// 4th month
$select_cotton_three = mysqli_query($con, "SELECT SUM(valueCotton) as value_cotton FROM `warehouse` WHERE (SubmissionDate > '$final_date') AND (SubmissionDate <= '$three_date')");
$qlcxxx = mysqli_fetch_array($select_cotton_three);
$value_cotton_three = $qlcxxx["value_cotton"];
if ($value_cotton_three == "") {
  $value_cotton_three = 0;
}


// MAKING A DATA PUSH MAIZE
$select_cotton_current = mysqli_query($con, "SELECT SUM(TotalValueMaize) as value_maize FROM `warehouse` WHERE (SubmissionDate > '$last_date') AND (SubmissionDate <= '$current_date')");
$qlm = mysqli_fetch_array($select_cotton_current);
$value_maize_current = $qlm["value_maize"];
if ($value_maize_current == "") {
  $value_maize_current = 0;
}
// clearing data one moneth
$select_maize_last = mysqli_query($con, "SELECT SUM(TotalValueMaize) as value_maize FROM `warehouse` WHERE (SubmissionDate > '$two_date') AND (SubmissionDate <= '$last_date')");
$qlmx = mysqli_fetch_array($select_maize_last);
$value_maize_last = $qlmx["value_maize"];
if ($value_maize_last == "") {
  $value_maize_last = 0;
}
// two month
$select_maize_two = mysqli_query($con, "SELECT SUM(TotalValueMaize) as value_maize FROM `warehouse` WHERE (SubmissionDate > '$three_date') AND (SubmissionDate <= '$two_date')");
$qlmxx = mysqli_fetch_array($select_maize_two);
$value_maize_two = $qlmxx["value_maize"];
if ($value_maize_two == "") {
  $value_maize_two = 0;
}
// 4th month
$select_maize_three = mysqli_query($con, "SELECT SUM(TotalValueMaize) as value_maize FROM `warehouse` WHERE (SubmissionDate > '$final_date') AND (SubmissionDate <= '$three_date')");
$qlmxxx = mysqli_fetch_array($select_maize_three);
$value_maize_three = $qlmxxx["value_maize"];
if ($value_maize_three == "") {
  $value_maize_three = 0;
}



// RICE

$select_rice_current = mysqli_query($con, "SELECT SUM(TotalValueRice) as value_rice FROM `warehouse` WHERE (SubmissionDate > '$last_date') AND (SubmissionDate <= '$current_date')");
$qlr = mysqli_fetch_array($select_rice_current);
$value_rice_current = $qlr["value_rice"];
if ($value_rice_current == "") {
  $value_rice_current = 0;
}
// clearing data one moneth
$select_rice_last = mysqli_query($con, "SELECT SUM(TotalValueRice) as value_rice FROM `warehouse` WHERE (SubmissionDate > '$two_date') AND (SubmissionDate <= '$last_date')");
$qlrx = mysqli_fetch_array($select_rice_last);
$value_rice_last = $qlrx["value_rice"];
if ($value_rice_last == "") {
  $value_rice_last = 0;
}
// two month
$select_rice_two = mysqli_query($con, "SELECT SUM(TotalValueRice) as value_rice FROM `warehouse` WHERE (SubmissionDate > '$three_date') AND (SubmissionDate <= '$two_date')");
$qlrxx = mysqli_fetch_array($select_rice_two);
$value_rice_two = $qlrxx["value_rice"];
if ($value_rice_two == "") {
  $value_rice_two = 0;
}
// 4th month
$select_rice_three = mysqli_query($con, "SELECT SUM(TotalValueRice) as value_rice FROM `warehouse` WHERE (SubmissionDate > '$final_date') AND (SubmissionDate <= '$three_date')");
$qlrxxx = mysqli_fetch_array($select_rice_three);
$value_rice_three = $qlrxxx["value_rice"];
if ($value_rice_three == "") {
  $value_rice_three = 0;
}
// Done with Survey Data
// State Interviewed Adamawa
$lp_adam = mysqli_query($con, "SELECT 
COUNT(*) AS lp_adam
FROM
`survey_data` WHERE StateInterview = 'Adamawa'");
$lad = mysqli_fetch_array($lp_adam);
$total_adam = $lad["lp_adam"];
// State Interviewd Gombe
$lp_gombe = mysqli_query($con, "SELECT 
COUNT(*) AS lp_gombe
FROM
`survey_data` WHERE StateInterview = 'Gombe'");
$lgb = mysqli_fetch_array($lp_gombe);
$total_gombe = $lgb["lp_gombe"];
// State Yobe
$lp_yobe = mysqli_query($con, "SELECT 
COUNT(*) AS lp_yobe
FROM
`survey_data` WHERE StateInterview = 'Yobe'");
$lyb = mysqli_fetch_array($lp_yobe);
$total_yobe = $lyb["lp_yobe"];
// state Borno
$lp_borno = mysqli_query($con, "SELECT 
COUNT(*) AS lp_borno
FROM
`survey_data` WHERE StateInterview = 'Borno'");
$lbr = mysqli_fetch_array($lp_borno);
$total_borno = $lbr["lp_borno"];
// Taraba
$lp_taraba = mysqli_query($con, "SELECT 
COUNT(*) AS lp_taraba
FROM
`survey_data` WHERE StateInterview = 'Taraba'");
$ltr = mysqli_fetch_array($lp_taraba);
$total_taraba = $ltr["lp_taraba"];

// Anambra
// $lp_bra = mysqli_query($con, "SELECT 
// COUNT(*) AS lp_bra
// FROM
// `survey_data` WHERE StateInterview = 'Anambra'");
// $ltv = mysqli_fetch_array($lp_bra);
// $total_anambra = $ltv["lp_bra"];


$state_intv = $total_adam.", ".$total_gombe.", ".$total_yobe.", ".$total_borno.", ".$total_taraba;





// Crop Grown Data
// MAIZE 
$lp_maize = mysqli_query($con, "SELECT 
COUNT(*) AS lp_maize
FROM
`survey_data` WHERE CropGrown = 'Maize'");
$lme = mysqli_fetch_array($lp_maize);
$total_maize_grown = $lme["lp_maize"];
//RICE
$lp_rice = mysqli_query($con, "SELECT 
COUNT(*) AS lp_rice
FROM
`survey_data` WHERE CropGrown = 'Rice'");
$lri = mysqli_fetch_array($lp_rice);
$total_rice_grown = $lri["lp_rice"];
//COTTON
$lp_cotton = mysqli_query($con, "SELECT 
COUNT(*) AS lp_cotton
FROM
`survey_data` WHERE CropGrown = 'Cotton'");
$lco = mysqli_fetch_array($lp_cotton);
$total_cotton_grown = $lco["lp_cotton"];

$tot_crop_g = $total_maize_grown.", ".$total_rice_grown.", ".$total_cotton_grown;


// LessHouse hold
$lp_five = mysqli_query($con, "SELECT 
COUNT(*) AS lp_five
FROM
`survey_data` WHERE AgriculturalEnterprise = 'Less than 50,000'");
$lve = mysqli_fetch_array($lp_five);
$total_five_first = $lve["lp_five"];

// Fiv to one
$lp_fort = mysqli_query($con, "SELECT 
COUNT(*) AS lp_fe
FROM
`survey_data` WHERE AgriculturalEnterprise = '51,000–150,000'");
$mfe = mysqli_fetch_array($lp_fort);
$total_fort = $mfe["lp_fe"];
// two hundred
$lp_hund = mysqli_query($con, "SELECT 
COUNT(*) AS lp_hund
FROM
`survey_data` WHERE AgriculturalEnterprise = '151,000-250,000'");
$hn = mysqli_fetch_array($lp_hund);
$total_hund = $hn["lp_hund"];

// three
$lp_thr = mysqli_query($con, "SELECT 
COUNT(*) AS lp_thr
FROM
`survey_data` WHERE AgriculturalEnterprise = '251,000-300,000'");
$ioo = mysqli_fetch_array($lp_thr);
$total_thr= $ioo["lp_thr"];

// fou
$lp_fou = mysqli_query($con, "SELECT 
COUNT(*) AS lp_fou
FROM
`survey_data` WHERE AgriculturalEnterprise = '301,000-400,000'");
$xhj = mysqli_fetch_array($lp_fou);
$total_fou = $xhj["lp_fou"];

// fve
$lp_fve = mysqli_query($con, "SELECT 
COUNT(*) AS lp_fve
FROM
`survey_data` WHERE AgriculturalEnterprise = '401,000-500,000'");
$fvb = mysqli_fetch_array($lp_fve);
$total_fve = $fvb["lp_fve"];

// More
// fou
$lp_mre = mysqli_query($con, "SELECT 
COUNT(*) AS lp_mre
FROM
`survey_data` WHERE AgriculturalEnterprise = 'More than 500,000'");
$xhd = mysqli_fetch_array($lp_mre);
$total_mre = $xhd["lp_mre"];

$house_hold_get = $total_five_first.", ".$total_fort.", ".$total_hun.", ".$total_fou.", ".$total_fve.", ".$total_mre; 



// VALUE OF DELIVERED CROP$

$query_dev_cotton = mysqli_query($con, "SELECT SUM(MetricTonsCotton) cotton_value FROM `warehouse`");
$qdc = mysqli_fetch_array($query_dev_cotton);
$cotton_value = $qdc["cotton_value"];
if ($cotton_value == "") {
  $cotton_value = 0;
}

// Maize Value
$query_dev_maize = mysqli_query($con, "SELECT SUM(MetricTonMaize) maize_value FROM `warehouse`");
$qdm = mysqli_fetch_array($query_dev_maize);
$maize_value = $qdm["maize_value"];
if ($maize_value == "") {
  $maize_value = 0;
}

// Maize Value
$query_dev_rice = mysqli_query($con, "SELECT SUM(MerticTonRice) rice_value FROM `warehouse`");
$qdr = mysqli_fetch_array($query_dev_rice);
$rice_value = $qdr["rice_value"];
if ($rice_value == "") {
  $rice_value = 0;
}

$output_dev_value = $cotton_value.", ".$maize_value.", ".$rice_value;

?>
<!-- 1. LOAN PROF -->
<!-- EMD PHP QUERY -->

<!-- DATA INTERVAL FOR BUSINESS -->
<!-- JAVASCRIPT CHART -->
<script>
  // House hold
var house_hold = {
  chart: {
    height: 350,
        type: 'bar',
        toolbar:{
          show: false
        }
  },
  plotOptions: {
        bar: {
            horizontal: true,
        }
    },
  dataLabels: {
        enabled: false
    },
    series: [{
        data: [<?php echo $house_hold_get ?>]
    }],
    xaxis: {
        categories: ['Less than 50', '51,000 - 150,000', '151,000 - 250,000', '251,000 - 300,000', '301,000 - 400,000', '401,000 - 500,000', 'More than 500,000'],
    }
}

var househ = new ApexCharts(
    document.querySelector("#household"),
    house_hold
);

househ.render();

  // loan profile
var loan_profile = {
  chart: {
    height: 350,
        type: 'bar',
        toolbar:{
          show: false
        }
  },
  plotOptions: {
        bar: {
            horizontal: true,
        }
    },
  dataLabels: {
        enabled: false
    },
    series: [{
        data: [<?php echo $loan_profile_data ?>]
    }],
    xaxis: {
        categories: ['Cash', 'Water Pump', 'Fertilizer Special Blend', 'Fertilizer Organic', 'Fertilizer NPK', 'Herbicide Pre_Emergence PerLitre', 'Herbicide Post_Emergence PerLitre', 'Pesticides', 'Micro-nutrient', 'Certified Seed(Kg)', 'Knapsack Sprayer'],
    }
}

var loan_p = new ApexCharts(document.querySelector("#basic-bar"), loan_profile);

loan_p.render();

// Planting Data

// column chart
var plant = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar:{
          show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            endingShape: 'rounded',
            columnWidth: '55%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Land Clearing',
        data: [<?php echo $land_clear_three." ,".$land_clear_two." ,". $land_clear_last." ,".$land_clear_current; ?>]
    }, {
        name: 'Harrowing',
        data: [<?php echo $harrow_three." ,".$harrow_two." ,". $harrow_last." ,".$harrow_current; ?>]
    }, 
    {
        name: 'Planting',
        data: [<?php echo $plant_three." ,".$plant_two." ,". $plant_last." ,".$plant_current; ?>]
    },
    {
        name: 'Harvesting',
        data: [<?php echo $harvest_three." ,".$harvest_two." ,". $harvest_last." ,".$harvest_current; ?>]
    },
    {
        name: 'Others',
        data: [<?php echo $other_three." ,".$other_two." ,". $other_last." ,".$other_current; ?>]
    }],
    xaxis: {
        categories: [   '<?php echo $three_month;?>', '<?php echo $two_month; ?>', '<?php echo $last_month; ?>', '<?php echo $current_month; ?>',],
    },
    yaxis: {
        title: {
            text: 'NGN (thousands)'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "₦ " + val
            }
        }
    },
    colors:[  '#8F6AFB', '#FE3158', '#51bb25', '#F8D62B']
}

var plant_data = new ApexCharts(
    document.querySelector("#plant_data"),
    plant
);

plant_data.render();



// state Interviewed
var state_int = {
  chart: {
    height: 350,
        type: 'bar',
        toolbar:{
          show: false
        }
  },
  plotOptions: {
        bar: {
            horizontal: true,
        }
    },
  dataLabels: {
        enabled: false
    },
    series: [{
        data: [<?php echo $state_intv ?>]
    }],
    xaxis: {
        categories: ['Adamawa', 'Gombe', 'Yobe', 'Borno', 'Taraba'],
    }
}

var state_pie = new ApexCharts(
    document.querySelector("#state_int"),
    state_int
);

state_pie.render();


// Crop Grown
var crop_grown = {
    chart: {
        width: 380,
        type: 'pie',
    },
    labels: ['Maize', 'Rice', 'Cotton'],
    series: [<?php echo $tot_crop_g ?>],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }],
    colors:[ '#FE3158', '#a927f9', '#f8d62b']
}

var crop_pie = new ApexCharts(
    document.querySelector("#crop_g"),
    crop_grown
);

crop_pie.render();


// MODE OF TRANSPORTATION RADAR CHAT
// radar chart
var modeoft = {
    chart: {
        height: 350,
        type: 'radar',
        toolbar:{
          show: false
        }
    },
    series: [{
        name: 'Metric Tons',
        data: [<?php echo $output_dev_value; ?>],
    }],
    labels: ['Cotton Tons', 'Maize Tons', 'Rice Tons'],
    plotOptions: {
        radar: {
            size: 140,
            polygons: {
                strokeColor: '#e9e9e9',
                fill: {
                    colors: ['#f8f8f8', '#fff']
                }
            }
        }
    },
    title: {
        text: 'Tons of Delivered Crop'
    },
    colors: ['#FF4560'],
    markers: {
        size: 4,
        colors: ['#fff'],
        strokeColor: '#FF4560',
        strokeWidth: 2,
    },
    tooltip: {
        y: {
            formatter: function(val) {
                return val
            }
        }
    },
    yaxis: {
        tickAmount: 7,
        labels: {
            formatter: function(val, i) {
                if(i % 2 === 0) {
                    return val
                } else {
                    return ''
                }
            }
        }
    },
    colors:['#fd2e64']
}

var transm = new ApexCharts(
    document.querySelector("#modet"),
    modeoft
);

transm.render();


// DASHBOARD VALUE
// mixed chart
var multicrop = {
    chart: {
        height: 350,
        type: 'line',
        stacked: false,
        toolbar:{
          show: false
        }
    },
    stroke: {
        width: [2, 2, 2],
        curve: 'smooth'
    },
    plotOptions: {
        bar: {
            columnWidth: '50%'
        }
    },
    series: [{
        name: 'Cotton',
        type: 'line',
        data: [<?php echo $value_cotton_three.", ".$value_cotton_two.", ".$value_cotton_last.", ".$value_cotton_current; ?>]
    }, {
        name: 'Maize',
        type: 'line',
        data: [<?php echo $value_maize_three.", ".$value_maize_two.", ".$value_maize_last.", ".$value_maize_current; ?>]
    }, {
        name: 'Rice',
        type: 'line',
        data: [<?php echo $value_rice_three.", ".$value_rice_two.", ".$value_rice_last.", ".$value_rice_current; ?>]
    }],
    fill: {
        opacity: [0.85,0.85,0.85],
        gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
        }
    },
    labels: ['<?php echo $three_date_w ?>', '<?php echo $two_date_w ?>','<?php echo $last_date_w ?>','<?php echo $current_date_w ?>'],
    markers: {
        size: 0
    },
    xaxis: {
        type:'datetime'
    },
    yaxis: {
        min: 0
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
                if(typeof y !== "undefined") {
                    return  y.toFixed(0) + " NGN";
                }
                return y;

            }
        }
    },
    legend: {
        labels: {
            useSeriesColors: true
        },
    },
    colors:['#8869CF' , '#51bb25' , '#F73164' ]
}

var multich = new ApexCharts(
    document.querySelector("#multic"),
    multicrop
);

multich.render();


</script>
<!-- END -->
<?php
include("footer.php");
?>