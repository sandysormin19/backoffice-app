<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="{{ asset('css/styles-bmi.css')}}">
    <!-- Link to the external CSS file -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    
    <header>
        
        <h1>BMI Calculator</h1>
    </header>
    
    <div class="container">
        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" placeholder="Enter your weight" required>

        <label for="height">Height (cm):</label>
        <input type="number" id="height" placeholder="Enter your height" required>

        <label for="age">Age:</label>
        <input type="number" id="age" placeholder="Enter your age" required>

        <fieldset>
            <legend>Gender:</legend>
            <label><input type="radio" name="gender" value="male" required> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </fieldset>

        <label for="activity-level">Activity Level:</label>
        <select id="activity-level" required>
            <option value="1.2">Sedentary (little or no exercise)</option>
            <option value="1.375">Lightly active (light exercise/sports 1-3 days/week)</option>
            <option value="1.55">Moderately active (moderate exercise/sports 3-5 days/week)</option>
            <option value="1.725">Very active (hard exercise/sports 6-7 days a week)</option>
            <option value="1.9">Super active (very hard exercise/physical job)</option>
        </select>

        <label for="goal">Goal:</label>
        <select id="goal" required>
            <option value="lose">Lose Weight</option>
            <option value="maintain">Maintain Weight</option>
            <option value="gain">Gain Weight</option>
        </select>

        <button onclick="calculateBMI()">Calculate BMI</button>
        <button onclick="calculateCaloricIntake()">Calculate Caloric Intake</button>

        <div class="result" id="result"></div>
        <div class="result" id="caloric-result"></div>
    </div>

    <script src="{{ asset('js/scriptbmi.js')}}"></script> <!-- Link to the external JavaScript file -->
</body>

</html>
