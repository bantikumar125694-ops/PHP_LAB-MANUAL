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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['userArray'])) {
            $fruits = $_POST['userArray'];
            
            echo "<h3>You entered the following array:</h3>";
            
            echo "<pre>";
            print_r($fruits);
            echo "</pre>";

            echo "<h3>Formatted Output:</h3>";
            echo "<ul>";
            foreach ($fruits as $index => $fruit) {
                $safe_fruit = htmlspecialchars($fruit);
                echo "<li>Index $index: $safe_fruit</li>";
            }
            echo "</ul>";
            
            $total_items = count($fruits);
            echo "<p>Total items in your array: <strong>$total_items</strong></p>";
        }
    }
    ?>

</body>
</html>