<?php
//---------------------------用户自定义标签函数文件

	$newstext='<p style=\"text-align: center\">&nbsp;&nbsp;&nbsp; 2016最受欢迎的qq飞车名字大全
<p style=\"text-align: center\"><img alt=\"1.jpg\" width=\"379\" height=\"211\" src=\"/d/file/youxi/QQfeichemingzi/2016-01-11/1230aed94f60f167df31c894f0497360.jpg\" /></p>
';
	$newstext = preg_replace("/style=\\\\.+?['|\"]/i",'',$newstext);//去除样式  
   echo $newstext;






?>