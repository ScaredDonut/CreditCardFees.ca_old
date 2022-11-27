<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="title" content="Credit Card Surchargee Fees">
		<meta name="description" content="CreditCardFees is a public database with a free API to list all businesses in Canada that charge/will charge a fee for using a credit card in Canada">
		<meta name="keywords" content="credit card fees, credit card, Surchargee fee, Surchargee canada, card fees, Surchargee fees, Surchargee fee databae, Surchargee fee databae canada, credit card fees canada, card fees canada, credit fee canada, canada Surchargee, credit card fee database, Surchargee api, credit card api, credit card fee api">
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

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" /		
    </head>
	
    <body>
<?php include_once "inc/headernav.php"; ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/grey-hat-hacking.webp')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Submit a Biz</h1>
                            <span class="subheading">Know a business that charges the new Surchargee fee? List them on the website! :).</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
		<p>
<form>
  <div class="form-group row">
    <label for="bizName" class="col-2 col-form-label">Business Name</label> 
    <div class="col-10">
      <input id="bizName" name="bizName" placeholder="Business Name" type="text" aria-describedby="bizNameHelpBlock" required="required" class="form-control"> 
      <span id="bizNameHelpBlock" class="form-text text-muted">What is the name of the business that will start/already is charging the fee?</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="logoUpload" class="col-2 col-form-label">Logo</label> 
    <div class="col-10">
      <input type="file" id="logoUpload" name="logoUpload" aria-describedby="logoUploadHelpBlock" class="form-control">
      <span id="logoUploadHelpBlock" class="form-text text-muted">Logo of the business in question</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="otherMediaUpload" class="col-2 col-form-label">Add. Media</label> 
    <div class="col-10">
	  <input type="file" id="otherMediaUpload" name="otherMediaUpload" placeholder="Other Media" class="form-control" aria-describedby="otherMediaUploadHelpBlock" multiple>
      <span id="otherMediaUploadHelpBlock" class="form-text text-muted">Pictures of receipts or other general media (photos of the store/resto), etc.</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="businessDescrip" class="col-2 col-form-label">Business Description</label> 
    <div class="col-10">
      <textarea id="businessDescrip" name="businessDescrip" cols="40" rows="5" aria-describedby="businessDescripHelpBlock" class="form-control"></textarea> 
      <span id="businessDescripHelpBlock" class="form-text text-muted">Description of the business, can be copied from their website or wiki. Not required.</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="bizCategories" class="col-2 col-form-label">Category</label> 
    <div class="col-10">
      <select id="bizCategories" name="bizCategories" class="custom-bizCategories" multiple="multiple" aria-describedby="bizCategoriesHelpBlock" required="required">
        
      </select> 
      <span id="bizCategoriesHelpBlock" class="form-text text-muted">What type of business is this?</span>
    </div>
  </div>
  
		<ul id="addresses" style="border:orange; border-width:1px; padding-left:5px; border-style:solid;">
		<div class="address">
  
  <div class="form-group row">
    <label for="businessAddress" class="col-2 col-form-label">Address</label> 
    <div class="col-10">
      <input id="businessAddress" name="businessAddress" placeholder="Address" type="text" aria-describedby="businessAddressHelpBlock" class="form-control" required="required"> 
      <span id="businessAddressHelpBlock" class="form-text text-muted">Address of the business (just street number and street name)</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="businessCity" class="col-2 col-form-label">City</label> 
    <div class="col-10">
      <input id="businessCity" name="businessCity" placeholder="City" type="text" class="form-control" required="required">
    </div>
  </div>  
  <div class="form-group row">
    <label for="businessProvince" class="col-2 col-form-label">Province</label> 
    <div class="col-10">
      <input id="businessProvince" name="businessProvince" placeholder="Province" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="businessPostalCode" class="col-2 col-form-label">Postal Code</label> 
    <div class="col-10">
      <input id="businessPostalCode" name="businessPostalCode" placeholder="Postal Code" type="text" class="form-control" required="required">
    </div>
  </div>
    <ul id="dayopen">
	<div class="daysopen">
  <div class="form-group row">
    <label for="bizHoursOpen" class="col-2 col-form-label">Hours Open</label> 
    <div class="col-10">
      <input id="bizHoursOpen" name="bizHoursOpen" placeholder="Hours Open" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="bizDaysOpen" class="col-2 col-form-label">Days Open</label> 
    <div class="col-10">
      <input id="bizDaysOpen" name="bizDaysOpen" type="text" class="form-control" required="required">
    </div>
  </div>
  </div> <!-- days open class -->
  <button id='add-days'>Add Additonal Biz Hours</button><br><br>
  </ul>
  <hr />
  </div> <!-- address class -->
  <button id='add-address'>Add another address</button><br><br>
	</ul><br />
  
  <div class="form-group row">
    <label for="bizWebsite" class="col-2 col-form-label">Website URL</label> 
    <div class="col-10">
      <input id="bizWebsite" name="bizWebsite" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">National Business</label> 
    <div class="col-10">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="businessNational" id="businessNational_0" type="radio" required="required" class="custom-control-input" value="1" aria-describedby="businessNationalHelpBlock"> 
        <label for="businessNational_0" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="businessNational" id="businessNational_1" type="radio" required="required" class="custom-control-input" value="0" aria-describedby="businessNationalHelpBlock"> 
        <label for="businessNational_1" class="custom-control-label">No</label>
      </div> 
      <span id="businessNationalHelpBlock" class="form-text text-muted">Is this a national business? (Ex: Telus)</span>
    </div>
  </div>
  
  <ul id="creditcards" style="border:orange; border-width:1px; padding-left:5px; border-style:solid;">
  <div class="creditcard">
  <div class="form-group row">
    <label for="bizCreditCardType" class="col-2 col-form-label">Credit Card Type</label> 
    <div class="col-10">
      <select id="bizCreditCardType" name="bizCreditCardType" required="required" class="custom-select">
        <option value="ALL">ALL</option>
        <option value="American Express">American Express</option>
        <option value="Mastercard">Mastercard</option>
        <option value="Visa">Visa</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="creditCardFeeAmount" class="col-2 col-form-label">Fee Amount</label> 
    <div class="col-10">
      <input id="creditCardFeeAmount" name="creditCardFeeAmount" type="text" class="form-control" aria-describedby="creditCardFeeAmountHelpBlock" required="required"> 
      <span id="creditCardFeeAmountHelpBlock" class="form-text text-muted">Make sure to add dollar sign or percentage sign. Ex: (1.50%, $1.50, or 1.50% + 0.30c)</span>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Business Fee Type</label> 
    <div class="col-10">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="bizFeeType" id="bizFeeType_0" type="radio" class="custom-control-input" value="Percentage"> 
        <label for="bizFeeType_0" class="custom-control-label">Percentage</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="bizFeeType" id="bizFeeType_1" type="radio" class="custom-control-input" value="Fixed Cost"> 
        <label for="bizFeeType_1" class="custom-control-label">Fixed Cost</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="bizFeeType" id="bizFeeType_2" type="radio" class="custom-control-input" value="Percentage + Fixed Cost"> 
        <label for="bizFeeType_2" class="custom-control-label">Percentage + Fixed Cost</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="bizFeeAdditionalInfo" class="col-2 col-form-label">Fee Additional Info</label> 
    <div class="col-10">
      <input id="bizFeeAdditionalInfo" name="bizFeeAdditionalInfo" type="text" class="form-control" aria-describedby="bizFeeAdditionalInfoHelpBlock"> 
      <span id="bizFeeAdditionalInfoHelpBlock" class="form-text text-muted">If the fee is being charged by the credit card company please mention it here, otherwise you can leave blank</span>
    </div>
  </div>
  <hr />
  </div> <!-- credit cards class div -->
  <button id='add-creditcard'>Add another card fee</button><br><br>
		</ul><br />
		
  <div class="form-group row">
    <div class="offset-2 col-10">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

		</p>
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
    <!--jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
/* Grab Categories form API and fill them into the selection menu on the form */
var categoryAPI = "https://admin.creditcardfees.ca/api/categories";
    $.getJSON(categoryAPI)
      .done(function(data){
           var dropdownMarca = $("#bizCategories");
           $.each(data.data, function(index, item) {
			   dropdownMarca.append('<option value=' + item.id + '>' + item.attributes.name + '</option>');
           });

      });
/* Add More for Addresses */
(function() {
   var button=document.getElementById("add-address");
   button.addEventListener('click', function(event) {
      event.preventDefault();
      var cln = document.getElementsByClassName("address")[0].cloneNode(true);
      document.getElementById("addresses").insertBefore(cln,this);
      return false;
   });
})(); 
/* Add More for Days Open */
(function() {
   var button=document.getElementById("add-days");
   button.addEventListener('click', function(event) {
      event.preventDefault();
      var cln = document.getElementsByClassName("daysopen")[0].cloneNode(true);
      document.getElementById("dayopen").insertBefore(cln,this);
      return false;
   });
})();
/* Add More for Credit cards */
(function() {
   var button=document.getElementById("add-creditcard");
   button.addEventListener('click', function(event) {
      event.preventDefault();
      var cln = document.getElementsByClassName("creditcard")[0].cloneNode(true);
      document.getElementById("creditcards").insertBefore(cln,this);
      return false;
   });
})();  

</script>		
    </body>
</html>
