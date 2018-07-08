
  <!-- scripts -->
  <?php
    // if ( c::get('environment') == 'local' ) :
      foreach ( c::get('scripts', array()) as $style):
        echo js($style);
      endforeach;
    // else:
    //   echo js('assets/production/all.min.js');
    // endif
  ?>

</body>
</html>
