<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" /> 

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/screen.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/component.css'); ?>">
             
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>

    <!--[if lt IE 9]>
    	<script>window.location.href='http://www.hello1995.com/ie6_must_die.html';</script>
    <![endif]-->

</head>

<body>
<div class="container">
    <div class="mp-pusher" id="mp-pusher">
        <i id="scroll-up" class="fa fa-angle-up" style="display: block;"></i>
        <nav id="mp-menu" class="mp-menu">
            <div class="mp-level">
                <a style="font-size: 20px" href="<?php $this->options->siteUrl(); ?>"><h2 ><i class="fa fa-home"></i>
                        Home</h2></a>
                <ul class="first-level">
                    <li>
                        <a class="fa fa-archive" href="#"><i class="fa fa-angle-left">
                            </i>&nbsp;&nbsp;Archive</a>
                        <div class="mp-level page-list">
                            <h2 ><i class="fa fa-archive"></i>
                                Archive</h2>
                            <a class="mp-back" href="#">back</a>
                            <form id="search-form" action="">
                                <input type="text" class="search search-archive" placeholder="Search.."/>
                            </form>
                            <ul>
                                <div class="mp-scroll">
                                    <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                                    while($archives->next()): ?>
                                        <li class="search-archive-li"><a href="<?php echo $archives->permalink; ?>"><?php echo $archives->title; ?></a></li>
                                    <?php endwhile; ?>                                    
                                </div>
                            </ul>
                        </div>
                    </li>
                    
					<li>
						<a class="fa fa-list" href="#"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Tech Links</a>
						<div class="mp-level page-list">
							<h2 ><i class="fa fa-list"></i>
								Tech Links</h2>
							<a class="mp-back" href="#">back</a>
							<ul>
							    <li><a class="fa fa-link" href="https://www.hello1995.com/" title="Hello1995" target="_blank">Hello1995</a></li>
							</ul>
						</div>
					</li>
                    <li><a class="fa fa-user" href="https://www.hello1995.com/info.html">&nbsp;&nbsp;&nbsp;About me</a></li>
                    <li><a class="fa fa-archive" href="https://www.hello1995.com/just_archives.html">&nbsp;&nbsp;All Archives</a></li>
                    <li><a class="fa fa-github" href="https://github.com/1995LZH" target="_blank">&nbsp;&nbsp;&nbsp;GitHub</a></li>

                </ul>

            </div>
        </nav>
        <div id="pjax">
            <div class="pjax-hidden" style="display: none">
                    <?php $this->widget('Widget_Contents_Post_Recent')->parse('<a data-pjax href="{permalink}">{title}</a>'); ?>
                <a data-pjax class="fa fa-user" href="/about">&nbsp;&nbsp;&nbsp;About me</a>
            </div>
            <nav class="nexus">
                <li  style="border-left: 1px solid #c6d0da;">
                    <a id="trigger" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li ><a id="nexus-back" data-pjax href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></li>
                
                <div id="nav-container">
                    <div class="post-navbar" style="line-height: 63px;display:none">
                        <li id="navbar-title"><a href="#">undefined</a></li>
                        <li id="navbar-toc" style="border-left: none">
                            <a style="padding-right: 15px">
                                <span id="toc-content" >Introduction</span><i class="fa fa-chevron-down" ></i>
                            </a>
                            <div class="hidden-box">
                                <ul id="toc"></ul>
                            </div>
                        </li>
                    </div>
                </div>
                
            </nav>

<div class="scroller">
    <div class="scroller-inner">
