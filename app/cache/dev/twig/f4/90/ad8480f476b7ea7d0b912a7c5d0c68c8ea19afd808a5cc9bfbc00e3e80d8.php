<?php

/* clientsBundle:Accounts:accounts.html.twig */
class __TwigTemplate_f490ad8480f476b7ea7d0b912a7c5d0c68c8ea19afd808a5cc9bfbc00e3e80d8 extends Twig_Template
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
        <div class=\"row\">
            <div class=\"col-sm-12 bootcards-list\" id=\"list\" data-title=\"Companies\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"search-form\">
                            <div class=\"row\">
                                <div class=\"col-xs-9\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Zoek Accounts...\">
                                        <i class=\"fa fa-search\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-3\">
                                    <a href=\"#\" class=\"btn btn-default btn-primary\" data-toggle=\"modal\" data-target=\"#basicModal\">
                                        <i class=\"fa fa-plus\"></i>
                                        <span>Add</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"list-group\">
                    \t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "\t                       \t";
            // line 29
            echo "                            <a class=\"list-group-item pjax\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("clients_accountsInfo", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">

\t                            <div class=\"row\">
\t                                <div class=\"col-sm-12\">
\t                                \t<h4>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</h4>
\t                                </div>
\t                            </div>
\t                        </a>
\t                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </div>
                    <div class=\"panel-footer\">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "clientsBundle:Accounts:accounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  78 => 33,  70 => 29,  68 => 28,  64 => 27,  39 => 4,  36 => 3,  11 => 1,);
    }
}
