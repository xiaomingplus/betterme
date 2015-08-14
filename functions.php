<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

function getDayAgo($date){
$d = new Typecho_Date(Typecho_Date::gmtTime());
$now = $d->format('Y-m-d H:i:s');
$t = strtotime($now) - strtotime($date);
if($t < 60){
return $t . '秒前';
}
if($t < 3600){
return floor($t / 60) .  '分钟前';
}
if($t < 86400){
return floor($t / 3670) . '小时前';
}
if($t < 604800){
return floor($t / 86400) . '天前';
}
if($t < 2419200){
return floor($t / 604800) .  '周前';
}
if($t < 31536000 ){
return floor($t / 2592000 ).'月前';
}
 
return floor($t / 31536000 ).'年前';
 
}

