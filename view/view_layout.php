<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="public/layout.css"/>
<link rel="stylesheet" type="text/css" href="public/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="public/datetimepicker/jquery.datetimepicker.css"/>
<link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    	

<body>	

<div class="wraper">
<!--header-->
<div class="header_a">
		<div class="header">
    	<div class="header_logo">
        	
        </div>
        
        <div class="header_right">
			<div class="header_link">
        	<ul>
            	<li><a href=""><img src="public/image/header_link1.png" /></a></a></li>
                <li><a href=""><img src="public/image/header_link2.png" /></a></a></li>
                <li><a href=""><img src="public/image/header_link3.png" /></a></a></li>
            </ul>
        </div>
        <div class="header_menu">
        	<?php include_once("controller/controller_qlmenu.php");?>
        </div>
        </div>
        <div style="clear:both"></div>
        
        <div class="header_text">
        	the right ingredients
for the right food
        </div>
        
        <div class="duongvien" style="text-align:center;margin-top:33px">
        	<!--<img src="public/image/header_duongvien.png" width="238px"/>-->
        </div>
        
        <div class="chontab">
        	<div class="chontab_1">
            <a href="#">
              <div class="chontab_1a">
                  <a href="">BOOKA TABLE</a>
          
              </div>
              </a>
              <div class="chontab_1b">
                   <a href="">SEE THE MENU</a>
          
              </div>
           	 	
            </div>
            
        	
        </div>
    </div>
</div>
<!--header-->


    <div style="clear:both"></div>
    <!--about-->
    <div class="about">
    	<div class="about_1">
        	<div class="about_1a">
            	<div class="about_title">Just the right food</div>
                <div class="about_duongvien" style="margin-top:14px"><img src="public/image/duongvien_about.png"  /></div>
                <div class="about_description">
                
                	If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!
                </div>
                <div class="about_img">
                	<img src="public/image/img1.png" />
                </div>
            </div>
            <div class="about_1b">
            	<img src="public/image/about_caidia.png" />
            </div>
        </div>
    </div>
    <!--about-->
    <!--Igredients-->
    <div class="Igredients">
    	<div class="Igredients_1">
        	<div class="Igredients_1a">
            	<div class="Igredients_title">Fine ingredients</div>
                <div class="Igredients_duongvien" style="margin-top:13px;margin-bottom:25px"><img src="public/image/Igredients_duongvien.png" width="570" /></div>
                <div class="Igredients_description">
                	If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!
                </div>
                <div class="Igredients_listimg">
                	<ul>
                    	<li><div class="box_img"><img src="public/image/Igredients_img.png" /></div></li>
                        <li><div class="box_img"><img src="public/image/Igredients_img.png" /></div></li>
                        <li><div class="box_img"><img src="public/image/Igredients_img.png" /></div></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <!--Igredients-->
    <div style="clear:both"></div>
    <!--menu-->
   <?php include_once("controller/controller_listmenu.php");?>
    
    <!--menu-->
    
    <!--ReViews-->
    <div class="Review">
    	<div class="Review_1">
        	<div class="Review_1a">
            	<div class="Review_title">Guest Reviews</div>
                <div class="Review_duongke"></div>
                <div class="Review_description">
                	If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!
                </div>
                <div class="Review_name">- food inc, New York</div>
            </div>
        </div>
    </div>
    <!--ReViews-->

    <div class="Reservations">
    	<div class="Reservations_a">
        	<div class="Reservations_aa">
            	<img src="public/image/Reservations_img1.jpg"/>
                <img src="public/image/Reservations_img2.jpg"/>
            </div>
            <div class="Reservations_ab">
            	<div class="Reservations_abb">
                	<div class="Reservations_abb_title"> Just the right food</div>
                    <div class="Reservations_abb_duongvien">
                        <img src="public/image/duongvien_about.png"/>
                    </div>
                     <div class="Reservations_abb_content">
                        If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food.<br /><p></p>
    
    Delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out! Perfect materials and freshly baked food.
                    </div>
                    <div class="Reservations_abb_form">
                    	<?php
                        	include_once("controller/controller_reservations1.php");
							
						?>
                    </div>
                </div>
            	
                
            	
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
    <!--Reservations-->
    
    <div style="clear:both"></div>
    <!--footer-->
    <div class="footer">
    	<div class="footer_1">
        	<div class="footer_1a">
            	<div class="footer_name">About Us</div>
                <div class="footer_duongke"><img src="public/image/Review_duongke.png" /></div>
                <div class="footer_tt">Lambda's new and expanded Chelsea location represents a truly authentic Greek patisserie, featuring breakfasts of fresh croissants and steaming bowls of café.
Lamda the best restaurant in town</div>
            </div>
            <div class="footer_1b">
            	<div class="footer_name">Opening Hours</div>
                <div class="footer_duongke"><img src="public/image/Review_duongke.png" /></div>
                <div class="footer_date">Mon-Thu: 7:00am-8:00pm <br />Fri-Sun: 7:00am-10:00pm
</div>
				<div class="footer_link">
                	<div class="footer_link1"><a href=""><img src="public/image/footer_link1.jpg" /></a></div>
                    <div class="footer_link1"><a href=""><img src="public/image/footer_link2.jpg" /></a></div>
                    <div class="footer_link1"><a href=""><img src="public/image/footer_link3.jpg" /></a></div>
                    <div class="footer_link1"><a href=""><img src="public/image/footer_link4.jpg" /></a></div>
                </div>
            </div>
            <div class="footer_1b">
            	<div class="footer_name">Our Location</div>
                <div class="footer_duongke"><img src="public/image/Review_duongke.png" /></div>
                <div class="footer_date">19th Paradise Street Sitia <br />
128 Meserole Avenue</div>
                <div class="footer_link">
                	<div class="footer_link1"><a href=""><img src="public/image/footer_face.png" /></a></div>
                    <div class="footer_link1"><a href=""><img src="public/image/footer_switch.png" /></a></div>
                    <div class="footer_link1"><a href=""><img src="public/image/footer_youtobe.png" /></a></div>
                    <div class="footer_link1"><a href=""><img src="public/image/footer_google.png" /></a></div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
</div>

</body>

<script src="public/datetimepicker/jquery.js"></script>
<script src="public/datetimepicker/build/jquery.datetimepicker.full.js"></script>
<script src="controller/datetimepicker.js"></script>
</html>
