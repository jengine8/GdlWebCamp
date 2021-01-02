<?php include_once 'includes/templates/header.php';?>


    <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>
        
        <?php
        
            try{
                
                require_once("includes/funciones/DBconect.php");
                
                $sql="Select id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
                $sql.="From eventos ";
                $sql.="INNER JOIN categoria_evento ";
                $sql.="ON eventos.id_categoria = categoria_evento.id_categoria ";
                $sql.="INNER JOIN invitados ";
                $sql.="ON eventos.invitado_id = invitados.id_invitado ";
                $sql.="ORDER BY id_evento";
                
                $resultado= $conection->query($sql);
                
                
            }catch(Exception $e){
                echo $e->getMessage();
            }
        
        
        ?>
       
   
    
     


        <?php


        $calendario=array();

          while($eventos = $resultado->fetch_assoc()){
            //sustrae la fecha de cada evento para agruparlos por fecha
            $fecha= $eventos['fecha_evento'];

            $evento=array(
              'titulo'=> $eventos['nombre_evento'],
              'fecha'=> $eventos['fecha_evento'],
              'hora' => $eventos['hora_evento'],
              'categoria' => $eventos['cat_evento'],             
              'invitado' => $eventos['nombre_invitado']. " ". $eventos['apellido_invitado']

            );
            // agrupa los eventos por fecha y agrega los eventos al array calendario.
            $calendario [$fecha] []= $evento;
          ?>

         

          <?php } //fin del while assoc?>
          
          <div class="calendario">

              <?php
                  foreach($calendario as $dia => $lista_eventos){?>

                    <h3 class="titulo-calendario">
                      <i class="fa fa-calendar"></i>

                      <?php echo $dia ?>
                    </h3>

                    <?php foreach($lista_eventos as $evento){?>
                    <div class="dia">

                        <p class="titulo"> <?php echo $evento['titulo']; ?> </p>

                        <p class="hora">
                        <i class="fas fa-clock" aria-hiden="true"></i>
                        <?php echo $evento['hora']; ?>

                        </p>                    
                        <i class="fas fa-university" aria-hiden="true">
                        <p class="categoria-evento"> <?php echo $evento['categoria']; ?> </p>
                        </i>

                        <p class="hora">
                        <i class="fa fa-user" aria-hiden="true"></i>
                        <?php echo $evento['invitado']; ?>

                        </p>

                    
                  </div>
                
               <?php } // fin foreach evento ?>


              <?php } // fin foreach lista_eventos ?>

           

            
  

           
       
       
       
      
       
      
       
       
       
       
    

   </section>
       
   <?php
       
        $conection->close();
       
    ?>  

   

   <?php include_once 'includes/templates/footer.php';?>



