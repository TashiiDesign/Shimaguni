  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.loadie.min.js"></script>
<script src="assets/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script>

$(window).on('load', function() {
    $('#slider').nivoSlider({
         effect: 'fold',
        controlNav: false,
        pauseTime:5000,
        animSpeed:700,
        prevText: '',
        nextText: '',
        pauseOnHover: false
    
    })
}); 
 
 $(function(){
	var items = (Math.floor(Math.random() * ($('#testimonials li').length)));
	$('#testimonials li').hide().eq(items).show();
	
  function next(){
		$('#testimonials li:visible').delay(8000).fadeOut('slow',function(){
			$(this).appendTo('#testimonials ul');
			$('#testimonials li:first').fadeIn('slow',next);
    });
   }
  next();
});
 
 	
	$(function() {
	$('nav').waypoint(function() {
		$('nav').toggleClass('sticky');
	});
});

		/*FADE HEADINGS*/
		$('.title-text').waypoint(function(){
			$('.title-text').toggleClass('start');
		},{
			offset:'90%'
		});
		
				
	$("#menu").click(function(){
			$("ul").toggleClass("showNav");
		});
		
$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	
     $('#contact').validate({
		 rules: {
			 name: {
				 required:true
			 },
			 email: {
				 required:true,
				 email:true
			 },
			 comment: {
				 required:true,
				 minlength:10
			 }
		 },
		 
		 messages: {
			 name: "Please enter your full name",
			 email: {
				 required: "Please enter a valid email address",
				 email: "Email not formatted correctly"
			 },
			 comment:{
				 required: "Please include a message",
				 minlength: "Your message is too short"
			 }
			 
		 }
		 });
		 
		 
		 $(document).ready(function(){
		 	$("#eng-button").click(function(){
			$("content-jap").addClass("eng");
		});
		 });
		
    </script>

</body>
</html>
