<?php

class animal
{
    public $jumlah_kaki, $bisa_terbang;
}

class kambing extends animal
{
    function bersuara()
    {
        return "mmbbeekk";
    }
}

class sapi extends animal
{
    function bersuara()
    {
        return "mooooooo";
    }
}

class elang extends animal
{
    function bersuara()
    {
        return "miip";
    }
}

class  serigala extends animal
{
    function bersuara()
    {
        return "Aauuuuuu";
    }
}

echo "Animal <br>";
echo "<hr>";
// kambing
$joni = new kambing;
$joni->jumlah_kaki = 4;
$joni->bisa_terbang = "tidak bisa terbang";

echo "joni adalah kambing <br>";
echo "punya kaki sebanyak:" . $joni->jumlah_kaki . "<br>";
echo $joni->bisa_terbang . "<br>";
echo "suaranya: " . $joni->bersuara() . "<br>";

echo "<hr>";

// sapi
$erwin = new sapi;
$erwin->jumlah_kaki = 4;
$erwin->bisa_terbang = "tidak bisa terbang";

echo "erwin adalah sapi <br>";
echo "punya kaki sebanyak:" . $erwin->jumlah_kaki . "<br>";
echo $erwin->bisa_terbang . "<br>";
echo "suaranya: " . $erwin->bersuara() . "<br>";

echo "<hr>";

// elang
$siti = new elang;
$siti->jumlah_kaki = 2;
$siti->bisa_terbang = "bisa terbang";

echo "siti adalah elang <br>";
echo "punya kaki sebanyak:" . $siti->jumlah_kaki . "<br>";
echo $siti->bisa_terbang . "<br>";
echo "suaranya: " . $siti->bersuara() . "<br>";

echo "<hr>";

// serigala
$odin = new serigala;
$odin->jumlah_kaki = 4;
$odin->bisa_terbang = " tidak bisa terbang";

echo "odin adalah serigala <br>";
echo "punya kaki sebanyak:" . $odin->jumlah_kaki . "<br>";
echo $odin->bisa_terbang . "<br>";
echo "suaranya: " . $odin->bersuara() . "<br>";

echo "<hr>";