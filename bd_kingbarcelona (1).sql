-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2016 a las 20:20:59
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_kingbarcelona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunci`
--

CREATE TABLE `anunci` (
  `anu_id` int(4) NOT NULL,
  `anu_titol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `anu_data_anunci` date NOT NULL,
  `anu_data_robatori` date NOT NULL,
  `anu_ubicacio_robatori` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `anu_descripcio_robatori` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `anu_marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `anu_model` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_color` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_antiguitat` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_descripcio` text COLLATE utf8_spanish_ci NOT NULL,
  `anu_numero_serie` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_foto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_compensacio` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`) VALUES
(1, 'Perdida Bici mtb Ghost Tacana 3 29 verde - 2016', '2016-10-16', '2016-10-16', 'barcelona', 'La robaron a las 12 de la noche en el barrio de Raval, un hombre con capucha roja, de baja estatura, que cojea.', 'Ghost', 'Tacana 3 29', 'verde', '3 meses', 'Bici rigida 29 de aluminio, color verde, de la marca Ghost, con ruedas rigidas rival 21', 'A10111111', 'bici1.jpg', '99.99'),
(2, 'Perdida Bici mtb KTM Ultra Race 29er- 2016', '2016-10-14', '2016-10-13', 'hospital de llobregat', 'La robaron a las 8 de la noche en el barrio de Gotic, un grupo de personas, uno era ruso y tendria unos 15 años', 'KTM', 'Bici mtb KTM Ultra Race 2', 'negro', '2 meses', 'Bici rigida 29 de aluminio, color negro, de la marca KTM, nueva, aun tiene el plastico de burbujas en el timon', 'A20211112', 'bici2.jpg', '90.00'),
(3, 'Perdida Bici plegable eléctrica Dahon negro 2016', '2016-09-30', '2016-09-29', 'badalona', 'el dia 30 de septiembre una anciana, con dientes de oro y una cicatriz en la cara , robó la bici en la barceloneta. Usaba una chaqueta de piel de oso y tenía un chihuahua.', 'Dahon', 'Ikon 2016', 'negro', '5 meses', 'bici eléctrica desplegable nueva, color negro ', 'A30311113', 'bici3.jpg', '80.00'),
(4, 'Perdida Bici mtb Merida Big.Seven 300 blanco 2017', '2016-10-17', '2016-10-16', 'tarrasa', 'La mafia china robo mi bici, el 16 de octubre a las 2 de la tarde, en la sagrada familia.', 'Merida', 'Big.Seven 300', 'blanco', '1 mes', 'bici blanca marca merida de 1 año de antigüedad.', 'B40411114', 'bici4.jpg', '50.00'),
(5, 'Perdida Bici mtb GT Bicycles Avalanche Comp negro', '2016-08-22', '2016-08-22', 'sabadell', 'Marroqui me robo la bici el dia 22 de agosto, a la salida del burger king, llevaba  turbante y ropa marroqui.', 'GT Bicycles', 'Avalanche Comp', 'negro', '6 meses', 'me robaron la bici, es una gt color negro, es nueva', 'B50511115', 'bici5.jpg', '30.00'),
(6, 'me han robado una Ghost AMR negra', '2016-10-17', '2016-10-15', 'santa coloma de gramanet', 'Señor de 60 años aproximadamente me robo la bici a las 11 de la mañana, es gordo y calvo.', 'Ghost', 'AMR 9 LC', 'negro', '2 meses', 'bici ghost carisima de color negro, es de montaña, de 11 kilos aproximadamente y con ruedas de 29 pulgadas', 'B60611116', 'bici6.jpg', '90.00'),
(7, 'Me han robado la bici de mi hijo', '2016-10-01', '2016-09-28', 'mataro', 'me han robado una Bici de ciudad Dahon Kids Bike azul 2016, es de mi hijo', 'Dahon', 'Kids Bike', 'azul', '10 meses', 'si la encontrais llamar al 123 456 789, doy recompensa ', 'C70711117', 'bici7.jpg', '50.00'),
(8, 'Perdida bici Ghost rosa de niña ', '2016-10-04', '2016-10-03', 'sant cugat del valles', 'Perdida Bici mtb Ghost Powerkid AL 12 dark fuchsia rosa, 2 hombres uno gordo y otro delgado, al parecer eran curas, uno es calvo y lleva un tatuaje en la nuca de un angel', 'Ghost', 'Powerkid AL 12', 'rosa', '3 meses', 'bici de niña color rosa con ruedines, de la marca ghost, lleva un lazo de color azul', 'C80811118', 'bici8.jpg', '50.00'),
(9, 'Fat bike perdida', '2016-06-15', '2016-06-10', 'cornella de llobregat', 'Perdida Bici Fat Bike Wilier 305FT - 2016 de color negro, perdida a la salida del mcDonalds.', 'Wilier', 'Fat Bike 305FT', 'negro', '2 meses', 'si la encontrais, llamad al 987 654 321', 'C90911119', 'bici9.jpg', '80.00'),
(10, 'Perdida bici de carretera naranja Superior', '2016-10-07', '2016-10-03', 'san baudilio de llobregat', 'un niño de aproximadamente 10 años, me robo la bici, lleva un mono de batman y va armado. ', 'Superior', 'X-Road Team Elite Carbon', 'naranja', '6 meses', 'Bici carretera Superior X-Road Team Elite Carbon naranja/negro 2016', 'D11011110', 'bici10.jpg', '30.00'),
(11, 'Me han robado una bici plegable', '2016-10-18', '2016-10-17', 'barcelona', 'A la salida del corte ingles, me apuñalaron 4 hombres y robaron mi bici, es plegable de color rojo, los hombres eran 4 latinos, con chaquetas de una banda "los chungos".', 'Dahon', 'Speed D8', 'rojo', '4 meses', 'Bici plegable folding Dahon Speed D8 rojo 2016', 'D11111111', 'bici11.jpg', '50.00'),
(12, 'Bici perdida, buena recompensa', '2016-10-10', '2016-10-09', 'hospitalet de llobregat', '2 tios enmascarados me robaron la bici a la salida de casa', 'Merida', 'One-Sixty 8000', 'verde', '1 mes', 'Bici mtb Merida One-Sixty 8000 verde carbon 2017, es carisima porfavor, ofrezco 300 euros, aunque solo me deje ponen 99, llamad al 975 864 321', 'D11211112', 'bici12.jpg', '99.99'),
(13, 'Perdida bici electronica negra en les tres torres', '2016-10-11', '2016-10-10', 'badalona', 'a la salida del tren, frente al oncologico, un hombre me robo la bici, era grdo y llevaba un mohawk', 'Ghost', 'Andasol Trekking 9', 'negro', '11 meses', 'Perdida Bici ciudad Ghost Andasol Trekking 9 Negro/Negro, se da recompensa, si la veis llamad al 123 321 122', 'E20122221', 'bici13.jpg', '50.00'),
(14, 'Bici plegable blanca DAHON PERDIDA!!', '2016-03-28', '2016-03-26', 'tarrasa', 'señorde unos 80 años con pata de palo, robo la bici, me amenazo con una pala. Llevaba un sombrero vaquero rosa, peo largo de color azul', 'Dahon', 'Pop 1V', 'blanco', '9 meses', 'Bici plegable ciudad Dahon Pop 1V blanco 2016 PERDIDA, se ofrece recompensa a quien la encuentre, si la veis llamad al 655 654 765', 'E20222222', 'bici14.jpg', '80.00'),
(15, 'PERDIDA BICI DE MONTAÑA AYUDA!', '2016-10-13', '2016-10-13', 'sabadell', 'No se quien ha podido ser, entre al mediamarkt y al salir ya no estaba.', 'BTWIN', 'BTT RAFAL 720', 'azul', '3 meses', 'PERDIDA!! BTT RAFAL 720 27,5" AZUL/NEGRO/ROSA B''TWIN, se ofrece recompensa a quien la encuentre llamar a 432 543 654 preguntad por jose.', 'E20322223', 'bici15.jpg', '10.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anunci`
--
ALTER TABLE `anunci`
  ADD PRIMARY KEY (`anu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anunci`
--
ALTER TABLE `anunci`
  MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
