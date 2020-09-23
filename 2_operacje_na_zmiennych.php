<?php
//Wersja PHP'a
echo PHP_VERSION,'<br>';
//phpinfo
// echo phpinfo();
//Interpolacja
echo 'a', 'b', 'c';//show a show b show c
//Konkatenacja
echo 'a'. 'b'. 'c';//add a+b+c show abc

$pow=2^10;
echo $pow;//1024

//operatory bitowe
//and &, or |, not ~, xor ^, <<, >>

$bin = 0b1010;
echo "<br>$bin<br>";

$bin = $bin << 2;//101000
echo $bin;

$bin =$bin >> 3;//101
echo "<br>$bin";

// porównanie
$x = 1;
$y = 1.0;
if ($x === $y)
{
    echo '$x jest równa $y<br>';
}
else
{
    echo '$x nie jest równa $y<br>';
}    
echo gettype($x); //int
echo gettype($y); //double
echo '<br>';

$x = 10;
$y = 100;

echo $x <=> $y;
echo '<hr>';

$x = 1;
$x=$x++;
echo $x; // 1
$x=++$x;
echo $x; // 2
$y=$x++;
echo $x; // 3
echo $y; // 2
$y=++$x*2-1;
echo $x; // 4
echo $y; // 7

// operatory rzutowania
// bool, float, int, string, array, object, unset

$test1 = '123abc45';
$test2 = 0;
$test3 = 20;

echo '<br>Typ danych $test1: ',gettype($test1);
$test1 = (int)$test1;
echo $test1; //123
echo '<br>Typ danych $test1: ',gettype($test1);

echo '<br>Typ danych $test2: ',gettype($test2);
$test2 = (bool)$test2;
echo $test2; //false
echo '<br>Typ danych $test2: ',gettype($test2);

echo '<br>Typ danych $test3: ',gettype($test3);
$test3 = (float)$test3;
echo $test3; //20
echo '<br>Typ danych $test3: ',gettype($test3);

//rozmiar typu int

echo PHP_INT_SIZE,'<hr>'; //8

// kontrola typu zmiennych
//is_int(), is_float(), is_string(), is_bool(), is_null()

$x=1;
$y=null;
echo is_float($x);
echo is_null($y),'<hr>';

$w;
// operator ignorowania błędów
echo @gettype($w);
