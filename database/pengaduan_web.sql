# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2019-08-12 06:39:31
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL DEFAULT '0',
  `username` varchar(25) NOT NULL DEFAULT '',
  `password` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(25) NOT NULL DEFAULT '',
  `no_telp` varchar(20) NOT NULL DEFAULT '',
  `level` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES ('CTS001','bambang','bam','bambang@gmail.com','08976545','customer_service'),('CTS01','custumer','custumer','custumer@gmail.com','089876678','customer_service'),('MNJ01','admin','admin','admin@gmail.com','089786868','manajer');
