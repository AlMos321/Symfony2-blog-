<?php

/* BloggerBlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_421592987a9d792ce1305e4c3fabe6334549d42ca94fa63f19763b5ac20ddb82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "Контактный запрос от ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "name", array());
        echo " в ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Ответить на: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "email", array());
        echo "
Тема: ";
        // line 5
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "subject", array());
        echo "
Сообщение:
";
        // line 7
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "body", array());
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  27 => 4,  19 => 2,);
    }
}
