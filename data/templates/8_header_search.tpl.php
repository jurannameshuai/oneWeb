<? if(!defined('IN_MYMPS')) exit('Access Denied');
/*Mymps分类信息系统
官方网站：http://www.mymps.com.cn*/?>
<div id='wx_logo' style='margin:0 auto;display:none;'><img src='<?=$mymps_global['SiteUrl']?>/logowx.gif'/></div>
<? if($mod=='post') { ?><script src="<?=$mymps_global['SiteUrl']?>/template/default/js/jquery.min.js"></script><?php } elseif($mod=='information') { ?><script src="<?=$mymps_global['SiteUrl']?>/m/template/js/jq_min.js"></script><?php } else { ?><script src="<?=$mymps_global['SiteUrl']?>/m/template/js/jq_min.211.js"></script><?php } ?>
<script src="<?=$mymps_global['SiteUrl']?>/m/template/js/common.js"></script>
<div class="header">
<a href="javascript:void(0);" onClick="return window.history.go(-1);" class="back left8">返回</a>
<div class="search left8" id="search_ico" onClick="showNewPage('搜索',searchHtml,newPageSearch);">搜索</div>
<a href="index.php?mod=member" class="my left8" id="login_ico">我的</a>
<div id="ipageTitle" style="display:none;"><?=$mymps_global['SiteName']?></div>
    <div class="login_inner" id="login_inner"></div>
</div>
<div id="contactbar">
<a href="<?=$mymps_global['SiteUrl']?>/m/index.php?mod=index" class="bottom_index<? echo $mod == 'index' ? '_on' : '';; ?>">首页</a>
<a href="<?=$mymps_global['SiteUrl']?>/m/index.php?mod=history" class="bottom_history<? echo $mod == 'history' ? '_on' : '';; ?>">历史</a>
<a href="<?=$mymps_global['SiteUrl']?>/m/index.php?mod=member" class="bottom_member<? echo in_array($mod,array('login','member','register','shoucang','mypost')) ? '_on' : '';; ?>">我的</a>
<a href="<?=$mymps_global['SiteUrl']?>/m/index.php?mod=post" class="bottom_post<? echo $mod == 'post' ? '_on' : '';; ?>">发布</a>
</div>
<script>window['siteUrl']='<?=$mymps_global['SiteUrl']?>/m/';<? if($mod=='index') { ?>$('.header .back').hide();$('#login_ico').show();<?php } elseif($mod=='post'||$mod=='information'||$mod=='member') { ?>$('#search_ico').hide();$('#login_ico').removeClass("left8");$('#login_ico').addClass("right8");<?php } else { ?>$('.header .back').show();$('#login_ico').hide();<?php } if($iflogin==1) { ?>$('#login_ico').addClass('ico_ok');<?php } ?>if(window['current']){$('#ipageTitle').html(window['current']).show()}else{$('#ipageTitle').show()}</script>