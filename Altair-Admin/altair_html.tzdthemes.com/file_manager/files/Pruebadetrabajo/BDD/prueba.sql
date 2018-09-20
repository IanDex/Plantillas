-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2018 a las 21:08:19
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
`Id` int(11) NOT NULL,
  `IdPeliculas` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`Id`, `IdPeliculas`, `Nombre`) VALUES
(1, 1, 'Avat.jpg'),
(2, 1, 'Avatar.jpg'),
(3, 1, 'Avatarr.jpg'),
(4, 2, 'Titanicc.jpg'),
(5, 2, 'Titanic.jpg'),
(6, 2, 'Titani.jpg'),
(7, 3, 'avengers.jpg'),
(8, 3, 'Aven.jpg'),
(9, 3, 'Vengadores.jpg'),
(10, 4, 'harry Potter.jpg'),
(11, 4, 'harry.jpg'),
(12, 4, 'potter.jpg'),
(13, 5, 'iron man.jpg'),
(14, 5, 'Iron 3.jpg'),
(15, 5, 'Iron3.jpg'),
(16, 5, 'Iron-Man-3.jpg'),
(17, 3, 'Avat.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
`Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Avatar', 'Es una película épica de ciencia ficción estadounidense de 2009,6?7? escrita, producida y dirigida por James Cameron y protagonizada por Sam Worthington, Zoe Saldaña, Sigourney Weaver, Stephen Lang y Michelle Rodríguez.\r\n\r\nAmbientada en el año 2154 los acontecimientos que narra se desarrollan en Pandora, una luna del planeta Polífemo habitada por una raza humanoide llamada na''vi, con la que los humanos se encuentran en conflicto debido a que uno de sus clanes está asentado alrededor de un gigantesco árbol que cubre una inmensa veta de un mineral muy cotizado y que supondría la solución a los problemas energéticos de la Tierra: el unobtainium.'),
(2, 'Titanic', 'Titanic es una película estadounidense dramática de catástrofe de 1997 dirigida y escrita por James Cameron y protagonizada por Leonardo DiCaprio, Kate Winslet, Billy Zane, Kathy Bates, Gloria Stuart y Bill Paxton. La trama, una epopeya romántica,? relata la relación de Jack Dawson y Rose DeWitt Bukater, dos jóvenes que se conocen y se enamoran a bordo del transatlántico RMS Titanic en su viaje inaugural desde Southampton, Inglaterra, a Nueva York, EE. UU., en abril de 1912. Pertenecientes a diferentes clases sociales, intentan salir adelante pese a las adversidades que los separarían de forma definitiva, entre ellas el prometido de Rose, Caledon «Cal» Hockley (un adinerado del cual ella no está enamorada, pero su madre la ha obligado a permanecer con él para garantizar un futuro económico próspero) y el hundimiento del lujoso barco tras chocar con un iceberg.'),
(3, 'Marvel Los Vengadores', 'The Avengers (titulada The Avengers: Los Vengadores en Hispanoamérica y Marvel: Los Vengadores en España) es una película estadounidense de superhéroes de 2012 escrita y dirigida por Joss Whedon. Fue producida por Marvel Studios y distribuida por Walt Disney Pictures, y basada en el cómic homónimo de Marvel Comics. Es parte del Universo cinematográfico de Marvel, que enlaza varias películas de superhéroes de Marvel como Iron Man (2008), El increíble Hulk (2008), Iron Man 2 (2010), Thor (2011) y Capitán América: el primer vengador (2011). La película cuenta con un reparto coral, que incluye a Robert Downey Jr., Chris Hemsworth, Tom Hiddleston, Mark Ruffalo, Chris Evans, Scarlett Johansson, Jeremy Renner, Clark Gregg, Cobie Smulders, y Samuel L. Jackson,. En Los Vengadores, Nick Fury, director de la organización de mantenimiento de la paz conocida como S.H.I.E.L.D., recluta a Iron Man, Hulk, Thor, y al Capitán América para formar un equipo. El grupo debe detener al hermano de Thor, Loki,'),
(4, 'Harry Potter y las Reliquias de la Muerte –Parte 2', 'Harry Potter and the Deathly Hallows - Part 2) es una película de acción y fantasía dirigida por David Yates. Es el segundo episodio de la séptima película de Harry Potter, basado en la novela homónima de J. K. Rowling. A pesar de ser dos películas se les trató como una sola, ya que se basan en el mismo libro. El guion estuvo a cargo de Steve Kloves y fue producida por David Heyman, David Barron y Rowling. Fue estrenada en la mayor parte del mundo el 15 de julio de 2011, pero en algunos países su estreno fue adelantado un día, mientras que en China no se estrenó hasta el 4 de agosto de 2011. La película fue convertida totalmente al formato 3D y fue presentada en dicho formato y también en 2D y IMAX. Este largometraje recibió tres nominaciones a los Premios Óscar: mejor dirección artística, mejor maquillaje y mejores efectos visuales. Se posicionó como la tercera película con mayor recaudación en la historia consiguiendo 1341 millones, siendo posteriormente superada por The Avengers ('),
(5, 'Iron Man 3', 'Iron Man 3 es una película estadounidense sobre el superhéroe Iron Man, de Marvel Comics, producida por Marvel Studios y distribuida por Walt Disney Pictures. Es la secuela de Iron Man (2008) y Iron Man 2 (2010), y es la primera película con la que se dio inicio a la segunda fase del universo cinematográfico de Marvel, siendo el primer gran estreno de la franquicia después de The Avengers (2012) que fue la sexta y última película de la primera fase del ya mencionado universo cinematográfico.\r\n\r\nShane Black fue requerido para dirigir un guion escrito por él mismo y Drew Pearce,? el cual está basado en la historia Extremis de Warren Ellis. Robert Downey Jr. repite su papel como Tony Stark, con Gwyneth Paltrow y Don Cheadle repitiendo sus papeles como Pepper Potts y James Rhodes, respectivamente. Jon Favreau, quien dirigió las dos primeras películas, sirvió como productor ejecutivo y repite como actor haciendo el papel de Happy Hogan ahora como supervisor de seguridad.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
