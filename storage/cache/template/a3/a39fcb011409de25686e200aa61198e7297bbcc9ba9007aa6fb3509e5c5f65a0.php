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

/* customer/customer_history.twig */
class __TwigTemplate_cc67313ce9ad1d9d6cd2437972c552526221ad1d83b503dbc90b18cc0c71f710 extends \Twig\Template
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
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_comment"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        if (($context["histories"] ?? null)) {
            // line 11
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 12
                echo "      <tr>
        <td class=\"text-left\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 13);
                echo "</td>
        <td class=\"text-left\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 14);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      ";
        } else {
            // line 18
            echo "      <tr>
        <td class=\"text-center\" colspan=\"2\">";
            // line 19
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 22
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 26
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 27
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  95 => 26,  89 => 22,  83 => 19,  80 => 18,  77 => 17,  68 => 14,  64 => 13,  61 => 12,  56 => 11,  54 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_history.twig", "");
    }
}
