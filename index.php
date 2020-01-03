<!doctype html>
<html>
<head>
<?php 
    $title = "Shimaguni Home";
 $pageCss = "main.css";
	?>

<meta name="description" content="Shimaguni Japanese Lessons and Club " />

<?php
    
    include('siteStart.php');
?>

<body>

    <div class="wrapper">

        <header>
                <a href="index.php">
                    <div class="logo">
                        <h5>島国</h5>
                        <h1>SHIMAGUNI</h1>
                    </div></a>
        </header>
                            
            <span id="menu" class="menu-btn">MENU</span>
        
        <nav class="nav">
            
            <ul>
                <li id="home" class="navItems"><a href="index.php">HOME <!--<span class="jap"> ホーム</span>--></a></li>
                 <li id="tuition" class="navItems"><a href="tuition.php">JAPANESE LESSONS <!--<span class="jap"> レッスン</span>--></a></li>
                <li id="tours" class="navItems"><a href="tours-jap.php">TOURS <!--<span class="jap"> ツアー</span>--></a></li>
                <li id="club" class="navItems"><a href="club.php">BRIGHTON JAPAN CLUB <!--<span class="jap">ブライトン・ジャパン・クラブ</span><--></a></li>
                 <li id="contact" class="navItems"><a href="contact.php">CONTACT<!--<span class="jap"> コンタクト</span>--></a></li>
            </ul>
            
        </nav>


        <main>
            <!--<section class="slideshow">
                    <div id="slider" class="nivoSlider">
                
                <img src="assets/images/LESSON TEMPLATE ONE.jpg" alt="japanese lesson shimaguni" />  
                <img src="assets/images/20624270_10155329110285923_1738946922_n-min.jpg" alt="shimaguni daytrip" />  
                <img src="assets/images/IMG_4396-min.JPG" alt="shimaguni picture" />  
                <img src="assets/images/IMG_4137-min.jpg" alt="shimaguni daytrip" />  
                </div>
                
                
<!--
            <ul class="rslides">
                	<li><img src="assets/images/LESSON TEMPLATE ONE.jpg" alt="shimaguni picture 1"></li>
                	<li><img src="assets/images/20624270_10155329110285923_1738946922_n-min.jpg" alt="shimaguni picture 2"></li>
 					<li><img src="assets/images/IMG_4396-min.JPG" alt="shimaguni picture 3"></li>
  					<li><img src="assets/images/IMG_4137-min.jpg" alt="shimaguni picture 4"></li>
                    
                    
				</ul>

            </section>-->

            <section class="main-section">

                <h2 class="headline">NEW JAPANESE GROUP LESSONS: TIMETABLE FOR JANUARY 2020<br> <br> <a href="../assets/Shimaguni-Language-School-2020-Lesson-Schedule.pdf">SHIMAGUNI JANUARY 2020 LESSON SCHEDULE</a></h2>
                
            
            <div class="main-info">
                
                <figure class="class-pic pics">
            <img class="pic" src="assets/images/IMG_4420.JPG">
                    <figcaption>Tom Orsman and Friends <br> (Shimaguni Classroom)</figcaption>
            </figure>
             
                <div class="box1">
                    <p>Shimaguni is a Japanese language school in Brighton providing:</p>
                    

       <p> • Group and individual Japanese lessons</p>
        <p> • Tours around Brighton, Lewes + London in Japanese</p>
        <p> • A translation service from Japanese to English and English to Japanese</p>
        <p> • Meetup events through Brighton Japan Club</p>
                
                <br>
                    
<p>島国（SHIMAGUNI)はイギリス南部のブライトンにある会社です。語学教室やブライトン近辺の日本人向けツアー、翻訳業務を主に行っています。</p>
                
                <br>
<p>Shimaguni is run by Tom Orsman, an Englishman who worked in Japan for nine years as a teacher and a tour guide. </p>
                <br>

<p>島国（SHIMAGUNI)の代表者はオーズマン・トムです。イギリス南部出身で日本には９年間滞在し、水戸市の高校で英語教師として勤務。旅行関係の仕事の経験も経て、帰国後ブライトンで島国（SHIMAGUNI)を設立。日本語能力試験１級を取得。</p>
 <br>

<div class="info-box">
<p>Phone: (077)30382958 <br>
Email: info@shimaguni.co.uk <br>
<a href="https://shimaguniblog.com/">SHIMAGUNI BLOG</a></p></div>
            </div>
                </div>

            </section>

            
            <section class="brighton">
                
                <figure class="pier-pic">
            <img class="pic" src="assets/images/feslygzekpa-darren-coleshill-min.jpg">
                
            </figure>
                <div class="brighton-info">
                <h2>BRIGHTON</h2>
                
                <p>Our classroom is located in lovely Brighton, a bustling city and a great place to visit. We are just two minutes’ walk from Brighton station. Click the link below to see what tours we offer of Brighton and the surrounding areas.</p>
                    
                     <div class="tours-btn"><a href="tours.php">EXPERIENCE BRIGHTON AND BEYOND</a></div>
                    </div>
                
            
            </section>

            <section class="jap-resc">
                <div class="resc-img double"></div>
                <div class="resc-title"></div>
                <div class="resc-img"></div>
                <div class="resc-img"></div>
                <div class="resc-img"></div>
            </section>
        </main>

    
        <?php include("templates/footer.php"); ?>
    </div>

  <?php include("siteEnd.php"); ?>