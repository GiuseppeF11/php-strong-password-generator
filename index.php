<?php ?>

<?php 
    var_dump($_GET["password"]);

    $n= $_GET["password"];
    
    function getPass($n) {
        $simboliammessi = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$%&/()=?^>*_-';
        $randomString = '';
    
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($simboliammessi) - 1);
            $randomString .= $simboliammessi[$index];
        }
    
        return $randomString;
    }
 
    
    var_dump(strlen(getPass($n)));
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
    <body >
        <div class="container text-center">
            <h1>Password Generator</h1>
            <div class="container py-4">
                <div class="row g-3 align-items-center justify-content-center">
                    <form action="" method="GET">
                        <div class="col-auto ">
                            <label for="number" class="col-form-label">Inserisci la lunghezza della password</label>
                        </div>
                        <div class="col-1 m-auto">
                            <input type="number" id="password" name="password" class="form-control" aria-describedby="passwordHelpInline">
                            <?php ?>
                        </div>
                    </form>
                </div>
            </div>

            <h3>
                La tua password è: 
            </h3>
            <h4>
                <?php echo getPass($n); ?>
            </h4>
        </div>
        
    </body>
</html>