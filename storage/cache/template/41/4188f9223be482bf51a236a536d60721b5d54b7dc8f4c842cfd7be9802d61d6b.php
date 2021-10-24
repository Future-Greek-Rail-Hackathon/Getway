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

/* sale/voucher_history.twig */
class __TwigTemplate_e3238981bf69b2b5849341a8cbc4c40fe72a77ce8a9b332c0a5bccd6596ecafe extends \Twig\Template
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
        <td class=\"text-right\">";
        // line 5
        echo ($context["column_order_id"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_customer"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 7
        echo ($context["column_amount"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if (($context["histories"] ?? null)) {
            // line 13
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                echo "      <tr>
        <td class=\"text-right\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["history"], "order_id", [], "any", false, false, false, 15);
                echo "</td>
        <td class=\"text-left\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["history"], "customer", [], "any", false, false, false, 16);
                echo "</td>
        <td class=\"text-right\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["history"], "amount", [], "any", false, false, false, 17);
                echo "</td>
        <td class=\"text-left\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 18);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      ";
        } else {
            // line 22
            echo "      <tr>
        <td class=\"text-center\" colspan=\"4\">";
            // line 23
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 26
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 30
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 31
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sale/voucher_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  111 => 30,  105 => 26,  99 => 23,  96 => 22,  93 => 21,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  69 => 14,  64 => 13,  62 => 12,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/voucher_history.twig", "");
    }
}
