<!-- foooter -->

<footer class="pagefooter">
    <div class="container">
       <div class="row">
            <div class="col-md-3">
                <img class="footer-logo img-responsive center-block" src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="Nidoo"> <!-- logo nidoo -->
            </div>

            <div class="col-md-5 links">
                <div class="row">
                    <div class="col-md-4">

                        <ul class="lista-links">
                            <li>
                                <a href="#">Home</a>
                            </li>
                             <li>
                                <a href="#">Busca tu NIDOO</a>
                            </li>
                             <li>
                                <a href="#">Ofrece tu NIDOO</a>
                            </li>
                             <li>
                                <a href="#">Mi cuenta</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-4">

                        <ul class="lista-links">
                            <li>
                                <a href="#">Recupera tu clave</a>
                            </li>
                             <li>
                                <a href="#">Sobre Nidoo</a>
                            </li>
                             <li>
                                <a href="#">Preguntas Frecuentes</a>
                            </li>                         
                        </ul>

                    </div>
                    <div class="col-md-4">

                        <ul class="lista-links">
                            <li>
                                <a href="#">Información sobre tarifas</a>
                            </li>
                             <li>
                                <a href="#">Términos y Condiciones</a>
                            </li>
                             <li>
                                <a href="#">Aviso de Privacidad</a>
                            </li>                         
                        </ul>

                    </div>

                </div>
            </div>

            <div class="col-md-2">
                <ul class="socialicons">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="col-md-2 text-center">
                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#contactanos">CONTÁCTANOS</a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="creditos">Copyright NIDOO ©<?php echo date("Y"); ?>. Todos los derechos reservados.</p><!-- créditos -->
            </div>
        </div>
    </div>
</footer>

<!-- /footer -->





<!-- Contáctanos -->
<div class="modal" id="contactanos" tabindex="-1" role="dialog" aria-labelledby="contactanos">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>    
      <div class="modal-body">
       
       <div class="row">
          <div class="col-md-5 text-center">
                <img class="img-responsive center-block" src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="">
                <p><br></p>
                <h4>NIDOO.SAS</h4>
                <p><br></p>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong> Cra 44 #56-89</strong> <br/>Bogotá, Colombia</p>
                <p><br></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> Tel: 373 47 52</p>
                <p><br></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">info@nidoo.co</a></p>
           </div>
           <div class="col-md-7">
              
               <form action="#" class="formulariomodal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>NOMBRE</label>
                            <input type="text" class="form-control" >
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>EMAIL</label>
                            <input type="text" class="form-control" >
                          </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>TELÉFONO</label>
                            <input type="text" class="form-control" >
                          </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>MENSAJE</label>
                            <textarea name="mensaje" class="form-control" ></textarea>
                          </div>
                        </div>               
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="form-group">                  
                            <input type="submit" class="btn btn-primary" value="ENVIAR">
                          </div>
                        </div>               
                    </div>

                    
                </form>

           </div>
       </div>
        
       
        
      </div>      
    </div>
  </div>
</div>



<!-- login -->
<div class="modal" id="login" tabindex="-1" role="dialog" aria-labelledby="login">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>    
      <div class="modal-body">
       
       <div class="row">
         
           <div class="col-md-12">
              
               <form action="#" class="formulariologin">                 
                
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-primary facebook"><i class="fa fa-facebook" aria-hidden="true"></i>  Iniciar Sesión con Facebook</a>
                    </div>
                </div>
                
                    
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-primary google"><i class="fa fa-google" aria-hidden="true"></i>   Iniciar Sesión con Google</a>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group inputicon">
                           <i class="fa fa-envelope-o" aria-hidden="true"></i>                          
                            <input type="email" class="form-control" placeholder="Dirección de correo electrónico ">
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group inputicon">
                           <i class="fa fa-lock" aria-hidden="true"></i>                            
                            <input type="password" class="form-control" placeholder="Contraseña">
                          </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="checkbox">
                            <label>
                              <input type="checkbox"> Recordarme
                            </label>
                          </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                       <div class="checkbox pull-right">
                        <a href="#">Olvidé mi clave</a>
                       </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                            <div class="form-group">                  
                            <input type="submit" class="btn btn-primary loginb" value="Iniciar Sesión">
                          </div>
                    </div>               
                </div>
                    
                <div class="row">
                    <div class="col-md-12">
                            <hr>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="checkbox">
                            ¿No tienes cuenta?
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default registrate" data-dismiss="modal" data-toggle="modal" data-target="#registrate">Registrate</a>
                        </div>
                    </div>
                </div>

                    
                </form>

           </div>
       </div>
        
       
        
      </div>      
    </div>
  </div>
</div>

    
    

<!-- registro -->
<div class="modal" id="registrate" tabindex="-1" role="dialog" aria-labelledby="registrate">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>    
      <div class="modal-body">
       
       <div class="row">
         
           <div class="col-md-12">
             
             <div class="row">
                 <div class="col-md-12 text-center">
                     <h3>Registrate</h3>
                 </div>
             </div>
              
               <?php 
                            $at = array('class' => 'formulariologin', 'role' => 'form');
                            echo form_open('site/register',$at); 
                        ?>                 
                
                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#" class="btn btn-primary facebook"><i class="fa fa-facebook" aria-hidden="true"></i>  Registrate con Facebook</a>
                                    </div>
                                </div>                
                    
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#" class="btn btn-primary google"><i class="fa fa-google" aria-hidden="true"></i>   Registrate con Google</a>
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <input type="email" name="email" class="form-control" placeholder="Dirección de correo electrónico" required="">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <input type="text" name="name" class="form-control" placeholder="Nombres" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <input type="text" name="lastname" class="form-control" placeholder="Apellidos" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <input type="text" name="company" class="form-control" placeholder="Empresa">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <select name="document_type_id" class="form-control" required="">
                                                <option value="" selected >Tipo de Documento</option>
                                                <option value="16c46c36-953f-483d-92a6-84488d080eab">C.E</option>
                                                <option value="46b1270e-efa6-437c-8bca-66c61358f400">C.C</option>                            
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <input type="text" name="document_number" class="form-control" placeholder="Número de Documento" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <input type="text" name="phone" class="form-control" placeholder="Télefono">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <input type="text" name="mobile_phone" class="form-control" placeholder="Télefono Movil">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">                                                  
                                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                                          </div>
                                    </div>
                                </div>
                               
                                <?php /* ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" checked>Quiero recibir ofertas, promociones y material promocional de NIDOO.
                                            </label>
                                        </div>
                                    </div>                                    
                                </div>
                                */ ?>
                                
                                 <div class="row">
                                    <div class="col-md-12">
                                        <p class="terminos">Al registrarme, acepto las Condiciones del servicio, la Política de Privacidad y los Terminos y Condiciones.</p>
                                        <input type="hidden" name="agree_terms_conditions" value="fe53b237-160f-4d07-b132-195c5a67840a">
                                    </div>                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">                  
                                            <input type="submit" class="btn btn-primary loginb" value="Registrate">
                                        </div>
                                    </div>               
                                </div>
                                    
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col-md-8 col-sm-6 col-xs-6">
                                        <div class="checkbox">
                                            ¿Ya tienes Cuenta en NIDOO?
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default registrate" data-dismiss="modal" data-toggle="modal" data-target="#login">Inicia Sesión</a>
                                        </div>
                                    </div>
                                </div>  

                                <input type="hidden" name="document_image_path" value="">
                                <input type="hidden" name="profile_image_path" value="">

                    
                <?php echo form_close(); ?>

           </div>
       </div>
        
       
        
      </div>      
    </div>
  </div>
</div>
    
    
    

    <!-- Bootstrap core JavaScript
    ================================================== -->   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    
    <!-- Pickadate -->
    <script src="<?php echo base_url('assets/js/pickadate/picker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/pickadate/picker.date.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/pickadate/legacy.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/pickadate/translations/es_ES.js'); ?>"></script>
    
    <!-- JQuery easing -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js "></script>
    
      <!-- JQuery numbers -->
    <script src="<?php echo base_url('assets/js/jquery.number.min.js'); ?>"></script>
    
    <!-- JQuery mousehold -->
    <script src="<?php echo base_url('assets/js/mousehold.js'); ?>"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH92bzGDxQkzX_tRYZWgcy1D8z7OmUwlc&libraries=places&callback=initMap"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH92bzGDxQkzX_tRYZWgcy1D8z7OmUwlc&libraries=places"></script>-->
    
    
    <script>
        
      var map;
        
      function initMap() {
          
          
        map = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 16,
          center: new google.maps.LatLng(4.672487,-74.1071316),
          mapTypeId: 'roadmap',
          scrollwheel: false     
        });
          
        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: '<?php echo base_url('assets/images/marker.png'); ?>',
            map: map
          });
        }
          
          
        var features = [         
         {
            position: new google.maps.LatLng(4.673214, -74.112217)
          },
         {
            position: new google.maps.LatLng(4.672915, -74.111809)
          },
         {
            position: new google.maps.LatLng(4.673193, -74.111402)
          },
         {
            position: new google.maps.LatLng(4.673663, -74.110908)
          },
         {
            position: new google.maps.LatLng(4.672786, -74.111187)
          },
         {
            position: new google.maps.LatLng(4.672273, -74.111573)
          },
         {
            position: new google.maps.LatLng(4.672765, -74.111015)
          },
         {
            position: new google.maps.LatLng(4.673471, -74.110264)
          },
         {
            position: new google.maps.LatLng(4.673107, -74.110007)
          },
         {
            position: new google.maps.LatLng(4.671952, -74.110350)
          },
         {
            position: new google.maps.LatLng(4.671867, -74.111101)
          },
         {
            position: new google.maps.LatLng(4.672679, -74.112002)
          },
         {
            position: new google.maps.LatLng(4.671439, -74.112346)
          },
            
        ];
          
        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }
          
          
        var contentString = '<div class="infobox"><h4>Ed. Balcones del Chicó</h4><p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p><p class="detalles">20 mts | Cubierto</p></div>';
          
      var infowindow = new google.maps.InfoWindow({
        content: contentString,
        pixelOffset:0
          
      });
          
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(4.673707, -74.111867),
        map: map,
        icon: '<?php echo base_url('assets/images/marker.png'); ?>',
        title: 'Ed. Balcones del Chicó'
      });
          
      infowindow.open(map, marker);
          
          
      var options = {
        //types: ['(cities)'],
        componentRestrictions: {country: "co"}
      };
      
      var input = document.getElementById('location');
      var autocomplete = new google.maps.places.Autocomplete(input, options);


        
      }
        
    
        
    </script>
    
    <!-- Funciones nidoo -->
    <script src="<?php echo base_url('assets/js/funciones.js'); ?>"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
    
    <!-- owl carousel -->
    <script src="<?php echo base_url('assets/js/owl-carousel/owl.carousel.min.js'); ?>"></script>
    
    <script>
        jQuery(document).ready(function(){
          jQuery(".owl-carousel").owlCarousel({
            loop:true,
            autoplay:true,
            margin:40,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
          });
        });
    </script>
    

</body>


</html>