<?php

/**
 * 为你我编程了 BetterMe
 * 
 * @package BetterMe 
 * @author 杨国宝
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
   
    <?php while($this->next()): ?>
 <article class="article">

  <p class="article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
<p class="article-description"><?php $this->excerpt(180,'...'); ?></p>
<p class="article-footer"><span class="time"><?php $this->date('Y-m-d H:i');  ?></span> <?php _e('由'); ?> <span class="author"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span><?php _e('写在'); ?> <span class="catagory"><?php $this->category(','); ?><span> </p>

</article>
  <?php endwhile; ?>
<div id="page">

<?php if (!$this->is('single')): ?>
     <ul class="pager">
 <li class="previous"><?php $this->pageLink('« 上一页', 'prev') ?></li>     
  <li class="next"><?php $this->pageLink('下一页 »', 'next') ?></li>
 
</ul>
<?php endif; ?>
</div>
    <?php $this->need('footer.php'); ?>
    </div>
</div>

  </body>
</html>
