USE team102_2014;

CREATE TABLE `tournament_teams` (
  `tournament_id` varchar(20) NOT NULL,
  `team_number` int(11) NOT NULL,
  PRIMARY KEY (`tournament_id`,`team_number`),
  KEY `tour_team_team_id_fk` (`team_number`),
  CONSTRAINT `tour_team_team_id_fk` FOREIGN KEY (`team_number`) REFERENCES `teams` (`number`) ON DELETE CASCADE,
  CONSTRAINT `tour_team_tour_id_fk` FOREIGN KEY (`tournament_id`) REFERENCES `tournaments` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',75);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',102);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',224);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',303);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',357);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',486);
INSERT INTO `tournament_teams`(`tournament_id`,`team_number`) VALUES ('PRAC',3142);
