<?php

/* leaderBoardBundle:Default:ikaruga.html.twig */
class __TwigTemplate_ea759edec050efd60b59146ec90aee386d3f7eda5afe98f9af233b8fd38bdd35 extends Twig_Template
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
        $__internal_2a575f60a3fd3107cfaa4ce775d3a3486b380aacb81a773b1cf57409c2034d09 = $this->env->getExtension("native_profiler");
        $__internal_2a575f60a3fd3107cfaa4ce775d3a3486b380aacb81a773b1cf57409c2034d09->enter($__internal_2a575f60a3fd3107cfaa4ce775d3a3486b380aacb81a773b1cf57409c2034d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "leaderBoardBundle:Default:ikaruga.html.twig"));

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
<a href=\"crimzon_clover\">crimzon_clover</a><br><br>
<form>
    <h4>Change your color them !</h4>
    <input type=\"radio\" name=\"color\" value=\"white\">White
    <input type=\"radio\" name=\"color\" value=\"black\">Black
    <input type=\"submit\" value=\"Change Now !\">
</form>
<style>
    body {
        background: ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo ";
        color: ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["fontColor"]) ? $context["fontColor"] : $this->getContext($context, "fontColor")), "html", null, true);
        echo ";
    }
</style><br><br>
<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/XUDd2ZdRlOE\" frameborder=\"0\"
        allowfullscreen>

</iframe>


<table>
    <tr>
        <th>
            Chain
        </th>
        <th>
            Points
        </th>
    </tr>
    <tr>
        <td>
            1st Chain
        </td>

        <td>
            100 points
        </td>
    </tr>
    <tr>
        <td>
            2nd Chain
        </td>
        <td>
            200 points
        </td>
    </tr>
    <tr>
        <td>
            3rd Chain
        </td>
        <td>
            400 points
        </td>
    </tr>
    <tr>
        <td>
            4th Chain
        </td>
        <td>
            800 points
        </td>
    </tr>
    <tr>
        <td>
            5th Chain
        </td>
        <td>
            1600 points
        </td>
    </tr>
    <tr>
        <td>
            6th Chain
        </td>
        <td>
            3200 points
        </td>
    </tr>
    <tr>
        <td>
            7th Chain
        </td>
        <td>
            6400 points
        </td>
    </tr>
    <tr>
        <td>
            8th Chain
        </td>
        <td>
            12800 points
        </td>
    </tr>
    <tr>
        <td>
            Max Chain
        </td>
        <td>
            25600 points
        </td>
    </tr>
</table>
</body>
</html>";
        
        $__internal_2a575f60a3fd3107cfaa4ce775d3a3486b380aacb81a773b1cf57409c2034d09->leave($__internal_2a575f60a3fd3107cfaa4ce775d3a3486b380aacb81a773b1cf57409c2034d09_prof);

    }

    public function getTemplateName()
    {
        return "leaderBoardBundle:Default:ikaruga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  49 => 23,  28 => 5,  22 => 1,);
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
/* */
/* */
/* <a href="deathsmiles">deathsmiles</a>*/
/* <a href="mushihimesama">mushihimesama</a>*/
/* <a href="crimzon_clover">crimzon_clover</a><br><br>*/
/* <form>*/
/*     <h4>Change your color them !</h4>*/
/*     <input type="radio" name="color" value="white">White*/
/*     <input type="radio" name="color" value="black">Black*/
/*     <input type="submit" value="Change Now !">*/
/* </form>*/
/* <style>*/
/*     body {*/
/*         background: {{ color }};*/
/*         color: {{ fontColor }};*/
/*     }*/
/* </style><br><br>*/
/* <iframe width="420" height="315" src="https://www.youtube.com/embed/XUDd2ZdRlOE" frameborder="0"*/
/*         allowfullscreen>*/
/* */
/* </iframe>*/
/* */
/* */
/* <table>*/
/*     <tr>*/
/*         <th>*/
/*             Chain*/
/*         </th>*/
/*         <th>*/
/*             Points*/
/*         </th>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             1st Chain*/
/*         </td>*/
/* */
/*         <td>*/
/*             100 points*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             2nd Chain*/
/*         </td>*/
/*         <td>*/
/*             200 points*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             3rd Chain*/
/*         </td>*/
/*         <td>*/
/*             400 points*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             4th Chain*/
/*         </td>*/
/*         <td>*/
/*             800 points*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             5th Chain*/
/*         </td>*/
/*         <td>*/
/*             1600 points*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             6th Chain*/
/*         </td>*/
/*         <td>*/
/*             3200 points*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             7th Chain*/
/*         </td>*/
/*         <td>*/
/*             6400 points*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             8th Chain*/
/*         </td>*/
/*         <td>*/
/*             12800 points*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             Max Chain*/
/*         </td>*/
/*         <td>*/
/*             25600 points*/
/*         </td>*/
/*     </tr>*/
/* </table>*/
/* </body>*/
/* </html>*/
