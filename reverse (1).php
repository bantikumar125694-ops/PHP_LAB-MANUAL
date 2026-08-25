<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reverse User Array</title>
</head>
<body>

    <h2>Reverse an Array</h2>
    <p>Enter your values separated by commas (e.g., Apple, Banana, Orange, Grape)</p>
    
    <form method="POST" action="">
        <input type="text" name="userInput" size="50" required placeholder="Enter values here...">
        <button type="submit">Reverse It!</button>
    </form>

    <hr>

    <?php
    // Check if the form was submitted via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Fetch the raw string from the user
        $raw_input = $_POST['userInput'];
        
        // 1. Convert the comma-separated string into an array using explode()
        $original_array = explode(',', $raw_input);
        
        // (Optional but recommended) Clean up any extra spaces around the values
        $original_array = array_map('trim', $original_array);
        
        // 2. Reverse the array using PHP's built-in array_reverse() function
        $reversed_array = array_reverse($original_array);
        
        // 3. Display the results
        echo "<h3>Original Array:</h3>";
        echo "<pre>";
        print_r($original_array);
        echo "</pre>";

        echo "<h3>Reversed Array:</h3>";
        echo "<pre>";
        print_r($reversed_array);
        echo "</pre>";
    }
    ?>

</body>
</html>