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
        <hr/>
            <h1 class="post-title">暂时关闭评论。</h1>
        <hr/>
        <nav class="pagination" style="width:auto" role="pagination">
            <?php 
            /** 
             * 显示下一个内容的标题链接 
             *  http://eelsee.blog.163.com/blog/static/18001833220133610489710/
             * @access public 
             * @param string $default 如果没有下一篇,显示的默认文字 
             * @return void 
             */ 
            function theNext($widget, $default = "This is the lastest Post") 
            { 
                $db = Typecho_Db::get(); 
                $sql = $db->select()->from('table.contents') 
                          ->where('table.contents.created > ?', $widget->created) 
                          ->where('table.contents.status = ?', 'publish') 
                          ->where('table.contents.type = ?', $widget->type) 
                          ->where('table.contents.password IS NULL') 
                          ->order('table.contents.created', Typecho_Db::SORT_ASC) 
                          ->limit(1); 
                $content = $db->fetchRow($sql); 
                 
                if ($content) { 
                    $content = $widget->filter($content); 
                    $link = '<a data-pjax class="newer-posts" href="' . $content['permalink'] . '" title="' . $content['title'] . '">← New Post</a>'; 
                    echo $link; 
                } else { 
                    $link = '<a data-pjax class="newer-posts" href="#" >'. $default .'</a>'; 
                    echo $link; 
                } 
            } 
            /** 
             * 显示上一个内容的标题链接 
             *  
             * @access public 
             * @param string $default 如果没有下一篇,显示的默认文字 
             * @return void 
             */ 
            function thePrev($widget, $default = "This is the oldest Post") 
            { 
                $db = Typecho_Db::get(); 
                $sql = $db->select()->from('table.contents') 
                          ->where('table.contents.created < ?', $widget->created) 
                          ->where('table.contents.status = ?', 'publish') 
                          ->where('table.contents.type = ?', $widget->type) 
                          ->where('table.contents.password IS NULL') 
                          ->order('table.contents.created', Typecho_Db::SORT_DESC) 
                          ->limit(1); 
                $content = $db->fetchRow($sql); 
                 
                if ($content) { 
                    $content = $widget->filter($content); 
                    $link = '<a style="cursor:default" class="older-posts" href="' . $content['permalink'] . '" title="' . $content['title'] . '">Old Post →</a>'; 
                    echo $link; 
                } else { 
                    $link = '<a style="cursor:default" class="older-posts" href="#" >'. $default .'</a>';  
                    echo $link; 
                } 
            } 
            ?>
           
            <?php theNext($this); ?>
            
            
            <a class="share-button" data-original-title title>Share this Post</a>
            
            <?php thePrev($this); ?>
            
        </nav>
</article>

<?php $this->need('footer.php'); ?>
