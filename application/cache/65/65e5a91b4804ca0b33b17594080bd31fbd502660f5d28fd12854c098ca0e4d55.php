<?php

/* blog\info.html */
class __TwigTemplate_bd217a32c606797e0b7d1ddabfd899ce5e9c1ee6c947c485cb5c0c16b744bf8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "blog\\info.html", 1);
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
      博文预览
    </h1>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <div class=\"box-header with-border\">
      <h2>文章标题</h2>
    </div>
    <div class=\"box-body\">
      文章内容
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "blog\\info.html";
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
      博文预览
    </h1>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <div class=\"box-header with-border\">
      <h2>文章标题</h2>
    </div>
    <div class=\"box-body\">
      文章内容
    </div>
  </section>
{% endblock %}
", "blog\\info.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\blog\\info.html");
    }
}
