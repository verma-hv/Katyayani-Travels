<?php
include("header.php");
?>

<body>
    <h1>Visa Information Form</h1>
    <div class="form-container">
        <form method="post" action="process_visa.php">
        <div class="form-group">
                <label for="given_name">Given Name:</label>
                <input type="text" id="given_name" name="given_name" required>
            </div>

            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="phoneno">Phone No:</label>
                <input type="digit" id="phoneno" name="phoneno" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="country_name">Country Name:</label>
                <input type="text" id="country_name" name="country_name" required>
            </div>

            <div class="form-group">
                <label for="visa_type">Visa Type:</label>
                <input type="text" id="visa_type" name="visa_type" required>
            </div>

            

            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        /* Light Gray Background */
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #007bff;
        /* Blue Heading Color */
        padding: 20px 0;
    }

    .form-container {
        max-width: 400px;
        margin: 20px auto;
        background-color: #ffffff;
        /* White Form Background */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        color: #333;
        /* Dark Gray Text Color */
    }

    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: #f9f9f9;
        /* Light Gray Input Background */
    }

    input[type="submit"] {
        background-color: #007bff;
        /* Blue Submit Button Background */
        color: #fff;
        /* White Submit Button Text */
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
        /* Darker Blue on Hover */
    }
</style>

<?php
include("footer.php");
?>