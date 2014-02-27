USE team102_2014;

CREATE TABLE `answers` (
  `question_id` int(11) NOT NULL,
  `team_number` int(11) NOT NULL,
  `answer` varchar(2046) DEFAULT NULL,
  PRIMARY KEY (`question_id`,`team_number`),
  KEY `answer_team_fk` (`team_number`),
  CONSTRAINT `answer_team_fk` FOREIGN KEY (`team_number`) REFERENCES `teams` (`number`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (0,102,'Save');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (0,303,'Save');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (2,102,'MECANUM');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (2,303,'TANK');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (3,102,'4');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (3,303,'4');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (4,102,'DIRECT');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (4,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (5,102,'4');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (5,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (6,102,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (6,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (7,102,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (7,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (9,102,'Left or Right');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (9,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (10,102,'NO');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (10,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (11,102,'YES');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (11,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (12,102,'YES');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (12,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (13,102,'NO');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (13,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (14,102,'1. Line up on Left or Right edge.  
2. Drive Forward to low goal.  
3. Score into low goal.');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (14,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (16,102,'20');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (16,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (17,102,'60');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (17,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (18,102,'80');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (18,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (19,102,'30');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (19,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (20,102,'0');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (20,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (21,102,'CARRY');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (21,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (22,102,'Conveyor that retrieves the ball from the human player and launches it.');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (22,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (23,102,'From human player');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (23,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (24,102,'Get the ball from the human player.  Throw over the truss, play defense.');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (24,303,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (26,102,'');
INSERT INTO `answers`(`question_id`,`team_number`,`answer`) VALUES (26,303,'');
