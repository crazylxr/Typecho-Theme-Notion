<?php
/**
 * archives
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
<div class="main">
    <div class="post-wrap archive">
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                $year=0;
                $output = '';
                while($archives->next()):
                    $y = date('Y',$archives->created);
                    $m = date('m',$archives->created);
                    $date = date('Y-m-d', $archives->created);

                    if($y!=$year){
                        $year=$y;
                        $output .= '<h3>'.$y.'</h3>';
                    }

                    $output .= '
                        <article class="archive-item">
                            <a class="archive-item-link" href="' .$archives->permalink.'">' . $archives->title . '</a>
                            <span class="archive-item-date">' .$date. '</span>
                        </article>
                    ';
                endwhile;
                echo $output;
            ?>
        </ul>
    </div>
</div>