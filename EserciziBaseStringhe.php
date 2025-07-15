<?php
echo "Esercizio 1: ";
echo "\n";
$nome = " Gabriele Dipinto ";
echo "Lunghezza: " . strlen($nome) . "\n";
echo "Maiuscolo: " . strtoupper($nome) . "\n";
echo "Senza spazi: '" . trim($nome) . "'\n";

echo "\n";
echo "Esercizio 2: ";
$frase = "PHP è divertente e potente";
$nuovaFrase = str_replace("divertente", "semplice", $frase);
echo "Frase modificata: $nuovaFrase\n";

echo "\n";
echo "Esercizio 3: ";
$testo = "Imparare PHP è utile e divertente";
$parole = explode(" ", $testo);
foreach ($parole as $parola) {
    echo $parola . "\n";
}

echo "\n";
echo "Esercizio 4: ";
$nomi = ["Luca", "Anna", "Marco", "Giulia", "Stefano"];
sort($nomi);
foreach ($nomi as $nome) {
    echo $nome . "\n";
}

echo "\n";
echo "Esercizio 5: ";
$studenti = [
    "Luca" => 25,
    "Anna" => 17,
    "Marco" => 30,
    "Giulia" => 15,
    "Stefano" => 18
];
foreach ($studenti as $nome => $voto) {
    if ($voto >= 18) {
        echo "$nome: $voto\n";
    }
}

echo "\n";
echo "Esercizio 6: ";
$linguaggi = "html,css,php,js";
$arrayLingue = explode(",", $linguaggi);
$arrayLingue[] = "sql";
$nuovaStringa = implode(",", $arrayLingue);
echo "Stringa modificata: $nuovaStringa\n";

echo "\n";
echo "Esercizio 7: ";
$parole = ["php", "javascript", "html", "bootstrap", "sql"];
$conteggio = 0;
foreach ($parole as $p) {
    if (strlen($p) > 5) {
        $conteggio++;
    }
}
echo "Parole con più di 5 caratteri: $conteggio\n";

echo "\n";
echo "Esercizio 8: ";
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$unito = array_merge($array1, $array2);
print_r($unito);

echo "\n";
echo "Esercizio 9: ";
$frutti = ["mela", "banana", "kiwi"];
$cerca = "caffe";
if (in_array($cerca, $frutti)) {
    echo "$cerca è presente nell'array.\n";
} else {
    echo "$cerca non è presente nell'array.\n";
}

echo "\n";
echo "Esercizio 10: ";
$testo = "Programmare è bello";
$caratteri = str_split(strtolower($testo));
$vocali = ['a', 'e', 'i', 'o', 'u'];
foreach ($caratteri as $c) {
    if (in_array($c, $vocali)) {
        echo $c . " ";
    }
}
echo "\n";

?>
