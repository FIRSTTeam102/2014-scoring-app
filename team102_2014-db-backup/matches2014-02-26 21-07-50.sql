USE team102_2014;

CREATE TABLE `matches` (
  `tournament_id` varchar(20) NOT NULL,
  `match_number` int(11) NOT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tournament_id`,`match_number`),
  CONSTRAINT `match_tour_id` FOREIGN KEY (`tournament_id`) REFERENCES `tournaments` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',1,'09:00');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',2,'09:10');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',3,'09:20');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',4,'09:30');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',5,'09:40');
