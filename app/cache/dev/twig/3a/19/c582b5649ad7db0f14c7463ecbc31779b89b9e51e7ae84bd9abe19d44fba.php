<?php

/* ::base.html.twig */
class __TwigTemplate_3a19c582b5649ad7db0f14c7463ecbc31779b89b9e51e7ae84bd9abe19d44fba extends Twig_Template
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
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand no-break-out\" title=\"Customers\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("clients_homepage");
        echo "\">AYM CRM</a>  
                </div>
                <button type=\"button\" class=\"btn btn-default btn-back pull-left hidden\" onclick=\"history.back()\">
                    <i class=\"fa fa-lg fa-chevron-left\"></i><span>Back</span>
                </button>
                <!-- menu button to show/ hide the off canvas slider -->
                <button type=\"button\" class=\"btn btn-default btn-menu pull-left offCanvasToggle\" data-toggle=\"offcanvas\">
                    <i class=\"fa fa-lg fa-bars\"></i><span>Menu</span>
                </button>    
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "clients_homepage")) {
            echo " active ";
        }
        echo "\">
                            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("clients_homepage");
        echo "\" data-pjax=\"#main\" data-title=\"Customers\">
                                <i class=\"fa fa-dashboard\"></i>
                                Dashboard
                            </a>          
                        </li>
                        <li>
                            <a href=\"\" data-pjax=\"#main\" data-title=\"Companies\">
                                <i class=\"fa fa-building-o\"></i>
                                Clients
                            </a>          
                        </li>
                        <li>
                            <a href=\"\" data-pjax=\"#main\" data-title=\"Contacts\">
                                <i class=\"fa fa-users\"></i>
                                Contacts
                            </a>          
                        </li>
                        <li>
                            <a href=\"\" data-pjax=\"#main\" data-title=\"Projects\">
                                <i class=\"fa fa-folder\"></i>
                                Projects
                            </a>          
                        </li>
                        <li>
                            <a href=\"\" data-pjax=\"#main\" data-title=\"Card Types\">
                                <i class=\"fa fa-clipboard\"></i>
                                Card Types
                            </a>          
                        </li>
                        <li class=\"";
        // line 67
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "clients_accounts") || "clients_accountsInfo")) {
            echo " active ";
        }
        echo "\">
                            <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getUrl("clients_accounts");
        echo "\" data-pjax=\"#main\" data-title=\"Accounts\">
                                <i class=\"fa fa-lock\"></i>
                                Accounts
                            </a>          
                        </li>
                    </ul>
                </div>          
            </div>
        </div>  

        <!-- slide in menu (mobile only) -->
        <nav id=\"offCanvasMenu\" class=\"navmenu offcanvas offcanvas-left\">
            <ul class=\"nav\">
                <li class=\"active\">
                    <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getUrl("clients_homepage");
        echo "\" data-pjax=\"#main\" data-title=\"Customers\">
                        <i class=\"fa fa-lg fa-dashboard\"></i>
                        Dashboard
                    </a>          
                </li>
                <li>
                    <a href=\"/companies\" data-pjax=\"#main\" data-title=\"Companies\">
                        <i class=\"fa fa-lg fa-building-o\"></i>
                        Clients
                    </a>          
                </li>
                <li>
                    <a href=\"/contacts\" data-pjax=\"#main\" data-title=\"Contacts\">
                        <i class=\"fa fa-lg fa-users\"></i>
                        Contacts
                    </a>          
                </li>
                <li>
                    <a href=\"/notes\" data-pjax=\"#main\" data-title=\"Notes\">
                        <i class=\"fa fa-lg fa-folder\"></i>
                        Projects
                    </a>          
                </li>
                <li>
                    <a href=\"/charts\" data-pjax=\"#main\" data-title=\"Charts\">
                        <i class=\"fa fa-lg fa-clipboard\"></i>
                        Card Types
                    </a>          
                </li>
                <li>
                    <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getUrl("clients_accounts");
        echo "\" data-pjax=\"#main\" data-title=\"Settings\">
                        <i class=\"fa fa-lg fa-lock\"></i>
                        Accounts
                    </a>          
                </li>
            </ul>
        </nav>
        ";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootcards-desktop-lite.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" />


        ";
    }

    // line 119
    public function block_body($context, array $blocks = array())
    {
        // line 120
        echo "        ";
    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        // line 122
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
            <script>window.jQuery || document.write('<script src=\"js/jquery-2.1.3.min.js\">\\x3C/script>')</script>
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootcards.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 125,  224 => 124,  220 => 122,  217 => 121,  213 => 120,  210 => 119,  202 => 10,  198 => 9,  194 => 8,  189 => 7,  186 => 6,  180 => 5,  174 => 127,  171 => 121,  169 => 119,  159 => 112,  126 => 82,  109 => 68,  103 => 67,  71 => 38,  65 => 37,  51 => 26,  35 => 14,  33 => 6,  29 => 5,  23 => 1,);
    }
}
