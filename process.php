<?php 
$pageTitle = "Our Process";
$metaDescription = "Learn about our traditional farming process and how we bring you 100% chemical-free, nutrient-rich produce from Navanath Natural Farms.";
$metaKeywords = "Farming Process, Traditional Agriculture, Natural Farming, Pure Produce, Navanath Natural Farms";
require 'includes/header.php'; 
?>

<style>
    .breadcrumb-area h1{
        font-family: var(--font-default);
        text-align: left;
        font-size: 50px;
        font-weight: 500;
    }

    body{
        background: #AA7D39;
    }

    .paddingo{
        padding: 0px !important; 
    }
    .proc-img{
        position: relative;
    }
    .image::after{
        position: absolute;
        display: block;
        bottom: 0px;
        top: 423px;
        left: 154px;
        content: "";
        background: white;
        border: 2px solid white;
        color: #fff;
        height: 2px;
        rotate: 50deg;
        width: 600px;
        z-index: -1;
    }

     .procr-img{
        position: relative;
    }
    .imager::after{
        position: absolute;
        display: block;
        bottom: 0px;
        top: 488px;
        left: -309px;
        content: "";
        background: white;
        border: 2px solid white;
        color: #fff;
        height: 2px;
        rotate: 130deg;
        width: 600px;
        z-index: -1;
    }
    /*.har-pro:hover{
        width: 96%;
    }*/


    /* Max Wide Mobile Layout: 600px. */
@media only screen and (min-width: 500px) and (max-width: 780px) {

    .image::after{
        position: absolute;
        display: block;
        bottom: 0px;
        top: 374px;
        left: 140px;
        content: "";
        background: white;
        border: 2px solid white;
        color: #fff;
        height: 2px;
        rotate: 50deg;
        width: 400px;
        z-index: -1;
    }
    .imager::after{
        position: absolute;
        display: block;
        bottom: 0px;
        top: 310px;
        left: -220px;
        content: "";
        background: white;
        border: 2px solid white;
        color: #fff;
        height: 2px;
        rotate: 130deg;
        width: 400px;
        z-index: -1;
    }
   
}

@media only screen and  (max-width: 480px) {

    .image::after{
        display: none;
    }
    .imager::after{
        display: none;
    }
    .mbl-head{
        font-size: 50px !important;
    }

    .pro-bx{
        box-shadow: 0px 0px 6px 0px #fff;
        border-radius: 6px;
        margin: 20px 10px;
    }
   
}
</style>
<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light" style="background-image: url(assets/img/about/process.jpg);padding: 300px 0px 200px 0px;background-size: cover !important;background-repeat: no-repeat;background-attachment: normal !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center;font-size: 60px;letter-spacing: 1px;">Know how we<br> harvest</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">About Us</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-12">
                    <h2 class="heading mbl-head" style="font-weight: 600;font-size: 80px;padding-bottom: 30px;color: #fff;"> Our<br> Process</h2>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5 paddingo">
                    <div class="proc-img">
                      <div class="image">
                        <img src="assets/img/proc1.png" class="img-responsive">
                      </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Farmer Onboarding</p>
                    <p style="color: #fff;">We partner with passionate local farmers who share our commitment to natural and sustainable farming. Each farmer undergoes a thorough orientation to align with our quality standards and ethical practices.</p>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Land Verification</p>
                    <p style="color: #fff;">Our experts conduct rigorous soil tests and land assessments to ensure the environment is free from chemicals and perfectly suited for natural cultivation, guaranteeing the purest harvest.</p>
                </div>
                <div class="col-md-5 paddingo">
                    <div class="procr-img">
                      <div class="imager">
                    <img src="assets/img/proc2.png" class="img-responsive">
                      </div>
                    </div>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5 paddingo">
                    <div class="proc-img">
                      <div class="image">
                        <img src="assets/img/proc3.png" class="img-responsive">
                      </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Segment Selection</p>
                    <p style="color: #fff;">We carefully select specific crop segments based on seasonal suitability and regional soil health, ensuring that each product is grown in its most natural and thriving environment.</p>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Cultivation</p>
                    <p style="color: #fff;">Utilizing traditional farming wisdom and modern natural techniques, our crops are grown without synthetic pesticides or fertilizers, focusing on biodiversity and natural soil enrichment.</p>
                </div>
                <div class="col-md-5 paddingo">
                    <div class="procr-img">
                      <div class="imager">
                    <img src="assets/img/proc4.png" class="img-responsive">
                      </div>
                    </div>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5 paddingo">
                    <div class="proc-img">
                      <div class="image">
                       <img src="assets/img/proc5.png" class="img-responsive">
                      </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Storage</p>
                    <p style="color: #fff;">Post-harvest, our products are stored in temperature-controlled, hygienic environments that prevent spoilage and maintain the nutritional integrity of the produce from farm to warehouse.</p>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Inspection</p>
                    <p style="color: #fff;">Every batch undergoes multi-level quality checks, including physical inspection and laboratory testing, to ensure it meets our strict "100% natural" and safety benchmarks.</p>
                </div>
                <div class="col-md-5 paddingo">
                    <div class="procr-img">
                      <div class="imager">
                        <img src="assets/img/proc6.png" class="img-responsive">
                      </div>
                    </div>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5 paddingo">
                    <div class="proc-img">
                      <div class="image">
                       <img src="assets/img/proc7.png" class="img-responsive">
                      </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Packaging</p>
                    <p style="color: #fff;">Our packaging process is designed to preserve the natural freshness and nutritional value of our farm-fresh products. We use eco-friendly and food-grade materials to ensure that every item reaches you in its purest form, maintaining the highest standards of hygiene and quality.</p>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">To Your Door Step</p>
                    <p style="color: #fff;">Our streamlined logistics network ensures that your order is delivered swiftly and safely, bringing the freshness of the farm directly to your kitchen with minimal transit time.</p>
                </div>
                <div class="col-md-5 paddingo">
                    <img src="assets/img/proc8.png" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

     <div class="choose-us-style-one-area overflow-hidden default-padding" style="background: #fff;">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12 choose-us-style-one text-center">
                    <div>
                       <p style="font-size: 30px;color: #aa7c37;">Discover the benifits of natural farming</p> 
                      <a href="contact.php" class="btn btn-theme secondary radius animation" style="background: #c1c439;">Contact Us</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'includes/footer.php'; ?>