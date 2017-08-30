<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/a')) {
            // setVehicule
            if ('/addvehicule' === $pathinfo) {
                return array (  '_controller' => 'EmotionBundle\\Controller\\DefaultController::InsertVehiculeAction',  '_route' => 'setVehicule',);
            }

            // setLocation
            if (0 === strpos($pathinfo, '/addlocation') && preg_match('#^/addlocation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'setLocation')), array (  '_controller' => 'EmotionBundle\\Controller\\DefaultController::InsertLocationAction',));
            }

            // about_us
            if ('/about_us' === $pathinfo) {
                return array (  '_controller' => 'EmotionBundle\\Controller\\DefaultController::PresentationAction',  '_route' => 'about_us',);
            }

        }

        // updateVehicule
        if (0 === strpos($pathinfo, '/updvehicule') && preg_match('#^/updvehicule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateVehicule')), array (  '_controller' => 'EmotionBundle\\Controller\\DefaultController::UpdateVehiculeAction',));
        }

        // Vehicules
        if ('/cars' === $pathinfo) {
            return array (  '_controller' => 'EmotionBundle\\Controller\\DefaultController::PageVehiculeAction',  '_route' => 'Vehicules',);
        }

        // Scooters
        if ('/scooters' === $pathinfo) {
            return array (  '_controller' => 'EmotionBundle\\Controller\\DefaultController::PageScootersAction',  '_route' => 'Scooters',);
        }

        // filtervehicule
        if (0 === strpos($pathinfo, '/filters') && preg_match('#^/filters/(?P<param>[^/]++)/(?P<param2>[^/]++)/(?P<param3>[^/]++)/(?P<param4>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtervehicule')), array (  '_controller' => 'EmotionBundle\\Controller\\DefaultController::FiltersAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // Compte
            if ('/profile' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::CompteAction',  '_route' => 'Compte',);
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // inscription
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'EmotionBundle\\Controller\\DefaultController::RegisterAction',  '_route' => 'inscription',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
