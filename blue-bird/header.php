

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark static-top navegador" style="">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://cdn.jobtify.com.mx/jobtifynew.png" class="d-fluid logo bg-white p-1 rounded" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php 
          self::printHTML($this->menu, "li");
          ?>
        </ul>
      </div>
    </div>
  </nav>

