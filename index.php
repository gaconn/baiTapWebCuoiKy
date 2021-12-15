<?php
    include "./constant.php";
    function loadClass($c){
        include "./class/$c.php";
    }
    spl_autoload_register("loadClass");
    $controller= Utilities::get("controller","home");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/index.css">
</head>

<body>
    <?php include "./pages/nav.php" ?>
    <?php
        switch ($controller) {
            case 'home':
                include "./controllers/homeController.php";
                break;
            case 'phong':
                include "./controllers/phongController.php";
                break;
            default:
                # code...
                break;
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>