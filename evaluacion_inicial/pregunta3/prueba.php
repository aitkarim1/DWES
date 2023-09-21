<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_GET['numero1'];

        if($n1 > 7 || $n1 < 1) {
            echo "Debes Introducir un numero entre 1 y 7 <br>";
            echo '<a href="prueba.html" >Plsa aqui para volver</a>';
        }else {
        switch($n1) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miercoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sabado <br>";
                echo "Festivo";
                break;
            case 7:
                echo "Domingo <br>";
                echo "Festivo";
                break;
            }
        }

    ?>
</body>
</html>