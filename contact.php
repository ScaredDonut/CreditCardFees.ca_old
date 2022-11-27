<?php
	include("inc/functions.php");
	$successMessage = "";
	if(isset($_POST['SubmitButton'])){ //check if form was submitte
	$getName = $_POST['fullName'];
	$getemailAddress = $_POST['emailAddress'];
	$getcontactReason = $_POST['contactReason'];
	$successMessage = "<div class='fw-bolder'>Form submission successful!</div>";
			submitContactForm($getName,$getemailAddress,$getcontactReason);
	}  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="title" content="Credit Card Surcharge Fees">
		<meta name="description" content="CreditCardFees is a public database with a free API to list all businesses in Canada that charge/will charge a fee for using a credit card in Canada">
		<meta name="keywords" content="credit card fees, credit card, Surcharge fee, Surcharge canada, card fees, Surcharge fees, Surcharge fee databae, Surcharge fee databae canada, credit card fees canada, card fees canada, credit fee canada, canada Surcharge, credit card fee database, Surcharge api, credit card api, credit card fee api">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">
        <title>Canada Credit Card Surcharge Fees</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css" />
		<link href="https://cdn.datatables.net/searchpanes/2.0.2/css/searchPanes.dataTables.min.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
<?php include_once "inc/headernav.php"; ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Contact Me</h1>
                            <span class="subheading">Have questions? I have answers.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                        <div class="my-5">
                            <form action="#" method="post" id="contactForm">
                                <div class="form-floating">
                                    <input class="form-control" name="fullName" type="text" placeholder="Enter your name..." required />
                                    <label for="fullName">Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="fullName:required">A name is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="emailAddress" type="email" placeholder="Enter your email..." required />
                                    <label for="emailAddress">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:emailAddress">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="contactReason" placeholder="Enter your message here..." style="height: 12rem" required></textarea>
                                    <label for="contactReason">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="contactReason:required">A message is required.</div>
                                </div>
                                <br />

								<?php echo $successMessage; ?>

                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <!--<input class="btn btn-primary text-uppercase g-recaptcha" data-sitekey="6LdIeIQiAAAAADxSX5LaBIn0entZ4j9H4iv0AfrH" data-callback='onSubmit'  type="submit" name="SubmitButton"/>-->
								<input type="submit" data-sitekey="6LdIeIQiAAAAADxSX5LaBIn0entZ4j9H4iv0AfrH" data-callback='onSubmit'  type="submit" name="SubmitButton"/>
								
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
		<!-- CAPTCHA -->
		 <script src="https://www.google.com/recaptcha/api.js"></script>
	 <script>
	   function onSubmit(token) {
		 document.getElementById("contactForm").submit();
	   }
	 </script>		 
    </body>
</html>
