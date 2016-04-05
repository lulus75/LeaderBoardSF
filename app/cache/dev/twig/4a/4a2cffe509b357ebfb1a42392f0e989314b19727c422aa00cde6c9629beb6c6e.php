<?php

/* leaderBoardBundle:Default:index.html.twig */
class __TwigTemplate_c28b699614977fb104d0fe9ddda16ee03925e8cdd421a0ce4a85ed6e0afcaf24 extends Twig_Template
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
        $__internal_3f1b027b87550a510293f57f46f26755e0369503e6cc0561e0b69eae60abe3fe = $this->env->getExtension("native_profiler");
        $__internal_3f1b027b87550a510293f57f46f26755e0369503e6cc0561e0b69eae60abe3fe->enter($__internal_3f1b027b87550a510293f57f46f26755e0369503e6cc0561e0b69eae60abe3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "leaderBoardBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Default/assets/css/style.css"), "html", null, true);
        echo "\" />
    <title></title>
</head>

<body>
<a href=\"deathsmiles\">deathsmiles</a>


</body>
</html>";
        
        $__internal_3f1b027b87550a510293f57f46f26755e0369503e6cc0561e0b69eae60abe3fe->leave($__internal_3f1b027b87550a510293f57f46f26755e0369503e6cc0561e0b69eae60abe3fe_prof);

    }

    public function getTemplateName()
    {
        return "leaderBoardBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <link rel="stylesheet" href="{{ asset('Default/assets/css/style.css') }}" />*/
/*     <title></title>*/
/* </head>*/
/* */
/* <body>*/
/* <a href="deathsmiles">deathsmiles</a>*/
/* */
/* */
/* </body>*/
/* </html>*/
