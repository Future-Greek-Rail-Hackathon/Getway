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

/* marketing/coupon_form.twig */
class __TwigTemplate_31465a3e0499258bd4535cee6a8a112939c7552a4964e594cd7078d2a5757e66 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-coupon\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            ";
        // line 29
        if (($context["coupon_id"] ?? null)) {
            // line 30
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
            ";
        }
        // line 32
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 38
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 39
        if (($context["error_name"] ?? null)) {
            // line 40
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 41
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 44
        echo ($context["help_code"] ?? null);
        echo "\">";
        echo ($context["entry_code"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 46
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                  ";
        // line 47
        if (($context["error_code"] ?? null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
                  ";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-type\"><span data-toggle=\"tooltip\" title=\"";
        // line 52
        echo ($context["help_type"] ?? null);
        echo "\">";
        echo ($context["entry_type"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">
                    ";
        // line 55
        if ((($context["type"] ?? null) == "P")) {
            // line 56
            echo "                    <option value=\"P\" selected=\"selected\">";
            echo ($context["text_percent"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 58
            echo "                    <option value=\"P\">";
            echo ($context["text_percent"] ?? null);
            echo "</option>
                    ";
        }
        // line 60
        echo "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 61
            echo "                    <option value=\"F\" selected=\"selected\">";
            echo ($context["text_amount"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 63
            echo "                    <option value=\"F\">";
            echo ($context["text_amount"] ?? null);
            echo "</option>
                    ";
        }
        // line 64
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-discount\">";
        // line 69
        echo ($context["entry_discount"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 71
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 75
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 77
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 81
        echo ($context["help_logged"] ?? null);
        echo "\">";
        echo ($context["entry_logged"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 83
        if (($context["logged"] ?? null)) {
            // line 84
            echo "                    <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\" />
                    ";
            // line 85
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 87
            echo "                    <input type=\"radio\" name=\"logged\" value=\"1\" />
                    ";
            // line 88
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 89
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 90
        if ( !($context["logged"] ?? null)) {
            // line 91
            echo "                    <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\" />
                    ";
            // line 92
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 94
            echo "                    <input type=\"radio\" name=\"logged\" value=\"0\" />
                    ";
            // line 95
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 96
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 100
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 102
        if (($context["shipping"] ?? null)) {
            // line 103
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                    ";
            // line 104
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 106
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" />
                    ";
            // line 107
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 108
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 109
        if ( !($context["shipping"] ?? null)) {
            // line 110
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                    ";
            // line 111
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 113
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" />
                    ";
            // line 114
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 115
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 119
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 121
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 123
            echo "                    <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 123);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 123);
            echo "
                      <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 124);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo " </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 130
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 132
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 134
            echo "                    <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 134);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 134);
            echo "
                      <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 135);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo " </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-start\">";
        // line 141
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 144
        echo ($context["date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-end\">";
        // line 151
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 154
        echo ($context["date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 161
        echo ($context["help_uses_total"] ?? null);
        echo "\">";
        echo ($context["entry_uses_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 163
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 167
        echo ($context["help_uses_customer"] ?? null);
        echo "\">";
        echo ($context["entry_uses_customer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 169
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 173
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 176
        if (($context["status"] ?? null)) {
            // line 177
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 178
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 180
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 181
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 182
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            ";
        // line 187
        if (($context["coupon_id"] ?? null)) {
            // line 188
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 190
            echo ($context["text_coupon"] ?? null);
            echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
            </div>
            ";
        }
        // line 194
        echo " </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 203
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val('');
\t\t
\t\t\$('#coupon-product' + item['value']).remove();
\t\t
\t\t\$('#coupon-product').append('<div id=\"coupon-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});

\$('#coupon-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 232
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');
\t\t
\t\t\$('#coupon-category' + item['value']).remove();
\t\t
\t\t\$('#coupon-category').append('<div id=\"coupon-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}\t
});

\$('#coupon-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script> 
  ";
        // line 257
        if (($context["coupon_id"] ?? null)) {
            echo " 
  <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 265
            echo ($context["user_token"] ?? null);
            echo "&coupon_id=";
            echo ($context["coupon_id"] ?? null);
            echo "');
//--></script> 
  ";
        }
        // line 267
        echo " 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 270
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 274
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketing/coupon_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 274,  636 => 270,  631 => 267,  623 => 265,  612 => 257,  584 => 232,  552 => 203,  541 => 194,  533 => 190,  529 => 188,  527 => 187,  520 => 182,  515 => 181,  510 => 180,  505 => 178,  500 => 177,  498 => 176,  492 => 173,  483 => 169,  476 => 167,  467 => 163,  460 => 161,  448 => 154,  442 => 151,  430 => 144,  424 => 141,  418 => 137,  409 => 135,  402 => 134,  398 => 133,  394 => 132,  387 => 130,  381 => 126,  372 => 124,  365 => 123,  361 => 122,  357 => 121,  350 => 119,  344 => 115,  339 => 114,  336 => 113,  331 => 111,  328 => 110,  326 => 109,  323 => 108,  318 => 107,  315 => 106,  310 => 104,  307 => 103,  305 => 102,  300 => 100,  294 => 96,  289 => 95,  286 => 94,  281 => 92,  278 => 91,  276 => 90,  273 => 89,  268 => 88,  265 => 87,  260 => 85,  257 => 84,  255 => 83,  248 => 81,  239 => 77,  232 => 75,  223 => 71,  218 => 69,  211 => 64,  205 => 63,  199 => 61,  196 => 60,  190 => 58,  184 => 56,  182 => 55,  174 => 52,  169 => 49,  163 => 48,  161 => 47,  155 => 46,  148 => 44,  143 => 41,  137 => 40,  135 => 39,  129 => 38,  124 => 36,  118 => 32,  112 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_form.twig", "");
    }
}
