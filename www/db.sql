-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: cookbook
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `recipes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) unsigned NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`) USING BTREE,
  CONSTRAINT `recipes_users_fk` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (2,6,'asdsa','dsadsadsadsadsad sadsadhsag dkjsabckjxzcbhdhc disonacuidsacndsacndis ocbsdavbsduia vncdsaoicn dspomc sdoadso cpmsd vpmdsv[','bfdsjkfh hsd hfheh wfiuew wiue gweug ewiu uiweg tewiug tuewigfdsbfds f s fusdg fewiufewu we wi i weui wiue fewgf bsdk sbvgd  egwifu fwie fwueih fweib fwef ','2018-12-23 05:33:28');
INSERT INTO `recipes` VALUES (3,5,'sacfasdfdsv','dsafldskf cdns coinvod sv mcpodso,vpsd,c[ps,cpds[,cds[p,v[',' dsak fask fnasfh ew fe fowehif wei fweh fewo iew ofihwe fweh fwe fweo fweofhew fwe fio fewi few ifwe hew fw ef we fwoeih fwei fihew fw efwe f ewoihf wefo hewf hdha dhqw odhqwoi dqwiho doqwh dd hqo','2018-12-23 05:33:28');
INSERT INTO `recipes` VALUES (5,6,'skdfj dsf jdsklf j','dsjfdks fjksd jflkdsj fiew fjwioejf iweo fjioew hgowvv bewohgv oewihgoiewh vowieh voweh ','dsiokv sdoifh ewiohf ois hfoweihf weiofew hof hewoifh ewoih fowieh f oiwehfowefhoewi hfoiewh fihoweoifh ewoihfoewhovweov ewo iewiobv weivnoewivwe ve w eowf weofnwo e','2018-12-23 08:33:28');
INSERT INTO `recipes` VALUES (6,4,'salkds akfsdl fjd ','dls;fj dslfj sdjf skdhf ureh go nboiehg ergei jgiovndfjkvdfuiviov hwioeh  ','as fhdsoufih ewoi fhoewih fweih fewoih fewoih fwoeh fwe oho ohsdad','2018-12-23 08:33:28');
INSERT INTO `recipes` VALUES (7,3,'salfas jfas jfa ','jpdaso fjdspofj iwej fwiej fiew jfoewjfo jweiofj weoifjwoeif woei fjewi fiewjo fwejof jwe','js dfiewjfiojwe jfewjfjwe ofjewofjwejf owiejfowiejfoijewo fijwfbkvbds bviewu fbiuwefb ewui bfiewubfuwefoiewfbwief wei fiuew fewfhewoi fhwehf weh foiweh fh w','2018-12-23 08:33:28');
INSERT INTO `recipes` VALUES (8,2,'dsfjh dsfhsdf hsdufh','iodsjf sodijf iodsjfois jdfioejwf iewof ewhfoiew hfoiewhfoiewh foiewh foiew hfoiwe hfhiwe oifhewoih foiewh foiewh foiewfh ewifh','sdofj oewifjewijf weiofjioew fj weofjoewij fbvkcnvcx vso dvosidnvsviosdhviornsdv o weo fhov orh gfrio ghoeir goerih gogrheo gi erohg oerihg oerigoerihg oierhg oriehge rhg herogh erohg oerh gerohghofds hofhg oshfd gherohg eroh','2018-12-23 08:33:28');
INSERT INTO `recipes` VALUES (9,4,'sdfjds fds jf','sdijf ij fiwejf iowe jfiowje fjioew jfioewj fjweifj ewiojfewjfjewfe wfe wfjweoi fjewiojfwioejfiwje ','oies fiwejfo iewfio ewhoi fhwefh weiugfbvdsbv dsb vwbevdsioewh oewghewoi hfowie hfh weofhweoihf wueh fweh fuew hfwuei hfewh fuhewfh ewiubvjvb dvb eiug reiuhfgerihgwerhfiuwegriweh fweh ifweiho fweiuf h','2018-12-23 08:33:28');
INSERT INTO `recipes` VALUES (10,7,'dsgsdgsdg','asfdsfshfiew fhewiu fhewui fhewuihf ewuihf uewih fiuewhf iuew hfiuewh fuwieh fuhwie fiuewh fuiewh fuw','dsio hfwefo ewiof hweiohf weihf oiew hfio ewhfhiwoe fhwoeihf owieh fewh fiowe fw efihwehf oiweh foiew hfwioef iowehf ioewfhowefh ewhfh hw oegh oweihgohierhg eoirh goerih ger ghoergnfdnodfgdf oigho gheroihgoierhg oerihgoeihrhg ioerh goerig oireh gerhogiheroig heorihgoierhgoerhgoiherohg','2018-12-23 08:33:28');
INSERT INTO `recipes` VALUES (11,7,'sjadfi fi jfioj ','poafj poajf ewoj fwei fjewiof jweio fjweijf oiwej ffoijs ewij fwoiefj ','oisj fiwoej fiewjfiwje fijewo fjoiewj foiewjf iewojf iweh983hewiuhfuewih fuiew few figwue fguwefiuewg fiugwef gwieugf wiu','2018-12-23 08:33:28');
INSERT INTO `recipes` VALUES (12,7,'kdslfd','ldsakfdskf dslfj ifjew iohf ewoiuhf weoh fwei fiowe fewio fiew fjwiepf wpeojfwe jfwej pfwew','ksandkf dshf ewioh fewoihfwhef wefh wehf weiuhf uwe hewuhf ewiuh fwhe fhew fhuihew fhewuihfweuihfuiwehf hfweuihfewuihfiuewhfuhewf few fewh if ehwf hwieh fewiu hfwueh fh weiu fhewiuf weiuh fwehf efwi wefih  fiwe fwei fhwehf wehfwef iuwef efi wehfu ','2018-12-23 08:33:28');
INSERT INTO `recipes` VALUES (13,7,'sadsa','asdsadasdas','  asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsad asdsadsadsadsadsadsadsadvdsgfdbf fd fd rt rrtrt  asdsadsadsadsadsadsadsad fd et ertbet fd fd rt rrtrt  asdsadsadsadsadsadsadsad fd et ertbet fd fd rt rrtrt  asdsadsadsadsadsadsadsad fd et ertbet fd fd rt rrtrt  asdsadsadsadsadsadsadsad fd et ertbet fd fd rt rrtrt  asdsadsadsadsadsadsadsad fd et ertbet fd fd rt rrtrt  asdsadsadsadsadsadsadsad fd et ertbet fd fd rt rrtrt  asdsadsadsadsadsadsadsad fd et ertbet fd fd rt rrtrt  asdsadsadsadsadsadsadsad fd et ertbet ','2018-12-24 01:09:46');
INSERT INTO `recipes` VALUES (16,9,'dskjl;sak;dlksa;l ','dsjfkds dslkf dsflds f,mds fl','lkad aslf adlf dslfsd grjg rmgmergerlmgle rgle r','2018-12-24 17:11:34');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `date` datetime DEFAULT NULL,
  `subnews` int(11) DEFAULT '0',
  `access_level` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'asdsa','asd@dsf.rt','375f7c94cb4af7bcfb6afff9046bf7a6','2018-12-23 02:33:28',1,1);
INSERT INTO `users` VALUES (2,'asdsa','asd@dsf.rt','375f7c94cb4af7bcfb6afff9046bf7a6','2018-12-23 02:34:30',1,1);
INSERT INTO `users` VALUES (3,'asdsasad','asdasd@dasa.ru','5e39de4b07c2754ef01af6e5a3da3469','2018-12-23 02:51:55',1,1);
INSERT INTO `users` VALUES (4,'asdsasadsadsa','asdasd@dsadasa.ru','8b235645ebad459e464707dbfad302f6','2018-12-23 02:52:31',1,1);
INSERT INTO `users` VALUES (5,'asdsasadsadsasa','asdasd@dsadasa.rua','ad41b3d77a7a512f2382ee58eb53cb74','2018-12-23 02:52:43',1,1);
INSERT INTO `users` VALUES (6,'redrik234','zfas@yandex.ru1','d0fb1625c2453fc80769deb4b7780c87','2018-12-23 13:30:19',1,1);
INSERT INTO `users` VALUES (7,'vizo@nando1.com','vizo@nando1.com','d0fb1625c2453fc80769deb4b7780c87','2018-12-23 15:30:13',1,0);
INSERT INTO `users` VALUES (8,'redrik','ewrew@324324.ru','d96aa974a0f522d549a5694d29386f1d','2018-12-24 10:11:01',1,0);
INSERT INTO `users` VALUES (9,'tron234','tron@tron.ru','6cf6a860a5e375a940eb8d56ca9f8b0f','2018-12-24 17:09:36',1,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cookbook'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-13 23:51:41
