<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Array Input</title>
</head>
<body>

    <h2>Enter Your Favorite Fruits</h2>
    <form method="POST" action="">
        Fruit 1: <input type="text" name="userArray[]" required><br><br>
        Fruit 2: <input type="text" name="userArray[]" required><br><br>
        Fruit 3: <input type="text" name="userArray[]" required><br><br>
        <button type="submit">Submit Array</button>
    </form>

    <hr>

    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Fetch the array from the form submission
        // isset() checks if the variable is declared and not null
        if (isset($_POST['userArray'])) {
            $fruits = $_POST['userArray'];
            
            echo "<h3>You entered the following array:</h3>";
            
            // Method 1: Raw structure output (Great for debugging)
            echo "<pre>";
            print_r($fruits);
            echo "</pre>";

            // Method 2: Clean output using a foreach loop
            echo "<h3>Formatted Output:</h3>";
            echo "<ul>";
            foreach ($fruits as $index => $fruit) {
                // htmlspecialchars prevents XSS attacks from malicious user input
                $safe_fruit = htmlspecialchars($fruit);
                echo "<li>Index $index: $safe_fruit</li>";
            }
            echo "</ul>";
            
            // Using an array function to count the items
            $total_items = count($fruits);
            echo "<p>Total items in your array: <strong>$total_items</strong></p>";
        }
    }
    ?>

</body>
</html>