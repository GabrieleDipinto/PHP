<form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <input type="email" name="email" placeholder="Email">
    <input type="date" name="date" id="date">
    <input type="number" name="euro" placeholder="Importo in euro" step="0.01" min="0">
    <input type="submit" value="Submit">
</form> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);

    
    $euro = isset($_POST['euro']) ? floatval($_POST['euro']) : 0;
    $usd = $euro * 1.10; 

    $birthDate = new DateTime($date);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;

    echo "Ciao sono $name $surname, il mio indirizzo email è $email, sono nato il $date e ho $age anni.";
    if ($euro > 0) {
        echo "<br>L'importo inserito è &euro;" . number_format($euro, 2, ',', '.') . ", che corrisponde a $" . number_format($usd, 2, ',', '.') . ".";
    }

    echo "<hr><strong>Informazioni utili:</strong><br>";
    echo "Indirizzo IP: " . htmlspecialchars($_SERVER['REMOTE_ADDR']) . "<br>";
    echo "User-Agent: " . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . "<br>";
    echo "Nome file: " . htmlspecialchars(basename(__FILE__)) . "<br>";
}
?>