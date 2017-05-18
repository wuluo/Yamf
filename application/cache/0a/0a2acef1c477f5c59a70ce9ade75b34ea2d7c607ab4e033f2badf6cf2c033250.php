<?php

/* bcate\save.html */
class __TwigTemplate_000e63f3fe64f35a8b983bc204876155c9f43855a54829419ee17b98006afdbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/resource.html", "bcate\\save.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "public/resource.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"box box-primary\">
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
        // line 22
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
";
    }

    public function getTemplateName()
    {
        return "bcate\\save.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"public/resource.html\" %}
{% block content %}
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
{% endblock %}
", "bcate\\save.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\bcate\\save.html");
    }
}
