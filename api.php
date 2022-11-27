<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="title" content="Credit Card Surcharge Fees - API">
		<meta name="description" content="CreditCardFees is a public database with a free API to list all businesses in Canada that charge/will charge a fee for using a credit card in Canada">
		<meta name="keywords" content="credit card fees, credit card, surcharge fee, surcharge canada, card fees, surcharge fees, surcharge fee databae, surcharge fee databae canada, credit card fees canada, card fees canada, credit fee canada, canada surcharge, credit card fee database, surcharge api, credit card api, credit card fee api">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">

        <title>Canada Credit Card Surcharge Fees - API</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
	
    <body>
<?php include_once "inc/headernav.php"; ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/grey-hat-hacking.webp')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>API</h1>
                            <span class="subheading">API access to our data.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
		<p>
				This page is desgined to assist you in accessing the API to CreditCardFees.ca.
				<br /> Make sure to use <code>businesses?populate=additionalInformation,businessAddress,categories</code> at the end of each API GET request to get the base dataset.
				<br /><br /><b>Swagger URL:</b> <a href ="https://admin.creditcardfees.ca/documentation/v1.0.0#/">https://admin.creditcardfees.ca/documentation/v1.0.0#/</a>
					  <br /><b>API URL:</b> https://admin.creditcardfees.ca/api
				<br /><br /> Please make sure to respect the API and try to minimize your calls by using populate and field when needed.
				<br /><br /> You can also populate specific requests like just hours with <code>?populate=openingHours</code>. We also have media that you can access with <code>?populate=logo</code> and <code>?populate=media</code>.
				<br /><br /> Media is for pictures of receipts and other general media of the specific store/restaurant and logo is the logo.
				<br /><br /> You can also use <code>?fields=name</code> just to get a specific field, you can also populate the field ex; <code>fields=name&populate=logo</code>
				<br /><br />No auth for GET requests. There is auth for POST/PUT/DELETE requests, however. If you'd like to have access to those you'll need to auth yourself via the API. Further info below.
				<br /><br /> All available endpoints: <code>populate</code>, <code>fields</code>, <code>sort</code> (desc, abc, createdAt, etc), <code>filter</code> (?filter=[fieldName][operator])
				</p>
				<h3>Registration</h3>
				<p>
				You'll want to send an API Post request to <code>api/auth/local/register</code> (currently only local auth is allowed). Google auth will be integrated asap.<br />
				You'll need to send the following body:
				<code><br />
				{<br />
				  "username": "Your username",<br />
				  "email": "youremail@newemail.com",<br />
				  "password": "Test1234"<br />
				}<br />
				</code>
				Make sure to save your JWT auth to have the ability to send POST/PUT requests. Please note that the JWT expires so you'll want to use <code>api/auth/local</code> to login.<br />
				Feel free to integrate this into your application so your users can use the app to post/update businesses.
				<h3>Available Operators:</h3>
				<table class="table table-dark">
   <thead>
      <tr>
         <th>Operator</th>
         <th>Description</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td><code>$eq</code></td>
         <td>Equal</td>
      </tr>
      <tr>
         <td><code>$eqi</code></td>
         <td>Equal (case-insensitive)</td>
      </tr>
      <tr>
         <td><code>$ne</code></td>
         <td>Not equal</td>
      </tr>
      <tr>
         <td><code>$lt</code></td>
         <td>Less than</td>
      </tr>
      <tr>
         <td><code>$lte</code></td>
         <td>Less than or equal to</td>
      </tr>
      <tr>
         <td><code>$gt</code></td>
         <td>Greater than</td>
      </tr>
      <tr>
         <td><code>$gte</code></td>
         <td>Greater than or equal to</td>
      </tr>
      <tr>
         <td><code>$in</code></td>
         <td>Included in an array</td>
      </tr>
      <tr>
         <td><code>$notIn</code></td>
         <td>Not included in an array</td>
      </tr>
      <tr>
         <td><code>$contains</code></td>
         <td>Contains</td>
      </tr>
      <tr>
         <td><code>$notContains</code></td>
         <td>Does not contain</td>
      </tr>
      <tr>
         <td><code>$containsi</code></td>
         <td>Contains (case-insensitive)</td>
      </tr>
      <tr>
         <td><code>$notContainsi</code></td>
         <td>Does not contain (case-insensitive)</td>
      </tr>
      <tr>
         <td><code>$null</code></td>
         <td>Is null</td>
      </tr>
      <tr>
         <td><code>$notNull</code></td>
         <td>Is not null</td>
      </tr>
      <tr>
         <td><code>$between</code></td>
         <td>Is between</td>
      </tr>
      <tr>
         <td><code>$startsWith</code></td>
         <td>Starts with</td>
      </tr>
      <tr>
         <td><code>$endsWith</code></td>
         <td>Ends with</td>
      </tr>
      <tr>
         <td><code>$or</code></td>
         <td>Joins the filters in an "or" expression</td>
      </tr>
      <tr>
         <td><code>$and</code></td>
         <td>Joins the filters in an "and" expression</td>
      </tr>
   </tbody>
</table>
<p>You can find more info regarding filters and locales <a href="https://docs.strapi.io/developer-docs/latest/developer-resources/database-apis-reference/rest/filtering-locale-publication.html#filtering">HERE</a></p>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>	
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>	
    </body>
</html>
