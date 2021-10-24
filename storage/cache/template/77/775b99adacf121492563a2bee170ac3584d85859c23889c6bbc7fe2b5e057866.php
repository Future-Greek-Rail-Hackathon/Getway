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

/* customer/customer_reward.twig */
class __TwigTemplate_4175a4dccf4e9857610e27f17c911faf2d253a24e979fc6bd0d6542b6c1bc7b2 extends \Twig\Template
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
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_description"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 7
        echo ($context["column_points"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["rewards"] ?? null)) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 13
                echo "      <tr>
        <td class=\"text-left\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "date_added", [], "any", false, false, false, 14);
                echo "</td>
        <td class=\"text-left\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 15);
                echo "</td>
        <td class=\"text-right\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "points", [], "any", false, false, false, 16);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      <tr>
        <td></td>
        <td class=\"text-right\"><b>";
            // line 21
            echo ($context["text_balance"] ?? null);
            echo "</b></td>
        <td class=\"text-right\">";
            // line 22
            echo ($context["balance"] ?? null);
            echo "</td>
      </tr>
      ";
        } else {
            // line 25
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 26
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 29
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 33
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 34
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 34,  114 => 33,  108 => 29,  102 => 26,  99 => 25,  93 => 22,  89 => 21,  85 => 19,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  60 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_reward.twig", "");
    }
}
