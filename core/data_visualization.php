<?php
$web_title = "Farmers Data Visualization";
include("header.php");
?>
<link href='datatable/DataTables/datatables.min.css' rel='stylesheet' type='text/css'>
<script src="datatable/DataTables/datatables.min.js"></script>
<!-- make move -->
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-6">
                  <h3>Data Visualization</h3>
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
                    <h5>View Survey Details</h5><span>This page help you view all the information collected.</span>
                     <!-- button to create -->
                     <a href="export/farmer_export.php" style="float: right;" class="btn btn-pill btn-success btn-air-warning btn-warning-gradien">Download</a>
                    <!-- end button -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="empTable" class="display nowrap dataTable">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>State</th>
                            <th>Community</th>
                            <th>Data Management Asst.</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Age range</th>
                            <th>Crop Grown</th>
                            <th>Agricultural Enterprise</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <!-- <tfoot>
                          <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                          </tr>
                        </tfoot> -->
                      </table>
                    </div>
                    <script>
        $(document).ready(function(){
            $('#empTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url':'datatable/ajaxfile.php'
                },
                'columns': [
                    { data: 'SubmissionDate' },
                    { data: 'StateInterview' },
                    { data: 'clusterCommunity' },
                    { data: 'NameOfDataManagementAssistant' },
                    { data: 'PhoneOfBeneficiary' },
                    { data: 'GENDER' },
                    { data: 'AGERANGE' },
                    { data: 'CropGrown' },
                    { data: 'AgriculturalEnterprise' },
                    { data: 'close' },
                ]
            });
        });
        </script>
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