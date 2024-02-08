<?php

session_start();

$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>PHP PASSWORD</title>
</head>

<body>
    <div class="container text-center py-5">
        <h1>Password Generator</h1>
        <div class="container py-4">
            <div class="row g-3 align-items-center justify-content-center">
                <h3>
                    La tua password è:
                </h3>
                <h4>
                    <?php echo $password; ?>
                </h4>
            </div>
            <a href="./index.php" class="text-light">Torna alla home</a>
        </div>
    </div>

</body>

</html>