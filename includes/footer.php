<!--footer -->
<footer class="foooter">
<div class="container">
    <div class="col-md-4 col-sm-12 col-xs-12 copy"><p>Copyright &copy;2015</p></div> 
    
        <div class="col-md-4 col-sm-12 col-xs-12 social"> 

<a href="#" class="btn btn-social-icon btn-instagram"> <i class="fa fa-instagram"></i></a>

<a href="#" class="btn btn-social-icon btn-facebook"> <i class="fa fa-facebook"></i></a>

</div>
    
    <div class="col-md-4 col-sm-12 col-xs-12"><p>Webdesign by Kangaroo</p></div>

</footer>
    <script>
        $(document).ready(function() {
            $('ul.filter-function a').click(function() {
              $(this).css('outline','none');
              $('ul.filter-function .current').removeClass('current');
              $(this).parent().addClass('current');

              var filterVal = $(this).text().toLowerCase().replace(' ','-');

              if(filterVal == 'all') {
                $('div.mainbean div.col-md-3.hidden').fadeIn('slow').removeClass('hidden');
              } else {
                $('div.mainbean div.col-md-3').each(function() {
                  if(!$(this).hasClass(filterVal)) {
                    $(this).fadeOut('normal').addClass('hidden');
                  } else {
                    $(this).fadeIn('slow').removeClass('hidden');
                  }
                });
              }

              return false;
            });
          });
    </script>
</body>
</html>



