<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: darkgreen;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            align-content: center;
            width: 40%;
            padding: 20px;
            background-color: darkgreen;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: yellowgreen;
        }

        input[type="reset"] {
            align-content: center;
            width: 40%;
            padding: 20px;
            background-color: darkgreen;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="reset"]:hover {
            background-color: yellowgreen;
        }

    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="save_Details.php" method="POST";>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="telephone">Telephone Number:</label>
        <input type="text" id="telephone" name="telephone" value="+94" pattern="\+94\d{9}" title="Enter a valid telephone number starting with +94.">

        <label for="province">Province:</label>
        <select id="province" name="province">
            <option value="Western">Western</option>
            <option value="Central">Central</option>
            <option value="Southern">Southern</option>
            <option value="Northern">Northern </option>
            <option value="Eastern">Eastern</option>
            <option value="North Western">North Westernl</option>
            <option value="North Centra">North Centra</option>
            <option value="Uva">Uva </option>
            <option value="Sabaragamuwa">Sabaragamuwa</option>
            <!-- Add more provinces here -->
        </select>

        <label for="city">City:</label>
        <select id="city" name="city">
            <!-- Cities will be populated based on the selected province using JavaScript -->
        </select>

        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>


    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address.");
                return false; // Prevent form submission
            }

            // Add more validation for other fields if needed

            return true; // Allow form submission
        }

        function clearForm() {
            document.getElementById("username").value = "";
            document.getElementById("password").value = "";
            document.getElementById("password").value = "";
            document.getElementById("email").value = "";
            document.getElementById("telephone").value = "";
          

            // Add similar lines for other input fields
        }
    </script>
        
    <script>
        // JavaScript code to populate cities based on the selected province
        document.getElementById('province').addEventListener('change', function() {
            var province = this.value;
            var cities = document.getElementById('city');

            // Clear existing options
            cities.innerHTML = '';

            // Add cities based on the selected province
            if (province === 'Western') {
                var westernCities = ['Colombo', 'Gampaha', 'Kalutara'];
                westernCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });
            } else if (province === 'Central') {
                var centralCities = ['Kandy', 'Nuwara Eliya', 'Matale'];
                centralCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });
            }else if (province === 'Southern') {
                var centralCities = ['Galle', 'Matara', 'Hambantota'];
                centralCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });

            }else if (province === 'Northern') {
                var centralCities = ['Jaffna', 'Kilinochchi', 'Vavuniya'];
                centralCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });

            }else if (province === 'Eastern') {
                var centralCities = ['Trincomalee', 'Batticaloa', 'Ampara'];
                centralCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });
                
            }else if (province === 'North Western') {
                var centralCities = ['Kurunegala', 'Puttalam'];
                centralCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });
                
                
            }else if (province === 'North Centra') {
                var centralCities = ['Anuradhapura','Polonnaruwa'];
                centralCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });  
                
                
            }else if (province === 'Uva') {
                var centralCities = ['Badulla','Monaragala'];
                centralCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });
                
            
            }else if (province === 'Sabaragamuwa') {
                var centralCities = ['Ratnapura','Kegalle'];
                centralCities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.text = city;
                    cities.add(option);
                });    

            }
            // Add more provinces and their cities here
        });
    </script>
    <!-- JavaScript code for cities dropdown can be added here -->

</body>
</html>
