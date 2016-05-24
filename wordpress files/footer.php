<footer>
<ul>
<li>&#169; All Rights Reserved  /</li>
<li>A Kozie  /</li>
<li>2016</li>
</ul>

</footer>

<?php wp_footer(); ?>

<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->

  <script defer src="<?php bloginfo ('template_directory')?>/scripts/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

</body>
</html>
