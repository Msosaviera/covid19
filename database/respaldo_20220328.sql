-- MySQL dump 10.13  Distrib 5.7.33, for Win64 (x86_64)
--
-- Host: localhost    Database: mdgconsultorio
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `citamedicas`
--

LOCK TABLES `citamedicas` WRITE;
/*!40000 ALTER TABLE `citamedicas` DISABLE KEYS */;
INSERT INTO `citamedicas` (`id`, `fechaCita`, `horaCita`, `molestiasPrevias`, `paciente_id`, `usuario_id`, `creadopor`, `created_at`, `updated_at`, `deleted_at`) VALUES (1,'2022-02-16','02:14:00','Dolor de cuerpo',2,3,1,'2022-02-17 07:11:56','2022-02-17 07:11:56',NULL),(2,'2022-02-17','20:13:00','Fiebre y dolor de cuerpo 40°',2,3,1,'2022-02-18 01:09:53','2022-02-18 01:09:53',NULL),(3,'2022-02-17','02:20:00','Dolor de Huesos',2,3,1,'2022-02-18 07:17:43','2022-02-18 07:17:43',NULL),(4,'2022-02-19','08:53:00','Fiebre y Dolor de garganta',3,3,1,'2022-02-19 04:54:45','2022-02-19 04:54:45',NULL),(5,'2022-03-08','21:30:00','Vomito y Dolor de cabeza',1,3,1,'2022-03-08 23:29:24','2022-03-08 23:29:24',NULL),(6,'2022-03-08','22:41:00','Dolor de rodilla',3,3,1,'2022-03-08 23:42:45','2022-03-08 23:42:45',NULL);
/*!40000 ALTER TABLE `citamedicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `consultamedicas`
--

LOCK TABLES `consultamedicas` WRITE;
/*!40000 ALTER TABLE `consultamedicas` DISABLE KEYS */;
INSERT INTO `consultamedicas` (`id`, `fecha`, `hora`, `detalles`, `creadopor`, `cita_id`, `usuario_id`, `created_at`, `updated_at`, `deleted_at`) VALUES (3,'2022-02-17','03:08:00','Posible covid',1,1,3,'2022-02-18 06:03:48','2022-02-26 23:51:15',NULL),(4,'2022-02-17','04:23:00','Posible Artritis',1,3,3,'2022-02-18 07:18:19','2022-02-18 07:18:19',NULL),(5,'2022-02-19','09:58:00','Posible Covid',1,4,3,'2022-02-19 04:56:36','2022-02-19 04:56:36',NULL),(6,'2022-03-08','19:29:00','Posible embarazo',1,5,3,'2022-03-08 23:30:18','2022-03-08 23:30:18',NULL),(7,'2022-03-08','19:43:00','Posible reumatismo',1,6,3,'2022-03-08 23:43:26','2022-03-08 23:43:26',NULL);
/*!40000 ALTER TABLE `consultamedicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `laboratorios`
--

LOCK TABLES `laboratorios` WRITE;
/*!40000 ALTER TABLE `laboratorios` DISABLE KEYS */;
/*!40000 ALTER TABLE `laboratorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `medicos`
--

LOCK TABLES `medicos` WRITE;
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES (3,'App\\User',1),(1,'App\\User',2),(2,'App\\User',3),(2,'App\\User',4),(3,'App\\User',5);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`id`, `nombre`, `appaterno`, `apmaterno`, `sexo`, `fechaNacimiento`, `carnetIdentidad`, `telefono`, `direccion`, `created_at`, `updated_at`, `deleted_at`) VALUES (1,'Juan','Perez','Pereira','Hombre','1990-12-12','12345678',75395123,'Av. 3 pasos al frente 4to anillo',NULL,NULL,NULL),(2,'Maria','Callau','Pedraza','Mujer','1981-06-21','87654321',65432198,'Calle charcas # 123',NULL,NULL,NULL),(3,'Jaime','Zambrana','Chacón','Hombre','1997-02-05','1598753',78945612,'Calle Arenales 123','2022-02-19 04:53:26','2022-02-19 04:53:26',NULL),(4,'Juan','Perez','Choque','Hombre','2000-01-01','12345678',98756112,'Av. Roca y Coronado 3 er anillo','2022-03-28 23:22:29','2022-03-28 23:22:29',NULL);
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1,'editar','web','2022-02-17 07:09:53','2022-02-17 07:09:53'),(2,'eliminar','web','2022-02-17 07:09:53','2022-02-17 07:09:53'),(3,'crear','web','2022-02-17 07:09:53','2022-02-17 07:09:53');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `recetamedicas`
--

LOCK TABLES `recetamedicas` WRITE;
/*!40000 ALTER TABLE `recetamedicas` DISABLE KEYS */;
INSERT INTO `recetamedicas` (`id`, `indicaciones`, `laboratorio`, `consulta_id`, `created_at`, `updated_at`, `deleted_at`) VALUES (1,'Paracetamol cada 12 horas por 10  días','Analisis de Sangre',3,'2022-02-19 02:32:00','2022-03-08 23:37:05',NULL),(2,'Paracetamol cada 8 horas por 15 días','Hemograma completo',5,'2022-02-19 04:57:20','2022-02-19 04:57:20',NULL),(3,'test','test',3,'2022-02-27 00:17:38','2022-02-27 00:17:38',NULL),(4,'sfgfsdgdfg','dgfgdgfd',3,'2022-02-26 20:37:28','2022-02-26 20:37:28',NULL),(7,'Omeprasol cada 12 horas por 1 mes','Hemograma completo y prueba de embarazo',6,'2022-03-08 23:36:34','2022-03-08 23:36:34',NULL),(8,'Corticoide 1 vez a la semana','Radiografía',7,'2022-03-08 23:45:15','2022-03-08 23:45:15',NULL);
/*!40000 ALTER TABLE `recetamedicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (3,1),(1,2),(2,2),(3,2),(1,3),(2,3),(3,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1,'secretaria','web','2022-02-17 07:09:53','2022-02-17 07:09:53'),(2,'medico','web','2022-02-17 07:09:53','2022-02-17 07:09:53'),(3,'administrador','web','2022-02-17 07:09:53','2022-02-17 07:09:53');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `secretarias`
--

LOCK TABLES `secretarias` WRITE;
/*!40000 ALTER TABLE `secretarias` DISABLE KEYS */;
/*!40000 ALTER TABLE `secretarias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tests`
--

LOCK TABLES `tests` WRITE;
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES (1,'Marcelo Sosa','marcelo@gmail.com',NULL,'$2y$10$jG2T9WgHowKdqNi1mAfdHePWnmUlKVw85qeYBvhxK8uUxyxeSG.zC',NULL,NULL,NULL,NULL),(2,'Maria del Carmen Viera','mariadelcarmeno@gmail.com',NULL,'$2y$10$qXSaAx0..jExoFChRIXu/.5WNdftnZIO.U5XNzrOdDnjeS9f7gHNS',NULL,NULL,NULL,NULL),(3,'Jose Ernesto Sandoval','joseernesto@gmail.com',NULL,'$2y$10$0ANeBpoqMxVFAMa75pEo2eFZbnCL86FuvgvfgEclBdQuIxEyC4.E2',NULL,NULL,NULL,NULL),(4,'juan perez','juanpp@gmail.com',NULL,'321',NULL,'2022-03-26 01:45:23','2022-03-26 01:45:50','2022-03-26 01:45:50'),(5,'juanperez','juanPerz@gmail.com',NULL,'12345678',NULL,'2022-03-28 23:18:58','2022-03-28 23:19:52','2022-03-28 23:19:52');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-28 19:37:59
