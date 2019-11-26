<?php
/**
 * category1
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<div class="main">
    <div class="container">
        <div class="post-wrap categories">
            <h2 class="post-title">-&nbsp;Categories&nbsp;-</h2>
            <div class="categories-card">
                <?php $this->widget('Widget_Metas_Category_List')
                    ->parse('
                    <div class="card-item">
                        <div classs="categories">
                            <a href="{permalink}">
                                <h3>
                                    <i class="fa fa-code" aria-hidden="true" style="padding-right:5px"></i>{name}
                                </h3>
                                <small>({count})</small>
                            </a>
                        </div>
                    </div>'); ?>
            </div>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>