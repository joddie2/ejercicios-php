<h3>Ejercicio vente</h3>
<?php
 $cliente="pepe";
 $producto="atun";
 $canti=11;
 $precio=20;
 $subTotal=$canti*$precio;
 $iva=$subTotal*0.12;
 $desc=0;
 $regalo="";
 if($subTotal<=50){
   
   $desc=$subTotal*0.05;
   $regalo = "Cuaderno";
 
}else{
   if($subTotal>=51&&100){
      $desc=$subTotal*0.07;
      $regalo = "Lonchera";

   }else{
      if($subTotal>=101&&200){
         $desc=$subTotal*0.10;
         $regalo = "mochila";

      }else{
         if($subTotal>201){
            $desc=$subTotal*0.15;
               $regalo = "Pelota";

         }
      }
   }
 }
 $totPagar=$subTotal+$iva-$desc;

 
?>
<?php$format_SubTotal = SubTotal_format(SubTotal, 2)?>
<label>RESULTADOS</label><br>
<label>Cliente :</label> <?php echo $cliente; ?><br>
<label>Producto :</label> <?php echo $producto; ?><br>
<label>SubTotal :</label> <?php echo number_format($subTotal,2); ?><br>
<label>Iva  :     </label> <?php echo number_format($iva,2); ?><br>
<label>Descuento :</label> <?php echo number_format($desc,2); ?><br>
<label>totPagar :</label> <?php echo number_format($totPagar,2); ?><br>
<label>Regalo :</label> <?php echo $regalo; ?><br>
