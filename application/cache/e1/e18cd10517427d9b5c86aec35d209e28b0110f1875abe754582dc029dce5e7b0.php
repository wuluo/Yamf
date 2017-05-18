<?php

/* public/base.html */
class __TwigTemplate_c48ef166508a8166d1a6a05a30c5a10046215d8b35d0dc075563ea3e97deb97f extends Twig_Template
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
        // line 99
        echo "<!-- 引入左侧菜单栏 -->
";
        // line 100
        $this->displayBlock('leftMenu', $context, $blocks);
        // line 134
        echo "<div class=\"content-wrapper\">
";
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "</div>
</div>
<footer class=\"main-footer\">
<div class=\"pull-right hidden-xs\">
  <b>Version</b> 1.0.0
</div>
<strong>Copyright &copy; <a href=\"http://www.miitbeian.gov.cn/\">京ICP备15024649号-1</a></strong>
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
          <!-- 用户账户 -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "userTitle", array()), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "userName", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "userTitle", array()), "html", null, true);
        echo "
                  <small>最新登录时间：";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "admin", array()), "loginTime", array()), "Y-m-d"), "html", null, true);
        echo "</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Followers</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Sales</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"https://github.com/wuluo\" class=\"btn btn-default btn-flat\">GitHub主页</a>
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

    // line 100
    public function block_leftMenu($context, array $blocks = array())
    {
        // line 101
        echo "<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
      <ul class=\"sidebar-menu\">
        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "menus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 105
            echo "        <li class=\"treeview ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "child", array())) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["childs"]) {
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["childs"], "uri", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "nowUri", array()))) {
                        echo "active";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "\">
          <a href=\"javascript:;\">
            <i class=\"fa ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "icon", array()), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "name", array()), "html", null, true);
            echo "</span>
            ";
            // line 108
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "child", array())) {
                // line 109
                echo "            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            ";
            }
            // line 113
            echo "          </a>
          ";
            // line 114
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "child", array())) {
                // line 115
                echo "          <ul class=\"treeview-menu\">
            ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["childs"]) {
                    // line 117
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["childs"], "uri", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["global"] ?? null), "nowUri", array()))) {
                        // line 118
                        echo "            <li class=\"active\">
              ";
                    } else {
                        // line 120
                        echo "            <li>
            ";
                    }
                    // line 122
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["childs"], "uri", array()), "html", null, true);
                    echo "\"><i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["childs"], "icon", array()), "html", null, true);
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["childs"], "name", array()), "html", null, true);
                    echo "</a>
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "          </ul>
          ";
            }
            // line 127
            echo "        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
";
    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "public/base.html";
    }

    public function getDebugInfo()
    {
        return array (  277 => 135,  269 => 129,  262 => 127,  258 => 125,  244 => 122,  240 => 120,  236 => 118,  233 => 117,  229 => 116,  226 => 115,  224 => 114,  221 => 113,  215 => 109,  213 => 108,  207 => 107,  190 => 105,  186 => 104,  181 => 101,  178 => 100,  140 => 65,  134 => 64,  123 => 56,  98 => 33,  95 => 32,  67 => 137,  65 => 135,  62 => 134,  60 => 100,  57 => 99,  55 => 32,  22 => 1,);
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
          <!-- 用户账户 -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">{{global.admin.userTitle}}</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"/static/manage/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  {{ global.admin.userName }} - {{global.admin.userTitle}}
                  <small>最新登录时间：{{global.admin.loginTime|date(\"Y-m-d\")}}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Followers</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Sales</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"https://github.com/wuluo\" class=\"btn btn-default btn-flat\">GitHub主页</a>
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
        {% for menu in global.menus %}
        <li class=\"treeview {% if menu.child %}{% for childs in menu.child %}{% if childs.uri == global.nowUri %}active{% endif %}{% endfor %}{% endif %}\">
          <a href=\"javascript:;\">
            <i class=\"fa {{ menu.icon }}\"></i> <span>{{ menu.name }}</span>
            {% if menu.child %}
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            {% endif %}
          </a>
          {% if menu.child %}
          <ul class=\"treeview-menu\">
            {% for childs in menu.child %}
            {% if childs.uri == global.nowUri %}
            <li class=\"active\">
              {% else %}
            <li>
            {% endif %}
              <a href=\"{{ childs.uri }}\"><i class=\"fa {{ childs.icon }}\"></i>{{ childs.name }}</a>
            </li>
            {% endfor %}
          </ul>
          {% endif %}
        </li>
        {% endfor %}
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
{% endblock %}
<div class=\"content-wrapper\">
{% block content %}
{% endblock %}
</div>
</div>
<footer class=\"main-footer\">
<div class=\"pull-right hidden-xs\">
  <b>Version</b> 1.0.0
</div>
<strong>Copyright &copy; <a href=\"http://www.miitbeian.gov.cn/\">京ICP备15024649号-1</a></strong>
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
