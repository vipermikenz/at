<?php

/* /container/application/public/ateed/vendor/cakephp/bake/src/Template/Bake/Plugin/.gitignore.twig */
class __TwigTemplate_327b9808938266dadecceefc58fc7c0fcac887c771d562d6f9b8806322209834 extends Twig_Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/container/application/public/ateed/vendor/cakephp/bake/src/Template/Bake/Plugin/.gitignore.twig"));

        // line 1
        echo "/composer.lock
/phpunit.xml
/vendor
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "/container/application/public/ateed/vendor/cakephp/bake/src/Template/Bake/Plugin/.gitignore.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/composer.lock
/phpunit.xml
/vendor
", "/container/application/public/ateed/vendor/cakephp/bake/src/Template/Bake/Plugin/.gitignore.twig", "/container/application/public/ateed/vendor/cakephp/bake/src/Template/Bake/Plugin/.gitignore.twig");
    }
}
