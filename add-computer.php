<?php
include 'dbinfo.php';


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_computer'])) {

    $title = sanitize_input($_POST['computer_title']);
    $content = sanitize_input($_POST['computer_content']);
    $image_url = isset($_POST['computer_image_url']) ? sanitize_input($_POST['computer_image_url']) : ''; // Image URL is optional


    $sql = "INSERT INTO computers (title, content, image_url) VALUES ('$title', '$content', '$image_url')";

    if ($conn->query($sql) === TRUE) {
        echo "computer added successfully";
    
        header("Location: Comnputer-index.php");
        exit();
    } else {
        echo "Error adding computer: " . $conn->error;
    }
}

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$conn->close();
?>