

<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shreyas Infotech</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>


<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
	<div id="main-header" class="object">
		<div class="logo"><p style="font-size:20px;color:white;margin-top: 3px;">Shreyas Infotech Private Ltd </p></div>
        <div id="main_tip_search"> 
			<form>
				<input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
			</form>
		</div>
        <div id="stripes"></div>
    </div>
</div>

<?php

	
	

    $urlSources=file_get_contents("https://newsapi.org/v2/top-headlines?sources=axios&apiKey=8fb2f4554a324a99a1092159c40b9b71");
	
	$urlSourcesArray= json_decode($urlSources, true);
	//echo var_dump($urlSourcesArray);die;
	$sources =$urlSourcesArray['articles'];
	//echo count($sources);die;
	?>
	<div id="wrapper-container">
    
		<div class="container object">

			<div id="main-container-image">
			<?php
	
	for($i=0;$i< count($sources);$i++)
	{
		
		$sites =$urlSourcesArray['articles'][$i];
		//echo $sites['title'];
	
		$author= $sites['author'];
	    $heading= $sites['title'];					
		$image =$sites['urlToImage']	;				
								
							
         ?>                   
                        
		
                       
					<section class="work">
                        
						<figure class="white">
							<a id="myBtn_<?php echo $i;?>">
                          
								<img width="254px" height="142" src="<?php echo $sites['urlToImage'];  ?>">
								<dl onclick="popInOut('myBtn_<?php echo $i;?>','myModal_<?php echo $i;?>','close_<?php echo $i;?>');">
									<dt><?php echo $author;?></dt>
									<dd><?php echo $heading;?></dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"></div>
                            	<div id="part-info"></div>
							</div>
                        </figure>	

						
							
                        
					</section>
             
	<div id="myModal_<?php echo $i;?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close_<?php echo $i;?>"></span>
	<h2><?php echo $sites['title'];  ?></h2>
    <img width="250" height="250" src="<?php echo $sites['urlToImage'];  ?>">
	<p style="float:right;font-size:25px"><?php echo"Description :" .$sites['description'];  ?></p>
	<p style="font-size:20px;"><?php echo "Author :" .$sites['author'];  ?></p>
	<br><br>
	<p style="font-size:10px;"><?php echo "Published At: ". $sites['publishedAt'];  ?></p>
  </div>

</div>


<?php
	 }
 
 ?>
	
<script>

function popInOut(btn,model,close){
	
// Get the modal
//var modal = document.getElementById('myModal');
var modal = document.getElementById(model);
// Get the button that opens the modal
//var btn = document.getElementById("myBtn");
var btn = document.getElementById(btn);
// Get the <span> element that closes the modal
var span = document.getElementsByClassName(close);

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
     modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}	
	
}		
		 

	 
   
</script>


    
				</div>	
            	    
			</div>

  


<!-- PORTFOLIO -->

         
      
            
	
	    
	<div id="main-container-footer">
		<div class="container-footer">
        	
            <div id="row-1f">
            	<div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">What is Shreyas.Infotech.pvt.ltd</span><br>It is Web based and Android based company having lacs of clients from India as well as out of India.</div>
            </div>
            
            <div id="row-2f">
            	<div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">How does it work</span><br>It works incredibly and make client satisfaction.</div>
            </div>
            
            <div id="row-3f">
            	<div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Get in touch!</span><br> 91-9370696303 |712-3956251</div>
            </div>
            
            
            
		</div>
	</div>
    
    
    <div id="wrapper-copyright">
		<div class="copyright">
    		<div class="copy-text object">Copyright © 2017 <a style="color:#D0D1D4;" href="">Rutuja</a></div>
    		
			<div class="wrapper-navbouton">
    			<div class="google object">g</div>
    			<div class="facebook object">f</div>
    			<div class="linkin object">i</div>
    			<div class="dribbble object">d</div>
    		</div>
    	</div>
    </div>

</div>



<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/fastclick.min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>    
	<script type="text/javascript" src="js/main.js"></script>
	<script>
	




/* PRELOADER */


function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>

</body>


</html>
