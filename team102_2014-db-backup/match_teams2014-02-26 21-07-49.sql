USE team102_2014;

CREATE TABLE `match_teams` (
  `tournament_id` varchar(20) NOT NULL,
  `match_number` int(11) NOT NULL,
  `team_number` int(11) NOT NULL,
  `alliance` varchar(4) NOT NULL,
  `seq_no` int(11) NOT NULL,
  `has_ball` varchar(1) NOT NULL DEFAULT 'N',
  `auto_goal` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'Valid values are: H, L and N (no goal)',
  `auto_goal_hot` varchar(1) NOT NULL DEFAULT 'N',
  `auto_mobility` varchar(1) NOT NULL DEFAULT 'N',
  `completed` varchar(1) NOT NULL DEFAULT 'N',
  `win` varchar(1) NOT NULL DEFAULT 'N',
  `comments` varchar(2046) DEFAULT NULL,
  `initials` varchar(4) DEFAULT NULL,
  `extra_goal_1` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'H - High, L - Low, N - None',
  `extra_goal_2` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'H - High, L - Low, N - None',
  `extra_goal_3` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'H - High, L - Low, N - None',
  PRIMARY KEY (`tournament_id`,`match_number`,`team_number`),
  UNIQUE KEY `match_team_alliance_uk` (`tournament_id`,`match_number`,`alliance`,`seq_no`),
  KEY `match_team_team_fk` (`tournament_id`,`team_number`),
  CONSTRAINT `match_team_match_fk` FOREIGN KEY (`tournament_id`, `match_number`) REFERENCES `matches` (`tournament_id`, `match_number`) ON DELETE CASCADE,
  CONSTRAINT `match_team_team_fk` FOREIGN KEY (`tournament_id`, `team_number`) REFERENCES `tournament_teams` (`tournament_id`, `team_number`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',1,75,'BLUE',3,'N','N','N','Y','Y','Y',null,'BP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',1,102,'BLUE',1,'Y','L','N','Y','Y','Y','','BP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',1,224,'RED',1,'Y','H','N','N','Y','N',null,'MJP','H','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',1,303,'BLUE',2,'Y','H','Y','Y','Y','Y',null,'BP','H','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',1,486,'RED',3,'Y','N','Y','Y','Y','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',1,3142,'RED',2,'Y','L','N','N','Y','N',null,'MJP','L','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',2,75,'BLUE',2,'Y','L','N','N','Y','N',null,'MJP','H','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',2,102,'RED',3,'Y','L','Y','N','Y','N',null,'NWN','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',2,224,'BLUE',3,'Y','N','Y','Y','Y','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',2,303,'BLUE',1,'Y','H','N','N','Y','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',2,486,'RED',2,'Y','L','N','Y','Y','N',null,'NWN','L','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',2,3142,'RED',1,'Y','H','N','N','Y','N',null,'NWN','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',3,75,'BLUE',1,'Y','H','N','Y','Y','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',3,102,'RED',2,'N','N','N','N','N','N',null,'MJP','L','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',3,224,'BLUE',2,'Y','H','Y','Y','Y','N',null,'MJP','H','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',3,303,'RED',3,'Y','H','Y','Y','N','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',3,486,'RED',1,'Y','N','N','Y','N','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',3,3142,'BLUE',3,'Y','H','N','Y','Y','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',4,75,'BLUE',2,'Y','N','N','N','Y','N',null,'MJP','H','H','L');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',4,102,'BLUE',1,'Y','N','N','N','Y','N',null,'MJP','N','L','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',4,224,'RED',2,'Y','H','Y','Y','N','N',null,null,'H','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',4,303,'RED',1,'Y','H','Y','Y','N','N',null,null,'N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',4,486,'RED',3,'Y','H','Y','Y','N','N',null,null,'N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',4,3142,'BLUE',3,'Y','N','N','N','Y','N',null,'MJP','N','N','L');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',5,75,'BLUE',1,'Y','N','N','N','N','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',5,102,'RED',3,'Y','H','Y','Y','N','N',null,null,'L','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',5,224,'RED',1,'Y','N','N','Y','N','N',null,null,'N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',5,303,'BLUE',3,'Y','N','N','N','N','N',null,'MJP','N','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',5,486,'RED',2,'N','N','N','N','N','N',null,null,'L','N','N');
INSERT INTO `match_teams`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`has_ball`,`auto_goal`,`auto_goal_hot`,`auto_mobility`,`completed`,`win`,`comments`,`initials`,`extra_goal_1`,`extra_goal_2`,`extra_goal_3`) VALUES ('PRAC',5,3142,'BLUE',2,'Y','N','N','N','N','N',null,'MJP','N','N','N');
