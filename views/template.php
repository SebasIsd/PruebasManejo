<html>
<head>
  
    <title>UTA</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/demo/demo.css">
    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<script src="js/operaciones.js"> </script>

</head>

<body>

    <header>
        <img src="./images/uta.png" width="1500" height="150" alt="Logo UTA">
    </header>

    <nav>
        <ul>
            <li><a href="index.php?action=inicio">Inicio</a></li>
            <li><a href="index.php?action=nosotros"> Nosostros </a></li>
			<li><a href="index.php?action=servicios"> Servicios </a></li>	
			<li><a href="index.php?action=contactanos"> Contactanos </a></li>	
        </ul>
       
    </nav>

    <section>
        <?php 
            $mvc = new MvcController();
            $mvc -> enlacesPaginasController();
        ?> 
	</section>

    <footer>
		Derechos Reservados @Cuarto Software
	</footer>
</body>
</html>