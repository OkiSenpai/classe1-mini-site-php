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

        h1 {
            font-size: xxx-large;
            text-align: center;
        }

        .menu {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            width: 100%;
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

            align-items: center;
            margin: 0 15%;
            padding: 80px 0;
        }

        h2 {
            font-size: xx-large;
        }

        code {
            font-size: xx-large;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="menu">
        <a class="link" href="./">Accueil</a>
        <a class="link" href="./?p=php">PHP</a>
        <a class="link" href="./?p=sql">SQL</a>
        <a class="link" href="./?p=javascript">Javascript</a>
        <a class="link" href="./?p=python">Python</a>
    </nav>
    <main>
        <?php if (isset($_GET['p']) && $_GET['p'] == 'javascript'): ?>
            <h1><?= $titrepage ?></h1>
            <h2><?= $varH2['title'] ?></h2>
            <p class="description"><?= nl2br($varH2['description']) ?></p>
            <pre><code><?= $jsExemple1 ?> <br><?= $jsExemple1output ?></code></pre>
            <hr>
            <pre><code><?= $jsExemple2 ?> <br><?= $jsExemple2output ?></code></pre>

            <h2><?= $operateursH2 ?></h2>
            <p class="description"><?= nl2br($operateursDescription) ?></p>
            <pre><code><?= $operateursExemples ?> <br><?= $operateursOutput ?></code></pre>
            <hr>
            <pre><code><?= $operateursExemples2 ?> <br><?= $operateursOutput2 ?></code></pre>

            <h2><?= $conditionsH2 ?></h2>
            <p class="description"><?= nl2br($conditionsDescription) ?></p>
            <pre><code><?= $conditionsExemples ?> <br><?= $conditionsOutput ?></code></pre>
            <hr>
            <pre><code><?= $conditionsExemples2 ?> <br><?= $conditionsOutput2 ?></code></pre>

            <h2><?= $bouclesH2 ?></h2>
            <p class="description"><?= nl2br($bouclesDescription) ?></p>
            <pre><code><?= $bouclesExemples ?> <br><?= $bouclesOutput ?></code></pre>
            <hr>
            <pre><code><?= $bouclesExemples2 ?> <br><?= $bouclesOutput2 ?></code></pre>

            <h2><?= $whileH2 ?></h2>
            <p class="description"><?= nl2br($whileDescription) ?></p>
            <pre><code><?= $whileExemples ?> <br><?= $whileOutput ?></code></pre>
            <hr>
            <pre><code><?= $whileExemples2 ?> <br><?= $whileOutput2 ?></code></pre>
        <?php elseif (isset($_GET['p']) && $_GET['p'] == 'php'): ?>
            <h1><?= $titrepage ?></h1>
            <?php foreach ($text as $phpDescriptionForEach): ?>
                <h2><?= $phpDescriptionForEach['title'] ?></h2>
                <p class="description"><?= nl2br($phpDescriptionForEach['description']) ?></p>
            <?php endforeach; ?>
            <br>

            <h1>Exemples</h1>
            <br>
            <?php foreach ($topics as $topic): ?>
                <h2><?= $topic['title'] ?></h2>
                <p class="description"><?= nl2br($topic['description']) ?></p>
                <?php foreach ($topic['examples'] as $example): ?>
                    <pre><code><?= $example['code'] ?> <br><?= $example['output'] ?></code></pre>
                    <hr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php elseif (isset($_GET['p']) && $_GET['p'] == 'sql'): ?>
            <!-- Prikaz za SQL stranicu -->
            <h1><?= $titrepage ?></h1>
            <p class="description"><?= nl2br($text) ?></p>


        <?php elseif (isset($_GET['p']) && $_GET['p'] == 'python'): ?>
            <!-- Prikaz za Python stranicu -->
            <h1><?= $titrepage ?></h1>
            <p class="description"><?= nl2br($text) ?></p>
            <?php foreach ($decriptions as $decription): ?>
                <h2><?= $decription['title'] ?></h2>
                <p class="description"><?= nl2br($decription['description']) ?></p>

            <?php endforeach; ?>
            <?php foreach ($topics as $topic): ?>
                <h2><?= $topic['title'] ?></h2>
                <p class="description"><?= nl2br($topic['description']) ?></p>
                <?php foreach ($topic['examples'] as $example): ?>
                    <pre><code><?= $example['code'] ?> <br><?= $example['output'] ?></code></pre>
                    <hr>
                <?php endforeach; ?>
            <?php endforeach; ?>

            <!-- Dodajte ostale Python podatke ovde -->
        <?php else: ?>
            <h1><?= $titrepage ?></h1>
            <p class="description"><?= nl2br($text) ?></p>
        <?php endif; ?>
    </main>
    <footer>
        &copy; <?= date('Y') ?> My Website. All rights reserved.
    </footer>
</body>

</html>