<?php

/* role\save.html */
class __TwigTemplate_987c3a684d082d2327188fc317bc6017b8fb542b41e157b4069f0f4dcdb36f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "role\\save.html", 1);
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
        echo "  <section class=\"content-header\">
    <h1>
      添加角色
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"/admin/blog/index\"><i class=\"fa fa-dashboard\"></i>角色管理</a></li>
      <li class=\"active\">添加角色</li>
    </ol>
  </section>
  <section class=\"content\">
    <div class=\"box box-primary\">
      <form class=\"\" role=\"form\">
        <div class=\"box-body\">
          <div class=\"form-group\">
            <div class=\"row\">
            <div class=\"col-md-1 text-center\">
              <label>角色名称</label>
            </div>
            <div class=\"col-md-6\">
              <input type=\"text\" class=\"form-control\" id=\"\">
            </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-md-1 text-center\">
                <label>角色描述</label>
              </div>
              <div class=\"col-md-6\">
                <textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter ...\"></textarea>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-1 control-label\">状态</label>
            <div class=\"col-sm-2\">
              <label>
                <input type=\"radio\" name=\"r3\" class=\"flat-red\" checked> 开启
              </label>
            </div>
            <div class=\"col-sm-2\">
              <label>
                <input type=\"radio\" name=\"r3\" class=\"flat-red\"> 关闭
              </label>
            </div>
            <span class=\"col-sm-6\"></span>
          </div>
        </div>
        <div class=\"box-footer\">
          <button type=\"submit\" class=\"btn btn-primary\">保存</button>
        </div>
      </form>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "role\\save.html";
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
  <section class=\"content-header\">
    <h1>
      添加角色
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"/admin/blog/index\"><i class=\"fa fa-dashboard\"></i>角色管理</a></li>
      <li class=\"active\">添加角色</li>
    </ol>
  </section>
  <section class=\"content\">
    <div class=\"box box-primary\">
      <form class=\"\" role=\"form\">
        <div class=\"box-body\">
          <div class=\"form-group\">
            <div class=\"row\">
            <div class=\"col-md-1 text-center\">
              <label>角色名称</label>
            </div>
            <div class=\"col-md-6\">
              <input type=\"text\" class=\"form-control\" id=\"\">
            </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-md-1 text-center\">
                <label>角色描述</label>
              </div>
              <div class=\"col-md-6\">
                <textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter ...\"></textarea>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-1 control-label\">状态</label>
            <div class=\"col-sm-2\">
              <label>
                <input type=\"radio\" name=\"r3\" class=\"flat-red\" checked> 开启
              </label>
            </div>
            <div class=\"col-sm-2\">
              <label>
                <input type=\"radio\" name=\"r3\" class=\"flat-red\"> 关闭
              </label>
            </div>
            <span class=\"col-sm-6\"></span>
          </div>
        </div>
        <div class=\"box-footer\">
          <button type=\"submit\" class=\"btn btn-primary\">保存</button>
        </div>
      </form>
    </div>
  </section>
{% endblock %}
", "role\\save.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\Role\\save.html");
    }
}
