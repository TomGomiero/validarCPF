<?php
//metodo post para pegar o valor do tipo texto digitado em "name= "cpf"
$cpf = $_POST["cpf"];
$plus=0; //variavel da soma, onde foi definido o valor de zero para nao pegar lixo da memoria
$a=10; // variavel que vai ser utilizada no ciclo for de uma forma decrescente

  for( $i=0; $i<9; $i++, $a--) // ciclo for onde o valor de indice começa zero e enquanto indice for menor que nove ele roda mais uma vez
  // e ja foi inserido o comando "--" para que o ciclo rode de uma forma decrescente.
  {
    $mult = $cpf[$i] * $a; //variavel que vai receber o resultado de cada digito do cpf * 10,9,8,7,6,5,4,3,2...

    $plus += $mult; // variavel que vai somar cada resultado da multiplicação ( o comando += significa variavel recebe ela mesma + mult;)
  }
    $rest = $plus%11; // variavel que vai receber o resultado do comando acima e vao pegar o resto da divisao por 11.

    $sub = 11 - $rest; // variavel que vai subtrair o resto da divisao por 11

    // na estrutura de condiçao abaixo eu poderia ter usado o operador TENARIO onde ? significa IF e : significaria ELSE
     if($sub <2) //estrutura condional em que se o resto da divisao for menor que dois, o valor vai ser igual a zero.
     {
        print "<br> 10º dígito é 0";
         $sub = 0;
     }
     else {  // estrutura que vai printar a variavel com o resultado de resto da divisao - 11
     print "<br> 10º dígito é ".$sub;
     }
    /////////---------SEGUNDO DIGITO--------- ///////// O calculo vai seguir quase a mesma linha logica com pequenas alteraçoes

    $plus2=0;
    $a2=11;  // desta vez a variavel vai ter que rodar de 11 até 2 

  for( $i=0; $i<10; $i++, $a2--) // mesma coisa para a condiçao do indice, precisamos aumentar +1 no vetor
  {
    $mult2 = $cpf[$i] * $a2;

    $plus2 += $mult2;
  }
    $rest2 = $plus2%11;

    $sub2 = 11-$rest2;


     if($sub2 >= 10) 
     {
        echo"<br>11º dígito é 0";
         $sub2 = 0;
     }
     else {
     echo"<br>11° digito é $sub2";
     }

     if($sub == $cpf[9] && $sub2 == $cpf[10])
    echo "<h2>CPF VÁLIDO</h2>";
  else
    echo "<h2>CPF INVALIDO</h2>";
?>