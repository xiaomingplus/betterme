<?php

/**
 * 为你我编程了 BetterMe
 * 更新时间:2014-07-07
 * @package BetterMe 
 * @author 杨国宝
 * @version 1.0.0
 * @link http://www.yangguobao.cn
 */
 $this->need('header.php');
 $this->need('sidebar.php');
   

?>


<div id="main">
       
        <div id="content">
   
    <?php while($this->next()): ?>
 <article class="article">

  <p class="article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>

<p class="article-description"><?php $this->excerpt(180,'...'); ?></p>

<p class="article-footer"><span class="time"><?php $this->date('Y-m-d H:i');  ?></span> <?php _e('由'); ?> <span class="author"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span><?php _e('写在'); ?> <span class="catagory"><?php $this->category(','); ?><span> </p>

</article>
  <?php endwhile; ?>

   
    </div>

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

  </body>
</html>
