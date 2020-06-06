<?php

 $arr = array("product1","product2","product3","product4","product5","product6","product7",
 			"product1","product2","product3","product4","product5","product6","product7", 
 			"product1","product2","product3","product4","product5","product6","product7", 
 			"product1","product2","product3","product4","product5","product6","product7" 
 				 );

 if(isset($_POST['productName']))
 {
 	 array_push( $arr,$_POST['productName']);
 	 for ( $couter=0; $couter<sizeof($arr); $couter++) {
    //echo $arr[$couter]."</br>";
      echo ' <div class="col-lg-6">'. $arr[$couter].'</div>';
}
 }

?>