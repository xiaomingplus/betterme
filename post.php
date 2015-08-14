<?php

/**
 * 为你我编程了 BetterMe
 * 
 * @package Typecho BetterMe Theme 
 * @author Yangguo Bao
 * @version 1.0.0
 * @link http://www.yangguobao.cn
 */
 $this->need('header.php');
 $this->need('sidebar.php');
 

?>

<div id="main">
<div id="crumbs_patch">
	<a href="<?php $this->options->siteUrl(); ?>">首页</a> &raquo;</li>
	<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
		Latest Post
	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
		<?php $this->category(); ?> &raquo; <?php $this->title() ?>
	<?php else: ?><!-- 页面为其他页时 -->
		<?php $this->archiveTitle(' &raquo; ','',''); ?>
	<?php endif; ?>
</div>
       
        <div id="content">

 <article class="post-article">

  <p class="article-title"><?php $this->title() ?></p>
  <div class="content">
<p class="article-description"><?php $this->content(); ?></p>
</div>
<p class="article-footer"><span class="time"><?php $this->date('Y-m-d H:i');  ?></span> <?php _e('由'); ?> <span class="author"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span><?php _e('写在'); ?> <span class="catagory"><?php $this->category(','); ?><span> <span class="tags"><?php $this->tags(' ',true, '#'); ?></span>
 
</p>
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_twi" data-cmd="twi" title="分享到Twitter"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":["mshare","tqq","douban","mail","fbook"],"bdPic":"","bdStyle":"2","bdSize":"32"},"share":{},"image":{"viewList":["tsina","weixin","qzone","renren","twi"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["tsina","weixin","qzone","renren","twi"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</article>

 
 
</div>
<div id="page">

<div id="prev-article">
<?php $this->thePrev('上一篇: %s', '无上一篇'); ?>
</div>
<div id="next-article">
<?php $this->theNext('下一篇: %s', '无下一篇'); ?>
</div>
</div>
 <?php $this->need('comments.php'); ?>
</div>


    <?php $this->need('footer.php'); ?>

  </body>
</html>
