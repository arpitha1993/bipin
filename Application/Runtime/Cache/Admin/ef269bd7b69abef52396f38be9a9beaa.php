<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <script type="text/javascript" src="/static/a/resource/js/jquery.js"></script>
    <script type="text/javascript" src="/static/a/resource/js/jquery.validation.min.js"></script>
    <script type="text/javascript" src="/static/a/resource/js/admincp.js"></script>
    <script type="text/javascript" src="/static/a/resource/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/static/a/layer/layer.js"></script>
    <script type="text/javascript" src="/static/a/resource/js/common.js" charset="utf-8"></script>
    <!--<script type="text/javascript" src="/static/a/home/js/common.js" charset="utf-8"></script>-->
<!--<script type="text/javascript" src="http://www.jeasyui.net/Public/js/easyui/jquery.easyui.min.js"></script>不知道干啥的-->
    <link href="/static/a/default/css/skin_0.css" rel="stylesheet" type="text/css" id="cssfil2" />
    <link href="/static/a/default/css/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="/static/a/default/css/font/font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->
<link href="/static/a/resource/easyui.css" rel="stylesheet" type="text/css" id="cssfile2" />
<link href="/static/a/resource/icon.css" rel="stylesheet" type="text/css" id="cssfile" />
<!--<script type="text/javascript" src="/static/a/resource/jquery-1.4.4.min.js"></script>-->

    <link href="/static/main/uploadify/uploadify.css" rel="stylesheet" type="text/css">    <script src="/static/main/uploadify/jquery.uploadify.min.js"></script>    <script>        $(function(){            $("#file").change(function() {                var $this = this.files[0];                $("#img").attr("src", getObjectURL($this));            })            // file 创建url()            function getObjectURL(file) {                var url = null;                if (window.createObjectURL != undefined) {                    url = window.createObjectURL(file)                } else if (window.URL != undefined) {                    url = window.URL.createObjectURL(file)                } else if (window.webkitURL != undefined) {                    url = window.webkitURL.createObjectURL(file)                }                return url            }        });    </script>

<script src="/static/a/resource/lib/js/jquery.iDialog.js" ></script>
<script src="/static/a/resource/lib/js/drag.js"></script>

<script>


    $(function(){

        $('.drag-box-3 .drag').each(function(index){
            $(this).myDrag({
                randomPosition:true,
                direction:'all',
                handler:false
            });
        });

    });
</script>
</head>
<body>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<!-- 模板内容开始 -->

    <style>        .required{width:100px;}    </style>    <div class="page">        <div class="fixed-bar">            <div class="item-title">                <h3> &nbsp;&nbsp;添加曲谱</h3>            </div>        </div>        <div class="fixed-empty"></div>            <table class="table tb-type2">                <tbody>                <form method="post" action="<?php echo U('News/up_qupu');?>" enctype="multipart/form-data">                    <tr class="noborder">                        <td class="required"><label for="thumb" class="validation">曲谱封面图：</label></td>                        <input id="iddd" name="iddd" type="hidden" class="txt valid" value="<?php echo ($news["id"]); ?>">                        <td class="vatop rowform">                            <?php if($_SESSION['thumb'] != ''): ?><img id="img" src="<?php echo ($_SESSION['thumb']); ?>" style="height:50px;width:50px;"/>                                <!--<input name="token" type="hidden" value="">-->                                <input name="file" type="file" id="file" />                                <?php else: ?>                                <img id="img" src="<?php echo ($news["thumb"]); ?>" style="height:50px;width:50px;"/>                                <input name="token" type="hidden" value="<?php echo ($news["thumb"]); ?>">                                <input name="file" type="file" id="file" /><?php endif; ?>                        </td>                        <td class="vatop tips"> <input type="submit" value="上传" id="tupian"/></td>                    </tr>                </form>                <form method="post" action="<?php echo U('News/up_aqupu');?>" enctype="multipart/form-data" >                    <tr class="noborder">                        <td class="required"><label for="workss" class="validation">曲谱文件多图上传：</label></td>                        <input id="idddd" name="idddd" type="hidden" class="txt valid" value="<?php echo ($news["id"]); ?>">                        <td class="vatop rowform">                            <?php if($_SESSION['workss'] != ''): ?><input name="file[]" type="file" id="file" multiple="multiple"/>                                    <?php if(is_array($_SESSION["worksss"])): $i = 0; $__LIST__ = $_SESSION["worksss"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i; if($s != ''): ?><img  src="<?php echo ($s); ?>" style="height:50px;width:50px;"/>&nbsp;<?php endif; endforeach; endif; else: echo "" ;endif; ?>                                    <?php else: ?>                                    <input name="file[]" type="file" id="file" multiple="multiple"/>                                <?php if(is_array($news["workss"])): $i = 0; $__LIST__ = $news["workss"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i; if($s != ''): ?><img  src="<?php echo ($s); ?>" style="height:50px;width:50px;"/>&nbsp;<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>                        </td>                        <br/>                        <td class="vatop tips"> <input type="submit" value="上传"/></td>                    </tr>                </form>                <form id="edit_form" method="post" action="" enctype="multipart/form-data">                <tr class="noborder">                    <td class="required"><label class="validation" >剧种大类：</label></td>                    <td class="vatop rowform">                        <select style="width:100px; " id="type1" name="type1">                            <?php if($news["type1"] == ''): ?><option value="">请选择剧种大类</option>                                <?php else: ?>                                <option value="<?php echo ($news['type1']); ?>"><?php echo (get_types($news['type1'])); ?></option><?php endif; ?>                            <?php if(is_array($position)): $i = 0; $__LIST__ = $position;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?><option value="<?php echo ($pro['id']); ?>"><?php echo ($pro['type_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                        </select>                        <select  id="type2" name="type2">                            <?php if($news["type2"] == ''): ?><option value="">请选择剧种小类..</option>                                <?php else: ?>                                <option value="<?php echo ($news['type2']); ?>"><?php echo (get_types($news['type2'])); ?></option><?php endif; ?>                        </select>                        <script>                            $("#type1").change(function(){                                var code=$(this).val();                                $.post("<?php echo U('News/get_type');?>",{pid:code}, function(data){                                    var str = "<option value=0 >请选择剧种小类..</option>";                                    for(var i=0; i< data.length; i++){                                        str = str + '<option value="' + data[i].id + '">' + data[i].type_name + '</option>';                                    }                                    document.getElementById("type2").innerHTML = str;                                })                            })                        </script>                    </td>                </tr>                <tr class="noborder">                    <td class="required"><label class="validation" for="news_title">曲谱名称：</label></td>                    <td class="vatop rowform">                        <input id="news_title" name="news_title" type="text" class="txt valid" value="<?php echo ($news["news_title"]); ?>">                    <td class="vatop tips"></td>                </tr>                    <!--图片-->                    <?php if($_SESSION['thumb'] != ''): ?><input id="thumb" name="thumb" type="hidden" class="txt valid" value="<?php echo ($_SESSION['thumb']); ?>">                        <?php else: ?>                        <input id="thumb" name="thumb" type="hidden" class="txt valid" value="<?php echo ($news["thumb"]); ?>"><?php endif; ?>                    <!--曲谱-->                    <?php if($_SESSION['workss'] != ''): ?><input id="workss" name="workss" type="hidden" class="txt valid" value="<?php echo ($_SESSION['workss']); ?>">                        <?php else: ?>                        <input id="workss" name="workss" type="hidden" class="txt valid" value="<?php echo ($news["workss"]); ?>"><?php endif; ?>                    <?php if($_SESSION['idd'] != ''): ?><input id="idd" name="idd" type="hidden" class="txt valid" value="<?php echo ($_SESSION['idd']); ?>">                        <?php else: ?>                        <input id="idd" name="idd" type="hidden" class="txt valid" value="<?php echo ($news["id"]); ?>"><?php endif; ?>                <tr class="noborder">                    <td class="required"><label class="validation" for="authors">作者信息：</label></td>                    <td class="vatop rowform">                        <input id="authors" name="authors" type="text" class="txt valid" value="<?php echo ($news["authors"]); ?>">                    <td class="vatop tips"></td>                </tr>                <tr class="noborder">                    <td class="required"><label class="validation" for="describes">曲谱简介：</label></td>                    <td class="vatop rowform">                        <input id="describes" name="describes" type="text" class="txt valid" value="<?php echo ($news["describes"]); ?>">                        <input id="content" name="content" type="hidden" class="txt valid" value="<?php echo ($news["describes"]); ?>">                    <td class="vatop tips"></td>                </tr>                <tr class="noborder">                    <td class="required"><label class="validation" for="toop">排序：</label></td>                    <td class="vatop rowform">                        <input id="toop" name="toop" type="text" class="txt valid" value="<?php echo ($news["toop"]); ?>">                    <br/>(越大越靠前)                    <td class="vatop tips"></td>                </tr>                </form>                </tbody>                <tfoot>                <tr>                    <td colspan="2" style="text-align: center;">                        <a id="back" href="javascript:void(0)" class="btn"><span>返回</span></a>                        <a id="submits" href="javascript:void(0)" class="btn"><span>提交</span></a>                    </td>                </tr>                </tfoot>            </table>    </div>    <script type="text/javascript" src="/static/a/resource/js/jquery-ui/jquery.ui.js"></script>    <script type="text/javascript" src="/static/a/resource/js/jquery-ui/i18n/zh-CN.js" charset="utf-8"></script>    <link rel="stylesheet" type="text/css" href="/static/a/resource/js/jquery-ui/themes/ui-lightness/jquery.ui.css"  />    <script type="text/javascript">        $(function(){            $("#submits").click(function(){                var news_title = $('#news_title').val();                if(news_title.length<1){                    alert('标题不能为空');                    return;                }                $('#edit_form').submit();            });            $("#back").click(function(){                history.go(-1);            });        });    </script>

<!-- 模板内容结束 -->
</body>
</html>