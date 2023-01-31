<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/carrito.controlador.php";
require_once "controladores/visitas.controlador.php";

require_once "modelos/plantilla.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/slide.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/carrito.modelo.php";
require_once "modelos/visitas.modelo.php";

require_once "modelos/rutas.php";

require_once "extensiones/PHPMailer/PHPMailerAutoload.php";
require_once "extensiones/vendor/autoload.php";


// Desactivar toda las notificaciónes del PHP
error_reporting(0);

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();

?>

<script type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {"floatingPreferencesButtonDisplay":"bottom-right","lang":"es","perPurposeConsent":true,"siteId":2963227,"whitelabel":false,"cookiePolicyId":83372054, "banner":{ "acceptButtonDisplay":true,"closeButtonDisplay":false,"customizeButtonDisplay":true,"listPurposes":true,"position":"float-top-center","rejectButtonDisplay":true }};
    </script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async>
</script>