USE team102_2014;

CREATE TABLE `tournaments` (
  `ID` varchar(20) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tournaments`(`ID`,`Title`,`active`) VALUES ('CLIFTON','Clifton 15-16 Mar','N');
INSERT INTO `tournaments`(`ID`,`Title`,`active`) VALUES ('MTOLIVE','Mt. Olive 1-2 Mar','N');
INSERT INTO `tournaments`(`ID`,`Title`,`active`) VALUES ('PRAC','Practice 22-23 Feb ','Y');
