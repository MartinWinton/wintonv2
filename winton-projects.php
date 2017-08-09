<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="animate.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body  data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
   
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about">Top</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#breakdown">Breakdown</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#form">Contact Me</a>
          </li>
        
        
        
        </ul>
      
      </div>
    </nav>

    
    
    
    
    

	<?php
	// define variables and set to empty values
	$recipient = $sender = $subject = $body = "";
	$recErr = $sendErr = $subErr = $bodyErr = $nameErr= "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {







		if (empty($_POST["sender"])) {
			$sendErr = "You must enter from address";
		}

		elseif(!filter_var($_POST["sender"], FILTER_VALIDATE_EMAIL)){
			$sender = test_input($_POST["sender"]);
			$sendErr = "Invalid email format";

		}

		else {
			$sender = test_input($_POST["sender"]);
		}



		if (empty($_POST["subject"])) {
			$subErr = "You must enter subject";
		}



		else {
			$subject = test_input($_POST["subject"]);



		}




		if (empty($_POST["body"])) {
			$bodyErr = "You must enter body";
		}



		else {
			$body = test_input($_POST["body"]);
		}

		if (empty($_POST["name"])) {
			$nameErr = "You must enter name";
		}
		
		
		
		else {
			$name = test_input($_POST["name"]);
		}
		
		
		


	}









	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



?>
    
    
    
    
    
    <div id="about" >
    
      <div >
        <div >
       
       <div style="background-color:lightgray; padding-bottom:4rem; padding-top:4rem">
       
          <div class="container " >
             <div class="row" >
            <div class="col-xl-8 col-lg-7 col-sm-12   animated fadeInLeftBig" >
              <h1>Hi!</h1>
              <p>My name is Martin Winton and I am an aspiring software developer. I am currently enjoying my second year at MIT and pursuing a major in Computer Science with a minor in Econimics. My goal is to create software that is useful, streamlined, and fun!</p>
              <p><a class="btn btn-md btn-primary"  href="resume.pdf" download="resume.pdf"     role="button">Download my Resume!</a></p>
            </div>
          
          
          
          
          
          <div class="  col-xl-4 col-lg-5 col-sm-12 animated fadeInRightBig"   >
              <div class="w3-display-container">
          <img src="http://imgur.com/download/dBT6J0Z" style="width:80%; max-width:270px" alt="Picture supported on Internet Explorer">
          <div class="w3-display-bottomleft w3-container w3-text-white">
        
          </div>
            </div>
          
          </div>
        </div>
       
    </div>

</div>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

   
   <div style="background-color:gray;  padding-top:2rem">
   
	
      </div>
  
  <div id="breakdown" class=marketing style="background-color: white;padding-top: 4rem;">
  
    <h1 class="text-center">Breakdown</h1>
    <br>
      <!-- Three columns of text below the carousel -->
  
      <div class="row" >
        <div class="col-lg-4">
       <i class="fa fa-users w3-text-blue breakdown" style = "font-size:120px;" ></i>
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
       
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <i class="fa fa-code-fork w3-text-blue breakdown" style = "font-size:120px; " ></i>
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <i class="fa fa-suitcase w3-text-blue breakdown" style = "font-size:120px; " ></i>
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

</div>
      <!-- START THE FEATURETTES -->

 <div style="background-color:gray;  padding-top:2rem">
   
	
      </div>

    

      <div class="marketinggray"  id="skills"  style= "padding-bottom: 6rem; padding-top: 5rem;padding-right: 4rem;  padding-left: 4rem;  background-color:lightgray">
         <h1 class="text-center" style = "margin-bottom:2rem" >Skills</h1>
         <div class="row">
         <div class=" offset-lg-3  col-lg-6 ">
         <p class=" text-center ">My education and work experience have provided me with knowledge of many useful technologies. There is always more to learn!</p>
 
           </div>
				</div>
				<div class="container-fluid">	
				   <div class="row">		
	
    
    
    
      
    	
    	<div class=" col-sm-6 col-lg-6">	
		 	          	  	 <h3>Coding Languages:</h3>	
		 	          	  	 
		 	           <div class="row skill-border"  style = "text-align: center; ">	
		 	             	
          <div  <i class="i  col-sm-8 col-md-6 col-xl-4 devicon-java-plain  w3-text-blue"></i>Java</div>
         <div  <i class=" i  col-sm-8 col-md-6  col-xl-4 devicon-python-plain   w3-text-blue" ></i>Python</div>
          <div  <i class=" i  col-sm-8  col-md-6  col-xl-4 devicon-php-plain  w3-text-blue" ></i>PHP</div>
          
        
         
		 	             	
          <div <i class="  i col-sm-8 col-md-6 col-xl-4  devicon-cplusplus-plain   w3-text-blue" ></i>C/C++</div>
         <div  <i class="i  col-sm-8  col-md-6 col-xl-4  devicon-html5-plain  w3-text-blue" ></i>HTML5</div>
          <div  <i class=" i col-sm-8  col-md-6  col-xl-4  devicon-javascript-plain w3-text-blue" ></i>JavaScript</div>
            <div  <i class="i  col-sm-8  col-md-6  col-xl-4 devicon-css3-plain  w3-text-blue" ></i>CSS3</div>
          <div  <i class=" i  col-sm-8  col-md-6  col-xl-4 fa  fa-desktop  w3-text-blue" ></i>MATLAB</div>
          <div  <i class=" i  col-sm-8  col-md-6  col-xl-4  fa fa-desktop  w3-text-blue" ></i>REGEX</div>
      
         </div>
		</div>	
			
   	<div class=" col-sm-6 col-lg-6">	
		 	          	  	 <h3>Programs:</h3>	
		 	          	  	 
		 	           <div class="row skill-border"  style = " text-align: center">	
		 	             	
          <div <i class="col-sm-8 col-md-6 col-xl-4 i devicon-mysql-plain   w3-text-blue" ></i>MySQL</div>
         <div  <i class="col-sm-8 col-md-6  col-xl-4 i devicon-ubuntu-plain   w3-text-blue" ></i>Ubuntu Server</div>
          <div  <i class=" col-sm-8  col-md-6  col-xl-4 i devicon-apache-plain  w3-text-blue" ></i>Apache</div>
          
        
      
                   
		 	             	
          <div <i class="col-sm-8 col-md-6 col-xl-4  i devicon-github-plain w3-text-blue" ></i>Github</div>
         <div  <i class="col-sm-8  col-md-6 col-xl-4  i fa fa-file-word-o fa-fw   w3-text-blue" ></i>Office</div>
          <div  <i class=" col-sm-8  col-md-6  col-xl-4 i devicon-windows8-original  w3-text-blue" ></i>Windows</div>
            <div  <i class=" col-sm-8  col-md-6  col-xl-4 i devicon-linux-plain  w3-text-blue" ></i>Linux</div>
               <div <i class="col-sm-8 col-md-6 col-xl-4  i devicon-bootstrap-plain   w3-text-blue" ></i>Bootstrap</div>
          <div  <i class=" col-sm-8  col-md-6  col-xl-4 i devicon-mysql-plain   w3-text-blue"></i>MySQL Workbench</div>
          <div  <i class=" col-sm-8  col-md-6  col-xl-4  i fa fa-desktop  w3-text-blue" ></i>REGEX</div>
		  <div  <i class=" col-sm-8  col-md-6  col-xl-4  i fa fa-desktop  w3-text-blue" ></i>VMare Workstation</div>
		    <div  <i class=" col-sm-8  col-md-6  col-xl-4  i fa fa-desktop  w3-text-blue" ></i>Xming</div>
		     <div  <i class=" col-sm-8  col-md-6  col-xl-4  i fa fa-desktop   w3-text-blue" ></i>PuTTY</div>
		     <div  <i class=" col-sm-8  col-md-6  col-xl-4  i fa fa-desktop  w3-text-blue" ></i>Eclipse</div>
         </div>
		</div>	
			
</div>

</div>

</div>




				
     
    

  

      <div style="background-color:gray;  padding-top:2rem">
   
	
      </div>

<div style= "padding-top:2rem">

     
        <h1 class="text-center" style = "margin-bottom:2rem" >Contact Me</h1>
         <div class="row ">
         <div class=" col-lg-12">
         <p class=" text-center ">Want to reach me? Fill out this Form!</p>
 
           </div>
				</div>
       <div class="row" id ="form">
      <div class ="offset-md-3 col-md-6">
      <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'#form';?>" class="w3-container w3-card-4 w3-light-gray w3-text-blue w3-margin">

 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user" style="padding-left:5px"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" placeholder="Name"> <span class=" w3-text-amber"><?php echo $nameErr;?>
		</span> 
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"  style="padding-left:5px"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sender" type="text" placeholder="Email"> <span class=" w3-text-amber"><?php echo $sendErr;?>
		</span> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"  style="padding-left:5px"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="subject" type="text" placeholder="Subject">  <span class=" w3-text-amber"><?php echo $subErr;?>
		</span> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"  style="padding-left:5px"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="body" type="text" placeholder="Message"> <span class=" w3-text-amber"><?php echo $bodyErr;?>
		</span>
    </div>
</div>

<button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Send</button>

</form>


	
	<?php
$recipient = 'mwinton@mit.edu';


	
	if(filter_var($recipient, FILTER_VALIDATE_EMAIL) and filter_var($sender, FILTER_VALIDATE_EMAIL)){


$headers = "From: $name";



$headers = "From: $name $sender" . PHP_EOL .
"Reply-To: $name $sender" . PHP_EOL .
'X-Mailer: PHP/' . phpversion();

$header = "$name $sender\r\n";
 

// Send email

if (mail($recipient, $subject, $body, $header,"-f $recipient")){
} else {

}




}



?>
	
	</div>
	
      </div>

</div>
  <div style="background-color:gray;  padding-top:2rem">
   
	
      </div>
      <!-- /END THE FEATURETTES -->
      


      <!-- FOOTER -->
<footer class="w3-container w3-center w3-margin-top w3-text-blue" style="background-color: white; padding-top:4rem" >
  <p>More about me!</p>
   <a href="https://www.facebook.com/mwinton97?ref=bookmarks" style="text-decoration: none"> <i class="fa fa-facebook-official w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.instagram.com/martin5156/" style="text-decoration: none"> <i class="fa fa-instagram w3-hover-opacity w3-xxlarge"></i></a>
   <a href="https://www.linkedin.com/in/martin-winton-0a8b42127" style="text-decoration: none"><i class="fa fa-linkedin w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.github.com/MartinWinton" style="text-decoration: none"><i class="fa fa-github w3-hover-opacity w3-xxlarge""></i></a>
</footer>

 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	// navigation click actions	
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});
});

function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}

 </script>   
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
