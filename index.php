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
                <a href="/"><img src="<?php $this->options->logoUrl() ?>"></a>
            </div>
            <h1 class="nickname">
                <a href="<?php $this->options->siteUrl(); ?>">
                    <?php $this->options->title() ?>
                </a>
            </h1>

            <div class="description">
                <p>
                    <span><?php $this->options->description() ?></span>
                </p>
            </div>
            <div class="links">
                <a class="link-item" title="Blog" href="/archives.html">
                    <i class="fa fa-book fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" class="link-item" title="Github" href="<?php $this->options->githubUrl() ?>">
                    <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" class="link-item weixin" title="点击关注桃翁" href="<?php $this->options->weixinUrl() ?>">
                    <i class="fa fa-weixin fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" class="link-item weibo" title="weibo" href="<?php $this->options->weiboUrl() ?>">
                    <i class="fa fa-weibo fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" class="link-item twitter" title="twitter" href="<?php $this->options->twitterUrl() ?>">
                    <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                </a>
                <a class="link-item rss" title="rss" href="<?php $this->options->rssUrl() ?>">
                    <i class="fa fa-rss-square fa-2x" aria-hidden="true"></i>
                </a>
            </div>
            <div>
                <img style="width: 250px;" src="<?php $this->options->adUrl() ?>"/>
            </div>
        </div>
    </div>
</div>
<!-- end #main-->

<?php $this->need('footer.php'); ?>
