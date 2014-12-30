<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_4413392cc32eeb9f1589903a1ee7d1f376bf40befaa212e2ab9f24f7c6d7b606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "О нас";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.about"), "html", null, true);
        echo "</h1>
    </header>
    <article>
        <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logs"), "html", null, true);
        echo "</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
