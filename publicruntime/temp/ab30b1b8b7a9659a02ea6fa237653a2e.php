<?php if (!defined('THINK_PATH')) exit(); /*a:18:{s:61:"F:\site\nouya_rs\public/../nyinside/index\view\Page\main.html";i:1535164347;s:63:"F:\site\nouya_rs\nyinside\index\view\Template\fw_workbanch.html";i:1537347671;s:55:"F:\site\nouya_rs\nyinside\index\view\Common\header.html";i:1534834417;s:56:"F:\site\nouya_rs\nyinside\index\view\Common\sidebar.html";i:1536135632;s:59:"F:\site\nouya_rs\nyinside\index\view\Common\breadcrumb.html";i:1536299769;s:57:"F:\site\nouya_rs\nyinside\index\view\Common\sub_menu.html";i:1535164543;s:57:"F:\site\nouya_rs\nyinside\index\view\Common\nav_btns.html";i:1536030587;s:55:"F:\site\nouya_rs\nyinside\index\view\Common\search.html";i:1536027116;s:60:"F:\site\nouya_rs\nyinside\index\view\Common\list_header.html";i:1536029147;s:58:"F:\site\nouya_rs\nyinside\index\view\Common\list_body.html";i:1536029104;s:60:"F:\site\nouya_rs\nyinside\index\view\Common\list_footer.html";i:1535177426;s:58:"F:\site\nouya_rs\nyinside\index\view\Common\edit_form.html";i:1535177435;s:57:"F:\site\nouya_rs\nyinside\index\view\Common\add_form.html";i:1537163805;s:53:"F:\site\nouya_rs\nyinside\index\view\Base\onerow.html";i:1536203945;s:53:"F:\site\nouya_rs\nyinside\index\view\Base\tworow.html";i:1536825227;s:56:"F:\site\nouya_rs\nyinside\index\view\Common\cmplate.html";i:1535177711;s:55:"F:\site\nouya_rs\nyinside\index\view\Common\upfile.html";i:1537421581;s:55:"F:\site\nouya_rs\nyinside\index\view\Common\footer.html";i:1535167707;}*/ ?>
<!--当前模板默认只改变工作区-->
<?php $time = time(); ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="/css/main.css?t=<?php echo $time; ?>">
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


      <!-- 右侧顶部面包屑-->
      <div class="page-title">
          <div>
            <h1><i class="fa <?php echo $base_info['mdu']['icon']; ?>"></i> <?php echo $base_info['mdu']['name']; ?></h1>
            <!--p>工作汇总与提示</p-->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#"><?php echo $base_info['ctl']['name']; ?></a></li>
            </ul>
          </div>
</div>


        <!--如果含子菜单就包含进来-->
      <?php if(($base_info['sub_menu'] != null)): ?>
        <div class="page-title" style="border-top:1px solid #eee">
  <div>
<?php if(is_array($base_info['sub_menu']) || $base_info['sub_menu'] instanceof \think\Collection || $base_info['sub_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $base_info['sub_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <a class="btn btn-primary icon-btn mr-10" href="<?php echo url($item['action']);; ?>" target="_blank"><i class="fa fa-file"></i><?php echo $item['name']; ?></a>
<?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>

      <?php endif; if(is_array($pagegroup) || $pagegroup instanceof \think\Collection || $pagegroup instanceof \think\Paginator): $i = 0; $__LIST__ = $pagegroup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;switch($item): case "nav_btns": ?><div class="page-title">
  <div><h4>操作</h4></div>
  <div>

    <a class="btn btn-primary btn-flat" href="<?php echo url('add_form'); ?>"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
</div>
<?php break; case "search": ?><div class="page-title">

  <div class="row">
    <div class="col-md-12">
      search
    </div>
  </div>

</div>
<?php break; case "list_header": ?><div class="page-title"></div>
<?php break; case "list_body": ?><div class="row page-title">
  <div class="col-md-12">

        <table class="table table-hover table-bordered" id="sampleTable">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011/07/25</td>
              <td>$170,750</td>
            </tr>
            <tr>
              <td>Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
              <td>2009/01/12</td>
              <td>$86,000</td>
            </tr>
            <tr>
              <td>Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2012/03/29</td>
              <td>$433,060</td>
            </tr>
            <tr>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>33</td>
              <td>2008/11/28</td>
              <td>$162,700</td>
            </tr>
            <tr>
              <td>Brielle Williamson</td>
              <td>Integration Specialist</td>
              <td>New York</td>
              <td>61</td>
              <td>2012/12/02</td>
              <td>$372,000</td>
            </tr>
            <tr>
              <td>Herrod Chandler</td>
              <td>Sales Assistant</td>
              <td>San Francisco</td>
              <td>59</td>
              <td>2012/08/06</td>
              <td>$137,500</td>
            </tr>
            <tr>
              <td>Rhona Davidson</td>
              <td>Integration Specialist</td>
              <td>Tokyo</td>
              <td>55</td>
              <td>2010/10/14</td>
              <td>$327,900</td>
            </tr>
            <tr>
              <td>Colleen Hurst</td>
              <td>Javascript Developer</td>
              <td>San Francisco</td>
              <td>39</td>
              <td>2009/09/15</td>
              <td>$205,500</td>
            </tr>
            <tr>
              <td>Sonya Frost</td>
              <td>Software Engineer</td>
              <td>Edinburgh</td>
              <td>23</td>
              <td>2008/12/13</td>
              <td>$103,600</td>
            </tr>
            <tr>
              <td>Jena Gaines</td>
              <td>Office Manager</td>
              <td>London</td>
              <td>30</td>
              <td>2008/12/19</td>
              <td>$90,560</td>
            </tr>
            <tr>
              <td>Quinn Flynn</td>
              <td>Support Lead</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2013/03/03</td>
              <td>$342,000</td>
            </tr>
            <tr>
              <td>Charde Marshall</td>
              <td>Regional Director</td>
              <td>San Francisco</td>
              <td>36</td>
              <td>2008/10/16</td>
              <td>$470,600</td>
            </tr>
            <tr>
              <td>Haley Kennedy</td>
              <td>Senior Marketing Designer</td>
              <td>London</td>
              <td>43</td>
              <td>2012/12/18</td>
              <td>$313,500</td>
            </tr>
            <tr>
              <td>Tatyana Fitzpatrick</td>
              <td>Regional Director</td>
              <td>London</td>
              <td>19</td>
              <td>2010/03/17</td>
              <td>$385,750</td>
            </tr>
            <tr>
              <td>Michael Silva</td>
              <td>Marketing Designer</td>
              <td>London</td>
              <td>66</td>
              <td>2012/11/27</td>
              <td>$198,500</td>
            </tr>
            <tr>
              <td>Paul Byrd</td>
              <td>Chief Financial Officer (CFO)</td>
              <td>New York</td>
              <td>64</td>
              <td>2010/06/09</td>
              <td>$725,000</td>
            </tr>
            <tr>
              <td>Gloria Little</td>
              <td>Systems Administrator</td>
              <td>New York</td>
              <td>59</td>
              <td>2009/04/10</td>
              <td>$237,500</td>
            </tr>
            <tr>
              <td>Bradley Greer</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>41</td>
              <td>2012/10/13</td>
              <td>$132,000</td>
            </tr>
            <tr>
              <td>Dai Rios</td>
              <td>Personnel Lead</td>
              <td>Edinburgh</td>
              <td>35</td>
              <td>2012/09/26</td>
              <td>$217,500</td>
            </tr>
            <tr>
              <td>Jenette Caldwell</td>
              <td>Development Lead</td>
              <td>New York</td>
              <td>30</td>
              <td>2011/09/03</td>
              <td>$345,000</td>
            </tr>
            <tr>
              <td>Yuri Berry</td>
              <td>Chief Marketing Officer (CMO)</td>
              <td>New York</td>
              <td>40</td>
              <td>2009/06/25</td>
              <td>$675,000</td>
            </tr>
            <tr>
              <td>Caesar Vance</td>
              <td>Pre-Sales Support</td>
              <td>New York</td>
              <td>21</td>
              <td>2011/12/12</td>
              <td>$106,450</td>
            </tr>
            <tr>
              <td>Doris Wilder</td>
              <td>Sales Assistant</td>
              <td>Sidney</td>
              <td>23</td>
              <td>2010/09/20</td>
              <td>$85,600</td>
            </tr>
            <tr>
              <td>Angelica Ramos</td>
              <td>Chief Executive Officer (CEO)</td>
              <td>London</td>
              <td>47</td>
              <td>2009/10/09</td>
              <td>$1,200,000</td>
            </tr>
            <tr>
              <td>Gavin Joyce</td>
              <td>Developer</td>
              <td>Edinburgh</td>
              <td>42</td>
              <td>2010/12/22</td>
              <td>$92,575</td>
            </tr>
            <tr>
              <td>Jennifer Chang</td>
              <td>Regional Director</td>
              <td>Singapore</td>
              <td>28</td>
              <td>2010/11/14</td>
              <td>$357,650</td>
            </tr>
            <tr>
              <td>Brenden Wagner</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>
              <td>28</td>
              <td>2011/06/07</td>
              <td>$206,850</td>
            </tr>
            <tr>
              <td>Fiona Green</td>
              <td>Chief Operating Officer (COO)</td>
              <td>San Francisco</td>
              <td>48</td>
              <td>2010/03/11</td>
              <td>$850,000</td>
            </tr>
            <tr>
              <td>Shou Itou</td>
              <td>Regional Marketing</td>
              <td>Tokyo</td>
              <td>20</td>
              <td>2011/08/14</td>
              <td>$163,000</td>
            </tr>
            <tr>
              <td>Michelle House</td>
              <td>Integration Specialist</td>
              <td>Sidney</td>
              <td>37</td>
              <td>2011/06/02</td>
              <td>$95,400</td>
            </tr>
            <tr>
              <td>Suki Burks</td>
              <td>Developer</td>
              <td>London</td>
              <td>53</td>
              <td>2009/10/22</td>
              <td>$114,500</td>
            </tr>
            <tr>
              <td>Prescott Bartlett</td>
              <td>Technical Author</td>
              <td>London</td>
              <td>27</td>
              <td>2011/05/07</td>
              <td>$145,000</td>
            </tr>
            <tr>
              <td>Gavin Cortez</td>
              <td>Team Leader</td>
              <td>San Francisco</td>
              <td>22</td>
              <td>2008/10/26</td>
              <td>$235,500</td>
            </tr>
            <tr>
              <td>Martena Mccray</td>
              <td>Post-Sales support</td>
              <td>Edinburgh</td>
              <td>46</td>
              <td>2011/03/09</td>
              <td>$324,050</td>
            </tr>
            <tr>
              <td>Unity Butler</td>
              <td>Marketing Designer</td>
              <td>San Francisco</td>
              <td>47</td>
              <td>2009/12/09</td>
              <td>$85,675</td>
            </tr>
            <tr>
              <td>Howard Hatfield</td>
              <td>Office Manager</td>
              <td>San Francisco</td>
              <td>51</td>
              <td>2008/12/16</td>
              <td>$164,500</td>
            </tr>
            <tr>
              <td>Hope Fuentes</td>
              <td>Secretary</td>
              <td>San Francisco</td>
              <td>41</td>
              <td>2010/02/12</td>
              <td>$109,850</td>
            </tr>
            <tr>
              <td>Vivian Harrell</td>
              <td>Financial Controller</td>
              <td>San Francisco</td>
              <td>62</td>
              <td>2009/02/14</td>
              <td>$452,500</td>
            </tr>
            <tr>
              <td>Timothy Mooney</td>
              <td>Office Manager</td>
              <td>London</td>
              <td>37</td>
              <td>2008/12/11</td>
              <td>$136,200</td>
            </tr>
            <tr>
              <td>Jackson Bradshaw</td>
              <td>Director</td>
              <td>New York</td>
              <td>65</td>
              <td>2008/09/26</td>
              <td>$645,750</td>
            </tr>
            <tr>
              <td>Olivia Liang</td>
              <td>Support Engineer</td>
              <td>Singapore</td>
              <td>64</td>
              <td>2011/02/03</td>
              <td>$234,500</td>
            </tr>
            <tr>
              <td>Bruno Nash</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>38</td>
              <td>2011/05/03</td>
              <td>$163,500</td>
            </tr>
            <tr>
              <td>Sakura Yamamoto</td>
              <td>Support Engineer</td>
              <td>Tokyo</td>
              <td>37</td>
              <td>2009/08/19</td>
              <td>$139,575</td>
            </tr>
            <tr>
              <td>Thor Walton</td>
              <td>Developer</td>
              <td>New York</td>
              <td>61</td>
              <td>2013/08/11</td>
              <td>$98,540</td>
            </tr>
            <tr>
              <td>Finn Camacho</td>
              <td>Support Engineer</td>
              <td>San Francisco</td>
              <td>47</td>
              <td>2009/07/07</td>
              <td>$87,500</td>
            </tr>
            <tr>
              <td>Serge Baldwin</td>
              <td>Data Coordinator</td>
              <td>Singapore</td>
              <td>64</td>
              <td>2012/04/09</td>
              <td>$138,575</td>
            </tr>
            <tr>
              <td>Zenaida Frank</td>
              <td>Software Engineer</td>
              <td>New York</td>
              <td>63</td>
              <td>2010/01/04</td>
              <td>$125,250</td>
            </tr>
            <tr>
              <td>Zorita Serrano</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>
              <td>56</td>
              <td>2012/06/01</td>
              <td>$115,000</td>
            </tr>
            <tr>
              <td>Jennifer Acosta</td>
              <td>Junior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>43</td>
              <td>2013/02/01</td>
              <td>$75,650</td>
            </tr>
            <tr>
              <td>Cara Stevens</td>
              <td>Sales Assistant</td>
              <td>New York</td>
              <td>46</td>
              <td>2011/12/06</td>
              <td>$145,600</td>
            </tr>
            <tr>
              <td>Hermione Butler</td>
              <td>Regional Director</td>
              <td>London</td>
              <td>47</td>
              <td>2011/03/21</td>
              <td>$356,250</td>
            </tr>
            <tr>
              <td>Lael Greer</td>
              <td>Systems Administrator</td>
              <td>London</td>
              <td>21</td>
              <td>2009/02/27</td>
              <td>$103,500</td>
            </tr>
            <tr>
              <td>Jonas Alexander</td>
              <td>Developer</td>
              <td>San Francisco</td>
              <td>30</td>
              <td>2010/07/14</td>
              <td>$86,500</td>
            </tr>
            <tr>
              <td>Shad Decker</td>
              <td>Regional Director</td>
              <td>Edinburgh</td>
              <td>51</td>
              <td>2008/11/13</td>
              <td>$183,000</td>
            </tr>
            <tr>
              <td>Michael Bruce</td>
              <td>Javascript Developer</td>
              <td>Singapore</td>
              <td>29</td>
              <td>2011/06/27</td>
              <td>$183,000</td>
            </tr>
            <tr>
              <td>Donna Snider</td>
              <td>Customer Support</td>
              <td>New York</td>
              <td>27</td>
              <td>2011/01/25</td>
              <td>$112,000</td>
            </tr>
          </tbody>
        </table>
  </div>
</div>
<?php break; case "list_footer": break; case "edit_form": break; case "add_form": $form = \think\form\Form::form(); ?>

<div class="row">
    <div class="col-md-12">

          <form action="<?php echo url('add'); ?>" method="post" id="form1">
          <div class="card">
          <h3 class="card-title"><?php echo $base_info['ctl']['name']; ?> - 新增</h3>

              <?php foreach($form_fileds as $row): if((count($row) == 1)): ?>
                  <!-- 单列分隔  -->
<div class="row">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="col-lg-1 control-label" for="inputEmail">Email</label>
      <div class="col-lg-11">

        <input class="form-control" id="inputEmail" type="text" placeholder="Email">

      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>              
                <?php else: ?>
                  <!-- 两列分隔  -->
              <div class="row">


                <?php foreach($row as $fitem): ?>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="inputEmail"><?php echo $fitem['attr']['name']; ?></label>
                        <div class="col-lg-10">
                          <?php echo $form->get_form_item($fitem, null); ?>
                        </div>
                    </div>
                  </div>
                <?php endforeach; ?>



              </div>


              <div class="clearfix"></div>
                <?php endif; endforeach; ?>


              <div class="clearfix"></div>    
              <div class="row">
                <div class="col-md-12" style="text-align:center;">
                <?php echo $form->form_button('btn1', '取消',['class'=>'btn btn-default','type'=> 'reset']); ?>
                <?php echo $form->form_button('btn2', '保存',['class'=>'btn btn-primary']); ?>
                </div>
              </div>
          
          </div>
          </form>

    </div>





</div>



{block name="ftscript"}<script src="/js/laydate/laydate.js"></script>{/block}
<?php break; case "cmplate": break; case "upfile": ?><div class="row">
    <div class="col-md-12">
    <div class="card">



<form method="post" enctype="multipart/form-data" action="<?php echo Url('upload'); ?>"　class="ui form">

      <table>
        <tr><td><input type="file" name="excel"  class="ac_file"/></td>
          <td><input type="submit" value="导入" class="ui button"/></td></tr>
      </table>
      <div class="grouped fields">
        <label>选择导入当月数据表格</label>



<table>


    <tr><td>
      <div class="field">
        <div class="ui slider checkbox">
          <input type="radio" name="tbname" checked="checked" value="tablename">
          <label>花名册名录</label>
        </div>
      </div>
    </td>
    <td>
    
    </td>
  </tr>



</table>

      </div>
    </form>






    </div>
    </div>
</div><?php break; default: ?>未定义模块
      <?php endswitch; endforeach; endif; else: echo "" ;endif; ?>






      更多内容 <a href="###" target="_blank" title="模板">底部</a> - Collect from <a href="###" title="网页模板" target="_blank">网页模板</a>

      </div>
    </div>




    <!-- Javascripts-->
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/pace.min.js"></script>
    <script src="/js/main.js"></script>


  </body>
</html>
