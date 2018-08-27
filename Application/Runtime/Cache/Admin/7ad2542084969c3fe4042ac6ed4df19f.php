<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>">
<title>后台管理</title>
<script type="text/javascript" src="/bipin/static/a/resource/js/jquery.js"></script>
<script type="text/javascript" src="/bipin/static/a/resource/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/bipin/static/a/resource/js/admincp.js"></script>
<script type="text/javascript" src="/bipin/static/a/resource/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/bipin/static/a/resource/js/common.js" charset="utf-8"></script>
<link href="/bipin/static/a/default/css/skin_0.css" rel="stylesheet" type="text/css" id="cssfile2" />
<link href="/bipin/static/a/resource/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<link href="/bipin/static/a/default/css/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/bipin/static/a/default/css/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript" src="/bipin/static/a/resource/js/perfect-scrollbar.min.js"></script>

<script type="text/javascript">
SITEURL = '/';
RESOURCE_SITE_URL = 'resource';
MICROSHOP_SITE_URL = '/';
CIRCLE_SITE_URL = '/';
ADMIN_TEMPLATES_URL = 'default';
LOADING_IMAGE = 'default/images/loading.gif';
//换肤
cookie_skin = $.cookie("MyCssSkin");
if (cookie_skin) {
	$('#cssfile2').attr("href","default/css/"+ cookie_skin +".css");
}
</script>
</head>
<body>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<!-- 模板内容开始 -->
 
 <script type="text/javascript" src="/bipin/static/a/resource/js/jquery.mousewheel.js"></script>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>系统信息<!--上次登录的时间：2015-06-01 18:51:07--></h3>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <div class="info-panel">
    <dl class="member">
      <dt>
        <div class="ico"><i></i><sub title="会员总数"><span><em id="statistics_member"><?php echo ($usercount); ?></em></span></sub></div>
        <h3>会员</h3>
        <h5>新增会员</h5>
      </dt>
      <dd>
        <ul>
          <!--<li class="w50pre normal"><a href="index.php?act=member&op=member">本周新增<sub><em id="statistics_week_add_member"><?php echo ($usercount_week); ?></em></sub></a></li>-->
          <li class="w50pre normal"><a href="#">本周新增<sub><em id="statistics_week_add_member"><?php echo ($usercount_week); ?></em></sub></a></li>
          <!--<li class="w50pre none"><a href="index.php?act=predeposit&op=pd_cash_list">预存款提现<sub><em id="statistics_cashlist">0</em></sub></a></li>-->
          <!--<li class="w50pre none"><a href="<?php echo U('caiwulog');?>">财务操作日志<sub><em id="statistics_cashlist">0</em></sub></a></li>-->
          <li class="w50pre normal"><a href="<?php echo U('Users/istrue');?>">待审核<sub><em id="statistics_cashlist"><?php echo ($dsh); ?></em></sub></a></li>
        </ul>
      </dd>
    </dl>
    <!--<dl class="shop">-->
      <!--<dt>-->
        <!--<div class="ico"><i></i><sub title="新增报名数"><span><em id="statistics_store">10</em></span></sub></div>-->
        <!--<h3>经纪人之路</h3>-->
        <!--<h5>新增报名</h5>-->
      <!--</dt>-->
      <!--<dd>-->
        <!--<ul>-->
          <!--&lt;!&ndash;<li class="w20pre none"><a href="index.php?act=store&op=store_joinin">开店审核<sub><em id="statistics_store_joinin">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w20pre none"><a href="index.php?act=store&op=store_bind_class_applay_list&state=0">类目申请<sub><em id="statistics_store_bind_class_applay">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w20pre none"><a href="index.php?act=store&op=reopen_list&re_state=1">续签申请<sub><em id="statistics_store_reopen_applay">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w20pre none"><a href="index.php?act=store&op=store&store_type=expired">已到期<sub><em id="statistics_store_expired">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w20pre none"><a href="index.php?act=store&op=store&store_type=expire">即将到期<sub><em id="statistics_store_expire">0</em></sub></a></li>&ndash;&gt;-->

          <!--<li class="w33pre normal"><a href="#">待审核<sub><em id="statistics_store_joinin"><?php echo ($dsh); ?></em></sub></a></li>-->
          <!--<li class="w33pre normal"><a href="#">已通过<sub><em id="statistics_store_bind_class_applay"><?php echo ($ytg); ?></em></sub></a></li>-->
          <!--<li class="w33pre normal"><a href="#">已驳回<sub><em id="statistics_store_reopen_applay"><?php echo ($ybh); ?></em></sub></a></li>-->
          <!--&lt;!&ndash;<li class="w20pre none"><a href="#">已到期<sub><em id="statistics_store_expired">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w20pre none"><a href="#">即将到期<sub><em id="statistics_store_expire">0</em></sub></a></li>&ndash;&gt;-->
        <!--</ul>-->
      <!--</dd>-->
    <!--</dl>-->
    <!--<dl class="goods">-->
      <!--<dt>-->
        <!--<div class="ico"><i></i><sub title="添加权限账户"><span><em id="statistics_goods"><?php echo ($bankcount); ?></em></span></sub></div>-->
        <!--<h3>权限管理</h3>-->
        <!--<h5>权限分配/信息审核</h5>-->
      <!--</dt>-->
      <!--<dd>-->
        <!--<ul>-->
          <!--<li class="w25pre normal"><a href="index.php?act=goods&op=goods">本周新增<sub title=""><em id="statistics_week_add_product"><?php echo ($bankcount_week); ?></em></sub></a></li>-->
          <!--<li class="w25pre normal"><a href="index.php?act=goods&op=goods&type=waitverify&search_verify=10">待审核<sub><em id="statistics_product_verify"><?php echo ($bankcount_audit); ?></em></sub></a></li>-->
          <!--<li class="w25pre none"><a href="index.php?act=inform&op=inform_list">举报<sub><em id="statistics_inform_list">0</em></sub></a></li>-->
          <!--<li class="w25pre none"><a href="index.php?act=brand&op=brand_apply">品牌申请<sub><em id="statistics_brand_apply">0</em></sub></a></li>-->
        <!--</ul>-->
        <!--<?php if($_SESSION['user_auth']['uid'] == 1111111111): ?>-->
        <!--<ul>-->
          <!--<li class="w33pre"><a href="<?php echo U('addzhanghu');?>">添加管理员<sub title=""><em id="statistics_week_add_product"></em></sub></a></li>-->
          <!--<li class="w33pre normal"><a href="<?php echo U('zhanghu');?>">管理员列表<sub><em id="statistics_product_verify"><?php echo ($dsh1); ?></em></sub></a></li>-->
          <!--<li class="w34pre"><a href="<?php echo U('vipmima');?>">密码管理<sub><em id="statistics_inform_list"></em></sub></a></li>-->
          <!--<li class="w25pre none"><a href="">品牌申请<sub><em id="statistics_brand_apply">0</em></sub></a></li>-->
        <!--</ul>-->
          <!--<?php else: ?>-->
          <!--<ul>-->
            <!--<li class="w50pre normal"><a href="<?php echo U('addzhanghu');?>">添加管理员<sub title=""><em id="statistics_week_add_product"></em></sub></a></li>-->
            <!--<li class="w50pre normal"><a href="<?php echo U('zhanghu');?>">管理员列表<sub><em id="statistics_product_verify"><?php echo ($dsh1); ?></em></sub></a></li>-->
            <!--<li class="w34pre none"><a href="<?php echo U('vipmima');?>">vip密码设置<sub><em id="statistics_inform_list"></em></sub></a></li>-->
            <!--<li class="w25pre none"><a href="">品牌申请<sub><em id="statistics_brand_apply">0</em></sub></a></li>-->
          <!--</ul>-->

        <!--<?php endif; ?>-->
      <!--</dd>-->
    <!--</dl>-->
    <!--<dl class="trade">-->
      <!--<dt>-->
        <!--<div class="ico"><i></i><sub title="订单总数"><span><em id="statistics_order">555</em></span></sub></div>-->
        <!--<h3>交易</h3>-->
        <!--<h5>交易订单及投诉/举报</h5>-->
      <!--</dt>-->
      <!--<dd>-->
        <!--&lt;!&ndash;<ul>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w18pre none"><a href="index.php?act=refund&op=refund_manage">退款<sub><em id="statistics_refund"></em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w18pre none"><a href="index.php?act=return&op=return_manage">退货<sub><em id="statistics_return"></em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w25pre none"><a href="index.php?act=vr_refund&op=refund_manage">虚拟订单退款<sub><em id="statistics_vr_refund"></em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w18pre none"><a href="index.php?act=complain&op=complain_new_list">投诉<sub><em id="statistics_complain_new_list">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w20pre none"><a href="index.php?act=complain&op=complain_handle_list">待仲裁<sub><em id="statistics_complain_handle_list">0</em></sub></a></li>&ndash;&gt;-->
        <!--&lt;!&ndash;</ul>&ndash;&gt;-->
        <!--<ul>-->
          <!--<li class="w18pre none"><a href="#">退款<sub><em id="statistics_refund"></em></sub></a></li>-->
          <!--<li class="w18pre none"><a href="#">退货<sub><em id="statistics_return"></em></sub></a></li>-->
          <!--<li class="w25pre none"><a href="#">虚拟订单退款<sub><em id="statistics_vr_refund"></em></sub></a></li>-->
          <!--<li class="w18pre none"><a href="#">投诉<sub><em id="statistics_complain_new_list">0</em></sub></a></li>-->
          <!--<li class="w20pre none"><a href="#">待仲裁<sub><em id="statistics_complain_handle_list">0</em></sub></a></li>-->
        <!--</ul>-->
      <!--</dd>-->
    <!--</dl>-->
    <!--<dl class="operation">-->
      <!--<dt>-->
        <!--<div class="ico"><i></i></div>-->
        <!--<h3>运营</h3>-->
        <!--<h5>系统运营类设置及审核</h5>-->
      <!--</dt>-->
      <!--<dd>-->
        <!--&lt;!&ndash;<ul>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w15pre none"><a href="index.php?act=groupbuy&op=groupbuy_verify_list">抢购<sub><em id="statistics_groupbuy_verify_list">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w17pre none"><a href="index.php?act=pointorder&op=pointorder_list&porderstate=waitship">积分订单<sub><em id="statistics_points_order">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w17pre none"><a href="index.php?act=bill&op=show_statis&os_month=&query_store=&bill_state=2">账单审核<sub><em id="statistics_check_billno">0</em></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w17pre none"><a href="index.php?act=bill&op=show_statis&os_month=&query_store=&bill_state=3">账单支付<sub><em id="statistics_pay_billno">0</em></sub></a></li>&ndash;&gt;-->
        <!--&lt;!&ndash;</ul>&ndash;&gt;-->
        <!--<ul>-->
          <!--<li class="w15pre none"><a href="#">抢购<sub><em id="statistics_groupbuy_verify_list">0</em></sub></a></li>-->
          <!--<li class="w17pre none"><a href="#">积分订单<sub><em id="statistics_points_order">0</em></sub></a></li>-->
          <!--<li class="w17pre none"><a href="#">账单审核<sub><em id="statistics_check_billno">0</em></sub></a></li>-->
          <!--<li class="w17pre none"><a href="#">账单支付<sub><em id="statistics_pay_billno">0</em></sub></a></li>-->
        <!--</ul>-->
      <!--</dd>-->
    <!--</dl>-->

    
    <!--<dl class="system">-->
      <!--<dt>-->
        <!--<div class="ico"><i></i></div>-->
        <!--<h3><?php echo $lang['dashboard_welcome_sys_info'];?></h3>-->
        <!--<div id="system-info">-->
          <!--<ul>-->
            <!--<li>好商城V3 <span>201411158256</span></li>-->
            <!--<li><span>2017-01-01</span></li>-->
            <!--<li><span>WINNT</span></li>-->
            <!--<li>WEB <span>Apache/2.4.9 (Win64) PHP/5.5.12</span></li>-->
            <!--<li>PHP <span>5.5.12</span></li>-->
            <!--<li>MYSQL <span>5.6.17</span></li>-->
          <!--</ul>-->
        <!--</div>-->
      <!--</dt>-->
      <!--<dd>-->
        <!--<ul>-->
          <!--&lt;!&ndash;<li class="w50pre none"><a href="#" target="_blank">官方网站<sub></sub></a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li class="w50pre none"><a href="#" target="_blank">官方论坛<sub></sub></a></li>&ndash;&gt;-->
        <!--</ul>-->
      <!--</dd>-->
    <!--</dl>-->
    <div class="clear"></div>
    <div class="system-info"></div>
  </div>
</div>
<script type="text/javascript">
var normal = ['week_add_member','week_add_product'];
var work = ['store_joinin','store_bind_class_applay','store_reopen_applay','store_expired','store_expire','brand_apply','cashlist','groupbuy_verify_list','points_order','complain_new_list','complain_handle_list', 'product_verify','inform_list','refund','return','vr_refund','cms_article_verify','cms_picture_verify','circle_verify','check_billno','pay_billno','mall_consult','delivery_point','offline'];
//index.php?act=dashboard&op=statistics
$(document).ready(function(){
	$.getJSON("#", function(data){
	  $.each(data, function(k,v){
		  $("#statistics_"+k).html(v);
		  if (v!= 0 && $.inArray(k,work) !== -1){
			$("#statistics_"+k).parent().parent().parent().removeClass('none').addClass('high');
		  }else if (v == 0 && $.inArray(k,normal) !== -1){
			$("#statistics_"+k).parent().parent().parent().removeClass('normal').addClass('none');
		  }
	  });
	});
	//自定义滚定条
	$('#system-info').perfectScrollbar();
});
</script>


 
<!-- 模板内容结束 -->
</body>
</html>