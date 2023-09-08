<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Create a filename for the storage file (you can customize this)
    $filename = "form_data_" . date("Y-m-d_H-i-s") . ".txt";

    // Compose the data to be written to the file
    $data = "Name: $name\n";
    $data .= "Email: $email\n\n";

    // Specify the directory where you want to store the files
    $storageDirectory = "form_data/";

    // Check if the storage directory exists, and create it if not
    if (!is_dir($storageDirectory)) {
        mkdir($storageDirectory, 0755, true);
    }

    // Write the data to the file
    if (file_put_contents($storageDirectory . $filename, $data) !== false) {
        // Redirect to the thank you page
        header("Location: thank_you.html");
        exit;
    } else {
        // If writing to the file fails, you can handle the error here
        echo "Error: Unable to store form data.";
    }
}
?>
