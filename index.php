<?php
/**
 * 一款简洁的主题
 * 
 * @package notion
 * @author taoweng
 * @version 1.0
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

 <div class="main">
    <div class="container">
        <div class="intro">
            <div class="avatar">
                <a href="/"><img src="https://static.meowv.com/images/avatar.jpg"></a>
            </div>
            <h1 class="nickname"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>

            <div class="description">
                <p>
                    <span><?php $this->options->description() ?></span>
                    <br>Cease to struggle and you cease to live
                </p>
            </div>
            <div class="links">
                <a class="link-item" title="Blog" href="/posts">
                    <i class="fa fa-book fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" class="link-item" title="Notes" href="https://notes.meowv.com/">
                    <i class="iconfont iconnotes"></i>
                </a>
                <a target="_blank" class="link-item" title="Github" href="https://github.com/crazylxr">
                    <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                </a>
                <a class="link-item weixin" title="点击关注桃翁" href="javascript:;">
                    <i class="fa fa-weixin fa-2x" aria-hidden="true"></i>
                </a>
                <a class="link-item weibo" title="weibo" href="javascript:;">
                    <i class="fa fa-weibo fa-2x" aria-hidden="true"></i>
                </a>
                <a class="link-item twitter" title="twitter" href="javascript:;">
                    <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                </a>
                <a class="link-item rss" title="rss" href="javascript:;">
                    <i class="fa fa-rss-square fa-2x" aria-hidden="true"></i>
                </a>
                <div class="qrcode hidden">
                    <img src="https://static.meowv.com/images/wx_qrcode.jpg">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end #main-->

<!-- <?php $this->need('sidebar.php'); ?> -->
<?php $this->need('footer.php'); ?>
