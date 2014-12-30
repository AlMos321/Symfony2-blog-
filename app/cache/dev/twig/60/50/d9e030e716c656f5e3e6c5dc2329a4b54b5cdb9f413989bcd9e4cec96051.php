<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_6050d9e030e716c656f5e3e6c5dc2329a4b54b5cdb9f413989bcd9e4cec96051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_navigation($context, array $blocks = array())
    {
        // line 10
        echo "     <nav>
         <ul class=\"navigation\">
             <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.blog_homepage"), "html", null, true);
        echo " </a></li>
             <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.about"), "html", null, true);
        echo "</a></li>
             <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.contact"), "html", null, true);
        echo "</a></li>
         </ul>
     </nav>
 ";
    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        // line 20
        echo "    Sidebar content
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  81 => 19,  71 => 14,  65 => 13,  59 => 12,  55 => 10,  52 => 9,  46 => 6,  41 => 5,  38 => 4,  11 => 2,);
    }
}
