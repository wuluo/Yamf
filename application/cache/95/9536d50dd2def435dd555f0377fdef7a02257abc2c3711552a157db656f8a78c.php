<?php

/* log\index.html */
class __TwigTemplate_8dcaa2b75cbe22d243da0b3c84034663796e3d3fd99808c0f3a3017caa2283f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "log\\index.html", 1);
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
      系统日志
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>系统</a></li>
      <li class=\"active\">系统日志</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <div class=\"box box-primary\">
      <div class=\"box-header\">     
      </div>
      <div class=\"box-body\">
        <div class=\"input-group col-sm-3\">
          <div class=\"input-group-btn\">
             <button type=\"button\" class=\"btn btn-info disabled\">开始时间</button>
          </div>
          <input type=\"text\" class=\"form-control\">
        </div>
        <div class=\"input-group col-sm-3\">
            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-info disabled\">结束时间</button>
            </div>
            <input type=\"text\" class=\"form-control\">
        </div>
        <div class=\"input-group col-sm-3\">
          <input type=\"text\" class=\"form-control\">
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-info btn-flat\"><i class=\"fa fa-fw fa-search\"></i>&nbsp;搜日志</button>
          </span>
        </div>
      </div>
    </div>
    <div class=\"box box-primary\">
      <div class=\"box-body\">
        <div class=\"row\">
        <table id=\"example1\" class=\"table table-bordered\">
          <thead>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.0
            </td>
            <td>Win 95+</td>
            <td>5</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          </tbody>
        </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"dataTables_paginate paging_simple_numbers\">
              <ul class=\"pagination\">
                <li class=\"paginate_button previous disabled\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a></li>
                <li class=\"paginate_button active\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"1\" tabindex=\"0\">1</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"2\" tabindex=\"0\">2</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"3\" tabindex=\"0\">3</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"4\" tabindex=\"0\">4</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"5\" tabindex=\"0\">5</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"6\" tabindex=\"0\">6</a></li>
                <li class=\"paginate_button next\" id=\"example1_next\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <!-- /.content -->
</div>
";
    }

    public function getTemplateName()
    {
        return "log\\index.html";
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
      系统日志
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>系统</a></li>
      <li class=\"active\">系统日志</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <div class=\"box box-primary\">
      <div class=\"box-header\">     
      </div>
      <div class=\"box-body\">
        <div class=\"input-group col-sm-3\">
          <div class=\"input-group-btn\">
             <button type=\"button\" class=\"btn btn-info disabled\">开始时间</button>
          </div>
          <input type=\"text\" class=\"form-control\">
        </div>
        <div class=\"input-group col-sm-3\">
            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-info disabled\">结束时间</button>
            </div>
            <input type=\"text\" class=\"form-control\">
        </div>
        <div class=\"input-group col-sm-3\">
          <input type=\"text\" class=\"form-control\">
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-info btn-flat\"><i class=\"fa fa-fw fa-search\"></i>&nbsp;搜日志</button>
          </span>
        </div>
      </div>
    </div>
    <div class=\"box box-primary\">
      <div class=\"box-body\">
        <div class=\"row\">
        <table id=\"example1\" class=\"table table-bordered\">
          <thead>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.0
            </td>
            <td>Win 95+</td>
            <td>5</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          </tbody>
        </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"dataTables_paginate paging_simple_numbers\">
              <ul class=\"pagination\">
                <li class=\"paginate_button previous disabled\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a></li>
                <li class=\"paginate_button active\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"1\" tabindex=\"0\">1</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"2\" tabindex=\"0\">2</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"3\" tabindex=\"0\">3</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"4\" tabindex=\"0\">4</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"5\" tabindex=\"0\">5</a></li>
                <li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"6\" tabindex=\"0\">6</a></li>
                <li class=\"paginate_button next\" id=\"example1_next\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <!-- /.content -->
</div>
{% endblock %}
", "log\\index.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\log\\index.html");
    }
}
