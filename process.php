<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paragraph = $_POST["paragraph"];
    $censor_word = $_POST["censor_word"];

    echo "<h2>Paragrafo originale:</h2>";
    echo "<p>$paragraph</p>";
    echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";

    $censored_paragraph = str_ireplace($censor_word, "***", $paragraph);

    echo "<h2>Paragrafo censurato:</h2>";
    echo "<p>$censored_paragraph</p>";
    echo "<p>Lunghezza: " . strlen($censored_paragraph) . " caratteri</p>";
} else {
    echo "<p>Errore: Metodo di richiesta non valido</p>";
}
