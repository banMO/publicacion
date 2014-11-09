<?php
    include '../Modelo/conexion.php';
    $con=new conexion();
    
    //$x="camaleon";
?>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Apoyo a la Empresa TIS</title>

    <!-- Core CSS - Include with every page -->
    <link href="../Librerias/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Librerias/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="../Librerias/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="../Librerias/css/plugins/timeline/timeline.css" rel="stylesheet">
   

    <!-- SB Admin CSS - Include with every page -->
    <link href="../Librerias/css/sb-admin.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   
    <link href="css/estiloTabla.css" rel="stylesheet" type="text/css" />

</head>

<body>

   <link href="css/estiloTabla.css" rel="stylesheet" type="text/css" />
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
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-files-o "></i> Documentos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#" >Subir Documentos <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Recepci&oacute;n Documentos <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        
                                       
                                    </ul>
                                </li>
                               
                            </ul>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Tareas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-warning fa-fw"></i> Notificaciones</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-building-o fa-fw"></i> Actividades<span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-question-circle fa-fw"></i> Ayuda <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Documentos recibidos</h1>
                    <div class="panel panel-default" >

              
                        
                         

                            <fieldset class="campos-border">
                             
                            <table class="table form-group" >
                                 
                                                     <tr>
                                                          
                                                          <th>Nombre<th>
                                                          <th>Descripcion</th>   
                                                     </tr> 


                                <?php

                     session_start();
                     if (isset($_SESSION['nombre_usr'])) { $idGrupo=$_POST['NOMBRE_U'];}


                                
                                 echo $idGrupo;
                               
                                        $c_3="SELECT DISTINCT `NOMBRE_R`,`RUTA_D`,`DESCRIPCION_D`,`fecha_p`,`hora_p` FROM `registro` AS r,`documento` AS d,`descripcion` AS e,`periodo` AS p WHERE r.`ID_R` = d.`ID_R` AND r.`ID_R` = e.`ID_R` AND r.`ID_R` = p.`ID_R` AND r.`TIPO_T` LIKE 'publicaciones' AND r.`NOMBRE_U` LIKE 'leticia'";
                                        $r3=$con->consulta($c_3);
                                       // var_dump($c_3);
                                       
                                                
                                  
                                    if(mysql_num_rows($r3) != 0)
                                    {
                                           // echo "<h3><center>Listado de propuestas</center></h3><br>";
                                           // echo "<form name='formularioComprimir' method='POST' action='descargar_zip.php' enctype='Multipart/form-data'>";
                                    

                                                   
                                    while($var3 = mysql_fetch_array($r3))
                                    {
                                            //$result2 = mysql_query($myQuery) or die($myQuery."<br/><br/>".mysql_error());
                                            $aux=$var3['2'];
                                            //$delimitador = "*";
                                            $findme = "*";
                                            $tam=strlen($aux);
                                            $pos = strpos($aux,$findme);
                                            $pose=$pos+1;
                                            $numero=substr($aux, $pose,$tam);
                                            $pos2=$pos-1;

                                            $des=substr($aux, 0,$pos2);

                                            
                                                    //echo $numero;
         
                                            //list ($nombre,$numero) = explode($delimitador,$aux);
                                            //echo $nombre;
                                            if($numero=="TODOS" || $numero=="Freevalue.srl")
                                            {

                                            $ubi= $var3[1];
                                            $ini="32"+1;
                                            //$del= "/";
                                            // list ($r1,$r2,$r3,$r4,$r5,$r6,$r7)=explode($del,$ubi);
                                           // $com=$r5."/".$r6."/".$r7;
                                            $size=strlen($ubi);
                                            $com=substr($ubi, $ini,$size);
                                            $fep=$var3[4];
                                           // $hop=$var3[5];
                                            $fecha       = date('Y-m-d');
                                            $hora        =  date("G:H:i");
                                           if($fecha>$fep)
                                             {     // if()

                   ?>
                                        
                                          
                                                     <tr> 
                                                          <td><a class="link-dos" href="../<?php echo $com ?>"><?php echo $var3[0]?></a><td>

                                                          <td><?php echo $des?></td>   
                                                     </tr>
                                                     

                                            <?php
                                       }
                                       else{}
                                       
                                           }
                                     }
                                       ?>
                                       </table>
                                       </fieldset>
                                       <?php
                                            //echo "</form>";
                                    //$tabla.="</table>";
                                     //echo $tabla;
                                    }
                                    else
                                    {
                                        echo  "<b>--- ERROR! NO SE ENCONTRO DOCUMENTOS</b><br><br><a class='btn btn-primary' href='documentos_recibidos.php'>VOLVER ATRAS</a> ";
                                    }
                                     
                                   
                                    
                                
                                
                                $con->cerrarConexion();
                                
                                
                                /*$ax='';
                                if(isset($_POST['grupoempresa'])){
                                    
                                    
                                }else{
                                    $ax="";
                                }
                                
                                if($ax=="TODOS")
                                {
                                    
                                    $c_3="SELECT DISTINCT r.`NOMBRE_R`,d.`RUTA_D` FROM `registro` AS r,`documento` AS d WHERE d.`ID_R` = r.`ID_R` AND r.`TIPO_T` LIKE 'documento subido' AND r.`NOMBRE_U` IN (SELECT ge.`NOMBRE_U` FROM `inscripcion` AS i,`asesor` AS a,`grupo_empresa` AS `ge`,`gestion` AS g,`proyecto` AS p WHERE i.`NOMBRE_UA` = a.`NOMBRE_U` AND i.`NOMBRE_UGE` = ge.`NOMBRE_U` AND i.`ID_G` = g.`ID_G` AND i.`CODIGO_P` = p.`CODIGO_P` AND a.`NOMBRE_U` LIKE '".$_POST['idAsesor']."')";
                                    $r3=$con->consulta($c_3);
                                    echo "<h2><center>Listado de propuestas</center></h2>";
                                    echo "<form methodo='post' action='descargar_zip.php'>";
                                    while($var3 =  mysql_fetch_array($r3)){
                                            echo "<a class='btn btn-default btn-lg btn-block' href='..".$var3['1']."'>".$var3[0]."</a><br>";
                                            
                                        }
                                    
                                    echo "<button type='submit' class='btn btn-primary'>Haga Clic aqui para comprimir todos los documentos</button>";
                                    echo "</form>";    
                                }

                                if(isset($_POST['Enviar'])){
                                    $c_1="SELECT count(*) "
                                            . "FROM usuario u, registro r "
                                            . "WHERE u.nombre_u=r.nombre_u and u.nombre_u like '$ax'" ;
                                    $r1=$con->consulta($c_1);
                                    $res1= mysql_fetch_row($r1);
                                    if($res1[0]==0 && $ax!="TODOS"){
                                        echo  "<b>--- ERROR! NO SE ENCONTRO DOCUMENTOS</b><br><br><a class='btn btn-primary' href='documentos_recibidos.php'>VOLVER ATRAS</a> ";
                                    }else{
                                        //echo $ax . " SI HAY CANTIDAD ".$res1[0];
                                        $c_2="SELECT r.nombre_r "
                                                . "FROM registro r, usuario u "
                                                . "WHERE r.nombre_u=u.nombre_u and u.nombre_u='".$ax."'";
                                        $r2=$con->consulta($c_2);
                                        
                                        while($var=  mysql_fetch_array($r2)){
                                            echo "<a class='btn btn-default btn-lg btn-block' href='archivos/".$var[0]."'>".$var[0]."</a><br>";
                                            
                                        }
                                    }
                                }*/
                                ?>
                           
                        
                          <script type="text/javascript" src="../Librerias/calendario2/jquery.js"></script>
                        <script type="text/javascript" src="../Librerias/calendario2/jquery.datetimepicker.js"></script>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../Librerias/js/jquery-1.10.2.js"></script>
    <script src="../Librerias/js/bootstrap.min.js"></script>
    <script src="../Librerias/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="../Librerias/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../Librerias/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../Librerias/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="../Librerias/js/demo/dashboard-demo.js"></script>

</body>

</html>