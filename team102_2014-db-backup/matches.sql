Select tournament_id, match_number, start_time from team102_2014.matches
USE team102_2014;

CREATE TABLE `matches` (
  `tournament_id` varchar(20) NOT NULL,
  `match_number` int(11) NOT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tournament_id`,`match_number`),
  CONSTRAINT `match_tour_id` FOREIGN KEY (`tournament_id`) REFERENCES `tournaments` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',1,'10:00');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',2,'10:07');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',3,'10:14');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',4,'10:21');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',5,'10:28');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',6,'10:35');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',7,'10:42');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',8,'10:49');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',9,'10:56');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',10,'11:03');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',11,'11:10');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',12,'11:17');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',13,'11:24');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',14,'11:31');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',15,'11:38');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',16,'11:45');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',17,'11:52');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',18,'11:59');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',19,'12:06');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',20,'12:13');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',21,'12:20');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',22,'12:27');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',23,'12:34');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',24,'12:41');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',25,'12:48');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',26,'12:55');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',27,'1:02');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',28,'1:09');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',29,'1:16');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',30,'1:23');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',31,'1:30');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',32,'1:37');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',33,'1:44');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',34,'1:51');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',35,'1:58');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',36,'2:05');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',37,'2:12');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',38,'2:19');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',39,'2:26');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',40,'2:33');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',41,'2:40');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',42,'2:47');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',43,'2:54');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',44,'3:01');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',45,'3:08');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',46,'3:15');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',47,'3:22');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',48,'3:29');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',49,'3:36');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',50,'3:43');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',51,'3:50');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',52,'3:57');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',53,'4:04');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',54,'4:11');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',55,'4:18');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',56,'4:25');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',57,'4:32');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',58,'4:39');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',59,'4:46');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',60,'4:53');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',61,'5:00');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',62,'5:07');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',63,'5:14');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',64,'5:21');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',65,'5:28');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',66,'5:35');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',67,'5:42');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',68,'5:49');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',69,'5:56');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',70,'6:03');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',71,'09:30');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',72,'09:37');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',73,'09:44');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',74,'09:51');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',75,'09:58');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('MTOLIVE',76,'10:05');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',1,'09:00');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',2,'09:10');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',3,'09:20');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',4,'09:30');
INSERT INTO `matches`(`tournament_id`,`match_number`,`start_time`) VALUES ('PRAC',5,'09:40');
