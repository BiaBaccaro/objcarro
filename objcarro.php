<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("classeobj.php");

        $carro0 = new carro();

        $carro0->ano        = "2012";
        $carro0->modelo     ="C4 VTR";
        $carro0->cor        ="Preto";
        $carro0->fabricante ="Citroen";
        $carro0->status     ="Disponível";

        $carro1 = new carro();

        $carro1->ano        = "2014";
        $carro1->modelo     ="Corcel 2";
        $carro1->cor        ="Amarelo";
        $carro1->fabricante ="Ford";
        $carro1->status     ="Disponível";

        $carro2 = new carro();

        $carro2->ano        = "2014";
        $carro2->modelo     ="Série 3";
        $carro2->cor        ="Prata";
        $carro2->fabricante ="Bmw";
        $carro2->status     ="Disponível";

        $carro3 = new carro();

        $carro3->ano        = "2007";
        $carro3->modelo     ="GranTurismo";
        $carro3->cor        ="Verde";
        $carro3->fabricante ="Maserati";
        $carro3->status     ="Disponível";

        $carro4 = new carro();

        $carro4->ano        = "2019";
        $carro4->modelo     ="Roma";
        $carro4->cor        ="Vermelha";
        $carro4->fabricante ="Ferrari";
        $carro4->status     ="Disponível";

        $carro5 = new carro();

        $carro5->ano        = "2011";
        $carro5->modelo     ="Aventador";
        $carro5->cor        ="Azul";
        $carro5->fabricante ="Lamborghini";
        $carro5->status     ="Disponível";


        echo "Carro". $carro0->status . ": <br/><br/>";
        echo "Fabricante do carro: ". $carro0->fabricante . "<br />
            Modelo: ". $carro0->modelo . "<br />
            de Cor: ". $carro0->cor . "<br />
            Ano: ". $carro0->ano . "<br /> <hr>";


        echo "Carro". $carro1->status . ": <br/><br/>";
        echo "Fabricante do carro: ". $carro1->fabricante . "<br />
            Modelo: ". $carro1->modelo . "<br />
            de Cor: ". $carro1->cor . "<br />
            Ano: ". $carro1->ano . "<br /> <hr>";

        
        echo "Carro". $carro2->status . ": <br/><br/>";
        echo "Fabricante do carro: ". $carro2->fabricante . "<br />
            Modelo: ". $carro2->modelo . "<br />
            de Cor: ". $carro2->cor . "<br />
            Ano: ". $carro2->ano . "<br /> <hr>";


        echo "Carro". $carro3->status . ": <br/><br/>";
        echo "Fabricante do carro: ". $carro3->fabricante . "<br />
            Modelo: ". $carro3->modelo . "<br />
            de Cor: ". $carro3->cor . "<br />
            Ano: ". $carro3->ano . "<br /> <hr>";


        echo "Carro". $carro4->status . ": <br/><br/>";
        echo "Fabricante do carro: ". $carro4->fabricante . "<br />
            Modelo: ". $carro4->modelo . "<br />
            de Cor: ". $carro4->cor . "<br />
            Ano: ". $carro4->ano . "<br /> <hr>";
            

        echo "Carro". $carro5->status . ": <br/><br/>";
        echo "Fabricante do carro: ". $carro5->fabricante . "<br />
            Modelo: ". $carro5->modelo . "<br />
            de Cor: ". $carro5->cor . "<br />
            Ano: ". $carro5->ano . "<br /> <hr>";

    ?>
</body>
</html>