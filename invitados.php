<?php include_once 'includes/templates/header.php';?>


    <section class="seccion contenedor">
        
        
        <?php
        
            try{
                
                require_once("includes/funciones/DBconect.php");
                
                $sql="Select * from invitados";
                
                $resultado= $conection->query($sql);
                
                
            }catch(Exception $e){
                echo $e->getMessage();
            }
        
        
        ?> 

     


    <section class="invitados contenedor seccion">
       
        <h2>Nuestros Invitados</h2>
        
         <ul class="lista-invitados clearfix">
          

            <?php while($invitados = $resultado->fetch_assoc()){        
              ?>

                <li class="invitado">
                    <img src="<?php echo  $invitados["imagen_url_invitado"]?>" alt="imagen invitado">
                    <p><?php  echo $invitados["nombre_invitado"]. " ". $invitados["apellido_invitado"] ?> </p>
                </li>

              



              <?php } //fin del while assoc?>
          
          <ul/>
          
    </section>
          
          
           

            
  

           
       
       
       
      
       
      
       
       
       
       
    

</section>
       
   <?php
       
        $conection->close();
       
    ?>  

   

   <?php include_once 'includes/templates/footer.php';?>



