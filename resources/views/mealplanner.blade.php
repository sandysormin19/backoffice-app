<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Planner</title>
    <link rel="stylesheet" href="{{ asset('css/stylesmeal.css')}}">
    </head>
<body>
    <header>
        <h1>Meal Planner</h1>
        <p>Plan your meals for the week easily and effectively!</p>
    </header>
    <div class="container">
        <div class="form-group">
            <label for="meal-day">Select Day:</label>
            <select id="meal-day">
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
        </div>

        <div class="form-group">
            <label for="meal-type">Select Meal Type:</label>
            <select id="meal-type">
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
                <option value="Snack">Snack</option>
            </select>
        </div>

        <div class="form-group">
            <label for="meal-name">Enter Meal Name:</label>
            <input type="text" id="meal-name" placeholder="Enter meal name" required>
        </div>

        <button id="add-meal">Add Meal</button>

        <h2>Your Meal Plan</h2>
        <div id="meal-plan">
            <h3>Monday</h3>
            <div id="Monday" class="meal-section"></div>
            <hr>
            <h3>Tuesday</h3>
            <div id="Tuesday" class="meal-section"></div>
            <hr>
            <h3>Wednesday</h3>
            <div id="Wednesday" class="meal-section"></div>
            <hr>
            <h3>Thursday</h3>
            <div id="Thursday" class="meal-section"></div>
            <hr>
            <h3>Friday</h3>
            <div id="Friday" class="meal-section"></div>
            <hr>
            <h3>Saturday</h3>
            <div id="Saturday" class="meal-section"></div>
            <hr>
            <h3>Sunday</h3>
            <div id="Sunday" class="meal-section"></div>
        </div>
    </div>

    <script src="{{ asset('js/mealscript.js')}}"></script>
</body>
</html>
