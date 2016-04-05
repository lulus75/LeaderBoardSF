<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4b83d11e9d9f399ddd264f80248cbecaeefedf32ff7b28941e288e86d2426c79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d734cfbf08788523bd2fc78cbbbff50a849ddd2b9c460cd6a3777856a65d68f = $this->env->getExtension("native_profiler");
        $__internal_1d734cfbf08788523bd2fc78cbbbff50a849ddd2b9c460cd6a3777856a65d68f->enter($__internal_1d734cfbf08788523bd2fc78cbbbff50a849ddd2b9c460cd6a3777856a65d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d734cfbf08788523bd2fc78cbbbff50a849ddd2b9c460cd6a3777856a65d68f->leave($__internal_1d734cfbf08788523bd2fc78cbbbff50a849ddd2b9c460cd6a3777856a65d68f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6680050eb1a6ef236ba41bb9ac8887094b13cf1ed959c22b0a63268780660c0d = $this->env->getExtension("native_profiler");
        $__internal_6680050eb1a6ef236ba41bb9ac8887094b13cf1ed959c22b0a63268780660c0d->enter($__internal_6680050eb1a6ef236ba41bb9ac8887094b13cf1ed959c22b0a63268780660c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6680050eb1a6ef236ba41bb9ac8887094b13cf1ed959c22b0a63268780660c0d->leave($__internal_6680050eb1a6ef236ba41bb9ac8887094b13cf1ed959c22b0a63268780660c0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a51c9f22003e7d0c88d01c3b4ecf692dadf73dce52857b98ebc200412abd0cb = $this->env->getExtension("native_profiler");
        $__internal_7a51c9f22003e7d0c88d01c3b4ecf692dadf73dce52857b98ebc200412abd0cb->enter($__internal_7a51c9f22003e7d0c88d01c3b4ecf692dadf73dce52857b98ebc200412abd0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a51c9f22003e7d0c88d01c3b4ecf692dadf73dce52857b98ebc200412abd0cb->leave($__internal_7a51c9f22003e7d0c88d01c3b4ecf692dadf73dce52857b98ebc200412abd0cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_728f9a7f7ded33b785561915f708d6a8509d77119681695341e4d2bbdb25795a = $this->env->getExtension("native_profiler");
        $__internal_728f9a7f7ded33b785561915f708d6a8509d77119681695341e4d2bbdb25795a->enter($__internal_728f9a7f7ded33b785561915f708d6a8509d77119681695341e4d2bbdb25795a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_728f9a7f7ded33b785561915f708d6a8509d77119681695341e4d2bbdb25795a->leave($__internal_728f9a7f7ded33b785561915f708d6a8509d77119681695341e4d2bbdb25795a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
