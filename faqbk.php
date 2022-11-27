<?php include_once "inc/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="title" content="Credit Card Surcharge Fees - F.A.Q">
		<meta name="description" content="CreditCardFees is a public database with a free API to list all businesses in Canada that charge/will charge a fee for using a credit card in Canada">
		<meta name="keywords" content="credit card fees, credit card, Surchargee fee, Surchargee canada, card fees, Surchargee fees, Surchargee fee databae, Surchargee fee databae canada, credit card fees canada, card fees canada, credit fee canada, canada Surchargee, credit card fee database, Surchargee api, credit card api, credit card fee api">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">
        <title>Canada Credit Card Surcharge Fees - F.A.Q.</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/faq.css" rel="stylesheet" />
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

		
    </head>
	
    <body>
<?php include_once "inc/headernav.php"; ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/faq.png')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>FAQ</h1>
                            <span class="subheading">This page is desgined to answer any questions that you might have regarding the surcharge fees and/or the website in general.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
			
			<?php 

				//Fee Related CURL
			$FeesFAQCurl = curl_init(); //Initializes curl
			curl_setopt($FeesFAQCurl, CURLOPT_URL, 'https://admin.creditcardfees.ca/api/faqs?filters[FAQType][$eq]=fees');
			curl_setopt($FeesFAQCurl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($FeesFAQCurl, CURLOPT_HTTPHEADER, [
				'Content-Type: application/json'
			]); // Sets header information for authenticated requests

			$getFeesFAQ = curl_exec($FeesFAQCurl);
			curl_close($FeesFAQCurl);
			
			$decodeFeesFAQ = json_decode($getFeesFAQ, true);


			//Website Related curl_close
			$WebsiteFAQCurl = curl_init(); //Initializes curl
			curl_setopt($WebsiteFAQCurl, CURLOPT_URL, 'https://admin.creditcardfees.ca/api/faqs?filters[FAQType][$eq]=website');
			curl_setopt($WebsiteFAQCurl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($WebsiteFAQCurl, CURLOPT_HTTPHEADER, [
				'Content-Type: application/json'
			]); // Sets header information for authenticated requests

			$getWebsiteFAQRes = curl_exec($WebsiteFAQCurl);
			curl_close($WebsiteFAQCurl);
			
			$getWebsiteFAQ = json_decode($getWebsiteFAQRes, true);
			
			$colorOptions = ["primary", "success", "danger", "warning", "info"];
			
			?>
			
			
			
				<div class="container" id="page_container">
				<h4><p class="text-center">Surcharge Related Questions</h4></p>
					<div id="accordion_search_bar_container">
						<input type="search" id="accordion_search_bar" placeholder="Surcharge Related Questions Search" />
					</div>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					
					<?php foreach($decodeFeesFAQ['data'] as $getFeeFAQPlain) { ?>
					
						<div class="panel panel-<?php echo $colorOptions[array_rand($colorOptions)]; ?>" id="collapse<?php echo $getFeeFAQPlain['id']; ?>_container">
							<div class="panel-heading" role="tab" id="heading<?php echo $getFeeFAQPlain['id']; ?>">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $getFeeFAQPlain['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $getFeeFAQPlain['id']; ?>">
										<?php echo $getFeeFAQPlain['attributes']['FAQTitle']; ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php echo $getFeeFAQPlain['id']; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $getFeeFAQPlain['id']; ?>">
								<div class="panel-body">
										<?php echo $getFeeFAQPlain['attributes']['FAQText']; ?>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<!-- End of Credit Card Fee FAQs -->
				<div class="container" id="page_container">
				<h4><p class="text-center">Website Related Questions</h4></p>
					<div id="accordion_search_bar_container">
						<input type="search" id="accordion_search_bar" placeholder="Website Related Questions Search" />
					</div>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					
					<?php foreach($getWebsiteFAQ['data'] as $getWebsiteFAQPlain) { ?>
					
						<div class="panel panel-<?php echo $colorOptions[array_rand($colorOptions)]; ?>" id="collapse<?php echo $getWebsiteFAQPlain['id']; ?>_container">
							<div class="panel-heading" role="tab" id="heading<?php echo $getWebsiteFAQPlain['id']; ?>">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $getWebsiteFAQPlain['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $getWebsiteFAQPlain['id']; ?>">
										<?php echo $getWebsiteFAQPlain['attributes']['FAQTitle']; ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php echo $getWebsiteFAQPlain['id']; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $getWebsiteFAQPlain['id']; ?>">
								<div class="panel-body">
										<?php echo $getWebsiteFAQPlain['attributes']['FAQText']; ?>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>		
				<!-- End of Website FAQs -->
				
				
            </div>
        </div>
		 
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                </div>
            </div>
        </footer>
  
    <!--jQuery library file -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
        <!-- Core theme JS-->
	<script src="js/scripts.js"></script>
		<script>
			(function () {
				var searchTerm, panelContainerId;
				// Create a new contains that is case insensitive
				$.expr[":"].containsCaseInsensitive = function (n, i, m) {
					return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
				};
				$("#accordion_search_bar").on("change keyup paste click", function () {
					searchTerm = $(this).val();
					$("#accordion > .panel").each(function () {
						panelContainerId = "#" + $(this).attr("id");
						$(panelContainerId + ":not(:containsCaseInsensitive(" + searchTerm + "))").hide();
						$(panelContainerId + ":containsCaseInsensitive(" + searchTerm + ")").show();
					});
				});
			})();
		</script>
	</body>
</html>
