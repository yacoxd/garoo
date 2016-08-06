--
-- Table structure for table `go_catalog`
--

DROP TABLE IF EXISTS `go_catalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_catalog` (
  `ca_id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_name` varchar(250) DEFAULT NULL,
  `ca_table` int(11) NOT NULL,
  PRIMARY KEY (`ca_id`),
  KEY `fk_catalog_table_idx` (`ca_table`),
  CONSTRAINT `fk_catalog_table` FOREIGN KEY (`ca_table`) REFERENCES `go_table` (`tb_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_catalog`
--

LOCK TABLES `go_catalog` WRITE;
/*!40000 ALTER TABLE `go_catalog` DISABLE KEYS */;
INSERT INTO `go_catalog` VALUES (1,'Escuela 1',1),(2,'Escuela 2',1),(3,'Escuela 3',1),(4,'Otra',1),(5,'Secundaria 1',2),(6,'Secundaria 2',2),(7,'Secundaria 3',2),(8,'Otro',2),(9,'Diver 1',3),(10,'Diver 2',3),(11,'Diver 3',3),(12,'Diver 4',3),(13,'Otro',3),(14,'UFM',4),(15,'USAC',4),(16,'UMG',4),(17,'URL',4),(18,'Otra',4),(19,'Master 1',5),(20,'Master 2',5),(21,'Master 3',5),(22,'Doc 1',6),(23,'Doc 2',6),(24,'Doc 3',6),(25,'Tec 1',7),(26,'Tec 2',7),(27,'Tec 3',7),(28,'BACO',8),(29,'Magisterio',8),(30,'Perito',8),(31,'Administración ',9),(32,'Ing.',9),(33,'Derecho ',9),(34,'MBA',10),(35,'Otro ',10),(36,'Doc. BD',11),(37,'Doc. Lorem ipsum',11),(38,'Tec 1',12),(39,'Tec 2',12);
/*!40000 ALTER TABLE `go_catalog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_country`
--

DROP TABLE IF EXISTS `go_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_country` (
  `co_id` int(11) NOT NULL,
  `co_name` varchar(250) DEFAULT NULL,
  `co_iso2_code` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_country`
--

LOCK TABLES `go_country` WRITE;
/*!40000 ALTER TABLE `go_country` DISABLE KEYS */;
INSERT INTO `go_country` VALUES (1,'Guatemala','GT'),(2,'Colombia','CO'),(3,'Costa Rica','CR'),(4,'El Salvador','SV'),(5,'Honduras','HN'),(6,'Mexico','MX'),(7,'Nicaragua','NI'),(8,'Panama','PA');
/*!40000 ALTER TABLE `go_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_industry`
--

DROP TABLE IF EXISTS `go_industry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_industry` (
  `ind_id` int(11) NOT NULL,
  `ind_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ind_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_industry`
--

LOCK TABLES `go_industry` WRITE;
/*!40000 ALTER TABLE `go_industry` DISABLE KEYS */;
INSERT INTO `go_industry` VALUES (1,'Asesorias'),(2,'Comercio Consumo'),(3,'Comercio Industria'),(4,'Construccion'),(5,'Deportes'),(6,'Educacion'),(7,'Energia'),(8,'Entretenimiento'),(9,'Finanzas y Banca'),(10,'Ganaderia, Agricultura o Pesca'),(11,'Gobierno'),(12,'Legal'),(13,'Manufactura y Produccion'),(14,'Medios de Comunicación'),(15,'No Lucrativa'),(16,'Publicidad'),(17,'Recursos Humanos'),(18,'Salud y Bienestar'),(19,'Servicios Profesionales'),(20,'Tecnologia'),(21,'Telecomunicaciones'),(22,'Transportes'),(23,'Turismo'),(24,'Otro');
/*!40000 ALTER TABLE `go_industry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_instance`
--

DROP TABLE IF EXISTS `go_instance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_instance` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_time_created` datetime DEFAULT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_instance`
--

LOCK TABLES `go_instance` WRITE;
/*!40000 ALTER TABLE `go_instance` DISABLE KEYS */;
INSERT INTO `go_instance` VALUES (1,'2016-04-13 06:28:13'),(2,'2016-04-13 06:28:33'),(3,'2016-04-13 06:31:05'),(4,'2016-04-13 06:46:55');
/*!40000 ALTER TABLE `go_instance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_job`
--

DROP TABLE IF EXISTS `go_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_job`
--

LOCK TABLES `go_job` WRITE;
/*!40000 ALTER TABLE `go_job` DISABLE KEYS */;
INSERT INTO `go_job` VALUES (1,'Atención a Clientes'),(2,'Call Center'),(3,'Compras / Comercio Exterior'),(4,'Construcción y Obra'),(5,'Contabilidad'),(6,'Dirección / Gerencia'),(7,'Diseño y Artes gráficas'),(8,'Finanzas'),(9,'Informatica'),(10,'Ingenieria y Calidad'),(11,'Legal / Auditoría'),(12,'Legal / Auditoría'),(13,'Limpieza y Mantenimiento'),(14,'Logistica'),(15,'Mercadeo'),(16,'Produccion'),(17,'Recursos Humanos'),(18,'Ventas');
/*!40000 ALTER TABLE `go_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_job_level`
--

DROP TABLE IF EXISTS `go_job_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_job_level` (
  `jl_id` int(11) NOT NULL AUTO_INCREMENT,
  `jl_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`jl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_job_level`
--

LOCK TABLES `go_job_level` WRITE;
/*!40000 ALTER TABLE `go_job_level` DISABLE KEYS */;
INSERT INTO `go_job_level` VALUES (1,'Presidente'),(2,'Vicepresidente'),(3,'Director'),(4,'Gerente General'),(5,'Gerente'),(6,'Coordinador'),(7,'Supervisor'),(8,'Jefe'),(9,'Ejecutivo de Ventas'),(10,'Analista'),(11,'Encargado'),(12,'Asistente'),(13,'Auxiliar');
/*!40000 ALTER TABLE `go_job_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_school_grade`
--

DROP TABLE IF EXISTS `go_school_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_school_grade` (
  `sg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sg_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`sg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_school_grade`
--

LOCK TABLES `go_school_grade` WRITE;
/*!40000 ALTER TABLE `go_school_grade` DISABLE KEYS */;
INSERT INTO `go_school_grade` VALUES (1,'Seleccionar'),(2,'Primaria'),(3,'Secundaria'),(4,'Diversificado'),(5,'Universitario'),(6,'Maestría'),(7,'Doctorado'),(8,'Tecnico Profesional');
/*!40000 ALTER TABLE `go_school_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_table`
--

DROP TABLE IF EXISTS `go_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_table` (
  `tb_id` int(11) NOT NULL AUTO_INCREMENT,
  `tb_name` varchar(45) DEFAULT NULL,
  `tb_reference` int(11) DEFAULT NULL,
  `tb_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`tb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_table`
--

LOCK TABLES `go_table` WRITE;
/*!40000 ALTER TABLE `go_table` DISABLE KEYS */;
INSERT INTO `go_table` VALUES (1,'Establecimiento primaria',2,1),(2,'Establecimiento secundaria',3,1),(3,'Establecimiento diversificado',4,1),(4,'Establecimiento universitario',5,1),(5,'Establecimiento maestria',6,1),(6,'Establecimiento doctorado',7,1),(7,'Establecimiento tecnico profesional',8,1),(8,'carrera diversificado',4,2),(9,'carrera universitario',5,2),(10,'carrera maestria',6,2),(11,'carrera doctorado',7,2),(12,'carrera tecnico profesional',8,2);
/*!40000 ALTER TABLE `go_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_town`
--

DROP TABLE IF EXISTS `go_town`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_town` (
  `to_id` int(11) NOT NULL,
  `to_name` varchar(250) DEFAULT NULL,
  `to_description` text,
  PRIMARY KEY (`to_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_town`
--

LOCK TABLES `go_town` WRITE;
/*!40000 ALTER TABLE `go_town` DISABLE KEYS */;
INSERT INTO `go_town` VALUES (1,'Alta Verapaz',''),(2,'Baja Verapaz',''),(3,'Chimaltenango',''),(4,'Chiquimula',''),(5,'El Progreso',''),(6,'Escuintla',''),(7,'Guatemala',''),(8,'Huehuetenango',''),(9,'Izabal',''),(10,'Jalapa',''),(11,'Jutiapa',''),(12,'Petén',''),(13,'Quetzaltenango',''),(14,'Quiché',''),(15,'Retalhuleu',''),(16,'Sacatepéquez',''),(17,'San Marcos',''),(18,'Santa Rosa',''),(19,'Sololá',''),(20,'Suchitepéquez',''),(21,'Totonicapán',''),(22,'Zacapa','');
/*!40000 ALTER TABLE `go_town` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_user`
--

DROP TABLE IF EXISTS `go_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_user` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_email` varchar(45) NOT NULL,
  `us_age` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_user`
--

LOCK TABLES `go_user` WRITE;
/*!40000 ALTER TABLE `go_user` DISABLE KEYS */;
INSERT INTO `go_user` VALUES (1,'atellezsazo@gmail.com','23');
/*!40000 ALTER TABLE `go_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `go_values`
--

DROP TABLE IF EXISTS `go_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `go_values` (
  `va_id` int(11) NOT NULL AUTO_INCREMENT,
  `va_key` varchar(250) DEFAULT NULL,
  `va_value` varchar(250) DEFAULT NULL,
  `va_instance` int(11) NOT NULL,
  PRIMARY KEY (`va_id`),
  KEY `fk_value_instance_idx` (`va_instance`),
  CONSTRAINT `fk_value_instance` FOREIGN KEY (`va_instance`) REFERENCES `go_instance` (`in_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `go_values`
--

LOCK TABLES `go_values` WRITE;
/*!40000 ALTER TABLE `go_values` DISABLE KEYS */;
INSERT INTO `go_values` VALUES (1,'country','1',1),(2,'town','1',1),(3,'age','',1),(4,'grade_school','1',1),(5,'date','',1),(6,'industry','1',1),(7,'area','1',1),(8,'job','',1),(9,'job_level','1',1),(10,'age_job','',1),(11,'cant_helpers','',1),(12,'job_level_boss','1',1),(13,'salary','',1),(14,'country','1',2),(15,'town','1',2),(16,'age','',2),(17,'grade_school','1',2),(18,'date','',2),(19,'industry','1',2),(20,'area','1',2),(21,'job','',2),(22,'job_level','1',2),(23,'age_job','',2),(24,'cant_helpers','',2),(25,'job_level_boss','1',2),(26,'salary','',2),(27,'country','1',3),(28,'town','7',3),(29,'age','23',3),(30,'gender','male',3),(31,'grade_school','5',3),(32,'school','16',3),(33,'career','32',3),(34,'date','2015-04-12',3),(35,'industry','20',3),(36,'area','6',3),(37,'job','Lead Developer ',3),(38,'job_level','8',3),(39,'age_job','4',3),(40,'cant_helpers','6',3),(41,'job_level_boss','1',3),(42,'salary','9500',3),(43,'country','1',4),(44,'town','7',4),(45,'age','23',4),(46,'gender','male',4),(47,'grade_school','5',4),(48,'school','16',4),(49,'career','32',4),(50,'date','2016-04-12',4),(51,'industry','1',4),(52,'area','1',4),(53,'job','Lead ',4),(54,'job_level','8',4),(55,'age_job','4',4),(56,'cant_helpers','6',4),(57,'job_level_boss','1',4),(58,'salary','9500',4),(59,'salary_month_bonus','1',4),(60,'salary_year_bonus','1',4),(61,'salary_others','1',4),(62,'salary_others','1',4);
/*!40000 ALTER TABLE `go_values` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-13 23:33:09
