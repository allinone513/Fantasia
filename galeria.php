<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Imágenes dinámicas de una carpeta en php</title>
</head>

<body>

<?php

 $directory="img/";
    $dirint = dir($directory);

    while (($archivo = $dirint->read()) != false)
    {
        if (strpos($archivo,'jpg') || strpos($archivo,'jpeg')){
            $image = $directory. $archivo;
            echo'<img src='.$image. '>';
        }
    }
    $dirint->close();

?>

</body>
</html>