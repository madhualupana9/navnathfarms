<?php 
$pageTitle = "Our Products";
$metaDescription = "Discover our range of pure and natural farm produce, including indigenous rice, millets, organic turmeric, cold-pressed oils, and more.";
$metaKeywords = "Indigenous Rice, Millets, Organic Turmeric, Cold-Pressed Oils, Chilli Powder, Pulses, Navanath Natural Farms";
require 'includes/header.php'; 
?>

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
    display: flex;
    flex-direction: column;
    height: 100%;
}

.product-description {
    min-height: 80px;
    display: flex;
    align-items: center;
}

.product-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
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
     font-family: var(--font-default);
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
     font-family: var(--font-default);
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
        font-family: var(--font-default);
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
                    <p style="text-align: left;font-size: 30px;font-weight: 600;color: #aa7d39;">Browse Our Range</p>
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

    <section style="background: #f5f5f5;padding: 80px 0px;">
        <div class="container">
            
              <div class="tabs">

                <input type="radio" name="tabs" id="tabone" checked="checked">
                <label for="tabone"><img src="assets/img/paddy.jpg" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"> Rice & Millets</label>
                <div class="tab">
                  <div class="row" style="margin-bottom: 50px;">
                      <div class="col-md-3">
                                <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/fresh-products/31967.jpg" class="img-responsive product-image">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Indigenous Rice Varieties</p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">Rich in heritage and nutrition. Supports digestion, immunity and well-being. Each variety is cultivated naturally.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">100% Natural</span>
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Indigenous Rice Varieties">Order</a></div>
                                </div>
                             
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/fresh-products/millets-product-2.jpg" class="img-responsive product-image">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Millets</p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">Forgotten ancient grains. Rich in Fiber, iron, antioxidants. Perfect for diabetics and fitness lovers.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">Health & Fitness</span>
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Millets">Order</a></div>
                                </div> 
                      </div>
                      
                      <div class="col-md-3">
                          <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/fresh-products/black-rice.jpg" class="img-responsive product-image">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Black Rice </p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">A nutrient-dense superfood, rich in antioxidants and anthocyanins. Supports heart health and immunity.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">Nutrient Rich</span>
                                        
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Black Rice">Order</a></div>
                                </div>
                      </div>
                  </div>
                </div>

                <input type="radio" name="tabs" id="tabtwo">
                <label for="tabtwo"><img src="assets/img/spices.png" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"> Spices & Turmeric</label>
                <div class="tab">
                  <div class="row" style="margin-bottom: 50px;">
                      <div class="col-md-3">
                                <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/navnath/products/turmaric.png" class="img-responsive product-image" alt="Turmeric">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Organic Turmeric</p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">Rich in curcumin and aromatic. Organic certified.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">Certified Organic</span>
                                        
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Organic Turmeric">Order</a></div>
                                </div>
                             
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/navnath/products/red chilli.png" class="img-responsive product-image" alt="Red Chilli">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Chilli Powder</p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">Naturally sun-dried and stone ground. Bold color, authentic flavour. No artificial colors or additives.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">Pure & Bold</span>
                                       
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Chilli Powder">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/navnath/products/Dry Ginger.png" class="img-responsive product-image" alt="Ginger">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Dry Ginger</p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">Naturally sun-dried and stone ground. Provides relief from digestion issues and adds a warm flavor.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">Aromatic</span>
                                       
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Dry Ginger">Order</a></div>
                                </div> 
                      </div>
                      <div class="col-md-3">
                          <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/navnath/products/Coriander.png" class="img-responsive product-image" alt="Coriander">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Coriander</p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">Naturally sun-dried and stone ground. Adds a refreshing, earthy aroma to your dishes.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">100% Natural</span>
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Coriander">Order</a></div>
                                </div>
                      </div>
                  </div>
                </div>
                
                <input type="radio" name="tabs" id="tabthree">
                <label for="tabthree"><img src="assets/img/fresh-products/cold-pressed-oils.jpg" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"> Oils & Pulses</label>
                <div class="tab">
                  <div class="row" style="margin-bottom: 50px;">
                      <div class="col-md-3">
                                <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/fresh-products/cold-pressed-oils.jpg" class="img-responsive product-image">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Cold-Pressed Oils</p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">Coconut, Groundnut, Sesame & More. Pressed at low temperatures to retain natural aroma, nutrients and purity.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">Traditional Purity</span>
                                        
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Cold-Pressed Oils">Order</a></div>
                                </div>
                             
                      </div>
                      <div class="col-md-3">
                         <div class="card h-100 mb-4">                    
                                    <div class="card-body text-left">
                                        <img src="assets/img/fresh-products/pulses-product.jpg" class="img-responsive product-image">
                                        <p class="card-text" style="color: #aa7d39;font-size: 22px;">Pulses</p>
                                        <div class="product-description">
                                            <p style="font-size: 14px; padding: 0 10px;">Organically grown for pure flavor and wholesome nutrition. A naturally healthy choice, cultivated with care.</p>
                                        </div>
                                        <span class="font-lead-base" style="background: #c1c439;color: #fff;padding: 2px 6px;font-size: 10px;">Organically Grown</span>
                                        
                                    </div>
                                    <div class="card-footer" style="margin-top: auto;"><a href="#" class="btn btn-theme secondary btn-md radius animation" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="Pulses">Order</a></div>
                                </div> 
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
<?php require 'includes/footer.php'; ?>