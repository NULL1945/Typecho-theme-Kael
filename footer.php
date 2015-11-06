<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="site-footer">
    
    <a class="subscribe icon-feed" href="<?php $this->options->feedUrl(); ?>"><span class="tooltip">Subscribe!</span></a>
    
    <div class="inner">
        <section class="copyright"> &copy; <?php $this->options->title() ?> 2014 - <?php echo date('Y'); ?></section>
        <section class="poweredby">Powered by <a target="_blank" href="http://typecho.org/">Typecho</a> and Theme by <a target="_blank" href="https://github.com/yuche/hexo-theme-kael">Yuche</a> & <a target="_blank" href="https://github.com/NULL1945/Typecho-theme-Kael">NULL</a></section>
    </div>
</footer>
</div>
</div><!-- /scroller -->

</div><!-- /pusher -->
</div><!-- /container -->
</div>

<!-- Easter eggs -->

<div class="egg animated">
    <a id="close-button" href="#">X</a>
    <div class="block">
        <div class="loading">
            <span class="ball1"></span>
            <span class="ball2"></span>
        </div>
    </div>
</div>
  
<script src="<?php $this->options->themeUrl('./js/jquery.min.js'); ?>"></script>
<script>
    if (!window.jQuery) {
        var script = document.createElement('script');
        script.src = "<?php $this->options->themeUrl('./js/jquery.min.js'); ?>";
        document.body.appendChild(script);
    }
</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('./js/lib.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('./js/main.js'); ?>"></script>
    
<!-- mathjax config similar to math.stackexchange -->
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
      processEscapes: true
    }
  });
</script>

<script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      tex2jax: {
        skipTags: ['script', 'noscript', 'style', 'textarea', 'pre', 'code']
      }
    });
</script>

<script type="text/x-mathjax-config">
    MathJax.Hub.Queue(function() {
        var all = MathJax.Hub.getAllJax(), i;
        for(i=0; i < all.length; i += 1) {
            all[i].SourceElement().parentNode.className += ' has-jax';
        }
    });
</script>

<script type="text/javascript" src="<?php $this->options->themeUrl('./js/MathJax.js?config=TeX-AMS-MML_HTMLorMML'); ?>">
</script>
</body>
</html>
