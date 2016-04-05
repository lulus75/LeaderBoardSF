<?php

/* leaderBoardBundle:Default:crimzon-clover.html.twig */
class __TwigTemplate_bbf85dd66d996af63dd0c656a5640fa898930768bb75182ab9add3077eb32064 extends Twig_Template
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
        $__internal_a6b41333b3ebaabc1bac15a9e99649b63bb7fcd6c202f623b1e124a0891fab40 = $this->env->getExtension("native_profiler");
        $__internal_a6b41333b3ebaabc1bac15a9e99649b63bb7fcd6c202f623b1e124a0891fab40->enter($__internal_a6b41333b3ebaabc1bac15a9e99649b63bb7fcd6c202f623b1e124a0891fab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "leaderBoardBundle:Default:crimzon-clover.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/leaderBoard/css/styles.css"), "html", null, true);
        echo "\">
    <title></title>
</head>

<body>
<a href=\"deathsmiles\">deathsmiles</a>
<a href=\"mushihimesama\">mushihimesama</a>
<a href=\"ikaruga\">ikaruga</a>
<ul>
    <li><a href=\"../crimzon_clover/type1\">Type 1</a></li>
    <li><a href=\"../crimzon_clover/type3\">Type 3</a></li>
    <li><a href=\"../crimzon_clover/typeZ\">Type Z</a></li>
</ul>
<iframe width=\"500\" height=\"350\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" frameborder=\"0\"
        allowfullscreen>
</iframe>

";
        // line 22
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")));
        echo "

</body>
</html>";
        
        $__internal_a6b41333b3ebaabc1bac15a9e99649b63bb7fcd6c202f623b1e124a0891fab40->leave($__internal_a6b41333b3ebaabc1bac15a9e99649b63bb7fcd6c202f623b1e124a0891fab40_prof);

    }

    public function getTemplateName()
    {
        return "leaderBoardBundle:Default:crimzon-clover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  44 => 18,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/leaderBoard/css/styles.css') }}">*/
/*     <title></title>*/
/* </head>*/
/* */
/* <body>*/
/* <a href="deathsmiles">deathsmiles</a>*/
/* <a href="mushihimesama">mushihimesama</a>*/
/* <a href="ikaruga">ikaruga</a>*/
/* <ul>*/
/*     <li><a href="../crimzon_clover/type1">Type 1</a></li>*/
/*     <li><a href="../crimzon_clover/type3">Type 3</a></li>*/
/*     <li><a href="../crimzon_clover/typeZ">Type Z</a></li>*/
/* </ul>*/
/* <iframe width="500" height="350" src="{{ type }}" frameborder="0"*/
/*         allowfullscreen>*/
/* </iframe>*/
/* */
/* {{ dump(type) }}*/
/* */
/* </body>*/
/* </html>*/
