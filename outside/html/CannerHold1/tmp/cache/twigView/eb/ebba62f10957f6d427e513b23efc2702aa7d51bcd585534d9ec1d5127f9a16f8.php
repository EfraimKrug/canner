<?php

/* /var/www/html/Canner/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig */
class __TwigTemplate_c5a6459bcc7f0e2bb112d8d3f5c48c812d6afc1830e36eae42911f097136981c extends Twig_Template
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
        $__internal_efac06eb09d92b1bd20c726405bd8dca2bdb68971dad870477001c4a043ae8ca = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_efac06eb09d92b1bd20c726405bd8dca2bdb68971dad870477001c4a043ae8ca->enter($__internal_efac06eb09d92b1bd20c726405bd8dca2bdb68971dad870477001c4a043ae8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/var/www/html/Canner/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig"));

        // line 16
        echo $this->getAttribute(($context["_view"] ?? null), "fetch", array(0 => "content"), "method");
        
        $__internal_efac06eb09d92b1bd20c726405bd8dca2bdb68971dad870477001c4a043ae8ca->leave($__internal_efac06eb09d92b1bd20c726405bd8dca2bdb68971dad870477001c4a043ae8ca_prof);

    }

    public function getTemplateName()
    {
        return "/var/www/html/Canner/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{{ _view.fetch('content')|raw }}", "/var/www/html/Canner/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig", "");
    }
}
