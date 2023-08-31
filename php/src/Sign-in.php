<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="sign-in.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script>
	<style>
		.loglink {
			color: white;
		}

		input[type="submit"] {
			padding: 5px 10px;
			background-color: #4CAF50;
			color: white;
			border: none;
			cursor: pointer;
			height: 30px;
		}

		#countryContainer {
			width: 60%;
			height: 20px;
			background: #e0dede;
			justify-content: center;
			margin: 20px auto;
			padding: 10px;
			border: none;
			outline: none;
			border-radius: 5px;
		}

		#countryContainer select {
			border: none;
			outline: none;
			background-color: transparent;
		}

		input[type="date"]::before {
			content: "DOB ";
			color: #999999;
			margin-right: 10px;
		}
		.errr {
        opacity: 0;
        position: fixed;
        top: -50px;
        left: 0;
        width: 100%;
        background-color:#e02f41;
        color: white;
		height:40px;
		display: flex;
		align-items: center;
		justify-content: center;
        padding: 10px;
        text-align: center;
        
		font-size:23px;
        transition: opacity 0.5s ease-in-out, top 0.5s ease-in-out;
    }

    .errr.show {
        opacity: 1;
        top: 0;
    }
	@keyframes slideDown {
        0% {
            top: -50px;
        }
        100% {
            top: 0;
        }
    }

.errormessage {
    color: white;
    font-weight: bold;
}

	</style>
</head>

<body>
<script>
    setTimeout(function() {
        var errr = document.querySelector('.errr');
        errr.classList.remove('show');
    }, 5000);
</script>



<div class="errr<?php if (isset($_GET['error']) && $_GET['error'] == 'exists' || isset($_GET['err']) && $_GET['err'] === 'invalid'    || isset($_GET['usernot']) && $_GET['usernot'] == 'nouser' || isset($_GET['err']) && $_GET['err'] == 'emailnot' ) echo ' show'; ?>">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 'exists') {
        echo 'Email already exists!';
    }
	else
if (isset($_GET['err']) && $_GET['err'] === 'invalid') {
        echo '<p>Invalid username or password. Please try again.</p>';
    }
	else
	if (isset($_GET['usernot']) && $_GET['usernot'] === 'nouser') {
        echo '<p>User not found, Sign-up first</p>';
    }
	else
	if (isset($_GET['err']) && $_GET['err'] === 'emailnot') {
        echo '<p>User not found, Sign-up first</p>';
    }
    ?>
</div>







	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
		<div class="signup">
		
			<form action="Enter_otp_page.php" method="POST">
			
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="email" name="email" placeholder="Email" required="" id="email">
				<input type="password" name="password" placeholder="Password" required="" id="password">
				<input type="date" name="birthdate" id="birthdate" required placeholder="DOB" &nbsp;>

				<div id="countryContainer"></div>
				<input type="hidden" name="country" id="hiddenCountry">
				<input type="hidden" name="otp" value="<?php echo $otp; ?>"> <!-- Added hidden input for OTP -->

				<input type="submit" value="Sign Up">
				
			</form>
		</div>

		<div class="login">
			<form action="login.php" method="POST">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit" value="Sign In">

				<!-- <a href="Home.html" class="loglink"> <button id="btnSubmit">Login</button></a> -->

				<a href="forgot_password.php" alt="notworking.html">
					<h5 style="color:blue;margin:3px;">Forgot password?</h5>
				</a>

				
			</form>
		</div>
	</div>

	<script>
		 // Clear the session variables
		 sessionStorage.removeItem('email');
    sessionStorage.removeItem('password');

    // Clear the localStorage variables
    localStorage.removeItem('email');
    localStorage.removeItem('password');


	
	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
			for (var i = 0; i < inputs.length; i++) {
				inputs[i].addEventListener('focus', function() {
					this.value = '';
				});
			}

			// Clear URL parameters
			if (window.history.replaceState) {
				window.history.replaceState({}, document.title, window.location.href.split("?")[0]);
			}
		});
	</script>


	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var birthdateInput = document.getElementById("birthdate");
			datepicker(birthdateInput, {
				// Additional options for datepicker can be added here
			});
		});

		var container = document.getElementById("countryContainer");
		var select = document.createElement("select");
		select.name = "country";
		select.id = "country";

		var countries = [
			"Afghanistan",
			"Albania",
			"Algeria",
			"Andorra",
			"Angola",
			"Antigua and Barbuda",
			"Argentina",
			"Armenia",
			"Australia",
			"Austria",
			"Azerbaijan",
			"Bahamas",
			"Bahrain",
			"Bangladesh",
			"Barbados",
			"Belarus",
			"Belgium",
			"Belize",
			"Benin",
			"Bhutan",
			"Bolivia",
			"Bosnia and Herzegovina",
			"Botswana",
			"Brazil",
			"Brunei",
			"Bulgaria",
			"Burkina Faso",
			"Burundi",
			"Cabo Verde",
			"Cambodia",
			"Cameroon",
			"Canada",
			"Central African Republic",
			"Chad",
			"Chile",
			"China",
			"Colombia",
			"Comoros",
			"Congo",
			"Costa Rica",
			"Croatia",
			"Cuba",
			"Cyprus",
			"Czechia",
			"Denmark",
			"Djibouti",
			"Dominica",
			"Dominican Republic",
			"Ecuador",
			"Egypt",
			"El Salvador",
			"Equatorial Guinea",
			"Eritrea",
			"Estonia",
			"Eswatini",
			"Ethiopia",
			"Fiji",
			"Finland",
			"France",
			"Gabon",
			"Gambia",
			"Georgia",
			"Germany",
			"Ghana",
			"Greece",
			"Grenada",
			"Guatemala",
			"Guinea",
			"Guinea-Bissau",
			"Guyana",
			"Haiti",
			"Honduras",
			"Hungary",
			"Iceland",
			"India",
			"Indonesia",
			"Iran",
			"Iraq",
			"Ireland",
			"Israel",
			"Italy",
			"Jamaica",
			"Japan",
			"Jordan",
			"Kazakhstan",
			"Kenya",
			"Kiribati",
			"Korea, North",
			"Korea, South",
			"Kosovo",
			"Kuwait",
			"Kyrgyzstan",
			"Laos",
			"Latvia",
			"Lebanon",
			"Lesotho",
			"Liberia",
			"Libya",
			"Liechtenstein",
			"Lithuania",
			"Luxembourg",
			"Madagascar",
			"Malawi",
			"Malaysia",
			"Maldives",
			"Mali",
			"Malta",
			"Marshall Islands",
			"Mauritania",
			"Mauritius",
			"Mexico",
			"Micronesia",
			"Moldova",
			"Monaco",
			"Mongolia",
			"Montenegro",
			"Morocco",
			"Mozambique",
			"Myanmar",
			"Namibia",
			"Nauru",
			"Nepal",
			"Netherlands",
			"New Zealand",
			"Nicaragua",
			"Niger",
			"Nigeria",
			"North Macedonia",
			"Norway",
			"Oman",
			"Pakistan",
			"Palau",
			"Panama",
			"Papua New Guinea",
			"Paraguay",
			"Peru",
			"Philippines",
			"Poland",
			"Portugal",
			"Qatar",
			"Romania",
			"Russia",
			"Rwanda",
			"Saint Kitts and Nevis",
			"Saint Lucia",
			"Saint Vincent and the Grenadines",
			"Samoa",
			"San Marino",
			"Sao Tome and Principe",
			"Saudi Arabia",
			"Senegal",
			"Serbia",
			"Seychelles",
			"Sierra Leone",
			"Singapore",
			"Slovakia",
			"Slovenia",
			"Solomon Islands",
			"Somalia",
			"South Africa",
			"South Sudan",
			"Spain",
			"Sri Lanka",
			"Sudan",
			"Suriname",
			"Sweden",
			"Switzerland",
			"Syria",
			"Taiwan",
			"Tajikistan",
			"Tanzania",
			"Thailand",
			"Timor-Leste",
			"Togo",
			"Tonga",
			"Trinidad and Tobago",
			"Tunisia",
			"Turkey",
			"Turkmenistan",
			"Tuvalu",
			"Uganda",
			"Ukraine",
			"United Arab Emirates",
			"United Kingdom",
			"United States",
			"Uruguay",
			"Uzbekistan",
			"Vanuatu",
			"Vatican City",
			"Venezuela",
			"Vietnam",
			"Yemen",
			"Zambia",
			"Zimbabwe"
		];


		var option = document.createElement("option");
		option.value = "all";
		option.text = "Choose your country";
		select.appendChild(option);

		for (var i = 0; i < countries.length; i++) {
			var option = document.createElement("option");
			option.value = countries[i];
			option.text = countries[i];
			select.appendChild(option);
		}

		container.appendChild(select);

		var hiddenCountry = document.getElementById("hiddenCountry");

		select.addEventListener("change", function() {
			hiddenCountry.value = this.value;
		});
	</script>
	<script>
		// JavaScript code
		var dateInput = document.getElementById("birthdate");
		dateInput.addEventListener("input", function() {
			this.removeAttribute("placeholder");
		});
	</script>





<script>
    // Clear form fields when navigating back
    if (window.history && window.history.pushState) {
        window.history.pushState(null, null, window.location.href);
        window.addEventListener('popstate', function () {
            document.getElementById("email").value = "";
            document.getElementById("password").value = "";
            document.getElementById("birthdate").value = "";
            document.getElementById("hiddenCountry").value = "";
        });
    }
</script>


</body>

</html>