<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <!-- </div> -->
<!-- end #body -->

<footer id="footer" class="footer" role="contentinfo">
    <div class="copyright">
        <span>
        Copyright © <?php echo date('Y'); ?>
        <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>  | 
        Powered by <a href="http://www.typecho.org">Typecho  </a> &
        <a href="https://github.com/crazylxr/Typecho-Theme-Notion">Notion</a>
        </span>
    </div>
</footer> 

<?php $this->footer(); ?>

<script src="<?php $this->options->themeUrl('asset/live2d/L2Dwidget.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('asset/script.js'); ?>"></script>
<div id="live2d-widget">
    <canvas id="live2dcanvas" width="200" height="440" 
    style="position: fixed; opacity: 1; right: 0px; bottom: 0; z-index: 99999; pointer-events: none;"></canvas>
</div>
</body>
</html>
