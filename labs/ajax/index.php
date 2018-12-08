<html>
    <head>

    <title> Ajax Signup </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script> var usernames = ["bob"]</script>

    </head>

    <body background="img/monterey.jpg">

        <header>
            <h1>Signup</h1>
        </header>

        <form method="post" name="myForm" onsubmit= "return submitCheck()">
        Username:   <input type="text" id="username"> <span id="confirmation"></span> <br><br>
        Password:   <input type="password" id="password">  <span id="passConfirm"></span><br><br>
        Retype Password:   <input type="password" id="password2"> <br><br>
        Zip Code:     <input type="text" id="zipcode" name="zipcode"><span id="msg"></span> <br><br>
        City: <input type="text" name="city" id="city"> <br><br>
        Longitude: <input type="text" name="longitude" id="longitude"> <br><br>
        Latitude: <input type="text" name="latitude" id="latitude"> <br><br>
        State: <select id = "states">
            <option value="default"></option>
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
            
            <br><br>	
            
            Counties: <select id="counties">
                <option value="default"></option>
            </select>
        
            <input type="submit" id="submit" class="submit">

        </form>

        <div id="zipCodeResult"></div> Results

        <script src="functions.js"></script>

    </body>
    
</html>