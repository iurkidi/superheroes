<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/link')) {
            // linkZonas
            if ($pathinfo === '/linkZonas') {
                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::indexAction',  '_route' => 'linkZonas',);
            }

            // linkHeroes
            if ($pathinfo === '/linkHeroes') {
                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::buscarSuperHAction',  '_route' => 'linkHeroes',);
            }

        }

        if (0 === strpos($pathinfo, '/tipos')) {
            // tipos
            if (rtrim($pathinfo, '/') === '/tipos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipos');
                }

                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\tiposController::indexAction',  '_route' => 'tipos',);
            }

            // tipos_show
            if (preg_match('#^/tipos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipos_show')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\tiposController::showAction',));
            }

            // tipos_new
            if ($pathinfo === '/tipos/new') {
                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\tiposController::newAction',  '_route' => 'tipos_new',);
            }

            // tipos_create
            if ($pathinfo === '/tipos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipos_create;
                }

                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\tiposController::createAction',  '_route' => 'tipos_create',);
            }
            not_tipos_create:

            // tipos_edit
            if (preg_match('#^/tipos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipos_edit')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\tiposController::editAction',));
            }

            // tipos_update
            if (preg_match('#^/tipos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipos_update')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\tiposController::updateAction',));
            }
            not_tipos_update:

            // tipos_delete
            if (preg_match('#^/tipos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipos_delete')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\tiposController::deleteAction',));
            }
            not_tipos_delete:

        }

        if (0 === strpos($pathinfo, '/superheroe')) {
            // linkadmin
            if (rtrim($pathinfo, '/') === '/superheroe/conSeguridad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'linkadmin');
                }

                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\DefaultController::indexAdminAction',  '_route' => 'linkadmin',);
            }

            // superheroe
            if (rtrim($pathinfo, '/') === '/superheroe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'superheroe');
                }

                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::indexAction',  '_route' => 'superheroe',);
            }

            // superh_responder
            if ($pathinfo === '/superheroe/superHResponder') {
                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::respSuperHAction',  '_route' => 'superh_responder',);
            }

            // superheroe_show
            if (preg_match('#^/superheroe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'superheroe_show')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::showAction',));
            }

            // superheroe_new
            if ($pathinfo === '/superheroe/new') {
                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::newAction',  '_route' => 'superheroe_new',);
            }

            // superheroe_create
            if ($pathinfo === '/superheroe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_superheroe_create;
                }

                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::createAction',  '_route' => 'superheroe_create',);
            }
            not_superheroe_create:

            // superheroe_edit
            if (preg_match('#^/superheroe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'superheroe_edit')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::editAction',));
            }

            // superheroe_update
            if (preg_match('#^/superheroe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_superheroe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'superheroe_update')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::updateAction',));
            }
            not_superheroe_update:

            // superheroe_delete
            if (preg_match('#^/superheroe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_superheroe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'superheroe_delete')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\superheroeController::deleteAction',));
            }
            not_superheroe_delete:

        }

        if (0 === strpos($pathinfo, '/zonas')) {
            // zonas
            if (rtrim($pathinfo, '/') === '/zonas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zonas');
                }

                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::indexAction',  '_route' => 'zonas',);
            }

            // zonas_show
            if (preg_match('#^/zonas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zonas_show')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::showAction',));
            }

            // zonas_new
            if ($pathinfo === '/zonas/new') {
                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::newAction',  '_route' => 'zonas_new',);
            }

            // zonas_create
            if ($pathinfo === '/zonas/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_zonas_create;
                }

                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::createAction',  '_route' => 'zonas_create',);
            }
            not_zonas_create:

            // zonas_edit
            if (preg_match('#^/zonas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zonas_edit')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::editAction',));
            }

            // zonas_update
            if (preg_match('#^/zonas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_zonas_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zonas_update')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::updateAction',));
            }
            not_zonas_update:

            // zonas_delete
            if (preg_match('#^/zonas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_zonas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zonas_delete')), array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::deleteAction',));
            }
            not_zonas_delete:

            // zona_buscar_resp
            if ($pathinfo === '/zonas/zonabuscarresp') {
                return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\zonasController::buscarZonaRespAction',  '_route' => 'zona_buscar_resp',);
            }

        }

        // uni_superh_homepage
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'uni\\bundle\\superhBundle\\Controller\\DefaultController::indexAction',  '_route' => 'uni_superh_homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
