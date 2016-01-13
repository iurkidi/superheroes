<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
