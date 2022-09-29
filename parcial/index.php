<?php
$ID = $_get["id"];
$nombre = $_get["nombre"];
$apellido=$_get["apellido"];
$calificacion=$_get["calificacion",rand (0,100)];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabla de 10 estudiantes</title>
</head>
<body>
    
    <div class="container">
        <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">calificación</th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i<=10; $i++){
                $aleatorio = rand(0,100);
                $color="";
                if ($aleatorio >=91)
                $color="text-success";
                elseif ($aleatorio <=90 && $aleatorio >=81)
                $color="text-info";
                elseif ($aleatorio <=80 && $aleatorio >=71)
                $color="text-secondary";
                elseif ($aleatorio <=70 && $aleatorio >=61)
                $color="ext-warning";
                elseif ($aleatorio <=60 )
                $color="text-danger";

            } 
            ?>        
                <tr>
                    <th scope="row"> 1</th>
                    <td>Micaela</td>
                    <td>Guzman</td>
                    <td> <?php echo $aleatorio $color    ?> </td>
                </tr>
                
                <tr>
                    <th scope="row">2</th>
                    <td>Mara</td>
                    <td>Lourdes</td>
                    <td><?php echo $aleatorio $color    ?></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Lourdes</td>
                    <td>Carnero</td>
                    <td><?php echo $aleatorio $color   ?></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Leo</td>
                    <td>García</td>
                    <td><?php echo$aleatorio $color   ?></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Geovany</td>
                    <td>Legall</td>
                    <td><?php echo $aleatorio $color   ?></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Zuleyka</td>
                    <td> Legall</td>
                    <td> <?php echo $aleatorio $color   ?></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Gustavo</td>
                    <td>Medina</td>
                    <td><?php echo $aleatorio $color    ?></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Ijenz</td>
                    <td>Navarro</td>
                    <td><?php echo $aleatorio $color   ?></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Angel</td>
                    <td>Mendieta</td>
                    <td><?php echo $aleatorio $color   ?></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Destri</td>
                    <td>Llanos</td>
                    <td><?php echo $aleatorio $color   ?></td>
                </tr>
                
            </tbody>
        </table>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>