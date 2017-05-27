<?php

/* menu\index.html */
class __TwigTemplate_99851bd76d026c7dec7176ab4e405a31c6ad3ef5288c1c3d0a8b950d264d5da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "menu\\index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "public/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      菜单管理
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>控制面板</a></li>
      <li class=\"active\">菜单管理</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <div class=\"box box-primary\">
      <div class=\"box-body\">
          <a class=\"btn btn-success btn-flat\" href=\"/admin/blog/save\">
            <i class=\"fa fa-plus\"></i> 添加菜单
          </a>
      </div>
    </div>
    <div class=\"nav-tabs-custom\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\">前台菜单</a></li>
        <li><a href=\"#tab_2\" data-toggle=\"tab\">后台菜单</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab_1\">
          <table id=\"table1\" class=\"table table-bordered table-hover text-center \">
            <thead>
            <tr class=\"gradeX\">
              <th>ID</th>
              <th>菜单名</th>
              <th>URL</th>
              <th>上级菜单</th>
              <th>状态</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 42
            echo "            <tr align=\"center\">
              <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()), "html", null, true);
            echo "</td>
              <th>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "parent_name", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 47
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "status", array()) == 1)) {
                echo "启用";
            } else {
                echo "禁用";
            }
            echo "</th>
              <td>
                <a class=\"btn btn-xs btn-success btn-flat\" href=\"/admin/menu/save?id=";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "id", array()), "html", null, true);
            echo "\">
                  <i class=\"fa fa-edit\"></i> 编辑
                </a>&nbsp;&nbsp;
                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "status", array()) == 1)) {
                // line 53
                echo "                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"/admin/menu/off?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "id", array()), "html", null, true);
                echo "\">
                  <i class=\"fa fa-close\"></i> 禁用
                </a>
                ";
            } else {
                // line 56
                echo "禁用
                <a class=\"btn btn-xs bg-maroon btn-flat\" href=\"/admin/menu/on?id=";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "id", array()), "html", null, true);
                echo "\">
                  <i class=\"fa fa-check\"></i> 启用
                </a>
                ";
            }
            // line 61
            echo "              </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </tbody>
          </table>
        </div>
        <div class=\"tab-pane\" id=\"tab_2\">
          <table id=\"table2\" class=\"table table-bordered table-hover text-center \">
            <thead>
            <tr class=\"gradeX\">
              <th>ID</th>
              <th>菜单名</th>
              <th>图标class</th>
              <th>URL</th>
              <th>上级菜单</th>
              <th>状态</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["amenus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 82
            echo "            <tr align=\"center\">
              <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "icon", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()), "html", null, true);
            echo "</td>
              <th>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "parent_name", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 88
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "status", array()) == 1)) {
                echo "启用";
            } else {
                echo "禁用";
            }
            echo "</th>
              <td>
                <a class=\"btn btn-xs btn-success btn-flat\" href=\"/admin/menu/save?id=";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "id", array()), "html", null, true);
            echo "\">
                  <i class=\"fa fa-edit\"></i> 编辑
                </a>&nbsp;&nbsp;
                ";
            // line 93
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "status", array()) == 1)) {
                // line 94
                echo "                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"/admin/menu/off?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "id", array()), "html", null, true);
                echo "\">
                  <i class=\"fa fa-close\"></i> 禁用
                </a>
                ";
            } else {
                // line 97
                echo "禁用
                <a class=\"btn btn-xs bg-maroon btn-flat\" href=\"/admin/menu/on?id=";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "id", array()), "html", null, true);
                echo "\">
                  <i class=\"fa fa-check\"></i> 启用
                </a>
                ";
            }
            // line 102
            echo "              </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "menu\\index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 105,  218 => 102,  211 => 98,  208 => 97,  200 => 94,  198 => 93,  192 => 90,  183 => 88,  179 => 87,  175 => 86,  171 => 85,  167 => 84,  163 => 83,  160 => 82,  156 => 81,  137 => 64,  129 => 61,  122 => 57,  119 => 56,  111 => 53,  109 => 52,  103 => 49,  94 => 47,  90 => 46,  86 => 45,  82 => 44,  78 => 43,  75 => 42,  71 => 41,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"public/base.html\" %}
{% block content %}
    <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      菜单管理
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>控制面板</a></li>
      <li class=\"active\">菜单管理</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <div class=\"box box-primary\">
      <div class=\"box-body\">
          <a class=\"btn btn-success btn-flat\" href=\"/admin/blog/save\">
            <i class=\"fa fa-plus\"></i> 添加菜单
          </a>
      </div>
    </div>
    <div class=\"nav-tabs-custom\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\">前台菜单</a></li>
        <li><a href=\"#tab_2\" data-toggle=\"tab\">后台菜单</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab_1\">
          <table id=\"table1\" class=\"table table-bordered table-hover text-center \">
            <thead>
            <tr class=\"gradeX\">
              <th>ID</th>
              <th>菜单名</th>
              <th>URL</th>
              <th>上级菜单</th>
              <th>状态</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            {% for menu in menus %}
            <tr align=\"center\">
              <td>{{ menu.id }}</td>
              <td>{{ menu.name }}</td>
              <td>{{ menu.uri }}</td>
              <th>{{ menu.parent_name }}</th>
              <th>{% if menu.status == 1 %}启用{% else %}禁用{% endif %}</th>
              <td>
                <a class=\"btn btn-xs btn-success btn-flat\" href=\"/admin/menu/save?id={{ menu.id }}\">
                  <i class=\"fa fa-edit\"></i> 编辑
                </a>&nbsp;&nbsp;
                {% if menu.status == 1 %}
                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"/admin/menu/off?id={{ menu.id }}\">
                  <i class=\"fa fa-close\"></i> 禁用
                </a>
                {% else %}禁用
                <a class=\"btn btn-xs bg-maroon btn-flat\" href=\"/admin/menu/on?id={{ menu.id }}\">
                  <i class=\"fa fa-check\"></i> 启用
                </a>
                {% endif %}
              </td>
            </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
        <div class=\"tab-pane\" id=\"tab_2\">
          <table id=\"table2\" class=\"table table-bordered table-hover text-center \">
            <thead>
            <tr class=\"gradeX\">
              <th>ID</th>
              <th>菜单名</th>
              <th>图标class</th>
              <th>URL</th>
              <th>上级菜单</th>
              <th>状态</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            {% for menu in amenus %}
            <tr align=\"center\">
              <td>{{ menu.id }}</td>
              <td>{{ menu.name }}</td>
              <td>{{ menu.icon }}</td>
              <td>{{ menu.uri }}</td>
              <th>{{ menu.parent_name }}</th>
              <th>{% if menu.status == 1 %}启用{% else %}禁用{% endif %}</th>
              <td>
                <a class=\"btn btn-xs btn-success btn-flat\" href=\"/admin/menu/save?id={{ menu.id }}\">
                  <i class=\"fa fa-edit\"></i> 编辑
                </a>&nbsp;&nbsp;
                {% if menu.status == 1 %}
                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"/admin/menu/off?id={{ menu.id }}\">
                  <i class=\"fa fa-close\"></i> 禁用
                </a>
                {% else %}禁用
                <a class=\"btn btn-xs bg-maroon btn-flat\" href=\"/admin/menu/on?id={{ menu.id }}\">
                  <i class=\"fa fa-check\"></i> 启用
                </a>
                {% endif %}
              </td>
            </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
{% endblock %}
", "menu\\index.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\Menu\\index.html");
    }
}
