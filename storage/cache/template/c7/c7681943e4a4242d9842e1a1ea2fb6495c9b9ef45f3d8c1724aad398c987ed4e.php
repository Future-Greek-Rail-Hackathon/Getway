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

/* sale/voucher_form.twig */
class __TwigTemplate_e7809858fffb6af634a860092d98eb03fe512b7f52d722d069966368c0771cd6 extends \Twig\Template
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
        ";
        // line 6
        if (($context["voucher_id"] ?? null)) {
            // line 7
            echo "        <button type=\"button\" id=\"button-send\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_send"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-envelope\"></i></button>
        ";
        }
        // line 9
        echo "        <button type=\"submit\" form=\"form-voucher\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 10
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-voucher\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            ";
        // line 33
        if (($context["voucher_id"] ?? null)) {
            // line 34
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
            ";
        }
        // line 36
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 40
        echo ($context["help_code"] ?? null);
        echo "\">";
        echo ($context["entry_code"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 42
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                  ";
        // line 43
        if (($context["error_code"] ?? null)) {
            // line 44
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
                  ";
        }
        // line 46
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 49
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"from_name\" value=\"";
        // line 51
        echo ($context["from_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
                  ";
        // line 52
        if (($context["error_from_name"] ?? null)) {
            // line 53
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_from_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 55
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 58
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"from_email\" value=\"";
        // line 60
        echo ($context["from_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
                  ";
        // line 61
        if (($context["error_from_email"] ?? null)) {
            // line 62
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_from_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 64
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 67
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"to_name\" value=\"";
        // line 69
        echo ($context["to_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
                  ";
        // line 70
        if (($context["error_to_name"] ?? null)) {
            // line 71
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_to_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 73
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 76
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"to_email\" value=\"";
        // line 78
        echo ($context["to_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
                  ";
        // line 79
        if (($context["error_to_email"] ?? null)) {
            // line 80
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_to_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 82
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 85
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 89
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 89) == ($context["voucher_theme_id"] ?? null))) {
                // line 90
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 90);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 90);
                echo "</option>
                    ";
            } else {
                // line 92
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 92);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 92);
                echo "</option>
                    ";
            }
            // line 94
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 99
        echo ($context["entry_message"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"message\" rows=\"5\" placeholder=\"";
        // line 101
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\">";
        echo ($context["message"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
        // line 105
        echo ($context["entry_amount"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"";
        // line 107
        echo ($context["amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" />
                  ";
        // line 108
        if (($context["error_amount"] ?? null)) {
            // line 109
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_amount"] ?? null);
            echo "</div>
                  ";
        }
        // line 111
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 114
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 117
        if (($context["status"] ?? null)) {
            // line 118
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 119
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 121
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 122
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 124
        echo "                  </select>
                </div>
              </div>
            </div>
            ";
        // line 128
        if (($context["voucher_id"] ?? null)) {
            // line 129
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <div id=\"history\"></div>
            </div>
            ";
        }
        // line 133
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
  ";
        // line 138
        if (($context["voucher_id"] ?? null)) {
            // line 139
            echo "  <script type=\"text/javascript\"><!--
\$('#button-send').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/voucher/send&user_token=";
            // line 142
            echo ($context["user_token"] ?? null);
            echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'voucher_id=";
            // line 145
            echo ($context["voucher_id"] ?? null);
            echo "',
\t\tbeforeSend: function() {
\t\t\t\$('#button-send i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\$('#button-send').prop('disabled', true);
\t\t},\t
\t\tcomplete: function() {
\t\t\t\$('#button-send i').replaceWith('<i class=\"fa fa-envelope\"></i>');
\t\t\t\$('#button-send').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>  ' + json['success'] + '</div>');
\t\t\t}\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
})
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=sale/voucher/history&user_token=";
            // line 178
            echo ($context["user_token"] ?? null);
            echo "&voucher_id=";
            echo ($context["voucher_id"] ?? null);
            echo "');
//--></script>
";
        }
        // line 181
        echo "</div>
";
        // line 182
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "sale/voucher_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 182,  441 => 181,  433 => 178,  397 => 145,  391 => 142,  386 => 139,  384 => 138,  377 => 133,  371 => 129,  369 => 128,  363 => 124,  358 => 122,  353 => 121,  348 => 119,  343 => 118,  341 => 117,  335 => 114,  330 => 111,  324 => 109,  322 => 108,  316 => 107,  311 => 105,  302 => 101,  297 => 99,  291 => 95,  285 => 94,  277 => 92,  269 => 90,  266 => 89,  262 => 88,  256 => 85,  251 => 82,  245 => 80,  243 => 79,  237 => 78,  232 => 76,  227 => 73,  221 => 71,  219 => 70,  213 => 69,  208 => 67,  203 => 64,  197 => 62,  195 => 61,  189 => 60,  184 => 58,  179 => 55,  173 => 53,  171 => 52,  165 => 51,  160 => 49,  155 => 46,  149 => 44,  147 => 43,  141 => 42,  134 => 40,  128 => 36,  122 => 34,  120 => 33,  116 => 32,  111 => 30,  105 => 27,  101 => 25,  93 => 21,  91 => 20,  85 => 16,  74 => 14,  70 => 13,  65 => 11,  59 => 10,  54 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/voucher_form.twig", "");
    }
}
