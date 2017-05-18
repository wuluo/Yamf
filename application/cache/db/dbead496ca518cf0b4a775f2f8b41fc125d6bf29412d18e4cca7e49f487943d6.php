<?php

/* blog\save.html */
class __TwigTemplate_5c9cb69285ea6ed00e1885b4f5fb750a3e80ad79b38fbe3a90805fc062317f7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "blog\\save.html", 1);
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
      博文编辑
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"/admin/blog/index\"><i class=\"fa fa-dashboard\"></i>博文管理</a></li>
      <li class=\"active\">博文编辑</li>
    </ol>
  </section>
  <section class=\"content\">
    <div class=\"box box-primary\">
      <form class=\"\" role=\"form\">
        <div class=\"box-body\">
          <div class=\"form-group\">
            <div class=\"row\">
            <div class=\"col-md-1 text-center\">
              <label>标题</label>
            </div>
            <div class=\"col-md-6\">
              <input type=\"text\" class=\"form-control\" id=\"\">
            </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-md-1 text-center\">
                <label>作者</label>
              </div>
              <div class=\"col-md-6\">
                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "userName", array()), "html", null, true);
        echo "\">
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-md-1 text-center\">
                <label>分类</label>
              </div>
              <div class=\"col-md-6\">
                <select class=\"form-control\">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
              <div class=\"col-md-2\">
                <a class=\"btn btn-success btn-flat\" href=\"\">
                  <i class=\"fa fa-plus\"></i> 添加分类
                </a>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-md-1 text-center\">
                <label>内容</label>
              </div>
              <div class=\"col-md-11\">
                <textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter ...\"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class=\"box-footer\">
          <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
      </form>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "blog\\save.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 32,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"public/base.html\" %}
{% block content %}
  <section class=\"content-header\">
    <h1>
      博文编辑
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"/admin/blog/index\"><i class=\"fa fa-dashboard\"></i>博文管理</a></li>
      <li class=\"active\">博文编辑</li>
    </ol>
  </section>
  <section class=\"content\">
    <div class=\"box box-primary\">
      <form class=\"\" role=\"form\">
        <div class=\"box-body\">
          <div class=\"form-group\">
            <div class=\"row\">
            <div class=\"col-md-1 text-center\">
              <label>标题</label>
            </div>
            <div class=\"col-md-6\">
              <input type=\"text\" class=\"form-control\" id=\"\">
            </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-md-1 text-center\">
                <label>作者</label>
              </div>
              <div class=\"col-md-6\">
                <input type=\"text\" class=\"form-control\" placeholder=\"{{global.admin.userName}}\">
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-md-1 text-center\">
                <label>分类</label>
              </div>
              <div class=\"col-md-6\">
                <select class=\"form-control\">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
              <div class=\"col-md-2\">
                <a class=\"btn btn-success btn-flat\" href=\"\">
                  <i class=\"fa fa-plus\"></i> 添加分类
                </a>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-md-1 text-center\">
                <label>内容</label>
              </div>
              <div class=\"col-md-11\">
                <textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter ...\"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class=\"box-footer\">
          <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
      </form>
    </div>
  </section>
{% endblock %}
", "blog\\save.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\blog\\save.html");
    }
}
