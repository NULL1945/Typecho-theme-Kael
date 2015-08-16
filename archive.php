<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="content" role="main">
    <article class="post">
    <h3><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
    </h3>
    <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
        <header class="post-header">
            <div class="tag-tile">
                <?php $this->tags(', ', true, 'none'); ?>
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
    <?php endwhile; ?>
    <?php else: ?>
        <h1 itemprop="name headline"><?php _e('没有找到内容'); ?></h1>
    <?php endif; ?>
</main>

<?php $this->need('footer.php'); ?>
