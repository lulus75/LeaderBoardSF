<?php

/* base.html.twig */
class __TwigTemplate_95ba19bca007b0f4599f0265a76411b568281eacaeaf1a45e849e243b98b05e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f94e9a0f844cddf8f253d4ed917e39c401ed5f684ea65f8a2adbd1f31b6bbc2a = $this->env->getExtension("native_profiler");
        $__internal_f94e9a0f844cddf8f253d4ed917e39c401ed5f684ea65f8a2adbd1f31b6bbc2a->enter($__internal_f94e9a0f844cddf8f253d4ed917e39c401ed5f684ea65f8a2adbd1f31b6bbc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f94e9a0f844cddf8f253d4ed917e39c401ed5f684ea65f8a2adbd1f31b6bbc2a->leave($__internal_f94e9a0f844cddf8f253d4ed917e39c401ed5f684ea65f8a2adbd1f31b6bbc2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e629740d891a66c02dfba86fad97e19cbc7114e5aeea10ba425547d911c1079 = $this->env->getExtension("native_profiler");
        $__internal_8e629740d891a66c02dfba86fad97e19cbc7114e5aeea10ba425547d911c1079->enter($__internal_8e629740d891a66c02dfba86fad97e19cbc7114e5aeea10ba425547d911c1079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8e629740d891a66c02dfba86fad97e19cbc7114e5aeea10ba425547d911c1079->leave($__internal_8e629740d891a66c02dfba86fad97e19cbc7114e5aeea10ba425547d911c1079_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a207d31dd9eb86b2e50311dd740e3ce7b4101e10e169317e3f642ee16e82a85 = $this->env->getExtension("native_profiler");
        $__internal_6a207d31dd9eb86b2e50311dd740e3ce7b4101e10e169317e3f642ee16e82a85->enter($__internal_6a207d31dd9eb86b2e50311dd740e3ce7b4101e10e169317e3f642ee16e82a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6a207d31dd9eb86b2e50311dd740e3ce7b4101e10e169317e3f642ee16e82a85->leave($__internal_6a207d31dd9eb86b2e50311dd740e3ce7b4101e10e169317e3f642ee16e82a85_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df52912db10f2f7fe79dcc5b8eb656807baaff9e4793d6749a6b3a20ed5327f7 = $this->env->getExtension("native_profiler");
        $__internal_df52912db10f2f7fe79dcc5b8eb656807baaff9e4793d6749a6b3a20ed5327f7->enter($__internal_df52912db10f2f7fe79dcc5b8eb656807baaff9e4793d6749a6b3a20ed5327f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df52912db10f2f7fe79dcc5b8eb656807baaff9e4793d6749a6b3a20ed5327f7->leave($__internal_df52912db10f2f7fe79dcc5b8eb656807baaff9e4793d6749a6b3a20ed5327f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25a8e153de3177a47a6d4c654b77050c1e17f8046b1eedaac985f42283c7cd71 = $this->env->getExtension("native_profiler");
        $__internal_25a8e153de3177a47a6d4c654b77050c1e17f8046b1eedaac985f42283c7cd71->enter($__internal_25a8e153de3177a47a6d4c654b77050c1e17f8046b1eedaac985f42283c7cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25a8e153de3177a47a6d4c654b77050c1e17f8046b1eedaac985f42283c7cd71->leave($__internal_25a8e153de3177a47a6d4c654b77050c1e17f8046b1eedaac985f42283c7cd71_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
