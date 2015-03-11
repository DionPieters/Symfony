<?php

/* clientsBundle:Accounts:accountDetail.html.twig */
class __TwigTemplate_90dcaf89913c819850e331beb4bf42a57a9b719d09bb943b8e1e51e7267e5c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container bootcards-container\" id=\"main\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-5 bootcards-cards hidden-xs\" id=\"listDetails\">
\t\t\t\t<!--Account details-->
\t\t\t\t<div id=\"accountCard\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading clearfix\">
\t\t\t\t\t\t\t<h3 class=\"panel-title pull-left\">Account Details</h3>
\t\t\t\t\t\t\t<div class=\"btn-group pull-right visible-xs\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\" data-toggle=\"modal\" data-target=\"#editModal\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t<span>Edit</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary pull-right hidden-xs\" href=\"\" data-toggle=\"modal\" data-target=\"#editModal\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t<span>Edit</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">Email</h4>
\t\t\t\t\t\t\t\t\t<label>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "email", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">Username</h4>
\t\t\t\t\t\t\t\t\t<label>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "username", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">Password</h4>
\t\t\t\t\t\t\t\t\t<label>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "password", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">Permission Name</h4>
\t\t\t\t\t\t\t\t\t<label>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "permission", array()), "name", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "clientsBundle:Accounts:accountDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  90 => 39,  83 => 35,  76 => 31,  69 => 27,  65 => 25,  61 => 24,  39 => 4,  36 => 3,  11 => 1,);
    }
}
