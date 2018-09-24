<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <form action="results.php" id="register" method="post">
            <div class="firstname">    
                <label for="firstname">First Name:</label>
                <input type="text" class="text" name="firstname" autofocus required>
            </div>
            <div class="lastname">
                <label for="firstname">Last Name:</label>
                <input type="text" class="text" name="lastname" required>
            </div>
            <div class="email">
                <label for="firstname">Email Address:</label>
                <input type="text" class="text" name="email" required>
            </div>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
</body>
</html>