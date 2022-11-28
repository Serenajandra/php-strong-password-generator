<!-- //**Descrizione**
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.


**Milestone 1**
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php
session_start();

$psw_length = $_GET["psw_length"] ?? "";
var_dump($psw_length);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    include __DIR__ . "/partials/layout/header.php";
    include __DIR__ . "/functions.php";

    ?>
    <main class="container bg-dark p-3">

        <form class="bg-primary text-center" action="index.php" method="GET">
            <label class="text-light mx-4" for="psw_length">Numero di caratteri della password:</label>
            <input type="text" name="psw_length" id="psw_length">
            <div class=" btn bntn-primary">
                <button type="submit">conferma</button>
            </div>
        </form>

    </main>

</body>

</html>




<!--
**Milestone 2**
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale
**Milestone 3**
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
**Milestone 4 (BONUS)**
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->