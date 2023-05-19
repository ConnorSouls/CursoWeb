
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketsRakoon</title>
    <link rel="icon" href="https://yt3.googleusercontent.com/ytc/AGIKgqM_L_75YNhA-fOb6jhS_M9mouexUF1BjJrh3DJ9dQ=s900-c-k-c0x00ffffff-no-rj">
</head>
<body>
<?php 
        $arregloCad = array(
                        0 => "tu nombre.",
                        1 => "tu apellido.",
                        2 => "la fecha de tu evento.",
                        3 => "tu artista favorito.",
                        4 => "la zona donde probablemente te roben tu cartera.",
                        5 => "cuantos boletos quieres.",
                        6 => "el lugar donde se presentarán",
                    );
        $varArreglo = array();
        $parametros = 0;
        $varArreglo[0]   = (isset ($_POST['nombre'])          &&  $_POST['nombre'] != "")?          $_POST["nombre"] : false;
        $varArreglo[1]   = (isset ($_POST['apellido'])        &&  $_POST['apellido'] != "")?        $_POST["apellido"] : false;
        $varArreglo[2]   = (isset ($_POST['fecha'])           &&  $_POST['fecha'] != "")?           $_POST["fecha"] : false;
        $varArreglo[3]   = (isset ($_POST['artista'])         &&  $_POST['artista'] != "")?         $_POST["artista"] : false;
        $varArreglo[4]   = (isset ($_POST['zona'])            &&  $_POST['zona'] != "")?            $_POST["zona"] : false;
        $varArreglo[5]   = (isset ($_POST['numboletos'])      &&  $_POST['numboletos'] != "")?      $_POST["numboletos"] : false;
        $varArreglo[6]   = (isset ($_POST['lugar'])           &&  $_POST['lugar'] != "")?           $_POST["lugar"] : false;
        //EXTRAS!!!
        $comida          = (isset ($_POST['comida'])          &&  $_POST['comida'] != "")?          $_POST["comida"] : false;
        $Vip             = (isset ($_POST['Vip'])             &&  $_POST['Vip'] != "")?             $_POST["Vip"] : false;
        $Royale          = (isset ($_POST['Royale'])          &&  $_POST['Royale'] != "")?          $_POST["Royale"] : false;
        $Estacionamiento = (isset ($_POST['Estacionamiento']) &&  $_POST['Estacionamiento'] != "")? $_POST["Estacionamiento"] : false;
        
        $imgart = $varArreglo[3];
        $lugar = $varArreglo[6];
        
        function extras( $comida, $Vip, $Royale, $Estacionamiento )
        {
            echo "<ul>";
                if ($comida)
                    echo "<li>Paquete con comida</li>"; 
                if ($Vip)
                    echo "<li>Paquete Vip</li>";
                if ($Royale) 
                    echo "<li>Autografos</li>";
                if ($Estacionamiento)  
                    echo "<li>Estacionamiento</li>";    
            echo"</ul>";
        }

        function imgart($imgart)
        {
            if($imgart == "Dua Lipa")
                echo "<img src='img/Dua.jpg'      alt='Dua Lipa' height='200'>";
            if($imgart == "Taylor Swift")
                echo "<img src='img/Taylor.jpg'   alt='Taylor Swift' height='200'>";
            if($imgart == "Billie Eilish")
                echo "<img src='img/Billie.jpg'   alt='Billie Eillish' height='200'>";
            if($imgart == "AJR")
                echo "<img src='img/AJR.jpg'      alt='AJR' height='310'>";
            if($imgart == "Artic Monkeys")
                echo "<img src='img/Monos.webp'   alt='Artic Monkeys' height='200'>";
            if($imgart == "BTS")
                echo "<img src='img/BTS.jpg'      alt='BTS' height='200'>";
            if($imgart == "Bad Bunny")
                echo "<img src='img/BadBunny.jpg' alt='Bad Bunny' height='200'>";
            if($imgart == "Harry Styles")
                echo "<img src='img/Harry.jpg'    alt='Harry Styles' height='200'>";
            if($imgart == "Travis Scott")
                echo "<img src='img/Travis.png'   alt='Travis Scott' height='200'>";
            if($imgart == "Ariana Grande")
                echo "<img src='img/Ariana.jpg'   alt='Ariana Grande' height='200'>";
        }

        function frase ($imgart)
        {
            if($imgart == "Dua Lipa")
                echo "Last night, my fantasies become so true";
            if($imgart == "Taylor Swift")
                echo "We Are Never Getting Back Together";
            if($imgart == "Billie Eilish")
                echo "What do you want from me? Why don't you run from me?";
            if($imgart == "AJR")
                echo "Let the game Begin";
            if($imgart == "Artic Monkeys")
                echo "Do I Wanna Know";
            if($imgart == "BTS")
                echo "A primera vista podría reconocerte, como si estuviéramos llamándonos el uno al otro.";
            if($imgart == "Bad Bunny")
                echo "Ya llegó tu tiburón";
            if($imgart == "Harry Styles")
                echo " No escojas a la persona que todo el mundo cree que es bella, escoge aquella que hace que tu mundo sea bello";
            if($imgart == "Travis Scott")
                echo "I got those goosebombs everytime";
            if($imgart == "Ariana Grande")
                echo "Whoever said money can't solve your problems";
        }

        function lugar($lugar){
        if($lugar == "Palacio de los Deportes" )
            echo '<img src="img/Palacio.jpg" alt="Palacio de los Deportes" height="200">';
        if($lugar == "Foro Sol")
            echo '<img src="img/Sol.jpg" alt="Foro Sol" height="200">';
        if($lugar == "Auditorio Nacional")
            echo '<img src="img/Aud.jpg" alt="Auditorio Nacional" height="200">';
        if($lugar == "Teatro Metropólitan")
            echo '<img src="img/Teatro.jpg" alt=" Teatro Metropólitan" height="200">';
        }
        
        function imp(){
            
        }

        for ($i=0; $i <= 6 ; $i++) { 
            if(!$varArreglo[$i])
            {
                echo "<span>Te falto el parámetro de : </span>".$arregloCad[$i]."<br>";
                $parametros++;
            }
        }


        if($parametros == 0)
        {
            echo"<h1>Tus Boletos</h1>";
            if ($varArreglo[5] <16)
            {
                echo "<p>Son $varArreglo[5] boletos</p>";
                for($numboletos =  1; $numboletos <= $varArreglo[5]; $numboletos++) 
                {
                    echo "
                    <table align='center' border='3' style='border-collapse: collapse;' cellpadding=30px>
                        <thead>
                            <tr>
                                <th colspan='4'> Boletos para $varArreglo[3]</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >$varArreglo[0] $varArreglo[1]</td>
                                <td>Fecha: $varArreglo[2]</td>
                                <td rowspan='3'>
                                    Extras: <br>";
                                    extras( $comida, $Vip, $Royale, $Estacionamiento);
                        echo "</td>
                                <td rowspan='3'>"; 
                                    imgart($imgart);
                                    echo "</td>
                            </tr>
                            <tr>
                                <td>$varArreglo[6]</td>
                                <td>Zona: $varArreglo[4]</td>
                            </tr>
                            <tr>
                                <td>";
                                    lugar($lugar);
                                echo "</td>
                                <td>";
                                echo '<img src="img/ZonaRakoon.jpg" alt="Zonas" height="100">';
                                echo "</td>
                            </tr>
                            <tr>
                                <td align='center' colspan='4'>";
                                frase($imgart);
                                echo"</td>                        
                            </tr>
                        </tbody>
                    </table> <br>";
                }
            }
            else
            {
                echo "<p>SON MUCHO BOLETOS, TE IMPRIMO 15 de $varArreglo[5]</p>";
                for ($numboletos =  1; $numboletos <= 15; $numboletos++)
                {
                    
                    echo "
                    <table align='center' border='3' style='border-collapse: collapse;' cellpadding=30px>
                        <thead>
                            <tr>
                                <th colspan='4'> Boletos para $varArreglo[3]</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >$varArreglo[0] $varArreglo[1]</td>
                                <td>Fecha: $varArreglo[2]</td>
                                <td rowspan='3'>
                                    Extras: <br>";
                                    extras( $comida, $Vip, $Royale, $Estacionamiento);
                        echo "</td>
                                <td rowspan='3'>"; 
                                    imgart($imgart);
                                    echo "</td>
                            </tr>
                            <tr>
                                <td>$varArreglo[6]</td>
                                <td>Zona: $varArreglo[4]</td>
                            </tr>
                            <tr>
                                <td>";
                                    lugar($lugar);
                                echo "</td>
                                <td>";
                                echo '<img src="img/ZonaRakoon.jpg" alt="Zonas" height="100">';
                                echo "</td>
                            </tr>
                            <tr>
                                <td align='center' colspan='4'>";
                                frase($imgart);
                                echo"</td>                        
                            </tr>
                        </tbody>
                    </table>";
                }
            }
        }
               
        
    ?>


</body>
</html>