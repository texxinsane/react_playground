<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
            '/lift' => [[['_route' => 'lift', '_controller' => 'App\\Controller\\LiftController::indexAction'], null, null, null, false, false, null]],
            '/reps' => [
                [['_route' => 'rep_log_list', '_controller' => 'App\\Controller\\RepLogController::getRepLogsAction'], null, ['GET' => 0], null, false, false, null],
                [['_route' => 'rep_log_new', '_controller' => 'App\\Controller\\RepLogController::newRepLogAction'], null, ['POST' => 0], null, false, false, null],
            ],
            '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
            '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
            '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/re(?'
                        .'|ps/([^/]++)(?'
                            .'|(*:27)'
                        .')'
                        .'|gister/confirm/([^/]++)(*:58)'
                    .')'
                    .'|/js/routing(?:\\.(js|json))?(*:93)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:131)'
                        .'|wdt/([^/]++)(*:151)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:197)'
                                .'|router(*:211)'
                                .'|exception(?'
                                    .'|(*:231)'
                                    .'|\\.css(*:244)'
                                .')'
                            .')'
                            .'|(*:254)'
                        .')'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            27 => [
                [['_route' => 'rep_log_get', '_controller' => 'App\\Controller\\RepLogController::getRepLogAction'], ['id'], ['GET' => 0], null, false, true, null],
                [['_route' => 'rep_log_delete', '_controller' => 'App\\Controller\\RepLogController::deleteRepLogAction'], ['id'], ['DELETE' => 0], null, false, true, null],
            ],
            58 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
            93 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller:indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
            131 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            151 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            197 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            211 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            231 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            244 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            254 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
