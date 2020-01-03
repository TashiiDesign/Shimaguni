<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <meta name="author" content="Tom Orsman">
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Shimaguni" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://shimaguni.co.uk/index.php" />
    <meta property="og:image" content="assets/images/15645141_10154625287360923_481810867_n.jpg" />
    <meta property="og:description" content="Shimaguni is a Brighton business providing Japanese lessons by native and non-native teachers, day tours of the Sussex region, and small project translations." />
    <meta property="og:site_name" content="Shimaguni" />
    
    <title>Shimaguni</title>
    
    <script src="assets/js/normalize.js"></script>
    <link href="assets/css/main.css" rel="stylesheet"  />  
    <link href="assets/css/responsiveslides.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2RlWcQzpGsk-DCQ1klxRDNF9iNjKdJoY&callback=initMap"
  type="text/javascript"></script>
    
     <style>
	
	#mailContainer {
	position:relative;
	margin:0 auto;
	text-align:center;
	font-size:25px;
	}
	
	/* iPads (portrait and landscape) ----------- */
@media only screen 
and (max-width : 768px) {
	
	#mailContainer{
		margin:0 auto;
		font-size:20px;
		
	}
		
}
		


</style>


  </head>
    

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
                 <li id="tuition" class="navItems"><a href="tuition.php">TUITION <!--<span class="jap"> レッスン</span>--></a></li>
                <li id="tours" class="navItems"><a href="tours-jap.php">TOURS <!--<span class="jap"> ツアー</span>--></a></li>
                <li id="translation" class="navItems"><a href="translation.php">TRANSLATION <!--<span class="jap"> 翻訳</span>--></a></li>
                <li id="club" class="navItems"><a href="club.php">BRIGHTON JAPAN CLUB <!--<span class="jap">ブライトン・ジャパン・クラブ</span><--></a></li>
                 <li id="contact" class="navItems"><a href="contact.php">CONTACT<!--<span class="jap"> コンタクト</span>--></a></li>
            </ul>
            
        </nav>



        <main>
<div id="mailContainer">
    
    	
        <?php
		
			$name = $_POST['name'];
			$email = $_POST['email'];
			$comment = $_POST['comment'];
			
			$to='info@shimaguni.co.uk';
			$subject='New Message from '.$name;
			$message=$name.' has sent a message: 
			'.$comment.'
			Email: '.$email;
			$headers='From:' .$email;

			
			if(mail($to,$subject,$message,$headers))
			{
				echo '<div class="desc">Thank you for sending a message! <br><br>I will get back to you as soon as possible. Please click <a href="index.php">here</a> to return to the homepage!</div>';
			}
			else
			{
				echo '<div class="desc">Sorry, there has been a problem in sending your message. Please <a href="contact.php">try again</a></div>';
			}
		?>
   </div>

    </main>

        <footer>

            <div class="latest-news">
                <div class="latest-news-title">
        		<p>LATEST NEWS</p>
        	</div>
            <span id="news1" class="news"><p>► <a href="https://shimaguniblog.com/">New Shimaguni Blog!</a> </p></span>
                <span id="news2" class="news"><p>► <a href="../tuition.php">Pick up Top Travel Tips and Essential Phrases for your Japan Trip (Customised Classes)</a></p></span>
                <span id="news3" class="news"><p>► <a href="https://www.meetup.com/Brighton-Japan-Club/">Exciting events coming up at Brighton Japan Club in 2017</a></p></span>
                <span id="news4" class="news"><p>► <a href="../assets/November Lesson Schedule.pdf">Check out our November lesson Schedule here!</a></p></span>
                </div>


            <div class="foot-links">
            <a href="contact.php"><p id="ftr-link1" class="ftr-links">Contact</p></a>
                    <a href="tuition.php"><p id="ftr-link2" class="ftr-links">About Lessons</p></a>
                    <a href="https://www.meetup.com/Brighton-Japan-Club"><p id="ftr-link3" class="ftr-links">Brighton Japan Club</p></a>
                    <a href="https://shimaguniblog.com/"><p id="ftr-link4" class="ftr-links">Shimaguni Blog</p></a>
            </div>

            <div class="social-media-icons">
                        
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-meetup"></a>
                
                
                    </div>


            <div class="copyright">
            <p>&copy;SHIMAGUNI <?php echo date('Y') ?> ALL RIGHTS RESERVED | 
                <a href="terms.php">TERMS</a></p>
            </div>

        </footer>

    </div>
<?php include("siteEnd.php"); ?>