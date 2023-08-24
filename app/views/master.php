<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>romassoares</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Indie Flower', cursive;
        }

        .menu {
            display: flex;
            flex-direction: row;
            border: 1px solid black !important;
        }

        .container {
            display: flex;
            justify-content: center;
            height: 100vh;
            flex-wrap: wrap;
            padding: 10px;
        }

        .menu-itens {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            list-style: none;
        }

        .menu-item {
            padding: 10px 20px;
        }

        /* content */

        .card {
            display: flex;
            border: 1px solid black;
            height: 150px !important;
            width: 150px !important;
            flex-wrap: wrap;
            overflow: hidden;
            padding: 5px;
            margin: 5px;
        }

        .card-header {
            display: flex;
            justify-content: center !important;
        }

        /* footer */
        .footer-itens {
            display: flex;
            bottom: 0;
            left: 0;
            position: static;
            border: 1px solid black !important;
            justify-content: center;
        }

        .footer-itens ul {
            display: flex;
            align-items: center;
            flex-direction: row;
            list-style: none;
        }

        .footer-itens ul li {
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <?php include('partials/menu.php'); ?>
    <div class="container">
        <?= $this->section("content") ?>
    </div>
    <?php include('partials/footer.php'); ?>
</body>

</html>