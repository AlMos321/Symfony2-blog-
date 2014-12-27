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

        if (0 === strpos($pathinfo, '/blog')) {
            // BloggerBlogBundle_homepage
            if (rtrim($pathinfo, '/') === '/blog') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BloggerBlogBundle_homepage;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BloggerBlogBundle_homepage');
                }

                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => 'BloggerBlogBundle_homepage',);
            }
            not_BloggerBlogBundle_homepage:

            // BloggerBlogBundle_about
            if ($pathinfo === '/blog/about') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BloggerBlogBundle_about;
                }

                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::aboutAction',  '_route' => 'BloggerBlogBundle_about',);
            }
            not_BloggerBlogBundle_about:

            // BloggerBlogBundle_contact
            if ($pathinfo === '/blog/contact') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_BloggerBlogBundle_contact;
                }

                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactAction',  '_route' => 'BloggerBlogBundle_contact',);
            }
            not_BloggerBlogBundle_contact:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
