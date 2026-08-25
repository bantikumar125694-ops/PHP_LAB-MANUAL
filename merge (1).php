<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Merge Two Arrays</title>
</head>
<body>

    <h2>Merge Two Arrays</h2>
    <p>Enter your values separated by commas (e.g., Red, Blue, Green)</p>
    
    <form method="POST" action="">
        <label for="array1"><strong>Array 1:</strong></label>
        <input type="text" id="array1" name="array1" size="40" required placeholder="e.g., 1, 2, 3"><br><br>

        <label for="array2"><strong>Array 2:</strong></label>
        <input type="text" id="array2" name="array2" size="40" required placeholder="e.g., A, B, C"><br><br>

        <button type="submit">Merge Arrays</button>
    </form>

    <hr>

    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Fetch the raw strings from both inputs
        $raw_array1 = $_POST['array1'];
        $raw_array2 = $_POST['array2'];
        
        // Convert the comma-separated strings into arrays and trim extra spaces
        $array1 = array_map('trim', explode(',', $raw_array1));
        $array2 = array_map('trim', explode(',', $raw_array2));
        
        // Merge the two arrays using array_merge()
        $merged_array = array_merge($array1, $array2);
        
        // Display the results cleanly
        echo "<h3>First Array:</h3>";
        echo "<pre>";
        print_r($array1);
        echo "</pre>";

        echo "<h3>Second Array:</h3>";
        echo "<pre>";
        print_r($array2);
        echo "</pre>";

        echo "<h3>Merged Array Result:</h3>";
        echo "<pre>";
        print_r($merged_array);
        echo "</pre>";
    }
    ?>

</body>
</html>