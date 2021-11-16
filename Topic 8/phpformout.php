<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Here are your details</h1>
        <p>Your first name is: <?php echo $_POST["fname"]; ?></p>
        <p>Your last name is: <?php echo $_POST["lname"]; ?></p>
        <p>Your date of birth is: <?php echo $_POST["dob"]; ?></p>
    </div>
</body>
</html>