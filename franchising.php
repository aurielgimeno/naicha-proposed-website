<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>Naicha Philippines</title>
  <link rel="stylesheet" href="css/style.css" />
  <!--CSS for  TABS Start -->
  <link rel="stylesheet" href="css/tabs.css" />

  <!--CSS for TABS END -->


  <!--CSS for SLIDER START-->
  <!-- bjqs.css contains the *essential* css needed for the slider to work -->
  <link rel="stylesheet" href="css/slider/bjqs.css">


  <!-- demo.css contains additional styles used to set up this demo page - not required for the slider -->
  <link rel="stylesheet" href="css/slider/demo.css">
  <!--CSS for SLIDER END -->


  <!--JS load jQuery and the plugin for (SLIDER and TABS) START -->
  <script src="js/jquery/jquery-1.11.1.min.js"></script>
  <script src="js/slider/bjqs-1.3.min.js"></script>
  <!--this jquery is for the slider-->

  <script class="secret-source">
    jQuery(document).ready(function($) {

      $('#banner-fade1').bjqs({
        height: 195,
        width: 145,
        responsive: true,
        showcontrols: false,
        showmarkers: false,
        automatic: true

      });



      $('#banner-fade2').bjqs({
        height: 195,
        width: 145,

        responsive: true,
        showcontrols: false,
        showmarkers: false,
        automatic: true

      });

    });
  </script>

  <script src="js/tabs/tabs_function.js"></script>
  <!-- this js if for tabs function-->
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
        <span class="floatRight">Follow Us on:
					<div class="socialMediaTop" style="display:inline-block;vertical-align:text-top;">
						<a href="#"><img src="images/social_media/fb.png" alt="fb.png" /></a>
						<a href="#"><img src="images/social_media/twitter.png" alt="twitter.png" /></a>
						<a href="#"><img src="images/social_media/instagram.png" alt="instagram.png" /></a>
					</div><!-- /socialMedia -->
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
          <div class="slider slider1 darkShadow">

            <div id="banner-fade1">

              <ul class="bjqs">
                <li><img src="images/slider/1.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/2.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/3.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/4.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/5.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/6.png" alt="slider_item.png" /></li>
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
          <div class="slider slider2 darkShadow">
            <div id="banner-fade2">
              <ul class="bjqs">
                <li><img src="images/slider/6.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/5.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/4.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/3.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/2.png" alt="slider_item.png" /></li>
                <li><img src="images/slider/1.png" alt="slider_item.png" /></li>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a>
        </li>
        <li><a href="outlets.php">Outlets</a></li>
        <li><a href="franchising.php" class="active">Franchising</a></li>
        <li><a href="http://naicha-philippines.com/NDS/">Order Now</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
      </ul>
    </div>
    <!-- headerMenu -->

    <div class="subContent">
      <!--<div class="subContentBorderTop"></div><!--/subContentBorderTop-->
      <div class="container">
        <!-- pageContainer START -->
        <div class="pageContainer">

          <div class="container">
            <center>
              <h1>COME GROW WITH US</h1>
            </center>
            <div class="packageInclusion darkShadow brownBG">

              </br>
              <p class="textAlignJustify">We opened our first NaiCha outlet in Subic in 2010. After a few months of operation, our Taiwanese style milk tea drinks became popular both with locals and tourists that frequent the area. The demand for our drinks increased so we decided to expand and widen our market. In October 2011, we opened our first store in Manila and we have continued to grow since then. With outlets both in Metro Manila and the provinces, we are poised to open new ones by the end of the year. Join us as we continue to develop and expand the brand.</p>
              </br>
            </div>

            <!--package inclusion START-->
            <div class="brownBG packageInclusion darkShadow">
              <center>
                <h2>FRANCHISE PACKAGE</h2>
              </center>
              <h3>Package Inclusions:</h3>
              </br>

              <!--itemList START-->
              <div class="itemList">
                <h3>SERVICES:</h3>
                <ul>
                  <li>Use of Logo and Trade Name</li>
                  <li>Store operation manual</li>
                  <li>Notarized Franchise Contract</li>
                  <li>Renewable 3 Year contract</li>
                  <li>Staff training</li>
                  <li>Grand Opening assistance and support</li>
                  <li>Site Occular Support</li>
                  <li>One (1) set of Flyers</li>
                  <li>Design Assistance of Outlet</li>
                  <li>Initial Raw Materials</li>
                  <li>MACHINES AND EQUIPMENTS:</li>
                </ul>
                <br/>
                <h3>MACHINES</h3>
                <ul>
                  <li>SEALER MACHINE</li>
                  <li>SYRUP DISPENSER</li>
                </ul>
              </div>
              <!--itemList END-->



              <!--itemList START-->
              <div class="itemList">
                <h3>SMALL WARES AND KITCHEN UTENSILS.</h3>
                <ul>
                  <li>CONTAINER(CREAM)</li>
                  <li>CONTAINER(SYRUP)</li>
                  <li>ICE SCOOPER (STAINLESS)</li>
                  <li>ICE BUCKET (27 LITER )</li>
                  <li>LADLE (LONG) </li>
                  <li>MEASURING CUP(5000CC)</li>
                  <li>MEASURING CUP(500CC)</li>
                  <li>PITCHER 4000CC (PEARL CONTAINER)</li>
                  <li>PEARL / TEA POT</li>
                  <li>SCOOPER(CREAM)</li>
                  <li>SCOOPER(PEARL)</li>
                  <li>SCOOPER(SYRUP)</li>
                  <li>SHAKER (PLASTIC)</li>
                  <li>STRAINER (PEARL)</li>
                  <li>STRAINER (TEA)</li>
                  <li>STRAW CONTAINER (14CM ) </li>
                  <li>TEA JAR (10L) </li>
                  <li>THERMOMETER </li>
                  <li>TIMER </li>
                  <li>WEIGHING SCALE</li>
                </ul>
              </div>
              <!--itemList END-->

              <!--itemList START-->
              <div class="itemList">

                <a href="images/inclusion_image.jpg" class="fancybox"><img class="inclusionImage" src="images/inclusion_image.jpg" alt="" /></a>
              </div>
              <!--itemList END-->
            </div>
            <!--package inclusion END-->


            <div class="brownBG  packageInclusion ">
              <center>
                <h2> Among the benefits you’ll enjoy as a NAICHA FRANCHISE PARTNER are:</h2>
              </center>
              </br>
              <ul class="textAlignJustify">
                <li><strong>COMPREHENSIVE TRAINING</strong> – We provide extensive training in advance, including systems, Food preparation, personnel practices – everything you’ll need to get your business under way.</li>
                </br>
                <li><strong>PROVEN BUSINESS PLAN</strong> – We’ll share our “best practices with you and show you the marketing, promotion, and operational techniques that have worked for other franchised partners.</li>
                </br>
                <li><strong>SUPERIOR PRODUCTS</strong> – Our team is staffed by experience personnel who are continually working on exciting new menu items to cope with the latest tea or beverage trend.</li>
                </br>
                <li><strong>CONTINOUS SUPPORT</strong> – NAICHA will provide ongoing support for your business, including advertising and promotional ideas, marketing programs, ongoing menu development and new product introductions.</li>
                </br>
              </ul>

              <center>
                <h1 style="color:#0c2055;">FOR FRANCHISE INQUIRIES:</h1>
                <h2>CALL or TEXT us at: </h2>

                <strong>
											<span>- (02) 709-6238 </span><br />
											<span>- (02) 788-9918</span><br />
											<span>- (0917) 612-2293</span><br />
										</strong>
                <h1 style="color:#9d090e;">We’ll be glad to talk and have a business with you!</h1>

              </center>
            </div>
            </br>

          </div>
          <!--container-->

        </div>
        <!-- pageContainer END -->
        <!--<a href="#">
				<div class="item darkShadow">
					<h1>Our Best Sellers</h1>
						
							<img class="itemImage" src="images/best_sellers.jpg" alt="best_sellers.jpg" />
						
					
						<p>This is a paragraph for testing purposes. This is a paragraph for testing purposes. This is a paragraph for testing purposes. </p>
					
				</div>
				</a><!--/item-->

        <!--<a href="#">
				<div class="item darkShadow">
					<h1>Our Customers</h1>	
					
							<img class="itemImage" src="images/customer.jpg" alt="customer.jpg" />
						
					
						<p>This is a paragraph for testing purposes. This is a paragraph for testing purposes. This is a paragraph for testing purposes. </p>
				
				</div>
				</a><!--/item-->

        <!--<a href="#">
				<div class="item darkShadow">
					<h1>Featured Store</h1>	
						
							<img class="itemImage" src="images/featured_store.jpg" alt="featured_store.jpg" />
						
					
						<p>This is a paragraph for testing purposes. This is a paragraph for testing purposes. This is a paragraph for testing purposes. </p>
				
				</div>
				</a><!--/item-->

      </div>
      <!-- /container -->

      <!--<div class="subContentBorderBottom"></div><!--/subContentBorderTop-->

    </div>
    <!-- /subContent -->

    <div class="subFooter">
      <div class="container">
        <div class="item leftSubFooterItem">
          <h1>Welcome to Naicha</h1>
          <br />

          <p>At NaiCha, we offer the best tasting milk tea in the Philippines. All our premium ingredients are all imported from Taiwan to give you the best in taste and quality. Our products contain premium and fresh tea leaves like Black, green and Oolong tea. Feel free to explore this site. Get to know us. Like our Facebook page and follow us on Twitter. We’re all about serving freshly brewed tea mixed with your favourite flavours. With Naicha, your tea never tasted this good!
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
          <h1>Our Services:</h1><br />
          <ul style="margin-left:20px;">
            <li>Free Delivery</li>
            <li>Affordable Franchising</li>
            <li>Good Quality Products</li>
            <li>other Services</li>

          </ul><br />

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