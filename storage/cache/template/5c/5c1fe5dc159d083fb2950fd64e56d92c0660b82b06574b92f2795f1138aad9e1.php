<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* customer/customer_ip.twig */
class __TwigTemplate_d463be03a79aaf616737ec82e3ff15bd7f5f436c08fef32a5f9ac4b5864a6e8b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo ($context["column_ip"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 6
        echo ($context["column_total"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["ips"] ?? null)) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ips"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
                // line 13
                echo "      <tr>
        <td class=\"text-left\"><a href=\"//whatismyipaddress.com/ip/";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "ip", [], "any", false, false, false, 14);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "ip", [], "any", false, false, false, 14);
                echo "</a></td>
        <td class=\"text-right\"><a href=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "filter_ip", [], "any", false, false, false, 15);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "total", [], "any", false, false, false, 15);
                echo "</a></td>
        <td class=\"text-left\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "date_added", [], "any", false, false, false, 16);
                echo "</td>      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "      ";
        } else {
            // line 19
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 20
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 23
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 27
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 28
        echo ($context["results"] ?? null);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "customer/customer_ip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  106 => 27,  100 => 23,  94 => 20,  91 => 19,  88 => 18,  80 => 16,  74 => 15,  68 => 14,  65 => 13,  60 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_ip.twig", "");
    }
}
