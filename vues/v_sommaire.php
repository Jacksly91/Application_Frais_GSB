    <!-- Division pour le sommaire -->
    <div id="menu">
      <ul>
        <li>
          <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
        </li>
        <li>
          <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
        </li>
   	    <li>
          <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
      </ul> 
    </div>

    <p id="visiteur">Bonjour <?php echo $_SESSION['prenom']."  ".$_SESSION['nom'] ?>
      <?php
        $date = date("d/m/Y");
        Print("- Nous sommes le $date");
      ?>
    </p> 