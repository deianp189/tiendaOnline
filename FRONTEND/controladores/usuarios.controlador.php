<!--Todos los datos validados con la parte de javascript del usuario llegan aqui y lo pasmos por php-->

<?php

    class ControladorUsuarios{

        /*=============================================
        REGISTRO DE USUARIO
        =============================================*/

        public function ctrRegistroUsuario(){
                    //Si existe el usuario entra al if
                if(isset($_POST["regUsuario"])){
                        //Validamos nombre,correo y contrasenia para el servidor
                    if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["regUsuario"]) && 
                    preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST["regEmail"]) &&
                    preg_match('/^[a-zA-Z0-9]+$/',$_POST["regPassword"])){
                        //Encriptar los archivos para la base de datos
                    $encriptar= crypt($_POST["regPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
        
                    $encriptarEmail = md5($_POST["regEmail"]);
                        //La foto se rellena con info vacia al principio para despues modificarlo
                    $datos = array("nombre" =>$_POST["regUsuario"],
                                    "password"=>$encriptar,
                                    "email"=>$_POST["regEmail"],
                                    "foto"=>"",//Cuando el usuario verifique el email esto pasa a 0
                                    "modo"=> "directo",
                                    "verificacion"=> 1,
                                    "emailEncriptado"=>$encriptarEmail);
        
                    $tabla = "usuarios";
        
                    $respuesta = ModeloUsuarios::mdlRegistroUsuario($tabla, $datos);

                        if($respuesta == "ok"){

                            /*=============================================
                            VERIFICACIÓN CORREO ELECTRÓNICO
                            =============================================*/

                            $url = Ruta::ctrRuta();	

                            date_default_timezone_set("Europe/Madrid");
                            /*
                            $mail->IsSMTP();
                            $mail->Host = "smtp.example.com";

                            // optional
                            // used only when SMTP requires authentication  
                            $mail->SMTPAuth = true;
                            $mail->Username = 'smtp_username';
                            $mail->Password = 'smtp_password'*/

                            $mail = new PHPMailer;
                            $mail->CharSet = 'UTF-8';
                            $mail->isMail();
                            //Datos que contiene el correo de verificacion
                            $mail->setFrom("playrandorygames@gmail.com","CASARI");
                            $mail->addReplyTo("playrandorygames@gmail.com","CASARI");
                            $mail->Subject = "Por favor verifique su dirección de correo electrónico";
                            $mail->addAddress($_POST["regEmail"]);
                            //Copiamos el codigo de plantilla-verificar-correo.html en el siguiente apartado
                            //Comparamos el email encriptado que ha introeducido el usuario con el que hay en la bbdd y cambiamos la verificacion a 0
                            $mail->msgHTML('<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">

                                <center>
                                    <img src="tienda/logo.png" style="padding:20px; width:10%">
                                </center>
                                    <div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
                                        <center>
                                                    <img src="tienda/logo.png" style="padding:20px; width:15%">
                                                    <h3 style="font-weight:100; color:#999">VERIFIQUE SU DIRECCIÓN DE CORREO ELECTRÓNICO</h3>
                                                    <hr style="border:1px solid #ccc; width:80%">
                                                    <h4 style="font-weight:100; color:#999; padding:0 20px">Para comenzar a usar su cuenta de Tienda Virtual, debe confirmar
                                                                su dirección de correo electrónico</h4>
                                                
                                                    <a href="'.$url.'/verificar/'.$encriptarEmail.'" target="_blank"
                                                                    style="text-decoration:none">
                                                        <div style="line-height:60px; background:#0aa; width:60%; color:white">Verifique su dirección de correo electrónico
                                                        </div>
                                                    </a>
                                                    <br>
                                                    <hr style="border:1px solid #ccc; width:80%">
                                                    <h5 style="font-weight:100; color:#999">Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y la
                                                            cuenta se eliminará.</h5>
                                        </center>
                                    </div>
                            </div>');

                            $envio=$mail->Send();

                            if(!$envio){

                                echo '<script> 

                                    swal({
                                        title: "¡ERROR!",
                                        text: "¡Ha ocurrido un problema enviando verificación de correo electrónico a '.$_POST["regEmail"].$mail->ErrorInfo.'!",
                                        type:"error",
                                        confirmButtonText: "Cerrar",
                                        closeOnConfirm: false
                                        },

                                        function(isConfirm){

                                            if(isConfirm){
                                                history.back();
                                            }
                                    });

                                </script>';


                            }else{

                                echo '<script> 

                                swal({
                                    title: "¡OK!",
                                    text: "¡Por favor revise la bandeja de entrada o la carpeta de SPAM de su correo electrónico '.$_POST["regEmail"].' para verificar la cuenta!",
                                    type:"success",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                    },

                                    function(isConfirm){

                                        if(isConfirm){
                                            history.back();
                                        }
                                });

                            </script>';

                            }
                    
                        }

                }else{

                    //Plugin/Script de Sweetalert para el error
                    echo '<script> 
                            swal({
                                title: "¡ERROR!",
                                text: "¡Error al registrar el usuario, no se permiten caracteres especiales!",
                                type:"error",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                                },

                                function(isConfirm){

                                    if(isConfirm){
                                        history.back();
                                    }
                            });
                    </script>';
                }


            }
        }


        /*=============================================
        MOSTRAR USUARIO
        =============================================*/

        public static function ctrMostrarUsuario($item, $valor){

            $tabla = "usuarios";

            $respuesta = ModeloUsuarios::mdlMostrarUsuario($tabla, $item, $valor);

            return $respuesta;

        }

        /*=============================================
        ACTUALIZAR USUARIO
        =============================================*/

        public static function ctrActualizarUsuario($id, $item, $valor){

            $tabla = "usuarios";

            $respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $id, $item, $valor);

            return $respuesta;

        }
        
        /*=============================================
        INGRESO DE USUARIO
        =============================================*/

        public function ctrIngresoUsuario(){

            if(isset($_POST["ingEmail"])){

                if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["ingEmail"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                    $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                    $tabla = "usuarios";
                    $item = "email";
                    $valor = $_POST["ingEmail"];

                    $respuesta = ModeloUsuarios::mdlMostrarUsuario($tabla, $item, $valor);

                    if($respuesta["email"] == $_POST["ingEmail"] && $respuesta["password"] == $encriptar){

                        if($respuesta["verificacion"] == 1){


                            echo'<script>

                                swal({
                                    title: "¡NO HA VERIFICADO SU CORREO ELECTRÓNICO!",
                                    text: "¡Por favor revise la bandeja de entrada o la carpeta de SPAM de su correo para verififcar la dirección de correo electrónico '.$respuesta["email"].'!",
                                    type: "error",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                },

                                function(isConfirm){
                                        if (isConfirm) {	   
                                            history.back();
                                        } 
                                });

                                </script>';



                        }else{

                            $_SESSION["validarSesion"] = "ok";
                            $_SESSION["id"] = $respuesta["id"];
                            $_SESSION["nombre"] = $respuesta["nombre"];
                            $_SESSION["foto"] = $respuesta["foto"];
                            $_SESSION["email"] = $respuesta["email"];
                            $_SESSION["password"] = $respuesta["password"];
                            $_SESSION["modo"] = $respuesta["modo"];


                            echo '<script>
                                
                                window.location = localStorage.getItem("rutaActual");

                            </script>';

                        }



                    }else{


                        echo'<script>

                                swal({
                                    title: "¡ERROR AL INGRESAR!",
                                    text: "¡Por favor revise que el email exista o la contraseña coincida con la registrada!",
                                    type: "error",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                },

                                function(isConfirm){
                                        if (isConfirm) {	   
                                            window.location = localStorage.getItem("rutaActual");
                                        } 
                                });

                                </script>';



                    }


                }else{


                        echo '<script> 

                            swal({
                                title: "¡ERROR!",
                                text: "¡Error al ingresar al sistema, no se permiten caracteres especiales!",
                                type:"error",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                                },

                                function(isConfirm){

                                    if(isConfirm){
                                        history.back();
                                    }
                            });

                    </script>';



                }




            }



        }

        /*=============================================
        OLVIDO DE CONTRASEÑA
        =============================================*/

        public function ctrOlvidoPassword(){

                if(isset($_POST["passEmail"])){

                    if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["passEmail"])){


                        /*=============================================
                        GENERAR CONTRASEÑA ALEATORIA
                        =============================================*/

                        function generarPassword($longitud){

                            $key = "";
                            $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";

                            $max = strlen($pattern)-1;
                            //Rellena la contraseña random de tamaño longitud
                            for($i = 0; $i < $longitud; $i++){

                                $key .= $pattern[mt_rand(0,$max)];

                            }

                            return $key;
                        }

                        $nuevaPassword = generarPassword(11);
                        //Encriptar la nueva contraseña
                        $encriptar = crypt($nuevaPassword, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                        $tabla = "usuarios";
                        $item1 = "email";
                        $valor1 = $_POST["passEmail"];

                        $respuesta1 = ModeloUsuarios::mdlMostrarUsuario($tabla, $item1, $valor1);

                        if($respuesta1){

                            $id = $respuesta1["id"];
                            $item2 = "password";
                            $valor2 = $encriptar;

                            $respuesta2 = ModeloUsuarios::mdlActualizarUsuario($tabla, $id, $item2, $valor2);
                            

                            if($respuesta2  == "ok"){

                                /*=============================================
                                CAMBIO DE CONTRASEÑA
                                =============================================*/

                            $url = Ruta::ctrRuta();	

                            date_default_timezone_set("Europe/Madrid");

                            $mail = new PHPMailer;
                            $mail->CharSet = 'UTF-8';
                            $mail->isMail();
                            $mail->setFrom("rolando@gmail.com","tienda online");
                            $mail->addReplyTo("rolando@gmail.com","tienda online");
                            $mail->Subject = "Solicitud de nueva contraseña";
                            $mail->addAddress($_POST["passEmail"]);
                            $mail->msgHTML('<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
            
                                        <center>
                                            
                                            <img style="padding:20px; width:10%" src="'.$url.'/tienda/logo.png">

                                        </center>

                                        <div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
                                        
                                            <center>
                                            
                                            <img style="padding:20px; width:15%" src="'.$url.'/tienda/icon-pass.png">

                                            <h3 style="font-weight:100; color:#999">SOLICITUD DE NUEVA CONTRASEÑA</h3>

                                            <hr style="border:1px solid #ccc; width:80%">

                                            <h4 style="font-weight:100; color:#999; padding:0 20px"><strong>Su nueva contraseña: </strong>'.$nuevaPassword.'</h4>

                                            <a href="'.$url.'" target="_blank" style="text-decoration:none">

                                            <div style="line-height:60px; background:#0aa; width:60%; color:white">Ingrese nuevamente al sitio</div>

                                            </a>

                                            <br>

                                            <hr style="border:1px solid #ccc; width:80%">

                                            <h5 style="font-weight:100; color:#999">Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y la cuenta se eliminará.</h5>

                                            </center>

                                        </div>

                                    </div>');

                                    $envio = $mail->Send();

                                    if(!$envio){

                                        echo '<script> 

                                        swal({
                                            title: "¡ERROR!",
                                            text: "¡Ha ocurrido un problema enviando cambio de contraseña a '.$_POST["passEmail"].$mail->ErrorInfo.'!",
                                            type:"error",
                                            confirmButtonText: "Cerrar",
                                            closeOnConfirm: false
                                            },

                                            function(isConfirm){

                                                if(isConfirm){
                                                    history.back();
                                                }
                                        });

                                    </script>';




                                    }else{


                                        echo '<script> 

                                        swal({
                                            title: "¡OK!",
                                            text: "¡Por favor revise la bandeja de entrada o la carpeta de SPAM de su correo electrónico '.$_POST["passEmail"].' para su cambio de contraseña!",
                                            type:"success",
                                            confirmButtonText: "Cerrar",
                                            closeOnConfirm: false
                                            },

                                            function(isConfirm){

                                                if(isConfirm){
                                                    history.back();
                                                }
                                        });

                                    </script>';



                                    }


                            }


                        }else{

                            echo '<script> 

                                swal({
                                    title: "¡ERROR!",
                                    text: "¡El correo electrónico no existe en el sistema!",
                                    type:"error",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                    },

                                    function(isConfirm){

                                        if(isConfirm){
                                            history.back();
                                        }
                                });

                            </script>';



                        }



                    }else{


                            echo '<script> 

                                swal({
                                    title: "¡ERROR!",
                                    text: "¡Error al enviar el correo electrónico, está mal escrito!",
                                    type:"error",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                    },

                                    function(isConfirm){

                                        if(isConfirm){
                                            history.back();
                                        }
                                });

                        </script>';




                    }


                }

        }


        /*=============================================
        ACTUALIZAR PERFIL
        =============================================*/

        public function ctrActualizarPerfil(){

            if(isset($_POST["editarNombre"])){

                /*=============================================
                VALIDAR IMAGEN
                =============================================*/


                $ruta = $_POST["fotoUsuario"];

                if(isset($_FILES["datosImagen"]["tmp_name"]) && !empty($_FILES["datosImagen"]["tmp_name"])){

                /*=============================================
                    PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
                    =============================================*/

                    $directorio = "vistas/img/usuarios/".$_POST["idUsuario"];


                    if(!empty($_POST["fotoUsuario"])){

                        unlink($_POST["fotoUsuario"]);
                    
                    }else{

                        mkdir($directorio, 0755);

                    }

                    /*=============================================
                    GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                    =============================================*/

                    list($ancho, $alto) = getimagesize($_FILES["datosImagen"]["tmp_name"]);

                    $nuevoAncho = 500;
                    $nuevoAlto = 500;

                    $aleatorio = mt_rand(100, 999);

                    
                    if($_FILES["datosImagen"]["type"] == "image/jpeg"){

                        $ruta = "vistas/img/usuarios/".$_POST["idUsuario"]."/".$aleatorio.".jpg";

                        /*=============================================
                        MODIFICAMOS TAMAÑO DE LA FOTO
                        =============================================*/


                        $origen = imagecreatefromjpeg($_FILES["datosImagen"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        imagejpeg($destino, $ruta);

                    }

                    if($_FILES["datosImagen"]["type"] == "image/png"){

                        $ruta = "vistas/img/usuarios/".$_POST["idUsuario"]."/".$aleatorio.".png";

                        /*=============================================
                        MOFICAMOS TAMAÑO DE LA FOTO
                        =============================================*/

                        $origen = imagecreatefrompng($_FILES["datosImagen"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagealphablending($destino, FALSE);
                        imagesavealpha($destino, TRUE);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        imagepng($destino, $ruta);

                    }


                }

                //Si el passw viene vacio conservo el que ya esta en la bbdd
                if($_POST["editarPassword"] == ""){

                    $password = $_POST["passUsuario"];

                }else{

                    $password = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                }




                    $datos = array("nombre" => $_POST["editarNombre"],
                            "email" => $_POST["editarEmail"],
                            "password" => $password,
                            "foto" => $ruta,
                            "id" => $_POST["idUsuario"]);

                    $tabla = "usuarios";

                    $respuesta = ModeloUsuarios::mdlActualizarPerfil($tabla, $datos);


                    if($respuesta == "ok"){

                    $_SESSION["validarSesion"] = "ok";
                    $_SESSION["id"] = $datos["id"];
                    $_SESSION["nombre"] = $datos["nombre"];
                    $_SESSION["foto"] = $datos["foto"];
                    $_SESSION["email"] = $datos["email"];
                    $_SESSION["password"] = $datos["password"];
                    $_SESSION["modo"] = $_POST["modoUsuario"];

                    echo '<script> 

                            swal({
                                title: "¡OK!",
                                text: "¡Su cuenta ha sido actualizada correctamente!",
                                type:"success",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                                },

                                function(isConfirm){

                                    if(isConfirm){
                                        history.back();
                                    }
                            });

                    </script>';

                }

            }

        }
        
        /*=============================================
        MOSTRAR COMPRAS
        =============================================*/

        public static function ctrMostrarCompras($item, $valor){

            $tabla = "compras";
            $respuesta = ModeloUsuarios::mdlMostrarCompras($tabla, $item, $valor);

            return $respuesta;
        }
        


    }


?>