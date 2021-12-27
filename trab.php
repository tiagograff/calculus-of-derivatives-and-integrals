<?php

require 'functions.php';

//variáveis - dv1
//valor de x
$x = 2;
//potência
$y1 = 2; $y2 =-3; $y3 = 1;
//calculo de potência
$y11 = $y1 -1;
$y22 = $y2 -1;
$y33 = $y3 -1;
//contantes
$c1 = 7; $c2 = -4; $c3 = 2;

echo "dada a função $c1.(x)^$y1 + $c2.(x)^$y2 - $c3.(x)^$y3 calcule a velocidade instantânea e a aceleração em x = $x".PHP_EOL;

vazio ("");

//primeira derivada
$d1 = $c1*($y1*($x**($y1 - 1)));
$d2 = $c2*($y2*($x**($y2 - 1)));
$d3 = $c3*($y3*($x**($y3 - 1)));
//calculo:
exibeCalculo("$c1.(x)^$y1 + $c2.(x)^$y2 - $c3.(x)^$y3");
exibeCalculo("$c1.$y1(x)^$y11 + $c2.$y2(x)^$y22 - $c3.$y3(x)^$y33");
exibeCalculo("$c1.$y1($x)^$y11 + $c2.$y2($x)^$y22 - $c3.$y3($x)^$y33");

//resultado
$df = $d1 + $d2 - $d3;
exibeResposta("velocidade instantânea = $d1 + $d2 - $d3 = $df");

vazio("");

////variáveis - dv2
$cc1 = $c1*$y1;
$cc2 = $c2*$y2;
$cc3 = $c3*$y3;

$p1 = $y11 -1;
$p2 = $y22 -1;
$p3 = $y33 -1;

//segunda derivada
$ds1 = $cc1*($y11*($x**($y11 - 1)));
$ds2 = $cc2*($y22*($x**($y22 - 1)));
$ds3 = $cc3*($y33*($x**($y33 - 1)));

//calculo
exibeCalculo("$c1.$y1(x)^$y11 + $c2.$y2(x)^$y22 - $c3.$y3(x)^$y33");
exibeCalculo("$cc1.$y11(x)^$p1 + $cc2.$y22(x)^$p2 - $cc3.$y33(x)^$p3");
exibeCalculo("$cc1.$y11($x)^$p1 + $cc2.$y22($x)^$p2 - $cc3.$y33($x)^$p3");

//resultado
$dsf = $ds1 + $ds2 - $ds3;
exibeResposta("aceleração = $ds1 + $ds2 - $ds3 = $dsf");

vazio("");

echo "agora faça o processo inverso da primeira derivada (integral), assim calculando a distância percorrida em  = $xi ".PHP_EOL;

vazio("");

//variáveis - integral
$ci1 = $cc1;
$ci2 = $cc2;
$ci3 = $cc3;
$xi  = $x;
$yi1 = $y11;
$yi2 = $y22;
$yi3 = $y33;

$yif1 = $yi1 + 1;
$yif2 = $yi2 + 1;
$yif3 = $yi3 + 1;

///integral
$i11 = ($ci1/$yif1);
$i1 = $i11*(($xi)**$yif1);

$i22 = ($ci2/$yif2);
$i2 = $i22*(($xi)**$yif2);

$i33 = ($ci3/$yif3);
$i3 = $i33*(($xi)**$yif3);

//calculo
exibeCalculo("$c1.$y1(x)^$y11 + $c2.$y2(x)^$y22 - $c3.$y3(x)^$y33");
exibeCalculo("$ci1(x)^$yif1 / $yif1 + $ci2(x)^$yif2 / $yif2 - $ci3(x)^$yif3 / $yif3");
exibeCalculo("$i11(x)^$yif1 + $i22(x)^$yif2 - $i33(x)^$yif3");

//resultado
$if = $i1 + $i2 - $i3;
exibeResposta("$i1 + $i2 - $i3 = $if");