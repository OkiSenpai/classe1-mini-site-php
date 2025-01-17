<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $datas['titre'] ?> | <?= $titrepage ?></title>
    <link rel="stylesheet" href="../public/style.css">
    <style>
        .description {
            font-size: xx-large;
        }

        body {
            background-color: lightblue;
            margin: 0;
        }
        h1{
            font-size: xxx-large;
        }

        .menu {
            background-color: #333;
            overflow: hidden;
        }

        .menu .link {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: xx-large;
        }

        .menu .link:hover {
            background-color: #ddd;
            color: black;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin:0 60px;
        }
    </style>
</head>
<html>
<body>
    <nav class="menu">
        <a class="link" href="./">Accueil</a>
        <a class="link" href="./?p=php">PHP</a>
        <a class="link" href="./?p=sql">SQL</a>
        <a class="link" href="./?p=javascript">Javascript</a>
    </nav>
    <main>
    <h1><?= $decription['titre'] ?> </h1>
    <p class="description"><?= nl2br($text) ?></p>
    
    
     
</main>


</body>

</html>