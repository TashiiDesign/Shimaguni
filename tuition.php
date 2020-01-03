<!doctype html>
<html>
<head>
<?php 
    $title = "Tuition";
 $pageCss = "tuition.css";
	?>

<meta name="description" content="Tuition Page" />

<?php
    
    include('siteStart.php');
?>


<body>
    <?php include("templates/header.php"); ?>
    
    
            <section class="page-header">
                   
                
            </section>
            
            <section class="main-desc">
                <h2>JAPANESE LESSONS </h2>
                <br>
                
               <p>We teach Group and Private Japanese classes at Shimaguni.<br>
               <br>
               
                - Group classes start every 2 months and last for 6 weeks.<br>  
                - Group classes run on weekday evenings.<br>
                - Classes for Absolute Beginners to Upper Intermediate Students<br></p>
                
                <br><br>
                
                <p>Private lessons can be booked 6 days of the week from Monday to Saturday.<br>
               <br>
               
                - Private lessons can be booked 7 days of the week <br>  
                - We teach travel Japanese, business Japanese, JLPT exam preparation, children classes and much more.<br></p>


               
                <br>
            </section>
            
            <section class="contact-desc">
                <p>Contact us to book a class, or arrange a free consultation.</p><a href="contact.php"><button class="more-info">CONTACT</button></a>
            </section>
       
            
            <section class="tuition-boxes">
                
                <div class="jap-lessons boxes">
                        <h2>PRICES</h2>
                        <p>Group courses cost £80 for new students. (The cost is £60 for students who have already taken a course at Shimaguni. </p>
                        <br>
                        <p>Private lessons can be booked for £30. We ask students to book in a block of 4 or 10. (10 classes cost £290).  </p>
                    
                    <center><a href="assets/Shimaguni-Language-School-2020-Lesson-Schedule.pdf">*SHIMAGUNI JANUARY 2020 LESSON SCHEDULE*</a></center>
                </div>
                
                <div class="eng-lessons boxes">
                        <h2>英会話教室</h2>
                        <p>SHIMAGUNIでは、日本人向けの英会話教室を行っております。毎週金曜日のグループレッスンの他、個人レッスンや英文校正など様々なサービスを提供しています。詳細を知りたい方はお気軽にご連絡ください。</p>
                </div>
            
            </section>
            
            <section id="googlemap">
                    <div class="gtext"><h2>WHERE ARE WE?</h2>
                        <br>
               <p>We are at 92B Trafalgar Street, Brighton, a 2 minute walk down the hill from Brighton station.
<br><br>We are on the 3rd floor above ERA antique furniture shop. <br>Please press the buzzer outside the purple door and we will let you in.</p>

                </div>
                
            	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;'><div id='gmap_canvas' style='height:400px;width:800px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(50.82844513646468,-0.13700735211489512),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.82844513646468,-0.13700735211489512)});infowindow = new google.maps.InfoWindow({content:'<strong>Shimaguni Classroom</strong><br>92B Trafalgar Street<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                
            </section>
            
            
            
            
        
        </main>
        
         <?php include("templates/footer.php"); ?>
    </div>

<?php include("siteEnd.php"); ?>

