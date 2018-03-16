<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Electrolize" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>

    <!--          HEADER           -->
    <?php include ('header.php'); ?>
    <!--          HEADER END           -->

  <contact>
    <div>
            <p>
                <?php

                    if($_SERVER['REQUEST_METHOD'] === "POST")
                    {
                        $errors=array();
                        if (empty($_POST['user_name']))
                        {
                            $errors['ErrNom'] = 'Veuillez indiquer votre nom.';
                        }
                        if (empty($_POST['user_email']))
                        {
                            $errors['ErrMail'] = 'Veuillez indiquer votre adresse Email.';
                        }
                        if (empty($_POST['user_telephone']))
                        {
                        $errors['ErrTel'] = 'Veuillez indiquer un n° de téléphone.';
                        }
                        if (!preg_match("#(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)#", $_POST['user_telephone']))
                        {
                            $errors['ErrTel2'] = '<br/> Numéro invalide.';
                        }
                        if ($_POST['object'] == 'default')
                        {
                            $errors['ErrObject'] = 'Choisissez le sujet du message.';
                            }
                        if (empty($_POST['user_message']))
                        {
                            $errors['ErrMessage'] = 'Veuillez saisir votre message.';
                        }
                ?>
            </p>
        </div>

        <div class="validation">
            <p>
                <?php
                        if (count($errors) == 0)
                        {
                            echo 'Votre message a été envoyé avec succès !'.'<br>'.'<br>';
                            echo 'Récapitulatif des informations :'.'<br>'.'<br>';
                            echo 'Nom : '.$_POST['user_name'].'<br>';
                            echo 'Email : '.$_POST['user_email'].'<br>';
                            echo 'Téléphone : '.$_POST['user_telephone'].'<br>';
                            echo 'Sujet : '.$_POST['object'].'<br>';
                            echo 'Message : '.$_POST['user_message'].'<br>';
                        }
                    }
                ?>
            </p>
        </div>

    <!--          SECTION          -->
    <form class="form_contact" action="" method="post">
            <h2>NOUS CONTACTER</h2>
            <div class="form-group">
                <label for="nom">Nom</label><br/>
                <input type="text" id="nom" name="user_name" value="<?php if (isset($_POST['user_name']) && (count($errors) != 0)) echo $_POST['user_name']; ?>">
                <div class="error">
                <p>
                    <?php
                    if (isset($errors['ErrNom'])) echo $errors['ErrNom'];
                    ?>
                    <br>
                </p>
                </div>
            </div>

            <div class="form-group">
                <label for="courriel">E-mail</label><br/>
                <input type="email" id="courriel" name="user_email" value="<?php if (isset($_POST['user_email']) && (count($errors) != 0)) echo $_POST['user_email']; ?>">
                <div class="error">
                <p>
                    <?php
                    if (isset($errors['ErrMail'])) echo $errors['ErrMail'];
                    ?>
                    <br>
                </p>
                </div>
            </div>


            <div class="form-group">
                <label for="telephone">Téléphone</label><br/>
                <input type="tel" id="telephone" name="user_telephone" value="<?php if (isset($_POST['user_telephone']) && (count($errors) != 0)) echo $_POST['user_telephone']; ?>">
                <div class="error">
                <p>
                    <?php
                    if (isset($errors['ErrTel'])) echo $errors['ErrTel'];
                    if (isset($errors['ErrTel2'])) echo $errors['ErrTel2'];
                    ?>
                    <br>
                </p>
                </div>
            </div>


            <div class="form-group">
                <label for="object">Sujet</label><br/>
                <select name="object" id="object">
                    <option value="default" id="default"></option>
                    <option value="sav">Vous êtes un amateur</option>
                    <option value="service consommateur">Vous êtes un professionnel</option>
                    <option value="resiliation">Autres</option>
                </select>
                <div class="error">
                <p>
                    <?php
                    if (isset($errors['ErrObject'])) echo $errors['ErrObject'];
                    ?>
                    <br>
                </p>
                </div>
            </div>


            <div class="form-group">
                <label for="message">Message</label><br/>
                <textarea id="message" name="user_message" placeholder="votre message..." value="<?php if (isset($_POST['user_message']) && (count($errors) != 0)) echo $_POST['user_message']; ?>"></textarea>
            </div>
            <div class="error">
                <p>
                    <?php
                    if (isset($errors['ErrMessage'])) echo $errors['ErrMessage'];
                    ?>
                    <br>
                </p>
            </div>
      <button type="submit" class="btn btn-default">Envoyer</button>
    </form>

  </contact>



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
