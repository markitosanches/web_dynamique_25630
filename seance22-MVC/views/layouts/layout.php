<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>     
<body>
<nav>
    <ul>
        <li><a href="?controller=client">Clients</a></li>
        <li><a href="?controller=client&function=create">Client Create</a></li>
    </ul>
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        Copryright 2026
    </footer>
</body>
</html>