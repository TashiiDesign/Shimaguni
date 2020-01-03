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
    
    <title>Shimaguni
        <?php 
            if (isset($title)) {
                echo " - $title";
            } 
        ?>
    </title>
    
    <script src="assets/js/modernizr.js"></script>
    <link href="assets/css/main.css" rel="stylesheet"  />  
    <link href="assets/css/nivo-slider.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2RlWcQzpGsk-DCQ1klxRDNF9iNjKdJoY&callback=initMap"
  type="text/javascript"></script>
    
<?php
    if (isset($pageCss)) {
        echo "    <link href=\"assets/css/$pageCss?v=1.0\" rel=\"stylesheet\" />";
    }
?>

  </head>


        <!-- Content Starts Here -->