<?php

/* index\profile.html */
class __TwigTemplate_b2b904ea70db2b986170e1e3118ae43a9b0120f02b7a574605e03b857aeb6c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "index\\profile.html", 1);
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
      个人设置
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>系统</a></li>
      <li class=\"active\">个人设置</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <div class=\"nav-tabs-custom\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\">资料设置</a></li>
          <li><a href=\"#tab_2\" data-toggle=\"tab\">修改密码</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab_1\">
            <div class=\"box box-info\">
              <div class=\"box-header\">
            </div>
            <form class=\"form-horizontal\">
              <div class=\"box-body\">
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">昵称</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"网站名称\" value=\"通用后台管理系统\">
                  </div>
                  <span class=\"col-sm-5\">昵称不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">真实姓名</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"网站名称\" value=\"通用后台管理系统\">
                  </div>
                  <span class=\"col-sm-5\">真实姓名不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">邮箱</label>
                  <div class=\"col-sm-5\">
                    <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"站长邮箱\" value=\"\">
                  </div>
                  <span class=\"col-sm-5\">邮箱不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">手机</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"备案信息\" value=\"\">
                  </div>
                  <span class=\"col-sm-5\">手机号不能为空</span>
                </div>
              </div>
              <!-- /.box-body -->
              <div class=\"box-footer\">
                <div class=\"col-sm-2\">
                </div>
                <div class=\"col-sm-2\">
                  <button type=\"submit\" class=\"btn btn-block btn-info\">保存</button>
                </div>
                <div class=\"col-sm-1\">
                </div>
                <div class=\"col-sm-2\">
                  <button type=\"submit\" class=\"btn btn-block btn-default pull-right\">取消</button>
                </div>
                <div class=\"col-sm-5\">
                </div>
              </div>
              <!-- /.box-footer -->
              </form>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab_2\">
            <div class=\"box box-info\">
              <div class=\"box-header\">
            </div>
            <form class=\"form-horizontal\">
              <div class=\"box-body\">
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">原始密码</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"SEO标题\" value=\"通用后台管理系统\">
                  </div>
                  <span class=\"col-sm-5\">原始密码不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">新密码</label>
                  <div class=\"col-sm-5\">
                    <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"SEO关键字\" value=\"\">
                  </div>
                  <span class=\"col-sm-5\">新密码不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">重复新密码</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"新密码\" value=\"\">
                  </div>
                  <span class=\"col-sm-5\"></span>
                </div>
              </div>
              <!-- /.box-body -->
              <div class=\"box-footer\">
                <div class=\"col-sm-2\">
                </div>
                <div class=\"col-sm-2\">
                  <button type=\"submit\" class=\"btn btn-block btn-info\">保存</button>
                </div>
                <div class=\"col-sm-1\">
                </div>
                <div class=\"col-sm-2\">
                  <button type=\"submit\" class=\"btn btn-block btn-default pull-right\">取消</button>
                </div>
                <div class=\"col-sm-5\">
                </div>
              </div>
              <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
        <!-- /.tab-content -->
      </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "index\\profile.html";
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
      个人设置
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>系统</a></li>
      <li class=\"active\">个人设置</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <div class=\"nav-tabs-custom\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\">资料设置</a></li>
          <li><a href=\"#tab_2\" data-toggle=\"tab\">修改密码</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab_1\">
            <div class=\"box box-info\">
              <div class=\"box-header\">
            </div>
            <form class=\"form-horizontal\">
              <div class=\"box-body\">
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">昵称</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"网站名称\" value=\"通用后台管理系统\">
                  </div>
                  <span class=\"col-sm-5\">昵称不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">真实姓名</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"网站名称\" value=\"通用后台管理系统\">
                  </div>
                  <span class=\"col-sm-5\">真实姓名不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">邮箱</label>
                  <div class=\"col-sm-5\">
                    <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"站长邮箱\" value=\"\">
                  </div>
                  <span class=\"col-sm-5\">邮箱不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">手机</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"备案信息\" value=\"\">
                  </div>
                  <span class=\"col-sm-5\">手机号不能为空</span>
                </div>
              </div>
              <!-- /.box-body -->
              <div class=\"box-footer\">
                <div class=\"col-sm-2\">
                </div>
                <div class=\"col-sm-2\">
                  <button type=\"submit\" class=\"btn btn-block btn-info\">保存</button>
                </div>
                <div class=\"col-sm-1\">
                </div>
                <div class=\"col-sm-2\">
                  <button type=\"submit\" class=\"btn btn-block btn-default pull-right\">取消</button>
                </div>
                <div class=\"col-sm-5\">
                </div>
              </div>
              <!-- /.box-footer -->
              </form>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab_2\">
            <div class=\"box box-info\">
              <div class=\"box-header\">
            </div>
            <form class=\"form-horizontal\">
              <div class=\"box-body\">
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">原始密码</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"SEO标题\" value=\"通用后台管理系统\">
                  </div>
                  <span class=\"col-sm-5\">原始密码不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">新密码</label>
                  <div class=\"col-sm-5\">
                    <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"SEO关键字\" value=\"\">
                  </div>
                  <span class=\"col-sm-5\">新密码不能为空</span>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">重复新密码</label>
                  <div class=\"col-sm-5\">
                    <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"新密码\" value=\"\">
                  </div>
                  <span class=\"col-sm-5\"></span>
                </div>
              </div>
              <!-- /.box-body -->
              <div class=\"box-footer\">
                <div class=\"col-sm-2\">
                </div>
                <div class=\"col-sm-2\">
                  <button type=\"submit\" class=\"btn btn-block btn-info\">保存</button>
                </div>
                <div class=\"col-sm-1\">
                </div>
                <div class=\"col-sm-2\">
                  <button type=\"submit\" class=\"btn btn-block btn-default pull-right\">取消</button>
                </div>
                <div class=\"col-sm-5\">
                </div>
              </div>
              <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
        <!-- /.tab-content -->
      </div>
  </section>
{% endblock %}
", "index\\profile.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\index\\profile.html");
    }
}
