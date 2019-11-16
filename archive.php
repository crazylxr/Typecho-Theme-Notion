<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">
    <div class="container">
        <div class="post-wrap tags">
        <h2 class="post-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('-&nbsp;Category&nbsp;·&nbsp;%s&nbsp-'),
            'search'    =>  _t('-&nbsp;Key&nbsp;·&nbsp;%s&nbsp-'),
            'tag'       =>  _t('-&nbsp;Tag&nbsp;·&nbsp;%s&nbsp-'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h2>
        </div>
        <div class="post-wrap archive">

        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="archive-item">
                <a class="archive-item-link" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                <span class="archive-item-date">
                    <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
                        <?php $this->date(); ?>
                    </time>
                </span>
            </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

                <!-- <h3>2019</h3> -->

            </div>
    </div>
</div>

 
    <!-- end #main -->

	<?php $this->need('footer.php'); ?>
