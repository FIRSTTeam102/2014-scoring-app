USE team102_2014;

CREATE TABLE `ref_codes` (
  `domain` varchar(30) NOT NULL,
  `abbreviation` varchar(30) NOT NULL,
  `Meaning` varchar(100) NOT NULL,
  PRIMARY KEY (`domain`,`abbreviation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('DRIVE_TYPE','MECANUM','Mecanum');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('DRIVE_TYPE','OTHER','Other');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('DRIVE_TYPE','TANK','Tank');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('POSSESS','CARRY','Carry');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('POSSESS','CATCH','Catch');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('POSSESS','HERD','Herd');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('POSSESS','LAUNCH','Launch');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('TRANSMISSION','BELT','Belt');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('TRANSMISSION','CHAIN','Chain');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('TRANSMISSION','DIRECT','Direct Drive');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('YES_NO','NO','No');
INSERT INTO `ref_codes`(`domain`,`abbreviation`,`Meaning`) VALUES ('YES_NO','YES','Yes');
