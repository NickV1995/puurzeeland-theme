<footer class="page-footer">
  <div class="container-fluid align-items-center">
    <div class="row">
      <div class="col-md-4">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : endif; ?>
      </div>
      <div class="col-md-4">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) :  endif; ?>
      </div>
      <div class="col-md-4">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) :  endif; ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2020
    <a href="https://mdbootstrap.com/"> Puurzeeland</a>
  </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>