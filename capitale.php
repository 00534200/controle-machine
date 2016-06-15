<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Capitale</title>
    </head>

    <body>
      <header>
      <h1>
        Capitales européennes
        </h1>
      </header>
      
       <FORM name = "" method="POST">
    <SELECT name="nom" >
      <?php
        $conn=mysqli_connect("dwarves.iut-fbleau.fr","reilhac","toto","reilhac");
      
         $result=mysqli_query($conn,"SELECT nom  FROM capitale");
      
   
              while($capitale=mysqli_fetch_assoc($result)){
        echo  "<Option>".$capitale['nom'];
           }
      
   mysqli_close($conn);
      
      
      ?>
       <input type="submit" value="chercher" />
          </select>    
          </form>
     <?php
   
   
     $link=mysqli_connect("dwarves.iut-fbleau.fr","reilhac","toto","reilhac");

    if( empty($_POST['nom'])){
    $resultat= NULL;
    }
    else{
        $nom = $_POST['nom'];
         $resultat=mysqli_query($link,"SELECT id , nom , image From capitale  Where nom = \"$nom\"");
        while ($capitale=mysqli_fetch_assoc($resultat)){
          
            echo "<tr>";
            echo "<h3>".$capitale['nom']."</h3>";
            echo '<img src="'.$capitale['image'].'"/>';            
             echo "</tr>";
                }
             }  
      
   /*   $id1=mysql_query($link,"select id from capitale where nom = \"$nom\"");
      $dist = 0 ;
      for($id2 = 0 ; id2 < 15 ; $id2++){
       $distance=mysql_query($link,"select distance from distance where id1= \"$id1\ && id2 = \"$id2\"");     
        if($dist< $distance){
          $dist = $distance ;
        }
      }
      echo $dist ;
      
       mysqli_close($link);
    */
   ?>
      
      
      
    
    </body>
</html>
