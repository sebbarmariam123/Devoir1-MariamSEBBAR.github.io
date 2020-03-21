<!DOCTYPE html>
<html>
<head>	
    
    <link rel="stylesheet" href="css/bootstrap.min.css"/>    
</head>
<body>
    
    <br><br>
  <h1>Exercice1:</h1>
    <br>
  <h3 style="text-align:center;">Délices des fruits & légumes</h3>
    <br><br>
  <div class="row" style="margin:auto;">
      <?php
      
      $my_array = array("1","2","3","4","5","6","7","8","9","10","11");
      shuffle($my_array);
      
      for($i=0;$i<3;$i++)
      {
          
         ?>
      
            <div class="col-sm 4">
                <img src="img/<?php echo "$my_array[$i]";?>.jpg" alt="image<?php echo "$i";?>"  style="width:400px;height:400px;">
            </div>
      
      <?php
          
      }
      
        ?>
    
    </div>
     <br><br>
  <h1>Exercice2:</h1>
    <br>
    
    <?php
echo "<style>
    
table {
  border-collapse: collapse;
  width:100%;
}

table, td {
  border: 1px solid black;
  text-align:center;
}

h3{
  text-align:center;
}
    
</style>
        
<h3>Commandes Clients</h3>
<table>";

$fichier = fopen("commande.txt", "r") or die("Impossible d'ouvrir le fichier courant!");


while(!feof($fichier)){
    
    $ligne= fgets($fichier);
    $tab= explode('|', $ligne);
                    
    echo "<tr>";
    
        for($i=0;$i<sizeof($tab);$i++)
          {
            
              echo "<td> $tab[$i] </td>";

          }  
      
    echo "</tr>";
                
}

echo "</table>";
fclose($fichier);

?>
        
      <br><br>
  <h1>Exercice3:</h1>
    <br>
<?php
echo "<style>
    
table {
  border-collapse: collapse;
  width:100%;
}

table, td ,th{
  border: 1px solid black;
  text-align:center;
}

th{
  background-color:skyblue;
}
    
</style>

<h2><strong>Centrale d'achats</strong></h2>       
<h4>Commande Clients</h4>
<table>
    <tr>
       <th>Numéro de commande</th>
       <th>Numéro Client</th>
       <th>Date de commande</th>
       <th>Désignation article</th>
       <th>Quantité(PAL)</th>
       <th>Prix unitaire(DH)</th>
       <th>Date de livraison</th>
       <th>Adresse Client</th>
    </tr>
";

$fichier = fopen("commandes.txt", "r") or die("Impossible d'ouvrir le fichier courant!");


while(!feof($fichier)){
    
    $ligne= fgets($fichier);
    $tab= explode('|', $ligne);
                    
    echo "<tr>";
    
        for($i=0;$i<sizeof($tab);$i++)
          {
            
              echo "<td> $tab[$i] </td>";

          }  
      
    echo "</tr>";
                
}

echo "</table><br><br>";
fclose($fichier);

?>
</body>
</html>
