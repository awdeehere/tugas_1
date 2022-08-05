<?php
class animal
{
        public $jumlah_kaki, $bisa_terbang;
}

class kucing extends animal
{
    function bersuara()
    {
        return "meow";
    }
}

class bebek extends animal
{
    function bersuara()
    {
        return "kwekkwek";
    }
}

class ayam extends animal
{
    function bersuara()
    {
        return "kukuruyukk";
    }
}

class sapi extends animal
{
    function bersuara()
    {
        return "mooo";
    }
}

echo "Animal <br>";
echo "<hr>";

// kucing
$woopy = new kucing;
$woopy->jumlah_kaki = 4;
$woopy->bisa_terbang = "tidak bisa terbang";

echo "woopy adalah kucing <br>";
echo "punya kaki sebanyak:" . $woopy->jumlah_kaki . "<br>";
echo $woopy->bisa_terbang . "<br>";
echo "suaranya: " . $woopy->bersuara() . "<br>";

echo "<hr>";

// bebek
$ruru = new bebek;
$ruru->jumlah_kaki = 2;
$ruru->bisa_terbang = "bisa terbang";

echo "ruru adalah bebek <br>";
echo "punya kaki sebanyak:" . $ruru->jumlah_kaki . "<br>";
echo $ruru->bisa_terbang . "<br>";
echo "suaranya: " . $ruru->bersuara() . "<br>";

echo "<hr>";

// ayam
$lawoo = new ayam;
$lawoo->jumlah_kaki = 2;
$lawoo->bisa_terbang = "bisa terbang";

echo "lawoo adalah ayam <br>";
echo "punya kaki sebanyak:" . $lawoo->jumlah_kaki . "<br>";
echo $lawoo->bisa_terbang . "<br>";
echo "suaranya: " . $lawoo->bersuara() . "<br>";

echo "<hr>";

// sapi
$som = new sapi;
$som->jumlah_kaki = 4;
$som->bisa_terbang = "tidak bisa terbang";

echo "som adalah sapi <br>";
echo "punya kaki sebanyak:" . $som->jumlah_kaki . "<br>";
echo $som->bisa_terbang . "<br>";
echo "suaranya: " . $som->bersuara() . "<br>";

echo "<hr>";
