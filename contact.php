<?php include'header.php'; ?>
<!-- Page Content Wraper -->
<div class="site-content-contain">
  <div id="content" class="page-content-wraper">
    <section class="breadcrumb" itemprop="breadcrumb">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <nav class="breadcrumb-link">
              <span>
                <span><a href="http://theme.nileforest.com/woo/philos/" >Home</a> » <span class="breadcrumb_last" aria-current="page">Contact Us</span>
                </span>
              </span>
            </nav>
          </div>
          <div class="col-md-5">
            <h3 class="text-right mb-0">Contact Us</h3>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
  <div class="content-page ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <h3 class="widget-title">Contact Us</h3>
          <div class="textwidget">
            <div id="map" class="map style1 mb-45">

            </div>
            <script src="js/api.gg.map.js" type="text/javascript"></script>    
            <script>
              google.maps.event.addDomListener(window, "load", init);
              function init() {
                var mapOptions = {
                  zoom: 13,                
                  center: new google.maps.LatLng(21.046387,105.7853925),
                  styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
                };
                var mapElement = document.getElementById("map");                
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(21.046387,105.7853925),
                  map: map,
                  title: "Philos1"
                });
              }
            </script>
            <div class="row">
              <div class="col-md-4 mb-xs-30">
                <h2 class="normal"><span>Stay In Touch</span></h2>
                <p class="mb-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.
                </p>
                <h6>Company address</h6>
                <p class="mb-25">
                  1 Wintergreen Dr. Huntley,
                  <br>
                  NY 11510,
                  <br>
                  United States
                </p>
                <h6>Contact Information</h6>
                <ul class="Contact-information mb-25">
                  <li><i class="fa fa-envelope" aria-hidden="true"></i>info@sky.com</li>
                  <li><i class="fa fa-phone" aria-hidden="true"></i>(013) 456789</li>
                </ul>
                <hr />
                <div class="product-share mtb-30">
                  <ul class="list-none">
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>

              </div>
              <div class="col-md-6 offset-md-2">
                <h2 class="normal"><span>Contact Us</span></h2>
                <form class="Contact-form">
                  <div class="form-field-wrapper">
                    <label>Your Name <span class="required">*</span></label>
                    <input id="author" class="input-md form-full-width" name="author" placeholder=" EnterYour Name (required)" value="" size="30" aria-required="true" required="" type="text">
                  </div>
                  <div class="form-field-wrapper">
                    <label>Your Email <span class="required">*</span></label>
                    <input id="author-email" class="input-md form-full-width" name="author" placeholder="Enter Your Email Address (required)" value="" size="30" aria-required="true" required="" type="email">
                  </div>
                  <div class="form-field-wrapper">
                    <label>Your subject <span class="required">*</span></label>
                    <input id="subject" class="input-md form-full-width" name="author" placeholder="Enter Your Subject (required)" value="" size="30" aria-required="true" required="" type="text">
                  </div>
                  <div class="form-field-wrapper">
                    <label>Comments<span class="required">*</span></label>
                    <textarea id="comment" class="form-full-width" name="comment" placeholder="Enter Your Subject (required)" cols="45" rows="8" aria-required="true" required=""></textarea>
                  </div>
                  <div class="form-field-wrapper">
                    <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Submit" type="submit">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Page Content -->
        </div>
      </div>
    </div>
  </div>

<!-- End Page Content Wraper -->
<?php include'footer.php'; ?>   