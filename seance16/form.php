<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body{
            background-color: lightblue;
            font-family: Arial, Helvetica, sans-serif;
        }
        input, select{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
        <header>
        <h1>Formulaire</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="intro.php">Intro</a></li>
            <li><a href="form.php">Formulaire</a></li>
        </ul>
    </nav>
    <main>
        <form action="submit-form.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
            <label for="city">City</label>
            <select name="city" id="city">
                <option value="1">Montreal</option>
                <option value="2">Laval</option>
                <option value="3">Quebec</option>
            </select>
            <input type="submit">

        </form>

    </main>
    
</body>
</html>