<link rel="stylesheet" href="./css/style_index.css">

<div class="container-fluid">
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="imge/slide01.png" alt="bar">
          <div class="carousel-caption">
            <p>Ice-bar
            Thermostat froid, pour une bière chaleureuse.</p>
          </div>
        </div>

        <div class="item">
          <img src="imge/slide02.png" alt="bar">
          <div class="carousel-caption">
            <p>Les bons plans
            Les bières de Stras' enquêteur de bon plans depuis 1870.</p>
          </div>
        </div>

        <div class="item">
          <img src="imge/slide03.png" alt="bar">
          <div class="carousel-caption">
            <p>Les meilleurs conseil
            Grace à notre spécialise Kyle Brace, expert en bière de père en fils</p>
          </div>
        </div>


      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
