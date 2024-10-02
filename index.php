<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form per censurare parole</title>
</head>

<body>
    <h1>Form per censurare parole</h1>
    <form action="process.php" method="POST">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" rows="4" cols="50" required></textarea><br><br>

        <label for="censor_word">Parola da censurare:</label><br>
        <input type="text" name="censor_word" id="censor_word" required><br><br>

        <input type="submit" value="Invia">
    </form>
</body>

</html>