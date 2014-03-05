Select `Time`, match_number, red1, red2, red3, blue1, blue2, blue3 from team102_2014.mtolive_matches
USE team102_2014;

CREATE TABLE `mtolive_matches` (
  `Time` varchar(50) NOT NULL,
  `match_number` int(11) NOT NULL,
  `red1` int(11) DEFAULT NULL,
  `red2` int(11) DEFAULT NULL,
  `red3` int(11) DEFAULT NULL,
  `blue1` int(11) DEFAULT NULL,
  `blue2` int(11) DEFAULT NULL,
  `blue3` int(11) DEFAULT NULL,
  PRIMARY KEY (`Time`,`match_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `mtolive_matches`(`Time`,`match_number`,`red1`,`red2`,`red3`,`blue1`,`blue2`,`blue3`) VALUES ('1899-12-31 09:30:00',71,11,1403,224,4653,555,4650);
INSERT INTO `mtolive_matches`(`Time`,`match_number`,`red1`,`red2`,`red3`,`blue1`,`blue2`,`blue3`) VALUES ('1899-12-31 09:37:00',72,4035,3515,4285,2600,1302,102);
INSERT INTO `mtolive_matches`(`Time`,`match_number`,`red1`,`red2`,`red3`,`blue1`,`blue2`,`blue3`) VALUES ('1899-12-31 09:44:00',73,613,1923,1279,4281,2577,75);
INSERT INTO `mtolive_matches`(`Time`,`match_number`,`red1`,`red2`,`red3`,`blue1`,`blue2`,`blue3`) VALUES ('1899-12-31 09:51:00',74,265,3314,219,3340,2554,1228);
INSERT INTO `mtolive_matches`(`Time`,`match_number`,`red1`,`red2`,`red3`,`blue1`,`blue2`,`blue3`) VALUES ('1899-12-31 09:58:00',75,1811,3142,4361,2458,193,41);
INSERT INTO `mtolive_matches`(`Time`,`match_number`,`red1`,`red2`,`red3`,`blue1`,`blue2`,`blue3`) VALUES ('1899-12-31 10:05:00',76,3637,1676,2559,223,56,2070);
