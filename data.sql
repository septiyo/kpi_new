/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.20 : Database - kpi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `apps` */

CREATE TABLE `apps` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `NAMA_APLIKASI` varchar(100) DEFAULT NULL,
  `DEPART` varchar(100) DEFAULT NULL,
  `SELESAI` varchar(100) DEFAULT NULL,
  `IMPLEMENTASI` varchar(100) DEFAULT NULL,
  `PUBLISH` varchar(1) DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `apps` */

insert  into `apps`(`ID`,`NAMA_APLIKASI`,`DEPART`,`SELESAI`,`IMPLEMENTASI`,`PUBLISH`) values (1,'Aplikasi Timbangan BS digital (UMS)','RND','YES','YES','1'),(2,'Aplikasi Timbangan BS digital (MGFI)','RND','YES','YES','1'),(3,'Aplikasis Maintenance QR perawatan Mesin (MGFI)','MAINTENANCE','YES','YES','1'),(4,'Aplikasis Maintenance QR perawatan Mesin (UMS)','MAINTENANCE','',NULL,'1'),(5,'KJ (WEB-ANDROID)  Input KJ, Jadwal Kirim, Order, dan Konfirmasi','SALES LOGISTIC','YES','YES','1'),(6,'Festive Stock','HR-SALES','YES','YES','1'),(7,'DDS','HR-SALES','YES','YES','1'),(8,'TSR','HR-SALES','YES','YES','1'),(9,'Exhibition Apps','EXPORT','YES','YES','1'),(10,'Mail Template','EXPORT','YES','YES','1'),(11,'E-Product Spec','EXPORT',NULL,NULL,'1'),(12,'Mail Finance','FINANCE','YES',NULL,'1'),(13,'Aplikasi QA Produksi (Oven-Adonan) (MGFI)','QA','YES','YES','1'),(14,'Aplikasi QA Produksi (Oven-Adonan) (UMS)','QA','YES',NULL,'0'),(15,'Aplikasis QA Krim kemas (MGFI)','QA','YES','YES','1'),(16,'Aplikasis QA Krim kemas (UMS)','QA','YES',NULL,'0'),(17,'Pre Process','QA',NULL,NULL,'0'),(18,'E-Cleaning (MGFI)aplikasi checklist kebersihan equipment','PPI',NULL,NULL,'1'),(19,'C-APP (Ceklist Kendarran UNIMOS)','PPI','YES','YES','1'),(20,'C-APP2 (Ceklist Kendarran MGFI)','PPI','YES','YES','1'),(21,'IO-Goods (Android)','PERSONALIA & LEGAL\r\n','YES','YES','1'),(22,'M-Check (M-Check) MGFI','TAC-GA\r\n','YES','YES','1'),(23,'M-Check (M-Check) UMS','TAC-GA\r\n','YES','','0'),(24,'Ceklist 5 R Digital (MGFI)','TAC-GA\r\n',NULL,NULL,'1'),(25,'Ceklist 5 R Digital (UMS)','TAC-GA\r\n',NULL,NULL,'0'),(26,'E-Supplier','PROCUREMENT\r\n','YES','YES','1'),(27,'Kokola.co.id','MD','YES','YES','0'),(28,'litelmaxx.com','MD','YES','YES','0'),(29,'E-Trans','MD','YES',NULL,'0'),(30,'Feedback supplier','RND','YES',NULL,'1'),(31,'Form Trial R&D','RND',NULL,NULL,'1'),(32,'Customer complain ','RND',NULL,NULL,'1'),(33,'Checklist Cleaning area Preaparation, Grinding Gula dan Grinding BS','RND',NULL,NULL,'1'),(34,'Checklist equipment peralatan forklift, hand pallet, Palletmover dan Pallet Plastik','PPI',NULL,NULL,'1'),(35,'Proposal Proyek Teknik','TEKNIK',NULL,NULL,'1'),(36,'E-Meeting','MD',NULL,NULL,'0');

/*Table structure for table `bulan` */

CREATE TABLE `bulan` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `BULAN` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `bulan` */

insert  into `bulan`(`ID`,`BULAN`) values (1,'Januari'),(2,'Februari'),(3,'Maret'),(4,'April'),(5,'Mei'),(6,'Juni'),(7,'Juli'),(8,'Agustus'),(9,'September'),(10,'Oktober'),(11,'November'),(12,'Desember');

/*Table structure for table `tahunan` */

CREATE TABLE `tahunan` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `BULAN` varchar(100) DEFAULT NULL,
  `PROJECT` varchar(200) DEFAULT NULL,
  `PUBLISH` varchar(1) DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tahunan` */

insert  into `tahunan`(`ID`,`BULAN`,`PROJECT`,`PUBLISH`) values (1,'3','KJ','1'),(2,'4','E-Maintenance','1'),(3,'5','E-Proposal Android','1'),(4,'6','In Out Goods','1'),(5,'7','KJ Android','1'),(6,'8','E-Trans','1'),(7,'8','Maintenance','1'),(8,'9','Upgrade Timbangan + Finger','1'),(9,'9','TSR','1'),(10,'9','Feedback Supplier','1'),(11,'9','QA Oven Adonan','1'),(12,'9','QA Krim Kemas','1'),(13,'9','E-Catalog','1'),(14,'10','E-Timbangan Recycle BS 2 (UMS) + Kartu Stock','1'),(15,'10','Ceklist Kendaraan Gudang Sparepart','1'),(16,'10','E-Forecast KJ (WEB)','1'),(17,'11','E-Cleaning','1'),(18,'11','E-Mail Procurement','1'),(19,'11','E-Meeting','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
