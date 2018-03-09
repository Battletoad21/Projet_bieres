<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>MonSite</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Electrolize" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>

    <!--          HEADER           -->
    <?php include ('header.php'); ?>
    <!--          HEADER END           -->

    <!--          SECTION          -->
    
    <section>

      <!--          Caroussel          -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <a href="#"><img src="img/slide01.png"></a>
            <div class="carousel-caption">
              <H2>BIERE BRUNE DU MOIS</H2>
            </div>
          </div>
          <div class="item">
            <a href="#"><img src="img/slide02.png"></a>
            <div class="carousel-caption">
              <H2>BIERE BLONDE DU MOIS</H2>
            </div>
          </div>
          <div class="item">
            <a href="#"><img src="img/slide03.png"></a>
            <div class="carousel-caption">
              <H2>BIERE BLANCHE DU MOIS</H2>
            </div>
          </div>
        </div>


        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--          Caroussel end        -->

      <div class="title"><h2>DECOUVREZ NOTRE SELECTION</h2></div>

      <!--          Thumbnails        -->

      <div class="row select-thumb">

        <div class="col-md-3 select-beer">
          <div class="thumbnail height">
            <img src="img/beer.png" alt="...">
            <div class="caption textbeer">
              <h2>BRASSERIE 3 MÂTS</h2>
              <h3>Bière La Kraken - 37.5 cl</h3>
              <p>La Kraken est une bière de style Irish Ale. Elle est de couleur ambrée, assez trouble et ayant une importante collerette. Cette bière aux flaveurs de caramel, de fruits noirs, de malt et levure est assez amère en fin de bouche. Elle titre à 5.5%.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 select-beer">
          <div class="thumbnail height">
            <img src="img/beer.png" alt="...">
            <div class="caption textbeer">
              <h2>BRASSERIE BENDORF</h2>
              <h3>Bière Kollane Lill - 33 cl</h3>
              <p>Cette bière de style Golden Ale / Blond Ale titre à 5%.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 select-beer">
          <div class="thumbnail height">
            <img src="img/beer.png" alt="...">
            <div class="caption textbeer">
              <h2>BRASSERIE ARTZNER PERLE</h2>
              <h3>Bière Perle des Iles - 33 cl</h3>
              <p>Cette bière de type Fruit Beer titre à 7%.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 select-beer">
          <div class="thumbnail height">
            <img src="img/beer.png" alt="...">
            <div class="caption textbeer">
              <h2>BRASSERIE BLESSING</h2>
              <h3>Bière L'Insolente - 33 cl</h3>
              <p>C'est une bière de style  Amber Ale qui titre à 5.9%. Elle a une robe de couleur ambre et une mousse beige et onctueuse. Elle est limpide avec une saturation assez faible et des bulles fines. Au nez se dégagent des senteurs de caramel et de levure et en bouche des flaveurs de caramel, miel et fruits rouges. L’Insolente a un corps moyen, elle est plutôt amère.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 select-beer">
          <div class="thumbnail height">
            <img src="img/beer.png" alt="...">
            <div class="caption textbeer">
              <h2>BRASSERIE LA MERCIERE</h2>
              <h3>Bière Ambrée - 33 cl</h3>
              <p>L'Ambrée est une bière de style Amber Ale, ambrée, à la collerette fine et bien blanche. Cette bière aux flaveurs de café, de caramel, de levure, de fleurs et d'herbes est assez amère. Elle titre à 5.6%. </p>
            </div>
          </div>
        </div>

        <div class="col-md-3 select-beer">
          <div class="thumbnail height">
            <img src="img/beer.png" alt="...">
            <div class="caption textbeer">
              <h2>BRASSERIE MATTEN</h2>
              <h3>Bière Red Fox IPA - 33 cl</h3>
              <p>La Red Fox est une bière de type India Pale Ale. Elle est de couleur ambre-rouge et sa  couronne est beige. Cette bière aux flaveurs de malt, de caramel, de houblon et de fruits est bien équilibrée et assez carbonatée. Sa finale consiste en une légère amertume. Elle titre à 7,7%.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 select-beer">
          <div class="thumbnail height">
            <img src="img/beer.png" alt="...">
            <div class="caption textbeer">
              <h2>BRASSERIE SAINTE CRU</h2>
              <h3>Bière No Future - 33 cl</h3>
              <p>Cette bière de type Imperial Stout titre à 11%.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 select-beer">
          <div class="thumbnail height">
            <img src="img/beer.png" alt="...">
            <div class="caption textbeer">
              <h2>BRASSERIE UBERACH</h2>
              <h3>Bière Le P'tit Klintz - 50 cl</h3>
              <p>C'est une bière de style Spice / Herb / Vegetable qui titre à 4.8%. Elle a une robe jaune orangé et une mousse blanche. Elle est trouble avec une saturation moyenne et de fines bulles. Au nez se dégagent des senteurs de céréales, de malt, de miel et en bouche des flaveurs demalt, de miel, de coriandre avec une pointe de miel. La P’tit Klintz a un corps moyen.</p>
          </div>
        </div>

      </div>

      <!--          Thumbnails end        -->

      <!--          Specialist        -->

      <div class="row box-kyle">
        <div class="col-md-12">
          <div class="thumbnail specialist">
            <img src="img/kyle_exp.jpg" alt="...">
            <div class="caption text-kyle">
              <h3>Le mot de notre spécialiste</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
              <p><a href="#" class="btn btn-primary contact-kyle" role="button">Nous contacter</a></p>
            </div>
          </div>
        </div>
      </div>

      <!--          Specialist end        -->

    </section>


    <!--        SECTION END        -->
 

    <!--          FOOTER           -->
    <?php include ('footer.php'); ?>
    <!--         FOOTER END        -->


<!--         Scripts        -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--       Scripts end       -->

  </body>

</html>