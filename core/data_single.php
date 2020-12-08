<?php
$web_title = "View Data";
include("header.php");
?>
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $get_farmer = mysqli_query($con, "SELECT * FROM `survey_data` WHERE id = '$id'");

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
                  <h3>Display Farmer data</h3>
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
                    <h5><?php echo $row["EMUMERATORNAME"]; ?> </b> </h5><span>This page help you view all the information collected from <?php echo $row["EMUMERATORNAME"]; ?>.</span>
                    <!-- button to create -->
                    
                    <!-- end button -->
                  </div>
                  <div class="card-body">
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                              <h5 class="m-0 f-18">State of Interview: <b> <?php echo $row["StateInterview"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Cluster/Community: <b> <?php echo $row["clusterCommunity"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Data Mananager Asst.: <b> <?php echo $row["NameOfDataManagementAssistant"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Name of Ben.: <b> <?php echo $row["NameOfTheBeneficiary"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Phone of Ben.: <b> <?php echo $row["PhoneOfBeneficiary"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Gender: <b> <?php echo $row["GENDER"]; ?> </b> </h5>
                          </div>
                    </div>
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Age Range: <b> <?php echo $row["AGERANGE"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">MaritalStatus: <b> <?php echo $row["MaritalStatus"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Education: <b> <?php echo $row["Education"]; ?> </b> </h5>
                          </div>
                    </div>
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Formal Education: <b> <?php echo $row["FORMALEDUCATION"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">CropGrown: <b> <?php echo $row["CropGrown"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Household Income Agric. Entrp.: <b> <?php echo $row["AgriculturalEnterprise"]; ?> </b> </h5>
                          </div>
                    </div>
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Household Income Other Entrp.: <b> <?php echo $row["OtherEnterprisesSources"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Cash: <b> <?php echo $row["CashAmount"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">FertilizerSpecialBlend: <b> NGN <?php echo $row["FertilizerSpecialBlendNairaValue"]." - ".$row["FertilizerSpecialBlendQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">FertilizerNPK: <b> NGN <?php echo $row["FertilizerNPKNairaValue"]." - ".$row["FertilizerNPKQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">HerbicidePre_EmergencePerLitre: <b> NGN<?php echo $row["HerbicidePre_EmergencePerLitreNairaValue"]." - ".$row["HerbicidePre_EmergencePerLitreQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">HerbicidePost_EmergencePerLitre: <b> NGN <?php echo $row["HerbicidePost_EmergencePerLitreNairaValue"]." - ".$row["HerbicidePost_EmergencePerLitreQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Pesticides: <b> GN <?php echo $row["PesticidesNairaValue"]." - ".$row["PesticidesQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">MicroNutrient: <b> NGN <?php echo $row["MicronutrientNairaValue"]." - ".$row["MicronutrientQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">CertifiedSeedPerKg: <b> NGN <?php echo $row["CertifiedSeedPerKgtNairaValue"]." - ".$row["CertifiedSeedPerKgQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">KnapsackSprayer: <b> NGN <?php echo $row["KnapsackSprayerNairaValue"]." - ".$row["KnapsackSprayerQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">WaterPump: <b> NGN <?php echo $row["WaterPumpNairaValue"]." - ".$row["WaterPumpQauntity"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Was Cash Sufficient: <b> <?php echo $row["cash"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Addition Funding Microfinance: <b> <?php echo $row["Funding_Microfinance"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Addition Funding Bank Of Agric.: <b> <?php echo $row["Funding_BankOfAgriculture"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Addition Funding Commercial Bank: <b> <?php echo $row["Funding_CommercialBank"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Addition Funding Cooperative Society: <b> <?php echo $row["Funding_CooperativeSociety"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Addition Funding Local Money Lender: <b> <?php echo $row["Funding_LocalMoneyLender"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Addition Funding TraditionalGroups: <b> <?php echo $row["Funding_TraditionalGroups"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Addition Funding Other Family Member: <b> <?php echo $row["Funding_OtherFamilyMember"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Satisified with loan Distribution: <b> <?php echo $row["Response"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Traning_GoodAgronomicPractices: <b> <?php echo $row["Traning_GoodAgronomicPractices"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Traning_FloodingBundingErosionControl: <b> <?php echo $row["Traning_FloodingBundingErosionControl"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Traning_FarmRecords: <b> <?php echo $row["Traning_FarmRecords"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Traning_GroupDynamicsTraining: <b> <?php echo $row["Traning_GroupDynamicsTraining"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Traning_ControllingPostHarvestLosses: <b> <?php echo $row["Traning_ControllingPostHarvestLosses"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Traning_CostBenefitAnalysis: <b> <?php echo $row["Traning_CostBenefitAnalysis"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Traning_Other: <b> <?php echo $row["Traning_Other"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Ha. of Land: <b> <?php echo $row["Land"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Farm Mapped: <b> <?php echo $row["mapped"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Ha Cultivated: <b> <?php echo $row["cultivation"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Number of People who Helped: <b> <?php echo $row["task"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Clearing Method: <b> <?php echo $row["Methods"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Spent on Land Clearing: <b> <?php echo $row["LandClearing"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Spent on Harrowing: <b> <?php echo $row["Harrowing"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Spent on Planting: <b> <?php echo $row["Planting"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Spent on Others: <b> <?php echo $row["ActivitiesOther"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Extra Spent on Seed: <b> <?php echo $row["Seed"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Extra Spent on Fertilizer(NPK): <b> <?php echo $row["Fertilizer"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Extra Spent on Urea: <b> <?php echo $row["Urea"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Extra Spent on Herbicide: <b> <?php echo $row["Herbicide"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Extra Spent on Pesticides: <b> <?php echo $row["Pesticides"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Extra Spent on Labour: <b> <?php echo $row["Labour"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Extra Spent on Others: <b> <?php echo $row["OtherSs"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Experienced draught?: <b> <?php echo $row["draught"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">How many Damaged if yes?: <b> <?php echo $row["DamagedCopy1"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Experienced Flooding: <b> <?php echo $row["flooding"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">How many Damaged if Yes?: <b> <?php echo $row["Damaged"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Info On Mazie: <b> <?php echo $row["InfoOnMazie"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Harvested?: <b> <?php echo $row["harvested"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Havest Month: <b> <?php echo $row["MonthofHarvest"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Days Duration: <b> <?php echo $row["Dayscompleteharvest"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Harvest Employees: <b> <?php echo $row["People_employ"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Amount Spent on Harvest: NGN<?php echo number_format($row["muchspentharvest"], 2); ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Days Waited Processing Crops: <b> <?php echo $row["DaysWaitedProcessingCrop"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Measure with Scale: <b> <?php echo $row["scale"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Number of 50KG bags: <b> <?php echo $row["estimate50kgharvest"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Trained to Packaged harvested Crop?: <b> <?php echo $row["harvestedCrop"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Days product got to Warehouse/Agg Center: <b> <?php echo $row["warehouseaggregation"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Distance of Warehouse/Agg Center: <b> <?php echo $row["Distance"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">How many times was warehouse delivery made?: <b> <?php echo $row["warehouse"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">50kg bags delivered this season: <b> <?php echo $row["bagsdeliveredseason"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Production Increased in (%): <b> <?php echo $row["productionhasincreased"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Profit Made: <b> <?php echo $row["myprofit"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>

                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Satisfied with Farm Charge?: <b> <?php echo $row["SatistiediththepricesoffarminputsthattheAnchorBorrowers"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Satisfied with Price?: <b> <?php echo $row["pricesAnchorBorrowersprogramme"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Can Payback this season: <b> <?php echo $row["Reason"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">Satisfied with Management?: <b> <?php echo $row["MannerAPBbeingManaged"]; ?> </b> </h5>
                          </div>
                    </div>
                    <div class="col-md-4">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">ABP: <b> <?php echo $row["ABP"]; ?> </b> </h5>
                          </div>
                    </div>
                      </div>
                      <!-- <div class="row">
                      <div class="col-md-12">
                          <div class="shadow shadow-showcase p-25">
                          <h5 class="m-0 f-18">MAP</h5>
                          </div>
                    </div>
                      </div> -->
                  
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