-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 05 avr. 2025 à 16:44
-- Version du serveur : 8.0.41-0ubuntu0.24.04.1
-- Version de PHP : 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `serveur`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_permission`
--

CREATE TABLE `admin_permission` (
  `id` int NOT NULL,
  `admin_id` int NOT NULL,
  `permission` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_granted` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250404224049', '2025-04-04 22:41:03', 6023),
('DoctrineMigrations\\Version20250405001309', '2025-04-05 00:13:28', 6085);

-- --------------------------------------------------------

--
-- Structure de la table `email_template`
--

CREATE TABLE `email_template` (
  `id` int NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `html_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_content` longtext COLLATE utf8mb4_unicode_ci,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `email_template`
--

INSERT INTO `email_template` (`id`, `code`, `subject`, `html_content`, `text_content`, `locale`, `created_at`, `updated_at`) VALUES
(25, 'registration_confirmation', 'Confirmation de votre inscription', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Confirmation de votre inscription</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"290438\">\r\n        <div class=\"header\" fgid=\"290444\">\r\n            <h1 fgid=\"290450\">Confirmation de votre inscription</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"290457\">\r\n            <p fgid=\"290463\">Bonjour {{ firstName }},</p>\r\n            \r\n            <p fgid=\"290470\">Merci de vous être inscrit sur notre site. </p><p fgid=\"290470\">Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"290477\">\r\n                <a href=\"{{ signedUrl }}\" class=\"button\" fgid=\"290483\">Confirmer mon adresse email</a>\r\n            </p>\r\n            \r\n            <p fgid=\"290491\">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>\r\n            <p fgid=\"290498\">{{ signedUrl }}</p>\r\n            \r\n            <p fgid=\"290505\">Ce lien expirera dans 24 heures.</p>\r\n            \r\n            <p fgid=\"290512\">Si vous n\'avez pas créé de compte, veuillez ignorer cet email.</p>\r\n            \r\n            <p fgid=\"290519\">Cordialement,<br fgid=\"290526\">L\'équipe Dmqode.be.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"290533\">\r\n            <p fgid=\"290539\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>\r\n        </div>\r\n    </div>', NULL, 'fr', '2025-04-01 18:09:44', '2025-04-02 00:51:07'),
(26, 'registration_confirmation', 'Registration confirmation', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Confirmation de votre inscription</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"298465\">\r\n        <div class=\"header\" fgid=\"298471\">\r\n            <h1 fgid=\"298477\">Confirmation of your registration</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"298484\">\r\n            <p fgid=\"298490\">Dear {{ firstName }},</p>\r\n            \r\n            <p fgid=\"298497\">Thank you for registering on our website. </p><p fgid=\"298497\">To confirm your email address, please click the buttom below.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"298504\">\r\n                <a href=\"{{ signedUrl }}\" class=\"button\" fgid=\"298510\">Confirm my email address</a></p>\r\n            \r\n            <p fgid=\"298518\">If the button doesn\'t work, you can copy and paste the following link into your browser :</p>\r\n            <p fgid=\"298525\">{{ signedUrl }}</p>\r\n            \r\n            <p>This link will expire in 24 hours.</p><p>If you did not create an account, please disregard this email.</p><p fgid=\"298532\"><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Best regards, </span></p><p fgid=\"298532\"><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> \r\nThe Dmqode.be&nbsp;</span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Team.</span></p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"298560\">\r\n            <p fgid=\"298566\">This email was sent automatically; please do not reply to it.</p>\r\n        </div>\r\n    </div>', NULL, 'en', '2025-04-01 18:09:44', '2025-04-02 00:52:34'),
(27, 'registration_confirmation', 'Bevestiging van uw inschrijving', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Confirmation de votre inscription</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"300483\">\r\n        <div class=\"header\" fgid=\"300489\">\r\n            <h1 fgid=\"300495\">Bevestiging van uw inschrijving</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"300502\">\r\n            <p fgid=\"300508\">Beste {{ firstName }},</p>\r\n            \r\n            <p fgid=\"300515\">Bedankt voor uw inschrijving op onze website. </p><p fgid=\"300515\">Om uw e-mailadres te bevestigen, klik op de onderstaande knop</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"300522\"><a href=\"{{ signedUrl }}\" class=\"button\" fgid=\"300528\">Mijn e-mailadres bevestigen</a></p>\r\n            \r\n            <p fgid=\"300536\">Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:</p>\r\n            <p fgid=\"300543\">{{ signedUrl }}</p>\r\n            \r\n            <p fgid=\"300550\"><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Deze link verloopt binnen 24 uur.</span></p><p>Als u geen account heeft aangemaakt, kunt u deze e-mail negeren.</p><p>Met vriendelijke groeten, </p><p> \r\nHet Dmqode.be-team.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"300578\">\r\n            <p fgid=\"300584\">Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>\r\n        </div>\r\n    </div>', NULL, 'nl', '2025-04-01 18:09:44', '2025-04-02 00:52:54'),
(28, 'registration_confirmation', 'Bestätigung Ihrer Anmeldung', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Confirmation de votre inscription</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"302541\">\r\n        <div class=\"header\" fgid=\"302547\">\r\n            <h1 fgid=\"302553\">Bestätigung Ihrer Anmeldung</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"302560\">\r\n            <p fgid=\"302566\">Sehr geehrte/-r {{ firstName }},</p>\r\n            \r\n            <div data-tabster=\"{&quot;groupper&quot;:{&quot;tabbability&quot;:2},&quot;focusable&quot;:{}}\" data-content=\"ai-message\" aria-labelledby=\"6x4iMeEPGNTjSsUjPrqsT-author} 6x4iMeEPGNTjSsUjPrqsT-content-0\" tabindex=\"0\" role=\"article\"><div id=\"6x4iMeEPGNTjSsUjPrqsT-content-0\"><p>Vielen Dank, dass Sie sich auf unserer Website registriert haben.</p><p>Um Ihre E-Mail-Adresse zu bestätigen, klicken Sie bitte auf den untenstehenden Button.</p></div></div><p fgid=\"302573\"><i tabindex=\"0\" role=\"none\" data-tabster-dummy=\"\" aria-hidden=\"true\" style=\"position: fixed; height: 1px; width: 1px; opacity: 0.001; z-index: -1; content-visibility: hidden; top: 0px; left: 0px;\"></i></p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"302580\">\r\n                <a href=\"{{ signedUrl }}\" class=\"button\" fgid=\"302586\">Meine E-Mail-Adresse bestätigen</a>\r\n            </p>\r\n            \r\n            <p fgid=\"302594\">Wenn der Button nicht funktioniert, können Sie den folgenden Link kopieren und in Ihren Browser einfügen:</p>\r\n            <p fgid=\"302601\">{{ signedUrl }}</p>\r\n            \r\n            <p>Dieser Link wird in 24 Stunden ablaufen.</p><p>Wenn Sie kein Konto erstellt haben, ignorieren Sie bitte diese E-Mail.</p><p>Mit freundlichen Grüßen, </p><p> \r\nDas Dmqode.be-Team.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"302636\">\r\n            <p fgid=\"302642\">Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>\r\n        </div>\r\n    </div>', NULL, 'de', '2025-04-01 18:09:44', '2025-04-02 00:53:20'),
(29, 'account_approved', 'Votre compte a été approuvé', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Votre compte a été approuvé</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"294385\">\r\n        <div class=\"header\" fgid=\"294391\">\r\n            <h1 fgid=\"294397\">Votre compte a été approuvé</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"294404\">\r\n            <p fgid=\"294410\">Bonjour {{ firstName }},</p>\r\n            \r\n            <p fgid=\"294417\">Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d\'administration.</p>\r\n            \r\n            <p fgid=\"294424\">Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"294431\">\r\n                <a href=\"https://{{ domain }}/login\" class=\"button\" fgid=\"294437\">Se connecter</a>\r\n            </p>\r\n            \r\n            <p fgid=\"294445\">Si vous avez des questions, n\'hésitez pas à nous contacter.</p>\r\n            \r\n            <p fgid=\"294452\">Cordialement,<br fgid=\"294459\">L\'équipe&nbsp;<span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\" fgid=\"294710\">Dmqode.be.</span></p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"294466\">\r\n            <p fgid=\"294472\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>\r\n        </div>\r\n    </div>', NULL, 'fr', '2025-04-01 18:09:44', '2025-04-02 00:51:23'),
(30, 'account_approved', 'Your account has been approved', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Votre compte a été approuvé</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"304758\">\r\n        <div class=\"header\" fgid=\"304764\">\r\n            <h1 fgid=\"304770\">Your account has been approved</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"304777\">\r\n            <p fgid=\"304783\">Dear {{ firstName }},</p><p>We are pleased to inform you that your account has been approved by our administration team.</p><p>You can now log in to your account by clicking the button below.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"304804\"><a href=\"https://{{ domain }}/login\" class=\"button\" fgid=\"304810\">Log in</a></p>\r\n            \r\n            <p>If you have any questions, feel free to contact us.</p><p>Best regards, </p><p>The Dmoqe.be Team.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"304839\">\r\n            <p fgid=\"304845\">This email was sent automatically; please do not reply to it..</p>\r\n        </div>\r\n    </div>', NULL, 'en', '2025-04-01 18:09:44', '2025-04-02 00:53:48'),
(31, 'account_approved', 'Uw account is goedgekeurd', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Votre compte a été approuvé</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"307083\">\r\n        <div class=\"header\" fgid=\"307089\">\r\n            <h1 fgid=\"307095\">Uw account is goedgekeurd</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"307102\">\r\n            <p fgid=\"307108\">Beste {{ firstName }},</p>\r\n            \r\n            <p>We zijn verheugd u te informeren dat uw account is goedgekeurd door ons administratieteam.</p><p>U kunt nu inloggen op uw account door op de onderstaande knop te klikken.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"307129\"><a href=\"https://{{ domain }}/login\" class=\"button\" fgid=\"307135\">Inloggen</a></p>\r\n            \r\n            <p>Als u vragen heeft, aarzel dan niet om contact met ons op te nemen.</p><p>Met vriendelijke groeten, </p><p> \r\nHet Dmqode.be-team.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"307164\">\r\n            <p fgid=\"307170\">Deze e-mail is automatisch verzonden; gelieve er niet op te reageren..</p>\r\n        </div>\r\n    </div>', NULL, 'nl', '2025-04-01 18:09:44', '2025-04-02 00:53:31'),
(32, 'account_approved', 'Ihr Konto wurde genehmigt', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Votre compte a été approuvé</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"308946\">\r\n        <div class=\"header\" fgid=\"308952\">\r\n            <h1 fgid=\"308958\">Ihr Konto wurde genehmigt</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"308965\">\r\n            <p fgid=\"308971\">Sehr geehrte/-r {{ firstName }},</p>\r\n            \r\n            <p>Wir freuen uns, Ihnen mitteilen zu können, dass Ihr Konto von unserem Verwaltungsteam genehmigt wurde.</p><p>Sie können sich jetzt in Ihr Konto einloggen, indem Sie auf die Schaltfläche unten klicken.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"308992\"><a href=\"https://{{ domain }}/login\" class=\"button\" fgid=\"308998\">Einloggen</a></p>\r\n            \r\n            <p>Wenn Sie Fragen haben, zögern Sie nicht, uns zu kontaktieren.</p><p>Mit freundlichen Grüßen, </p><p> \r\nDas Dmqode.be-Team.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"309027\">\r\n            <p fgid=\"309033\">Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>\r\n        </div>\r\n    </div>', NULL, 'de', '2025-04-01 18:09:44', '2025-04-02 00:37:34'),
(33, 'reset_password', 'Réinitialisation de votre mot de passe', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Réinitialisation de votre mot de passe</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"296437\">\r\n        <div class=\"header\" fgid=\"296443\">\r\n            <h1 fgid=\"296449\">Réinitialisation de votre mot de passe</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"296456\">\r\n            <p fgid=\"296462\">Bonjour {{ firstName }},</p>\r\n            \r\n            <p fgid=\"296469\">Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. </p><p fgid=\"296469\">Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"296476\">\r\n                <a href=\"{{ resetToken }}\" class=\"button\" fgid=\"296482\">Réinitialiser mon mot de passe</a>\r\n            </p>\r\n            \r\n            <p fgid=\"296490\">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>\r\n            <p fgid=\"296497\">{{ resetToken }}</p>\r\n            \r\n            <p fgid=\"296504\">Ce lien expirera dans 1 heure.</p>\r\n            \r\n            <p fgid=\"296511\">Si vous n\'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.</p>\r\n            \r\n            <p fgid=\"296518\">Cordialement,<br fgid=\"296525\">L\'équipe&nbsp;<span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\" fgid=\"296756\">Dmqode.be.</span></p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"296532\">\r\n            <p fgid=\"296538\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>\r\n        </div>\r\n    </div>', NULL, 'fr', '2025-04-01 18:09:44', '2025-04-02 00:51:48'),
(34, 'reset_password', 'Reset your password', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Réinitialisation de votre mot de passe</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"311452\">\r\n        <div class=\"header\" fgid=\"311458\">\r\n            <h1 fgid=\"311464\">Reset your password</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"311471\">\r\n            <p fgid=\"311477\">Dear {{ firstName }},</p>\r\n            \r\n            <p fgid=\"311484\">We have received a request to reset the password for your account.</p><p fgid=\"311484\">To set a new password, click the button below.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"311491\"><a href=\"{{ resetToken }}\" class=\"button\" fgid=\"311497\">Reset your password</a>\r\n            </p>\r\n            \r\n            <p fgid=\"311505\">If the button doesn\'t work, you can copy and paste the following link into your browser:</p>\r\n            <p fgid=\"311512\">{{ resetToken }}</p>\r\n            \r\n            <p fgid=\"311519\"><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">This link will expire in 1 hour.</span></p><p>If you did not request a password reset, please ignore this email.</p><p>Best regards,</p><p><span style=\"text-align: center; color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);\">The Dmqode.be Team.</span></p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"311547\">\r\n            <p fgid=\"311553\">This email was sent automatically; please do not reply to it.</p>\r\n        </div>\r\n    </div>', NULL, 'en', '2025-04-01 18:09:44', '2025-04-02 00:54:39'),
(35, 'reset_password', 'Reset uw wachtwoord', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Réinitialisation de votre mot de passe</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"317400\">\r\n        <div class=\"header\" fgid=\"317406\">\r\n            <h1 fgid=\"317412\">Reset uw wachtwoord</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"317419\">\r\n            <p fgid=\"317425\">Beste {{ firstName }},</p>\r\n            \r\n            <p fgid=\"317432\">We hebben een verzoek ontvangen om het wachtwoord voor uw account opnieuw in te stellen. </p><p fgid=\"317432\">Om een nieuw wachtwoord in te stellen, klikt u op de onderstaande knop.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"317439\"><a href=\"{{ resetToken }}\" class=\"button\" fgid=\"317445\">Reset uw wachtwoord</a>\r\n            </p>\r\n            \r\n            <p fgid=\"317453\">Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:</p>\r\n            <p fgid=\"317460\">{{ resetToken }}</p>\r\n            \r\n            <p fgid=\"317467\"><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Deze link verloopt binnen 1 uur.</span></p><p>Als u geen verzoek heeft ingediend om uw wachtwoord opnieuw in te stellen, kunt u deze e-mail negeren.</p><p>Met vriendelijke groeten, </p><p> \r\nHet Dmqode.be-team.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"317495\">\r\n            <p fgid=\"317501\">Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>\r\n        </div>\r\n    </div>', NULL, 'nl', '2025-04-01 18:09:44', '2025-04-02 00:46:55'),
(36, 'reset_password', 'Setzen Sie Ihr Passwort zurück', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Réinitialisation de votre mot de passe</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"325608\">\r\n        <div class=\"header\" fgid=\"325614\">\r\n            <h1 fgid=\"325620\">Setzen Sie Ihr Passwort zurück</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"325627\"><p fgid=\"325633\"><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Sehr geehrte/-r</span>&nbsp;{{ firstName }},</p>\r\n            \r\n            <div data-tabster=\"{&quot;groupper&quot;:{&quot;tabbability&quot;:2},&quot;focusable&quot;:{}}\" data-content=\"ai-message\" aria-labelledby=\"QAAnSFLFfetpVjgyUuwJs-author} QAAnSFLFfetpVjgyUuwJs-content-0\" tabindex=\"0\" role=\"article\"><div id=\"QAAnSFLFfetpVjgyUuwJs-content-0\"><p>Wir haben eine Anfrage zur Zurücksetzung des Passworts für Ihr Konto erhalten. </p><p>Um ein neues Passwort festzulegen, klicken Sie bitte auf die Schaltfläche unten.</p></div></div><p fgid=\"325640\"><i tabindex=\"0\" role=\"none\" data-tabster-dummy=\"\" aria-hidden=\"true\" style=\"position: fixed; height: 1px; width: 1px; opacity: 0.001; z-index: -1; content-visibility: hidden; top: 0px; left: 0px;\"></i></p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"325647\"><a href=\"{{ resetToken }}\" class=\"button\" fgid=\"325653\">Setzen Sie Ihr Passwort zurück</a>\r\n            </p>\r\n            \r\n            <p fgid=\"325661\"><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Wenn </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">die </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Schaltfläche </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">nicht </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">funktioniert, </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">können </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Sie </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">den </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">folgenden </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Link </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">kopieren </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">und </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">in </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Ihren </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Browser </span><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">einfügen :</span></p><p fgid=\"325661\"><span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">{{ resetToken }}</span></p>\r\n            \r\n            <p>Dieser Link wird in 1 Stunde ablaufen.</p><p>Wenn Sie keine Zurücksetzung des Passworts beantragt haben, ignorieren Sie bitte diese E-Mail.</p><p>Mit freundlichen Grüßen, </p><p> \r\nDas Dmqode.be-Team.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"325703\">\r\n            <p fgid=\"325709\"><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight);\">Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</span></p>\r\n        </div>\r\n    </div>', NULL, 'de', '2025-04-01 18:09:44', '2025-04-02 00:55:09'),
(37, 'nouveau_formulaire', 'Nouveau formulaire', '<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Nouveau template</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n        .container {\r\n            max-width: 600px;\r\n            margin: 0 auto;\r\n            padding: 20px;\r\n        }\r\n        .header {\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n        .content {\r\n            padding: 20px;\r\n            background-color: #f9f9f9;\r\n        }\r\n        .button {\r\n            display: inline-block;\r\n            background: linear-gradient(135deg, #8e44ad, #3498db);\r\n            color: white;\r\n            text-decoration: none;\r\n            padding: 10px 20px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .footer {\r\n            text-align: center;\r\n            font-size: 12px;\r\n            color: #777;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n\r\n\r\n    <div class=\"container\" fgid=\"290438\">\r\n        <div class=\"header\" fgid=\"290444\">\r\n            <h1 fgid=\"290450\">Nouveau template</h1>\r\n        </div>\r\n        <div class=\"content\" fgid=\"290457\">\r\n            <p fgid=\"290463\">Bonjour {{ firstName }},</p>\r\n            \r\n            <p fgid=\"290470\">Text du nouveau template première ligne. </p><p fgid=\"290470\">Text du nouveau template deuxième ligne.</p>\r\n            \r\n            <p style=\"text-align: center;\" fgid=\"290477\">\r\n                <a href=\"\" class=\"button\" fgid=\"290483\">Bouton du nouveau template</a>\r\n            </p>\r\n            \r\n            <p fgid=\"290491\">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>\r\n            <p fgid=\"290498\"></p>\r\n            \r\n            <p fgid=\"290505\">Text.</p>\r\n            \r\n            <p fgid=\"290512\">Text.</p>\r\n            \r\n            <p fgid=\"290519\">Cordialement,<br fgid=\"290526\">L\'équipe Dmqode.be.</p>\r\n        </div>\r\n        <div class=\"footer\" fgid=\"290533\">\r\n            <p fgid=\"290539\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>\r\n        </div>\r\n    </div>', NULL, 'fr', '2025-04-05 00:33:23', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `approved_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `last_login_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `roles`, `password`, `last_name`, `first_name`, `street`, `house_number`, `box_number`, `postal_code`, `city`, `country`, `phone_number`, `locale`, `is_verified`, `is_approved`, `email_verified_at`, `approved_at`, `created_at`, `last_login_at`) VALUES
(5, 'admin@dmqode.be', 'superadmin', '[\"ROLE_SUPER_ADMIN\", \"ROLE_ADMIN\", \"ROLE_USER\"]', '$2y$13$G1vRLxyi.dRd0lymNZr68uzfXwMNdyZNoR48aJz3mC0gdNJQpmDum', 'Tziolopoulos', 'Kevin', 'Avenue Charles Gilisquet', '147', '4', '1030', 'Schaerbeek', 'BE', '+32466904419', 'fr', 1, 1, '2025-04-04 20:08:51', '2025-04-04 20:08:51', '2025-04-04 20:08:50', '2025-04-05 01:22:25'),
(6, 'user1@dmqode.be', 'user1', '[\"ROLE_USER\"]', '$2y$13$NEYG1p5JvStQcbbi22tdXu0xNeN8OR7lMEJAK5DblogVo5zWgeDM2', 'Dupont', 'Jean', 'Rue de Test', '42', '3', '1050', 'Ville de Test', 'BE', '+32987654321', 'fr', 0, 0, NULL, NULL, '2025-04-04 20:08:51', NULL),
(7, 'admin1@dmqode.be', 'admin1', '[\"ROLE_ADMIN\", \"ROLE_USER\"]', '$2y$13$omUT17SL35cn2lKf5dSl5ONRXTfGEaQLiNIHT0u1AdNH01lFfnkj.', 'Durand', 'Marie', 'Rue de Test', '42', '7', '1050', 'Ville de Test', 'BE', '+32987654321', 'fr', 1, 1, '2025-04-04 20:08:51', '2025-04-04 20:08:51', '2025-04-04 20:08:51', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2877342F642B8210` (`admin_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin_permission`
--
ALTER TABLE `admin_permission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD CONSTRAINT `FK_2877342F642B8210` FOREIGN KEY (`admin_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
