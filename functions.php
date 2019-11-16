<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $githubUrl = new Typecho_Widget_Helper_Form_Element_Text('githubUrl', NULL, NULL, _t('github 地址'), _t('在这里填入一个 github 地址, 用于在首页 github 调转地址'));
    $weiboUrl = new Typecho_Widget_Helper_Form_Element_Text('weiboUrl', NULL, NULL, _t('微博地址'), _t('在这里填入你的微博首页地址'));
    $twitterUrl = new Typecho_Widget_Helper_Form_Element_Text('twitterUrl', NULL, NULL, _t('twitter 地址'), _t('在这里填入你的 twitter 首页 '));
    $weixinUrl = new Typecho_Widget_Helper_Form_Element_Text('weixinUrl', NULL, NULL, _t('微信地址'), _t('在这里填入你的微信二维码地址'));

    $form->addInput($logoUrl);
    $form->addInput($githubUrl);
    $form->addInput($weiboUrl);
    $form->addInput($twitterUrl);
    $form->addInput($weixinUrl);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

