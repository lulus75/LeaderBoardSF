<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ff6c6bcaaac6abfd1590361c829fbd6a3ac1268542048b0915f012a3c18bd109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18e65b3916db30f00ee0a59ede6fd604ffd068fae4a20eb4e231103fdf729086 = $this->env->getExtension("native_profiler");
        $__internal_18e65b3916db30f00ee0a59ede6fd604ffd068fae4a20eb4e231103fdf729086->enter($__internal_18e65b3916db30f00ee0a59ede6fd604ffd068fae4a20eb4e231103fdf729086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e65b3916db30f00ee0a59ede6fd604ffd068fae4a20eb4e231103fdf729086->leave($__internal_18e65b3916db30f00ee0a59ede6fd604ffd068fae4a20eb4e231103fdf729086_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_652565038fed706ae1dad11c8e645e9594471e8ac9dc8da47901309573f59f48 = $this->env->getExtension("native_profiler");
        $__internal_652565038fed706ae1dad11c8e645e9594471e8ac9dc8da47901309573f59f48->enter($__internal_652565038fed706ae1dad11c8e645e9594471e8ac9dc8da47901309573f59f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_652565038fed706ae1dad11c8e645e9594471e8ac9dc8da47901309573f59f48->leave($__internal_652565038fed706ae1dad11c8e645e9594471e8ac9dc8da47901309573f59f48_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50a94e901888a529957916a4e17ed97e10f72e4d0f6406aad6a1f94f8387fe48 = $this->env->getExtension("native_profiler");
        $__internal_50a94e901888a529957916a4e17ed97e10f72e4d0f6406aad6a1f94f8387fe48->enter($__internal_50a94e901888a529957916a4e17ed97e10f72e4d0f6406aad6a1f94f8387fe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50a94e901888a529957916a4e17ed97e10f72e4d0f6406aad6a1f94f8387fe48->leave($__internal_50a94e901888a529957916a4e17ed97e10f72e4d0f6406aad6a1f94f8387fe48_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dfa7a00e5710ea499a8fc14879f0db12c1673c962e96bd02ea755d6e652434c = $this->env->getExtension("native_profiler");
        $__internal_9dfa7a00e5710ea499a8fc14879f0db12c1673c962e96bd02ea755d6e652434c->enter($__internal_9dfa7a00e5710ea499a8fc14879f0db12c1673c962e96bd02ea755d6e652434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9dfa7a00e5710ea499a8fc14879f0db12c1673c962e96bd02ea755d6e652434c->leave($__internal_9dfa7a00e5710ea499a8fc14879f0db12c1673c962e96bd02ea755d6e652434c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
