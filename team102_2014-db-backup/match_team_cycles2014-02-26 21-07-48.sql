USE team102_2014;

CREATE TABLE `match_team_cycles` (
  `tournament_id` varchar(20) NOT NULL,
  `match_number` int(11) NOT NULL,
  `team_number` int(11) NOT NULL,
  `cycle_number` int(11) NOT NULL,
  `offense_possession` varchar(1) NOT NULL DEFAULT 'N',
  `midfield_possession` varchar(1) NOT NULL DEFAULT 'N',
  `defense_possession` varchar(1) NOT NULL DEFAULT 'N',
  `truss` varchar(1) NOT NULL DEFAULT 'N',
  `catch` varchar(1) NOT NULL DEFAULT 'N',
  `goal` varchar(1) NOT NULL DEFAULT 'N',
  `assist_points` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`tournament_id`,`match_number`,`team_number`,`cycle_number`),
  CONSTRAINT `match_team_cycle_match_team_fk` FOREIGN KEY (`tournament_id`, `match_number`, `team_number`) REFERENCES `match_teams` (`tournament_id`, `match_number`, `team_number`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Valid values are: H, L, N (no goal)';


INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,75,1,'N','N','Y','N','N','H',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,75,2,'Y','N','Y','Y','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,75,3,'N','N','N','N','N','N',0);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,102,1,'Y','N','N','Y','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,102,2,'Y','N','Y','N','Y','H',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,102,3,'N','N','N','N','N','N',0);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,224,1,'Y','N','N','N','N','H',3.33333333333333);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,224,2,'Y','N','N','N','N','H',3.33333333333333);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,224,3,'Y','N','N','N','N','H',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,224,4,'Y','N','N','N','N','H',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,303,1,'N','Y','N','N','Y','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,303,2,'N','Y','N','N','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,303,3,'N','N','N','N','N','N',0);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,486,1,'N','Y','N','N','N','N',3.33333333333333);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,486,2,'N','Y','N','N','N','N',3.33333333333333);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,486,3,'N','N','Y','Y','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,486,4,'N','N','Y','Y','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,3142,1,'N','Y','N','Y','Y','N',3.33333333333333);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,3142,2,'N','Y','N','Y','Y','N',3.33333333333333);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,3142,3,'N','Y','N','N','Y','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',1,3142,4,'N','Y','N','N','Y','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',2,75,1,'N','Y','N','N','Y','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',2,102,1,'Y','Y','Y','N','Y','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',2,224,1,'N','N','Y','Y','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',2,303,1,'Y','N','N','N','N','H',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',2,486,1,'Y','Y','Y','Y','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',2,3142,1,'Y','Y','Y','N','N','H',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',3,75,1,'Y','N','N','N','N','L',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',3,224,1,'N','Y','N','N','Y','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',3,3142,1,'N','N','Y','Y','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',4,75,1,'N','Y','Y','N','Y','L',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',4,102,1,'Y','N','N','N','N','N',10);
INSERT INTO `match_team_cycles`(`tournament_id`,`match_number`,`team_number`,`cycle_number`,`offense_possession`,`midfield_possession`,`defense_possession`,`truss`,`catch`,`goal`,`assist_points`) VALUES ('PRAC',4,3142,1,'N','N','Y','N','N','N',10);
