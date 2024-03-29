<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Investor</title>
    <style>
        /* Add CSS styles for form layout */
        /* ... Your CSS styles here ... */
        /* Style the form container */
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Style form elements */
label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="text"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #258cd1;
}

/* Optional: Add additional styles for validation/error messages */
.error-message {
    color: #e74c3c;
    margin-top: 5px;
}

/* Optional: Style file input */
input[type="file"] {
    background-color: #f2f2f2;
    padding: 8px;
    border: none;
}

/* Optional: Style file input label to match */
label[for="image"] {
    background-color: #3498db;
    color: #fff;
    padding: 8px;
    border-radius: 3px;
    cursor: pointer;
    display: inline-block;
    margin-bottom: 0;
}

    </style>
</head>
<body>
    <!--<h1>Create Investor</h1>-->
    <form action="process_investor.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>

        <input type="submit" name="submit" value="Create Investor">
    </form>
    <script>
        // Add JavaScript for client-side validation if needed
    </script>
</body>
</html>
