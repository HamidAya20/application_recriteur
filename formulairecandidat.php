<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi</title>
    <Link rel="stylesheet" href="style6.css">
</head>
<body>
<section class="container"> 
    <header> Inscription Candidat</header><hr>
    <form action="traitement.php" Class="form" method="POST">
        <div class="input-box">
            <label>Nom complet:</label><br>
            <input type="text" placeholder="Enter votre nom complet"name="nom_complet">
        </div>

        <div class="input-box">
            <label>Email:</label><br>
            <input type="text" placeholder="Enter email" name="email">
        </div>
        <div class="column">
            <div class="input-box">
                <label>Date de naissance:</label>
                <input type="text" placeholder="Entrer date" name="date">
            </div>
            <div class="input-box">
                <label>Tel:</label>
                <input type="text" placeholder="Entrer votre telephone" name="tel">
            </div>
           </div>
        <div class="gender-box">
            <h3>Gender</h3>
        <div class="gender-option">
            <div class="gender">
         <input type="radio" id="check" name="gender">
         <label for="check">Male </label>
            </div>
            <div class="gender">
                <input type="radio" id="check" name="gender">
                <label for="check">Female</label>
            </div>
            <div class="gender">
                <input type="radio" id="check" name="gender">
                <label for="check">Other </label>
                   </div>
        </div>
        </div>

       <div class="input-box">
                <label>Adresse:</label><br>
                <input type="text" placeholder="Entrer votre adresse" name="adresse">
            </div>
            <div class="input-box">
                <label> Pays :</label><br>
                <input type="text" placeholder="Enter pays" name="pays">
            </div>
            <div class="input-box">
                <label>ville :</label><br>
                <input type="text" placeholder="Enter votre ville" name="ville">
            </div>
            <Br>
                <div class="input-box">
                    <label>Domaine:</label>
                    <input type="text" placeholder="Entrer votre domaine" name="domaine">
                </div>
                <div class="input-box">
                    <label>fonction:</label>
                    <input type="text" placeholder="Entrer votre fonction" name="fonction">
                </div>
                <div class="input-box">
                    <label>Formation:</label>
                    <input type="text" placeholder="Entrer votre formation" name="formation">
                </div>
            <div class="input-box">
                <label > Deposer votre CV </label>
                <input type="file"  name="deposer">
               
                   </div>
        </div>
        <button> S'inscrire
          </button>
    </form>
</section>