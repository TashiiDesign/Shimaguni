<!doctype html>
<html>
<head>

<?php 
    $title = "Contact";
 $pageCss = "contact.css";
	?>

<meta name="description" content="Contact Page" />

<?php
    
    include('siteStart.php');
?>


<body>

    <?php include("templates/header.php"); ?>
    
       <section class="page-header">
                    <h2 class="title-text">CONTACT</h2>
                
            </section>
            
            
            <section class="contact-desc">
                <p>Please leave any questions/enquiries in the contact form and we will get back to you as soon as possible.</p>
                <p>Thank you!</p> 
            </section>
            
            <section class="form-container">
                
                <form action="mail.php" method="post" name="contactForm" id="contact-f" >
                    <fieldset>
                     <input type="text" name="name" placeholder="Name　名前" required /><br />
    <input  type="email" name="email" placeholder="Email　メール" required  /><br />
    <textarea type="text" name="comment" placeholder="Message　メセージ" required ></textarea><br />
    <button id="submit" type="submit">
      Send!
    </button>
    </fieldset>
    </form>

            </section>
            
        
            <section class="feedback">
                <h2>Testimonials</h2>
                  <ul>
			<li>
				<blockquote>“We have been able to practice our Japanese with the local which is great!! And we were able to recognise some of the words written in Japanese, we are v happy for this and all thanks to you!!" <br>
                <br>"Thank you ever so much for teaching us Japanese and for all your patience, we really appreciate it…We have really enjoyed the lessons they are so much fun!!”</blockquote>
				<p class="author">- Two students who took private course before visiting Japan in March 2016</p>
			</li>
			<li>
				<blockquote>“A big thank you…...I feel lucky that I found the right person to help out and will always look back on the experience with fond memories.”</blockquote>
				<p class="author">- From a man from West Sussex who took a series of tailor-made classes to prepare a speech in Japanese for his son’s wedding</p>
			</li>
            <li>
				<blockquote>“Our lessons with you were the perfect preparation, and helped us get the most out of our time in a wonderful country. We’re hoping to return before too long, before which we’ll be in touch for a refresher course with you!”</blockquote>
				<p class="author">- Two students from Lewes who took lessons before visiting Japan in December 2014</p>
			</li>
        </ul>
            
            </section>
            

            
              </main>
        
        
      <?php include("templates/footer.php"); ?>
    </div>

 <?php include("siteEnd.php"); ?>