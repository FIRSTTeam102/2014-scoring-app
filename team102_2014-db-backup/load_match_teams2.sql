Select tournament_id, match_number, team_number, alliance, seq_no, rank from team102_2014.load_match_teams2
USE team102_2014;

CREATE TABLE `load_match_teams2` (
  `tournament_id` varchar(4) NOT NULL DEFAULT '',
  `match_number` decimal(21,0) DEFAULT NULL,
  `team_number` int(1) NOT NULL DEFAULT '0',
  `alliance` varchar(4) NOT NULL,
  `seq_no` bigint(22) DEFAULT NULL,
  `rank` bigint(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',1,0,'RED',3,1);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',1,0,'RED',1,2);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',1,0,'RED',2,3);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',2,0,'RED',3,4);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',2,0,'RED',1,5);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',2,0,'RED',2,6);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',3,0,'RED',3,7);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',3,0,'RED',1,8);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',3,0,'RED',2,9);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',4,0,'RED',3,10);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',4,0,'RED',1,11);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',4,0,'RED',2,12);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',5,0,'RED',3,13);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',5,0,'RED',1,14);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',5,0,'RED',2,15);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',6,0,'RED',3,16);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',6,0,'RED',1,17);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',6,0,'RED',2,18);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',7,0,'RED',3,19);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',7,0,'RED',1,20);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',7,0,'RED',2,21);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',8,0,'RED',3,22);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',8,0,'RED',1,23);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',8,0,'RED',2,24);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',9,0,'RED',3,25);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',9,0,'RED',1,26);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',9,0,'RED',2,27);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',10,0,'RED',3,28);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',10,0,'RED',1,29);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',10,0,'RED',2,30);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',11,0,'RED',3,31);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',11,0,'RED',1,32);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',11,0,'RED',2,33);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',12,0,'RED',3,34);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',12,0,'RED',1,35);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',12,0,'RED',2,36);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',13,0,'RED',3,37);
INSERT INTO `load_match_teams2`(`tournament_id`,`match_number`,`team_number`,`alliance`,`seq_no`,`rank`) VALUES ('PRAC',13,0,'RED',1,38);
