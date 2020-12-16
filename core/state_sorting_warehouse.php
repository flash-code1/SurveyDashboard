<?php
$web_title = "State View";
include("header.php");
?>
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-6">
                  <h3>Display Warehouse data</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">State View</li>
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
                    <h5> State Data View </b> </h5><span>This page help you view all the information collected per state.</span>
                    <!-- button to create -->
                    
                    <!-- end button -->
                  </div>
                  <div class="card-body">

                      <div class="row">
                      <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Abuja FCT</center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Abuja'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Abuja" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Abia </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Abia'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Abia" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Adamawa</center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Adamawa'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Adamawa" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Akwa Ibom </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'AkwaIbom'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=AkwaIbom" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>


                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Anambra </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Anambra'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Anambra" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>


                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Bauchi </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Bauchi'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Bauchi" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div> 


                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Bayelsa </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Bayelsa'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Bayelsa" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Benue </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Benue'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Benue" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Borno </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Borno'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Borno" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>


                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Cross River </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'CrossRiver'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=CrossRiver" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Delta </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Delta'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Delta" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Ebonyi </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Ebonyi'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Ebonyi" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>


                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Edo </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Edo'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Edo" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>


                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Ekiti </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Ekiti'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Ekiti" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>


                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Enugu </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Enugu'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Enugu" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Gombe </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Gombe'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Gombe" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Imo </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Imo'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Imo" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Jigawa </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Jigawa'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Jigawa" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Kaduna </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Kaduna'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Kaduna" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Kano </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Kano'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Kano" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Katsina </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Katsina'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Katsina" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Kebbi </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Kebbi'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Kebbi" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Kogi </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Kogi'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Kogi" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Kwara </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Kwara'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Kwara" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Lagos </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Lagos'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Lagos" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Nassarawa </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Nassarawa'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Nassarawa" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Niger </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Niger'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Niger" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Ogun </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Ogun'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Ogun" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Ondo </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Ondo'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Ondo" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Osun </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Osun'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Osun" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Oyo </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Oyo'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Oyo" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Plateau </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Plateau'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Plateau" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Rivers </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Rivers'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Rivers" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Sokoto </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Sokoto'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Sokoto" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Taraba </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Taraba'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Taraba" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Yobe </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Yobe'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Yobe" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <div class="col-md-6">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18"> <center>Zamfara </center> 
                          <?php
                          $house = mysqli_query($con, "SELECT 
                    COUNT(*) AS all_house
                    FROM
                    `warehouse` WHERE StateHeadquarter = 'Zamfara'");
                          $mh = mysqli_fetch_array($house);
                    $total_house = number_format($mh["all_house"]);

                    $percentx = ($mh["all_house"]/60) * 100;
                    $percentx = round($percentx);
                          ?>
                          <b> 
                              <!-- Warehouse -->
                              <div class="card-header">
                    <h5> <a href="#"> <?php echo $total_house; ?> / 60 Active Est. Warehouse</a></h5><span> <b> Total Warehouse Surveyed </b>  </span>
                  </div>
                  <div class="card-body progress-showcase row">
                    <div class="col">
                      <div class="progress" style="height: 19px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a href="export/warehouse_export.php?state=Zamfara" class="btn btn-pill btn-dark btn-air-dark btn-dark-gradien">Download</a>
                  </center>
                          </b> </h5>
                          </div>
                    </div>

                    <!-- KOKORO -->
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
include("footer.php");
?>