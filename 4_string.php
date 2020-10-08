<?php
$text = <<<T
    zsk - Zespol
    Szkol
    Komunikacji<br>
T;
echo $text;
echo nl2br($text);

$name = "jANUsz";
echo "$name<br>";

// zamiana na male litery
echo strtolower($name);
echo "<br>";
// zamiana na duze litery
echo strtoupper($name);

// zamiana pierwszej litery na duza
$name = "jANUsz nowaK";
echo '<br>', ucfirst($name);
echo '<br>', ucwords($name);

$name = <<<T
janusz
T;
echo '<br>', ucfirst($name);

$lorem = <<<LOREM
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quia enim natus quis reprehenderit aliquid consectetur. Consequatur nihil, sequi expedita accusantium distinctio repellendus laboriosam enim laudantium, ratione tempore temporibus inventore.<br>
LOREM;

echo $lorem;
echo wordwrap($lorem, 40, 'test<br>');
echo wordwrap($lorem, 40, '<hr>');
// czyszczenie zawartosci bufora
ob_clean();









?>

