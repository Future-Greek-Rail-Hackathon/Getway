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

/* customer/customer_form.twig */
class __TwigTemplate_4f8aac24193b882ebaa67841119977812158fecab7a6a8870dd46134c6b9837f extends \Twig\Template
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
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-affiliate\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_affiliate"] ?? null);
        echo "</a></li>
            ";
        // line 30
        if (($context["customer_id"] ?? null)) {
            // line 31
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
            // line 32
            echo ($context["tab_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            // line 33
            echo ($context["tab_reward"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
            // line 34
            echo ($context["tab_ip"] ?? null);
            echo "</a></li>
            ";
        }
        // line 36
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                    <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                    ";
        // line 43
        $context["address_row"] = 1;
        // line 44
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 45
            echo "                    <li><a href=\"#tab-address";
            echo ($context["address_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address a:first').tab('show'); \$('#address a[href=\\'#tab-address";
            echo ($context["address_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-address";
            echo ($context["address_row"] ?? null);
            echo "').remove();\"></i> ";
            echo ($context["tab_address"] ?? null);
            echo " ";
            echo ($context["address_row"] ?? null);
            echo "</a></li>
                    ";
            // line 46
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 47
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    <li id=\"address-add\"><a onclick=\"addAddress();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_address_add"] ?? null);
        echo "</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>";
        // line 55
        echo ($context["text_account"] ?? null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 57
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 61
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 61) == ($context["customer_group_id"] ?? null))) {
                // line 62
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 62);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 62);
                echo "</option>
                              ";
            } else {
                // line 64
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 64);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 64);
                echo "</option>
                              ";
            }
            // line 66
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 71
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                            ";
        // line 74
        if (($context["error_firstname"] ?? null)) {
            // line 75
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 76
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 79
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 81
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                            ";
        // line 82
        if (($context["error_lastname"] ?? null)) {
            // line 83
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 84
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 87
        echo ($context["entry_email"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 89
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                            ";
        // line 90
        if (($context["error_email"] ?? null)) {
            // line 91
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 92
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 95
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 97
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                            ";
        // line 98
        if (($context["error_telephone"] ?? null)) {
            // line 99
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 100
        echo "</div>
                        </div>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 103
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 103) == "account")) {
                // line 104
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 104) == "select")) {
                    // line 105
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 105);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 106);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"custom_field[";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                    echo "\" class=\"form-control\">
                              <option value=\"\">";
                    // line 109
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                              ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 110));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 111
                        echo "                              ";
                        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["account_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null)))) {
                            // line 112
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 112);
                            echo "</option>
                              ";
                        } else {
                            // line 114
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                            echo "</option>
                              ";
                        }
                        // line 116
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo "                            </select>
                            ";
                    // line 118
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118)] ?? null) : null)) {
                        // line 119
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 120
                    echo "</div>
                        </div>
                        ";
                }
                // line 123
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 123) == "radio")) {
                    // line 124
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 124);
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 128
                        echo "                              <div class=\"radio\"> ";
                        if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 128) == (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["account_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)))) {
                            // line 129
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 130
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 130);
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 131
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 131);
                            echo "</label>
                                ";
                        } else {
                            // line 133
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 134
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 134);
                            echo "\" />
                                  ";
                            // line 135
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 135);
                            echo "</label>
                                ";
                        }
                        // line 136
                        echo "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo " </div>
                            ";
                    // line 138
                    if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)) {
                        // line 139
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 140
                    echo "</div>
                        </div>
                        ";
                }
                // line 143
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 143) == "checkbox")) {
                    // line 144
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 144);
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 147));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 148
                        echo "                              <div class=\"checkbox\">";
                        if (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148), (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["account_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)))) {
                            // line 149
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 150
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 150);
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 151
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 151);
                            echo "</label>
                                ";
                        } else {
                            // line 153
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 154
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 154);
                            echo "\" />
                                  ";
                            // line 155
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 155);
                            echo "</label>
                                ";
                        }
                        // line 156
                        echo "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "</div>
                            ";
                    // line 158
                    if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158)] ?? null) : null)) {
                        // line 159
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 160
                    echo "</div>
                        </div>
                        ";
                }
                // line 163
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 163) == "text")) {
                    // line 164
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 164);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 165);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                    echo "]\" value=\"";
                    echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["account_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 167)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                    echo "\" class=\"form-control\" />
                            ";
                    // line 168
                    if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["error_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null)) {
                        // line 169
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 170
                    echo "</div>
                        </div>
                        ";
                }
                // line 173
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 173) == "textarea")) {
                    // line 174
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 174);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 175);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"custom_field[";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["account_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) ? ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["account_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 177)));
                    echo "</textarea>
                            ";
                    // line 178
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["error_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null)) {
                        // line 179
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 180
                    echo "</div>
                        </div>
                        ";
                }
                // line 183
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 183) == "file")) {
                    // line 184
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 184);
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 185);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"hidden\" name=\"custom_field[";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    echo "]\" value=\"";
                    echo (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["code"] ?? null) : null)) ? ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["account_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["code"] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    echo "\" />
                            <span>";
                    // line 189
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["account_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null);
                    echo "</span>
                            ";
                    // line 190
                    if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["error_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null)) {
                        // line 191
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 192
                    echo "</div>
                        </div>
                        ";
                }
                // line 195
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 195) == "date")) {
                    // line 196
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 196);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 197);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                    echo "]\" value=\"";
                    echo (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["account_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null)) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["account_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 200)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 200);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 204
                    if ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["error_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204)] ?? null) : null)) {
                        // line 205
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 206
                    echo "</div>
                        </div>
                        ";
                }
                // line 209
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 209) == "time")) {
                    // line 210
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 210);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 211);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                    echo "]\" value=\"";
                    echo (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["account_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)) ? ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["account_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 214)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 214);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 218
                    if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["error_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null)) {
                        // line 219
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 220
                    echo "</div>
                        </div>
                        ";
                }
                // line 223
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 223) == "datetime")) {
                    // line 224
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 224);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 225);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 228
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                    echo "]\" value=\"";
                    echo (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["account_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) ? ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["account_custom_field"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 228)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 228);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 232
                    if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["error_custom_field"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232)] ?? null) : null)) {
                        // line 233
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["error_custom_field"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 234
                    echo "</div>
                        </div>
                        ";
                }
                // line 237
                echo "                        ";
            }
            // line 238
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 241
        echo ($context["text_password"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 243
        echo ($context["entry_password"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 245
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\" />
                            ";
        // line 246
        if (($context["error_password"] ?? null)) {
            // line 247
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 248
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 251
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 253
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\" />
                            ";
        // line 254
        if (($context["error_confirm"] ?? null)) {
            // line 255
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 256
        echo "</div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 260
        echo ($context["text_other"] ?? null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 262
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              ";
        // line 265
        if (($context["newsletter"] ?? null)) {
            // line 266
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                              <option value=\"0\">";
            // line 267
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 269
            echo "                              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 270
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        }
        // line 272
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 276
        echo ($context["entry_status"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              ";
        // line 279
        if (($context["status"] ?? null)) {
            // line 280
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                              <option value=\"0\">";
            // line 281
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 283
            echo "                              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 284
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        }
        // line 286
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-safe\"><span data-toggle=\"tooltip\" title=\"";
        // line 290
        echo ($context["help_safe"] ?? null);
        echo "\">";
        echo ($context["entry_safe"] ?? null);
        echo "</span></label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              ";
        // line 293
        if (($context["safe"] ?? null)) {
            // line 294
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                              <option value=\"0\">";
            // line 295
            echo ($context["text_no"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 297
            echo "                              <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 298
            echo ($context["text_no"] ?? null);
            echo "</option>
                              ";
        }
        // line 300
        echo "                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    ";
        // line 305
        $context["address_row"] = 1;
        // line 306
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 307
            echo "                    <div class=\"tab-pane\" id=\"tab-address";
            echo ($context["address_row"] ?? null);
            echo "\">
                      <input type=\"hidden\" name=\"address[";
            // line 308
            echo ($context["address_row"] ?? null);
            echo "][address_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 308);
            echo "\" />
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname";
            // line 310
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 312
            echo ($context["address_row"] ?? null);
            echo "][firstname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 312);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-firstname";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 313
            if (twig_get_attribute($this->env, $this->source, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["error_address"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[($context["address_row"] ?? null)] ?? null) : null), "firstname", [], "any", false, false, false, 313)) {
                // line 314
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["error_address"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[($context["address_row"] ?? null)] ?? null) : null), "firstname", [], "any", false, false, false, 314);
                echo "</div>
                          ";
            }
            // line 315
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname";
            // line 318
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 320
            echo ($context["address_row"] ?? null);
            echo "][lastname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 320);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-lastname";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 321
            if (twig_get_attribute($this->env, $this->source, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["error_address"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[($context["address_row"] ?? null)] ?? null) : null), "lastname", [], "any", false, false, false, 321)) {
                // line 322
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["error_address"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[($context["address_row"] ?? null)] ?? null) : null), "lastname", [], "any", false, false, false, 322);
                echo "</div>
                          ";
            }
            // line 323
            echo "</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-company";
            // line 326
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_company"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 328
            echo ($context["address_row"] ?? null);
            echo "][company]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 328);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-company";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-1";
            // line 332
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 334
            echo ($context["address_row"] ?? null);
            echo "][address_1]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 334);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-address-1";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 335
            if (twig_get_attribute($this->env, $this->source, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["error_address"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[($context["address_row"] ?? null)] ?? null) : null), "address_1", [], "any", false, false, false, 335)) {
                // line 336
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["error_address"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[($context["address_row"] ?? null)] ?? null) : null), "address_1", [], "any", false, false, false, 336);
                echo "</div>
                          ";
            }
            // line 337
            echo "</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-2";
            // line 340
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 342
            echo ($context["address_row"] ?? null);
            echo "][address_2]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 342);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-address-2";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-city";
            // line 346
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_city"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 348
            echo ($context["address_row"] ?? null);
            echo "][city]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 348);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-city";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 349
            if (twig_get_attribute($this->env, $this->source, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["error_address"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[($context["address_row"] ?? null)] ?? null) : null), "city", [], "any", false, false, false, 349)) {
                // line 350
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["error_address"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[($context["address_row"] ?? null)] ?? null) : null), "city", [], "any", false, false, false, 350);
                echo "</div>
                          ";
            }
            // line 351
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-postcode";
            // line 354
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 356
            echo ($context["address_row"] ?? null);
            echo "][postcode]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 356);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-postcode";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 357
            if (twig_get_attribute($this->env, $this->source, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["error_address"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[($context["address_row"] ?? null)] ?? null) : null), "postcode", [], "any", false, false, false, 357)) {
                // line 358
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["error_address"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[($context["address_row"] ?? null)] ?? null) : null), "postcode", [], "any", false, false, false, 358);
                echo "</div>
                          ";
            }
            // line 359
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-country";
            // line 362
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_country"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 364
            echo ($context["address_row"] ?? null);
            echo "][country_id]\" id=\"input-country";
            echo ($context["address_row"] ?? null);
            echo "\" onchange=\"country(this, '";
            echo ($context["address_row"] ?? null);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone_id", [], "any", false, false, false, 364);
            echo "');\" class=\"form-control\">
                            <option value=\"\">";
            // line 365
            echo ($context["text_select"] ?? null);
            echo "</option>
                            ";
            // line 366
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 367
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 367) == twig_get_attribute($this->env, $this->source, $context["address"], "country_id", [], "any", false, false, false, 367))) {
                    // line 368
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 368);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 368);
                    echo "</option>
                            ";
                } else {
                    // line 370
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 370);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 370);
                    echo "</option>
                            ";
                }
                // line 372
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo "                          </select>
                          ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["error_address"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[($context["address_row"] ?? null)] ?? null) : null), "country", [], "any", false, false, false, 374)) {
                // line 375
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["error_address"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[($context["address_row"] ?? null)] ?? null) : null), "country", [], "any", false, false, false, 375);
                echo "</div>
                          ";
            }
            // line 376
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-zone";
            // line 379
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_zone"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 381
            echo ($context["address_row"] ?? null);
            echo "][zone_id]\" id=\"input-zone";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\">
                          </select>
                          ";
            // line 383
            if (twig_get_attribute($this->env, $this->source, (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["error_address"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[($context["address_row"] ?? null)] ?? null) : null), "zone", [], "any", false, false, false, 383)) {
                // line 384
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["error_address"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[($context["address_row"] ?? null)] ?? null) : null), "zone", [], "any", false, false, false, 384);
                echo "</div>
                          ";
            }
            // line 385
            echo "</div>
                      </div>
                      ";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 388
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 388) == "address")) {
                    // line 389
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 389) == "select")) {
                        // line 390
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 390);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 390) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 391
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 391);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
                        // line 393
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                        echo "]\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                        echo "\" class=\"form-control\">
                            <option value=\"\">";
                        // line 394
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                            ";
                        // line 395
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 395));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 396
                            echo "                            ";
                            if (((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 396)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 396) == (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 396)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396)] ?? null) : null)))) {
                                // line 397
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 397);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 397);
                                echo "</option>
                            ";
                            } else {
                                // line 399
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 399);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 399);
                                echo "</option>
                            ";
                            }
                            // line 401
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 402
                        echo "                          </select>
                          ";
                        // line 403
                        if ((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["error_address"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["custom_field"] ?? null) : null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403)] ?? null) : null)) {
                            // line 404
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = twig_get_attribute($this->env, $this->source, (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["error_address"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 404)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 405
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 408
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 408) == "radio")) {
                        // line 409
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 409);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 409) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 410
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 410);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 412
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 412));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 413
                            echo "                            <div class=\"radio\"> ";
                            if (((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 413)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 413) == (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 413)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413)] ?? null) : null)))) {
                                // line 414
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 415
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 415);
                                echo "\" checked=\"checked\" />
                                ";
                                // line 416
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 416);
                                echo "</label>
                              ";
                            } else {
                                // line 418
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 419
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 419);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 419);
                                echo "\" />
                                ";
                                // line 420
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 420);
                                echo "</label>
                              ";
                            }
                            // line 421
                            echo "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 422
                        echo " </div>
                          ";
                        // line 423
                        if ((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = twig_get_attribute($this->env, $this->source, (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["error_address"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 423)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 423)] ?? null) : null)) {
                            // line 424
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = twig_get_attribute($this->env, $this->source, (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["error_address"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 424)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 424)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 425
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 428
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 428) == "checkbox")) {
                        // line 429
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 429) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 430
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 430);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 432
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 432));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 433
                            echo "                            <div class=\"checkbox\"> ";
                            if (((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 433)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 433)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 433), (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 433)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 433)] ?? null) : null)))) {
                                // line 434
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 435
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 435);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 435);
                                echo "\" checked=\"checked\" />
                                ";
                                // line 436
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 436);
                                echo "</label>
                              ";
                            } else {
                                // line 438
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 439
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 439);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 439);
                                echo "\" />
                                ";
                                // line 440
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 440);
                                echo "</label>
                              ";
                            }
                            // line 441
                            echo "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 442
                        echo " </div>
                          ";
                        // line 443
                        if ((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["error_address"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["custom_field"] ?? null) : null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443)] ?? null) : null)) {
                            // line 444
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = twig_get_attribute($this->env, $this->source, (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["error_address"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 444)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 444)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 445
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 448
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 448) == "text")) {
                        // line 449
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 449);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 449) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 450
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 450);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 450);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
                        // line 452
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452);
                        echo "]\" value=\"";
                        echo (((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 452)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452)] ?? null) : null)) ? ((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 452)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 452)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 452);
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452);
                        echo "\" class=\"form-control\" />
                          ";
                        // line 453
                        if ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = ($context["error_address"] ?? null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["custom_field"] ?? null) : null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 453)] ?? null) : null)) {
                            // line 454
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = twig_get_attribute($this->env, $this->source, (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = ($context["error_address"] ?? null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 454)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 454)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 455
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 458
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 458) == "textarea")) {
                        // line 459
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 459);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 459) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 460
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 460);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 460);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"address[";
                        // line 462
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 462);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 462);
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 462);
                        echo "\" class=\"form-control\">";
                        echo (((($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 462)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 462)] ?? null) : null)) ? ((($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 462)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 462)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 462)));
                        echo "</textarea>
                          ";
                        // line 463
                        if ((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["error_address"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["custom_field"] ?? null) : null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 463)] ?? null) : null)) {
                            // line 464
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = twig_get_attribute($this->env, $this->source, (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["error_address"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 464)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 464)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 465
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 468
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 468) == "file")) {
                        // line 469
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 469);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 469) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 470
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 470);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <button type=\"button\" id=\"button-address";
                        // line 472
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 472);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                          <input type=\"hidden\" name=\"address[";
                        // line 473
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 473);
                        echo "]\" value=\"";
                        echo (((($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 473)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 473)] ?? null) : null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["code"] ?? null) : null)) ? ((($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 473)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 473)] ?? null) : null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["code"] ?? null) : null)) : (""));
                        echo "\" />
                          <span>";
                        // line 474
                        echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 474)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 474)] ?? null) : null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["name"] ?? null) : null);
                        echo "</span>
                          ";
                        // line 475
                        if ((($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = ($context["error_address"] ?? null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["custom_field"] ?? null) : null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 475)] ?? null) : null)) {
                            // line 476
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = twig_get_attribute($this->env, $this->source, (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["error_address"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 476)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 476)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 477
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 480
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 480) == "date")) {
                        // line 481
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 481);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 481) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 482
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 482);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 482);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"address[";
                        // line 485
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485);
                        echo "]\" value=\"";
                        echo (((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 485)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485)] ?? null) : null)) ? ((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 485)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 485)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 485);
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485);
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 489
                        if ((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["error_address"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["custom_field"] ?? null) : null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 489)] ?? null) : null)) {
                            // line 490
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = twig_get_attribute($this->env, $this->source, (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["error_address"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 490)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 490)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 491
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 494
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 494) == "time")) {
                        // line 495
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 495);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 495) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 496
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 496);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 496);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"address[";
                        // line 499
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499);
                        echo "]\" value=\"";
                        echo (((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 499)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499)] ?? null) : null)) ? ((($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 499)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 499)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 499);
                        echo "\" data-date-format=\"HH:mm\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499);
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 503
                        if ((($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = ($context["error_address"] ?? null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["custom_field"] ?? null) : null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 503)] ?? null) : null)) {
                            // line 504
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = twig_get_attribute($this->env, $this->source, (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = ($context["error_address"] ?? null)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 504)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 504)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 505
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 508
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 508) == "datetime")) {
                        // line 509
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 509) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 510
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 510);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 510);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"address[";
                        // line 513
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513);
                        echo "]\" value=\"";
                        echo (((($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 513)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513)] ?? null) : null)) ? ((($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 513)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 513)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 513);
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513);
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span> </div>
                          ";
                        // line 517
                        if ((($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = ($context["error_address"] ?? null)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["custom_field"] ?? null) : null)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517)] ?? null) : null)) {
                            // line 518
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = twig_get_attribute($this->env, $this->source, (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = ($context["error_address"] ?? null)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 518)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 518)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 519
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 522
                    echo "                      ";
                }
                // line 523
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 525
            echo ($context["entry_default"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <label class=\"radio\">";
            // line 527
            if (((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 527) == ($context["address_id"] ?? null)) ||  !($context["addresses"] ?? null))) {
                // line 528
                echo "                            <input type=\"radio\" name=\"address[";
                echo ($context["address_row"] ?? null);
                echo "][default]\" value=\"";
                echo ($context["address_row"] ?? null);
                echo "\" checked=\"checked\" />
                            ";
            } else {
                // line 530
                echo "                            <input type=\"radio\" name=\"address[";
                echo ($context["address_row"] ?? null);
                echo "][default]\" value=\"";
                echo ($context["address_row"] ?? null);
                echo "\" />
                            ";
            }
            // line 531
            echo "</label>
                        </div>
                      </div>
                    </div>
                    ";
            // line 535
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 536
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-affiliate\">
              <fieldset>
                <legend>";
        // line 543
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 545
        echo ($context["entry_company"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"company\" value=\"";
        // line 547
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
        // line 551
        echo ($context["entry_website"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
        // line 553
        echo ($context["website"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_website"] ?? null);
        echo "\" id=\"input-website\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tracking\"><span data-toggle=\"tooltip\" title=\"";
        // line 557
        echo ($context["help_tracking"] ?? null);
        echo "\">";
        echo ($context["entry_tracking"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tracking\" value=\"";
        // line 559
        echo ($context["tracking"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tracking"] ?? null);
        echo "\" id=\"input-tracking\" class=\"form-control\" />
                    ";
        // line 560
        if (($context["error_tracking"] ?? null)) {
            // line 561
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_tracking"] ?? null);
            echo "</div>
                    ";
        }
        // line 563
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 566
        echo ($context["help_commission"] ?? null);
        echo "\">";
        echo ($context["entry_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"";
        // line 568
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 571
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 572
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 572) == "affiliate")) {
                // line 573
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 573) == "select")) {
                    // line 574
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 574);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 575
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 575);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 575);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                    // line 577
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577);
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 578
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 579
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 579));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 580
                        echo "                      ";
                        if (((($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 580) == (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = ($context["account_custom_field"] ?? null)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580)] ?? null) : null)))) {
                            // line 581
                            echo "                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 581);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 581);
                            echo "</option>
                      ";
                        } else {
                            // line 583
                            echo "                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 583);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 583);
                            echo "</option>
                      ";
                        }
                        // line 585
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 586
                    echo "                    </select>
                    ";
                    // line 587
                    if ((($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587)] ?? null) : null)) {
                        // line 588
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = ($context["error_custom_field"] ?? null)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 588)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 589
                    echo "</div>
                </div>
                ";
                }
                // line 592
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 592) == "radio")) {
                    // line 593
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 593);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 593);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 594
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 594);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 596
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 596));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 597
                        echo "                      <div class=\"radio\">";
                        if (((($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = ($context["account_custom_field"] ?? null)) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 597) == (($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = ($context["account_custom_field"] ?? null)) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null)))) {
                            // line 598
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[";
                            // line 599
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 599);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 599);
                            echo "\" checked=\"checked\" />
                          ";
                            // line 600
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 600);
                            echo "</label>
                        ";
                        } else {
                            // line 602
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[";
                            // line 603
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 603);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 603);
                            echo "\" />
                          ";
                            // line 604
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 604);
                            echo "</label>
                        ";
                        }
                        // line 605
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 606
                    echo " </div>
                    ";
                    // line 607
                    if ((($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = ($context["error_custom_field"] ?? null)) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 607)] ?? null) : null)) {
                        // line 608
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 608)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 609
                    echo "</div>
                </div>
                ";
                }
                // line 612
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 612) == "checkbox")) {
                    // line 613
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 613);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 613);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 614
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 614);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 616
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 616));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 617
                        echo "                      <div class=\"checkbox\">";
                        if (((($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = ($context["account_custom_field"] ?? null)) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 617), (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = ($context["account_custom_field"] ?? null)) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617)] ?? null) : null)))) {
                            // line 618
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[";
                            // line 619
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 619);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 619);
                            echo "\" checked=\"checked\" />
                          ";
                            // line 620
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 620);
                            echo "</label>
                        ";
                        } else {
                            // line 622
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[";
                            // line 623
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 623);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 623);
                            echo "\" />
                          ";
                            // line 624
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 624);
                            echo "</label>
                        ";
                        }
                        // line 625
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 626
                    echo " </div>
                    ";
                    // line 627
                    if ((($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = ($context["error_custom_field"] ?? null)) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627)] ?? null) : null)) {
                        // line 628
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = ($context["error_custom_field"] ?? null)) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 628)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 629
                    echo "</div>
                </div>
                ";
                }
                // line 632
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 632) == "text")) {
                    // line 633
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 633);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 633);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 634
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 634);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 634);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 636
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636);
                    echo "]\" value=\"";
                    echo (((($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = ($context["account_custom_field"] ?? null)) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636)] ?? null) : null)) ? ((($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = ($context["account_custom_field"] ?? null)) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 636)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 636);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 637
                    if ((($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = ($context["error_custom_field"] ?? null)) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 637)] ?? null) : null)) {
                        // line 638
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = ($context["error_custom_field"] ?? null)) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 638)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 639
                    echo "</div>
                </div>
                ";
                }
                // line 642
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 642) == "textarea")) {
                    // line 643
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 643);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 643);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 644
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 644);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 644);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                    // line 646
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 646);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = ($context["account_custom_field"] ?? null)) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646)] ?? null) : null)) ? ((($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = ($context["account_custom_field"] ?? null)) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 646)));
                    echo "</textarea>
                    ";
                    // line 647
                    if ((($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = ($context["error_custom_field"] ?? null)) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 647)] ?? null) : null)) {
                        // line 648
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 648)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 649
                    echo "</div>
                </div>
                ";
                }
                // line 652
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 652) == "file")) {
                    // line 653
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 653);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 653);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 654
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 654);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 656
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 656);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                    // line 657
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657);
                    echo "]\" value=\"";
                    echo (((($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657)] ?? null) : null)) ? ((($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = ($context["account_custom_field"] ?? null)) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657);
                    echo "\" />
                    ";
                    // line 658
                    if ((($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = ($context["error_custom_field"] ?? null)) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 658)] ?? null) : null)) {
                        // line 659
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = ($context["error_custom_field"] ?? null)) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 660
                    echo "</div>
                </div>
                ";
                }
                // line 663
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 663) == "date")) {
                    // line 664
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 664);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 664);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 665
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 665);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 665);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 668
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668);
                    echo "]\" value=\"";
                    echo (((($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = ($context["account_custom_field"] ?? null)) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668)] ?? null) : null)) ? ((($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = ($context["account_custom_field"] ?? null)) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 668)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 668);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 672
                    if ((($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = ($context["error_custom_field"] ?? null)) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 672)] ?? null) : null)) {
                        // line 673
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = ($context["error_custom_field"] ?? null)) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 673)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 674
                    echo "</div>
                </div>
                ";
                }
                // line 677
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 677) == "time")) {
                    // line 678
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 678);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 678);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 679
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 679);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 679);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 682
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 682);
                    echo "]\" value=\"";
                    echo (((($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = ($context["account_custom_field"] ?? null)) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 682)] ?? null) : null)) ? ((($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = ($context["account_custom_field"] ?? null)) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 682)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 682)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 682);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 682);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 686
                    if ((($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = ($context["error_custom_field"] ?? null)) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 686)] ?? null) : null)) {
                        // line 687
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = ($context["error_custom_field"] ?? null)) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 687)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 688
                    echo "</div>
                </div>
                ";
                }
                // line 691
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 691) == "datetime")) {
                    // line 692
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 692);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 692);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 693
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 693);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 693);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 696
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 696);
                    echo "]\" value=\"";
                    echo (((($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 696)] ?? null) : null)) ? ((($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = ($context["account_custom_field"] ?? null)) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 696)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 696)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 696);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 696);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 700
                    if ((($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = ($context["error_custom_field"] ?? null)) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 700)] ?? null) : null)) {
                        // line 701
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = ($context["error_custom_field"] ?? null)) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 701)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 702
                    echo "</div>
                </div>
                ";
                }
                // line 705
                echo "                ";
            }
            // line 706
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 707
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 709
        echo ($context["text_payment"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax\">";
        // line 711
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"";
        // line 713
        echo ($context["tax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tax"] ?? null);
        echo "\" id=\"input-tax\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 717
        echo ($context["entry_payment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"radio\">
                      <label>";
        // line 720
        if ((($context["payment"] ?? null) == "cheque")) {
            // line 721
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                        ";
        } else {
            // line 723
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                        ";
        }
        // line 725
        echo "                        ";
        echo ($context["text_cheque"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 728
        if ((($context["payment"] ?? null) == "paypal")) {
            // line 729
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                        ";
        } else {
            // line 731
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                        ";
        }
        // line 733
        echo "                        ";
        echo ($context["text_paypal"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 736
        if ((($context["payment"] ?? null) == "bank")) {
            // line 737
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                        ";
        } else {
            // line 739
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" />
                        ";
        }
        // line 741
        echo "                        ";
        echo ($context["text_bank"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 747
        echo ($context["entry_cheque"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"";
        // line 749
        echo ($context["cheque"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cheque"] ?? null);
        echo "\" id=\"input-cheque\" class=\"form-control\" />
                      ";
        // line 750
        if (($context["error_cheque"] ?? null)) {
            // line 751
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_cheque"] ?? null);
            echo "</div>
                      ";
        }
        // line 752
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 757
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"";
        // line 759
        echo ($context["paypal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\" id=\"input-paypal\" class=\"form-control\" />
                      ";
        // line 760
        if (($context["error_paypal"] ?? null)) {
            // line 761
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_paypal"] ?? null);
            echo "</div>
                      ";
        }
        // line 762
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">";
        // line 767
        echo ($context["entry_bank_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"";
        // line 769
        echo ($context["bank_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_name"] ?? null);
        echo "\" id=\"input-bank-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">";
        // line 773
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 775
        echo ($context["bank_branch_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">";
        // line 779
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 781
        echo ($context["bank_swift_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">";
        // line 785
        echo ($context["entry_bank_account_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 787
        echo ($context["bank_account_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_name"] ?? null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\" />
                      ";
        // line 788
        if (($context["error_bank_account_name"] ?? null)) {
            // line 789
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_bank_account_name"] ?? null);
            echo "</div>
                      ";
        }
        // line 790
        echo "</div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">";
        // line 793
        echo ($context["entry_bank_account_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 795
        echo ($context["bank_account_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_number"] ?? null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\" />
                      ";
        // line 796
        if (($context["error_bank_account_number"] ?? null)) {
            // line 797
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_bank_account_number"] ?? null);
            echo "</div>
                      ";
        }
        // line 798
        echo "</div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 802
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"affiliate\" id=\"input-affiliate\" class=\"form-control\">
                      ";
        // line 805
        if (($context["affiliate"] ?? null)) {
            // line 806
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 807
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 809
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 810
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 812
        echo "                     </select>
                  </div>
                </div>
              </fieldset>           
            </div>         
            ";
        // line 817
        if (($context["customer_id"] ?? null)) {
            // line 818
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 820
            echo ($context["text_history"] ?? null);
            echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 825
            echo ($context["text_history_add"] ?? null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 827
            echo ($context["entry_comment"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 829
            echo ($context["entry_comment"] ?? null);
            echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"";
            // line 834
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_history_add"] ?? null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-transaction\">
              <fieldset>
                <legend>";
            // line 839
            echo ($context["text_transaction"] ?? null);
            echo "</legend>
                <div id=\"transaction\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 844
            echo ($context["text_transaction_add"] ?? null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-transaction-description\">";
            // line 846
            echo ($context["entry_description"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 848
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-transaction-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
            // line 852
            echo ($context["entry_amount"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 854
            echo ($context["entry_amount"] ?? null);
            echo "\" id=\"input-amount\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 859
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_transaction_add"] ?? null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <fieldset>
                <legend>";
            // line 864
            echo ($context["text_reward"] ?? null);
            echo "</legend>
                <div id=\"reward\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 869
            echo ($context["text_reward_add"] ?? null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward-description\">";
            // line 871
            echo ($context["entry_description"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 873
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-reward-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
            // line 877
            echo ($context["help_points"] ?? null);
            echo "\">";
            echo ($context["entry_points"] ?? null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 879
            echo ($context["entry_points"] ?? null);
            echo "\" id=\"input-points\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 884
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_reward_add"] ?? null);
            echo "</button>
              </div>
            </div>
            ";
        }
        // line 888
        echo "            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>";
        // line 890
        echo ($context["text_ip"] ?? null);
        echo "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type=\"text/javascript\"><!--
  \$('input[name=\"affiliate\"]').on('change', function() {
    if (\$(this).val() == '1') { 
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', false);
    } else {
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', true);
    }
  }); 

  \$('input[name=\\'affiliate\\']:checked').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=customer/customer/customfield&user_token=";
        // line 914
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'customer_group_id\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  var address_row = ";
        // line 939
        echo ($context["address_row"] ?? null);
        echo ";

  function addAddress() {
    html  = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">";
        // line 946
        echo ($context["entry_firstname"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 947
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-lastname' + address_row + '\">";
        // line 951
        echo ($context["entry_lastname"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 952
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">";
        // line 956
        echo ($context["entry_company"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 957
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">";
        // line 961
        echo ($context["entry_address_1"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 962
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-2' + address_row + '\">";
        // line 966
        echo ($context["entry_address_2"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 967
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 971
        echo ($context["entry_city"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 972
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">";
        // line 976
        echo ($context["entry_postcode"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 977
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">";
        // line 981
        echo ($context["entry_country"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
      html += '         <option value=\"\">";
        // line 983
        echo ($context["text_select"] ?? null);
        echo "</option>';
      ";
        // line 984
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 985
            echo "      html += '         <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 985);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 985), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 987
        echo "      html += '      </select></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">";
        // line 991
        echo ($context["entry_zone"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 992
        echo ($context["text_none"] ?? null);
        echo "</option></select></div>';
    html += '  </div>';

    // Custom Fields
    ";
        // line 996
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 997
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 997) == "address")) {
                // line 998
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 998) == "select")) {
                    // line 999
                    echo "
    html += '  <div class=\"form-group custom-field custom-field";
                    // line 1000
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1000);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1000) + 1);
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1001
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1001);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1001), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 1003
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1003);
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1003);
                    echo "\" class=\"form-control\">';
    html += '  \t\t\t<option value=\"\">";
                    // line 1004
                    echo ($context["text_select"] ?? null);
                    echo "</option>';

    ";
                    // line 1006
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1006));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1007
                        echo "    html += '  \t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1007);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1007), "js");
                        echo "</option>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1009
                    echo "
    html += '  \t\t  </select>';
    html += '  \t\t</div>';
    html += '  \t  </div>';
    ";
                }
                // line 1014
                echo "
    ";
                // line 1015
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1015) == "radio")) {
                    // line 1016
                    echo "    html += '  \t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1016);
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\">";
                    // line 1017
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1017), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <div>';

    ";
                    // line 1021
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1021));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1022
                        echo "    html += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1022);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1022);
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1022), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1024
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1029
                echo "
    ";
                // line 1030
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1030) == "checkbox")) {
                    // line 1031
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1031);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1031) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1032
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1032), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div>';

    ";
                    // line 1036
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1036));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1037
                        echo "    html += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1037);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1037);
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1037), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1039
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1044
                echo "
    ";
                // line 1045
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1045) == "text")) {
                    // line 1046
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1046);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1046) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1047
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1047);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1047), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1049
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1049);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1049), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1049), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1049);
                    echo "\" class=\"form-control\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1053
                echo "
    ";
                // line 1054
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1054) == "textarea")) {
                    // line 1055
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1055);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1055) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1056
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1056);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1056), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 1058
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1058);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1058), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1058);
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1058), "js");
                    echo "</textarea>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1062
                echo "
    ";
                // line 1063
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1063) == "file")) {
                    // line 1064
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1064);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1064) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1065
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1065), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 1067
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1067);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>';
    html += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 1068
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1068);
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1068);
                    echo "\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1072
                echo "
    ";
                // line 1073
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1073) == "date")) {
                    // line 1074
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1074) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1075
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1075);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1075), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1077
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1077);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1077), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1077), "js");
                    echo " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1077);
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1081
                echo "
    ";
                // line 1082
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1082) == "time")) {
                    // line 1083
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1083);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1083) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1084
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1084);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1084), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1086
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1086);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1086), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1086), "js");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1086);
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1090
                echo "
    ";
                // line 1091
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1091) == "datetime")) {
                    // line 1092
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1092);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1092) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1093
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1093);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1093), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1095
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1095), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1095), "js");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095);
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1099
                echo "
    ";
            }
            // line 1101
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1102
        echo "
    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\">";
        // line 1104
        echo ($context["entry_default"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
    html += '  </div>';

    html += '</div>';

    \$('#tab-general .tab-content').append(html);

    \$('select[name=\\'customer_group_id\\']').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    \$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> ";
        // line 1116
        echo ($context["tab_address"] ?? null);
        echo " ' + address_row + '</a></li>');

    \$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

    \$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1121
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickTime: false
    });

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 1126
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
    });

    \$('.time').datetimepicker({
\t\tlanguage: '";
        // line 1132
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: false
    });

    \$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:last').after(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:first').before(this);
\t\t}
    });

    address_row++;
  }
  //--></script> 
  <script type=\"text/javascript\"><!--
  function country(element, index, zone_id) {
    \$.ajax({
      url: 'index.php?route=localisation/country/country&user_token=";
        // line 1156
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + element.value,
      dataType: 'json',
      beforeSend: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
      },
      complete: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
        } else {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 1171
        echo ($context["text_select"] ?? null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == zone_id) {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\">";
        // line 1184
        echo ($context["text_none"] ?? null);
        echo "</option>';
        }

        \$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }

  \$('select[name\$=\\'[country_id]\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1204
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addhistory&user_token=";
        // line 1210
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
      beforeSend: function() {
        \$('#button-history').button('loading');
      },
      complete: function() {
        \$('#button-history').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1230
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

          \$('#tab-history textarea[name=\\'comment\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
  });

  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1248
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addtransaction&user_token=";
        // line 1254
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
      beforeSend: function() {
        \$('#button-transaction').button('loading');
      },
      complete: function() {
        \$('#button-transaction').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1274
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

          \$('#tab-transaction input[name=\\'amount\\']').val('');
          \$('#tab-transaction input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
  });

  \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1293
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addreward&user_token=";
        // line 1299
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
      beforeSend: function() {
        \$('#button-reward').button('loading');
      },
      complete: function() {
        \$('#button-reward').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1319
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

          \$('#tab-reward input[name=\\'points\\']').val('');
          \$('#tab-reward input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
  });

  \$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1337
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token=";
        // line 1357
        echo ($context["user_token"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  \$('.date').datetimepicker({
    language: '";
        // line 1394
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 1399
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '";
        // line 1405
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: false
  });

  // Sort the custom fields
  ";
        // line 1410
        $context["address_row"] = 1;
        // line 1411
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1412
            echo "  \$('#tab-address";
            echo ($context["address_row"] ?? null);
            echo " .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1413
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1414
            echo ($context["address_row"] ?? null);
            echo " .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1417
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1418
            echo ($context["address_row"] ?? null);
            echo " .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-address";
            // line 1421
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1422
            echo ($context["address_row"] ?? null);
            echo " .form-group:first').before(this);
    }
  });
  ";
            // line 1425
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 1426
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1427
        echo "
  \$('#tab-customer .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:first').before(this);
    }
  });

  \$('#tab-affiliate .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:first').before(this);
    }
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'payment\\']').on('change', function() {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
  });

  \$('input[name=\\'payment\\']:checked').trigger('change');
  //--></script> 
</div>
";
        // line 1466
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3864 => 1466,  3823 => 1427,  3817 => 1426,  3815 => 1425,  3809 => 1422,  3805 => 1421,  3799 => 1418,  3795 => 1417,  3789 => 1414,  3785 => 1413,  3780 => 1412,  3775 => 1411,  3773 => 1410,  3765 => 1405,  3756 => 1399,  3748 => 1394,  3708 => 1357,  3683 => 1337,  3660 => 1319,  3635 => 1299,  3624 => 1293,  3600 => 1274,  3575 => 1254,  3564 => 1248,  3541 => 1230,  3516 => 1210,  3505 => 1204,  3482 => 1184,  3466 => 1171,  3448 => 1156,  3421 => 1132,  3412 => 1126,  3404 => 1121,  3396 => 1116,  3381 => 1104,  3377 => 1102,  3371 => 1101,  3367 => 1099,  3354 => 1095,  3347 => 1093,  3340 => 1092,  3338 => 1091,  3335 => 1090,  3322 => 1086,  3315 => 1084,  3308 => 1083,  3306 => 1082,  3303 => 1081,  3290 => 1077,  3283 => 1075,  3276 => 1074,  3274 => 1073,  3271 => 1072,  3262 => 1068,  3254 => 1067,  3249 => 1065,  3242 => 1064,  3240 => 1063,  3237 => 1062,  3224 => 1058,  3217 => 1056,  3210 => 1055,  3208 => 1054,  3205 => 1053,  3192 => 1049,  3185 => 1047,  3178 => 1046,  3176 => 1045,  3173 => 1044,  3166 => 1039,  3151 => 1037,  3147 => 1036,  3140 => 1032,  3133 => 1031,  3131 => 1030,  3128 => 1029,  3121 => 1024,  3108 => 1022,  3104 => 1021,  3097 => 1017,  3092 => 1016,  3090 => 1015,  3087 => 1014,  3080 => 1009,  3069 => 1007,  3065 => 1006,  3060 => 1004,  3054 => 1003,  3047 => 1001,  3041 => 1000,  3038 => 999,  3035 => 998,  3032 => 997,  3028 => 996,  3021 => 992,  3017 => 991,  3011 => 987,  3000 => 985,  2996 => 984,  2992 => 983,  2987 => 981,  2980 => 977,  2976 => 976,  2969 => 972,  2965 => 971,  2958 => 967,  2954 => 966,  2947 => 962,  2943 => 961,  2936 => 957,  2932 => 956,  2925 => 952,  2921 => 951,  2914 => 947,  2910 => 946,  2900 => 939,  2872 => 914,  2845 => 890,  2841 => 888,  2832 => 884,  2824 => 879,  2817 => 877,  2810 => 873,  2805 => 871,  2800 => 869,  2792 => 864,  2782 => 859,  2774 => 854,  2769 => 852,  2762 => 848,  2757 => 846,  2752 => 844,  2744 => 839,  2734 => 834,  2726 => 829,  2721 => 827,  2716 => 825,  2708 => 820,  2704 => 818,  2702 => 817,  2695 => 812,  2690 => 810,  2685 => 809,  2680 => 807,  2675 => 806,  2673 => 805,  2667 => 802,  2661 => 798,  2655 => 797,  2653 => 796,  2647 => 795,  2642 => 793,  2637 => 790,  2631 => 789,  2629 => 788,  2623 => 787,  2618 => 785,  2609 => 781,  2604 => 779,  2595 => 775,  2590 => 773,  2581 => 769,  2576 => 767,  2569 => 762,  2563 => 761,  2561 => 760,  2555 => 759,  2550 => 757,  2543 => 752,  2537 => 751,  2535 => 750,  2529 => 749,  2524 => 747,  2514 => 741,  2510 => 739,  2506 => 737,  2504 => 736,  2497 => 733,  2493 => 731,  2489 => 729,  2487 => 728,  2480 => 725,  2476 => 723,  2472 => 721,  2470 => 720,  2464 => 717,  2455 => 713,  2450 => 711,  2445 => 709,  2441 => 707,  2435 => 706,  2432 => 705,  2427 => 702,  2421 => 701,  2419 => 700,  2406 => 696,  2398 => 693,  2391 => 692,  2388 => 691,  2383 => 688,  2377 => 687,  2375 => 686,  2362 => 682,  2354 => 679,  2347 => 678,  2344 => 677,  2339 => 674,  2333 => 673,  2331 => 672,  2318 => 668,  2310 => 665,  2303 => 664,  2300 => 663,  2295 => 660,  2289 => 659,  2287 => 658,  2279 => 657,  2271 => 656,  2266 => 654,  2259 => 653,  2256 => 652,  2251 => 649,  2245 => 648,  2243 => 647,  2233 => 646,  2226 => 644,  2219 => 643,  2216 => 642,  2211 => 639,  2205 => 638,  2203 => 637,  2193 => 636,  2186 => 634,  2179 => 633,  2176 => 632,  2171 => 629,  2165 => 628,  2163 => 627,  2160 => 626,  2153 => 625,  2148 => 624,  2142 => 623,  2139 => 622,  2134 => 620,  2128 => 619,  2125 => 618,  2122 => 617,  2118 => 616,  2113 => 614,  2106 => 613,  2103 => 612,  2098 => 609,  2092 => 608,  2090 => 607,  2087 => 606,  2080 => 605,  2075 => 604,  2069 => 603,  2066 => 602,  2061 => 600,  2055 => 599,  2052 => 598,  2049 => 597,  2045 => 596,  2040 => 594,  2033 => 593,  2030 => 592,  2025 => 589,  2019 => 588,  2017 => 587,  2014 => 586,  2008 => 585,  2000 => 583,  1992 => 581,  1989 => 580,  1985 => 579,  1981 => 578,  1975 => 577,  1968 => 575,  1961 => 574,  1958 => 573,  1955 => 572,  1951 => 571,  1943 => 568,  1936 => 566,  1931 => 563,  1925 => 561,  1923 => 560,  1917 => 559,  1910 => 557,  1901 => 553,  1896 => 551,  1887 => 547,  1882 => 545,  1877 => 543,  1869 => 537,  1863 => 536,  1861 => 535,  1855 => 531,  1847 => 530,  1839 => 528,  1837 => 527,  1832 => 525,  1829 => 524,  1823 => 523,  1820 => 522,  1815 => 519,  1809 => 518,  1807 => 517,  1790 => 513,  1780 => 510,  1773 => 509,  1770 => 508,  1765 => 505,  1759 => 504,  1757 => 503,  1740 => 499,  1730 => 496,  1723 => 495,  1720 => 494,  1715 => 491,  1709 => 490,  1707 => 489,  1690 => 485,  1680 => 482,  1673 => 481,  1670 => 480,  1665 => 477,  1659 => 476,  1657 => 475,  1653 => 474,  1645 => 473,  1635 => 472,  1630 => 470,  1623 => 469,  1620 => 468,  1615 => 465,  1609 => 464,  1607 => 463,  1593 => 462,  1584 => 460,  1577 => 459,  1574 => 458,  1569 => 455,  1563 => 454,  1561 => 453,  1547 => 452,  1538 => 450,  1531 => 449,  1528 => 448,  1523 => 445,  1517 => 444,  1515 => 443,  1512 => 442,  1505 => 441,  1500 => 440,  1492 => 439,  1489 => 438,  1484 => 436,  1476 => 435,  1473 => 434,  1470 => 433,  1466 => 432,  1461 => 430,  1454 => 429,  1451 => 428,  1446 => 425,  1440 => 424,  1438 => 423,  1435 => 422,  1428 => 421,  1423 => 420,  1415 => 419,  1412 => 418,  1407 => 416,  1399 => 415,  1396 => 414,  1393 => 413,  1389 => 412,  1384 => 410,  1377 => 409,  1374 => 408,  1369 => 405,  1363 => 404,  1361 => 403,  1358 => 402,  1352 => 401,  1344 => 399,  1336 => 397,  1333 => 396,  1329 => 395,  1325 => 394,  1315 => 393,  1306 => 391,  1299 => 390,  1296 => 389,  1293 => 388,  1289 => 387,  1285 => 385,  1279 => 384,  1277 => 383,  1270 => 381,  1263 => 379,  1258 => 376,  1252 => 375,  1250 => 374,  1247 => 373,  1241 => 372,  1233 => 370,  1225 => 368,  1222 => 367,  1218 => 366,  1214 => 365,  1204 => 364,  1197 => 362,  1192 => 359,  1186 => 358,  1184 => 357,  1174 => 356,  1167 => 354,  1162 => 351,  1156 => 350,  1154 => 349,  1144 => 348,  1137 => 346,  1124 => 342,  1117 => 340,  1112 => 337,  1106 => 336,  1104 => 335,  1094 => 334,  1087 => 332,  1074 => 328,  1067 => 326,  1062 => 323,  1056 => 322,  1054 => 321,  1044 => 320,  1037 => 318,  1032 => 315,  1026 => 314,  1024 => 313,  1014 => 312,  1007 => 310,  1000 => 308,  995 => 307,  990 => 306,  988 => 305,  981 => 300,  976 => 298,  971 => 297,  966 => 295,  961 => 294,  959 => 293,  951 => 290,  945 => 286,  940 => 284,  935 => 283,  930 => 281,  925 => 280,  923 => 279,  917 => 276,  911 => 272,  906 => 270,  901 => 269,  896 => 267,  891 => 266,  889 => 265,  883 => 262,  878 => 260,  872 => 256,  866 => 255,  864 => 254,  858 => 253,  853 => 251,  848 => 248,  842 => 247,  840 => 246,  834 => 245,  829 => 243,  824 => 241,  820 => 239,  814 => 238,  811 => 237,  806 => 234,  800 => 233,  798 => 232,  785 => 228,  777 => 225,  770 => 224,  767 => 223,  762 => 220,  756 => 219,  754 => 218,  741 => 214,  733 => 211,  726 => 210,  723 => 209,  718 => 206,  712 => 205,  710 => 204,  697 => 200,  689 => 197,  682 => 196,  679 => 195,  674 => 192,  668 => 191,  666 => 190,  662 => 189,  654 => 188,  646 => 187,  641 => 185,  634 => 184,  631 => 183,  626 => 180,  620 => 179,  618 => 178,  608 => 177,  601 => 175,  594 => 174,  591 => 173,  586 => 170,  580 => 169,  578 => 168,  568 => 167,  561 => 165,  554 => 164,  551 => 163,  546 => 160,  540 => 159,  538 => 158,  535 => 157,  528 => 156,  523 => 155,  517 => 154,  514 => 153,  509 => 151,  503 => 150,  500 => 149,  497 => 148,  493 => 147,  488 => 145,  481 => 144,  478 => 143,  473 => 140,  467 => 139,  465 => 138,  462 => 137,  455 => 136,  450 => 135,  444 => 134,  441 => 133,  436 => 131,  430 => 130,  427 => 129,  424 => 128,  420 => 127,  415 => 125,  408 => 124,  405 => 123,  400 => 120,  394 => 119,  392 => 118,  389 => 117,  383 => 116,  375 => 114,  367 => 112,  364 => 111,  360 => 110,  356 => 109,  350 => 108,  343 => 106,  336 => 105,  333 => 104,  330 => 103,  326 => 102,  322 => 100,  316 => 99,  314 => 98,  308 => 97,  303 => 95,  298 => 92,  292 => 91,  290 => 90,  284 => 89,  279 => 87,  274 => 84,  268 => 83,  266 => 82,  260 => 81,  255 => 79,  250 => 76,  244 => 75,  242 => 74,  236 => 73,  231 => 71,  225 => 67,  219 => 66,  211 => 64,  203 => 62,  200 => 61,  196 => 60,  190 => 57,  185 => 55,  174 => 48,  168 => 47,  166 => 46,  153 => 45,  148 => 44,  146 => 43,  142 => 42,  134 => 36,  129 => 34,  125 => 33,  121 => 32,  116 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_form.twig", "");
    }
}
