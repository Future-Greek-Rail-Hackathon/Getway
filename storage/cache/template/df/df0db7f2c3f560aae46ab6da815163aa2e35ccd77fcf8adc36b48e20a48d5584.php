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

/* localisation/geo_zone_form.twig */
class __TwigTemplate_f35d5a43044999c1521be7f2198d9eac763b25f8bbd4e23039922d55c539493b extends \Twig\Template
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
        <button type=\"submit\" form=\"form-geo-zone\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-geo-zone\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 28
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 30
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 31
        if (($context["error_name"] ?? null)) {
            // line 32
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 33
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 36
        echo ($context["entry_description"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"description\" value=\"";
        // line 38
        echo ($context["description"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\" />
              ";
        // line 39
        if (($context["error_description"] ?? null)) {
            // line 40
            echo "              <div class=\"text-danger\">";
            echo ($context["error_description"] ?? null);
            echo "</div>
              ";
        }
        // line 41
        echo " </div>
          </div>
          <fieldset>
            <legend>";
        // line 44
        echo ($context["text_geo_zone"] ?? null);
        echo "</legend>
            <table id=\"zone-to-geo-zone\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 48
        echo ($context["entry_country"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 49
        echo ($context["entry_zone"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 55
        $context["zone_to_geo_zone_row"] = 0;
        // line 56
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zone_to_geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_to_geo_zone"]) {
            // line 57
            echo "              <tr id=\"zone-to-geo-zone-row";
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "\">
                <td class=\"text-left\"><select name=\"zone_to_geo_zone[";
            // line 58
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "][country_id]\" class=\"form-control\" data-index=\"";
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "\" data-zone-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["zone_to_geo_zone"], "zone_id", [], "any", false, false, false, 58);
            echo "\" disabled=\"disabled\">                    
                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 60
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 60) == twig_get_attribute($this->env, $this->source, $context["zone_to_geo_zone"], "country_id", [], "any", false, false, false, 60))) {
                    echo "                    
                    <option value=\"";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 61);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 61);
                    echo "</option>                    
                    ";
                } else {
                    // line 62
                    echo "                    
                    <option value=\"";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 63);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 63);
                    echo "</option>                    
                    ";
                }
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                  
                  </select></td>
                <td class=\"text-left\"><select name=\"zone_to_geo_zone[";
            // line 67
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "][zone_id]\" class=\"form-control\" disabled=\"disabled\">
                  </select></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#zone-to-geo-zone-row";
            // line 69
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 71
            $context["zone_to_geo_zone_row"] = (($context["zone_to_geo_zone_row"] ?? null) + 1);
            // line 72
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_to_geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" id=\"button-geo-zone\" data-toggle=\"tooltip\" title=\"";
        // line 78
        echo ($context["button_geo_zone_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
\t      
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var zone_to_geo_zone_row = ";
        // line 89
        echo ($context["zone_to_geo_zone_row"] ?? null);
        echo ";

\$('#button-geo-zone').on('click', function() {
\thtml  = '<tr id=\"zone-to-geo-zone-row' + zone_to_geo_zone_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\" class=\"form-control\" data-index=\"' + zone_to_geo_zone_row + '\">';
\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 95
            echo "\thtml += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 95);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 95), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "   
\thtml += '</select></td>';
\thtml += '  <td class=\"text-left\"><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][zone_id]\" class=\"form-control\"><option value=\"0\">";
        // line 98
        echo ($context["text_all_zones"] ?? null);
        echo "</option></select></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#zone-to-geo-zone-row' + zone_to_geo_zone_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 99
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#zone-to-geo-zone tbody').append(html);
\t
\t\$('zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]').trigger();
\t\t\t
\tzone_to_geo_zone_row++;
});

\$('#zone-to-geo-zone').on('change', 'select[name\$=\\'[country_id]\\']', function() {
\tvar element = this;
\t
\tif (element.value) { 
\t\t\$.ajax({
\t\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 114
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + element.value,
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).prop('disabled', true);
\t\t\t\t\$('button[form=\\'form-geo-zone\\']').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t\$('button[form=\\'form-geo-zone\\']').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\thtml = '<option value=\"0\">";
        // line 125
        echo ($context["text_all_zones"] ?? null);
        echo "</option>';
\t\t\t\t
\t\t\t\tif (json['zone'] && json['zone'] != '') {\t
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t
\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}
\t
\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t}
\t
\t\t\t\t\$('select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-index') + '][zone_id]\\']').html(html);
\t\t\t\t
\t\t\t\t\$('select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-index') + '][zone_id]\\']').prop('disabled', false);
\t\t\t\t
\t\t\t\t\$('select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});

\$('select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
//--></script></div>
";
        // line 154
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "localisation/geo_zone_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 154,  333 => 125,  319 => 114,  301 => 99,  297 => 98,  293 => 96,  282 => 95,  278 => 94,  270 => 89,  256 => 78,  249 => 73,  243 => 72,  241 => 71,  234 => 69,  229 => 67,  220 => 65,  213 => 63,  210 => 62,  203 => 61,  198 => 60,  194 => 59,  186 => 58,  181 => 57,  176 => 56,  174 => 55,  165 => 49,  161 => 48,  154 => 44,  149 => 41,  143 => 40,  141 => 39,  135 => 38,  130 => 36,  125 => 33,  119 => 32,  117 => 31,  111 => 30,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/geo_zone_form.twig", "");
    }
}
