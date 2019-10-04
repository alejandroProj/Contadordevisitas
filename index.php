<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador de visitas</title>
    <link rel="php" href="index.php">
    <link rel="stylesheet" href="js.java">
<body>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135623511-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135623511-1');
</script>


<?php
$contador =0;
$archivo = "contador.txt";
$contador =0;

$fp = fopen($archivo,"r");
$contador = fgets($fp,26);
fclose($fp);

$contador=$contador+1;

$fp = fopen($archivo,"w+");
fwrite($fp,$contador,26);
fclose($fp);



echo"esta pagina ha sido visitada \n ".$contador ."veces";

//link del 1 al 9
if ($contador <= 99)
{   

    echo " <br> Estas visitando el link #1"; 

//redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 


// pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #1";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);

}

if ($contador >= 100 and $contador < 200)
{  
    echo " <br> Estas visitando el link #2";

//redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #2";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);     
}

if ($contador >= 200 and $contador < 300 )
{   
    echo " <br> Estas visitando el link #3"; 

//redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #3";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 300 and $contador < 400)
{
    echo " <br> Estas visitando el link #4"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #4";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 400 and $contador < 500)
{
    echo " <br> Estas visitando el link #5";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #5";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 500 and $contador < 600)
{
    echo " <br> Estas visitando el link #6";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #6";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 600 and $contador < 700)
{
    echo " <br> Estas visitando el link #7"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #7";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 700 and $contador < 800)
{
    echo " <br> Estas visitando el link #8"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #8";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 800 and $contador < 900)
{
    echo " <br> Estas visitando el link #9"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #9";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 10 al 19 
if ($contador >= 900 and $contador < 1000)
{
    echo " <br> Estas visitando el link #10"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #10";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 1000 and $contador < 1100)
{   
    echo " <br> Estas visitando el link #11";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #11";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 1100 and $contador < 1200)
{  
    echo " <br> Estas visitando el link #12";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #12";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 1200 and $contador < 1300 )
{   
    echo " <br> Estas visitando el link #13"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #13";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 1300 and $contador < 1400)
{
    echo " <br> Estas visitando el link #14"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #14";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 1400 and $contador < 1500)
{
    echo " <br> Estas visitando el link #15"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #15";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 1500 and $contador < 1600)
{
    echo " <br> Estas visitando el link #16"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #16";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 1600 and $contador < 1700)
{
    echo " <br> Estas visitando el link #17"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #17";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 1700 and $contador < 1800)
{
    echo " <br> Estas visitando el link #18";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #18";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 1800 and $contador < 1900)
{
    echo " <br> Estas visitando el link #19"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #19";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 20 al 29 
if ($contador >= 1900 and $contador < 2000)
{
    echo " <br> Estas visitando el link #20"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #20";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 2000 and $contador < 2100)
{
    echo " <br> Estas visitando el link #21"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #21";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 2100 and $contador < 2200)
{   
    echo " <br> Estas visitando el link #22"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #22";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 2200 and $contador < 2300)
{  
    echo " <br> Estas visitando el link #23";
    
    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #23";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 2300 and $contador < 2400 )
{   
    echo " <br> Estas visitando el link #24"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #24";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 2400 and $contador < 2500)
{
    echo " <br> Estas visitando el link #25"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #25";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 2500 and $contador < 2600)
{
    echo " <br> Estas visitando el link #26"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #26";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 2600 and $contador < 2700)
{
    echo " <br> Estas visitando el link #27"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #27";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 2700 and $contador < 2800)
{
    echo " <br> Estas visitando el link #28";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #28";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 2800 and $contador < 2900)
{
    echo " <br> Estas visitando el link #29"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #29";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 30 al 39 
if ($contador >= 2900 and $contador < 3000)
{
    echo " <br> Estas visitando el link #30";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #30";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 3000 and $contador < 3100)
{
    echo " <br> Estas visitando el link #31"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #31";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 3100 and $contador < 3200)
{
    echo " <br> Estas visitando el link #32"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #32";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 3200 and $contador < 3300)
{   
    echo " <br> Estas visitando el link #33"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #33";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 3300 and $contador < 3400)
{  
    echo " <br> Estas visitando el link #34";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #34";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 3400 and $contador < 3500 )
{   
    echo " <br> Estas visitando el link #35"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #35";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 3500 and $contador < 3600)
{
    echo " <br> Estas visitando el link #36"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #36";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 3600 and $contador < 3700)
{
    echo " <br> Estas visitando el link #37"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #37";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 3700 and $contador < 3800)
{
    echo " <br> Estas visitando el link #38"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #38";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 3800 and $contador < 3900)
{
    echo " <br> Estas visitando el link #39"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #39";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 40 al 49
if ($contador >= 3900 and $contador < 4000)
{
    echo " <br> Estas visitando el link #40"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #40";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

 
if ($contador >= 4000 and $contador < 4100)
{
    echo " <br> Estas visitando el link #41"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #41";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 4100 and $contador < 4200)
{
    echo " <br> Estas visitando el link #42"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #42";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 4200 and $contador < 4300)
{   
    echo " <br> Estas visitando el link #43"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #43";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 4300 and $contador < 4400)
{  
    echo " <br> Estas visitando el link #44";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #44";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 4400 and $contador < 4500 )
{   
    echo " <br> Estas visitando el link #45"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #45";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 4500 and $contador < 4600)
{
    echo " <br> Estas visitando el link #46"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #46";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 4600 and $contador < 4700)
{
    echo " <br> Estas visitando el link #47"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #47";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 4700 and $contador < 4800)
{
    echo " <br> Estas visitando el link #48"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #48";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 4800 and $contador < 4900)
{
    echo " <br> Estas visitando el link #49"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #49";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 50 al 59
if ($contador >= 4900 and $contador < 5000)
{
    echo " <br> Estas visitando el link #50"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #50";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

 
if ($contador >= 5000 and $contador < 5100)
{
    echo " <br> Estas visitando el link #51"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #51";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 5100 and $contador < 5200)
{
    echo " <br> Estas visitando el link #52"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #52";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 5200 and $contador < 5300)
{   
    echo " <br> Estas visitando el link #53"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #53";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 5300 and $contador < 5400)
{  
    echo " <br> Estas visitando el link #54";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #54";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 5400 and $contador < 5500 )
{   
    echo " <br> Estas visitando el link #55"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #55";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 5500 and $contador < 5600)
{
    echo " <br> Estas visitando el link #56"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #56";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 5600 and $contador < 5700)
{
    echo " <br> Estas visitando el link #57"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #57";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 5700 and $contador < 5800)
{
    echo " <br> Estas visitando el link #58"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #58";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 5800 and $contador < 5900)
{
    echo " <br> Estas visitando el link #59"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #59";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 60 al 69 
if ($contador >= 5900 and $contador < 6000)
{
    echo " <br> Estas visitando el link #60"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #60";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 6000 and $contador < 6100)
{
    echo " <br> Estas visitando el link #61"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #61";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 6100 and $contador < 6200)
{
    echo " <br> Estas visitando el link #62"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #62";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 6200 and $contador < 6300)
{   
    echo " <br> Estas visitando el link #63"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #63";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 6300 and $contador < 6400)
{  
    echo " <br> Estas visitando el link #64";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #64";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 6400 and $contador < 6500 )
{   
    echo " <br> Estas visitando el link #65"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #65";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 6500 and $contador < 6600)
{
    echo " <br> Estas visitando el link #66"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #66";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 6600 and $contador < 6700)
{
    echo " <br> Estas visitando el link #67"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #67";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 6700 and $contador < 6800)
{
    echo " <br> Estas visitando el link #68"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #68";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 6800 and $contador < 6900)
{
    echo " <br> Estas visitando el link #69"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #69";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 70 al 79 
if ($contador >= 6900 and $contador < 7000)
{
    echo " <br> Estas visitando el link #70"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #70";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}


if ($contador >= 7000 and $contador < 7100)
{
    echo " <br> Estas visitando el link #71"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #71";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 7100 and $contador < 7200)
{
    echo " <br> Estas visitando el link #72"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #72";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 7200 and $contador < 7300)
{   
    echo " <br> Estas visitando el link #73"; 

//redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #73";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 7300 and $contador < 7400)
{  
    echo " <br> Estas visitando el link #74";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #74";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 7400 and $contador < 7500 )
{   
    echo " <br> Estas visitando el link #75"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #75";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 7500 and $contador < 7600)
{
    echo " <br> Estas visitando el link #76"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #76";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 7600 and $contador < 7700)
{
    echo " <br> Estas visitando el link #77"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #77";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 7700 and $contador < 7800)
{
    echo " <br> Estas visitando el link #78"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #78";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 7800 and $contador < 7900)
{
    echo " <br> Estas visitando el link #79"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #79";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 80 al 89
if ($contador >= 7900 and $contador < 8000)
{
    echo " <br> Estas visitando el link #80"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #80";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

 
if ($contador >= 8000 and $contador < 8100)
{
    echo " <br> Estas visitando el link #81";
    
    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #81";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 8100 and $contador < 8200)
{
    echo " <br> Estas visitando el link #82"; 

//redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #82";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 8200 and $contador < 8300)
{   
    echo " <br> Estas visitando el link #83"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #83";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 8300 and $contador < 8400)
{  
    echo " <br> Estas visitando el link #84";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #84";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 8400 and $contador < 8500 )
{   
    echo " <br> Estas visitando el link #85"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #85";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 8500 and $contador < 8600)
{
    echo " <br> Estas visitando el link #86";
    
    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #86";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 8600 and $contador < 8700)
{
    echo " <br> Estas visitando el link #87"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #87";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 8700 and $contador < 8800)
{
    echo " <br> Estas visitando el link #88"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #88";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 8800 and $contador < 8900)
{
    echo " <br> Estas visitando el link #89"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #89";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
//link del 90 al 100 
if ($contador >= 8900 and $contador < 9000)
{
    echo " <br> Estas visitando el link #90"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #90";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}


if ($contador >= 9000 and $contador < 9100)
{
    echo " <br> Estas visitando el link #91"; 
    
    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #91";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 9100 and $contador < 9200)
{
    echo " <br> Estas visitando el link #92";
    
    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #92";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 9200 and $contador < 9300)
{   
    echo " <br> Estas visitando el link #93";
    
    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #93";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 9300 and $contador < 9400)
{  
    echo " <br> Estas visitando el link #94";

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 
    
    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #94";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
    
}

if ($contador >= 9400 and $contador < 9500 )
{   
    echo " <br> Estas visitando el link #95"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #95";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 9500 and $contador < 9600)
{
    echo " <br> Estas visitando el link #96"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #96";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 9600 and $contador < 9700)
{
    echo " <br> Estas visitando el link #97"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #97";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 9700 and $contador < 9800)
{
    echo " <br> Estas visitando el link #98"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #98";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 9800 and $contador < 9900)
{
    echo " <br> Estas visitando el link #99"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #99";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 9900 and $contador < 10000)
{
    echo " <br> Estas visitando el link #100"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="Estas visitando el link #100";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}

if ($contador >= 10000)
{
    echo " <br> se paso de los 100 link"; 

    //redireccionamiento 
header("Status: 301 Moved Permanently");
header("Location: https://adf.ly/publisher");
exit; 

    // pasando el link que se esta visitando en el archivo de nombre link en proceso
    $archivo = "Linkenproceso.txt";
    $fp = fopen($archivo,"r");
    $contador = fgets($fp,26);
    fclose($fp);
    $contador="se paso de los 100 link";
    $fp = fopen($archivo,"w+");
    fwrite($fp,$contador,26);
    fclose($fp);
}
?>
</body>
</head>
</html>
