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
        '/api/save-cookie-consent' => [[['_route' => 'app_save_cookie_consent', '_controller' => 'App\\Controller\\CookieController::saveConsent'], null, ['POST' => 0], null, false, false, null]],
        '/admin/email-templates' => [[['_route' => 'app_admin_email_templates', '_controller' => 'App\\Controller\\EmailTemplateController::index'], null, null, null, false, false, null]],
        '/admin/email-templates/new' => [[['_route' => 'app_admin_email_template_new', '_controller' => 'App\\Controller\\EmailTemplateController::new'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'app_profile_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/static-translations' => [[['_route' => 'app_admin_static_translations', '_controller' => 'App\\Controller\\StaticTranslationController::index'], null, null, null, false, false, null]],
        '/super-admin' => [[['_route' => 'app_super_admin_dashboard', '_controller' => 'App\\Controller\\SuperAdminController::dashboard'], null, null, null, false, false, null]],
        '/conditions' => [[['_route' => 'app_terms', '_controller' => 'App\\Controller\\TermsController::index'], null, null, null, false, false, null]],
        '/admin/translations' => [[['_route' => 'app_admin_translations', '_controller' => 'App\\Controller\\TranslationController::index'], null, null, null, true, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|users/([^/]++)/(?'
                        .'|approve(*:77)'
                        .'|p(?'
                            .'|romote\\-(?'
                                .'|admin(*:104)'
                                .'|super(*:117)'
                            .')'
                            .'|ermissions(*:136)'
                        .')'
                        .'|demote\\-(?'
                            .'|admin(*:161)'
                            .'|super(*:174)'
                        .')'
                        .'|edit(*:187)'
                    .')'
                    .'|email\\-templates/([^/]++)/(?'
                        .'|edit(*:229)'
                        .'|preview(*:244)'
                        .'|delete(*:258)'
                    .')'
                    .'|static\\-translations/edit/([^/]++)(*:301)'
                    .'|translations/(?'
                        .'|table/([^/]++)(*:339)'
                        .'|edit/([^/]++)/([^/]++)/([^/]++)(*:378)'
                    .')'
                .')'
                .'|/change\\-locale/([^/]++)(*:412)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:456)'
                .'|/super\\-admin/(?'
                    .'|admin/([^/]++)/(?'
                        .'|p(?'
                            .'|romote(*:509)'
                            .'|ermissions(*:527)'
                        .')'
                        .'|demote(*:542)'
                    .')'
                    .'|promote/([^/]++)/super\\-admin(*:580)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'app_admin_user_approve', '_controller' => 'App\\Controller\\Admin\\UserController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        104 => [[['_route' => 'app_admin_user_promote', '_controller' => 'App\\Controller\\Admin\\UserController::promoteToAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        117 => [[['_route' => 'app_admin_user_promote_super', '_controller' => 'App\\Controller\\Admin\\UserController::promoteToSuperAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        136 => [[['_route' => 'app_admin_user_permissions', '_controller' => 'App\\Controller\\Admin\\UserPermissionsController::managePermissions'], ['id'], null, null, false, false, null]],
        161 => [[['_route' => 'app_admin_user_demote', '_controller' => 'App\\Controller\\Admin\\UserController::demoteFromAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        174 => [[['_route' => 'app_admin_user_demote_super', '_controller' => 'App\\Controller\\Admin\\UserController::demoteFromSuperAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        187 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        229 => [[['_route' => 'app_admin_email_template_edit', '_controller' => 'App\\Controller\\EmailTemplateController::edit'], ['id'], null, null, false, false, null]],
        244 => [[['_route' => 'app_admin_email_template_preview', '_controller' => 'App\\Controller\\EmailTemplateController::preview'], ['id'], null, null, false, false, null]],
        258 => [[['_route' => 'app_admin_email_template_delete', '_controller' => 'App\\Controller\\EmailTemplateController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        301 => [[['_route' => 'app_admin_static_translations_edit', '_controller' => 'App\\Controller\\StaticTranslationController::edit'], ['key'], null, null, false, true, null]],
        339 => [[['_route' => 'app_admin_translations_table', '_controller' => 'App\\Controller\\TranslationController::table'], ['table'], null, null, false, true, null]],
        378 => [[['_route' => 'app_admin_translations_edit', '_controller' => 'App\\Controller\\TranslationController::edit'], ['table', 'id', 'field'], null, null, false, true, null]],
        412 => [[['_route' => 'change_locale', '_controller' => 'App\\Controller\\LocaleController::changeLocale'], ['locale'], null, null, false, true, null]],
        456 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        509 => [[['_route' => 'app_super_admin_promote', '_controller' => 'App\\Controller\\SuperAdminController::promoteToAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        527 => [[['_route' => 'app_super_admin_permissions', '_controller' => 'App\\Controller\\SuperAdminController::managePermissions'], ['id'], null, null, false, false, null]],
        542 => [[['_route' => 'app_super_admin_demote', '_controller' => 'App\\Controller\\SuperAdminController::demoteAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        580 => [
            [['_route' => 'app_super_admin_promote_super', '_controller' => 'App\\Controller\\SuperAdminController::promoteToSuperAdmin'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
