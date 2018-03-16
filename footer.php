<head>
  <link rel="stylesheet" href="css/footer.css">
</head>
    <!--          FOOTER           -->
    <head>
      <link rel="stylesheet" href="css/footer.css">
    </head>
    <footer>

      <div class="container-fluid first_bloc">
        <div class="row row-centered">
          <div class="col-md-12 col-centered link_foot_one"><a target = "_blank" href="https://www.facebook.com/WildCodeSchoolStrasbourg/"><img src="img/fb.png" alt="..."></a><a target = "_blank" href="https://twitter.com/WildCodeSchool"><img src="img/tw.png" alt="..."></a></div>
        </div>
        <div class="row row-centered">
          <div class="col-md-12 col-centered link_foot_two"><a target = "_blank" href="mentions_legales.php">Mentions légales</a></div>
        </div>
        <div class="row row-centered">
          <div class="col-md-12 col-centered link_foot_two"><p>© Wild Code School 2018 - Kyle, Hasan, Hery</p></div>
        </div>

      </div>

    </footer>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
    </script>


    <!--         FOOTER END        -->
