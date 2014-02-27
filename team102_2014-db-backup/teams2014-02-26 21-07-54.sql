USE team102_2014;

CREATE TABLE `teams` (
  `number` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `teams`(`number`,`name`,`nickname`,`state`) VALUES (75,'Hillsborough High School','RoboRaiders','NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`state`) VALUES (102,'Somerville High School','Gearheads','NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`state`) VALUES (224,'Piscataway High School','The Tribe','NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`state`) VALUES (303,'Bridgewater High School','Test Team','NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`state`) VALUES (357,'Upper Darby High School','Royal Assault','PA');
INSERT INTO `teams`(`number`,`name`,`nickname`,`state`) VALUES (486,'Strath Haven High School','Positronic Robotics','PA');
INSERT INTO `teams`(`number`,`name`,`nickname`,`state`) VALUES (869,'Middlesex High School','Power Cord','NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`state`) VALUES (3142,'Newton High School','Aperture','NJ');
