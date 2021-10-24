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

/* report/online.twig */
class __TwigTemplate_683fd0458f081faadfb3d950cc67423cb507d9cd8f8bacc41ade3fd4044ed84f extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-online').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-online\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 21
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-ip\">";
        // line 25
        echo ($context["entry_ip"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 26
        echo ($context["filter_ip"] ?? null);
        echo "\" id=\"input-ip\" placeholder=\"";
        echo ($context["entry_ip"] ?? null);
        echo "\" i class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">";
        // line 29
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 30
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 41
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
        // line 48
        echo ($context["column_ip"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 49
        echo ($context["column_customer"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 50
        echo ($context["column_url"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 51
        echo ($context["column_referer"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 52
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 53
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 58
        if (($context["customers"] ?? null)) {
            // line 59
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 60
                echo "                <tr>
                  <td class=\"text-left\"><a href=\"//whatismyipaddress.com/ip/";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 61);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 61);
                echo "</a></td>
                  <td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer", [], "any", false, false, false, 62);
                echo "</td>
                  <td class=\"text-left\"><a href=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "url", [], "any", false, false, false, 63);
                echo "\" target=\"_blank\" rel=\"noreferrer\">";
                echo twig_join_filter(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "url", [], "any", false, false, false, 63), "", 30), "<br/>
                    ");
                // line 64
                echo "</a></td>
                  <td class=\"text-left\">";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 65)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 65);
                    echo "\" target=\"_blank\">";
                    echo twig_join_filter(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 65), "", 30), "<br/>
                    ");
                    // line 66
                    echo "</a>";
                }
                echo "</td>
                  <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 67);
                echo "</td>
                  <td class=\"text-right\">";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 68)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 68);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>";
                } else {
                    // line 69
                    echo "                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
                    ";
                }
                // line 70
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                ";
        } else {
            // line 74
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 75
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 78
        echo "                  </tbody>
                
              </table>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 83
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 84
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=report/online&user_token=";
        // line 93
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_ip = \$('input[name=\\'filter_ip\\']').val();

\tif (filter_ip) {
\t\turl += '&filter_ip=' + encodeURIComponent(filter_ip);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 114
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 131
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "report/online.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 131,  291 => 114,  267 => 93,  255 => 84,  251 => 83,  244 => 78,  238 => 75,  235 => 74,  232 => 73,  224 => 70,  218 => 69,  210 => 68,  206 => 67,  201 => 66,  194 => 65,  191 => 64,  186 => 63,  182 => 62,  176 => 61,  173 => 60,  168 => 59,  166 => 58,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  128 => 41,  117 => 33,  109 => 30,  105 => 29,  97 => 26,  93 => 25,  86 => 21,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "report/online.twig", "");
    }
}
