<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/81f969e')) {
                // _assetic_81f969e
                if ($pathinfo === '/css/81f969e.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '81f969e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_81f969e',);
                }

                // _assetic_81f969e_0
                if ($pathinfo === '/css/81f969e_quadranStyle_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '81f969e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_81f969e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/2db1e5c')) {
                // _assetic_2db1e5c
                if ($pathinfo === '/css/2db1e5c.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2db1e5c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2db1e5c',);
                }

                // _assetic_2db1e5c_0
                if ($pathinfo === '/css/2db1e5c_jquery-ui_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2db1e5c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2db1e5c_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/d4574a7')) {
                // _assetic_d4574a7
                if ($pathinfo === '/js/d4574a7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd4574a7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d4574a7',);
                }

                // _assetic_d4574a7_0
                if ($pathinfo === '/js/d4574a7_angular_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd4574a7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d4574a7_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/a750637')) {
                // _assetic_a750637
                if ($pathinfo === '/js/a750637.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a750637',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a750637',);
                }

                // _assetic_a750637_0
                if ($pathinfo === '/js/a750637_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a750637',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a750637_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/2994d72')) {
                // _assetic_2994d72
                if ($pathinfo === '/js/2994d72.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2994d72',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2994d72',);
                }

                // _assetic_2994d72_0
                if ($pathinfo === '/js/2994d72_jquery-ui_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2994d72',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2994d72_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/584d851')) {
                // _assetic_584d851
                if ($pathinfo === '/js/584d851.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '584d851',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_584d851',);
                }

                // _assetic_584d851_0
                if ($pathinfo === '/js/584d851_app_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '584d851',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_584d851_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/1f81795')) {
                // _assetic_1f81795
                if ($pathinfo === '/js/1f81795.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1f81795',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1f81795',);
                }

                // _assetic_1f81795_0
                if ($pathinfo === '/js/1f81795_app_search_central_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1f81795',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1f81795_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/dff4dbb')) {
                // _assetic_dff4dbb
                if ($pathinfo === '/js/dff4dbb.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dff4dbb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_dff4dbb',);
                }

                // _assetic_dff4dbb_0
                if ($pathinfo === '/js/dff4dbb_front_page_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dff4dbb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_dff4dbb_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/fc7accb')) {
                // _assetic_fc7accb
                if ($pathinfo === '/js/fc7accb.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc7accb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fc7accb',);
                }

                // _assetic_fc7accb_0
                if ($pathinfo === '/js/fc7accb_front_result_equipement_access_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc7accb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fc7accb_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/454a49e')) {
                // _assetic_454a49e
                if ($pathinfo === '/js/454a49e.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '454a49e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_454a49e',);
                }

                // _assetic_454a49e_0
                if ($pathinfo === '/js/454a49e_front_result_doc_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '454a49e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_454a49e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/a')) {
                if (0 === strpos($pathinfo, '/js/af4783f')) {
                    // _assetic_af4783f
                    if ($pathinfo === '/js/af4783f.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af4783f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_af4783f',);
                    }

                    // _assetic_af4783f_0
                    if ($pathinfo === '/js/af4783f_front_result_equipement_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af4783f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_af4783f_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/a5be7e7')) {
                    // _assetic_a5be7e7
                    if ($pathinfo === '/js/a5be7e7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a5be7e7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a5be7e7',);
                    }

                    // _assetic_a5be7e7_0
                    if ($pathinfo === '/js/a5be7e7_front_result_central_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a5be7e7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a5be7e7_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/da82b2d')) {
                // _assetic_da82b2d
                if ($pathinfo === '/js/da82b2d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'da82b2d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_da82b2d',);
                }

                // _assetic_da82b2d_0
                if ($pathinfo === '/js/da82b2d_front_search_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'da82b2d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_da82b2d_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/67d988a')) {
                // _assetic_67d988a
                if ($pathinfo === '/images/67d988a.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '67d988a',  'pos' => NULL,  '_format' => 'jpeg',  '_route' => '_assetic_67d988a',);
                }

                // _assetic_67d988a_0
                if ($pathinfo === '/images/67d988a_btn_gauche_1.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '67d988a',  'pos' => 0,  '_format' => 'jpeg',  '_route' => '_assetic_67d988a_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/cae2646')) {
                // _assetic_cae2646
                if ($pathinfo === '/images/cae2646.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cae2646',  'pos' => NULL,  '_format' => 'jpeg',  '_route' => '_assetic_cae2646',);
                }

                // _assetic_cae2646_0
                if ($pathinfo === '/images/cae2646_btn_modif_1.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cae2646',  'pos' => 0,  '_format' => 'jpeg',  '_route' => '_assetic_cae2646_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/34537ea')) {
                // _assetic_34537ea
                if ($pathinfo === '/images/34537ea.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '34537ea',  'pos' => NULL,  '_format' => 'jpeg',  '_route' => '_assetic_34537ea',);
                }

                // _assetic_34537ea_0
                if ($pathinfo === '/images/34537ea_droite_1.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '34537ea',  'pos' => 0,  '_format' => 'jpeg',  '_route' => '_assetic_34537ea_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/aef7376')) {
                // _assetic_aef7376
                if ($pathinfo === '/images/aef7376.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aef7376',  'pos' => NULL,  '_format' => 'jpeg',  '_route' => '_assetic_aef7376',);
                }

                // _assetic_aef7376_0
                if ($pathinfo === '/images/aef7376_btn_valider_1.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aef7376',  'pos' => 0,  '_format' => 'jpeg',  '_route' => '_assetic_aef7376_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/02f85ee')) {
                // _assetic_02f85ee
                if ($pathinfo === '/images/02f85ee.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '02f85ee',  'pos' => NULL,  '_format' => 'jpeg',  '_route' => '_assetic_02f85ee',);
                }

                // _assetic_02f85ee_0
                if ($pathinfo === '/images/02f85ee_btn_annuler_1.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '02f85ee',  'pos' => 0,  '_format' => 'jpeg',  '_route' => '_assetic_02f85ee_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/a935514')) {
                // _assetic_a935514
                if ($pathinfo === '/images/a935514.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a935514',  'pos' => NULL,  '_format' => 'jpeg',  '_route' => '_assetic_a935514',);
                }

                // _assetic_a935514_0
                if ($pathinfo === '/images/a935514_btn_ajout_1.jpeg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a935514',  'pos' => 0,  '_format' => 'jpeg',  '_route' => '_assetic_a935514_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/3649b80')) {
            // _assetic_3649b80
            if ($pathinfo === '/css/3649b80.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3649b80',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3649b80',);
            }

            // _assetic_3649b80_0
            if ($pathinfo === '/css/3649b80_quadranStyle_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3649b80',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3649b80_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/3eb98b1')) {
            // _assetic_3eb98b1
            if ($pathinfo === '/js/3eb98b1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3eb98b1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3eb98b1',);
            }

            // _assetic_3eb98b1_0
            if ($pathinfo === '/js/3eb98b1_formCentral_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3eb98b1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3eb98b1_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images/516a1e4')) {
            // _assetic_516a1e4
            if ($pathinfo === '/images/516a1e4.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '516a1e4',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_516a1e4',);
            }

            // _assetic_516a1e4_0
            if ($pathinfo === '/images/516a1e4_btn_supr_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '516a1e4',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_516a1e4_0',);
            }

        }

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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/document')) {
            // get_documents_by_id_central
            if (0 === strpos($pathinfo, '/document/getDocuments') && preg_match('#^/document/getDocuments/(?P<id_central>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_documents_by_id_central')), array (  '_controller' => 'SIE\\DocumentBundle\\Controller\\AdminController::getDocumentsAction',));
            }

            if (0 === strpos($pathinfo, '/document/add_document')) {
                // add_document
                if ($pathinfo === '/document/add_document') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_add_document;
                    }

                    return array (  '_controller' => 'SIE\\DocumentBundle\\Controller\\AdminController::add_documentAction',  '_route' => 'add_document',);
                }
                not_add_document:

                // add_document_central
                if ($pathinfo === '/document/add_document_central') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_add_document_central;
                    }

                    return array (  '_controller' => 'SIE\\DocumentBundle\\Controller\\AdminController::add_document_centralAction',  '_route' => 'add_document_central',);
                }
                not_add_document_central:

            }

        }

        if (0 === strpos($pathinfo, '/contrat')) {
            // sie_contrat_homepage
            if (rtrim($pathinfo, '/') === '/contrat') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sie_contrat_homepage');
                }

                return array (  '_controller' => 'SIE\\ContratBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sie_contrat_homepage',);
            }

            if (0 === strpos($pathinfo, '/contrat/get')) {
                if (0 === strpos($pathinfo, '/contrat/getContrat')) {
                    // get_contrat
                    if (preg_match('#^/contrat/getContrat/(?P<id_contrat>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'get_contrat');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contrat')), array (  '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::getEquipementAction',));
                    }

                    // get_contrats
                    if (0 === strpos($pathinfo, '/contrat/getContrats') && preg_match('#^/contrat/getContrats/(?P<id_central>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'get_contrats');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contrats')), array (  '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::getContratByIdCentralAction',));
                    }

                }

                // get_all_contrats
                if ($pathinfo === '/contrat/getAll') {
                    return array (  '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::getAllAction',  '_route' => 'get_all_contrats',);
                }

            }

            // add_contrat
            if ($pathinfo === '/contrat/addContrat') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_contrat;
                }

                return array (  '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::addContratAction',  '_route' => 'add_contrat',);
            }
            not_add_contrat:

            // del_contrat
            if ($pathinfo === '/contrat/delContrat') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_del_contrat;
                }

                return array (  '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::delContratAction',  '_route' => 'del_contrat',);
            }
            not_del_contrat:

            // update_contrat
            if ($pathinfo === '/contrat/updateContrat') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_update_contrat;
                }

                return array (  '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::updateContratAction',  '_route' => 'update_contrat',);
            }
            not_update_contrat:

        }

        if (0 === strpos($pathinfo, '/access')) {
            // sie_access_homepage
            if (rtrim($pathinfo, '/') === '/access') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sie_access_homepage');
                }

                return array (  '_controller' => 'SIE\\AccessBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sie_access_homepage',);
            }

            if (0 === strpos($pathinfo, '/access/getA')) {
                // get_accesss
                if (0 === strpos($pathinfo, '/access/getAccesss') && preg_match('#^/access/getAccesss/(?P<id_equipement>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'get_accesss');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_accesss')), array (  '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::getAccessByIdEquipementAction',));
                }

                // get_all_access
                if ($pathinfo === '/access/getAll') {
                    return array (  '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::getAllAction',  '_route' => 'get_all_access',);
                }

            }

            // add_access
            if ($pathinfo === '/access/addAccess') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_access;
                }

                return array (  '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::addAccessAction',  '_route' => 'add_access',);
            }
            not_add_access:

            // del_access
            if ($pathinfo === '/access/delAccess') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_del_access;
                }

                return array (  '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::delAccessAction',  '_route' => 'del_access',);
            }
            not_del_access:

            // update_access
            if ($pathinfo === '/access/modifAccess') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_update_access;
                }

                return array (  '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::updateAccessAction',  '_route' => 'update_access',);
            }
            not_update_access:

            // get_protocol
            if ($pathinfo === '/access/getProtocols') {
                return array (  '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::getProtocolsAction',  '_route' => 'get_protocol',);
            }

            // test_access
            if (0 === strpos($pathinfo, '/access/testAccess') && preg_match('#^/access/testAccess/(?P<adresse>[^/]++)/(?P<port>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_access')), array (  '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::testAccessAction',));
            }

        }

        // sie_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sie_homepage');
            }

            return array (  '_controller' => 'SIE\\CoreBundle\\Controller\\AcceuilController::indexAction',  '_route' => 'sie_homepage',);
        }

        // sie_direction_homepage
        if ($pathinfo === '/direction/direction') {
            return array (  '_controller' => 'SIE\\DirectionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sie_direction_homepage',);
        }

        if (0 === strpos($pathinfo, '/equipement')) {
            // sie_equipement_homepage
            if (rtrim($pathinfo, '/') === '/equipement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sie_equipement_homepage');
                }

                return array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sie_equipement_homepage',);
            }

            if (0 === strpos($pathinfo, '/equipement/get')) {
                if (0 === strpos($pathinfo, '/equipement/getAll')) {
                    // get_all_cons
                    if ($pathinfo === '/equipement/getAllConstructeur') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_all_cons;
                        }

                        return array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\DefaultController::getConstructeursAction',  '_route' => 'get_all_cons',);
                    }
                    not_get_all_cons:

                    // get_all_type
                    if ($pathinfo === '/equipement/getAllType') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_all_type;
                        }

                        return array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\DefaultController::getTypeAction',  '_route' => 'get_all_type',);
                    }
                    not_get_all_type:

                }

                if (0 === strpos($pathinfo, '/equipement/getEquipement')) {
                    // sie_get_equipements
                    if (0 === strpos($pathinfo, '/equipement/getEquipements') && preg_match('#^/equipement/getEquipements/(?P<id_central>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sie_get_equipements')), array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getEquipementsByIdCentralAction',));
                    }

                    // get_equipement
                    if (preg_match('#^/equipement/getEquipement/(?P<id_equipement>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_equipement')), array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getEquipementAction',));
                    }

                }

                // get_all_equipement
                if ($pathinfo === '/equipement/getAll') {
                    return array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getAllAction',  '_route' => 'get_all_equipement',);
                }

            }

            // add_equipement
            if ($pathinfo === '/equipement/addEquipement') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_equipement;
                }

                return array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::addEquipementAction',  '_route' => 'add_equipement',);
            }
            not_add_equipement:

            // del_equipement
            if ($pathinfo === '/equipement/delEquipement') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_del_equipement;
                }

                return array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getEquipementAction',  '_route' => 'del_equipement',);
            }
            not_del_equipement:

            // update_equipement
            if ($pathinfo === '/equipement/updateEquipement') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_update_equipement;
                }

                return array (  '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::updateEquipementAction',  '_route' => 'update_equipement',);
            }
            not_update_equipement:

            // get_access
            if (0 === strpos($pathinfo, '/equipement/getAccess') && preg_match('#^/equipement/getAccess/(?P<id_equipement>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_access;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'get_access');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_access')), array (  '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::getAccessAction',));
            }
            not_get_access:

        }

        if (0 === strpos($pathinfo, '/central')) {
            // sie_central_homepage
            if (rtrim($pathinfo, '/') === '/central') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sie_central_homepage;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sie_central_homepage');
                }

                return array (  '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::indexAction',  '_route' => 'sie_central_homepage',);
            }
            not_sie_central_homepage:

            if (0 === strpos($pathinfo, '/central/get')) {
                // societe
                if ($pathinfo === '/central/getSociete') {
                    return array (  '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::get_societeAction',  '_route' => 'societe',);
                }

                // central_get_all_json
                if ($pathinfo === '/central/getAll') {
                    return array (  '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::json_getAll_centralAction',  '_route' => 'central_get_all_json',);
                }

            }

            // modif_central
            if ($pathinfo === '/central/modifCentral') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_modif_central;
                }

                return array (  '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::modifCentralAction',  '_route' => 'modif_central',);
            }
            not_modif_central:

            // select_central
            if (0 === strpos($pathinfo, '/central/selectCentral') && preg_match('#^/central/selectCentral/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'select_central');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'select_central')), array (  '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::selectCentralAction',));
            }

            if (0 === strpos($pathinfo, '/central/get')) {
                // get_all_societe
                if ($pathinfo === '/central/getAllSociete') {
                    return array (  '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::get_all_societeAction',  '_route' => 'get_all_societe',);
                }

                // central_get_societe
                if ($pathinfo === '/central/getSociete') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_central_get_societe;
                    }

                    return array (  '_controller' => 'SIECentralBundle:ORM:getSociete',  '_route' => 'central_get_societe',);
                }
                not_central_get_societe:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
