<?php
// Include Bootstrap CSS
echo '<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Censura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paragraph = $_POST["paragraph"];
    $censor_word = $_POST["censor_word"];

    echo '<h2 class="mb-3">Paragrafo originale:</h2>';
    echo '<p class="lead">' . $paragraph . '</p>';
    echo '<p class="text-muted">Lunghezza: ' . strlen($paragraph) . ' caratteri</p>';

    $censored_paragraph = str_ireplace($censor_word, "***", $paragraph);

    echo '<h2 class="mb-3 mt-4">Paragrafo censurato:</h2>';
    echo '<p class="lead">' . $censored_paragraph . '</p>';
    echo '<p class="text-muted">Lunghezza: ' . strlen($censored_paragraph) . ' caratteri</p>';
} else {
    echo '<div class="alert alert-danger" role="alert">Errore: Metodo di richiesta non valido</div>';
}

echo '</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>';
