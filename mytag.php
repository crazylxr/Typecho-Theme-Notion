<?php
/**
 * tags
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>


<div class="main">
    <div class="container">
        <div class="post-wrap tags">
            <h2 class="post-title">-&nbsp;Tags&nbsp;-</h2>
            <div class="tag-cloud-tags">
                <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
                <?php if($tags->have()): ?>
                <?php while ($tags->next()): ?>
                    <!-- <a href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a> -->
                        <a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?><small>(<?php $tags->count(); ?>)</small></a>
                <?php endwhile; ?>
                <?php else: ?>
                    <li><?php _e('没有任何标签'); ?></li>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>