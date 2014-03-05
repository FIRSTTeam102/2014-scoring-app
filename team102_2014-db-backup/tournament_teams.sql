Select tournament_id, team_number from team102_2014.tournament_teams
USE team102_2014;

CREATE TABLE `tournament_teams` (
  `tournament_id` varchar(20) NOT NULL,
  `team_number` int(11) NOT NULL,
  PRIMARY KEY (`tournament_id`,`team_number`),
  KEY `tour_team_team_id_fk` (`team_number`),
  CONSTRAINT `tour_team_team_id_fk` FOREIGN KEY (`team_number`) REFERENCES `teams` (`number`) ON DELETE CASCADE,
  CONSTRAINT `tour_team_tour_id_fk` FOREIGN KEY (`tournament_id`) REFERENCES `tournaments` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',11);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',11);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',41);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',41);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',56);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',56);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',75);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',75);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',102);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',102);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',193);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',193);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',219);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',219);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',222);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',222);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',223);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',223);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',224);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',224);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',265);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',265);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',555);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',555);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',613);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',613);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',1228);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',1228);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',1279);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',1279);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',1302);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',1302);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',1370);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',1370);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',1403);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',1403);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',1676);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',1676);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',1811);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',1811);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',1923);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',1923);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',2070);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',2070);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',2458);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',2458);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',2554);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',2554);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',2559);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',2559);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',2577);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',2577);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',2600);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',2600);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',3142);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',3142);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',3314);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',3314);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',3340);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',3340);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',3515);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',3515);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',3637);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',3637);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',4035);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',4035);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',4281);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',4281);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',4285);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',4285);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',4361);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',4361);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',4650);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',4650);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('MTOLIVE',4653);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',4653);
