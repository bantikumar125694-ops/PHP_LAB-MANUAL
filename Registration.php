<?php

echo "<pre>";
print_r($_GET);  
print_r($_POST); 
var_dump(($_POST));
echo "</pre>";


$target_path = "uploads/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
echo "File uploaded successfully!";
} else{
echo "Sorry, file not uploaded, please try again!";
}

?>