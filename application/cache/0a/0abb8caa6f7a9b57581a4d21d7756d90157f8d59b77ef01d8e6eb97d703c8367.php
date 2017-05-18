<?php

/* public/base.phtml */
class __TwigTemplate_6d8185413308e8273c60f899707ae6b0b13c3c95bd0d72e2e5dc0b5ae759720d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headMenu' => array($this, 'block_headMenu'),
            'leftMenu' => array($this, 'block_leftMenu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>Taurasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"/static/manage/bootstrap/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"/static/manage/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"/static/manage/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"/static/manage/dist/css/AdminLTE.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"/static/manage/dist/css/skins/_all-skins.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"/static/manage/html5shiv.min.js\"></script>
  <script src=\"/static/manage/respond.min.js\"></script>
  <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">
<!--引入顶部栏文件-->
";
        // line 32
        $this->displayBlock('headMenu', $context, $blocks);
        // line 139
        echo "<!-- 引入左侧菜单栏 -->
";
        // line 140
        $this->displayBlock('leftMenu', $context, $blocks);
        // line 206
        echo "<div class=\"content-wrapper\">
";
        // line 207
        $this->displayBlock('content', $context, $blocks);
        // line 209
        echo "</div>
<footer class=\"main-footer\">
<div class=\"pull-right hidden-xs\">
  <b>Version</b> 1.0.0
</div>
<strong>Copyright &copy; 2017-01 <a href=\"javascript:;\">utilities management system ums(Basic)</a>.</strong> All rights
reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"/static/manage/plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"/static/manage/bootstrap/js/bootstrap.min.js\"></script>
<!-- SlimScroll -->
<script src=\"/static/manage/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- FastClick -->
<script src=\"/static/manage/plugins/fastclick/fastclick.js\"></script>
<!-- AdminLTE App -->
<script src=\"/static/manage/dist/js/app.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"/static/manage/dist/js/demo.js\"></script>
</body>
</html>";
    }

    // line 32
    public function block_headMenu($context, array $blocks = array())
    {
        // line 33
        echo "<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"#\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><b>Tas</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><b>Taurasi</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </a>
      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <li class=\"dropdown messages-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-envelope-o\"></i>
              <span class=\"label label-success\">4</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">你有4条新消息</li>
              <li>
                <ul class=\"menu\">
                  <li>
                    <a href=\"#\">
                      <div class=\"pull-left\">
                        <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                      </div>
                      <h4>
                        测试组
                        <small><i class=\"fa fa-clock-o\"></i> 5 分钟前</small>
                      </h4>
                      <p>为什么不做工具化测试?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"footer\"><a href=\"#\">查看全部</a></li>
            </ul>
          </li>
          <!-- 通知 -->
          <li class=\"dropdown notifications-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-bell-o\"></i>
              <span class=\"label label-warning\">10</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">你有10条通知</li>
              <li>
                <ul class=\"menu\">
                  <li>
                    <a href=\"#\">
                      <i class=\"fa fa-users text-aqua\"></i> 今日新增5个注册用户
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"footer\"><a href=\"#\">查看全部</a></li>
            </ul>
          </li>
          <!-- 用户账户 -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "userTitle", array()), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"user-header\">
                <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">

                <p>
                ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "userName", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "userTitle", array()), "html", null, true);
        echo "
                  <small>最新登录时间：";
        // line 110
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "loginTime", array()), "Y-m-d"), "html", null, true);
        echo "</small>
                </p>
              </li>
              <!--<li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-6 text-center\">
                    <a href=\"#\">粉丝</a>
                  </div>
                  <div class=\"col-xs-6 text-center\">
                    <a href=\"#\">好友</a>
                  </div>
                </div>
              </li>-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"https://github.com/wujing0508\" class=\"btn btn-default btn-flat\">作者主页</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"/admin/login/logout\" class=\"btn btn-default btn-flat\">退出登录</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
";
    }

    // line 140
    public function block_leftMenu($context, array $blocks = array())
    {
        // line 141
        echo "<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
      <ul class=\"sidebar-menu\">
        <li class=\"treeview active\">
          <a href=\"javascript:;\">
            <i class=\"fa fa-dashboard\"></i> <span>系统</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"/admin/index/index\"><i class=\"fa fa-circle-o\"></i>系统设置</a></li>
            <li><a href=\"/admin/log/index\"><i class=\"fa fa-circle-o\"></i>系统日志</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-files-o\"></i>
            <span>一个数字标识</span>
            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
          </a>
          <ul class=\"treeview-menu\">
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-share\"></i> <span>多级菜单</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 一级 </a></li>
            <li>
              <a href=\"#\"><i class=\"fa fa-circle-o\"></i> 一级
                <span class=\"pull-right-container\">
                  <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 二级 </a></li>
                <li>
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> 二级 
                    <span class=\"pull-right-container\">
                      <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                  </a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 三级 </a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 三级 </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 一级 </a></li>
          </ul>
        </li>
        <li><a href=\"#\"><i class=\"fa fa-book\"></i> <span>操作文档</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
";
    }

    // line 207
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "public/base.phtml";
    }

    public function getDebugInfo()
    {
        return array (  289 => 207,  221 => 141,  218 => 140,  185 => 110,  179 => 109,  169 => 102,  98 => 33,  95 => 32,  67 => 209,  65 => 207,  62 => 206,  60 => 140,  57 => 139,  55 => 32,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>Taurasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"/static/manage/bootstrap/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"/static/manage/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"/static/manage/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"/static/manage/dist/css/AdminLTE.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"/static/manage/dist/css/skins/_all-skins.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"/static/manage/html5shiv.min.js\"></script>
  <script src=\"/static/manage/respond.min.js\"></script>
  <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">
<!--引入顶部栏文件-->
{% block headMenu %}
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"#\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><b>Tas</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><b>Taurasi</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </a>
      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <li class=\"dropdown messages-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-envelope-o\"></i>
              <span class=\"label label-success\">4</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">你有4条新消息</li>
              <li>
                <ul class=\"menu\">
                  <li>
                    <a href=\"#\">
                      <div class=\"pull-left\">
                        <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                      </div>
                      <h4>
                        测试组
                        <small><i class=\"fa fa-clock-o\"></i> 5 分钟前</small>
                      </h4>
                      <p>为什么不做工具化测试?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"footer\"><a href=\"#\">查看全部</a></li>
            </ul>
          </li>
          <!-- 通知 -->
          <li class=\"dropdown notifications-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-bell-o\"></i>
              <span class=\"label label-warning\">10</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">你有10条通知</li>
              <li>
                <ul class=\"menu\">
                  <li>
                    <a href=\"#\">
                      <i class=\"fa fa-users text-aqua\"></i> 今日新增5个注册用户
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"footer\"><a href=\"#\">查看全部</a></li>
            </ul>
          </li>
          <!-- 用户账户 -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">{{global.admin.userTitle}}</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"user-header\">
                <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">

                <p>
                {{ global.admin.userName }} - {{global.admin.userTitle}}
                  <small>最新登录时间：{{global.admin.loginTime|date(\"Y-m-d\")}}</small>
                </p>
              </li>
              <!--<li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-6 text-center\">
                    <a href=\"#\">粉丝</a>
                  </div>
                  <div class=\"col-xs-6 text-center\">
                    <a href=\"#\">好友</a>
                  </div>
                </div>
              </li>-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"https://github.com/wujing0508\" class=\"btn btn-default btn-flat\">作者主页</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"/admin/login/logout\" class=\"btn btn-default btn-flat\">退出登录</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
{% endblock %}
<!-- 引入左侧菜单栏 -->
{% block leftMenu %}
<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
      <ul class=\"sidebar-menu\">
        <li class=\"treeview active\">
          <a href=\"javascript:;\">
            <i class=\"fa fa-dashboard\"></i> <span>系统</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"/admin/index/index\"><i class=\"fa fa-circle-o\"></i>系统设置</a></li>
            <li><a href=\"/admin/log/index\"><i class=\"fa fa-circle-o\"></i>系统日志</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-files-o\"></i>
            <span>一个数字标识</span>
            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
          </a>
          <ul class=\"treeview-menu\">
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-share\"></i> <span>多级菜单</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 一级 </a></li>
            <li>
              <a href=\"#\"><i class=\"fa fa-circle-o\"></i> 一级
                <span class=\"pull-right-container\">
                  <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 二级 </a></li>
                <li>
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> 二级 
                    <span class=\"pull-right-container\">
                      <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                  </a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 三级 </a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 三级 </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> 一级 </a></li>
          </ul>
        </li>
        <li><a href=\"#\"><i class=\"fa fa-book\"></i> <span>操作文档</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
{% endblock %}
<div class=\"content-wrapper\">
{% block content %}
{% endblock %}
</div>
<footer class=\"main-footer\">
<div class=\"pull-right hidden-xs\">
  <b>Version</b> 1.0.0
</div>
<strong>Copyright &copy; 2017-01 <a href=\"javascript:;\">utilities management system ums(Basic)</a>.</strong> All rights
reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"/static/manage/plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"/static/manage/bootstrap/js/bootstrap.min.js\"></script>
<!-- SlimScroll -->
<script src=\"/static/manage/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- FastClick -->
<script src=\"/static/manage/plugins/fastclick/fastclick.js\"></script>
<!-- AdminLTE App -->
<script src=\"/static/manage/dist/js/app.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"/static/manage/dist/js/demo.js\"></script>
</body>
</html>", "public/base.html", "D:\\Code\\Yaf\\application\\modules\\admin\\views\\public\\base.html");
    }
}
