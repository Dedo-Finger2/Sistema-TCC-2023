DROP DATABASE IF EXISTS `gestao-transporte-publico`;
CREATE DATABASE  IF NOT EXISTS `gestao-transporte-publico`;
USE `gestao-transporte-publico`;

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=299 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
INSERT INTO `addresses` VALUES (1,'default','Fim de Linha de Fonte da Caixa','Camaçari',NULL,NULL),(2,'default','R. João Araújo','Camaçari',NULL,NULL),(3,'default','Rua Duque de Caxias','Camaçari',NULL,NULL),(4,'default','Rua “Sem Denominação”','Camaçari',NULL,NULL),(5,'default','Rua das Flores','Camaçari',NULL,NULL),(6,'default','R. Bosque','Camaçari',NULL,NULL),(7,'default','R. Nova Aliança','Camaçari',NULL,NULL),(8,'default','Trav. Açaí','Camaçari',NULL,NULL),(9,'default','R. Eteno','Camaçari',NULL,NULL),(10,'default','R. Prainha','Camaçari',NULL,NULL),(11,'default','Principal do Limoeiro','Camaçari',NULL,NULL),(12,'default','R. do Telégrafo','Camaçari',NULL,NULL),(13,'default','Cond. Duo','Camaçari',NULL,NULL),(14,'default','Praça da Lua','Camaçari',NULL,NULL),(15,'default','Rua Catuama','Camaçari',NULL,NULL),(16,'default','R. Areia','Camaçari',NULL,NULL),(17,'default','Av. Valdelice dos Santos de Souza','Camaçari',NULL,NULL),(18,'default','R. Espírito Santo','Camaçari',NULL,NULL),(19,'default','R. Felicidade','Camaçari',NULL,NULL),(20,'default','R. Sucupira','Camaçari',NULL,NULL),(21,'default','Rua de Contorno do Centro Administrativo','Camaçari',NULL,NULL),(22,'default','Santa Maria','Camaçari',NULL,NULL),(23,'default','R. Petrópolis','Camaçari',NULL,NULL),(24,'default','Residencial Caminho do Rio','Camaçari',NULL,NULL),(25,'default','Condomínio Viena','Camaçari',NULL,NULL),(26,'default','R. de Contorno do Centro Administrativo','Camaçari',NULL,NULL),(27,'default','Rua Cora Coralina I','Camaçari',NULL,NULL),(28,'default','R. Santa Bárbara','Camaçari',NULL,NULL),(29,'default','Residencias Alpha 4/5','Camaçari',NULL,NULL),(30,'default','Rua Direta da Massaranduba','Camaçari',NULL,NULL),(31,'default','Fim de Linha na Estação de Trem','Camaçari',NULL,NULL),(32,'default','R. Moreira César','Camaçari',NULL,NULL),(33,'default','Rua B2 Poloplast','Camaçari',NULL,NULL),(34,'default','R. Comandante Avelar','Camaçari',NULL,NULL),(35,'default','Av. Tupinambá (antiga Radial C)','Camaçari',NULL,NULL),(36,'default','Posto Trevo','Camaçari',NULL,NULL),(37,'default','Av. Eixo Urbano Central','Camaçari',NULL,NULL),(38,'default','Residencias Alpha 1/2/3','Camaçari',NULL,NULL),(39,'default','R. Irará','Camaçari',NULL,NULL),(40,'default','R. Otávio Mangabeira','Camaçari',NULL,NULL),(41,'default','Rua K','Camaçari',NULL,NULL),(42,'default','Av. Aliomar Baleeiro','Camaçari',NULL,NULL),(43,'default','Av. Concêntrica','Camaçari',NULL,NULL),(44,'default','R. Conchinhas','Camaçari',NULL,NULL),(45,'default','Retorno Portão','Camaçari',NULL,NULL),(46,'default','Rua Boca da Capivara (Micos)','Camaçari',NULL,NULL),(47,'default','R. da Bandeira','Camaçari',NULL,NULL),(48,'default','R. Page','Camaçari',NULL,NULL),(49,'default','Residencial Parque das Algarobas','Camaçari',NULL,NULL),(50,'default','Av. Jorge Amado','Camaçari',NULL,NULL),(51,'default','Av. Valdelice Santos de Souza','Camaçari',NULL,NULL),(52,'default','Av. Deputados Luís Eduardo Magalhães','Camaçari',NULL,NULL),(53,'default','Praça da Matriz','Camaçari',NULL,NULL),(54,'default','R. Alto da Bela Vista','Camaçari',NULL,NULL),(55,'default','Centro Administrativo','Camaçari',NULL,NULL),(56,'default','Copec','Camaçari',NULL,NULL),(57,'default','R. Guanambi','Camaçari',NULL,NULL),(58,'default','Residencial Terra Brasilis','Camaçari',NULL,NULL),(59,'default','R. Bahia','Camaçari',NULL,NULL),(60,'default','Limpec','Camaçari',NULL,NULL),(61,'default','Rua Acácia Rosa','Camaçari',NULL,NULL),(62,'default','Av. Otávio Mangabeira','Camaçari',NULL,NULL),(63,'default','R. da Caixa D’Água','Camaçari',NULL,NULL),(64,'default','R. Direta de Jauá','Camaçari',NULL,NULL),(65,'default','R. Gajirus','Camaçari',NULL,NULL),(66,'default','Rua Francisco Drumond','Camaçari',NULL,NULL),(67,'default','Av. Lauro de Freitas','Camaçari',NULL,NULL),(68,'default','R. Largo de São Bento','Camaçari',NULL,NULL),(69,'default','“Orla Parafuso”','Camaçari',NULL,NULL),(70,'default','R. Eixo D','Camaçari',NULL,NULL),(71,'default','Rua I','Camaçari',NULL,NULL),(72,'default','Rua da Bandeira','Camaçari',NULL,NULL),(73,'default','Rua Comendador Avelar','Camaçari',NULL,NULL),(74,'default','Via de Ligação','Camaçari',NULL,NULL),(75,'default','Via Axial','Camaçari',NULL,NULL),(76,'default','R. Colônia Boa União','Camaçari',NULL,NULL),(77,'default','R. Sr. do Bonfim','Camaçari',NULL,NULL),(78,'default','Av. Eixo Urbano','Camaçari',NULL,NULL),(79,'default','Rua Júlio Leitão','Camaçari',NULL,NULL),(80,'default','Rua Dois de Julho','Camaçari',NULL,NULL),(81,'default','Rua das Aroeiras','Camaçari',NULL,NULL),(82,'default','R. Deputado Luís Eduardo Magalhães','Camaçari',NULL,NULL),(83,'default','Av. Vereador Pedro Ribeiro de Freitas','Camaçari',NULL,NULL),(84,'default','BA-512','Camaçari',NULL,NULL),(85,'default','R. Rafael','Camaçari',NULL,NULL),(86,'default','UNEB','Camaçari',NULL,NULL),(87,'default','R. Eixo Urbano Central','Camaçari',NULL,NULL),(88,'default','Guarajuba','Camaçari',NULL,NULL),(89,'default','Av. Luiz Gonzaga (Av. Oeste)','Camaçari',NULL,NULL),(90,'default','Rua da Glória (Gleba C)','Camaçari',NULL,NULL),(91,'default','Av. Camassarys','Camaçari',NULL,NULL),(92,'default','R. Domingos dos Santos','Camaçari',NULL,NULL),(93,'default','Senai/IFBA','Camaçari',NULL,NULL),(94,'default','Tv. Cora Coralina','Camaçari',NULL,NULL),(95,'default','Rua H e Rua A)','Camaçari',NULL,NULL),(96,'default','Caminho D6','Camaçari',NULL,NULL),(97,'default','Tv. Av. Leste','Camaçari',NULL,NULL),(98,'default','Rua Costa Pinto','Camaçari',NULL,NULL),(99,'default','Rua Triângulo do Leste','Camaçari',NULL,NULL),(100,'default','R. Pé de Areia','Camaçari',NULL,NULL),(101,'default','Terminal','Camaçari',NULL,NULL),(102,'default','Solar da Costa','Camaçari',NULL,NULL),(103,'default','Boulevard','Camaçari',NULL,NULL),(104,'default','BA-529 (Estrada Velha)','Camaçari',NULL,NULL),(105,'default','R. de Contorno Centro Administrativo','Camaçari',NULL,NULL),(106,'default','Praça João Tamos Coroa (dos 46)','Camaçari',NULL,NULL),(107,'default','R. João Ursulo','Camaçari',NULL,NULL),(108,'default','Via Cascalheira','Camaçari',NULL,NULL),(109,'default','R. da Grama','Camaçari',NULL,NULL),(110,'default','I','Camaçari',NULL,NULL),(111,'default','Praça João Ramos Coroa (dos 46)','Camaçari',NULL,NULL),(112,'default','R. Raquel de Queiroz','Camaçari',NULL,NULL),(113,'default','Av. Alameda','Camaçari',NULL,NULL),(114,'default','Via Parafuso (Ba-535)','Camaçari',NULL,NULL),(115,'default','R. Martins XVII','Camaçari',NULL,NULL),(116,'default','R. Otávio Mangabeira (Lama Preta)','Camaçari',NULL,NULL),(117,'default','R. Acácia Vermelha','Camaçari',NULL,NULL),(118,'default','Rua das Almas','Camaçari',NULL,NULL),(119,'default','R. Campo Formoso','Camaçari',NULL,NULL),(120,'default','R. Abrantes','Camaçari',NULL,NULL),(121,'default','Residencial Morada dos Sabiás','Camaçari',NULL,NULL),(122,'default','R. Atalaia','Camaçari',NULL,NULL),(123,'default','R. Feira','Camaçari',NULL,NULL),(124,'default','R. Vieira de Mello','Camaçari',NULL,NULL),(125,'default','R. José Anchieta','Camaçari',NULL,NULL),(126,'default','R. Belgrado','Camaçari',NULL,NULL),(127,'default','Alphaville Litoral Norte','Camaçari',NULL,NULL),(128,'default','R. Bandeira','Camaçari',NULL,NULL),(129,'default','Residenciais Morada dos Pardais 1/2/3','Camaçari',NULL,NULL),(130,'default','Rua Abaré','Camaçari',NULL,NULL),(131,'default','Retorno','Camaçari',NULL,NULL),(132,'default','R. Amaralina','Camaçari',NULL,NULL),(133,'default','Av. Parque das Palmeiras','Camaçari',NULL,NULL),(134,'default','Rua Pantanal','Camaçari',NULL,NULL),(135,'default','Rua Governador Mangabeira','Camaçari',NULL,NULL),(136,'default','Travessa Nossa Senhora do Carmo','Camaçari',NULL,NULL),(137,'default','Barra do Jacuípe','Camaçari',NULL,NULL),(138,'default','Retorno Jacuípe','Camaçari',NULL,NULL),(139,'default','Condomínio Villa Bella','Camaçari',NULL,NULL),(140,'default','BA-535','Camaçari',NULL,NULL),(141,'default','R. Boca da Capivara (Micos)','Camaçari',NULL,NULL),(142,'default','R. Francisco Drumond','Camaçari',NULL,NULL),(143,'default','R. Abaré','Camaçari',NULL,NULL),(144,'default','R. Adelina de Sá','Camaçari',NULL,NULL),(145,'default','Rua Cantuária','Camaçari',NULL,NULL),(146,'default','R. Costa Azul','Camaçari',NULL,NULL),(147,'default','R. Santa Maria Adelina','Camaçari',NULL,NULL),(148,'default','R. Parque Central','Camaçari',NULL,NULL),(149,'default','Rua José Anchieta','Camaçari',NULL,NULL),(150,'default','R. Comunitária','Camaçari',NULL,NULL),(151,'default','Tv. Afrânio Peixoto','Camaçari',NULL,NULL),(152,'default','Rua do Meio','Camaçari',NULL,NULL),(153,'default','R. Padre Paulo Maria Tonucci','Camaçari',NULL,NULL),(154,'default','Outlet Premium','Camaçari',NULL,NULL),(155,'default','Parafuso','Camaçari',NULL,NULL),(156,'default','R. Capela','Camaçari',NULL,NULL),(157,'default','Rua Marlim Branco','Camaçari',NULL,NULL),(158,'default','R. das Almas','Camaçari',NULL,NULL),(159,'default','Dunas','Camaçari',NULL,NULL),(160,'default','Av. Tiradentes (Abrantes)','Camaçari',NULL,NULL),(161,'default','Av. Rio Camaçari','Camaçari',NULL,NULL),(162,'default','R. Orquídeas','Camaçari',NULL,NULL),(163,'default','Estrada 25','Camaçari',NULL,NULL),(164,'default','Rua das Aroeiras,','Camaçari',NULL,NULL),(165,'default','Rua Eucalipto','Camaçari',NULL,NULL),(166,'default','R. do Alecrim','Camaçari',NULL,NULL),(167,'default','R. Ponta Verde','Camaçari',NULL,NULL),(168,'default','Praça Abrantes','Camaçari',NULL,NULL),(169,'default','Itacimirim (Até Condomínio Enseada)','Camaçari',NULL,NULL),(170,'default','R. Direta de Arembepe','Camaçari',NULL,NULL),(171,'default','Av. Luís Eduardo Magalhães','Camaçari',NULL,NULL),(172,'default','R. Acácia Rosa','Camaçari',NULL,NULL),(173,'default','Av. Deputado Luís Eduardo Magalhães','Camaçari',NULL,NULL),(174,'default','Residenciais Morada dos Canários','Camaçari',NULL,NULL),(175,'default','Rua C','Camaçari',NULL,NULL),(176,'default','Rua Ibicaraí','Camaçari',NULL,NULL),(177,'default','R. Climério de Oliveira','Camaçari',NULL,NULL),(178,'default','Rua Acajutiba','Camaçari',NULL,NULL),(179,'default','Reserva Parque','Camaçari',NULL,NULL),(180,'default','Estação Rodoviária','Camaçari',NULL,NULL),(181,'default','Rua Principal do Poloplast','Camaçari',NULL,NULL),(182,'default','Atacadão','Camaçari',NULL,NULL),(183,'default','Via Parafuso (BA-535)','Camaçari',NULL,NULL),(184,'default','Rua A','Camaçari',NULL,NULL),(185,'default','Av. Deputado Luís Eduardo Magalhães (antiga Comercial)','Camaçari',NULL,NULL),(186,'default','Marginal do Boulevard Shopping','Camaçari',NULL,NULL),(187,'default','Rua São Lázaro','Camaçari',NULL,NULL),(188,'default','Av. Luiz Gonzaga','Camaçari',NULL,NULL),(189,'default','Fim de Linha no Campo Futebol','Camaçari',NULL,NULL),(190,'default','Av. Eixo Urbano Sudoeste','Camaçari',NULL,NULL),(191,'default','Cajazeiras','Camaçari',NULL,NULL),(192,'default','Rua da Massaranduba','Camaçari',NULL,NULL),(193,'default','Av. Florestal','Camaçari',NULL,NULL),(194,'default','Rua do Areal II','Camaçari',NULL,NULL),(195,'default','Residenciais Alphas 1/2/3','Camaçari',NULL,NULL),(196,'default','Rua da Jabuticabeira','Camaçari',NULL,NULL),(197,'default','Rua Santa Maria Adelina','Camaçari',NULL,NULL),(198,'default','Rua Peres','Camaçari',NULL,NULL),(199,'default','Residenciais Morada dos Sabiás','Camaçari',NULL,NULL),(200,'default','Rua Santa Bárbara','Camaçari',NULL,NULL),(201,'default','Fim de Linha do Sítio Verde','Camaçari',NULL,NULL),(202,'default','Av. 28 de Setembro','Camaçari',NULL,NULL),(203,'default','Rua Marlim Azul','Camaçari',NULL,NULL),(204,'default','Avenida Tupinambá (antiga Radial C)','Camaçari',NULL,NULL),(205,'default','R. Principal Portal Abrantes','Camaçari',NULL,NULL),(206,'default','Santo Antônio','Camaçari',NULL,NULL),(207,'default','Cascalheira','Camaçari',NULL,NULL),(208,'default','Rua Dois de Maio','Camaçari',NULL,NULL),(209,'default','Morada Premium','Camaçari',NULL,NULL),(210,'default','R. Petrolina','Camaçari',NULL,NULL),(211,'default','BA-099','Camaçari',NULL,NULL),(212,'default','BA-529','Camaçari',NULL,NULL),(213,'default','Hosp. Santa Helena','Camaçari',NULL,NULL),(214,'default','III','Camaçari',NULL,NULL),(215,'default','R. Acupe','Camaçari',NULL,NULL),(216,'default','Rua Flor do Campo','Camaçari',NULL,NULL),(217,'default','Rua da Prainha','Camaçari',NULL,NULL),(218,'default','Av. Tupinambás (antiga Radial C)','Camaçari',NULL,NULL),(219,'default','R. Ipanema','Camaçari',NULL,NULL),(220,'default','Av. de Contorno do Centro Administrativo','Camaçari',NULL,NULL),(221,'default','II','Camaçari',NULL,NULL),(222,'default','R. Elisio Mello','Camaçari',NULL,NULL),(223,'default','R. Grama','Camaçari',NULL,NULL),(224,'default','Lucaia','Camaçari',NULL,NULL),(225,'default','R. 2 de Maio','Camaçari',NULL,NULL),(226,'default','Tv. Açaí','Camaçari',NULL,NULL),(227,'default','Est. Canto dos Pássaros','Camaçari',NULL,NULL),(228,'default','Fim de Linha','Camaçari',NULL,NULL),(229,'default','Itacimirim (Até Cond. Enseada)','Camaçari',NULL,NULL),(230,'default','R. Júlio Leitão','Camaçari',NULL,NULL),(231,'default','R. Duque de Caxias','Camaçari',NULL,NULL),(232,'default','R. Casinhas Verdes Horizontes','Camaçari',NULL,NULL),(233,'default','R. Cora Coralina','Camaçari',NULL,NULL),(234,'default','Rua Acácia Vermelha','Camaçari',NULL,NULL),(235,'default','Residenciais Caminho do Mar I','Camaçari',NULL,NULL),(236,'default','R. Triângulo do Leste','Camaçari',NULL,NULL),(237,'default','R. da Caixa D´Água','Camaçari',NULL,NULL),(238,'default','Residenciais Caminho do Mar III','Camaçari',NULL,NULL),(239,'default','R. Pernambuco','Camaçari',NULL,NULL),(240,'default','Entrada de Jauá','Camaçari',NULL,NULL),(241,'default','Residenciais Alpha 4/5','Camaçari',NULL,NULL),(242,'default','R. Direta Canto dos Pássaros','Camaçari',NULL,NULL),(243,'default','R. Elísio Mello','Camaçari',NULL,NULL),(244,'default','BA-535 (Via Parafuso)','Camaçari',NULL,NULL),(245,'default','Rua Maranhão','Camaçari',NULL,NULL),(246,'default','R. Campinas','Camaçari',NULL,NULL),(247,'default','R. Horizontes','Camaçari',NULL,NULL),(248,'default','Fim de Linha da Gleba E','Camaçari',NULL,NULL),(249,'default','Av. Comercial','Camaçari',NULL,NULL),(250,'default','Rua B4','Camaçari',NULL,NULL),(251,'default','Rua das Conchinhas','Camaçari',NULL,NULL),(252,'default','R. Nova da Palha (Primeiro de Agosto)','Camaçari',NULL,NULL),(253,'default','R. Guarani','Camaçari',NULL,NULL),(254,'default','Fim de Linha na Igreja São Bento','Camaçari',NULL,NULL),(255,'default','R. 4ª Ligação','Camaçari',NULL,NULL),(256,'default','Av. Sul','Camaçari',NULL,NULL),(257,'default','R. Nova Camaçari (principal do Inocoop)','Camaçari',NULL,NULL),(258,'default','R. Alagoinhas','Camaçari',NULL,NULL),(259,'default','Av. Palmeiras','Camaçari',NULL,NULL),(260,'default','R. Lagoa Branca','Camaçari',NULL,NULL),(261,'default','R. Casinhas do Verdes Horizontes','Camaçari',NULL,NULL),(262,'default','HGC','Camaçari',NULL,NULL),(263,'default','R. Filogônio Gomes de Oliveira','Camaçari',NULL,NULL),(264,'default','Rua do Toco','Camaçari',NULL,NULL),(265,'default','Residencial Morada dos Canários','Camaçari',NULL,NULL),(266,'default','R. Marechal Floriano Peixoto','Camaçari',NULL,NULL),(267,'default','R. Cajueiro','Camaçari',NULL,NULL),(268,'default','Rua Piaçaveira','Camaçari',NULL,NULL),(269,'default','Residencial Parque São Vicente (Rua A','Camaçari',NULL,NULL),(270,'default','R. 2ª Ligação','Camaçari',NULL,NULL),(271,'default','Residenciais Moradas dos Pardais 1/2/3','Camaçari',NULL,NULL),(272,'default','R. Aquárius','Camaçari',NULL,NULL),(273,'default','BA-099 direto','Camaçari',NULL,NULL),(274,'default','Feira','Camaçari',NULL,NULL),(275,'default','retorno BA-099','Camaçari',NULL,NULL),(276,'default','Rodoviária','Camaçari',NULL,NULL),(277,'default','Av. Dr. Manoel Mercês (antiga Radial B)','Camaçari',NULL,NULL),(278,'default','R. Dom Avelar','Camaçari',NULL,NULL),(279,'default','Marginal Boulevard Shopping','Camaçari',NULL,NULL),(280,'default','Av. 28 Setembro','Camaçari',NULL,NULL),(281,'default','R. Segundo Sendes','Camaçari',NULL,NULL),(282,'default','Av. Industrial Urbana','Camaçari',NULL,NULL),(283,'default','R. Costa do Marfim','Camaçari',NULL,NULL),(284,'default','Corujão','Camaçari',NULL,NULL),(285,'default','Retorno Corujão','Camaçari',NULL,NULL),(286,'default','Cetrel','Camaçari',NULL,NULL),(287,'default','R. Costa Pinto','Camaçari',NULL,NULL),(288,'default','Boulevard Shopping (R. Lateral)','Camaçari',NULL,NULL),(289,'default','R. Alecrim','Camaçari',NULL,NULL),(290,'default','R. Hidrogênio','Camaçari',NULL,NULL),(291,'default','Praça da Harmonia','Camaçari',NULL,NULL),(292,'default','R. Lateral de Dentro (Vila Cantuária)','Camaçari',NULL,NULL),(293,'default','R. Laranjeiras','Camaçari',NULL,NULL),(294,'default','R. Angico (Retorno)','Camaçari',NULL,NULL),(295,'default','Av. Tiradentes','Camaçari',NULL,NULL),(296,'default','Condomínio Duo','Camaçari',NULL,NULL),(297,'default','Rua Delegado Clayton Leão Chaves','Camaçari',NULL,NULL),(298,'default','R. das Flores','Camaçari',NULL,NULL);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` bigint unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_address_id_foreign` (`address_id`),
  CONSTRAINT `users_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Usuario','user@user.com','2023-12-19 15:09:22','$2y$12$nB9gBmobh.ZZwsyS5yN0juL0W.jGIbOZkKujXzucmp17TnefHPFZy',1,'rgmclFJqSRZI3auHnlpzlWRFVmLgZ4PaHuLG34VqTTCc35T0Nc7ATzzh2Y3P','2023-12-19 15:09:22','2023-12-19 15:09:22'),(2,'Derick Weissnat','dcummerata@example.com','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',138,'dEehtYaFnA','2023-12-19 15:09:22','2023-12-19 15:09:22'),(3,'Gilda White','schmidt.tremaine@example.com','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',121,'1BwJIdvfJt','2023-12-19 15:09:22','2023-12-19 15:09:22'),(4,'Mrs. Gisselle Koss DDS','miles.lesch@example.net','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',114,'KiKhBrmFku','2023-12-19 15:09:22','2023-12-19 15:09:22'),(5,'Khalid Breitenberg','rice.nova@example.com','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',131,'ewBE0N8rc4','2023-12-19 15:09:22','2023-12-19 15:09:22'),(6,'Andy Douglas','raphaelle76@example.org','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',79,'EgdGrs8hjW','2023-12-19 15:09:22','2023-12-19 15:09:22'),(7,'Dr. Tanner Corwin Sr.','betsy51@example.org','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',187,'3SBpTmLQk6','2023-12-19 15:09:22','2023-12-19 15:09:22'),(8,'Giovanna Franecki Sr.','genesis.cartwright@example.org','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',199,'xHExJgdRFw','2023-12-19 15:09:22','2023-12-19 15:09:22'),(9,'Lonny Cruickshank','claudia09@example.org','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',47,'mBIgQtAA7Y','2023-12-19 15:09:22','2023-12-19 15:09:22'),(10,'Ezequiel Bashirian','cmorissette@example.com','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',152,'kX7W8zLKDF','2023-12-19 15:09:22','2023-12-19 15:09:22'),(11,'Kyle Homenick','finn20@example.com','2023-12-19 15:09:22','$2y$12$.m5Xmr7fSLEy7E0YWLQu3OOn/arao1xg29dPxhFLVtE0O0KIK/g3q',135,'CVG9FaiZ73','2023-12-19 15:09:22','2023-12-19 15:09:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bus_inbounds`
--

DROP TABLE IF EXISTS `bus_inbounds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bus_inbounds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `horario` time NOT NULL,
  `address_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bus_inbounds_address_id_foreign` (`address_id`),
  CONSTRAINT `bus_inbounds_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bus_inbounds`
--

LOCK TABLES `bus_inbounds` WRITE;
/*!40000 ALTER TABLE `bus_inbounds` DISABLE KEYS */;
INSERT INTO `bus_inbounds` VALUES (1,'06:35:13',127,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(2,'00:12:36',70,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(3,'08:59:53',32,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(4,'03:17:25',31,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(5,'00:31:59',124,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(6,'05:05:15',248,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(7,'11:58:51',95,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(8,'01:20:47',201,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(9,'20:19:10',243,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(10,'18:51:57',202,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(11,'22:51:27',104,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(12,'23:11:46',4,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(13,'04:56:45',107,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(14,'16:32:01',33,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(15,'02:18:51',183,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(16,'06:45:29',191,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(17,'04:11:04',78,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(18,'22:16:19',206,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(19,'22:11:19',293,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(20,'19:35:15',244,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(21,'17:17:16',100,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(22,'03:45:28',254,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(23,'22:42:36',28,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(24,'18:15:42',145,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(25,'03:09:17',59,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(26,'21:50:01',270,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(27,'15:01:22',3,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(28,'15:50:50',72,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(29,'13:03:48',180,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(30,'04:49:54',43,'2023-12-19 15:09:24','2023-12-19 15:09:24'),(31,'15:30:00',101,'2023-12-19 15:09:48','2023-12-19 15:09:48'),(32,'12:30:00',101,'2023-12-19 15:09:59','2023-12-19 15:09:59');
/*!40000 ALTER TABLE `bus_inbounds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bus_outbounds`
--

DROP TABLE IF EXISTS `bus_outbounds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bus_outbounds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `horario` time NOT NULL,
  `address_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bus_outbounds_address_id_foreign` (`address_id`),
  CONSTRAINT `bus_outbounds_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bus_outbounds`
--

LOCK TABLES `bus_outbounds` WRITE;
/*!40000 ALTER TABLE `bus_outbounds` DISABLE KEYS */;
INSERT INTO `bus_outbounds` VALUES (1,'06:10:30',137,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(2,'10:40:25',256,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(3,'03:57:40',154,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(4,'03:25:58',213,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(5,'23:29:49',266,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(6,'04:09:31',145,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(7,'19:45:53',218,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(8,'07:58:22',295,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(9,'22:25:17',90,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(10,'14:27:49',109,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(11,'09:18:09',131,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(12,'02:04:42',143,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(13,'14:14:56',133,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(14,'06:22:33',63,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(15,'15:31:01',265,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(16,'13:09:34',235,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(17,'10:24:33',100,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(18,'01:13:17',57,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(19,'15:22:34',61,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(20,'15:55:56',123,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(21,'17:45:25',137,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(22,'15:26:31',263,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(23,'21:36:56',198,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(24,'01:29:10',248,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(25,'15:37:36',128,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(26,'04:58:18',176,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(27,'18:49:11',238,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(28,'06:26:29',40,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(29,'20:20:48',278,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(30,'14:49:40',295,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(31,'17:30:00',262,'2023-12-19 15:09:48','2023-12-19 15:09:48'),(32,'11:30:00',262,'2023-12-19 15:09:59','2023-12-19 15:09:59');
/*!40000 ALTER TABLE `bus_outbounds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `companies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companies_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,'admin','admin@admin.com',NULL,'$2y$12$N1p5JIeRd.Owu2ntC1J8H.6w.1.gtBbsN.xKb0nUVFhk6jshcL2P.','12.345.678/9012-34',NULL,'2023-12-19 15:09:21','2023-12-19 15:09:21');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date NOT NULL,
  `feedback` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `feedback_user_id_foreign` (`user_id`),
  CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,4,'Cum praesentium consequuntur sequi quia deserunt.','2009-10-22',0,'2023-12-19 15:09:22','2023-12-19 15:09:22'),(2,5,'In non aliquam nulla harum maiores architecto. Esse eum iste sint qui praesentium exercitationem ad.','2023-04-25',0,'2023-12-19 15:09:22','2023-12-19 15:09:22'),(3,1,'Est voluptas alias non aut quia nobis enim alias. A atque at rerum sit quia veniam.','1990-04-03',0,'2023-12-19 15:09:22','2023-12-19 15:09:22'),(4,6,'Error tempora quia saepe. Iure delectus voluptatem suscipit quos.','1974-07-27',0,'2023-12-19 15:09:22','2023-12-19 15:09:22'),(5,8,'Neque id unde excepturi voluptates dolore.','2020-04-24',1,'2023-12-19 15:09:22','2023-12-19 15:09:22'),(6,6,'Sed vitae delectus beatae molestias quam expedita optio. Voluptate sed eligendi atque non vel molestiae.','2008-12-16',0,'2023-12-19 15:09:22','2023-12-19 15:09:22'),(7,5,'Aut neque et qui impedit. Quasi quod commodi voluptatibus ea vitae.','1978-11-01',0,'2023-12-19 15:09:22','2023-12-19 15:09:22'),(8,10,'Accusantium officiis illum omnis eius saepe. Qui perspiciatis sint qui et.','1972-12-10',1,'2023-12-19 15:09:22','2023-12-19 15:09:22'),(9,10,'Quae officiis animi occaecati rerum quis sapiente. Minus aut dignissimos consequatur.','2011-12-23',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(10,8,'Possimus beatae error enim. Dolorum est qui esse dicta nisi.','1972-06-06',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(11,1,'Sed et minima in porro in laboriosam.','2001-09-12',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(12,9,'Cumque dolorum accusamus eveniet consequatur. Quia reiciendis pariatur ipsum ratione illum quisquam quo.','1998-02-24',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(13,6,'Est asperiores nulla voluptatibus asperiores doloribus necessitatibus provident. Quo ducimus ad quasi voluptatem possimus.','2019-04-14',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(14,3,'Amet suscipit aut rerum ea aliquam recusandae. Qui et cupiditate voluptas sint exercitationem et ex.','1981-07-05',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(15,8,'Ut veritatis animi maxime accusamus culpa. Culpa pariatur ex distinctio fuga provident quis eos quo.','1990-08-07',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(16,9,'Quas tempora atque blanditiis omnis aliquam.','1983-02-06',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(17,9,'Sequi voluptas non dolor deserunt. Ut laborum molestiae ad debitis id autem.','2022-02-23',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(18,8,'Tenetur voluptate voluptate sed dolores. Sit et iure error quam velit omnis sit.','2004-07-17',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(19,10,'Est facilis quis dolore.','2008-06-28',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(20,2,'Molestiae officiis eaque fugiat est et.','1972-06-08',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(21,4,'Eos quaerat itaque est accusantium asperiores dolore.','2004-01-30',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(22,7,'Sint minima deserunt consequatur accusantium.','1975-01-15',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(23,3,'Nostrum maiores sint officiis ad aut quis.','2021-09-18',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(24,9,'Tempora cum voluptatibus autem adipisci cum.','2011-07-10',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(25,3,'Illo repellat necessitatibus animi odit. Aliquam cum rerum voluptatem sed odit qui voluptas enim.','1989-06-04',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(26,4,'Et pariatur explicabo aut accusantium consequuntur aspernatur.','2012-04-07',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(27,9,'Quis quia temporibus perferendis quia rem velit reiciendis.','1972-05-27',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(28,2,'Eos sequi voluptate nobis eum vel incidunt et est.','2007-03-25',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(29,11,'Ipsam velit voluptatibus beatae aut. Dolores voluptatem rerum dicta fuga omnis veritatis.','1989-02-15',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(30,3,'Fugiat nisi magnam cum aut quia occaecati nihil. Quaerat incidunt voluptatibus sit.','2022-09-11',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(31,3,'Natus iusto veniam in molestiae nostrum eos atque. Accusantium sint deserunt ea tempora.','1998-02-19',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(32,2,'Aut magni qui est earum saepe laborum suscipit incidunt. Qui quod impedit qui dolor vel.','1979-03-11',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(33,11,'Quo sed quisquam et voluptas facere porro et.','1990-08-13',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(34,7,'Nulla nulla earum est quaerat accusamus enim. Asperiores sit voluptas modi et.','2009-02-21',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(35,10,'Nulla fuga occaecati accusamus qui nihil. Omnis ab ducimus sunt.','2004-10-26',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(36,1,'Id qui quia perferendis fuga et.','2017-02-28',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(37,9,'Libero et quos aspernatur libero.','2011-03-20',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(38,1,'Quos dolor nulla quo provident omnis voluptates sed. Expedita velit quia aliquam in impedit.','1987-01-21',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(39,1,'Reiciendis doloremque tenetur fugiat dolorum laborum provident quae.','1978-05-10',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(40,7,'Laborum nulla veniam cumque totam tenetur.','2013-08-18',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(41,7,'Et et id quaerat similique ut soluta illum reprehenderit. Nihil tenetur laudantium vel.','2009-06-22',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(42,8,'Consequuntur ut autem reprehenderit pariatur quam.','1983-10-03',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(43,3,'Et voluptatibus sit voluptas deserunt quae.','2006-07-10',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(44,5,'Ut tempore corporis non iusto.','2017-05-25',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(45,2,'Tempore suscipit autem quasi.','2015-03-08',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(46,11,'Rerum in sed iure quaerat alias reprehenderit culpa.','1985-05-15',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(47,5,'Maiores sed quidem fugiat laudantium.','1991-01-31',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(48,4,'Quis amet laboriosam non sapiente iure. Accusamus aut distinctio sit maiores ipsa nobis.','2007-06-12',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(49,8,'Quia suscipit corrupti illum tempore molestiae. Cumque dignissimos aperiam voluptatem.','1987-10-14',0,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(50,2,'Laborum minima dolores ratione libero odio doloremque quia. Dicta numquam est totam ex dignissimos ut debitis.','1977-05-23',1,'2023-12-19 15:09:23','2023-12-19 15:09:23'),(51,1,'Não achei rotas','2023-12-19',0,'2023-12-19 15:12:43','2023-12-19 15:12:43'),(52,1,'Não achou rota pra minha origem.','2023-12-19',0,'2023-12-19 15:15:06','2023-12-19 15:15:06');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itineraries`
--

DROP TABLE IF EXISTS `itineraries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itineraries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itineraries_codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itineraries`
--

LOCK TABLES `itineraries` WRITE;
/*!40000 ALTER TABLE `itineraries` DISABLE KEYS */;
INSERT INTO `itineraries` VALUES (1,'0270-Liam Pass','2023-12-19 15:09:26','2023-12-19 15:09:26'),(2,'0053-O\'Conner Isle','2023-12-19 15:09:26','2023-12-19 15:09:26'),(3,'0310-Gerhard Avenue','2023-12-19 15:09:26','2023-12-19 15:09:26');
/*!40000 ALTER TABLE `itineraries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `routes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `bus_outbound_id` bigint unsigned NOT NULL,
  `bus_inbound_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `routes_bus_outbound_id_foreign` (`bus_outbound_id`),
  KEY `routes_bus_inbound_id_foreign` (`bus_inbound_id`),
  CONSTRAINT `routes_bus_inbound_id_foreign` FOREIGN KEY (`bus_inbound_id`) REFERENCES `bus_inbounds` (`id`),
  CONSTRAINT `routes_bus_outbound_id_foreign` FOREIGN KEY (`bus_outbound_id`) REFERENCES `bus_outbounds` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `routes`
--

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;
INSERT INTO `routes` VALUES (1,12,25,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(2,7,27,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(3,27,26,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(4,18,20,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(5,22,6,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(6,24,2,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(7,13,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(8,20,8,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(9,24,18,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(10,10,2,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(11,13,30,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(12,30,3,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(13,16,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(14,3,4,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(15,26,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(16,9,18,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(17,2,8,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(18,1,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(19,5,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(20,17,11,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(21,22,16,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(22,24,11,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(23,27,6,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(24,29,28,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(25,6,19,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(26,6,9,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(27,11,6,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(28,10,22,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(29,27,27,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(30,15,29,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(31,14,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(32,21,12,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(33,30,14,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(34,2,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(35,23,13,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(36,21,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(37,17,1,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(38,30,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(39,28,13,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(40,13,29,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(41,18,2,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(42,24,9,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(43,6,14,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(44,6,12,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(45,19,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(46,1,1,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(47,18,19,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(48,18,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(49,7,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(50,23,11,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(51,7,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(52,30,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(53,8,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(54,7,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(55,28,1,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(56,6,28,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(57,26,16,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(58,26,14,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(59,10,25,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(60,9,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(61,22,9,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(62,29,13,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(63,23,19,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(64,19,14,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(65,20,27,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(66,16,13,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(67,18,22,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(68,25,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(69,4,8,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(70,3,8,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(71,23,29,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(72,20,22,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(73,13,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(74,12,19,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(75,22,20,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(76,3,13,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(77,5,27,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(78,28,8,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(79,3,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(80,6,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(81,28,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(82,16,29,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(83,6,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(84,14,3,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(85,8,5,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(86,21,26,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(87,8,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(88,2,25,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(89,30,1,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(90,29,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(91,4,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(92,9,11,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(93,10,13,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(94,29,1,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(95,19,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(96,27,2,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(97,5,20,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(98,30,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(99,9,14,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(100,11,29,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(101,3,5,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(102,18,20,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(103,1,14,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(104,16,30,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(105,18,12,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(106,14,9,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(107,23,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(108,9,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(109,5,22,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(110,12,6,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(111,2,20,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(112,22,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(113,24,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(114,6,20,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(115,13,30,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(116,18,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(117,16,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(118,22,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(119,18,20,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(120,28,18,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(121,16,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(122,26,19,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(123,10,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(124,29,22,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(125,10,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(126,7,4,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(127,22,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(128,17,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(129,2,12,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(130,1,8,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(131,24,30,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(132,20,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(133,28,1,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(134,24,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(135,13,13,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(136,16,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(137,13,3,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(138,28,2,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(139,8,19,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(140,10,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(141,25,29,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(142,18,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(143,17,18,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(144,19,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(145,28,11,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(146,25,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(147,2,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(148,5,6,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(149,11,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(150,17,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(151,8,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(152,14,26,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(153,3,4,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(154,20,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(155,2,29,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(156,27,3,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(157,30,25,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(158,20,14,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(159,17,16,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(160,12,9,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(161,7,20,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(162,13,26,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(163,4,8,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(164,27,18,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(165,1,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(166,23,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(167,22,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(168,14,16,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(169,22,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(170,20,26,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(171,28,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(172,20,1,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(173,7,4,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(174,23,24,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(175,12,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(176,8,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(177,28,17,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(178,28,5,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(179,16,10,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(180,2,7,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(181,7,23,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(182,11,22,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(183,19,25,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(184,11,26,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(185,13,19,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(186,1,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(187,22,22,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(188,13,30,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(189,17,12,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(190,16,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(191,1,28,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(192,28,9,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(193,28,15,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(194,17,14,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(195,13,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(196,17,21,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(197,15,12,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(198,11,28,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(199,27,29,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(200,7,26,'2023-12-19 15:09:26','2023-12-19 15:09:26'),(201,31,31,'2023-12-19 15:09:55','2023-12-19 15:09:55'),(202,32,32,'2023-12-19 15:10:02','2023-12-19 15:10:02'),(203,22,31,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(204,23,31,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(205,1,31,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(206,3,31,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(207,22,31,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(208,4,31,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(209,31,4,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(210,31,2,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(211,31,5,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(212,31,6,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(213,31,16,'2023-12-19 15:10:06','2023-12-19 15:10:06'),(214,31,22,'2023-12-19 15:10:06','2023-12-19 15:10:06');
/*!40000 ALTER TABLE `routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itinerary_has_routes`
--

DROP TABLE IF EXISTS `itinerary_has_routes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itinerary_has_routes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `route_id` bigint unsigned NOT NULL,
  `itinerary_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `itinerary_has_routes_route_id_foreign` (`route_id`),
  KEY `itinerary_has_routes_itinerary_id_foreign` (`itinerary_id`),
  CONSTRAINT `itinerary_has_routes_itinerary_id_foreign` FOREIGN KEY (`itinerary_id`) REFERENCES `itineraries` (`id`),
  CONSTRAINT `itinerary_has_routes_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itinerary_has_routes`
--

LOCK TABLES `itinerary_has_routes` WRITE;
/*!40000 ALTER TABLE `itinerary_has_routes` DISABLE KEYS */;
INSERT INTO `itinerary_has_routes` VALUES (1,87,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(2,48,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(3,88,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(4,69,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(5,165,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(6,83,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(7,92,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(8,119,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(9,84,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(10,63,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(11,155,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(12,190,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(13,18,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(14,111,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(15,77,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(16,160,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(17,77,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(18,18,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(19,50,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(20,197,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(21,195,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(22,133,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(23,91,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(24,178,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(25,106,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(26,35,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(27,63,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(28,95,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(29,98,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(30,1,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(31,191,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(32,141,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(33,19,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(34,24,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(35,124,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(36,144,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(37,110,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(38,123,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(39,168,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(40,120,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(41,95,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(42,120,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(43,66,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(44,142,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(45,66,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(46,188,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(47,129,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(48,20,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(49,149,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(50,26,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(51,153,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(52,131,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(53,136,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(54,108,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(55,21,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(56,14,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(57,147,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(58,52,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(59,200,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(60,136,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(61,11,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(62,185,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(63,194,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(64,77,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(65,96,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(66,26,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(67,146,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(68,13,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(69,36,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(70,152,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(71,4,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(72,57,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(73,145,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(74,46,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(75,124,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(76,93,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(77,194,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(78,199,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(79,78,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(80,145,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(81,142,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(82,137,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(83,196,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(84,97,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(85,146,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(86,168,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(87,9,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(88,138,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(89,85,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(90,121,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(91,119,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(92,47,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(93,126,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(94,13,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(95,4,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(96,158,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(97,71,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(98,192,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(99,129,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(100,37,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(101,81,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(102,29,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(103,178,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(104,133,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(105,150,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(106,59,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(107,199,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(108,72,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(109,119,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(110,152,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(111,185,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(112,65,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(113,139,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(114,11,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(115,163,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(116,3,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(117,25,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(118,145,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(119,134,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(120,45,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(121,61,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(122,198,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(123,165,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(124,26,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(125,44,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(126,30,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(127,131,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(128,39,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(129,67,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(130,171,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(131,182,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(132,95,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(133,146,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(134,11,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(135,95,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(136,39,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(137,90,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(138,182,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(139,12,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(140,64,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(141,137,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(142,169,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(143,2,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(144,95,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(145,150,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(146,39,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(147,106,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(148,95,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(149,191,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(150,70,3,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(151,23,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(152,71,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(153,164,1,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(154,183,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(155,87,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(156,139,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(157,93,2,'2023-12-19 15:09:33','2023-12-19 15:09:33'),(158,141,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(159,135,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(160,191,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(161,193,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(162,1,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(163,64,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(164,103,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(165,79,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(166,83,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(167,166,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(168,36,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(169,166,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(170,150,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(171,131,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(172,118,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(173,192,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(174,190,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(175,72,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(176,152,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(177,86,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(178,52,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(179,187,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(180,87,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(181,6,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(182,140,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(183,51,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(184,67,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(185,35,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(186,100,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(187,68,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(188,116,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(189,187,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(190,71,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(191,5,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(192,108,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(193,50,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(194,173,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(195,67,2,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(196,196,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(197,165,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(198,138,1,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(199,55,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(200,97,3,'2023-12-19 15:09:34','2023-12-19 15:09:34'),(201,201,1,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(202,202,1,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(203,203,1,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(204,204,1,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(205,205,1,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(206,206,2,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(207,207,2,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(208,208,2,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(209,209,3,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(210,210,3,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(211,211,3,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(212,212,3,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(213,213,1,'2023-12-19 15:10:14','2023-12-19 15:10:14'),(214,214,1,'2023-12-19 15:10:14','2023-12-19 15:10:14');
/*!40000 ALTER TABLE `itinerary_has_routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (81,'2014_10_12_100000_create_password_reset_tokens_table',1),(82,'2019_08_19_000000_create_failed_jobs_table',1),(83,'2019_12_14_000001_create_personal_access_tokens_table',1),(84,'2023_11_19_130955_create_companies_table',1),(85,'2023_11_20_142919_create_addresses_table',1),(86,'2023_11_20_143109_create_users_table',1),(87,'2023_11_20_143454_create_feedback_table',1),(88,'2023_11_20_144305_create_requests_table',1),(89,'2023_11_20_145555_create_requested_locations_table',1),(90,'2023_11_20_145800_create_user_origins_table',1),(91,'2023_11_20_150020_create_buses_table',1),(92,'2023_11_20_150440_create_bus_outbounds_table',1),(93,'2023_11_20_150553_create_bus_inbounds_table',1),(94,'2023_11_20_150801_create_routes_table',1),(95,'2023_11_20_151007_create_itineraries_table',1),(96,'2023_11_25_235910_create_itinerary_has_routes_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requested_locations`
--

DROP TABLE IF EXISTS `requested_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requested_locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `requested_locations_address_id_foreign` (`address_id`),
  CONSTRAINT `requested_locations_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requested_locations`
--

LOCK TABLES `requested_locations` WRITE;
/*!40000 ALTER TABLE `requested_locations` DISABLE KEYS */;
INSERT INTO `requested_locations` VALUES (1,'Av. Camassarys',91,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(2,'R. Irará',39,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(3,'R. do Telégrafo',12,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(4,'UNEB',86,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(5,'Rua Principal do Poloplast',181,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(6,'Praça da Lua',14,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(7,'R. Rafael',85,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(8,'R. Bosque',6,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(9,'Copec',56,'2023-12-19 15:09:27','2023-12-19 15:09:27'),(10,'Praça da Lua',14,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(11,'R. Padre Paulo Maria Tonucci',153,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(12,'Atacadão',182,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(13,'Av. Parque das Palmeiras',133,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(14,'Boulevard',103,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(15,'R. Direta de Arembepe',170,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(16,'R. 2 de Maio',225,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(17,'Rua Santa Maria Adelina',197,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(18,'Copec',56,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(19,'R. Adelina de Sá',144,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(20,'Residencial Caminho do Rio',24,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(21,'R. Abrantes',120,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(22,'R. Duque de Caxias',231,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(23,'R. Júlio Leitão',230,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(24,'R. da Bandeira',47,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(25,'Av. Deputado Luís Eduardo Magalhães',173,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(26,'R. Eteno',9,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(27,'BA-529 (Estrada Velha)',104,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(28,'R. Costa Azul',146,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(29,'R. Deputado Luís Eduardo Magalhães',82,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(30,'R. Belgrado',126,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(31,'Av. Eixo Urbano Sudoeste',190,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(32,'Rua Catuama',15,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(33,'Av. 28 de Setembro',202,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(34,'R. 2ª Ligação',270,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(35,'Limpec',60,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(36,'Trav. Açaí',8,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(37,'R. das Flores',298,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(38,'Barra do Jacuípe',137,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(39,'Rua São Lázaro',187,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(40,'R. Nova da Palha (Primeiro de Agosto)',252,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(41,'R. Elísio Mello',243,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(42,'Av. Luiz Gonzaga',188,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(43,'Rua K',41,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(44,'R. Pernambuco',239,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(45,'Residenciais Morada dos Sabiás',199,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(46,'R. Page',48,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(47,'Rua Boca da Capivara (Micos)',46,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(48,'II',221,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(49,'Corujão',284,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(50,'R. Padre Paulo Maria Tonucci',153,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(51,'HGC',262,'2023-12-19 12:11:18','2023-12-19 12:11:18'),(52,'Av. Sul',256,'2023-12-19 12:11:55','2023-12-19 12:11:55'),(53,'Destino não existe',NULL,'2023-12-19 12:12:31','2023-12-19 12:12:31'),(54,'Rua Acácia Rosa',61,'2023-12-19 12:13:35','2023-12-19 12:13:35'),(55,'R. Marechal Floriano Peixoto',266,'2023-12-19 12:13:50','2023-12-19 12:13:50'),(56,'Rua Cantuária',145,'2023-12-19 12:14:00','2023-12-19 12:14:00'),(57,'R. Marechal Floriano Peixoto',266,'2023-12-19 12:14:07','2023-12-19 12:14:07'),(58,'Destino n1',NULL,'2023-12-19 12:14:20','2023-12-19 12:14:20'),(59,'Destino n2',NULL,'2023-12-19 12:14:32','2023-12-19 12:14:32'),(60,'Destino n3',NULL,'2023-12-19 12:14:39','2023-12-19 12:14:39'),(61,'Destino n4',NULL,'2023-12-19 12:14:44','2023-12-19 12:14:44'),(62,'Destino n5',NULL,'2023-12-19 12:14:50','2023-12-19 12:14:50'),(63,'R. Otávio Mangabeira',40,'2023-12-19 12:14:56','2023-12-19 12:14:56'),(64,'HGC',262,'2023-12-19 12:16:18','2023-12-19 12:16:18'),(65,'HGC',262,'2023-12-19 12:16:23','2023-12-19 12:16:23'),(66,'HGC',262,'2023-12-19 12:16:32','2023-12-19 12:16:32'),(67,'HGC',262,'2023-12-19 12:16:43','2023-12-19 12:16:43'),(68,'Terminal',NULL,'2023-12-19 12:16:57','2023-12-19 12:16:57'),(69,'R. Otávio Mangabeira',40,'2023-12-19 12:18:06','2023-12-19 12:18:06'),(70,'Hosp. Santa Helena',213,'2023-12-19 12:18:09','2023-12-19 12:18:09'),(71,'R. Otávio Mangabeira',40,'2023-12-19 12:18:13','2023-12-19 12:18:13'),(72,'Rua Peres',198,'2023-12-19 12:18:16','2023-12-19 12:18:16'),(73,'R. Otávio Mangabeira',40,'2023-12-19 12:18:19','2023-12-19 12:18:19'),(74,'Residencial Morada dos Canários',265,'2023-12-19 12:18:23','2023-12-19 12:18:23'),(75,'Residencial Morada dos Canários',265,'2023-12-19 12:18:27','2023-12-19 12:18:27'),(76,'R. Otávio Mangabeira',40,'2023-12-19 12:18:34','2023-12-19 12:18:34'),(77,'R. Otávio Mangabeira',40,'2023-12-19 12:18:45','2023-12-19 12:18:45'),(78,'R. Otávio Mangabeira',40,'2023-12-19 12:18:55','2023-12-19 12:18:55'),(79,'R. Otávio Mangabeira',40,'2023-12-19 12:19:03','2023-12-19 12:19:03'),(80,'Hosp. Santa Helena',213,'2023-12-19 12:19:18','2023-12-19 12:19:18'),(81,'Hosp. Santa Helena',213,'2023-12-19 12:19:34','2023-12-19 12:19:34'),(82,'Hosp. Santa Helena',213,'2023-12-19 12:19:44','2023-12-19 12:19:44');
/*!40000 ALTER TABLE `requested_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `feedback_id` bigint unsigned DEFAULT NULL,
  `data_hora` datetime NOT NULL,
  `retorno_requisicao` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `requests_user_id_foreign` (`user_id`),
  KEY `requests_feedback_id_foreign` (`feedback_id`),
  CONSTRAINT `requests_feedback_id_foreign` FOREIGN KEY (`feedback_id`) REFERENCES `feedback` (`id`),
  CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES (1,3,27,'1974-11-06 06:38:55',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(2,1,5,'1975-08-16 22:58:43',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(3,10,42,'1977-04-15 20:27:47',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(4,6,22,'1994-12-29 07:41:00',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(5,11,5,'2002-05-17 10:58:29',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(6,5,50,'1982-09-01 12:06:07',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(7,4,5,'2007-01-02 23:06:16',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(8,11,13,'1980-05-13 06:37:10',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(9,9,18,'2021-08-23 23:06:32',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(10,1,38,'1986-09-23 05:34:20',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(11,2,31,'1980-01-26 18:27:39',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(12,9,43,'1994-09-20 19:31:22',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(13,4,48,'1985-10-12 10:17:43',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(14,5,33,'1987-05-17 00:10:05',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(15,6,22,'2007-05-08 17:38:19',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(16,6,1,'1984-07-06 17:53:35',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(17,1,21,'1972-12-18 05:53:19',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(18,11,44,'2006-07-31 14:54:25',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(19,11,40,'2023-09-11 01:40:00',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(20,10,1,'1981-05-31 19:30:15',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(21,8,25,'1985-11-26 16:00:19',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(22,5,10,'2015-07-07 09:43:50',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(23,9,41,'1979-08-20 19:14:58',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(24,2,15,'2003-06-03 17:41:17',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(25,10,6,'1982-05-23 08:36:26',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(26,1,20,'1975-06-06 22:59:18',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(27,11,41,'2016-09-15 03:40:19',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(28,6,2,'1995-10-10 07:07:58',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(29,2,48,'1978-07-14 16:07:28',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(30,2,18,'2010-01-01 05:50:10',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(31,9,1,'2015-03-15 02:30:09',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(32,6,46,'2009-07-05 12:36:08',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(33,2,20,'1998-08-14 02:17:32',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(34,10,32,'1993-06-12 20:14:40',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(35,2,33,'2012-11-07 02:20:12',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(36,6,24,'1980-11-05 14:30:35',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(37,9,42,'2015-03-30 15:31:23',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(38,5,3,'1987-11-23 11:01:32',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(39,10,42,'2003-08-29 19:07:24',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(40,9,42,'1981-08-31 00:02:40',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(41,7,3,'1987-06-17 22:40:28',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(42,6,48,'2007-05-08 17:28:05',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(43,10,14,'2009-09-27 21:11:19',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(44,3,34,'2002-11-04 11:13:56',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(45,5,24,'1972-12-27 07:00:29',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(46,11,42,'1975-10-06 05:44:29',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(47,5,39,'1972-06-08 09:36:55',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(48,5,9,'2012-04-01 07:16:26',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(49,4,30,'2008-11-19 05:53:58',1,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(50,6,47,'2009-02-26 11:31:35',0,'2023-12-19 15:09:28','2023-12-19 15:09:28'),(51,1,NULL,'2023-12-19 12:11:18',1,'2023-12-19 12:11:18','2023-12-19 12:11:18'),(52,1,NULL,'2023-12-19 12:11:55',1,'2023-12-19 12:11:55','2023-12-19 12:11:55'),(53,1,51,'2023-12-19 12:12:31',0,'2023-12-19 12:12:31','2023-12-19 15:12:43'),(54,1,NULL,'2023-12-19 12:13:35',1,'2023-12-19 12:13:35','2023-12-19 12:13:35'),(55,1,NULL,'2023-12-19 12:13:50',1,'2023-12-19 12:13:50','2023-12-19 12:13:50'),(56,1,NULL,'2023-12-19 12:14:00',1,'2023-12-19 12:14:00','2023-12-19 12:14:00'),(57,1,NULL,'2023-12-19 12:14:07',1,'2023-12-19 12:14:07','2023-12-19 12:14:07'),(58,1,NULL,'2023-12-19 12:14:20',0,'2023-12-19 12:14:20','2023-12-19 12:14:20'),(59,1,NULL,'2023-12-19 12:14:32',0,'2023-12-19 12:14:32','2023-12-19 12:14:32'),(60,1,NULL,'2023-12-19 12:14:39',0,'2023-12-19 12:14:39','2023-12-19 12:14:39'),(61,1,NULL,'2023-12-19 12:14:44',0,'2023-12-19 12:14:44','2023-12-19 12:14:44'),(62,1,NULL,'2023-12-19 12:14:50',0,'2023-12-19 12:14:50','2023-12-19 12:14:50'),(63,1,52,'2023-12-19 12:14:56',1,'2023-12-19 12:14:56','2023-12-19 15:15:06'),(64,1,NULL,'2023-12-19 12:16:18',1,'2023-12-19 12:16:18','2023-12-19 12:16:18'),(65,1,NULL,'2023-12-19 12:16:23',1,'2023-12-19 12:16:23','2023-12-19 12:16:23'),(66,1,NULL,'2023-12-19 12:16:32',1,'2023-12-19 12:16:32','2023-12-19 12:16:32'),(67,1,NULL,'2023-12-19 12:16:43',1,'2023-12-19 12:16:43','2023-12-19 12:16:43'),(68,1,NULL,'2023-12-19 12:16:57',0,'2023-12-19 12:16:57','2023-12-19 12:16:57'),(69,1,NULL,'2023-12-19 12:18:06',0,'2023-12-19 12:18:06','2023-12-19 12:18:06'),(70,1,NULL,'2023-12-19 12:18:09',0,'2023-12-19 12:18:09','2023-12-19 12:18:09'),(71,1,NULL,'2023-12-19 12:18:13',0,'2023-12-19 12:18:13','2023-12-19 12:18:13'),(72,1,NULL,'2023-12-19 12:18:16',0,'2023-12-19 12:18:16','2023-12-19 12:18:16'),(73,1,NULL,'2023-12-19 12:18:19',0,'2023-12-19 12:18:19','2023-12-19 12:18:19'),(74,1,NULL,'2023-12-19 12:18:23',0,'2023-12-19 12:18:23','2023-12-19 12:18:23'),(75,1,NULL,'2023-12-19 12:18:27',0,'2023-12-19 12:18:27','2023-12-19 12:18:27'),(76,1,NULL,'2023-12-19 12:18:34',1,'2023-12-19 12:18:34','2023-12-19 12:18:34'),(77,1,NULL,'2023-12-19 12:18:45',1,'2023-12-19 12:18:45','2023-12-19 12:18:45'),(78,1,NULL,'2023-12-19 12:18:55',1,'2023-12-19 12:18:55','2023-12-19 12:18:55'),(79,1,NULL,'2023-12-19 12:19:03',1,'2023-12-19 12:19:03','2023-12-19 12:19:03'),(80,1,NULL,'2023-12-19 12:19:18',1,'2023-12-19 12:19:18','2023-12-19 12:19:18'),(81,1,NULL,'2023-12-19 12:19:34',1,'2023-12-19 12:19:34','2023-12-19 12:19:34'),(82,1,NULL,'2023-12-19 12:19:44',1,'2023-12-19 12:19:44','2023-12-19 12:19:44');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_origins`
--

DROP TABLE IF EXISTS `user_origins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_origins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `requested_location_id` bigint unsigned NOT NULL,
  `request_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `address_id` bigint unsigned DEFAULT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_origins_requested_location_id_foreign` (`requested_location_id`),
  KEY `user_origins_request_id_foreign` (`request_id`),
  KEY `user_origins_user_id_foreign` (`user_id`),
  KEY `user_origins_address_id_foreign` (`address_id`),
  CONSTRAINT `user_origins_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `user_origins_request_id_foreign` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`),
  CONSTRAINT `user_origins_requested_location_id_foreign` FOREIGN KEY (`requested_location_id`) REFERENCES `requested_locations` (`id`),
  CONSTRAINT `user_origins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_origins`
--

LOCK TABLES `user_origins` WRITE;
/*!40000 ALTER TABLE `user_origins` DISABLE KEYS */;
INSERT INTO `user_origins` VALUES (1,12,34,5,179,'Reserva Parque','2023-12-19 15:09:30','2023-12-19 15:09:30'),(2,8,8,4,93,'Senai/IFBA','2023-12-19 15:09:30','2023-12-19 15:09:30'),(3,8,39,8,197,'Rua Santa Maria Adelina','2023-12-19 15:09:30','2023-12-19 15:09:30'),(4,50,8,9,38,'Residencias Alpha 1/2/3','2023-12-19 15:09:30','2023-12-19 15:09:30'),(5,24,5,7,103,'Boulevard','2023-12-19 15:09:30','2023-12-19 15:09:30'),(6,20,41,9,58,'Residencial Terra Brasilis','2023-12-19 15:09:30','2023-12-19 15:09:30'),(7,7,2,2,286,'Cetrel','2023-12-19 15:09:30','2023-12-19 15:09:30'),(8,50,16,10,161,'Av. Rio Camaçari','2023-12-19 15:09:30','2023-12-19 15:09:30'),(9,10,48,4,229,'Itacimirim (Até Cond. Enseada)','2023-12-19 15:09:30','2023-12-19 15:09:30'),(10,20,10,1,95,'Rua H e Rua A)','2023-12-19 15:09:30','2023-12-19 15:09:30'),(11,28,10,3,194,'Rua do Areal II','2023-12-19 15:09:30','2023-12-19 15:09:30'),(12,47,45,1,29,'Residencias Alpha 4/5','2023-12-19 15:09:30','2023-12-19 15:09:30'),(13,29,36,5,223,'R. Grama','2023-12-19 15:09:30','2023-12-19 15:09:30'),(14,1,39,4,97,'Tv. Av. Leste','2023-12-19 15:09:30','2023-12-19 15:09:30'),(15,30,48,5,199,'Residenciais Morada dos Sabiás','2023-12-19 15:09:30','2023-12-19 15:09:30'),(16,8,14,4,136,'Travessa Nossa Senhora do Carmo','2023-12-19 15:09:30','2023-12-19 15:09:30'),(17,17,12,6,88,'Guarajuba','2023-12-19 15:09:30','2023-12-19 15:09:30'),(18,38,48,4,7,'R. Nova Aliança','2023-12-19 15:09:30','2023-12-19 15:09:30'),(19,37,35,7,205,'R. Principal Portal Abrantes','2023-12-19 15:09:30','2023-12-19 15:09:30'),(20,10,5,11,291,'Praça da Harmonia','2023-12-19 15:09:30','2023-12-19 15:09:30'),(21,4,11,8,56,'Copec','2023-12-19 15:09:30','2023-12-19 15:09:30'),(22,31,4,5,75,'Via Axial','2023-12-19 15:09:30','2023-12-19 15:09:30'),(23,8,44,7,221,'II','2023-12-19 15:09:30','2023-12-19 15:09:30'),(24,26,1,8,111,'Praça João Ramos Coroa (dos 46)','2023-12-19 15:09:30','2023-12-19 15:09:30'),(25,45,37,7,119,'R. Campo Formoso','2023-12-19 15:09:30','2023-12-19 15:09:30'),(26,29,18,1,134,'Rua Pantanal','2023-12-19 15:09:30','2023-12-19 15:09:30'),(27,38,39,5,31,'Fim de Linha na Estação de Trem','2023-12-19 15:09:30','2023-12-19 15:09:30'),(28,43,37,3,80,'Rua Dois de Julho','2023-12-19 15:09:30','2023-12-19 15:09:30'),(29,28,7,10,190,'Av. Eixo Urbano Sudoeste','2023-12-19 15:09:30','2023-12-19 15:09:30'),(30,5,18,10,184,'Rua A','2023-12-19 15:09:30','2023-12-19 15:09:30'),(31,4,12,4,140,'BA-535','2023-12-19 15:09:30','2023-12-19 15:09:30'),(32,28,11,4,72,'Rua da Bandeira','2023-12-19 15:09:30','2023-12-19 15:09:30'),(33,6,3,6,23,'R. Petrópolis','2023-12-19 15:09:30','2023-12-19 15:09:30'),(34,29,44,10,88,'Guarajuba','2023-12-19 15:09:30','2023-12-19 15:09:30'),(35,40,27,7,139,'Condomínio Villa Bella','2023-12-19 15:09:30','2023-12-19 15:09:30'),(36,2,7,5,135,'Rua Governador Mangabeira','2023-12-19 15:09:30','2023-12-19 15:09:30'),(37,24,10,5,122,'R. Atalaia','2023-12-19 15:09:30','2023-12-19 15:09:30'),(38,25,19,9,147,'R. Santa Maria Adelina','2023-12-19 15:09:30','2023-12-19 15:09:30'),(39,23,46,3,224,'Lucaia','2023-12-19 15:09:30','2023-12-19 15:09:30'),(40,28,28,10,132,'R. Amaralina','2023-12-19 15:09:30','2023-12-19 15:09:30'),(41,36,32,4,273,'BA-099 direto','2023-12-19 15:09:30','2023-12-19 15:09:30'),(42,24,10,2,72,'Rua da Bandeira','2023-12-19 15:09:30','2023-12-19 15:09:30'),(43,45,42,2,272,'R. Aquárius','2023-12-19 15:09:30','2023-12-19 15:09:30'),(44,25,28,3,224,'Lucaia','2023-12-19 15:09:30','2023-12-19 15:09:30'),(45,35,23,7,203,'Rua Marlim Azul','2023-12-19 15:09:30','2023-12-19 15:09:30'),(46,40,30,7,215,'R. Acupe','2023-12-19 15:09:30','2023-12-19 15:09:30'),(47,42,7,1,263,'R. Filogônio Gomes de Oliveira','2023-12-19 15:09:30','2023-12-19 15:09:30'),(48,5,43,5,176,'Rua Ibicaraí','2023-12-19 15:09:30','2023-12-19 15:09:30'),(49,10,36,1,147,'R. Santa Maria Adelina','2023-12-19 15:09:30','2023-12-19 15:09:30'),(50,7,24,11,62,'Av. Otávio Mangabeira','2023-12-19 15:09:30','2023-12-19 15:09:30'),(51,51,51,1,101,'Terminal','2023-12-19 12:11:18','2023-12-19 12:11:18'),(52,52,52,1,NULL,'Origem não existe','2023-12-19 12:11:55','2023-12-19 12:11:55'),(53,53,53,1,3,'Rua Duque de Caxias','2023-12-19 12:12:31','2023-12-19 12:12:31'),(54,54,54,1,100,'R. Pé de Areia','2023-12-19 12:13:35','2023-12-19 12:13:35'),(55,55,55,1,254,'Fim de Linha na Igreja São Bento','2023-12-19 12:13:50','2023-12-19 12:13:50'),(56,56,56,1,244,'BA-535 (Via Parafuso)','2023-12-19 12:14:00','2023-12-19 12:14:00'),(57,57,57,1,244,'BA-535 (Via Parafuso)','2023-12-19 12:14:07','2023-12-19 12:14:07'),(58,58,58,1,244,'BA-535 (Via Parafuso)','2023-12-19 12:14:20','2023-12-19 12:14:20'),(59,59,59,1,3,'Rua Duque de Caxias','2023-12-19 12:14:32','2023-12-19 12:14:32'),(60,60,60,1,3,'Rua Duque de Caxias','2023-12-19 12:14:39','2023-12-19 12:14:39'),(61,61,61,1,3,'Rua Duque de Caxias','2023-12-19 12:14:44','2023-12-19 12:14:44'),(62,62,62,1,3,'Rua Duque de Caxias','2023-12-19 12:14:50','2023-12-19 12:14:50'),(63,63,63,1,NULL,'Origem n1','2023-12-19 12:14:56','2023-12-19 12:14:56'),(64,64,64,1,101,'Terminal','2023-12-19 12:16:18','2023-12-19 12:16:18'),(65,65,65,1,101,'Terminal','2023-12-19 12:16:23','2023-12-19 12:16:23'),(66,66,66,1,101,'Terminal','2023-12-19 12:16:32','2023-12-19 12:16:32'),(67,67,67,1,101,'Terminal','2023-12-19 12:16:43','2023-12-19 12:16:43'),(68,68,68,1,NULL,'HGC','2023-12-19 12:16:57','2023-12-19 12:16:57'),(69,69,69,1,3,'Rua Duque de Caxias','2023-12-19 12:18:06','2023-12-19 12:18:06'),(70,70,70,1,3,'Rua Duque de Caxias','2023-12-19 12:18:09','2023-12-19 12:18:09'),(71,71,71,1,43,'Av. Concêntrica','2023-12-19 12:18:13','2023-12-19 12:18:13'),(72,72,72,1,3,'Rua Duque de Caxias','2023-12-19 12:18:16','2023-12-19 12:18:16'),(73,73,73,1,248,'Fim de Linha da Gleba E','2023-12-19 12:18:19','2023-12-19 12:18:19'),(74,74,74,1,3,'Rua Duque de Caxias','2023-12-19 12:18:23','2023-12-19 12:18:23'),(75,75,75,1,3,'Rua Duque de Caxias','2023-12-19 12:18:27','2023-12-19 12:18:27'),(76,76,76,1,NULL,'Origem n1','2023-12-19 12:18:34','2023-12-19 12:18:34'),(77,77,77,1,107,'R. João Ursulo','2023-12-19 12:18:45','2023-12-19 12:18:45'),(78,78,78,1,107,'R. João Ursulo','2023-12-19 12:18:55','2023-12-19 12:18:55'),(79,79,79,1,107,'R. João Ursulo','2023-12-19 12:19:03','2023-12-19 12:19:03'),(80,80,80,1,NULL,'Origem n1','2023-12-19 12:19:18','2023-12-19 12:19:18'),(81,81,81,1,201,'Fim de Linha do Sítio Verde','2023-12-19 12:19:34','2023-12-19 12:19:34'),(82,82,82,1,201,'Fim de Linha do Sítio Verde','2023-12-19 12:19:44','2023-12-19 12:19:44');
/*!40000 ALTER TABLE `user_origins` ENABLE KEYS */;
UNLOCK TABLES;

UNLOCK TABLES;

-- Dump completed on 2023-12-19  7:29:07