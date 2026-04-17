 <?php require 'includes/header.php'; ?>

<style>
    .breadcrumb-area h1{
        font-family: var(--font-default);
        text-align: left;
        font-size: 50px;
        font-weight: 500;
    }

    .circle-img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: url('your-image.jpg') center/cover no-repeat;
    border: 10px solid white;
    }
    /*.har-pro:hover{
        width: 96%;
    }*/
</style>
<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light" style="background-image: url(assets/img/about/comm1.jpg);padding: 400px 0px 80px 0px;background-size: cover !important;background-repeat: no-repeat;background-attachment: normal !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center;font-size: 50px;letter-spacing: 1px;">Nourishing the earth <br>Nourishing you</h1>
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
                <div class="col-lg-5 choose-us-style-one">
                    <p style="font-size: 26px;font-weight: 600;color: #aa7d39;">Join hands in harvesting a <br> SUSTAINABLE FUTURE</p>
                    <p style="font-weight: 600;">At Nav Nath Farms, we believe that true sustainability starts with community. By joining our network, you become part of a movement dedicated to preserving traditional farming wisdom and promoting eco-friendly agricultural practices. Together, we can ensure a healthier planet and more nutritious food for generations to come. Join us in our mission to bridge the gap between rural farmers and conscious consumers.</p>
                    <!-- <a class="btn btn-theme secondary btn-md radius animation">Fill the form</a> -->
                </div>
                <div class="col-lg-7">                   
                        <img src="assets/img/about/comm2.png" alt="Image Not Found">
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us-style-one-area overflow-hidden default-padding" style="background: #f1f1f1;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading" style="font-weight: 600;font-size: 26px;padding-bottom: 30px;">Segments we harvest</h2>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3">
                    <img src="assets/img/spices.png" class="img-responsive har-pro">
                    <p style="font-weight: 600;color: #aa7d39;text-align: center;font-size: 22px;padding-top: 20px;">Indian Spices</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/vegetables.png" class="img-responsive har-pro circle-img">
                    <p style="font-weight: 600;color: #aa7d39;text-align: center;font-size: 22px;padding-top: 20px;">Fresh Vegetables</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/millets.png" class="img-responsive har-pro">
                    <p style="font-weight: 600;color: #aa7d39;text-align: center;font-size: 22px;padding-top: 20px;">Millets</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/rice.png" class="img-responsive har-pro">
                    <p style="font-weight: 600;color: #aa7d39;text-align: center;font-size: 22px;padding-top: 20px;">Indigenous Rice</p>
                </div>
            </div>
        </div>
    </div>


     <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading" style="font-weight: 600;font-size: 26px;padding-bottom: 30px;">Requirements</h2>
                </div>
                <div class="col-md-12">
                    <ul class="list-style-two">
                        <li>Commitment to 100% natural and chemical-free farming practices.</li>
                        <li>Availability of verifiable land records and soil health reports.</li>
                        <li>Willingness to adopt traditional and sustainable cultivation techniques.</li>
                        <li>Active participation in community knowledge-sharing sessions.</li>
                        <li>Transparency in harvesting and storage processes.</li>
                        <li>Dedication to maintaining the highest standards of food safety and hygiene.</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>

 
 <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-area default-padding" style="background-image: url(assets/img/shape/28.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-12">
                    <h2 class="heading" style="font-weight: 600;font-size: 30px;padding-bottom: 30px;">Take your first step we will take<br> you from there</h2>
                </div>
                <div class="col-tact-stye-one col-lg-8 mb-md-50">
                    <div class="contact-form-style-one">
                        <h2 class="heading" style="font-weight: 500;font-size: 26px;">Be part of our community</h2>
                        <form action="contact-form.php" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input class="form-control" id="land" name="land" placeholder="No. of acres*" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input class="form-control" id="location" name="location" placeholder="Location of your land" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Crops previously cultivated *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->


   <?php require 'includes/footer.php'; ?>