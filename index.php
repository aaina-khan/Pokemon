<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon </title>
</head>

<body>

    <?php

    $request = $_SERVER['REQUEST_URI'];
    $request = explode('?', $request);

    switch ($request[0]) {
        case '/':
            require __DIR__ . '/controller/home.controller.php';
            execute();
            break;
        case '':
            require __DIR__ . '/controller/home.controller.php';
            execute();
            break;
        case '/search':
            require __DIR__ . '/controller/search.controller.php';
            execute();
            break;
        case '/details':
            require __DIR__ . '/controller/detail.controller.php';
            execute();
            break;
        default:
            require __DIR__ . '/controller/error.controller.php';
            execute();
            break;
    }

    ?>
</body>

</html>