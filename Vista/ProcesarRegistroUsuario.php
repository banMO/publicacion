<?php

    $name = $_POST['nombre'];
    $password = $_POST['password'];
    $emailUsuario = $_POST['email'];
    $rol = $_POST['UsuarioRol'];
    $apellidoUsuario = $_POST['apellido'];
    
    echo $name;
    echo $password;
    echo $emailUsuario;

    include '../Modelo/conexion.php';
    require '../Vista/PHPMailerAutoload.php';
    require '../Vista/class.phpmailer.php';
    
    $conect = new conexion();
   
        //Crear una instancia de PHPMailer
    $mail = new PHPMailer();
    //Definir que vamos a usar SMTP
    $mail->IsSMTP();
    //Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
    // 0 = off (producción)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug  = 0;
    //Ahora definimos gmail como servidor que aloja nuestro SMTP
    $mail->Host       = 'smtp.gmail.com';
    //El puerto será el 587 ya que usamos encriptación TLS
    $mail->Port       = 587;
    //Definmos la seguridad como TLS
    $mail->SMTPSecure = 'tls';
    //Tenemos que usar gmail autenticados, así que esto a TRUE
    $mail->SMTPAuth   = true;
    //Definimos la cuenta que vamos a usar. Dirección completa de la misma
    $mail->Username   = "bittlesrl@gmail.com";
    //Introducimos nuestra contraseña de gmail
    $mail->Password   = "*bittletis*135*";
    //Definimos el remitente (dirección y, opcionalmente, nombre)
    $mail->SetFrom('bittlesrl@gmail.com', 'Bittle');
    //Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
    //$mail->AddReplyTo('replyto@correoquesea.com','El de la réplica');
    //Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
    $mail->AddAddress('attivanm@gmail.com', 'El Destinatario');
    //Definimos el tema del email
    $mail->Subject = 'Solicitud de Registro';
    //Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
    //$mail->MsgHTML(file_get_contents('correomaquetado.html'), dirname(ruta_al_archivo));
    $mail->MsgHTML('El usuario '.$name.''.$apellidoUsuario.' con direccion '.$emailUsuario.' desea registrarse como '.$rol.' contraseña: '.$password.'');
    //Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
    $mail->AltBody = 'This is a plain-text message body';
    //Enviamos el correo
    if(!$mail->Send()) {
      echo "Error: " . $mail->ErrorInfo;
    } else {
      echo "Enviado!";
    }


  
   
    /*********************************************************************************************************/
    
    
    
    /*$resultadoEmail = mail("jhonny.h.cr@gmail.com","Solicitud de registro","Este es el cuerpo del mensaje");
    
    if($resultadoEmail){
        
        echo '<script>
                        BootstrapDialog.show({
			    title: "Envio de solicitud",
			    message: "Su solicitud se envio correctamente...se le enviara un link a su correo electronico para activar su cuenta en un plazo de 24 horas"
			});
              </script>';
        
       echo 'Espere la respuesta del administrador en su correo electronico';
    }*/
?>
