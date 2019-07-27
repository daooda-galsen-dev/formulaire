<!DOCTYPE html>
<html lang="FR-fr">
<!---Daouda BA / Promo 2 Sonatel Academy-->
<!---PROJET de création d'un Formulaire avec HTML/CSS/PHP-->

<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Formulaire</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <!---Importation de Google Fonts pour les fonts-->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <form action="index.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="pre">Prénom:</label>
            </div>
            <div class="col-75">
                <input type="text" id="pre" name="pre" placeholder="Entrer votre nom" >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="nom">Nom:</label>
            </div>
            <div class="col-75">
                <input type="text" id="nom" name="nom" placeholder="Entrer votre nom" >
            </div>
        </div>
        <div class="row">
                <div class="col-25">
                    <label for="genre">Genre:</label>
                </div>
                <div class="col-75">
                    <input type="radio" name="genre" value="Homme">M&nbsp;
                    <input type="radio" name="genre" value="Femme">F
                </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="pays">Pays:</label>
            </div>
            <div class="col-75">
                <select id="pays" name="pays">
                    <option value="Sénégal">Sénégal</option>
                    <option value="Angleterre">Angleterre</option>
                    <option value="France">France</option>
                    <option value="USA">USA</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="langage">Langage(s):</label>
            </div>
            <div class="col-75" >
                <input type="checkbox" name="lang[]" value="Go">Go&nbsp;
                <input type="checkbox" name="lang[]" value="C#">C#&nbsp;
                <input type="checkbox" name="lang[]" value="PHP">PHP&nbsp;
                <input type="checkbox" name="lang[]" value="Java">Java&nbsp;
                <input type="checkbox" name="lang[]" value="Python">Python
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email:</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" placeholder="Entrer votre adresse email" >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="date-na">Date de naissance:</label>
            </div>
            <div class="col-75">
                <input type="date" id="date-na" name="date-na" >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="com">Commentaire:</label>
            </div>
            <div class="col-75">
                <textarea id="com" name="com" placeholder="Écrivez votre commentaire ici" style="height:150px" ></textarea>
            </div>
        </div>
        <div class="row">
            <input type="submit" name="valider" value="ENREGISTRER">
        
        <?php
        if(isset($_POST['valider'])) {
            if(!empty($_POST['pre']) AND !empty($_POST['nom']) AND !empty($_POST['genre']) AND !empty($_POST['pays']) AND !empty($_POST['lang']) AND !empty($_POST['email']) AND !empty($_POST['date-na']) AND !empty($_POST['com'])){
                $pr=$_POST['pre'];
                $nm=$_POST['nom'];
                $gr=$_POST['genre'];
                $py=$_POST['pays'];
                $lg=$_POST['lang'];
                $em=$_POST['email'];
                $dn=$_POST['date-na'];
                $cm=$_POST['com'];
            }
            else{
                echo '<p style="color:red; margin-left:30%; font-size:25px; font-weight:bold;">Veuillez remplir tout les champs SVP</p>';
            }
        }
        ?>

        </div>

        <div class="copy"><p>Copyright 💡 | Daooda-BA 💻 | 2019</p></div>
    </form>

    <hr>

    <h2>Tableau des inscrits</h2>

    <hr>

    <table>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Genre</th>
        <th>Pays</th>
        <th>Langage(s)</th>
        <th>Email</th>
        <th>Date de naisance</th>
        <th>Commentaire</th>
    </tr>
    <tr>
        <td>Daouda</td>
        <td>BA</td>
        <td>Homme</td>
        <td>Sénégal</td>
        <td>Go, PHP, Python</td>
        <td>daooda@mail.sn</td>
        <td>16/05/1997</td>
        <td>Bonjour je...</td>
    </tr>
    <tr>
        <td>Jadon</td>
        <td>SANCHO</td>
        <td>Homme</td>
        <td>Angleterre</td>
        <td>Java</td>
        <td>jadon5ancho@mail.uk</td>
        <td>05/11/1996</td>
        <td>Hi guys my...</td>
    </tr>
    <tr>
        <td>Joana</td>
        <td>DOE</td>
        <td>Homme</td>
        <td>USA</td>
        <td>C#, Java</td>
        <td>doejoana@mail.us</td>
        <td>12/01/1989</td>
        <td>Hello ever...</td>
    </tr>
    <tr>
        <td>Antoine</td>
        <td>DE PAUL</td>
        <td>Homme</td>
        <td>France</td>
        <td>Go, Python</td>
        <td>antoineDP@mail.fr</td>
        <td>06/12/1992</td>
        <td>Maintenant...</td>
    </tr>
    <tr>
        <td>Krépin</td>
        <td>DIATTA</td>
        <td>Homme</td>
        <td>Sénégal</td>
        <td>PHP, C#</td>
        <td>krepin8@mail.sn</td>
        <td>22/03/1999</td>
        <td>Bonsoir le...</td>
    </tr>
    <?php

    if(!empty($_POST['pre']) AND !empty($_POST['nom']) AND !empty($_POST['genre']) AND !empty($_POST['pays']) AND !empty($_POST['lang']) AND !empty($_POST['email']) AND !empty($_POST['date-na']) AND !empty($_POST['com'])){

        echo "<tr>";
        echo "<td>".$_POST['pre']."</td>";
        echo "<td>".$_POST['nom']."</td>";
        echo "<td>".$_POST['genre']."</td>";
        echo "<td>".$_POST['pays']."</td>";
        echo "<td>";
            foreach($_POST['lang'] as $val){
                echo $val . ", ";
            }
        echo "</td>";
        echo "<td>".$_POST['email']."</td>";
        echo "<td>".$_POST['date-na']."</td>";
        echo "<td>";
            $cmt = substr($_POST['com'], 0, 10);
                echo $cmt . "...";
        echo "</td>";
        echo "</tr>";
        
    }

    ?>
    </table>

</body>
</html>