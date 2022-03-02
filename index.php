<?php

?>
<html>
<head>
  <meta name="description" content="QR Code scanner" />
  <meta name="keywords" content="qrcode,qr code,scanner,barcode,javascript" />
  <meta name="language" content="English" />
  <meta name="copyright" content="Lazar Laszlo (c) 2011" />
  <meta name="Revisit-After" content="1 Days"/>
  <meta name="robots" content="index, follow"/>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Web QR</title>

<style type="text/css">
body{
    width:100%;
    text-align:center;
}
img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
	width: 100%;
}
#header{
    background:white;
    margin-bottom:15px;
}
#mainbody{
    background: white;
    width:100%;
	display:none;
}
#footer{
    background:white;
}
#v{
    width:320px;
    height:240px;
}
#qr-canvas{
    display:none;
}
#qrfile{
    width:500px;
    height:440px;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
	margin-left:35px;
	margin-right:35px;
	padding-top:10px;
	padding-bottom:10px;
	border-radius:20px;
}
.selector{
    margin:0;
    padding:0;
    cursor:pointer;
    margin-bottom:-5px;
}
#outdiv
{
    width:320px;
    height:240px;
	border: solid;
	border-width: 3px 3px 3px 3px;
}
#result{
    border: solid;
	border-width: 1px 1px 1px 1px;
	padding:20px;
	width:70%;
}

ul{
    margin-bottom:0;
    margin-right:40px;
}
li{
    display:inline;
    padding-right: 0.5em;
    padding-left: 0.5em;
    font-weight: bold;
    border-right: 1px solid #333333;
}
li a{
    text-decoration: none;
    color: black;
}

#footer a{
	color: black;
}
.tsel{
    padding:0;
}

</style>

<script type="text/javascript" src="llqrcode.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="webqr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24451557-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
////ajax

</script>

</head>

<body>
   
<div id="main">
<div id="header">
<div style="position:relative;top:+20px;left:0px;"><g:plusone size="medium"></g:plusone></div>

</div>
<div id="mainbody">
<table class="tsel" border="0" width="100%">
<tr>
<td valign="top" align="center" width="75%">
<table class="tsel" border="0">
<tr>
<td><img class="selector" id="webcamimg" src="vid.png" onclick="setwebcam()" align="left" /></td>
<td><img class="selector" id="qrimg" src="cam.png" onclick="setimg()" align="right"/></td></tr>
<tr><td colspan="2" align="center">
<div id="outdiv">
</div>
<div id="div1" style="display:none;"></div>
</td></tr>
</table>
</td>
</tr>
<tr><td colspan="3" align="center">
<img src="down.png"/>
</td></tr>
<tr><td colspan="3" align="center">

<div id="result" style="display:none;"></div>

</td></tr>
</table>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- webqr_2016 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8418802408648518"
     data-ad-slot="2527990541"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});


</script>

</div>&nbsp;
</div>
<canvas id="qr-canvas" width="800" height="600"></canvas>
<script type="text/javascript">load();</script>
<table width="100%" style="margin: -17rem 2rem 0rem 5rem;">
    <?php
    require("conexion.php");
      $consulta="SELECT a.dni, a.fechaMarcacion, a.HoraInicio, a.HoraFin, d.apellidos, d.nombre from asistencia_docente a
      INNER JOIN docente d ON a.dni= d.dni ORDER BY a.fechaMarcacion, a.HoraInicio desc LIMIT 1;  ";
      $queEmp = mysqli_query($con,$consulta);
      $total = $queEmp->num_rows;
      if($total > 0){
        while($row = mysqli_fetch_array($queEmp)){
            $dni=$row[0];
            $apellido=$row[4];
            $nombre=$row[5];
            $fecha=$row[1];
            $horaEntrada = $row[2];
            $horaSalida= $row[3];
        }
      } else{
        $dni='';
        $apellido='';
        $nombre='';
        $fecha='';
        $horaEntrada = '';
        $horaSalida= '';
      }
     
    ?>
     <tr>
        <td>DNI: <?=$dni?></td>
        <td>Nombre : <?=$apellido?> <?=$nombre?></td>
     </tr>
     <tr>
        <td>Fecha: <?=$fecha?></td>
        <td></td>
     </tr>
     <tr>
        <td>Hora de Entrada : <?=$horaEntrada?></td>
        <td>Hora de Salida : <?=$horaSalida?></td>
     </tr>
   </table>


</body>

</html>

