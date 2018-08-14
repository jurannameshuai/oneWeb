<? if(!defined('IN_MYMPS')) exit('Access Denied');
/*Mymps分类信息系统
官方网站：http://www.mymps.com.cn*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$page_title?></title>
<link rel="shortcut icon" href="<?=$mymps_global['SiteUrl']?>/favicon.ico" />
<link rel="stylesheet" href="<?=$mymps_global['SiteUrl']?>/template/default/css/global.css" />
<link rel="stylesheet" href="<?=$mymps_global['SiteUrl']?>/template/default/css/style.css" />
<link rel="stylesheet" href="<?=$mymps_global['SiteUrl']?>/template/default/css/login.css" />
<script src="<?=$mymps_global['SiteUrl']?>/template/global/noerr.js" type="text/javascript"></script>
</head>

<body class="<?=$mymps_global['cfg_tpl_dir']?>"><div class="mheader">
<div class="mhead">
<div class="logo"><a href="<?=$mymps_global['SiteUrl']?>" target="_blank"><img src="<?=$mymps_global['SiteUrl']?><?=$mymps_global['SiteLogo']?>" title="<?=$mymps_global['SiteName']?>"/></a></div>
<div class="tit" >
<span>hi，欢迎来到<?=$mymps_global['SiteName']?>！<a href="<?=$mymps_global['cfg_postfile']?>" style="color:#ff6600">快速发信息&raquo;</a></span>
    </div>
</div>
</div><div class="clearfix"></div>
<div class="inner">
<div class="body">
<div class="registerpart">
<div class="step3">
<span>1. 选择注册类型</span>
<span>2. 填写注册信息</span>
<span class="cur"><? if($error < 3) { ?>3. 账号审核<?php } else { ?>3. 邮箱验证<?php } ?></span>
</div>
            <div class="fbd">
            <div class="c_border">
            <center id="infobox">
            <ul>
            <div id="mr">
                <? if($error == 1) { ?>
                <h2 class="h">邮件发出失败，请联系客服审核账号！</h2>
                <p><a href="<?=$mymps_global['SiteUrl']?>">[返回网站首页]</a></p>
                <p></p>
                <?php } elseif($error == 2) { ?>
                <h1 class="h">验证邮件已发出，请登录邮箱查收！</h1>
                <? if($webmail) { ?><p><a href="<?=$webmail?>" target="_blank">登录 [<?=$webname?>] 查收邮件！</a></p><?php } ?>
                <p>童鞋们注意了：系统发出的邮件有时可能会被误归为垃圾邮件  !-_-<br />当收件箱里没有收到邮件时建议查阅下邮箱的垃圾箱...</p>
                <?php } elseif($error == 3) { ?>
                <h2 class="h">客服正在审核您的账号，请耐心等待！</h2>
                <p>若长时间没有通过审核，请联系客服人员为您开通！</p>
                <p><a href="<?=$mymps_global['SiteUrl']?>">[返回网站首页]</a></p>
                <?php } elseif($error == 4) { ?>
                <h1 class="h">恭喜！您的账号已通过邮箱认证审核！</h1>
                <p>您的账号 <b style="color:red"><?=$userid?></b> 已经通过网站审核！<a href="<?=$mymps_global['SiteUrl']?>/<?=$mymps_global['cfg_member_logfile']?>" style="font-size:14px; text-decoration:underline">登录用户中心>></a></p>
                <?php } elseif($error == 5) { ?>
                <h2 class="h">链接已失效！请联系网站客服开通账号！</h2>
                <p><a href="<?=$mymps_global['SiteUrl']?>">[返回网站首页]</a></p>
                <?php } ?>
            </div>
            </ul>
            </center>
            </div>
            
            </div>
</div>
</div>
<div class="clear"></div><div class="footer">	&copy; <?=$mymps_global['SiteName']?> <a href="http://www.miibeian.gov.cn" target="_blank"><?=$mymps_global['SiteBeian']?></a> <?=$mymps_global['SiteStat']?> <span class="none_<?=$mymps_mymps['debuginfo']?>"><? if($cachetime) { ?>This page is cached at <? echo GetTime($timestamp,'Y-m-d H:i:s'); ?><?php } ?></span><span class="my_mps"><strong><a href="<?=MPS_WWW?>" target="_blank"><?=MPS_SOFTNAME?></a></strong> <em><a href="<?=MPS_BBS?>" target="_blank"><?=MPS_VERSION?></a></em></span></div></div>

</body>
</html>