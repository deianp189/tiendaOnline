-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2023 a las 15:29:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecomerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `email`, `foto`, `password`, `perfil`, `fecha`) VALUES
(1, 'Tienda Virtual', 'admin@tiendavirtual.com', '', 'admin', 'superadministrador', '2022-12-28 00:42:28'),
(2, 'Editor de la Tienda', 'editor@tiendavirtual.com', '', 'editor123', 'editor', '2017-12-04 21:08:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `estilo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `ruta`, `img`, `titulo1`, `titulo2`, `titulo3`, `estilo`, `fecha`) VALUES
(1, 'azulejos', 'vistas/img/banner/banner1.jpg', '{\n 	\"texto\": \"Azulejos\",\n 	\"color\": \"#fff\"\n }', '', '', 'textoIzq', '2023-01-26 00:52:32'),
(2, 'ladrillos', 'vistas/img/banner/banner2.jpg', '{\n 	\"texto\": \"Ladrillos\",\n 	\"color\": \"#fff\"\n }', '', '', 'textoIzq', '2023-01-26 00:51:16'),
(3, 'albañileria', 'vistas/img/banner/banner3.jpg', '{\n 	\"texto\": \"Albañileria\",\n 	\"color\": \"#fff\"\n }', '', '', 'textoDer', '2023-01-26 00:53:02'),
(4, 'baños', 'vistas/img/banner/banner4.jpg', '{\n 	\"texto\": \"Baños\",\n 	\"color\": \"#fff\"\n }', '', '', 'textoIzq', '2023-01-26 00:53:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabeceras`
--

CREATE TABLE `cabeceras` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `palabrasClaves` text COLLATE utf8_spanish_ci NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cabeceras`
--

INSERT INTO `cabeceras` (`id`, `ruta`, `titulo`, `descripcion`, `palabrasClaves`, `portada`, `fecha`) VALUES
(1, 'inicio', 'Casari', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/cabecera1.jpg', '2023-01-26 00:37:41'),
(2, 'desarrollo-web', 'Desarrollo Web', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/cabecera2.jpg', '2023-01-26 00:37:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `ruta`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `fecha`) VALUES
(1, 'AZULEJOS', 'azulejos', 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 19:18:25'),
(2, 'LADRILLOS', 'ladrillos', 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 19:18:25'),
(3, 'OBRA', 'albañileria', 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-29 22:33:24'),
(4, 'ASEO', 'baños', 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-29 22:33:44'),
(5, 'CATALOGOS', 'catalogos', 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 19:18:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `calificacion` float NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercio`
--

CREATE TABLE `comercio` (
  `id` int(11) NOT NULL,
  `impuesto` float NOT NULL,
  `envioNacional` float NOT NULL,
  `envioInternacional` float NOT NULL,
  `tasaMinimaNal` float NOT NULL,
  `tasaMinimaInt` float NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `modoPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `clienteIdPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `llaveSecretaPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `modoPayu` text COLLATE utf8_spanish_ci NOT NULL,
  `merchantIdPayu` int(11) NOT NULL,
  `accountIdPayu` int(11) NOT NULL,
  `apiKeyPayu` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comercio`
--

INSERT INTO `comercio` (`id`, `impuesto`, `envioNacional`, `envioInternacional`, `tasaMinimaNal`, `tasaMinimaInt`, `pais`, `modoPaypal`, `clienteIdPaypal`, `llaveSecretaPaypal`, `modoPayu`, `merchantIdPayu`, `accountIdPayu`, `apiKeyPayu`) VALUES
(1, 19, 1, 2, 10, 15, 'CO', 'sandbox', 'AecffvSZfOgj6g1MkrVmz12ACMES2-InggmWCpU5CblR-z5WwkYBYjmLsh9yPRLuRape1ahjqpcJet4N', 'EAx1SVMHGV6MJKwl-pnOSzaJASlAINZdYRdS--wkgaPYLevcGw88V0PU_W_rg00xLkBknybCjsO_xzA0', 'sandbox', 508029, 512321, '4Vj8eK4rloUd272L48hsrarnUA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `envio` int(11) NOT NULL,
  `metodo` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci NOT NULL,
  `pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `id_usuario`, `id_producto`, `envio`, `metodo`, `email`, `direccion`, `pais`, `cantidad`, `detalle`, `pago`, `fecha`) VALUES
(12, 2, 496, 0, 'paypal', 'tutorialesatualcance-buyer@hotmail.com', '1 Main St, San Jose, CA, 95131', 'US', 0, '', '10', '2017-07-05 22:59:10'),
(13, 2, 464, 0, 'paypal', 'tutorialesatualcance-buyer@hotmail.com', '1 Main St, San Jose, CA, 95131', 'US', 0, '', '10', '2017-07-25 22:59:14'),
(14, 2, 497, 0, 'paypal', 'tutorialesatualcance-buyer@hotmail.com', '1 Main St, San Jose, CA, 95131', 'US', 0, '', '10', '2017-08-21 22:59:17'),
(15, 2, 500, 0, 'payu', 'correo@test.com', '', '', 0, '', '20', '2017-08-30 22:59:22'),
(16, 2, 184, 0, 'payu', 'correo@test.com', '', '', 0, '', '20', '2017-09-12 22:59:25'),
(17, 2, 499, 0, 'payu', 'ejemplo@test.com', '', '', 0, '', '10', '2017-09-27 22:59:27'),
(18, 2, 469, 0, 'gratis', 'pepe@gmail.com', '', '', 0, '', '0', '2017-09-29 22:59:31'),
(19, 2, 470, 0, 'gratis', 'pepe@gmail.com', '', '', 0, '', '0', '2017-10-09 22:59:33'),
(20, 2, 468, 0, 'gratis', 'pepe@gmail.com', '', '', 0, '', '0', '2017-10-24 22:59:34'),
(21, 2, 467, 0, 'gratis', 'pepe@gmail.com', '', '', 0, '', '0', '2017-11-20 22:59:35'),
(22, 4, 4, 0, 'paypal', 'tutorialesatualcance-buyer@hotmail.com', '1 Main St, San Jose, CA, 95131', 'US', 0, '', '87', '2017-11-30 23:08:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deseos`
--

CREATE TABLE `deseos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `deseos`
--

INSERT INTO `deseos` (`id`, `id_usuario`, `id_producto`, `fecha`) VALUES
(6, 38, 4, '2023-01-24 17:31:34'),
(7, 38, 401, '2023-01-24 17:31:35'),
(8, 38, 403, '2023-01-24 17:31:36'),
(9, 39, 42, '2023-01-26 12:22:53'),
(10, 39, 45, '2023-01-26 12:22:55'),
(11, 39, 2, '2023-01-26 13:28:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `barraSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `textoSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `colorFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `colorTexto` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `redesSociales` text COLLATE utf8_spanish_ci NOT NULL,
  `apiFacebook` text COLLATE utf8_spanish_ci NOT NULL,
  `pixelFacebook` text COLLATE utf8_spanish_ci NOT NULL,
  `googleAnalytics` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id`, `barraSuperior`, `textoSuperior`, `colorFondo`, `colorTexto`, `logo`, `icono`, `redesSociales`, `apiFacebook`, `pixelFacebook`, `googleAnalytics`, `fecha`) VALUES
(1, '#000000', '#ffffff', '#47bac1', '#ffffff', 'vistas/img/plantilla/logo3.png', 'vistas/img/plantilla/icono.png', '[{\r\n		\"red\": \"fa-facebook\",\r\n		\"estilo\": \"facebookBlanco\",\r\n		\"url\": \"http://facebook.com/\"\r\n	},{\r\n		\"red\": \"fa-google-plus\",\r\n		\"estilo\": \"googleBlanco\",\r\n		\"url\": \"http://google.com/\"\r\n	}]', '<script>   window.fbAsyncInit = function() {     FB.init({       appId      : \'99999999999\',       cookie     : true,       xfbml      : true,       version    : \'v2.10\'     });            FB.AppEvents.logPageView();             };    (function(d, s, id){      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) {return;}      js = d.createElement(s); js.id = id;      js.src = \"https://connect.facebook.net/en_US/sdk.js\";      fjs.parentNode.insertBefore(js, fjs);    }(document, \'script\', \'facebook-jssdk\'));  </script>', '<!-- Facebook Pixel Code --> 	<script> 	  !function(f,b,e,v,n,t,s) 	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 	  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\'; 	  n.queue=[];t=b.createElement(e);t.async=!0; 	  t.src=v;s=b.getElementsByTagName(e)[0]; 	  s.parentNode.insertBefore(t,s)}(window, document,\'script\', 	  \'https://connect.facebook.net/en_US/fbevents.js\'); 	  fbq(\'init\', \'99999999999\'); 	  fbq(\'track\', \'PageView\'); 	</script> 	<noscript><img height=\"1\" width=\"1\" style=\"display:none\" 	  src=\"https://www.facebook.com/tr?id=149877372404434&ev=PageView&noscript=1\" 	/></noscript> <!-- End Facebook Pixel Code -->', '	<!-- Global site tag (gtag.js) - Google Analytics --> 	<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-999999-1\"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag(\'js\', new Date());  	  gtag(\'config\', \'UA-9999999-1\'); 	</script>', '2023-01-27 10:48:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `titular` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `multimedia` text COLLATE utf8_spanish_ci NOT NULL,
  `detalles` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `vistas` int(11) NOT NULL,
  `ventas` int(11) NOT NULL,
  `vistasGratis` int(11) NOT NULL,
  `ventasGratis` int(11) NOT NULL,
  `ofertadoPorCategoria` int(11) NOT NULL,
  `ofertadoPorSubCategoria` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `nuevo` int(11) NOT NULL,
  `peso` float NOT NULL,
  `entrega` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `id_subcategoria`, `tipo`, `ruta`, `titulo`, `titular`, `descripcion`, `multimedia`, `detalles`, `precio`, `portada`, `vistas`, `ventas`, `vistasGratis`, `ventasGratis`, `ofertadoPorCategoria`, `ofertadoPorSubCategoria`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `nuevo`, `peso`, `entrega`, `fecha`) VALUES
(3, 1, 1, 'fisico', 'QUEBEC6610-3', 'QUEBEC 6610 SOFT TOUCH - NATURAL', '', 'Porcelanico Rectificado Nogal. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image3.png\"}, {\"foto\":\"vistas/img/multimedia/quebec6610-1.png\"}, {\"foto\":\"vistas/img/multimedia/quebec6610-2.png\"}]', '', 12, 'vistas/img/productos/azulejos/image3.png', 108, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:35:01'),
(4, 1, 2, 'fisico', 'QUEBEC6910-1', 'QUEBEC 6910 ANTI-SLIP', '', 'Porcelanico Rectificado Grey. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image4.png\"},{\"foto\":\"vistas/img/multimedia/quebec6610-1.png\"}, {\"foto\":\"vistas/img/multimedia/quebec6610-2.png\"}]', '', 12, 'vistas/img/productos/azulejos/image4.png', 193, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, 0, 0, '2023-01-29 17:35:29'),
(9, 1, 1, 'fisico', 'SPRINGIFIELD6646-3', 'SPRINGFIELD 6646 SOFT TOUCH - NATURAL', '', 'Porcelanico Rectificado Ébano. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image9.png\"},{\"foto\":\"vistas/img/multimedia/sprin-1.png\"},{\"foto\":\"vistas/img/multimedia/sprin-2.png\"}]', '', 13, 'vistas/img/productos/azulejos/image9.png', 98, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:29:59'),
(10, 1, 3, 'fisico', 'SPRINGIFIELD6647-1', 'SPRINGFIELD 6647 POLISHED ', '', 'Porcelanico Rectificado Nórdica. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image10.png\"},{\"foto\":\"vistas/img/multimedia/sprin-1.png\"},{\"foto\":\"vistas/img/multimedia/sprin-2.png\"}]', '', 14, 'vistas/img/productos/azulejos/image10.png', 70, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:33:35'),
(12, 1, 3, 'fisico', 'SPRINGIFIELD6647-3', 'SPRINGFIELD 6647 POLISHED ', '', 'Porcelanico Rectificado Roble. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image12.png\"},{\"foto\":\"vistas/img/multimedia/sprin-1.png\"},{\"foto\":\"vistas/img/multimedia/sprin-2.png\"}]', '', 15, 'vistas/img/productos/azulejos/image12.png', 187, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-30 14:28:30'),
(14, 1, 3, 'fisico', 'SPRINGIFIELD6647-5', 'SPRINGFIELD 6647 POLISHED ', '', 'Porcelanico Rectificado Ébano. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image14.png\"},{\"foto\":\"vistas/img/multimedia/sprin-1.png\"},{\"foto\":\"vistas/img/multimedia/sprin-2.png\"}]', '', 18, 'vistas/img/productos/azulejos/image14.png', 60, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:33:39'),
(15, 1, 1, 'fisico', 'YUKON6611-1', 'YUKÓN 6611 SOFT TOUCH - NATURAL', '', 'Porcelanico Rectificado Abeto. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image15.png\"},{\"foto\":\"vistas/img/multimedia/yukon-1.png\"},{\"foto\":\"vistas/img/multimedia/yukon-2.png\"},{\"foto\":\"vistas/img/multimedia/yukon-3.png\"}]', '', 18, 'vistas/img/productos/azulejos/image15.png', 165, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, 0, 0, '2023-01-29 17:29:49'),
(16, 1, 1, 'fisico', 'YUKON6611-2', 'YUKÓN 6611 SOFT TOUCH - NATURAL', '', 'Porcelanico Rectificado Olmo. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image16.png\"},{\"foto\":\"vistas/img/multimedia/yukon-1.png\"},{\"foto\":\"vistas/img/multimedia/yukon-2.png\"},{\"foto\":\"vistas/img/multimedia/yukon-3.png\"}]', '', 19, 'vistas/img/productos/azulejos/image16.png', 60, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, 0, 0, '2023-01-29 17:33:43'),
(17, 1, 1, 'fisico', 'YUKON6611-3', 'YUKÓN 6611 SOFT TOUCH - NATURAL', '', 'Porcelanico Rectificado Cedro. Tamaño 21x147,5 cm. Precio por metro cuadrado.', '[{\"foto\":\"vistas/img/productos/azulejos/image17.png\"},{\"foto\":\"vistas/img/multimedia/yukon-1.png\"},{\"foto\":\"vistas/img/multimedia/yukon-2.png\"},{\"foto\":\"vistas/img/multimedia/yukon-3.png\"}]', '', 19, 'vistas/img/productos/azulejos/image17.png', 110, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, 0, 0, '2023-01-29 17:29:41'),
(19, 2, 5, 'fisico', 'TABLERO', 'Tablero machihembrado', '', 'Rasilla Anchura 250 mm ,Grueso 4 mm, Longitud 60 mm', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo2.jpg\"}]', '', 1.55, 'vistas/img/productos/ladrillos/ladrillo2.jpg', 3, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:26:15'),
(20, 2, 5, 'fisico', 'TABIQUE', 'Tabique de gran formato', '', 'Rasilla de 70x44x4.', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo3.jpg\"}]', '', 1.22, 'vistas/img/productos/ladrillos/ladrillo3.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:26:09'),
(21, 2, 4, 'fisico', 'PERFORADO', 'Perforado', '', 'Ladrillo Perforado. Tamaño 5x10.5x22.5.', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo4.jpg\"}]', '', 0.23, 'vistas/img/productos/ladrillos/ladrillo4.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, 0, 0, '2023-01-29 17:26:07'),
(27, 2, 4, 'fisico', 'HUECO-TRIPLE-1', 'Huecos Triples', '', 'Hueco Triple. Tamaño 9x10.5x22.5.', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo10.jpg\"}]', '', 0.41, 'vistas/img/productos/ladrillos/ladrillo10.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-28 14:15:58'),
(28, 2, 4, 'fisico', 'HUECO-TRIPLE-2', 'Tochana', '', 'Tochana. Tamaño 10x13x24.', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo11.jpg\"}]', '', 0.39, 'vistas/img/productos/ladrillos/ladrillo11.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:31:22'),
(29, 2, 4, 'fisico', 'LADRILLO-RUSTICO-ROJO', 'Ladrillo Rustico Rojo', '', 'Ladrillo Rustico Rojo. Tamaño 3.5x10.5x23.', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo12.jpg\"}]', '', 0.8, 'vistas/img/productos/ladrillos/ladrillo12.jpg', 3, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:31:17'),
(30, 2, 4, 'fisico', 'LADRILLO-RUSTICO-CAÑA', 'Ladrillo Rustico Caña', '', 'Ladrillo rustico de caña base. Tamaño 3.5x10.5x23.', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo13.jpg\"}]', '', 0.87, 'vistas/img/productos/ladrillos/ladrillo13.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-28 14:09:17'),
(33, 2, 6, 'fisico', 'ADOQUIN-1', 'Adoquín Ceramico', '', 'Adoquin Blaco Formato. Tamaño 200x100x50mm', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo16.jpg\"}]', '', 0.63, 'vistas/img/productos/ladrillos/ladrillo16.jpg', 50, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:35:50'),
(34, 2, 6, 'fisico', 'ADOQUIN-2', 'Adoquín Ceramico', '', 'Adoquin Gris Formato. Tamaño 200x100x50mm', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo17.jpg\"}]', '', 0.63, 'vistas/img/productos/ladrillos/ladrillo17.jpg', 50, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:35:55'),
(35, 2, 6, 'fisico', 'ADOQUIN-3', 'Adoquín Ceramico', '', 'Adoquin Rojo Formato. Tamaño 200x100x50mm', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo18.jpg\"}]', '', 0.63, 'vistas/img/productos/ladrillos/ladrillo18.jpg', 51, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 22:23:49'),
(36, 2, 6, 'fisico', 'ADOQUIN-4', 'Adoquín Ceramico', '', 'Adoquin Rosa Palo Formato. Tamaño 200x100x50mm', '[{\"foto\":\"vistas/img/productos/ladrillos/ladrillo19.jpg\"}]', '', 0.66, 'vistas/img/productos/ladrillos/ladrillo19.jpg', 50, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:36:00'),
(37, 3, 7, 'fisico', 'CEMENTO', 'Cemento Cosmos', '', 'Saco Cemento Gris. Peso 25 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco1.jpg\"}]', '', 5, 'vistas/img/productos/albañileria/saco1.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:31:07'),
(39, 3, 8, 'fisico', 'MORTERO-GEL', 'Mortero Adhesivo Tector Gel Flex', '', 'Mortero cola con tecnología gel que le confiere una cremosidad extra y una textura ultra-fina, consiguiendo una óptima trabajabilidad y fácil colocación. Peso 15 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco3.jpg\"}]', '', 49, 'vistas/img/productos/albañileria/saco3.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:26:53'),
(40, 3, 8, 'fisico', 'MORTERO-YESO', 'Mortero Adhesivo Tector Cola Yeso', '', 'Adhesivo cementoso idóneo para la colocación de baldosas cerámicas de formatos pequeños y medianos. Peso 25 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco4.jpg\"}]', '', 5.55, 'vistas/img/productos/albañileria/saco4.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:26:54'),
(41, 3, 8, 'fisico', 'MORTERO-COLA-PLUS', 'Mortero Adhesivo Tector Cola Plus', '', 'Indicado para colocación de baldosas cerámicas en pavimentos y revestimientos interiores así como pavimientos exteriores. Peso 25 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco5.jpg\"}]', '', 6.2, 'vistas/img/productos/albañileria/saco5.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:26:55'),
(42, 3, 8, 'fisico', 'MORTERO-PORCELANICO', 'Mortero Tector Porcelánico Plus', '', 'Adhesivo indicado especialmente para gres porcelánico, soportes deformables (cartón-yeso) y piedra natural. Peso 25 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco6.jpg\"}]', '', 7.45, 'vistas/img/productos/albañileria/saco6.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-28 14:16:10'),
(43, 3, 8, 'fisico', 'MORTERO-COLA-DIR', 'Mortero Adhesivo Tector Cola Dir', '', 'Mortero capa gruesa indicado para colocación de cerámica en interior, tanto para pavimentos como revestimientos. Peso 25 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco7.jpg\"}]', '', 3.49, 'vistas/img/productos/albañileria/saco7.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:26:58'),
(44, 3, 8, 'fisico', 'MORTERO-COLA-FLEX', 'Mortero Adhesivo Tector Cola Flex', '', 'Adhesivo cementoso indicado especialmente para su uso en fachadas, soportes deformables, superposición cerámica y calefacción por suelo radiante. Peso 25 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco8.jpg\"}]', '', 15.49, 'vistas/img/productos/albañileria/saco8.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:31:05'),
(45, 3, 8, 'fisico', 'MORTERO-PRO', 'Mortero Revestimiento Tector Pro', '', 'Morteros de proyección a base de cemento blanco/gris indicados para capa gruesa, aplicación manual o mecánica y acabado fratasado o raspado, y como base para posteriores recubrimientos. Peso 25 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco9.jpg\"}]', '', 7.45, 'vistas/img/productos/albañileria/saco9.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, 0, 0, '2023-01-29 17:31:01'),
(46, 3, 8, 'fisico', 'MORTERO-PRO-FINO', 'Mortero Revestimiento Tector Pro Fino', '', 'Mortero de proyección indicado para capa gruesa, aplicación manual o mecánica y acabado fratasado. Peso 25 KG', '[{\"foto\":\"vistas/img/productos/albañileria/saco10.jpg\"}]', '', 7.8, 'vistas/img/productos/albañileria/saco10.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, 0, 0, '2023-01-29 17:27:02'),
(48, 4, 9, 'fisico', 'MUEBLE-EKO', 'Modelo Eko', '', 'Modelo Eko color Hercules con patas. Tamaño 100x80 cm', '[{\"foto\":\"vistas/img/productos/baños/bano2.png\"}]', '', 189, 'vistas/img/productos/baños/banio2.png', 3, 19, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-30 14:28:23'),
(50, 4, 9, 'fisico', 'MUEBLE-ALCAZAR', 'Modelo Alcázar', '', 'Modelo Alcázar 2 Cajones color Blanco. Tamaño 80x80 cm', '[{\"foto\":\"vistas/img/productos/baños/bano4.png\"}]', '', 309, 'vistas/img/productos/baños/banio4.png', 1, 11, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:32:14'),
(51, 4, 9, 'fisico', 'MODELO-TRIANA', 'Modelo Triana', '', 'Modelo Triana Color Nogal. Tamaño 80x80 cm', '[{\"foto\":\"vistas/img/productos/baños/bano5.png\"}]', '', 324, 'vistas/img/productos/baños/banio5.png', 0, 18, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:32:17'),
(52, 4, 10, 'fisico', 'MODELO-ANDALUCIA', 'Modelo Andalucia', '', 'Modelo Andalucia Transparente 2 Puertas. Tamaño 180 cm', '[{\"foto\":\"vistas/img/productos/baños/bano6.png\"}]', '', 514, 'vistas/img/productos/baños/banio6.png', 0, 10, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:32:27'),
(53, 4, 10, 'fisico', 'MODELO-RUBI', 'Modelo Rubí', '', 'Modelo Rubí Transparente Fijo Con Brazo de Subjección. Tamaño 80 cm', '[{\"foto\":\"vistas/img/productos/baños/bano7.png\"}]', '', 274, 'vistas/img/productos/baños/bano7.jpg', 1, 12, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:31:57'),
(55, 4, 10, 'fisico', 'MODELO-CAIRO', 'Modelo Cairo', '', 'Modelo Cairo Acrilica Angular 2 Correderas. Tamaño 140 cm', '[{\"foto\":\"vistas/img/productos/baños/bano9.png\"}]', '', 439, 'vistas/img/productos/baños/bano9.png', 3, 12, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, 0, 0, '2023-01-29 17:31:54'),
(56, 5, 11, 'fisico', 'CERSAISE', 'Cersaie 2021', '', '', '', '', 0, 'vistas/img/productos/catalogos/cersaise.jpg', 0, 0, 1, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 22:20:50'),
(57, 5, 11, 'fisico', 'GENERAL', 'Cátalogo General 2023', '', '', '', '', 0, 'vistas/img/productos/catalogos/general.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:30:43'),
(58, 5, 11, 'fisico', 'NEOGRIP', 'Neogrip Series', '', '', '', '', 0, 'vistas/img/productos/catalogos/neogrip.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, 0, '2023-01-29 17:30:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `imgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloImgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloTextoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `boton` text COLLATE utf8_spanish_ci NOT NULL,
  `url` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id`, `imgFondo`, `tipoSlide`, `imgProducto`, `estiloImgProducto`, `estiloTextoSlide`, `titulo1`, `titulo2`, `titulo3`, `boton`, `url`, `fecha`) VALUES
(1, 'vistas/img/slide/fondo1.jpg', 'slideOpcion1', '', '{\"top\": \"15%\" ,\"right\": \"10%\" ,\"width\": \"45%\", \"left\":\"\"}', '{\"top\": \"20%\" ,\"right\": \"\" ,\"width\": \"40%\", \"left\":\"10%\"}', '{\"texto\": \"NUEVA GAMA\" ,\"color\": \"#333\"}', '{\"texto\": \"BALTIMORE\" ,\"color\": \"#777\"}', '{\"texto\": \"Serie 9529\" ,\"color\": \"#888\"}', '', '#', '2023-01-26 00:30:49'),
(2, 'vistas/img/slide/fondo2.jpg', 'slideOpcion2', '', '{\r\n	\"width\": \"25%\",\r\n	\"top\": \"5%\",\r\n	\"left\": \"15%\", \"right\":\"\"\r\n}', '', '', '', '', '', '#', '2023-01-26 00:26:49'),
(3, 'vistas/img/slide/fondo3.jpg', 'slideOpcion2', '', '{\r\n	\"width\": \"25%\",\r\n	\"top\": \"5%\",\r\n	\"left\": \"15%\",\r\n	\"right\": \"\"\r\n}', '{\r\n	\"width\": \"40%\",\r\n	\"top\": \"15%\",\r\n	\"left\": \"\",\r\n	\"right\": \"15%\"\r\n}', '{\"texto\": \"GAMA AMBERES\" ,\"color\": \"#555\"}', '', '{\"texto\": \"Serie 6620\" ,\"color\": \"#aaa\"}', '', '#', '2023-01-26 00:36:00'),
(4, 'vistas/img/slide/fondo4.jpg', 'slideOpcion1', '', '', '', '', '', '', '', '', '2023-01-26 00:27:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `subcategoria` text COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `ofertadoPorCategoria` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `subcategoria`, `id_categoria`, `ruta`, `ofertadoPorCategoria`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `fecha`) VALUES
(1, 'Natural', 1, 'Natural', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Anti-Slip', 1, 'Anti-Slip', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Pulido', 1, 'Pulido', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 22:01:20'),
(4, 'Ladrillo', 2, 'Ladrillo', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 22:01:20'),
(5, 'Machihembrada', 2, 'Machihembrada', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 22:01:20'),
(6, 'Adoquín', 2, 'Adoquin', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-26 10:16:38'),
(7, 'Cemento', 3, 'Cemento', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 22:01:20'),
(8, 'Mortero', 3, 'Mortero', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 22:01:20'),
(9, 'Muebles', 4, 'Muebles', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Mamparas', 4, 'Mamparas', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-25 22:01:20'),
(11, 'Catálogos', 5, 'Catalogos', 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2023-01-26 11:26:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `emailEncriptado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `email`, `modo`, `foto`, `verificacion`, `emailEncriptado`, `fecha`) VALUES
(19, 'Luis Bueno', 'null', 'luisorlando69x1@gmail.com', 'facebook', '', 0, 'null', '2023-01-10 14:37:27'),
(20, 'codelatin', 'null', 'rolando.romaldo@gmail.com', 'google', 'https://lh3.googleusercontent.com/a/ALm5wu2gLXgp11yAtlGYVVZ2ErirYvEL2c8C5PBjhkfKSA=s96-c', 0, 'null', '2022-11-10 22:25:59'),
(21, 'LUIS ORLANDO', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'luis@gmail.com', 'directo', '', 0, '19ff31020abd6906f2f975a3e77e07c7', '2023-01-10 14:36:26'),
(38, 'miguel', '$2a$07$asxx54ahjppf45sd87a5au5TACPA4ZohYQvUmfuQ1K7hyl/D7SF7O', 'hidalgoual@gmail.com', 'directo', 'vistas/img/usuarios/38/114.jpg', 0, '63e4802dd6769df4431de33ee4a9da5f', '2023-01-24 17:31:23'),
(39, 'Pedro', '$2a$07$asxx54ahjppf45sd87a5auJRR6foEJ7ynpjisKtbiKJbvJsoQ8VPS', 'pelocho801gam@gmail.com', 'directo', '', 0, '035154af7b749ff11e92a3743fb9995c', '2023-01-26 12:22:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitaspaises`
--

CREATE TABLE `visitaspaises` (
  `id` int(11) NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `visitaspaises`
--

INSERT INTO `visitaspaises` (`id`, `pais`, `codigo`, `cantidad`, `fecha`) VALUES
(1, 'United States', 'US', 2, '2017-12-05 21:02:46'),
(2, 'Japan', 'JP', 25, '2023-01-24 16:46:26'),
(3, 'Spain', 'ES', 10, '2017-12-05 21:02:53'),
(4, 'Colombia', 'CO', 5, '2017-12-05 21:02:55'),
(5, 'China', 'CN', 3, '2017-12-05 21:04:32'),
(6, 'Germany', 'DE', 34, '2017-12-05 21:04:39'),
(7, 'Mexico', 'MX', 8, '2017-12-05 21:04:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitaspersonas`
--

CREATE TABLE `visitaspersonas` (
  `id` int(11) NOT NULL,
  `ip` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `visitas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `visitaspersonas`
--

INSERT INTO `visitaspersonas` (`id`, `ip`, `pais`, `visitas`, `fecha`) VALUES
(1, '153.202.197.216', 'Japan', 1, '2017-11-08 18:37:07'),
(3, '249.170.168.184', 'Spain', 1, '2017-11-28 19:16:16'),
(5, '249.170.168.184', 'Spain', 1, '2017-11-28 19:16:19'),
(6, '234.13.198.119', 'Colombia', 1, '2017-11-28 19:16:03'),
(7, '141.46.61.241', 'Germany', 1, '2017-11-28 19:13:45'),
(8, '40.179.75.60', 'United States', 1, '2017-11-28 19:14:05'),
(9, '153.205.198.22', 'Japan', 1, '2017-11-01 19:14:18'),
(10, '148.21.177.158', 'United States', 1, '2017-10-28 19:14:34'),
(11, '40.224.125.226', 'United States', 1, '2017-11-28 19:14:56'),
(12, '10.98.135.68', 'China', 1, '2017-11-28 19:15:57'),
(13, '23.121.157.131', 'United States', 1, '2017-11-28 19:15:37'),
(17, '8.12.238.123', 'United States', 1, '2017-11-28 19:28:27'),
(18, '148.21.177.158', 'United States', 1, '2017-11-28 19:33:05'),
(19, '153.202.197.216', 'Japan', 1, '2017-11-28 19:33:50'),
(27, '153.205.198.22', 'Japan', 1, '2017-10-28 20:05:19'),
(31, '153.205.198.22', 'Japan', 1, '2017-11-28 20:09:49'),
(32, '153.205.198.22', 'Japan', 1, '2017-11-29 19:23:07'),
(33, '153.205.198.22', 'Japan', 1, '2017-11-30 23:01:27'),
(34, '153.205.198.22', 'Japan', 1, '2017-12-04 14:55:27'),
(35, '153.205.198.22', 'Japan', 1, '2017-12-05 20:58:04'),
(36, '153.205.198.22', 'Japan', 1, '2017-12-06 21:11:13'),
(37, '153.205.198.22', 'Japan', 1, '2017-12-07 22:32:13'),
(38, '153.205.198.22', 'Japan', 1, '2022-12-27 00:13:36'),
(39, '153.205.198.22', 'Japan', 1, '2022-12-30 20:20:26'),
(40, '153.205.198.22', 'Japan', 1, '2023-01-17 16:50:27'),
(41, '153.205.198.22', 'Japan', 1, '2023-01-18 11:50:29'),
(42, '153.205.198.22', 'Japan', 1, '2023-01-23 19:04:17'),
(43, '153.205.198.22', 'Japan', 1, '2023-01-24 16:46:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cabeceras`
--
ALTER TABLE `cabeceras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comercio`
--
ALTER TABLE `comercio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deseos`
--
ALTER TABLE `deseos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitaspaises`
--
ALTER TABLE `visitaspaises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitaspersonas`
--
ALTER TABLE `visitaspersonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cabeceras`
--
ALTER TABLE `cabeceras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `deseos`
--
ALTER TABLE `deseos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
