<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Naicha Philippines</title>
    <link rel="stylesheet" href="css/style.css" />
    <!--CSS for  TABS Start -->
    <link rel="stylesheet" href="css/tabs.css"/>
    <!--CSS for TABS END -->
    <!--CSS for SLIDER START-->
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="css/slider/bjqs.css">
    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="css/slider/demo.css">
    <!--CSS for SLIDER END -->
    <!--JS load jQuery and the plugin for (SLIDER and TABS) START -->
    <script src="js/jquery/jquery-1.11.1.min.js"></script>
    <script src="js/slider/bjqs-1.3.min.js"></script><!--this jquery is for the slider-->
    <script class="secret-source">
      jQuery(document).ready(function($) {
      
        $('#banner-fade1').bjqs({
          height      : 195,
          width       : 145,
          responsive  : true,
      showcontrols:false,
      showmarkers:false,
      automatic	:true
      
        });
      
      
      
      $('#banner-fade2').bjqs({
          height      : 195,
          width       : 145,
      
          responsive  : true,
      showcontrols:false,
      showmarkers:false,
      automatic	:true
      
        });
      
      });
    </script>
    <script src="js/tabs/tabs_function.js"></script><!-- this js if for tabs function-->
    <!--JS for (SLIDER and TABS) END-->
    <!--FancyBOx START-->
    <!-- Add jQuery library -->
    <script type="text/javascript" src="fancybox/lib/jquery-1.10.1.min.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!--FancyBOx END-->
  </head>
  <body>
    <div class="pageWrapper">
      <div class="header">
        <div class="headerInside">
          <span>Delivery Hotline: 374-3333</span>
          <span class="floatRight">
            Follow Us on:
            <div class="socialMediaTop" style="display:inline-block;vertical-align:text-top;">
              <a href="#"><img src="images/social_media/fb.png" alt="fb.png" /></a>
              <a href="#"><img src="images/social_media/twitter.png" alt="twitter.png" /></a>
              <a href="#"><img src="images/social_media/instagram.png" alt="instagram.png" /></a>
            </div>
            <!-- /socialMedia -->
          </span>
        </div>
      </div>
      <!-- /header -->
      <div class="contentBorderTop">
        <div class="contentBorderTopBg"></div>
      </div>
      <!--/contentBorderTop-->
      <div class="content">
        <div class="container lightShadow">
          <a href="menu.php#headerMenu">
            <div class="slider slider1 darkShadow" >
              <div   id="banner-fade1">
                <ul class="bjqs">
                  <li><img src="images/slider/1.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/2.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/3.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/4.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/5.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/6.png"  alt="slider_item.png" /></li>
                </ul>
              </div>
            </div>
          </a>
          <!-- /slider1 -->
          <!--LOGO-->
          <div><a href="index.php"><img src="style_images/logo.png"  alt="logo.png"   class="logo"/></a></div>
          <!--/Logo End-->
          <!--/LOGO-->
          <a href="menu.php#headerMenu">
            <div class="slider slider2 darkShadow" >
              <div   id="banner-fade2">
                <ul class="bjqs">
                  <li><img src="images/slider/6.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/5.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/4.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/3.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/2.png"  alt="slider_item.png" /></li>
                  <li><img src="images/slider/1.png"  alt="slider_item.png" /></li>
                </ul>
              </div>
            </div>
          </a>
          <!-- /slider2  -->
        </div>
        <!-- /container -->
      </div>
      <!-- /content -->
      <div class="contentBorderBottom">
        <div class="contentBorderBottomBg"></div>
        <!--/contentBorderBottomBg-->
      </div>
      <!--/contentBorderBottom-->
      <div class="headerMenu">
        <ul class="mainMenu">
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="outlets.php">Outlets</a></li>
          <li><a href="franchising.php">Franchising</a></li>
          <li><a href="http://naicha-philippines.com/NDS/">Order Now</a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
        </ul>
      </div>
      <!-- headerMenu -->
      <div class="subContent">
        <div class="subContentBorderTop"></div>
        <!--/subContentBorderTop-->
        <div class="container darkShadow" style="background:white">
          <a href="menu.php">
            <div class="item darkShadow">
              <h1>Our Best Sellers</h1>
              <img class="itemImage" src="images/best_sellers.jpg" alt="best_sellers.jpg" />
              <p>This is a paragraph for testing purposes. This is a paragraph for testing purposes. This is a paragraph for testing purposes. </p>
            </div>
          </a>
          <!--/item-->
          <a href="#">
            <div class="item darkShadow">
              <h1>Our Customers</h1>
              <img class="itemImage" src="images/customer.jpg" alt="customer.jpg" />
              <p>This is a paragraph for testing purposes. This is a paragraph for testing purposes. This is a paragraph for testing purposes. </p>
            </div>
          </a>
          <!--/item-->
          <a href="outlets.php">
            <div class="item darkShadow">
              <h1>Featured Store</h1>
              <img class="itemImage" src="images/featured_store.jpg" alt="featured_store.jpg" />
              <p>This is a paragraph for testing purposes. This is a paragraph for testing purposes. This is a paragraph for testing purposes. </p>
            </div>
          </a>
          <!--/item-->
        </div>
        <!-- /container -->
        <div class="subContentBorderBottom"></div>
        <!--/subContentBorderTop-->
      </div>
      <!-- /subContent -->
      <div class="subFooter">
        <div class="container">
          <div class="item leftSubFooterItem" >
            <h1>Welcome to Naicha</h1>
            <br />
            <p>At NaiCha, we offer the best tasting milk tea in the Philippines. All our premium ingredients are all imported from Taiwan to give you the best in taste and quality. Our products contain premium and fresh tea leaves like Black, green and Oolong tea.
              Feel free to explore this site. Get to know us. Like our Facebook page and follow us on Twitter.
              We’re all about serving freshly brewed tea mixed with your favourite flavours. With Naicha, your tea never tasted this good! 
            </p>
            <br />
            <p>
              Feel free to explore this site. Get to know us. Like our Facebook page and follow us on Twitter.
            </p>
            <br />
            <p>
              We’re all about serving freshly brewed tea mixed with your favourite flavours. With Naicha, your tea never tasted this good! 
            </p>
          </div>
          <!-- item -->
          <div class="item rightSubFooterItem">
            <h1>Our Services:</h1>
            <br />
            <ul style="margin-left:20px;">
              <li>Free Delivery</li>
              <li>Affordable Franchising</li>
              <li>Good Quality Products</li>
              <li>other Services</li>
            </ul>
            <br />
            <br />
            <h1>Get the latest updates and promos</h1>
            <div class="socialMedia">
              <h3>Like and Follow us on</h3>
              <a href="#"><img src="images/social_media/fb.png" alt="fb.png" /></a>
              <a href="#"><img src="images/social_media/twitter.png" alt="twitter.png" /></a>
              <a href="#"><img src="images/social_media/instagram.png" alt="instagram.png" /></a>
            </div>
            <!-- /socialMedia -->
          </div>
          <!-- /item -->
        </div>
        <!-- /container -->
      </div>
      <!-- /subFooter -->
      <div class="footer">
        <div class="container">
          <div class="copyRight">
            <p>Copyright © 2014 . All Rights Reserved.</p>
          </div>
        </div>
        <!-- /container -->	
      </div>
      <!-- /footer -->
    </div>
    <!-- /pageWrapper -->
  </body>
</html>