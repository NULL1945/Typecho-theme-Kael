<?php
/**
 * 本主题基于 <a href="https://github.com/yuche" target="_blank">Yuche</a> 在 GitHUb 上开源的 <a href="https://github.com/yuche/hexo-theme-kael">HEXO主题</a> 移植， 为 Typecho 专用主题。简洁大气。
 * 
 * @package Typecho Theme Kael
 * @author Lin  
 * @version 0.1  
 * @link http://www.hello1995.com  
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<main class="content" role="main">
    
    
    <?php while($this->next()): ?>
    <article class="post">
        <header class="post-header">
            <div class="tag-tile">
                <?php $this->tags(', ', true, 'No tag'); ?>
            </div>
            <h1 class="post-title"><a data-pjax href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </h1>

            <div class="post-meta">
                Post on<span class="fa fa-clock-o"></span>
                <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>
            </div>
        </header>
        <section class="post-excerpt">
            <?php $this->content('- 阅读全文 -'); ?>
        </section>
    </article>
    <?php endwhile; ?>
    
    <nav class="pagination" role="pagination">
        
        <?php $this->pageLink('上一页'); ?>
        
        <span class="page-number">Page <?php echo $this->_currentPage; ?> </span>
        
        <?php $this->pageLink('下一页','next'); ?>
        
    </nav>
</main>

<?php $this->need('footer.php'); ?>
