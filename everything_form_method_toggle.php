
	
<br><br>
	<div class="output-div">
<?php

if ($_GET || $_POST) {

	switch($_SERVER['REQUEST_METHOD']) {
		case 'GET': 
			$the_request = &$_GET;
		 	$request_name = "GET";
		 	echo "<h3>Data was processed with " . $request_name . "</h3><br>"; 
			break;
		case 'POST': 
			$the_request = &$_POST;
			$request_name = "POST"; 
			echo "<h3>Data was processed with " . $request_name . "</h3><br>";
		 	break;
	}

	foreach($the_request as $submittedKey => $submittedValue) {                  	
		if (is_array($submittedValue)) {           
			$submittedValue = implode(', ', $submittedValue); 
        }                
      	echo "<b style='color:brown;'>" . $submittedKey . ":</b> " . $submittedValue."<br>";
	}
}

else {
	echo "No values to show!<br><br>";
}

unset($_GET);
unset($_POST);
	
?>

	<p id="current-method"></p>
<div>

	<a id="method-toggle" class="btn-clear">Toggle Form Method</a> <br><br>

	<!--<a id="get-button" onclick="methodGet()" class="btn-clear" style="background-color: gold; color: #333;">Change Form Method to GET</a>  -->
</div>
<br><br>
<div class="text-center">
<a href="scripts/clear_form_everything_toggle.php" class="btn-clear padding-btn">Reset Values</a>
	<br><br>
</div>

</div>
	
<form id="form01" class="form-everything" action="#" method="GET">
	<input class="btn submit-everything-form-testh" type="submit" name="submit3" value="Submit Form"><br>

	<h2 class="form-heading">Tell Us About Your Beagle</h2>	
		<div class="div-required">
			<span class="lighter-text required">Required Field</span>
		</div>
	<hr>
	<h3 class="form-heading">Beagle's Info</h3>
		<div class="float-l">
			<label class="lighter-text">Name<span class="required"></span><br>
				<input type="text" name="dogname" value="Baylie" required>
			</label>
		</div>
		<!--<div class="float-l">
				<label>Beagle's Main Color<br>
				<input type="color" name="dogcolor" placeholder="Beagle's Main Color" value"#994d00">
			</label>
		</div> -->
	<br>
		<div class="float-l">
			<label class="lighter-text required">Age</label>
			<br>
			<input type="number" name="dogage" min="0" max="30" value="10" step="1" required>
		</div>
		<div class="float-l">
			<label class="lighter-text">Birthday</label>
			<br>
			<input type="date" name="dogbirthday" min="1990-01-01" max="<?php echo date('Y-m-d')?>" value="2007-02-05">
			
		</div>h
		<div class="float-l radio-buttons">
			<label class="lighter-text required">Boy or Girl?</label>
			<br>
			<label><input type="radio" name="dogsex" value="Male">Boy</label>
    		<label><input type="radio" name="dogsex" value="Female" checked>Girl</label>
		</div>
		<div class="float-l">
			<label class="lighter-text">Tells Us a Bit About Your Beagle</label>
			<br>
			<label><textarea style="font-size:10pt" rows="4" cols="60" name="comment" form="form01">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum mi in ullamcorper faucibus. Nam libero eros, tincidunt et risus sit amet, dictum ultricies diam. Vivamus vestibulum porttitor dictum. In non gravida sapien, sit amet fermentum libero. Aliquam in ullamcorper ante.
			</textarea>
			</label>
		</div>
		<br>
		<hr>

	<h3 class="form-heading">Other Info</h3>
		<div class="checkboxes">
			What other pets do you have?<br>
			<label><input type="checkbox" name="otherpets[]" value="Other Dog Breed" class="custom-check">Other Dog Breed</label>
			<label><input type="checkbox" name="otherpets[]" value="Cat" checked>Cat</label>
			<label><input type="checkbox" name="otherpets[]" value="Iguana" checked>Iguana</label>
			<label><input type="checkbox" name="otherpets[]" value="Fish">Fish</label>
			<br>
			<label><input type="checkbox" name="otherpets[]" value="Farret">Ferret</label>
			<label><input type="checkbox" name="otherpets[]" value="Bird">Bird</label>
			<label><input type="checkbox" name="otherpets[]" value="Pig" checked>Pig</label>
			<label><input type="checkbox" name="otherpets[]" value="Hampster">Hamster</label>
		</div>
	<br>
		<div>
			<label>If you could have as many beagles as you wanted, how many would you have?</label>
			<br>
			<output name="futureBeaglesOutput" id="beagleOutput">73</output><br>
			<input type="range" name="futurebeagles" id="beagleInput" value="73" min="0" max="100" oninput="beagleOutput.value = beagleInput.value">
		</div>
	<hr>
		<h2 class="form-heading">Create Your Account</h2>
		<h3 class="form-heading">Your Info</h3>
		<div class="float-l">
			<label class="lighter-text required">First Name</label><br>
			<input type="text" name="firstname" value="Greg" required>
		</div>
		<div class="float-l">
			<label class="lighter-text">Last Name</label><br>
			<input type="text" name="lastname" value="Conrad">
		</div>
	<br>
		<div class="float-l">
			<label class="lighter-text required">Telephone</label>
			<br>
			<input type="tel" name="telephone" placeholder="xxx-xxx-xxxx" 
			autocomplete="on" pattern="\d{3}-\d{3}-\d{4}$" title="Please use the format: 555-555-5555" value="704-555-7700" required>&nbsp;<span class="validity"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		<div class="float-l">
	<label class="lighter-text required">Email</label>
			<br>
			<input type="email" name="email" placeholder="something@this.that" value="gconrad0@email.cpcc.edu" required>
		</div>
		<div class="state-dropdown float-l">
			<label class="lighter-text">State</label>
       	<select class="form-state" name="state">
           	
           	<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
       	</select>		
		</div>
	<br>
		<div class="float-l username-div">
			<label class="lighter-text required">Username</label>
			<br>
			<input type="text" name="username" maxlength="10" minlength="4" value="gconrad0" required>
			<span class="validity"></span>&nbsp;&nbsp;<br>
			<span class="small-print">Username must be:<br>4 - 10 characters<br>Special characters allowed.</span>
		</div>
		<div class="float-l">
			<label class="lighter-text required">Password</label>
			<br>
			<input id="passwordInput" type="password" name="password1" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{4,8}$" title="4 - 8 alphanumeric characters. No special characters. At least 1 number and 1 letter." value="bubba0" required>
			<span class="validity"></span>&nbsp;
			<label class="cursor-pointer lighter-text"><input id="passwordCheck" type="checkbox" onclick="showPassword()">Show Password</label><br>
			<span class="small-print">Password must be:<br>4 - 8 alphanumeric.<br>At least 1 number and 1 letter.<br>No special characters.<br></span>
		</div>
					
	<br><br><hr><br>
	<input type="hidden" name="p" value="everything_form_method_toggle.php">	
		
	<br>
	<!--	<input class="btn-clear" type="reset" value="Reset Form"> -->
</form>
<script>

	window.onload = methodType;

	$("#method-toggle").click(function() {
		var pageForm = document.getElementById("form01");
		var formMethod = pageForm.getAttribute("method");

		if (formMethod === "GET") {
			pageForm.setAttribute("method", "POST");
		} 

		if (formMethod === "POST") {
			pageForm.setAttribute("method", "GET");	
		}	
		
		methodType();
	});

	function methodType() {
		var pageForm = document.getElementById("form01");
		var formMethod = pageForm.getAttribute("method");
		document.getElementById("current-method").innerHTML = "<h3>Current Method of Form: " + formMethod + "</h3>";
	}

	function showPassword() {
	    var x = document.getElementById("passwordInput");
	    if (x.type === "password") {
	        x.type = "text";
	    } else {
	        x.type = "password";
	    }
	}

</script>

