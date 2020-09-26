<?php

//no 1
function noSatu($satu)
{
    for($c=1;$c<=$satu;$c++)
    {
        if($c==4)
        {
            echo "";
        }elseif($c==5)
        {
            echo "";
        }elseif($c==6)
        {
            echo "";
        }elseif($c==7)
        {
            echo "";
        }else{
            echo $c . "\t";
        }
    }
}
noSatu(10);

echo PHP_EOL;

//no 2

function noDua($dua)
{
    for($d=5;$d>=$dua;$d--)
    {
        if($d<3)
        {
            echo "*\t";
        }else{
            echo $d . "\t";
        }
    }
}

noDua(1);

echo PHP_EOL;

// no 3
function noTiga($tiga)
{
    for($e=1;$e<=$tiga;$e++)
    {
        if($e%2!=0)
        {
            echo $e. "a\t";
        }else{
            echo $e. "b\t";
        }
    }
}

noTiga(4);

echo PHP_EOL;

// no 4

function noEmpat($empat)
{
    for($f=1;$f<=$empat;$f++)
    {
        if($f<=3 || $f>6)
        {
            echo $f . "\t";
        }else
        {
            echo "A\t";
        }
    }
}

noEmpat(7);


echo PHP_EOL;

//no 5

function noLima($lima)
{
    for($g=4;$g>=$lima;$g--)
    {
        if($g==2)
        {
            echo "A\t";
        }elseif($g==0)
        {
            echo "A\t";
        }else{
            echo $g . "\t";
        }
    }
}

noLima(0);

echo PHP_EOL;

//no 6

function noEnam()
{
    for($a=0;$a<=4;$a++)
    {
        if($a<2)
        {
            echo "A\t";
        }else{
            echo $a . "\t";
        }
    }
}
noEnam();

echo PHP_EOL;

// $b=0;

// while($b<=4)
// {
//     if($b<2)
//     {
//         echo "A\t";
//     }else
//     {
//         echo $b . "\t";
//     }

//     $b++;
// }
