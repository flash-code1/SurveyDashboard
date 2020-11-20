<?php
$web_title = "Dashboard";
include("header.php");
// end header here
?>
<!-- start -->
 <!-- Page Sidebar Ends-->
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
              <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
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
                      <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span><?php $fullname = "name_of_user"; echo $fullname; ?></span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                      <p><span> Check the time.</span></p>
                      <div class="whatsnew-btn"><a class="btn btn-primary">Data Virtualization</a></div>
                      <div class="left-icon"><i class="fa fa-bell"> </i></div>
                    </div>
                  </div>
                </div>
              </div>
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
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>NGN 200,000.56 </h5>
                            <p class="font-roboto">Male</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>NGN 300,000.11</h5>
                            <p class="font-roboto">Female</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>NGN 500,001.00</h5>
                            <p class="font-roboto">Total Loan Amount</p>
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
                                  <li class="active">Yearly</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                              <div class="inner-top-right">
                                <ul class="d-flex list-unstyled justify-content-end">
                                  <li>Male</li>
                                  <li>Female</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12">
                              <div class="card-body p-0">
                                <div class="current-sale-container">
                                  <div id="chart-currently"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row border-top m-0">
                          <div class="col-xl-4 pl-0 col-md-6 col-sm-6">
                            <div class="media p-0">
                              <div class="media-left"><i class="icofont icofont-user"></i></div>
                              <div class="media-body">
                                <h6>Total Male</h6>
                                <p>2,000</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="media p-0">
                              <div class="media-left bg-secondary"><i class="icofont icofont-user"></i></div>
                              <div class="media-body">
                                <h6>Total Female</h6>
                                <p>3,000</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-12 pr-0">
                            <div class="media p-0">
                              <div class="media-left"><i class="icofont icofont-users"></i></div>
                              <div class="media-body">
                                <h6>Total</h6>
                                <p>5,000 </p>
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
            <!-- <div class="row"> -->
              <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card o-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body">
                      <div class="col-5">
                        <h6 class="f-w-600 font-primary">Cotton Grown </h6><span class="num"><span class="counter">90</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
                      </div>
                      <div class="col-7 text-right">
                        <h4 class="num total-value">3,654 -<span class="counter">Planted Cotton</span></h4>
                      </div>
                    </div>
                    <div>
                      <div id="chart-widget1"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card o-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body">
                      <div class="col-7">
                        <h6 class="f-w-600 font-secondary">Maize Grown</h6><span class="num"><span class="counter">4.5</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
                      </div>
                      <div class="col-5 text-right">
                      <h4 class="num total-value">30-<span class="counter">Planted Maize</span></h4>
                      </div>
                    </div>
                    <div id="chart-widget2">
                      <div class="flot-chart-placeholder" id="chart-widget-top-second"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card o-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body">
                      <div class="col-8">
                        <h6 class="f-w-600 font-success">Rice Grown</h6><span class="num"><span class="counter">5.5</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
                      </div>
                      <div class="col-4 text-right">
                      <h4 class="num total-value">45-<span class="counter">Planted Rice</span></h4>
                      </div>
                    </div>
                    <div id="chart-widget3">
                      <div class="flot-chart-placeholder" id="chart-widget-top-third"></div>
                    </div>
                  </div>
                </div>
              </div>
              
            <!-- </div> -->
            <!-- Chart widget top Ends-->
              <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="row m-0 chart-main">
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4></h4><span>Age</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart1 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4></h4><span>Marital Status</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart2 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4></h4><span>Education</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
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
                      </div>
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
                    <div id="column-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Havest Month </h5>
                  </div>
                  <div class="card-body apex-chart">
                    <div id="piechart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Warehouse data</h5>
                  </div>
                  <div class="card-body">
                    <div id="radarchart"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
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
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
<!-- end -->
<?php
include("footer.php");
?>