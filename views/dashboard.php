

<?php require_once 'helpers/utils.php';
require_once 'views/layouts/header.php';?>
        <script type="text/javascript">
                        function validar(e) { // 1
                        tecla = (document.all) ? e.keyCode : e.which; // 2
                        if (tecla==8) return true; // 3
                        patron =/[A-Za-z\s]/; // 4
                        te = String.fromCharCode(tecla); // 5
                        return patron.test(te); // 6
                        }


        </script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#colegiot').DataTable();
            } );
        </script>
<style>
      .banner{      
        background: url('views/assets/img/expo.jpg') no-repeat ;       
        background-size: cover;
        height: auto;
        max-width:100%;
       background-position: center ;
        }
</style>
<!-- Page Content -->
<div id="content" class="bg-grey w-100">

<section class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7">
              <h3 class="font-weight-bold">Feria vocacional 2021</h3>        
              <h5 class="lead ">UGEL Sechura </h5>
            </div>          
        </div>
    </div>
</section>

<section class="bg-mix py-3">
  <div class="container">
      <div class="card rounded-1 shadow banner">
        <div class="container text-white">           
                     <h3 class="font-weight-bold mt-3 text-center">!Bienvenidos!</h3><br>
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">                       
                        <div class="carousel-inner">
                            <div class="carousel-item active mb-5">
                                <!---->
                                <div class="container">
                                    <div class="row justify-content-center mt-2 mb-1">                                        
                                        <div class="col-lg-6  row justify-content-center">
                                            <div class="card shadow-lg rounded-2">
                                                <img class="card-img" src="views/assets/img/fondo.jpg" alt="Card image">
                                                    <div class="card-img-overlay ">
                                                        <button class="text-light videoModalTriger btn " 
                                                            style=" position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);" 
                                                            type="button" data-toggle="modal" data-target="#videoModal" 
                                                            ><i class="far fa-play-circle fa-5x "></i>
                                                        </button>

                                                    </div>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                                <!---->
                            </div>            
                        </div>
                    </div>

                  

                     <!-- Modal -->
                        <div class="modal fade" id="videoModal" data-bs-keyboard="false" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="color : transparent;">
                                <div class="modal-content">                                                                  
                                                      
                                    <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6PDMtqejNfs" allowfullscreen></iframe>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                        <div class="card-deck">
                        <div class="card d-inline-block shadow">
                            <div class="card-body text-center">
                                <img class="" src="views/assets/img/university.png" alt="80px" width="80px">                           
                                <p class="card-text text-primary"><strong>Universidades</strong></p>
                               
                            </div>
    
                        </div>
                        <div class="card d-inline-block shadow">
                            <div class="card-body text-center">
                                <img class="" src="views/assets/img/cap.png" alt="80px" width="80px">                           
                                <p class="card-text text-primary"><strong> Carreras profesionales</strong></p>
                               
                            </div>
                            
                        </div>
                        <div class="card d-inline-block shadow">
                            <div class="card-body text-center">                               
                                <img class="" src="views/assets/img/ase.png" alt="80px" width="80px">                          
                                <p class="card-text text-primary"><strong>Asesoría Personalizada</strong></p>
                               
                            </div>
                            
                        </div>
                     </div>
                     <br>
                     <div>
                        <p>hola prubas</p>
                         <p>hola prubas2</p>
                         <p>hola prubas3</p>
                     </div>

                        
           

          </div>
      </div>
  </div>
</section>
<br>
<br>
<section class="bg-mix py-3">
<h1></h1>
</section><br>

</div>

<!--FIN content-->


<?php  require_once 'views/layouts/footer.php'; ?>

