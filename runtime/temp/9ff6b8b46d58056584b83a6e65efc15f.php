<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:62:"F:\site\nouya_rs\public/../nyinside/index\view\Page\first.html";i:1534840909;s:58:"F:\site\nouya_rs\nyinside\index\view\Template\fw_base.html";i:1535701797;s:55:"F:\site\nouya_rs\nyinside\index\view\Common\header.html";i:1534834417;s:56:"F:\site\nouya_rs\nyinside\index\view\Common\sidebar.html";i:1536135632;s:57:"F:\site\nouya_rs\nyinside\index\view\Common\sub_menu.html";i:1535164543;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <title>诺亚业务管理</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- 顶部导航-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">人事管理</a>
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
    <!-- Navbar Right Menu-->
    <div class="navbar-custom-menu">
      <ul class="top-nav">
        <!--Notification Menu-->
        <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="dropdown-menu">
            <li class="not-head">You have 4 new notifications.</li>
            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
            <li class="not-footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu">
            <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> 个性设置</a></li>
            <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> 我的资料</a></li>
            <li><a href="<?php echo url('index/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> 登出</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>


      <!-- 左侧竖导航条-->
      <aside class="main-sidebar hidden-print">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image"><img class="img-circle" src="/images/user.png" alt="User Image"></div>
      <div class="pull-left info">
        <p>雷雷</p>
        <p class="designation">行政内勤</p>
      </div>
    </div>


    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">
      <?php foreach($base_info['menu'] as $k=>$vo): ?>
      
      <li class="<?php if($vo['subflag']): ?>treeview<?php endif; if($k == $base_info['mdu_key']): ?> active<?php endif; ?>"><a href="<?php echo $vo['action']; ?>"><i class="fa <?php echo $vo['icon']; ?>"></i><span><?php echo $vo['name']; ?></span>
        <?php if($vo['subflag']): ?><i class="fa fa-angle-right"></i><?php endif; ?>
      </a>
        
     </li>

      <?php endforeach; ?>
      <!--li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>UI Elements</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="bootstrap-components.html"><i class="fa fa-circle-o"></i> Bootstrap Elements</a></li>
          <li><a href="http://fontawesome.io/icons/" target="_blank"><i class="fa fa-circle-o"></i> Font Icons</a></li>
          <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a></li>
          <li><a href="widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
        </ul>
      </li-->
      <!--li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
      <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="form-components.html"><i class="fa fa-circle-o"></i> Form Components</a></li>
          <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Components</a></li>
          <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
          <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
        </ul>
      </li>
      <li class="treeview active"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
          <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
        </ul>
      </li>
      <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
          <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Login Page</a></li>
          <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
          <li><a href="page-user.html"><i class="fa fa-circle-o"></i> User Page</a></li>
          <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
          <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
          <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
          <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Error Page</a></li>
        </ul>
      </li>
      <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
            </ul>
          </li>
        </ul>
      </li-->
    </ul>
  </section>
</aside>



      <div class="content-wrapper">

      <!--如果含子菜单就包含进来-->
      <?php if(($base_info['sub_menu'] != null)): ?>
        <div class="page-title" style="border-top:1px solid #eee">
  <div>
<?php if(is_array($base_info['sub_menu']) || $base_info['sub_menu'] instanceof \think\Collection || $base_info['sub_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $base_info['sub_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <a class="btn btn-primary icon-btn mr-10" href="<?php echo url($item['action']);; ?>" target="_blank"><i class="fa fa-file"></i><?php echo $item['name']; ?></a>
<?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>

      <?php endif; ?>


        <div class="page-title">
          <div>
            <h1><i class="fa fa-laptop"></i> 我的工作台</h1>
            <p>工作汇总与提示</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>



        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">日历</h3>
              <p><div class="row">
                <div class="col-md-12">
                  <div class="card row">


                    <!--div class="col-md-3">
                      <div id="external-events">
                        <h4 class="mb-20">可拖放事件</h4>
                        <div class="fc-event">考勤</div>
                        <div class="fc-event">调查</div>
                        <div class="fc-event">工资计算</div>
                        <div class="fc-event">计划安排</div>
                        <div class="fc-event">完成核实</div>
                        <p class="animated-checkbox mt-20">
                          <label>
                            <input id="drop-remove" type="checkbox"><span class="label-text">删除后下调</span>
                          </label>
                        </p>
                      </div>
                    </div-->



                    <div class="col-md-12">
                      <div id="calendar"></div>
                    </div>
                  </div>
                </div>
              </div></p>

              <p class="mt-40 mb-20">
                <a class="btn btn-primary icon-btn mr-10" href="http://pratikborsadiya.in/blog/vali-admin" target="_blank"><i class="fa fa-file"></i>Docs</a>
                <a class="btn btn-info icon-btn mr-10" href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i class="fa fa-github"></i>GitHub</a>
                <a class="btn btn-success icon-btn" href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">当日记事</h3>
              <p> 世界上最遥远的距离，不是生与死的距离，不是天各一方，而是，我就站在你的面前，你却不知道我爱你。   </p><p>--张小娴作品《荷包里的单人床》</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">快捷操作</h3>
              <p>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>导入花名册</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>添加在职员工</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>添加待入职</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>入职、转正管理</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>离职管理</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>企业短信</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>员工测评</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>背景调查</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>人事报表</a>
                <a class="btn btn-primary icon-btn mr-10" href="###" target="_blank"><i class="fa"></i>基础设置</a>

              </p>
            </div>
          </div>
        </div>



        更多内容 <a href="###" target="_blank" title="模板">底部</a> - Collect from <a href="###" title="网页模板" target="_blank">网页模板</a>
      </div>
    </div>




    <!-- Javascripts-->
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/pace.min.js"></script>
    <script src="/js/main.js"></script>

    <script type="text/javascript" src="/js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="/js/plugins/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="/js/plugins/fullcalendar.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

      	$('#external-events .fc-event').each(function() {

      		// store data so the calendar knows to render an event upon drop
      		$(this).data('event', {
      			title: $.trim($(this).text()), // use the element's text as the event title
      			stick: true // maintain when user navigates (see docs on the renderEvent method)
      		});

      		// make the event draggable using jQuery UI
      		$(this).draggable({
      			zIndex: 999,
      			revert: true,      // will cause the event to go back to its
      			revertDuration: 0  //  original position after the drag
      		});

      	});

      	$('#calendar').fullCalendar({
      		header: {
      			left: 'prev,next today',
      			center: 'title',
      			right: 'month,agendaWeek,agendaDay'
      		},
      		editable: true,
      		droppable: true, // this allows things to be dropped onto the calendar
      		drop: function() {
      			// is the "remove after drop" checkbox checked?
      			if ($('#drop-remove').is(':checked')) {
      				// if so, remove the element from the "Draggable Events" list
      				$(this).remove();
      			}
      		}
      	});


      });
    </script>
  </body>
</html>
