<?php 
session_start();


?>
	<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- JQuery -->
    <script type="text/javascript" src="../Librerias/lib/jquery-2.1.0.min.js"></script>
    <!-- icheck -->
    <link href="../Librerias/icheck/skins/square/green.css" rel="stylesheet">
    <script src="../Librerias/lib/icheck.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../Librerias/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../Librerias/lib/bootstrap.js"></script>
    <!-- Docs -->
    <link rel="stylesheet" type="text/css" href="../Librerias/lib/css/docs.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="../Librerias/font-awesome/css/font-awesome.css">
    <!-- Bootstrap-datetimepicker -->
    <link rel="stylesheet" type="text/css" href="../Librerias/lib/css/bootstrap-datetimepicker.css">
    <script type="text/javascript" src="../Librerias/lib/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../Librerias/lib/bootstrap-datetimepicker.es.js"></script>
    <!-- Bootstrap-multiselect -->
    <link rel="stylesheet" type="text/css" href="../Librerias/lib/css/bootstrap-multiselect.css">
    <script type="text/javascript" src="../Librerias/lib/bootstrap-multiselect.js"></script>
    <!-- Bootstrap-validator -->
    <link rel="stylesheet" type="text/css" href="../Librerias/lib/css/bootstrapValidator.css">
    <script type="text/javascript" src="../Librerias/lib/bootstrapValidator.js"></script>
    <!-- Validators -->
    <script type="text/javascript" src="../Librerias/lib/validator/diferenteActividadPlanificacion.js"></script>
    <script type="text/javascript" src="../Librerias/lib/validator/diferenteEntregable.js"></script>
    <script type="text/javascript" src="../Librerias/lib/validator/stringLength.js"></script>
    <script type="text/javascript" src="../Librerias/lib/validator/notEmpty.js"></script>
    <script type="text/javascript" src="../Librerias/lib/validator/callback.js"></script
    <script type="text/javascript" src="../Librerias/lib/validator/date.js"></script>
    <script type="text/javascript" src="../Librerias/lib/validator/numeric.js"></script>
    <script type="text/javascript" src="../Librerias/lib/validator/porcentajeMax.js"></script>
    <script type="text/javascript" src="../Librerias/lib/validator/porcentajeMin.js"></script>
    <!-- JS -->
    <script type="text/javascript" src="../Librerias/lib/funcion.js"></script>





    <link href="../Librerias/css/plugins/timeline/timeline.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="../Librerias/css/sb-admin.css" rel="stylesheet">
    
    
    
    
    
    
    
    
    
    
    
       		<title>Bienvenidos a SATIS</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

   
    <div id="wrapper">
       
        
		<!--<h2>design by <a href="#" title="flash templates">flash-templates-today.com</a></h2>-->
        
	
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Inicio </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="unlog.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

    </nav>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
      


      

        <div id="page-wrapper">
     			<div class="content">
				<div class="content_resize">
					<div class="mainbar">
                                            <div class="article"><br><br>
							

                                                
                                                
							<h2><span>Registro Usuario</span></h2>
							<h3><p>Debe de rellenar todos los campos correctamente</p></h3>
							<div id="contenido">
			
								<form action="crear_administrador.php" method="post" enctype="multipart/form-data">
									<center>
										<table border=0 width=80%>
											<tr>
												<td >
													<p style="text-align:right;">Login:</p>
												</td>
												<td>
													<input type="text" size=25% required name="usuario"/>
												</td>
											</tr>
											<tr>
												<td >
													<p style="text-align:right;">Password:</p>
												</td>
												<td>
													<input type="password" size=25% required name="contrasena"/>
												</td>
											</tr>
			
											<tr>
												<td >
													<p style="text-align:right;">Nombres:</p>
												</td>
												<td>
													<input type="text" size=25% required name="nombre"/>
												</td>
											</tr>
											<tr>
												<td >
													<p style="text-align:right;">Apellidos:</p>
												</td>
												<td>
													<input type="text" size=25% required name="apellido"/>
												</td>
											</tr
			
											<tr>
												<td>
													<p style="text-align:right;">Telefono:</p>
												</td>
												<td>
                                                                                                    <input type="text"  size=25% required name="telefono" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>                                                                                                  
												</td>
											</tr>

											
											<tr>
												<td>
													<p style="text-align:right;">Introduce tu email:</p>
												</td>
												<td>
													<input type="email" size=25%  required name="email"/>
												</td>
											</tr>

											<tr>
												<td>
												</td>
												<td>
													<input type="submit" value="Registrar">
												</td>
											</tr>
										</table>
									</center>	

								</form>
							</div>
							
							
						
						
				
			
	      
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
						</div>
						
					</div>
			
					
			<div class="sidebar">
                            <br><br>
				<h2 class="star">Usuario :  <?php echo $_SESSION['usuario'] ?></h2>
			
               
            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                                      <ul class="nav" id="side-menu">
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-files-o "></i> Informacion personal <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../Vista/registro_administrador.php">nueva cuenta</a>
                                </li>
                                <li>
                                    <a href="../Vista/modificar_administrador.php">privacidad</a>
                                </li>
                            </ul>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Gestion de usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="lista_usuarios.php">Usuarios Registrados</a>
                                </li>
                                <li>
                                    <a href="asignar_permisos.php">Modificar Permisos Usuarios</a>
                                </li>
                                 <li>
                                     <a href="add_roles.php">Añadir  Roles</a>
                                </li>
                                <li>
                                     <a href="add_gestion.php">Añadir  Gestion</a>
                                </li>                                
                                 <li>
                                    <a href="lista_roles.php">Asignar Permisos Roles</a>
                                </li>
                                <li>
                                    <a href="#">grupo empresa <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="lista_grupoEmpresa.php"> integrantes </a>
                                            
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-building-o fa-fw"></i>Bitacora de ingresos <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                        <li>
                                            <a href="bitacora_ingreso.php">registro</a>
                                            
                                        </li>

  
                                    </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-building-o fa-fw"></i>Enviar mensaje <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                        <li>
                                            <a href="enviar_mail.php">nuevo mensaje</a>
                                            
                                        </li>

  
                                    </ul>
                            <!-- /.nav-second-level -->
                        </li>                       
                        

                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
                                
                            
                           		
                        </div></div>
                        </div>
            <div class="clr"></div>	<br><br>
			<div class="footer">
			<div class="footer_resize">
				<p class="lf"></p>
				<div style="clear:both;"></div>
				</div>
			</div>
		<div align=center>
			Esta pagina desarrollada por  <a class="registrar" href=''>Bittle.S.R.L.</a>
                </div>
                        
            
        </div>
        <!-- /#page-wrapper -->

    </div>

    <script src="../Librerias/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../Librerias/js/sb-admin.js"></script>
</body>

</html>
