
<?php

session_start(); // Start the session if not already started

include("header.php"); 
if (isset($_SESSION['message'])) {
    echo '<script>alert("' . $_SESSION['message'] . '");</script>';
    unset($_SESSION['message']); // Clear the session variable after displaying it
}

// Include your header file
?>

<div class="container mt-5">
    <h1>Contact Us</h1>
    <p class="lead">Feel free to get in touch with us by filling out the form below:</p>

    <form action="send_email.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<style>

  /* Custom CSS for Contact Form Page */

/* Style the body with background color */
body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Style the header */
header {
    background-color: #007bff;
    color: #fff;
    text-align: center;
    padding: 20px;
}

/* Style the main content container */
main {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Style the form header */
main h1 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

/* Style the form paragraphs */
main p {
    font-size: 18px;
    color: #666;
    margin-bottom: 30px;
}

/* Style the form labels */
label {
    font-size: 20px;
    color: #444;
}

/* Style the form inputs and textareas */
.form-control {
    font-size: 18px;
    padding: 10px;
    margin-bottom: 20px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Add some margin to the bottom of the form */
form {
    margin-bottom: 30px;
}

</style>
<?php
include("footer.php"); // Include your footer file
?>

