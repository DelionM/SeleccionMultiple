 <?php
       $a = 5;
                                             #ejemplo con if anidado
    #-------------------------------------------------------------------------------------------
     echo "<h1> <i>Estructuras de selección multiple Switch Match </i></h1> <br>";

   //  if($a == 1){
   //      echo "<h1><t>Lunes</t></h1>";
   //  }
   //      elseif($a == 2){
   //          echo "<h1>Martes</h1>";
   //      }
   //          elseif($a == 3){
   //              echo "<h1>Miercoles</h1>";
   //          }
   //              elseif ($a == 4){
   //                  echo "<h1>Jueves</h1>";
   //              }
   //                  elseif($a == 5){
   //                      echo "<h1>Viernes</h1>";
   //                  }
   //                      elseif ($a == 6) {
   //                          echo "<h1>Sábado</h1>";
   //                      }
   //                          elseif ($a == 7) {
   //                              echo "<h1>Domingo</h1>";
   //                          }
   //                              else {
   //                                  echo "<h1>Selección inválida</h1>";
   //                              }
 #-------------------------------------------------------------------------------------------
                                            #Ejemplo con switch
   // switch ($a) {
   //    case '1':
   //       echo "<h1><t>Lunes</t></h1>";
   //       break;

   //    case '2':
   //       echo "<h1>Martes</h1>";
   //       break;

   //    case '3':       
   //       echo "<h1>Miercoles</h1>";
   //       break;

   //   case '4':
   //    echo "<h1>Jueves</h1>";
   //       break;
      
   //    case '5':
   //       echo "<h1>Viernes</h1>";
   //      break;
      
   //    case '6':
   //      echo "<h1><t>Sábado</t></h1>";
   //      break;
 
   //    case '7':
   //       echo "<h1><t>Domingo</t></h1>";
   //       break;

   //    default:
   //     echo "<h1>Selección inválida</h1>";
   //      break;
   // }

                                             #Ejemplo con match es más corto y entendible
   
   echo match($a){
      1 => "<h1>Lunes</h1>",
      2 => "<h1>MARTES</h1>",
      3 => "<h1>Miercoles</h1>",
      4 => "<h1>Jueves</h1>",
      5 => "<h1>Viernes</h1>",
      6 => "<h1>Sábado</h1>",
      7 => "<h1>Domingo</h1>",
      default => "Invalido"
   }
      
?>