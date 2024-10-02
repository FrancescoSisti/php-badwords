<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form per censurare parole</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Form per censurare parole</h1>
        <form action="process.php" method="POST">
            <div class="mb-3">
                <label for="paragraph" class="form-label">Paragrafo:</label>
                <textarea class="form-control" name="paragraph" id="paragraph" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="censor_word" class="form-label">Parola da censurare:</label>
                <input type="text" class="form-control" name="censor_word" id="censor_word" required>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>