Select id, question, seq_no, active, q_type, domain from team102_2014.questions
USE team102_2014;

CREATE TABLE `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `seq_no` double unsigned NOT NULL DEFAULT '1' COMMENT 'The sequence order for this question.',
  `active` varchar(1) NOT NULL DEFAULT 'Y' COMMENT 'Is this question still active?',
  `q_type` varchar(20) NOT NULL DEFAULT 'SHORT' COMMENT 'The type of question: separator, short answer, multiple choice, long answer.',
  `domain` varchar(50) DEFAULT NULL COMMENT 'For multiple choice questions, the domain in ref_codes from which the choices will come.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;


INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (1,'Drive System',1,'Y','SEP',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (2,'Drive Type',2,'Y','MULT','DRIVE_TYPE');
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (3,'Number of Wheels',3,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (4,'Power Transmission',4,'Y','MULT','TRANSMISSION');
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (5,'Number of Powered Wheels',5,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (6,'Maximum Speed (ft/sec)',6,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (7,'Maximum Torque (ft-lbs)',7,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (8,'Autonomous',8,'Y','SEP',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (9,'Preferred Starting Position',9,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (10,'Hot Goal Detect',10,'Y','MULT','YES_NO');
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (11,'Can Score High',11,'Y','MULT','YES_NO');
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (12,'Mobility Bonus',12,'Y','MULT','YES_NO');
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (13,'Goalie',13,'Y','MULT','YES_NO');
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (14,'Briefly Describe Autonomous',14,'Y','LONG',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (15,'TeleOp',15,'Y','SEP',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (16,'High Goal Scoring %',16,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (17,'Low Goal Scoring %',17,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (18,'Truss %',18,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (19,'Catch %',19,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (20,'Pickup From Floor %',20,'Y','SHORT',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (21,'Method of Possession',21,'Y','MULT','POSSESS');
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (22,'Briefly Describe Possession Mechanism',22,'Y','LONG',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (23,'How does the robot load a Ball?',23,'Y','LONG',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (24,'Desired Strategy',24,'Y','LONG',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (25,'Other',25,'Y','SEP',null);
INSERT INTO `questions`(`id`,`question`,`seq_no`,`active`,`q_type`,`domain`) VALUES (26,'Describe the Robot',26,'Y','LONG',null);
