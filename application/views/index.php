<?php
include('language.php');
// Start a session to store the selected language
// session_start();

// // Function to toggle between languages
// function toggleLanguage() {

//     // Check if the session variable 'language' is set
//     if(isset($_SESSION['language'])) {
//         // If 'language' is 'ar', set it to 'en'; otherwise, set it to 'ar'
//         $_SESSION['language'] = ($_SESSION['language'] == 'ar') ? 'en' : 'ar';
//     } else {
//         // If 'language' is not set, set it to 'en'
//         $_SESSION['language'] = 'en';
//     }
//     echo $_SESSION['language'];
// }


$en_select='';
$ar_select='';
$language='';
$dir='';

if((isset($_GET['language']) && $_GET['language']=='en') || !isset($_GET['language'])){
	$en_select='selected';
	$language='en';
	$dir='ltr';
}else{
	$ar_select='selected';
	$language='ar';
	$dir='rtl';
}
// <?php echo $en_select 
?>

<!DOCTYPE html>
<html lang="en" >
<!-- Head -->
<head>
<title>Leap Visa</title>
<meta http-equiv="Cache-Control" content="max-age=3600, public">
<meta http-equiv="Expires" content="Thu, 31 Dec 2099 23:59:59 GMT">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Travel Adventure a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link href="<?php echo base_url('/assets/css/JiSlider.css'); ?>" rel="stylesheet"> <!-- banner js-->

<link rel="stylesheet" href="<?php echo base_url('/assets/css/flexslider.css'); ?>" type="text/css" media="screen" /> <!-- Testimonials js-->

<link href='<?php echo base_url('/assets/css/simplelightbox.min.css'); ?>' rel='stylesheet' type='text/css'> <!-- lightbox css --> <!-- gallery js -->
<link rel="icon" href="<?php echo base_url('/assets/images/logo.png'); ?>" />
<!-- default css files -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css'); ?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css'); ?>" />
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->


<!-- Translator -->

	<!-- jQuery Is Required -->

<!-- Bootstrap -->

<!-- Bootstrap Select -->

<!-- Flag Icon -->



<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

<!-- End-->

</head>

<!-- Body -->
<body>
<?php
$logo = "assets/images/logo.png";
?>
<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="container">
		<div class="agileits_w3layouts_banner_nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img class="logo_main" src="<?php echo $logo; ?>" alt="Logo"></span></a>
					<div class="travel-with-us-con">
						<a href="#gallery" class="menu__link" >Explore</a>
						<!-- <button type="button" ontap="#gallery" class="travel-with-us">Travel With Us</button> -->
					</div>
				</div>
				

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu--iris">
						<ul class="nav navbar-nav menu__list">
							
							<li class="scroll menu__item"><a href="index.html" class="menu__link"><?php echo $top_nav[$language]['0'] ?></a></li>
							<li class="scroll menu__item"><a href="#about" class="scroll menu__link"><?php echo $top_nav[$language]['1'] ?></a></li>
							<li class="scroll menu__item"><a href="#team" class="scroll menu__link"><?php echo $top_nav[$language]['2'] ?></a></li>
							<li class="scroll menu__item"><a href="#gallery" class="scroll menu__link"><?php echo $top_nav[$language]['3'] ?></a></li>
							<li class="scroll menu__item"><a href="#testimonials" class="scroll menu__link"><?php echo $top_nav[$language]['4'] ?></a></li>
							<li class="scroll menu__item"><a href="#contact" class="scroll menu__link"><?php echo $top_nav[$language]['5'] ?></a></li>
						
						</ul>
						<div class="w3_agileits_social">
							<div class="social-icon">
								<a href="https://www.facebook.com/profile.php?id=61555287373980" target="_blank" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
								<a href="https://www.snapchat.com/add/leapvisa?share_id=rpCUc_9SXX8&locale=en-IN" target="_blank" class="social-button snapchat"><i class="fa fa-snapchat"></i></a> 
								<a href="https://twitter.com/LP_Visa_Riyadh" target="_blank" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
								<select onchange="set_language()" name="language" id="language" class="lang_drop">
									<option value="en" <?php echo $en_select ?>><i class="fa fa-twitter"></i>EN</option>
									<option value="ar" <?php echo $ar_select ?>><i class="fa fa-glob"></i> AR</option>
								</select> 
								
							</div>
						</div>
						
						<div>	



					</nav>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">
						<div class="container">
								<div class="agileits-banner-info">
									<h3><?php echo $banner_txt[$language][0] ?></h3>
									<h3><?php echo $banner_txt[$language][1] ?></h3>
								</div>	
						</div>
					</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info">
									<h3><?php echo $banner_txt[$language][2] ?></h3>
									<h3><?php echo $banner_txt[$language][3] ?></h3>
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h3><?php echo $banner_txt[$language][4] ?></h3>
									<h3><?php echo $banner_txt[$language][5] ?></h3>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top3">
							<div class="container">
								<div class="agileits-banner-info">
									<h3><?php echo $banner_txt[$language][6] ?></h3>
									<h3><?php echo $banner_txt[$language][7] ?></h3>
								</div>	
								
							</div>
						</div>
					</li>

					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top4">
							<div class="container">
								<div class="agileits-banner-info">
									<h3><?php echo $banner_txt[$language][8] ?></h3>
								</div>	
							</div>
						</div>
					</li>
					

			</ul>
		</div>
      </div>
<!-- //banner -->

<!-- about -->
<div class="about" id="about">
	<div class="container">

	<div class="abouthead">
                            <h5><?php echo $about_us[$language][0]?></h5>
                            <h2 class="heading"><?php echo $about_us[$language][1]?></h2>
                            <p><?php echo $about_us[$language][2]?></p>
                        </div>
						<div class="col-md-6 aboutleft">
                            <h4><?php echo $our_trip[$language][0]?></h4>
                            <p><?php echo $our_trip[$language][1]?></p>
                        </div>
		<div class="col-md-6 aboutright">
			 <h3><?php echo $why_choose_us[$language][0]?></h3>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									<?php echo $why_choose_us[$language][1]?>
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
								<div class="panel-body panel_text">
									<?php echo $why_choose_us[$language][2]?>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<?php echo $why_choose_us[$language][3]?>
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
								<div class="panel-body panel_text">
								<?php echo $why_choose_us[$language][4]?>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<?php echo $why_choose_us[$language][5]?>
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
								<div class="panel-body panel_text">
								<?php echo $why_choose_us[$language][6]?>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<?php echo $why_choose_us[$language][7]?>
								</a>
							  </h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
								<div class="panel-body panel_text">
								<?php echo $why_choose_us[$language][8]?>
								</div>
							</div>
						</div>
					</div>
		
		</div>
		<div class="clearfix"></div>
<!--count-->
	</div>
</div>
<!-- //about -->

<!-- video starts here -->
<div data-vide-bg="<?php echo base_url('assets/video/Ipad');?>">
	<div class="center-container">
		<div class="video-info">
		<div class="container">	
			<h3 class="heading1"><?php echo $video_txt[$language][0]?></h3>
			
		</div>					
		</div>
	</div>
</div>
<!-- video ends here -->

<!-- team -->
	<div id="team" class="team">
		<div class="container">
			<h3 class="w3ls-title"><?php echo $our_services[$language][0]?></h3>  
			<div class="team-agile-row">
				<div class="col-md-6 team-grid">
					<div class="col-md-6 team-grid-right">
						<img src="<?php echo base_url('/assets/images/visa.jpg'); ?>" alt=" " class="img-responsive" />
					</div>
					<div class=" col-md-6 team-grid-left">
						<h4><?php echo $our_services[$language][1]?></h4>
						<p><?php echo $our_services[$language][2]?></p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-grid">
					<div class="col-md-6 team-grid-right agileinfo-welcm-grid">
						<img src="<?php echo base_url('/assets/images/embassy.png'); ?>" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-6 team-grid-left agileinfo-welcm-grid2">
						<h4><?php echo $our_services[$language][3]?></h4>
						<p><?php echo $our_services[$language][4]?></p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="team-agile-row2">
				<div class="col-md-6 team-grid">
					<div class="col-md-6 team-grid-right">
						<img src="<?php echo base_url('/assets/images/licence.jpg'); ?>" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-6 team-grid-left">
						<h4><?php echo $our_services[$language][5]?></h4>
						<p><?php echo $our_services[$language][6]?></p>
						
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-grid">
					<div class="col-md-6 team-grid-right agileinfo-welcm-grid">
						<img src="<?php echo base_url('/assets/images/health.jpg'); ?>" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-6 team-grid-left agileinfo-welcm-grid2">
						<h4><?php echo $our_services[$language][7]?></h4>
						<p><?php echo $our_services[$language][8]?></p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
	
<!-- gallery -->
<div class="gallery" id="gallery">  
    <div class="container"> 
        <h3 class="w3ls-title"><?php echo $countries[$language][0]?></h3>
        <div class="gallery-agileinfo">
        	<!-- UK -->
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="<?php echo base_url('/assets/images/visa_processing_soudi_nationals.png');?>" class="figure">
                        <img class="flag" src="<?php echo base_url('/assets/images/flags/UK_flag.jpg');?>" alt="" title="Documents required"/> 
                        <div class="overlay">
                            <span class="text"><?php echo $countries[$language][1]?></span>
                        </div>
                    </a> 
                </div> 
                <!-- USA -->
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="<?php echo base_url('/assets/images/visa_processing_soudi_nationals.png');?>" class="figure">
                        <img class="flag" src="<?php echo base_url('/assets/images/flags/usa_flag.jpg');?>" alt="" title="Documents required"/> 
                        <div class="overlay">
                            <span class="text"><?php echo $countries[$language][2]?></span>
                        </div>
                    </a> 
                </div> 
                <!-- Canada -->
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="<?php echo base_url('/assets/images/visa_processing_soudi_nationals.png');?>" class="figure">
                        <img class="flag" src="<?php echo base_url('/assets/images/flags/canada_flag.jpg');?>" alt="" title="Documents required"/> 
                        <div class="overlay">
                            <span class="text"><?php echo $countries[$language][3]?></span>
                        </div>
                    </a> 
                </div>
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>" class="figure">
                    <img class="flag" src="<?php echo base_url('/assets/images/flags/brazilian-flag.jpg');?>" alt="" title="Documents required"/> 
					<div class="overlay">
                        <span class="text"><?php echo $countries[$language][4]?></span>
                    </div>
                </a> 
            </div>
            <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="<?php echo base_url('/assets/images/visa_processing_soudi_nationals.png');?>" class="figure">
                        <img class="flag" src="<?php echo base_url('/assets/images/flags/mexico_flag.jpg');?>" alt="" title="Documents required"/> 
                        <div class="overlay">
                            <span class="text"><?php echo $countries[$language][5]?></span>
                        </div>
                    </a> 
                </div>
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>" class="figure">
                    <img class="flag" src="<?php echo base_url('/assets/images/flags/australia_flag.jpg');?>" alt="" title="Documents required"/> 
					<div class="overlay">
                        <span class="text"><?php echo $countries[$language][6]?></span>
                    </div>
                </a> 
            </div>
            <!-- peru -->
            <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>" class="figure">
                    <img class="flag" src="<?php echo base_url('/assets/images/flags/china_flag.jpg');?>" alt="" title="Documents required"/> 
					<div class="overlay">
                        <span class="text"><?php echo $countries[$language][7]?></span>
                    </div>
                </a> 
            </div> 
            <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <div class="figure">
                    <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>">
                        <img class="flag" src="<?php echo base_url('/assets/images/flags/indian_flag.jpg');?>" alt="" title="Documents required"/> 
                    </a>
                    <div class="overlay">
                        <span class="text"><?php echo $countries[$language][8]?></span>
                    </div>
                </div> 
            </div> 
            <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>" class="figure">
                    <img class="flag" src="<?php echo base_url('/assets/images/flags/european_union_flag.jpg');?>" alt="" title="Documents required"/> 
					<div class="overlay">
                        <span class="text"><?php echo $countries[$language][9]?></span>
                    </div>
                </a> 
            </div>

            
			 
			
			
			 <!-- Additional country sections (initially hidden) -->
            <div class="additional-countries" style="display: none;">
                <!-- Mexico -->
                
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>" class="figure">
                    <img class="flag" src="<?php echo base_url('/assets/images/flags/Russia_flag.jpg');?>" alt="" title="Documents required"/> 
					<div class="overlay">
                        <span class="text"><?php echo $countries[$language][10]?></span>
                    </div>
                </a> 
            </div>
            <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>" class="figure">
                    <img class="flag" src="<?php echo base_url('/assets/images/flags/japan_flag.jpg');?>" alt="" title="Documents required"/> 
					<div class="overlay">
                        <span class="text"><?php echo $countries[$language][11]?></span>
                    </div>
                </a> 
            </div>   
            <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>" class="figure">
                    <img class="flag" src="<?php echo base_url('/assets/images/flags/gueina_flag.jpg');?>" alt="" title="Documents required"/> 
					<div class="overlay">
                        <span class="text"><?php echo $countries[$language][12]?></span>
                    </div>
                </a> 
            </div> 
             
            
            
            <div class="col-sm-4 col-xs-6 w3gallery-grids">
                <a href="<?php echo base_url('/assets/images/visa_processing_non_soudi_nationals.png');?>" class="figure">
                    <img class="flag" src="<?php echo base_url('/assets/images/flags/flag-thailand.jpg');?>" alt="" title="Documents required"/> 
					<div class="overlay">
                        <span class="text"><?php echo $countries[$language][13]?></span>
                    </div>
                </a> 
            </div> 
                
                
            </div>

            <!-- View More button -->


            <!-- Clearfix -->
            <div class="clearfix"> </div>
			<div class="col-sm-12 text-center">
    <button id="view-more-btn" class="view-more-btn" onclick="toggleAdditionalCountries()">
        <span id="view-more-icon" class="fa fa-chevron-down"></span> <?php echo $countries[$language][14]?>
    </button>
</div>
        </div> 
    </div>
</div>
<!-- //gallery -->

<script>
    function toggleAdditionalCountries() {
        var additionalCountries = document.querySelector('.additional-countries');
        var viewMoreBtn = document.getElementById('view-more-btn');
		var viewMoreIcon = document.getElementById('view-more-icon');

        if (additionalCountries.style.display === 'none') {
            additionalCountries.style.display = 'block';
            viewMoreBtn.innerHTML = '<span id="view-more-icon" class="fa fa-chevron-up"></span> View Less';
        } else {
			viewMoreIcon.className = "fa fa-chevron-down";
            additionalCountries.style.display = 'none';
            viewMoreBtn.innerHTML = '<span id="view-more-icon" class="fa fa-chevron-down"></span> View More';
        }
    }
</script>



<!-- testimonials -->
<div class="testimonials" id="testimonials">
	<div class="container">
			<h3 class="w3ls-title"><?php echo $medical_service[$language][0]?></h3>  
			<p class="medical-para"><?php echo $medical_service[$language][1]?></p>
				<!-- <input class="medical_btn" id="medical_btn" type="button" value="Click Here"/> -->
	</div>
	<script>
    var btn = document.getElementById('medical_btn');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo base_url('index.php/Onlinecontroller/medical'); ?>';
    });
  </script>
  <br/>
  <div class="agile_inner_w3ls-grids">
	
	<div class="col-sm-6 w3-agile-post-grids">
		<div class="w3-agile-post-img w3-agile-post-img1">
			<a href="#" data-toggle="modal" data-target="#myModal"> 
			</a>
		</div>
		<div class="w3-agile-post-info">
			<h4><a href="#" data-toggle="modal" data-target="#myModal"><?php echo $medical_service[$language][2]?></a></h4>
			<p><?php echo $medical_service[$language][3]?>
			</p>
			<ul>
				<li><?php echo $learn_more[$language][0]?></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-6 w3-agile-post-grids">
		<div class="w3-agile-post-img w3-agile-post-img2">
			<a href="#" data-toggle="modal" data-target="#myModal1"> 
			</a>
		</div>
		<div class="w3-agile-post-info">
			<h4><a href="#" data-toggle="modal" data-target="#myModal1"><?php echo $medical_service[$language][4]?></a></h4>
			<p><?php echo $medical_service[$language][5]?></p>
			<ul>
				<li><?php echo $learn_more[$language][0]?></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"> </div>

			</div>

<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<h3 class="w3ls-title"><?php echo $join_adventure[$language][0]?></h3>
		</div>
		<div class="w3-agileits-newsletter">
			<div class="subscribe-grid">
				<form action="#" method="post">
					<input type="text" placeholder="<?php echo $join_adventure[$language][1]?>" name="Subscribe" required="">
					<button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
	</div>
<!-- //newsletter -->

<!-- contact -->
<div class="contact" id="contact">
		<div class="container">
			<h3 class="w3ls-title"><?php echo $get_in_touch[$language][0]?></h3>
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="w3layouts-contact-form-top">
						<h3><?php echo $get_in_touch[$language][1]?></h3>
						<p><?php echo $get_in_touch[$language][2]?><br><?php echo $get_in_touch[$language][3]?><br><?php echo $get_in_touch[$language][4]?></p>
						<p><b>Email: </b>info@leaptravelagency.com</p>
						<p><b>Phone: </b>+966 0550588558</p>
					</div>
					<div class="agileits-contact-address">
						<h3><?php echo $get_in_touch[$language][5]?></h3>
						<div class="social">
							<ul>
								<li><a href="https://www.facebook.com/profile.php?id=61555287373980" target="_blank" class="fa fa-facebook"> </a></li>
								<li><a href="https://www.snapchat.com/add/leapvisa?share_id=rpCUc_9SXX8&locale=en-IN" target="_blank" style="color:yellow;background-color:#084A94" class="fa fa-snapchat" > </a></li>
								<li><a href="https://twitter.com/LP_Visa_Riyadh" target="_blank" class="fa fa-twitter" > </a></li>
								<!-- <li><a href="#" class="fa fa-linkedin"> </a></li>  -->
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3><?php echo $get_in_touch[$language][6]?></h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<!-- <form> -->
							<input type="text" name="Name" id="name" placeholder="Name" required="">
							<input type="text" name="Subject" id="subject" placeholder="Subject" required="">
							<input type="email" name="Email" id="email" placeholder="Email" required="">
							<textarea name="Message" placeholder="Message" id="message" required=""></textarea>
							<input type="button" id="send_mail" onclick="sendEmail()" class="btn1" value='<?php echo $get_in_touch[$language][7]?>'>
							<span id="mail_msg"></span>
							<!-- <button class="btn1" >Submit</button> -->
						<!-- </form> -->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- contact -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="http://Wa.me/+966550588558?text=Hi" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<!-- map -->
<div class="w3agile-map">
<iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=%D9%83%D8%A7%D9%84%D8%A9%20%D8%AE%D8%B7%D9%88%D8%A7%D8%AA%20%D8%A7%D9%84%D8%AA%D8%A3%D8%B4%D9%8A%D8%B1%D8%A9%20%D9%84%D9%84%D8%B3%D9%81%D8%B1%20%D9%88%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%AD%D8%A9%20/%20+(Leap%20Visa%20Travels)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe>
</div>
<!-- //map -->
			
<!-- copyright -->
<div class="footer-w3layouts">
	<div class="container">
		<div class="agile-copy">
			<p>© <?php echo $footer[$language][0]?></p>
		</div>
		<div class="agileits-social">
			<ul>
				<li><a href="#home" class="scroll"><?php echo $footer[$language][1]?></a></li>
				<li><a href="#about" class="scroll"><?php echo $footer[$language][2]?></a></li>
				<li><a href="#team" class="scroll"><?php echo $footer[$language][3]?></a></li>
				<li><a href="#gallery" class="scroll"><?php echo $footer[$language][4]?></a></li>
				<li><a href="#testimonials" class="scroll"><?php echo $footer[$language][5]?></a></li>
				<li><a href="#contact" class="scroll"><?php echo $footer[$language][6]?></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- copyright -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<h5><?php echo $medical_popup[$language][0]?></h5>
						<!-- <img src="<?php echo base_url('assets/images/medical.png');?>" alt=" " class="img-responsive" /> -->
						<ul>
							<li><?php echo $medical_popup[$language][1]?></li>
							<li><?php echo $medical_popup[$language][2]?></li>
							<li><?php echo $medical_popup[$language][3]?></li>
							<li><?php echo $medical_popup[$language][4]?></li>
							<li><?php echo $medical_popup[$language][5]?></li>
							<li><?php echo $medical_popup[$language][6]?></li>
						</ul>
						<h3><?php echo $medical_popup[$language][7]?></h3>
						<br/>
						<ol>
							<li><i><?php echo $medical_popup[$language][8]?></i></li>
							<li><i><?php echo $medical_popup[$language][9]?></i></li>
							<li><i><?php echo $medical_popup[$language][10]?></i></li>
							<li><i><?php echo $medical_popup[$language][11]?></i></li>
							<li><i><?php echo $medical_popup[$language][12]?></i></li>
							<li><i><?php echo $medical_popup[$language][13]?></i></li>
							<li><i><?php echo $medical_popup[$language][14]?></i></li>
							<li><i><?php echo $medical_popup[$language][15]?></i></li>
							<li><i><?php echo $medical_popup[$language][16]?></i></li>
							<li><i><?php echo $medical_popup[$language][17]?></i></li>
							<li><i><?php echo $medical_popup[$language][18]?></i></li>
						</ol>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<h5><?php echo $air_ambulance[$language][0]?></h5>
						<!-- <img src="<?php echo base_url('assets/images/medical.png');?>" alt=" " class="img-responsive" /> -->
						<ul>
							<li><?php echo $air_ambulance[$language][1]?></li>
							<li><?php echo $air_ambulance[$language][2]?></li>
							<li><?php echo $air_ambulance[$language][3]?></li>
							<li><?php echo $air_ambulance[$language][4]?></li>
							<li><?php echo $air_ambulance[$language][5]?></li>
							<li><?php echo $air_ambulance[$language][6]?></li>
						</ul>
						<h3><?php echo $air_ambulance[$language][7]?></h3>
						<br/>
						<ol>
							<li><i><?php echo $air_ambulance[$language][8]?></i></li>
							<li><i><?php echo $air_ambulance[$language][9]?></i></li>
							<li><i><?php echo $air_ambulance[$language][10]?></i></li>
							<li><i><?php echo $air_ambulance[$language][11]?></i></li>
							<li><i><?php echo $air_ambulance[$language][12]?></i></li>
							<li><i><?php echo $air_ambulance[$language][13]?></i></li>
							<li><i><?php echo $air_ambulance[$language][14]?></i></li>
							<li><i><?php echo $air_ambulance[$language][15]?></i></li>
							<li><i><?php echo $air_ambulance[$language][16]?></i></li>
							<li><i><?php echo $air_ambulance[$language][17]?></i></li>
							<li><i><?php echo $air_ambulance[$language][18]?></i></li>
						</ol>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->



<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-2.1.4.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.js'); ?>"></script>

<!-- //Default-JavaScript-File -->

<!-- gallery plugin -->
	<script type="text/javascript" src="<?php echo base_url('/assets/js/simple-lightbox.min.js');?>"></script>
	<script>
		$(function(){
			var gallery = $('.w3gallery-grids a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
			$('.sl-navigation').remove();
		});
	</script>  
<!-- //gallery plugin -->

<!-- ji slider --><!-- banner js script -->
<script src="<?php echo base_url('/assets/js/JiSlider.js');?>"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- //ji slider --><!-- //banner js script -->
			
<!-- for-Testimonials -->
	<script defer src="<?php echo base_url('assets/js/jquery.flexslider.js');?>"></script>
	<!--Start-slider-script-->
			<script type="text/javascript">
			
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		  </script>
	<!--End-slider-script-->
<!-- //for-Testimonials -->

<script type="text/javascript" src="<?php echo base_url('assets/js/numscroller-1.0.js');?>"></script><!-- numscroller js file -->

<!-- smooth scrolling -->
	<script src="<?php echo base_url('/assets/js/SmoothScroll.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/move-top.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/easing.js');?>"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<script src="<?php echo base_url('/assets/js/jquery.vide.min.js');?>"></script><!-- video js file -->
	
<!--EmailJS integration-->
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<!-- <script type="text/javascript">
   
</script> -->

<script>
		function sendEmail(){

			(function(){
      emailjs.init({
        publicKey: "rieczvI2H6vRtIXWQ",
      });
   })();

			console.log("Inside Function....")
			if(document.getElementById("name").value=='' || document.getElementById("email").value=='' || document.getElementById("message").value == ''
			|| document.getElementById("subject").value == ''){
				document.getElementById("mail_msg").innerHTML='<h5 style="color:#FF3333">Please Fill all the Details</h5>';
				return false;
			}
			
			var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

			if (!(document.getElementById("email").value.match(validRegex))) {
				document.getElementById("mail_msg").innerHTML='<h5 style="color:#FF3333">Invalid Email Address!</h5>';
				return false;
			}

			

			document.getElementById("send_mail").value="Sending...";

			var params={
				from_name : document.getElementById("name").value,
				email_id : document.getElementById("email").value,
				message : document.getElementById("message").value,
				subject : document.getElementById("subject").value
			};
			console.log(params);
			emailjs.send("service_ab7rpak","template_zmsgx1k",params).then((res)=>{
				// alert("Success! " +res.status);
				document.getElementById("mail_msg").innerHTML='<h5 style="color:#4BB543">Mail Send Successfully!</h5>';
				document.getElementById("send_mail").value="Submit";
				document.getElementById("name").value='';
				document.getElementById("email").value='';
				document.getElementById("message").value='';
				document.getElementById("subject").value='';
			},(err)=>{
				console.log(err);
				document.getElementById("mail_msg").innerHTML='<h5 style="color:#FF3333">Something Went Wrong, Please Try Again!</h5>';
				document.getElementById("send_mail").value="Submit";
			});
		}
	</script>

<!--EmailJS End-->



<script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }

function translateLanguage(lang) {
  googleTranslateElementInit();
  var $frame = $('.goog-te-menu-frame:first');
  if (!$frame.size()) {
    alert("Error: Could not find Google translate frame.");
    return false;
  }
  $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
  return false;
}

$(function(){
  $('.selectpicker').selectpicker();
});
	</script>
	
	<script>
		function set_language(){
			var language=jQuery('#language').val();
			window.location.href='http://localhost/leap_web/?language='+language;
		}
	</script>
</body>
<!-- //Body -->
</html>