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

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/paye')) {
                // paye_homepage
                if (preg_match('#^/paye/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paye_homepage')), array (  '_controller' => 'FrxIntranet\\PayeBundle\\Controller\\DefaultController::indexAction',));
                }

                // paye_visualisation
                if (0 === strpos($pathinfo, '/paye/visualisation') && preg_match('#^/paye/visualisation/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paye_visualisation')), array (  '_controller' => 'FrxIntranet\\PayeBundle\\Controller\\DefaultController::indexAction',));
                }

                // paye_test
                if (0 === strpos($pathinfo, '/paye/test') && preg_match('#^/paye/test/(?P<util>[^/]++)/(?P<datedebut>[^/]++)/(?P<datefin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paye_test')), array (  '_controller' => 'FrxIntranet\\PayeBundle\\Controller\\DefaultController::recupInformationAction',));
                }

            }

            if (0 === strpos($pathinfo, '/prime')) {
                // prime_homepage
                if (0 === strpos($pathinfo, '/prime/hello') && preg_match('#^/prime/hello/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prime_homepage')), array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::indexAction',));
                }

                // prime_new
                if ($pathinfo === '/prime/new') {
                    return array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::creationAction',  '_route' => 'prime_new',);
                }

                // prime_affectation
                if (0 === strpos($pathinfo, '/prime/affectation') && preg_match('#^/prime/affectation/(?P<myprime>[^/]++)/(?P<myutil>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prime_affectation')), array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::affectationAction',));
                }

                // prime_visualisation
                if ($pathinfo === '/prime/list') {
                    return array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::visualisationAction',  '_route' => 'prime_visualisation',);
                }

                // prime_suppr
                if (preg_match('#^/prime/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prime_suppr')), array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::supprAction',));
                }

                // prime_edit
                if (preg_match('#^/prime/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prime_edit')), array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::editAction',));
                }

                // prime_recherche
                if ($pathinfo === '/prime/recherche') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_prime_recherche;
                    }

                    return array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::visualisationAction',  '_route' => 'prime_recherche',);
                }
                not_prime_recherche:

                // prime_insert
                if ($pathinfo === '/prime/insert') {
                    return array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::insertAction',  '_route' => 'prime_insert',);
                }

                // prime_valid_modif
                if (preg_match('#^/prime/(?P<id>[^/]++)/validation$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prime_valid_modif')), array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::validationAction',));
                }

                // prime_encours
                if ($pathinfo === '/prime/encours') {
                    return array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::encoursAction',  '_route' => 'prime_encours',);
                }

                // prime_test
                if (0 === strpos($pathinfo, '/prime/test') && preg_match('#^/prime/test/(?P<util>[^/]++)/(?P<datedebut>[^/]++)/(?P<datefin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prime_test')), array (  '_controller' => 'FrxIntranet\\PrimeBundle\\Controller\\DefaultController::recupPrimeAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/comptabilite')) {
            // comptabilite_homepage
            if (0 === strpos($pathinfo, '/comptabilite/hello') && preg_match('#^/comptabilite/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptabilite_homepage')), array (  '_controller' => 'FrxIntranet\\ComptabiliteBundle\\Controller\\DefaultController::indexAction',));
            }

            // comptabilite_exercice
            if (0 === strpos($pathinfo, '/comptabilite/exercice') && preg_match('#^/comptabilite/exercice/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptabilite_exercice')), array (  '_controller' => 'FrxIntranet\\ComptabiliteBundle\\Controller\\ExerciceController::genererAction',));
            }

            if (0 === strpos($pathinfo, '/comptabilite/frais')) {
                // comptabilite_frais
                if ($pathinfo === '/comptabilite/frais') {
                    return array (  '_controller' => 'FrxIntranet\\ComptabiliteBundle\\Controller\\ExerciceController::listeFraisAction',  '_route' => 'comptabilite_frais',);
                }

                // frais_edit
                if ($pathinfo === '/comptabilite/frais/edit') {
                    return array (  '_controller' => 'FrxIntranet\\ComptabiliteBundle\\Controller\\ExerciceController::editFraisAction',  '_route' => 'frais_edit',);
                }

                // frais_suppr
                if (preg_match('#^/comptabilite/frais/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'frais_suppr')), array (  '_controller' => 'FrxIntranet\\ComptabiliteBundle\\Controller\\ExerciceController::supprFraisAction',));
                }

                // frais_modif
                if (preg_match('#^/comptabilite/frais/(?P<id>[^/]++)/modif$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'frais_modif')), array (  '_controller' => 'FrxIntranet\\ComptabiliteBundle\\Controller\\ExerciceController::modifFraisAction',));
                }

                // frais_new
                if ($pathinfo === '/comptabilite/frais/new') {
                    return array (  '_controller' => 'FrxIntranet\\ComptabiliteBundle\\Controller\\ExerciceController::newFraisAction',  '_route' => 'frais_new',);
                }

                // frais_valid_modif
                if (preg_match('#^/comptabilite/frais/(?P<id>[^/]++)/validation$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'frais_valid_modif')), array (  '_controller' => 'FrxIntranet\\ComptabiliteBundle\\Controller\\ExerciceController::validModifFraisAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // frxintranet_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frxintranet_homepage')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/client')) {
            // client
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client');
                }

                return array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
            }

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\ClientController::showAction',));
            }

            // client_new
            if ($pathinfo === '/client/new') {
                return array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }

            // client_create
            if ($pathinfo === '/client/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_create;
                }

                return array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
            }
            not_client_create:

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\ClientController::editAction',));
            }

            // client_update
            if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_client_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\ClientController::updateAction',));
            }
            not_client_update:

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

        }

        if (0 === strpos($pathinfo, '/depot')) {
            // depot
            if (rtrim($pathinfo, '/') === '/depot') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'depot');
                }

                return array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DepotController::indexAction',  '_route' => 'depot',);
            }

            // depot_show
            if (preg_match('#^/depot/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_show')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DepotController::showAction',));
            }

            // depot_new
            if ($pathinfo === '/depot/new') {
                return array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DepotController::newAction',  '_route' => 'depot_new',);
            }

            // depot_create
            if ($pathinfo === '/depot/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_depot_create;
                }

                return array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DepotController::createAction',  '_route' => 'depot_create',);
            }
            not_depot_create:

            // depot_edit
            if (preg_match('#^/depot/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_edit')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DepotController::editAction',));
            }

            // depot_update
            if (preg_match('#^/depot/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_depot_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_update')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DepotController::updateAction',));
            }
            not_depot_update:

            // depot_delete
            if (preg_match('#^/depot/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_depot_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_delete')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DepotController::deleteAction',));
            }
            not_depot_delete:

        }

        // frxintrant_test
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test/(?P<testname>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frxintrant_test')), array (  '_controller' => 'FrxIntranet\\FrxintranetBundle\\Controller\\DefaultController::testAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
