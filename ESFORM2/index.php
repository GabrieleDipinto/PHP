<form action="" method="get">
    <input type="text" name="termine" placeholder="Cerca una parola">
    <input type="submit" value="Cerca">
</form>

<?php
if (isset($_GET['termine']) && $_GET['termine'] !== '') {
    $termine = htmlspecialchars($_GET['termine']);
    echo "Hai cercato: $termine";
}
?>
