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

    <div class="headerMenu" id="headerMenu">
      <ul class="mainMenu">
        <li><a href="index.php ">Home</a></li>
        <li><a href="menu.php " class="active">Menu</a></li>
        <li><a href="outlets.php ">Outlets</a></li>
        <li><a href="franchising.php ">Franchising</a></li>
        <li><a href="http://naicha-philippines.com/NDS/">Order Now</a></li>
        <li><a href="contact_us.php ">Contact Us</a></li>
      </ul>
    </div>
    <!-- headerMenu -->

    <div class="subContent">
      <!--<div class="subContentBorderTop"></div><!--/subContentBorderTop-->
      <div class="container">

        <!-- pageContainer START -->
        <div class="pageContainer">
          <br/>
          <h1 style="">Our Products</h1>

          <!--tabs START -->
          <div class="tabs">
            <ul class="tab-links">
              <li class="active"><a href="#tab1">Novel Tea</a></li>
              <li><a href="#tab2">Naicha Specials</a></li>
              <li><a href="#tab3">Jelly Delight</a></li>
              <li><a href="#tab4">Toothie Fruity Juice</a></li>
              <li><a href="#tab5">Other Drinks</a></li>
              <li><a href="#tab6">Add Ons</a></li>

            </ul>

            <!-- Tab Content START-->
            <div class="tab-content">

              <!-- One Category of Products START -->
              <div id="tab1" class="tab active">



                <div class="divLeft">
                  <img src="images/products/1.png" alt="" />
                </div>

                <!-- Novel Tea START -->
                <div class="divRight">
                  <table>


                    <tr>
                      <th>Product Name</th>

                      <th>16 Oz</th>
                      <th>26 Oz</th>

                    </tr>

                    <tr>
                      <td>Black Tea <br/>紅茶</td>

                      <td>P 40.00 </td>
                      <td>P 50.00 </td>
                    </tr>
                    <tr>
                      <td>JGreen Tea <br/>綠茶</td>

                      <td>P 40.00 </td>
                      <td>P 50.00 </td>
                    </tr>
                    <tr>
                      <td>Wintermelon tea<br/>冬瓜茶</td>

                      <td>P 40.00 </td>
                      <td>P 50.00 </td>

                    </tr>
                    <!--	<tr >
													<td>Honey Green Tea</td>
													<td>P 30.00  </td>
													<td>P 40.00  </td>
													<td>P 50.00  </td>
													<td >P 60.00  </td>
												</tr>	
												<tr >
													<td>Yakult Green Tea</td>
													<td>P 30.00  </td>
													<td>P 40.00  </td>
													<td>P 50.00  </td>
													<td >P 60.00  </td>
												</tr> -->
                  </table>
                  <a class="button" href="http://naicha-philippines.com/NDS/">Order Now</a>
                </div>
                <!-- Novel Tea END -->



              </div>
              <!-- One Category of Products END -->


              <!-- One Category of Products START -->
              <div id="tab2" class="tab">


                <div class="divLeft">
                  <img src="images/products/3.png" alt="" />
                </div>

                <!-- Naicha Specials START -->
                <div class="divRight">
                  <table>


                    <tr>
                      <th>Product Name</th>

                      <th>16 Oz</th>
                      <th>26 Oz</th>

                    </tr>

                    <tr>
                      <td>Rose green tea <br />玫瑰綠茶</td>

                      <td>P 60.00 </td>
                      <td>P 80.00 </td>

                    </tr>
                    <tr>
                      <td>Wintermelon Lemmon <br />冬瓜檸檬</td>

                      <td>P 60.00 </td>
                      <td>P 80.00 </td>

                    </tr>
                    <tr>
                      <td>Wintermelon grass <br />冬瓜仙草</td>

                      <td>P 60.00 </td>
                      <td>P 80.00 </td>

                    </tr>
                    <tr>
                      <td>Signature Taiwan Naicha <br />台灣奶茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Golden milk tea <br />黃金奶茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Original Oolong Naicha <br />烏龍奶茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Coffee Naicha <br />咖啡奶茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Choco Naicha <br />巧克力奶茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Sweet Naicha <br />黑糖奶茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Caramel Naicha <br />焦糖奶茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Wintermelon Latte <br />冬瓜拿鐵</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Matcha <br />抹茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Choco Wintermelon <br />巧克力冬瓜茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Stawberry NaiCha <br />草莓奶茶</td>

                      <td>P 70.00 </td>
                      <td>P 90.00 </td>

                    </tr>
                    <tr>
                      <td>Taro Wintermelon <br />芋頭冬瓜奶茶</td>

                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>
                    <tr>
                      <td>Buko Wintermelon <br />椰子冬瓜奶茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>
                    <tr>
                      <td>Taro NaiCha <br />芋頭奶茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>
                    <tr>
                      <td>Buko NaiCha<br />椰子奶茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>

                  </table>
                  <a class="button" href="http://naicha-philippines.com/NDS/">Order Now</a>
                </div>
                <!-- Naicha Specials END -->


              </div>
              <!-- One Category of Products END -->


              <!-- One Category of Products START -->
              <div id="tab3" class="tab">

                <div class="divLeft">
                  <img src="images/products/6.png" alt="" />
                </div>

                <!-- Jelly Delight START -->
                <div class="divRight">
                  <table>


                    <tr>
                      <th>Product Name</th>

                      <th>16 Oz</th>
                      <th>26 Oz</th>

                    </tr>

                    <tr>
                      <td>Pearl Milk Tea <br />珍珠奶茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>

                    </tr>
                    <tr>
                      <td>Sago Milk Tea <br />椰果奶茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>
                    <tr>
                      <td>Pudding Milk Tea <br />布丁奶茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>
                    <tr>
                      <td>Coffee Jelly Milk Tea <br />咖啡凍奶茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>
                    <tr>
                      <td>Pearl Sweet Milk Tea<br />黑糖珍奶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>
                    <tr>
                      <td>Grass Jelly Milk tea<br />仙草奶茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>


                  </table>
                  <a class="button" href="http://naicha-philippines.com/NDS/">Order Now</a>
                </div>
                <!-- Jelly Delight END -->

              </div>
              <!-- One Category of Products END -->


              <!-- One Category of Products START -->
              <div id="tab4" class="tab">

                <div class="divLeft">
                  <img src="images/products/7.png" alt="" />
                </div>

                <!-- Toothie Fruity Juice START -->
                <div class="divRight">
                  <table>


                    <tr>
                      <th>Product Name</th>

                      <th>16 Oz</th>
                      <th>26 Oz</th>

                    </tr>

                    <tr>
                      <td>Kiwi Juice <br />奇異果汁</td>
                      <td>P 50.00 </td>
                      <td>P 70.00 </td>

                    </tr>
                    <tr>
                      <td>Lychee Juice <br />荔枝汁</td>
                      <td>P 50.00 </td>
                      <td>P 70.00 </td>
                    </tr>
                    <tr>
                      <td>Lemon Juice <br />檸檬汁</td>
                      <td>P 50.00 </td>
                      <td>P 70.00 </td>
                    </tr>
                    <tr>
                      <td>Green Apple Juice <br />青蘋果汁</td>
                      <td>P 50.00 </td>
                      <td>P 70.00 </td>
                    </tr>
                    <tr>
                      <td>Green Grape Juice <br />青葡萄汁</td>
                      <td>P 50.00 </td>
                      <td>P 70.00 </td>
                    </tr>
                    <tr>
                      <td>Grape Juice <br />葡萄柚汁</td>
                      <td>P 50.00 </td>
                      <td>P 70.00 </td>
                    </tr>
                    <tr>
                      <td>Blue Berry Juice <br />藍莓汁</td>
                      <td>P 50.00 </td>
                      <td>P 70.00 </td>
                    </tr>
                    <tr>
                      <td>Mango Fruit Juice <br />芒果汁</td>
                      <td>P 55.00 </td>
                      <td>P 75.00 </td>
                    </tr>
                    <tr>
                      <td>Lemon Yakult <br />檸檬養綠多</td>
                      <td>P 55.00 </td>
                      <td>P 75.00 </td>
                    </tr>
                    <tr>
                      <td>Green Apple Yakult <br />青蘋果養樂多</td>
                      <td>P 55.00 </td>
                      <td>P 75.00 </td>
                    </tr>
                    <tr>
                      <td>Kiwi Yakult <br />奇異果養樂多</td>
                      <td>P 55.00 </td>
                      <td>P 75.00 </td>
                    </tr>
                    <tr>
                      <td>Lychee Yakult <br />荔枝養樂多</td>
                      <td>P 55.00 </td>
                      <td>P 75.00 </td>
                    </tr>
                    <tr>
                      <td>藍莓養樂多</td>
                      <td>P 55.00 </td>
                      <td>P 75.00 </td>

                    </tr>


                  </table>
                  <a class="button" href="http://naicha-philippines.com/NDS/">Order Now</a>
                </div>
                <!-- Toothie Fruity Juice END -->

              </div>
              <!-- One Category of Products END -->

              <!-- One Category of Products START -->
              <div id="tab5" class="tab">

                <div class="divLeft">
                  <img src="images/products/4.png" alt="" />
                </div>

                <!-- Other Drinks START -->
                <div class="divRight">
                  <table>


                    <tr>
                      <th>Fresh</th>

                      <th>16 Oz</th>
                      <th>26 Oz</th>

                    </tr>


                    <tr>
                      <td>Grape Fruit jade tea <br/>鮮葡萄柚綠茶</td>

                      <td>P 80.00 </td>
                      <td>P 100.00 </td>
                    </tr>
                    <tr>
                      <td>Fresh Lemon jade tea <br/>鮮檸檬綠茶</td>
                      <td>P 80.00 </td>
                      <td>P 100.00 </td>

                    </tr>


                  </table>
                  <br/>
                  <table>
                    <tr>
                      <th width="53%">Shrimp Biscuit</th>
                      <th width="24%">16 Oz</th>
                      <th width="24%"> </th>

                    </tr>
                    <tr>
                      <td>Small bag</td>
                      <td>P 20.00</td>
                      <td>-</td>

                    </tr>
                    <tr>
                      <td>Large bag</td>
                      <td>P 70.00 </td>
                      <td>-</td>

                    </tr>



                  </table>

                  <br />
                  <table>
                    <tr>
                      <th width="53%">Hot drink</th>
                      <th width="24%">12 Oz</th>
                      <th width="24%"></th>

                    </tr>
                    <tr>
                      <td>Longan and red date tea <br />桂圓紅棗茶</td>
                      <td>P 50.00 </td>
                      <td>-</td>

                    </tr>
                    <tr>
                      <td>Citron Pulp tea<br />柚子茶</td>
                      <td>P 50.00 </td>
                      <td>-</td>

                    </tr>
                    <tr>
                      <td>Ginger chocolatea<br />巧克力薑母茶</td>
                      <td>P 50.00 </td>
                      <td>-</td>

                    </tr>

                  </table>
                  <a class="button" href="http://naicha-philippines.com/NDS/">Order Now</a>
                </div>
                <!-- Other Drinks END -->



              </div>
              <!-- One Category of Products END -->

              <!-- One Category of Products START -->
              <div id="tab6" class="tab">

                <div class="divLeft">
                  <img src="images/products/1.png" alt="" />
                </div>

                <!-- Add Ons START -->
                <div class="divRight">
                  <table>


                    <tr>
                      <th>Add Ons</th>

                      <th></th>


                    </tr>


                    <tr>
                      <td>Pearl<br/>珍珠</td>
                      <td>P 15.00 </td>

                    </tr>
                    <tr>
                      <td>Sago <br/>椰果</td>
                      <td>P 15.00 </td>
                    </tr>
                    <tr>
                      <td>Pudding<br/>布丁</td>
                      <td>P 15.00 </td>
                    </tr>
                    <tr>
                      <td>Coffee Jelly<br/>咖啡凍</td>
                      <td>P 20.00 </td>
                    </tr>
                    <tr>
                      <td>Rock Salted Cheese<br/>奶蓋</td>
                      <td>P 20.00 </td>
                    </tr>
                    <tr>
                      <td>Mango<br/>芒果波波球</td>
                      <td>P 20.00 </td>

                    </tr>

                    <tr>
                      <td>Grass<br/>仙草凍</td>
                      <td>P 20.00 </td>
                    </tr>


                  </table>


                  <a class="button" href="http://naicha-philippines.com/NDS/">Order Now</a>
                </div>
                <!-- Add Ons END -->



              </div>
              <!-- One Category of Products END -->


            </div>
            <!-- Tab Content END-->
          </div>
          <!--tabs END -->





        </div>
        <!-- pageContainer END -->
        

      </div>
      <!-- /container -->
      
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