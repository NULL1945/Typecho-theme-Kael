<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

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
            <?php $this->content('- 阅读剩余部分 -'); ?>
        </section>
</article>

<?php $this->need('footer.php'); ?>
