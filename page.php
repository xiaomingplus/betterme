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

       
        <div id="content">

 <article class="article">

  <p class="article-title"><?php $this->title() ?></p>
<p class="article-description"><?php $this->content(); ?></p>
</article>
</div>
</div>


    <?php $this->need('footer.php'); ?>

  </body>
</html>
