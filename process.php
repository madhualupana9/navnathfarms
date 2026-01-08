<?php include_once './includes/header.php'; ?>
<title>Nav Nath Farm's | Our Process</title>

<style>
    .breadcrumb-area h1{
        font-family: 'Handlee', cursive;
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
                            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
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
                    <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Dorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Land Verification</p>
                    <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Dorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                    <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Dorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Cultivation</p>
                    <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Dorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                    <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Dorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">Inspection</p>
                    <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Dorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                    <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Dorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="row align-center pro-bx">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="color: #fff;font-size: 40px;font-weight: 600;">To Your Door Step</p>
                    <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Dorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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


<?php include_once './includes/footer.php'; ?>