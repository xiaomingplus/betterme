   <div id="footer"></div>
</div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
      <script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        $("#menu-toggle").toggleClass("active");
    });
    $("#main").click(function(){
    	
      $("#wrapper").removeClass("active");
        $("#menu-toggle").removeClass("active");
    });

    </script>

<script type="text/javascript" src="<?php $this->options->themeUrl('js/top.js'); ?>"></script>

