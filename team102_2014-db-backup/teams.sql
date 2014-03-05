Select number, name, nickname, city, state from team102_2014.teams
USE team102_2014;

CREATE TABLE `teams` (
  `number` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (11,'Mt. Olive High School',null,'Flanders',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (41,'Watchung Hills Regional High School',null,'Warren',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (56,'Bound Brook High School',null,'Bound Brook',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (75,'Hillsborough High School',null,'Hillsborough',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (102,'Somerville High School','The Gearheads','Somerville',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (193,'Mt. Olive High School 2',null,'Flanders',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (219,'Warren Hills Regional High School',null,'Washington',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (222,'Tunkhannock Area High School',null,'Tunkhannock',' PA');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (223,' Lakeland Regional High School',null,'Wanaque',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (224,'Piscataway High School',null,'Piscataway',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (265,'Lakeland Regional High School 2',null,'Wanaque',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (555,'Montclair',null,'Montclair',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (613,'Franklin High School',null,'Somerset',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (1228,'Rahway High School',null,'Rahway',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (1279,'Immaculata High School',null,'Somerville',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (1302,'Pope John XXIII Regional High School',null,'Sparta',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (1370,'Appoquinimink High School & Middletown High School',null,'Middletown',' DE');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (1403,'Montgomery High School',null,'Skillman',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (1676,'Pascack Valley Regional High School District',null,'Montvale',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (1811,'East Side High School',null,'Newark',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (1923,'West Windsor-Plainsboro HS North & South',null,'Plainsboro',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (2070,'Ridgefield Memorial High School',null,'Ridgefield',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (2458,'Gill St. Bernards High School',null,'Gladstone',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (2554,'John P Stevens High School',null,'Edison',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (2559,'Dauphin County Technical High School',null,'Harrisburg',' PA');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (2577,'The Pingry School',null,'Basking Ridge',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (2600,'JeffersonTwsp. High School',null,'Oak Ridge',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (3142,'Newton High School',null,'Newton',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (3314,'Clifton High School',null,'Clifton',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (3340,'Union City High School',null,'Union City',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (3515,'John F Kennedy Memorial H. S.',null,'Iselin',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (3637,'Hunterdon Central Regional High School',null,'Flemington',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (4035,'Orange High School',null,'orange',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (4281,'The Center School',null,'Branchburg',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (4285,'Honesdale High School & Western Wayne High School',null,'Honesdale',' PA');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (4361,'Roxbury High School',null,'Succasunna',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (4650,'Newark Vocational High School',null,'Newark',' NJ');
INSERT INTO `teams`(`number`,`name`,`nickname`,`city`,`state`) VALUES (4653,'Don Bosco Prep',null,'Ramsey',' NJ');
