<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/admin/email-templates' => [[['_route' => 'app_admin_email_templates', '_controller' => 'App\\Controller\\EmailTemplateController::index'], null, null, null, false, false, null]],
        '/admin/email-templates/new' => [[['_route' => 'app_admin_email_template_new', '_controller' => 'App\\Controller\\EmailTemplateController::new'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'app_profile_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/static-translations' => [[['_route' => 'app_admin_static_translations', '_controller' => 'App\\Controller\\StaticTranslationController::index'], null, null, null, false, false, null]],
        '/super-admin' => [[['_route' => 'app_super_admin_dashboard', '_controller' => 'App\\Controller\\SuperAdminController::dashboard'], null, null, null, false, false, null]],
        '/conditions' => [[['_route' => 'app_terms', '_controller' => 'App\\Controller\\TermsController::index'], null, null, null, false, false, null]],
        '/admin/translations' => [[['_route' => 'app_admin_translations', '_controller' => 'App\\Controller\\TranslationController::index'], null, null, null, true, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|users/([^/]++)/(?'
                        .'|edit(*:74)'
                        .'|approve(*:88)'
                    .')'
                    .'|email\\-templates/([^/]++)/(?'
                        .'|edit(*:129)'
                        .'|preview(*:144)'
                        .'|delete(*:158)'
                    .')'
                    .'|static\\-translations/edit/([^/]++)(*:201)'
                    .'|translations/(?'
                        .'|table/([^/]++)(*:239)'
                        .'|edit/([^/]++)/([^/]++)/([^/]++)(*:278)'
                    .')'
                .')'
                .'|/change\\-locale/([^/]++)(*:312)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:356)'
                .'|/super\\-admin/(?'
                    .'|admin/([^/]++)/(?'
                        .'|p(?'
                            .'|romote(*:409)'
                            .'|ermissions(*:427)'
                        .')'
                        .'|demote(*:442)'
                    .')'
                    .'|promote/([^/]++)/super\\-admin(*:480)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        88 => [[['_route' => 'app_admin_user_approve', '_controller' => 'App\\Controller\\AdminController::approveUser'], ['id'], null, null, false, false, null]],
        129 => [[['_route' => 'app_admin_email_template_edit', '_controller' => 'App\\Controller\\EmailTemplateController::edit'], ['id'], null, null, false, false, null]],
        144 => [[['_route' => 'app_admin_email_template_preview', '_controller' => 'App\\Controller\\EmailTemplateController::preview'], ['id'], null, null, false, false, null]],
        158 => [[['_route' => 'app_admin_email_template_delete', '_controller' => 'App\\Controller\\EmailTemplateController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        201 => [[['_route' => 'app_admin_static_translations_edit', '_controller' => 'App\\Controller\\StaticTranslationController::edit'], ['key'], null, null, false, true, null]],
        239 => [[['_route' => 'app_admin_translations_table', '_controller' => 'App\\Controller\\TranslationController::table'], ['table'], null, null, false, true, null]],
        278 => [[['_route' => 'app_admin_translations_edit', '_controller' => 'App\\Controller\\TranslationController::edit'], ['table', 'id', 'field'], null, null, false, true, null]],
        312 => [[['_route' => 'change_locale', '_controller' => 'App\\Controller\\LocaleController::changeLocale'], ['locale'], null, null, false, true, null]],
        356 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        409 => [[['_route' => 'app_super_admin_promote', '_controller' => 'App\\Controller\\SuperAdminController::promoteToAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        427 => [[['_route' => 'app_super_admin_permissions', '_controller' => 'App\\Controller\\SuperAdminController::managePermissions'], ['id'], null, null, false, false, null]],
        442 => [[['_route' => 'app_super_admin_demote', '_controller' => 'App\\Controller\\SuperAdminController::demoteAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        480 => [
            [['_route' => 'app_super_admin_promote_super', '_controller' => 'App\\Controller\\SuperAdminController::promoteToSuperAdmin'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
