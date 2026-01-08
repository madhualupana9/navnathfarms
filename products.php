<?php include_once './includes/header.php'; ?>
<title>Nav Nath Farm's | About Us</title>

<style>

    /*Price card*/
    .box-shadow {
     box-shadow: 0px 0px 18px -3px rgba(143, 143, 143, .50);
}
 .card:hover {
     box-shadow: 0px 0px 20px -3px rgba(143, 143, 143, .75);
}
 .box-shadow-dark {
     box-shadow: 3px 3px 11px -3px rgba(0, 0, 0, .25);
}

 .font-weight-bolder {
     font-weight: 900;
}
 .display-1, .display-2, .display-3, .display-4 {
     font-weight: 900;
}
 .heading-big {
     font-weight: 800;
     text-transform: uppercase;
     color: red;
     margin: 0;
     padding: 0.15rem 0;
     line-height: 1.2;
     font-size: 2rem;
     transition: color 0.5s ease-in, border-color 0.5s ease-in-out;
}
 .heading-big-square {
     padding: 1rem 1rem;
     border: 10px solid red;
     margin: 0.5rem auto 1rem auto;
}
 .heading-big:hover {
     color: #f90;
     border-color: #f90;
}
 .card {
    border: 1px solid #c1c439;
    margin: 10px;
    transition: 0.5s ease;
    border-radius: 0;
    transform: perspective(3em) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
    
}

 .card:hover {
     transition: 0.5s ease;
     border-radius: 0;
     transform: perspective(3em) rotateX(0deg) rotateY(-0.750deg) rotateZ(-1deg);
}
 .card-header {
     border-radius: 0;
}
 .card-footer {
     padding-top: 1rem;
     padding-bottom: 1rem;
}
 .card-header, .card-footer {
     transition: 0.5s ease;
}
 .card:hover {
     border-color: #ffc107;
}
 .card:hover .card-header, .card:hover .card-footer {
     color: #ba8b00;
     border-color: #ffc107;
     background-color: #ffeeba;
}
 .card:hover .promotion-promo {
     transform: scale(1.175) translateY(2.5px);
     transform-origin: left center;
}
 .card:hover .promotion-price {
     transform: translate(2.5px, 17.5px) scale(1.15);
     transform-origin: center right;
}
 .card-body {
     position: relative;
     z-index: 0;
     overflow: hidden;
     padding: 0rem;
}
 .card-body p, .card-body span, .promotion-promo {
     margin: 2px 10px;
 }
 .card .btn {
     font-weight: bold;
     text-transform: uppercase;
}
 .promotion-promo {
     font-weight: 700;
     font-size: 1.15rem;
     color: #ffc107;
     font-family: 'Montserrat', sans-serif;
     text-decoration: line-through;
     transition: 0.25s linear;
}
 .promotion-price {
     position: absolute;
     bottom: 0;
     right: 0;
     background: #c1c439;
     width: 92px;
     height: 92px;
     padding-bottom: 0rem;
     padding-top: 1.25rem;
     text-align: center;
     font-weight: 700;
     font-family: 'Montserrat', sans-serif;
     font-size: 1.1rem;
     border-radius: 5rem;
     color: #fff;
     z-index: -1;
     transform: translate(5px, 27.5px) rotate(-9deg);
     border: 1px dashed #fff;
     transition: 0.25s linear;
     line-height: 1.15;
}
 .promotion-price-desc {
     padding: 0;
     margin: 0 auto;
     text-transform: uppercase;
     font-size: 0.9rem;
     display: block;
}
 .promotion-price-text {
     padding: 0;
     margin: 0 auto;
     font-weight: 900;
}
 .card-animate {
     counter-reset: section;
}
 .card-animate .card-body:before {
     transition: 0.5s ease;
     counter-increment: section;
     content: "" counter(section) "";
     display: block;
     font-size: 15rem;
     font-weight: 900;
     position: absolute;
     bottom: 5rem;
     line-height: 0;
     left: -0.85rem;
     padding: 0;
     margin: 0;
     color: rgba(0, 0, 0, .10);
     z-index: 0;
}
 .card-animate .card:hover .card-body:before {
     transform: translate(10px, -10px);
}
 .card-animate .card-text {
     margin-top: 2rem;
     margin-bottom: 2rem;
}
 .card-animate .card-title {
     font-weight: 900;
     text-transform: uppercase;
}
 



    .breadcrumb-area h1{
        font-family: 'Handlee', cursive;
        text-align: left;
        font-size: 50px;
        font-weight: 500;
        color: #aa7d39;
    }
    .shadow.dark:after{
        background: transparent;
    }
    .tabs {
  display: flex;
  flex-wrap: wrap;
  height: auto;
  width: 100%;
}
 
.tabs label {
  order: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 6px 26px;
  margin-right: 0.2rem;
  cursor: pointer;
  background-color: #c1c439;
  color: #fff;
  font-weight: bold;
  transition: background ease 0.3s;
}

.tabs label img{
    width: 50px;
}
 
.tabs .tab {
  order: 9;
  flex-grow: 1;
  width: 100%;
  height: 100%;
  display: none;
  padding: 1rem;
  background: #fff;
  padding: 20px;
  box-shadow: -5px 4px 0px 0px #c1c439;
}
 
.tabs input[type="radio"] {
  display: none;
}
 
.tabs input[type="radio"]:checked + label {
    background: #aa7d39;
    color: #fff;
}
 
.tabs input[type="radio"]:checked + label + .tab {
  display: block;
}
 
@media (max-width: 465px) {
  .tabs .tab,
  .tabs label {
   order: initial;
  }
 
  .tabs label {
    width: 100%;
    margin-left: 50px;
  }
}
 
</style>
<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark" style="background-image: url(assets/img/about/bread1.jpg);background-size: contain !important;background-repeat: no-repeat;background-attachment: normal !important;padding: 180px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Get Healthy Now</h1>
                    <p style="text-align: left;font-size: 30px;font-weight: 600;color: #aa7d39;">Browse Fresh Now</p>
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

    <section style="background: #f5f5f5;padding: 80px 0px;">
        <div class="container">
            
              <div class="tabs">

                <input type="radio" name="tabs" id="tabone" checked="checked">
                <label for="tabone"><img src="assets/img/about/paddy.png"> Paddy / Pulses</label>
                <div class="tab">
                  <div class="row" style="margin-bottom: 50px;">
                      <div class="col-md-3">
                                <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/paddy.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Product Name </p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                             
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/paddy.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Product Name </p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/paddy.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Product Name </p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                          <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/paddy.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Product Name </p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                      </div>
                  </div>
                  <div class="row" style="margin-bottom: 50px;">
                      <div class="col-md-3">
                       
                                <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/paddy.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Product Name </p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                             
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/paddy.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Product Name </p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/paddy.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Product Name </p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                          <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/paddy.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Product Name </p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                      </div>
                  </div>
                </div>

                <input type="radio" name="tabs" id="tabtwo">
                <label for="tabtwo"><img src="assets/img/about/fruits.png"> Fruits</label>
                <div class="tab">
                  <div class="row" style="margin-bottom: 50px;">
                      <div class="col-md-3">
                                <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/mango.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Mango <span style="color: #000;font-size: 16px;">1kg</span></p>
                                       
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                             
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/pomegranate.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Pomegranate <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 105</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 85</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/apple.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Apple <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                          <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/banana.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Banana <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                      </div>
                  </div>
                  <div class="row" style="margin-bottom: 50px;">
                      <div class="col-md-3">
                                <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/mango.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Mango <span style="color: #000;font-size: 16px;">1kg</span></p>
                                       
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                             
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/pomegranate.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Pomegranate <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 105</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 85</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/apple.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Apple <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                          <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/banana.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Banana <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                      </div>
                  </div>
                </div>
                
                <input type="radio" name="tabs" id="tabthree">
                <label for="tabthree"><img src="assets/img/about/vegetables.png"> Vegetables</label>
                <div class="tab">
                  <div class="row" style="margin-bottom: 50px;">
                      <div class="col-md-3">
                                <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/tomato.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Tomato <span style="color: #000;font-size: 16px;">1kg</span></p>
                                       
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                             
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/cabbage.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Cabbage <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 105</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 85</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/raddish.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Raddish <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                          <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/onion.jpg" class="img-responsive" style="width: 100%;">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Onion <span style="color: #000;font-size: 16px;">1kg</span></p>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">27% Off!</span>
                                        <div class="promotion-promo">₹ 75</div>
                                        <div class="promotion-price">
                                            <div class="promotion-price-desc">Now</div>
                                            <div class="promotion-price-text">₹ 55</div>                                    
                                        </div>
                                    </div>
                                    <div class="card-footer"><a href="#" class="btn btn-theme secondary btn-md radius animation">Order</a></div>
                                </div>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </section>


<?php include_once './includes/footer.php'; ?>