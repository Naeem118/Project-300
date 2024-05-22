<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paymentTypes = isset($_POST['payment_type']) ? $_POST['payment_type'] : [];
    $amount = $_POST['amount'];
    $otherText = isset($_POST['other_text']) ? $_POST['other_text'] : '';

    // Join the payment types into a single string
    if (in_array('other', $paymentTypes)) {
        $paymentTypes[array_search('other', $paymentTypes)] = 'Other: ' . $otherText;
    }
    $paymentTypeString = implode(", ", $paymentTypes);
    $date = date('Y-m-d H:i:s');

    // File upload handling
    $target_dir = "uploads/";
    
    // Check if the uploads directory exists, if not create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $file_name;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allow certain file formats
    $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf'];
    if (!in_array($fileType, $allowedTypes)) {
        die("Sorry, only JPG, JPEG, PNG & PDF files are allowed.");
    }

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        // Insert the payment details into the database
        $stmt = $conn->prepare("INSERT INTO history (payment_type, amount, date, receipt) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $paymentTypeString, $amount, $date, $file_name);

        if ($stmt->execute()) {
            echo "<script>alert('Payment successful!'); window.location.href='History.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $conn->close();
}
?>
