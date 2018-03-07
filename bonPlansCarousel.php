<div class="container-fluid">
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
        <li class="item4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="img/slide01.png" alt="bar">
          <div class="carousel-caption">
            <h3>Ice-bar</h3>
            <p>Thermostat froid, pour une bière chaleureuse.</p>
          </div>
        </div>

        <div class="item">
          <img src="img/slide02.png" alt="bar">
          <div class="carousel-caption">
            <h3>Les bons plans</h3>
            <p>Les bières de Stras' Enquêteur de bon plans depuis 1870.</p>
          </div>
        </div>

        <div class="item">
          <img src="img/slide03.png" alt="bar">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>



      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <script>
  $(document).ready(function(){
      // Activate Carousel
      $("#myCarousel").carousel();

      // Enable Carousel Indicators
      $(".item1").click(function(){
          $("#myCarousel").carousel(0);
      });
      $(".item2").click(function(){
          $("#myCarousel").carousel(1);
      });
      $(".item3").click(function(){
          $("#myCarousel").carousel(2);
      });
      $(".item4").click(function(){
          $("#myCarousel").carousel(3);
      });

      // Enable Carousel Controls
      $(".left").click(function(){
          $("#myCarousel").carousel("prev");
      });
      $(".right").click(function(){
          $("#myCarousel").carousel("next");
      });
  });
  </script>
