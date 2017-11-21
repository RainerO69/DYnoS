<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 15px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de las divs, en lugar de en las divs propiamente dichas, elimina todas las matemáticas de modelo de cuadro. Una div anidada con relleno lateral también puede usarse como método alternativo. */
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}

/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}

/* ~~ este contenedor de anchura fija rodea a las demás divs ~~ */
.container {
	width: 960px;
	background-color: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño */
}

/* ~~ no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado ~~ */
.header {
	background-color: #ADB96E;
}

/* ~~ Estas son las columnas para el diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de las divs. Los elementos situados dentro de estas divs tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

2) No se asigna margen a las columnas, ya que todas ellas son flotantes. Si es preciso añadir un margen, evite colocarlo en el lado hacia el que se produce la flotación (por ejemplo: un margen derecho en una div configurada para flotar hacia la derecha). En muchas ocasiones, puede usarse relleno como alternativa. En el caso de divs para las que deba incumplirse esta regla, deberá añadir una declaración "display:inline" a la regla de la div para evitar un error que provoca que algunas versiones de Internet Explorer dupliquen el margen.

3) Dado que las clases se pueden usar varias veces en un documento (y que también se pueden aplicar varias clases a un elemento), se ha asignado a las columnas nombres de clases en lugar de ID. Por ejemplo, dos divs de barra lateral podrían apilarse si fuera necesario. Si lo prefiere, éstas pueden cambiarse a ID fácilmente, siempre y cuando las utilice una sola vez por documento.

4) Si prefiere que la navegación esté a la derecha en lugar de a la izquierda, simplemente haga que estas columnas floten en dirección opuesta (todas a la derecha en lugar de todas a la izquierda) y éstas se representarán en orden inverso. No es necesario mover las divs por el código fuente HTML.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 780px;
	float: left;
}

/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de párrafo incluida más arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangría. Estos pueden ajustarse como se desee. */
}

/* ~~ Los estilos de lista de navegación (pueden eliminarse si opta por usar un menú desplegable predefinido como el de Spry) ~~ */
ul.nav {
	list-style: none; /* esto elimina el marcador de lista */
	border-top: 1px solid #666; /* esto crea el borde superior de los vínculos (los demás se sitúan usando un borde inferior en el LI) */
	margin-bottom: 15px; /* esto crea el espacio entre la navegación en el contenido situado debajo */
}
ul.nav li {
	border-bottom: 1px solid #666; /* esto crea la separación de los botones */
}
ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */
	width: 160px;  /*esta anchura hace que se pueda hacer clic en todo el botón para IE6. Puede eliminarse si no es necesario proporcionar compatibilidad con IE6. Calcule la anchura adecuada restando el relleno de este vínculo de la anchura del contenedor de barra lateral. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	background-color: #CCC49F;
	position: relative;/* esto da a IE6 hasLayout para borrar correctamente */
	clear: both; /* esta propiedad de borrado fuerza a .container a conocer dónde terminan las columnas y a contenerlas */
}

/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
</head>

<body background="../f.jpg">

<div class="container">
  <div class="header"><a href="#"><img src="../1798093_337672859690676_395176079600704672_n.jpg" alt="Insertar logotipo aquí" name="Insert_logo" width="957" height="226" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a> 
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="paranormal1.html">index</a></li>
      <li></li>
    </ul>
    <p><img src="../da1299a8a93f.jpg" width="157" height="305" /><img src="../da1299a8a93f.jpg" alt="" width="157" height="305" /><img src="../da1299a8a93f.jpg" alt="" width="157" height="305" /><img src="../da1299a8a93f.jpg" alt="" width="157" height="305" /></p>
  </div>
  <div class="content">
    <h1>Historias de la comunidad</h1>
    <h3>1. Ochate, el pueblo maldito</h3>
    <p>En el corazón del Condado de Treviño hace mucho tiempo que los caminos se perdieron en Ochate. Caminando a pie por el campo se llega a un pueblo abandonado en el que los muchos aseguran haber vivido distintos fenómenos paranormales. La torre de San Miguel es de lo poco que queda en esta población en la que la Historia se cebó de epidemias, desapariciones y muertes inexplicables. Tras su abandono, ha sido pasto de numerosas psicofonías y relatos dignos de una película de terror.</p>
    <h3>2. Bélmez y las caras misteriosas</h3>
    <p>En la casa de la ya fallecida María Gómez Cámara en Bélmez de la Moraleda (Jaen) está la que para muchos es &ldquo;el lugar más encantado de España&rdquo;. Para otros es un gran fraude, pero aún nadie ha dado con la clave de las distintas caras que se han reflejado en suelos y paredes de la vivienda de la Calle Real número 5 que ha sido estudiada por científicos y parapsicólogos de todo el mundo. Ya sean reflejos misteriosos de personas que ya no existen o &ldquo;teleplastias&rdquo;, la historia de las caras de Bélmez es realmente inquietante. Durante décadas, incluidos períodos en los que estuvo precintada y cerrada a cal y canto, no dejaron de aparecer rostros una y otra vez.</p>
    <h3>3. Belchite y una guerra civil infinita</h3>
    <p>En la provincia de Zaragoza en el pueblo abandonado de Belchite resuenan todavía tambores de guerra, concretamente de la Guerra Civil española. En esta localidad, que conserva los desperfectos surgidos por los bombardeos y la metralla de una de las batallas más cruentas que se vivieron en aquella época, hay quien asegura se escuchan aún los sonidos de los aviones, los misiles en su eterno silbido y las voces de quienes desaparecieron de la faz de la Tierra. Belchite ha sido objeto de estudios y psicofonías e incluso a más de una cadena de televisión se le han colado ruidos en sus emisiones sin que hubiese explicación alguna. O sí…</p>
    <h3>4. El Parador de Cardona y la habitación 712</h3>
    <p>Resulta raro que la gente no quiera hospedarse en la habitación 712 del Parador de Cardona, un antiguo castillo que funciona como hotel. Quizás sea porque han sido constantes las apariciones en este cuarto del que se dice vagan los espíritus de antiguos moradores de un fortín que sirvió de cárcel y centro de tortura en la Edad Media. Salvo que alguien pida expresamente alojarse en esta misteriosa habitación, los responsables del hotel nunca la ofrecen.</p>
    <h3>5. El Hospital del Tórax de Terrassa</h3>
    <p>Un antiguo hospital en la localidad barcelonesa de Terrassa que sirvió para acoger a pacientes con enfermedades respiratorias entre 1952 y 1997 cuenta no sólo con apariciones y fenómenos inexplicables sino con datos demoledores. Y es que la prensa de la época ya hablaba de uno de los hospitales con mayor índice de suicidios de todo el país, con pacientes que sufrían una psicosis incurable que les hacía arrojarse al vacío desde la última planta.<!-- end .content --></p>
  </div>
  <div class="footer">
    <p>  -----------------------------------------<a href="face"><img src="../F141011YS022.jpg" width="65" height="65" /></a>   <img src="../4e44224af7f07251d3136d7ca2097175.jpg" width="65" height="65" /> <img src="../WhatsApp-Image.jpg" width="65" height="65" /> <img src="../1f6115c160dcaf6393958e4f69ed8f17.jpg" width="65" height="65" />--------------------------------------------</p>
  <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>