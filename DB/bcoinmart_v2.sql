-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2025 at 10:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcoinmart_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `context` json DEFAULT NULL,
  `location` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `context`, `location`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'user', 'User  has been created', 'App\\Models\\User', 'created', 6, NULL, NULL, '{\"attributes\": {\"name\": \"\", \"email\": \"ashad2@gmail.com\", \"phone\": \"\"}}', NULL, NULL, NULL, '2025-09-05 04:16:27', '2025-09-05 04:16:27'),
(2, 'user', 'User  has been created', 'App\\Models\\User', 'created', 8, NULL, NULL, '{\"attributes\": {\"name\": \"\", \"email\": \"nahid@gmail.com\", \"phone\": \"\"}}', '{\"ip\": \"127.0.0.1\", \"device\": \"WebKit\", \"browser\": \"Chrome\", \"platform\": \"Windows\", \"timestamp\": \"2025-09-05 10:43:22\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36\", \"browser_version\": \"140.0.0.0\", \"platform_version\": \"10.0\"}', '{\"ip\": \"127.0.0.1\", \"country\": null, \"country_code\": null}', NULL, '2025-09-05 04:43:26', '2025-09-05 04:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '0b8cf328-e187-429f-923b-874c0296bad8', 'redis', 'default', '{\"uuid\":\"0b8cf328-e187-429f-923b-874c0296bad8\",\"displayName\":\"App\\\\Jobs\\\\RegistrationVerificationMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\RegistrationVerificationMailJob\",\"command\":\"O:40:\\\"App\\\\Jobs\\\\RegistrationVerificationMailJob\\\":6:{s:44:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000to\\\";s:16:\\\"ashad2@gmail.com\\\";s:49:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000subject\\\";s:28:\\\"Your Email Verification Code\\\";s:55:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000mailableClass\\\";s:38:\\\"\\\\App\\\\Mail\\\\RegistrationVerificationMail\\\";s:46:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000data\\\";a:1:{s:4:\\\"code\\\";i:963418;}s:50:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000viewPath\\\";s:35:\\\"mail.registration_verification_mail\\\";s:52:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000attachment\\\";N;}\"},\"createdAt\":1757064147,\"id\":\"ecXNLzWsuGrPl34ecsireTkHvLfkFoza\",\"attempts\":0,\"delay\":null}', 'ErrorException: Undefined variable $data in F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\storage\\framework\\views\\c846723ac20f0be66669e36b5ff15618.php:26\nStack trace:\n#0 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(258): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'Undefined varia...\', \'F:\\\\laragon\\\\www\\\\...\', 26)\n#1 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\storage\\framework\\views\\c846723ac20f0be66669e36b5ff15618.php(26): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, \'Undefined varia...\', \'F:\\\\laragon\\\\www\\\\...\', 26)\n#2 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(123): require(\'F:\\\\laragon\\\\www\\\\...\')\n#3 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()\n#4 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(57): Illuminate\\Filesystem\\Filesystem->getRequire(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#5 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(88): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#6 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#7 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(191): Illuminate\\View\\View->getContents()\n#8 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(160): Illuminate\\View\\View->renderContents()\n#9 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(444): Illuminate\\View\\View->render()\n#10 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(419): Illuminate\\Mail\\Mailer->renderView(\'mail.registrati...\', Array)\n#11 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(312): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'mail.registrati...\', NULL, NULL, Array)\n#12 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(207): Illuminate\\Mail\\Mailer->send(\'mail.registrati...\', Array, Object(Closure))\n#13 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#14 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(200): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#15 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(353): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#16 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(300): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\RegistrationVerificationMail))\n#17 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(123): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\RegistrationVerificationMail))\n#18 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\app\\Jobs\\RegistrationVerificationMailJob.php(36): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\RegistrationVerificationMail))\n#19 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\RegistrationVerificationMailJob->handle()\n#20 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#21 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#22 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#23 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(836): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#24 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#25 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#26 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#27 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\RegistrationVerificationMailJob), false)\n#29 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#30 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#31 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#32 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(App\\Jobs\\RegistrationVerificationMailJob))\n#33 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\RedisJob), Array)\n#34 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#35 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'redis\', Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(Illuminate\\Queue\\WorkerOptions))\n#36 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\RedisJob), \'redis\', Object(Illuminate\\Queue\\WorkerOptions))\n#37 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'redis\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#38 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'redis\', \'default\')\n#39 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#40 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#41 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#42 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#43 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(836): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#44 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#45 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#46 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#47 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(1110): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(359): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(194): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#50 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#51 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1235): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#52 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#53 {main}\n\nNext Illuminate\\View\\ViewException: Undefined variable $data (View: F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\resources\\views\\mail\\registration_verification_mail.blade.php) in F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\storage\\framework\\views\\c846723ac20f0be66669e36b5ff15618.php:26\nStack trace:\n#0 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(59): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(ErrorException), 0)\n#1 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(88): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#2 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#3 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(191): Illuminate\\View\\View->getContents()\n#4 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(160): Illuminate\\View\\View->renderContents()\n#5 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(444): Illuminate\\View\\View->render()\n#6 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(419): Illuminate\\Mail\\Mailer->renderView(\'mail.registrati...\', Array)\n#7 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(312): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'mail.registrati...\', NULL, NULL, Array)\n#8 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(207): Illuminate\\Mail\\Mailer->send(\'mail.registrati...\', Array, Object(Closure))\n#9 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(200): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(353): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(300): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\RegistrationVerificationMail))\n#13 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(123): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\RegistrationVerificationMail))\n#14 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\app\\Jobs\\RegistrationVerificationMailJob.php(36): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\RegistrationVerificationMail))\n#15 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\RegistrationVerificationMailJob->handle()\n#16 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(836): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#21 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#22 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#23 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\RegistrationVerificationMailJob), false)\n#25 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#26 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#27 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(App\\Jobs\\RegistrationVerificationMailJob))\n#29 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\RedisJob), Array)\n#30 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'redis\', Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\RedisJob), \'redis\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'redis\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'redis\', \'default\')\n#35 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(836): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(1110): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(359): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(194): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1235): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#49 {main}', '2025-09-05 03:22:29'),
(2, '95855c30-966e-435d-887b-28faf85df91e', 'redis', 'default', '{\"uuid\":\"95855c30-966e-435d-887b-28faf85df91e\",\"displayName\":\"App\\\\Jobs\\\\RegistrationVerificationMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\RegistrationVerificationMailJob\",\"command\":\"O:40:\\\"App\\\\Jobs\\\\RegistrationVerificationMailJob\\\":6:{s:44:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000to\\\";s:16:\\\"ashad2@gmail.com\\\";s:49:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000subject\\\";s:28:\\\"Your Email Verification Code\\\";s:55:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000mailableClass\\\";s:38:\\\"\\\\App\\\\Mail\\\\RegistrationVerificationMail\\\";s:46:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000data\\\";a:1:{s:4:\\\"code\\\";i:377405;}s:50:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000viewPath\\\";s:35:\\\"mail.registration_verification_mail\\\";s:52:\\\"\\u0000App\\\\Jobs\\\\RegistrationVerificationMailJob\\u0000attachment\\\";N;}\"},\"createdAt\":1757064254,\"id\":\"rx6dNpweG4gNxLEFPWsEYY73pX92qr4x\",\"attempts\":0,\"delay\":null}', 'ErrorException: Undefined variable $data in F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\storage\\framework\\views\\c846723ac20f0be66669e36b5ff15618.php:26\nStack trace:\n#0 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(258): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'Undefined varia...\', \'F:\\\\laragon\\\\www\\\\...\', 26)\n#1 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\storage\\framework\\views\\c846723ac20f0be66669e36b5ff15618.php(26): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, \'Undefined varia...\', \'F:\\\\laragon\\\\www\\\\...\', 26)\n#2 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(123): require(\'F:\\\\laragon\\\\www\\\\...\')\n#3 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()\n#4 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(57): Illuminate\\Filesystem\\Filesystem->getRequire(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#5 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(76): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#6 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#7 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(191): Illuminate\\View\\View->getContents()\n#8 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(160): Illuminate\\View\\View->renderContents()\n#9 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(444): Illuminate\\View\\View->render()\n#10 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(419): Illuminate\\Mail\\Mailer->renderView(\'mail.registrati...\', Array)\n#11 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(312): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'mail.registrati...\', NULL, NULL, Array)\n#12 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(207): Illuminate\\Mail\\Mailer->send(\'mail.registrati...\', Array, Object(Closure))\n#13 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#14 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(200): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#15 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(353): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#16 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(300): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\RegistrationVerificationMail))\n#17 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(123): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\RegistrationVerificationMail))\n#18 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\app\\Jobs\\RegistrationVerificationMailJob.php(36): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\RegistrationVerificationMail))\n#19 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\RegistrationVerificationMailJob->handle()\n#20 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#21 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#22 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#23 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(836): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#24 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#25 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#26 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#27 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\RegistrationVerificationMailJob), false)\n#29 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#30 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#31 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#32 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(App\\Jobs\\RegistrationVerificationMailJob))\n#33 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\RedisJob), Array)\n#34 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#35 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'redis\', Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(Illuminate\\Queue\\WorkerOptions))\n#36 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\RedisJob), \'redis\', Object(Illuminate\\Queue\\WorkerOptions))\n#37 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'redis\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#38 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'redis\', \'default\')\n#39 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#40 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#41 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#42 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#43 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(836): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#44 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#45 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#46 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#47 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(1110): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(359): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(194): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#50 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#51 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1235): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#52 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#53 {main}\n\nNext Illuminate\\View\\ViewException: Undefined variable $data (View: F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\resources\\views\\mail\\registration_verification_mail.blade.php) in F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\storage\\framework\\views\\c846723ac20f0be66669e36b5ff15618.php:26\nStack trace:\n#0 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(59): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(ErrorException), 0)\n#1 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(76): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#2 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get(\'F:\\\\laragon\\\\www\\\\...\', Array)\n#3 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(191): Illuminate\\View\\View->getContents()\n#4 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(160): Illuminate\\View\\View->renderContents()\n#5 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(444): Illuminate\\View\\View->render()\n#6 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(419): Illuminate\\Mail\\Mailer->renderView(\'mail.registrati...\', Array)\n#7 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(312): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'mail.registrati...\', NULL, NULL, Array)\n#8 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(207): Illuminate\\Mail\\Mailer->send(\'mail.registrati...\', Array, Object(Closure))\n#9 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(200): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(353): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(300): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\RegistrationVerificationMail))\n#13 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(123): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\RegistrationVerificationMail))\n#14 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\app\\Jobs\\RegistrationVerificationMailJob.php(36): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\RegistrationVerificationMail))\n#15 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\RegistrationVerificationMailJob->handle()\n#16 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(836): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#21 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#22 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#23 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(134): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\RegistrationVerificationMailJob), false)\n#25 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#26 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\RegistrationVerificationMailJob))\n#27 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(App\\Jobs\\RegistrationVerificationMailJob))\n#29 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\RedisJob), Array)\n#30 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'redis\', Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\RedisJob), \'redis\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'redis\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'redis\', \'default\')\n#35 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(836): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(1110): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(359): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\symfony\\console\\Application.php(194): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1235): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 F:\\laragon\\www\\bcoin_mart_Laravel\\bcoinmart-v2\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#49 {main}', '2025-09-05 03:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(6, '2025_09_04_105756_create_temp_users_table', 2),
(14, '2025_09_04_114156_add_new_column_phone_in_users_table', 3),
(15, '2025_09_04_114605_add_new_column_code_in_temp_users_table', 3),
(16, '2025_09_04_114915_update_column_email_nullable_in_users_table', 3),
(17, '2025_09_05_051123_add_is_agreed_in_users', 3),
(18, '2025_09_05_051358_add_is_agreed_in_temp_users', 3),
(19, '2025_09_05_060927_create_activity_log_table', 4),
(20, '2025_09_05_060928_add_event_column_to_activity_log_table', 4),
(21, '2025_09_05_060929_add_batch_uuid_column_to_activity_log_table', 4),
(22, '2025_09_05_061948_create_permission_tables', 5),
(23, '2025_09_05_065608_add_columns_in_activity_log', 6),
(24, '2025_09_05_094357_create_password_reset_otps_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_otps`
--

CREATE TABLE `password_reset_otps` (
  `id` bigint UNSIGNED NOT NULL,
  `contact_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_otps`
--

INSERT INTO `password_reset_otps` (`id`, `contact_info`, `code`, `created_at`, `updated_at`) VALUES
(15, 'ashad@gmail.com', '879546', '2025-09-05 04:39:55', '2025-09-05 04:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ACPW00Zxdgq92fqrIF7ze1xMYQ7lXcnY73tAXkcq', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiWmpPblJFS2NuQmhyUDVManR6bVRyempBRzd5MUNIWUZUMGFUc0RyVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjU6ImFsZXJ0IjthOjA6e31zOjU6ImVtYWlsIjtzOjE1OiJhc2hhZEBnbWFpbC5jb20iO3M6NToicGhvbmUiO047czoxNDoicmVnaXN0ZXJfZW1haWwiO3M6MTU6Im5haGlkQGdtYWlsLmNvbSI7czoxNDoicmVnaXN0ZXJfcGhvbmUiO047czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODt9', 1757069006);

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE `temp_users` (
  `id` bigint UNSIGNED NOT NULL,
  `contact_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_agreed` tinyint(1) NOT NULL DEFAULT '0',
  `code` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_users`
--

INSERT INTO `temp_users` (`id`, `contact_info`, `is_agreed`, `code`, `created_at`, `updated_at`) VALUES
(2, 'ashad@gmail.com', 0, NULL, '2025-09-04 07:46:19', '2025-09-04 07:46:19'),
(3, '+8801648583442', 0, NULL, '2025-09-04 23:30:46', '2025-09-04 23:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_agreed` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `is_agreed`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', '', '+8801648583443', NULL, '$2y$12$Pf.jVkl.BbTH0eeAJ3Z9weH9frYJtRbohJ.Tt2ZM69Dn7gxF5qosW', 0, NULL, '2025-09-04 06:50:39', '2025-09-04 23:02:34'),
(2, '', 'ashad@gmail.com', NULL, NULL, '$2y$12$nY1ShsvHaMJyQTbkTUx7x.QnTgZl3Vt9mcWfGLAzZ65Jap9WDjyg6', 0, NULL, '2025-09-04 07:46:31', '2025-09-05 04:19:34'),
(6, '', 'ashad2@gmail.com', '', NULL, '$2y$12$vMUwo9W5IB5C.dCQsRI4Iu06orS8d9SQ7GQ9EKq.hPC2NJQSzmQVS', 0, NULL, '2025-09-05 04:16:27', '2025-09-05 04:16:27'),
(7, '', 'nahid@gmail.com', '', NULL, '$2y$12$14hgRmziHt7lebZLe/qxPOqof10DtPwr7O1dZi./ps1rYgkArtOC6', 0, NULL, '2025-09-05 04:41:21', '2025-09-05 04:41:21'),
(8, '', 'nahid@gmail.com', '', NULL, '$2y$12$aFEbZg4tPOe5mAC.JjIJA./8CHdvZulGIdwz/WkATpTlzyLFvm5LC', 0, NULL, '2025-09-05 04:43:22', '2025-09-05 04:43:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_otps`
--
ALTER TABLE `password_reset_otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `temp_users`
--
ALTER TABLE `temp_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `password_reset_otps`
--
ALTER TABLE `password_reset_otps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_users`
--
ALTER TABLE `temp_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
