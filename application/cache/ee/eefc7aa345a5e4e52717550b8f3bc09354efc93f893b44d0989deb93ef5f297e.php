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
          <table id=\"example1\" class=\"table table-bordered table-hover text-center \">
            <thead>
            <tr class=\"gradeX\">
              <th>ID</th>
              <th>菜单名</th>
              <th>URL</th>
              <th>上级菜单</th>
              <th>状态</th>
              <th>创建时间</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr align=\"center\">
              <td>1</td>
              <td>热门推荐</td>
              <td>http://blog.wjlike.com</td>
              <th> -- </th>
              <th>启用</th>
              <td>2017-04-25 10:25:13</td>
              <td>
                <a class=\"btn btn-xs btn-success btn-flat\" href=\"/admin/blog/save?id=1\">
                  <i class=\"fa fa-edit\"></i> 编辑
                </a>&nbsp;&nbsp;
                <a class=\"btn btn-xs bg-maroon btn-flat\" href=\"/admin/blog/info?id=1\">
                  <i class=\"fa fa-check\"></i> 启用
                </a>&nbsp;&nbsp;
                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"/admin/blog/info?id=1\">
                  <i class=\"fa fa-close\"></i> 禁用
                </a>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <div class=\"tab-pane\" id=\"tab_2\">
          <table id=\"example1\" class=\"table table-bordered table-hover text-center \">
            <thead>
            <tr class=\"gradeX\">
              <th>ID</th>
              <th>菜单名</th>
              <th>图标class</th>
              <th>URL</th>
              <th>上级菜单</th>
              <th>状态</th>
              <th>创建时间</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr align=\"center\">
              <td>1</td>
              <td>热门推荐</td>
              <td>fa-circle-o</td>
              <td>http://blog.wjlike.com</td>
              <th> -- </th>
              <th>启用</th>
              <td>2017-04-25 10:25:13</td>
              <td>
                <a class=\"btn btn-xs btn-success btn-flat\" href=\"/admin/blog/save?id=1\">
                  <i class=\"fa fa-edit\"></i> 编辑
                </a>&nbsp;&nbsp;
                <a class=\"btn btn-xs bg-maroon btn-flat\" href=\"/admin/blog/info?id=1\">
                  <i class=\"fa fa-check\"></i> 启用
                </a>&nbsp;&nbsp;
                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"/admin/blog/info?id=1\">
                  <i class=\"fa fa-close\"></i> 禁用
                </a>
              </td>
            </tr>
            </tbody>
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
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
          <table id=\"example1\" class=\"table table-bordered table-hover text-center \">
            <thead>
            <tr class=\"gradeX\">
              <th>ID</th>
              <th>菜单名</th>
              <th>URL</th>
              <th>上级菜单</th>
              <th>状态</th>
              <th>创建时间</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr align=\"center\">
              <td>1</td>
              <td>热门推荐</td>
              <td>http://blog.wjlike.com</td>
              <th> -- </th>
              <th>启用</th>
              <td>2017-04-25 10:25:13</td>
              <td>
                <a class=\"btn btn-xs btn-success btn-flat\" href=\"/admin/blog/save?id=1\">
                  <i class=\"fa fa-edit\"></i> 编辑
                </a>&nbsp;&nbsp;
                <a class=\"btn btn-xs bg-maroon btn-flat\" href=\"/admin/blog/info?id=1\">
                  <i class=\"fa fa-check\"></i> 启用
                </a>&nbsp;&nbsp;
                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"/admin/blog/info?id=1\">
                  <i class=\"fa fa-close\"></i> 禁用
                </a>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <div class=\"tab-pane\" id=\"tab_2\">
          <table id=\"example1\" class=\"table table-bordered table-hover text-center \">
            <thead>
            <tr class=\"gradeX\">
              <th>ID</th>
              <th>菜单名</th>
              <th>图标class</th>
              <th>URL</th>
              <th>上级菜单</th>
              <th>状态</th>
              <th>创建时间</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr align=\"center\">
              <td>1</td>
              <td>热门推荐</td>
              <td>fa-circle-o</td>
              <td>http://blog.wjlike.com</td>
              <th> -- </th>
              <th>启用</th>
              <td>2017-04-25 10:25:13</td>
              <td>
                <a class=\"btn btn-xs btn-success btn-flat\" href=\"/admin/blog/save?id=1\">
                  <i class=\"fa fa-edit\"></i> 编辑
                </a>&nbsp;&nbsp;
                <a class=\"btn btn-xs bg-maroon btn-flat\" href=\"/admin/blog/info?id=1\">
                  <i class=\"fa fa-check\"></i> 启用
                </a>&nbsp;&nbsp;
                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"/admin/blog/info?id=1\">
                  <i class=\"fa fa-close\"></i> 禁用
                </a>
              </td>
            </tr>
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
