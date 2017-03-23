<?php $this->load->view('site/header'); ?>

<!-- contenido -->

<!-- sección -->

<section class="section slide">
    <div class="container">
        <div class="row slide1" style="display:none;">
            <div class="col-md-6">
                <img class="img-responsive center-block animated " in="rotateIn" out="" time="5000"  src="<?php echo base_url('assets/images/mainsl.png'); ?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="wraptextls">
                    <p class="animated" in="bounceInRight" out="bounceOutLeft" time="5000" style="font-size:40px;font-weight:700;line-height: 38px;">NECESITAS</p>
                    <p class="animated" in="bounceInLeft" out="bounceOutLeft" time="5000" style="font-size:30px;font-weight:700;line-height: 29px;">PARQUEADERO</p>
                    <p class="animated" in="bounceInUp" out="bounceOutLeft" time="5000" style="font-size:59px;font-weight:700;line-height: 56px;">CERCA?</p>
                    <p class="animated" in="fadeIn" out="bounceOutLeft" time="5000" style="font-size: 23px;line-height: 24px;">ENCUÉNTRALO POR</p>
                    <p class="animated" in="fadeIn" out="bounceOutLeft" time="5000" style="font-size: 20px;line-height: 22px;">MENSUALIDADES ACÁ!</p>
                    
                    <a href="#" class="btn btn-default pull-right animated" in="fadeIn" out="bounceOutLeft" time="5000" style="margin-top: 15px;">BUSCA TU NIDOO</a>
                </div>
            </div>
        </div>
        
        <div class="row slide2" style="display:none;">
            <div class="col-md-6">
                <img class="img-responsive center-block animated " in="rotateIn" out="" time="5000"  src="<?php echo base_url('assets/images/mainsl.png'); ?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="wraptextls">
                    <p class="animated" in="bounceInRight" out="bounceOutLeft" time="5000" style="font-size:42px;font-weight:700;line-height: 38px;">TIENES UN</p>
                    <p class="animated" in="bounceInRight" out="bounceOutLeft" time="5000" style="font-size:30px;font-weight:700;line-height: 29px;">PARQUEADERO</p>
                    <p class="animated" in="bounceInRight" out="bounceOutLeft" time="5000" style="font-size:34px;font-weight:700;line-height: 34px;">DISPONIBLE?</p>
                    <p class="animated" in="bounceInRight" out="bounceOutLeft" time="5000" style="font-size: 28px;line-height: 30px;">ALQUÍLALO POR</p>
                    <p class="animated" in="bounceInRight" out="bounceOutLeft" time="5000" style="font-size: 20px;line-height: 22px;">MENSUALIDADES ACÁ!</p>
                    
                    <a href="#" class="btn btn-default pull-right animated" in="bounceInRight" out="bounceOutLeft" time="5000" style="margin-top: 15px;">OFRECE TU NIDOO</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="section1">
    <div class="container text-center">
        <div class="row">
           
            <div class="col-md-4">
               <div class="wrap-icon-text">
                    <img class="img-responsive center-block"  src="<?php echo base_url('assets/images/ilustracion1.svg'); ?>" alt="Ilustración">
                    <p>Si estas cansado de no conseguir parqueadero, del “cobro por minuto” o “dejar llaves”, de estacionar en lugares incomodos e inseguros...</p>
                </div>
            </div>
            
            <div class="col-md-4">
               <div class="wrap-icon-text">
                    <img class="margin-ilustraciones img-responsive center-block" src="<?php echo base_url('assets/images/ilustracion2.svg'); ?>" alt="Ilustración">
                    <p>Entra a Nidoo y reserva tu parqueadero! Es muy sencillo; selecciona una zona, escoge un parqueadero y confirma tú solicitud.</p>
                </div>
            </div>
            
            <div class="col-md-4">
               <div class="wrap-icon-text">
                    <img class="margin-ilustraciones img-responsive center-block" src="<?php echo base_url('assets/images/ilustracion3.svg'); ?>" alt="Ilustración">
                    <p>Con Nidoo ahorra tiempo y dinero y parquea como en casa.</p>
                </div>
            </div>
            
        </div>
        <p><br></p>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-default w200">VER MÁS</a>
            </div>
        </div>
    </div>
</section>

<!-- /sección -->


<!-- sección -->

<section class="section" id="section2">
    <!-- botón mapa -->
        <!--<div id="botonmapa" class="botonfiltro closex">
        <i class="fa fa-navicon" aria-hidden="true"></i>
        <i class="fa fa-close" aria-hidden="true"></i>
        </div>-->
    <!-- /botón mapa -->
    
    <!-- menu mapa -->
        <div class="wrapmenu-mapa">
           <div class="botonfiltro closex" >
              <div class="round">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
               <img src="<?php echo base_url('assets/images/filtros.png'); ?>" alt="">
              </div>
           </div>
           <i class="fa fa-close" aria-hidden="true"></i>
            <div class="formbox">
                <div class="headerformb">
                    <div class="row">
                        <div class="col-md-12">
                            <!--<p class="price"></p>-->
                            <p class="titlefilmap">FILTRA TU NIDOO</p>
                        </div>
                        <!--<div class="col-md-4">
                            <p class="days"></p>
                        </div>-->
                    </div>
                </div>
                
                <div class="wrapform">
                   
                   <!-- formulario -->
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                               <div class="form-group">
                                   <label>Ubicación</label>
                                    <input type="text" id="location" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Inicia</label>
                                    <input type="text" id="input_from" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Termina</label>
                                    <input type="text" id="input_to" class="form-control">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
                                    <button type="submit" class="buscar btn btn-default">BUSCAR</button>
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="nopay">Aún no te cobraremos</p>
                            </div>
                        </div>
                    </form>
                    <!-- /formulario -->
                    
                </div>
            </div>
        </div>
    
    <!-- /menu mapa -->
    
    <div id="mapa"></div><!-- mapa -->
      
</section>

<!-- /sección -->


<!-- sección -->

<section class="section azul" id="section4">
    <div class="container">
        <div class="row">
          
            <div class="col-md-3">
                <img class="img-responsive center-block megafono" src="<?php echo base_url('assets/images/megafono.svg'); ?>" alt="Megafono"><!-- megafono -->
            </div>
           
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 formulario-home">
                        <h2 class="tituloblanco">No has encontrado lo que estás buscando?</h2>
                        <p>Podemos ayudarte!</p>
                        
                        <!-- formulario -->
                        <form action="#">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Dirección">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                     <input type="email" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">                                
                                      <input type="submit" class="btn btn-primary" value="ENVIAR"> 
                                </div>
                            </div>
                        </div>                            
                        </form>
                        <!-- /formulario -->
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- /sección -->


<!-- sección -->

<section class="section" id="section3">
    <div class="container text-center">
        <div class="row">
           
            <div class="col-md-12">
                <h1>ENCUENTRA TU ZONA</h1>
            </div>
            
        </div>
        
        <div class="row">
           
            <div class="col-md-8 zonacol1">
            
             <!-- zona -->
              <div class="zonas usaquen text-left">
                  <div class="overlay">
                     <div class="row">
                         <div class="col-md-12">
                             <h3 style="margin-top: 126px;">Usaquén</h3>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-md-4">

                            

                         </div>

                        <div class="col-md-4">

                             

                         </div>
                         <div class="col-md-4"></div>
                     </div>



                  </div>
                </div>
                <!-- /zona -->
                            
            </div>           
            
            <div class="col-md-4 zonacol2">
              
              <div class="row">
                  <div class="col-md-12">
                      <!-- zona -->
                      <div class="zonas teusaquillo text-left medio">
                          <div class="overlay">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h3 style="margin-top: 32px;">Teusaquillo</h3>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">

                                    

                                 </div>

                                <div class="col-md-6">

                                   

                                 </div>
                             </div>



                          </div>
                        </div>
                        <!-- /zona -->
                      
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-12">
                     
                      <!-- zona -->
                      <div class="zonas suba text-left medio">
                          <div class="overlay">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h3 style="margin-top: 32px;">Suba</h3>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">

                                   

                                 </div>

                                <div class="col-md-6">

                                 </div>
                             </div>



                          </div>
                        </div>
                        <!-- /zona -->
                      
                  </div>
              </div>
               
            </div>
            
        </div>
        
         <div class="row">
           
            <div class="col-md-4 zonacol3">
              
                    <!-- zona -->
                      <div class="zonas chapinero text-left">
                          <div class="overlay">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h3 style="margin-top: 126px;">Chapinero</h3>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">

                                  

                                 </div>

                                <div class="col-md-6">

                              

                                 </div>
                             </div>



                          </div>
                        </div>
                        <!-- /zona -->
               
            </div>
            
            <div class="col-md-4 zonacol4">
              
                       <!-- zona -->
                      <div class="zonas candelaria text-left">
                          <div class="overlay">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h3 style="margin-top: 126px;">Candelaria</h3>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">

                                  

                                 </div>

                                <div class="col-md-6">

                                     
                                 </div>
                             </div>



                          </div>
                        </div>
                        <!-- /zona -->
               
            </div>
            
            <div class="col-md-4 zonacol5">
              
              <div class="row">
                  <div class="col-md-12">
                     
                      <!-- zona -->
                      <div class="zonas fontibon text-left medio">
                          <div class="overlay">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h3 style="margin-top: 32px;">Fontibón</h3>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">

                               

                                 </div>

                                <div class="col-md-6">

                                

                                 </div>
                             </div>



                          </div>
                        </div>
                        <!-- /zona -->
                      
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-12">
                     
                      <!-- zona -->
                      <div class="zonas ptearanda text-left medio">
                          <div class="overlay">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h3 style="margin-top: 32px;">Pte. Aranda</h3>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">

                                   

                                 </div>

                                <div class="col-md-6">

                                     
                                 </div>
                             </div>



                          </div>
                        </div>
                        <!-- /zona -->
                      
                  </div>
              </div>
               
            </div>
            
        </div>
        
        
    </div>
</section>

<!-- /sección -->









<!-- sección -->

<section class="section" id="section5">
    <div class="container">
        <div class="row">
           
            <div class="col-md-12 text-center">
                <h1>NIDOO EN LOS MEDIOS</h1>
            </div>
            
        </div>
        

        <!-- logos -->
        <div class="row">
           <div class="col-md-12">
               <div class="owl-carousel logos">
                   <div>
                      <a href="http://www.bluradio.com/tecnologia/conozca-nidoo-una-opcion-para-encontrar-estacionamiento-precio-justo-114265" target="_blank">
                       <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/BLU-Radio-conozca-nidoo-una-opcion-para-encontrar-estacionamiento-precio-justo.png'); ?>" alt="Bluradio">
                      </a>
                   </div>
                   <div>
                       <a href="http://caracol.com.co/emisora/2016/09/22/bogota/1474578743_180307.html" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/Caracol-Radio-ya-hay-un-sitio-web-para-encontrar-parqueadero-en-Bogota.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                        <a href="#" target="_blank">
                            <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/Diario-ADN-NIDOO-La-Nueva-Alternativa-para-Parquear.png'); ?>" alt="">
                        </a>
                   </div>
                   <div>
                      <a href="http://www.dinero.com/pais/articulo/plataforma-para-conseguir-parqueadero-privado-en-bogota-y-tarifas/231401" target="_blank">
                          <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/Dinero-plataforma-para-conseguir-parqueadero-privado-en-bogota-y-tarifas.png'); ?>" alt="">
                      </a>                       
                   </div>
                   <div>
                        <a href="http://www.elespectador.com/vivir/autos/nidoo-una-ayuda-encontrar-parqueadero-bogota-articulo-650010" target="_blank">
                            <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/El-Espectador-nidoo-una-ayuda-encontrar-parqueadero-bogota.png'); ?>" alt="">
                        </a>                        
                   </div>
                   <div>
                      <a href="http://www.eltiempo.com/bogota/nidoo-plataforma-para-conseguir-parqueadero-en-bogota/16709542" target="_blank">
                          <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/El-Tiempo-NIDOO-la-nueva-opcion-para-parquear-en-Bogota.png'); ?>" alt="">
                      </a>                       
                   </div>
                   <div>
                       <a href="http://hsbnoticias.com/noticias/bogota/sabe-donde-parquear-en-bogota-sin-problemas-conozca-nidoo-la-236987" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/HSB-Noticias-sabe-donde-parquear-en-bogota-sin-problemas-conozca-nidoo.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                       <a href="http://www.larepublica.co/s%C3%A1quele-provecho-al-parqueadero_416521" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/La-Republica-saquele-provecho-al-parqueadero.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                       <a href="#" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/NTN24-Entrevista-a-NIDOO.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                       <a href="https://es.panampost.com/julian-villabona/2016/08/17/nidoo-la-nueva-alternativa-para-estacionar-en-bogota/" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/Panam-Post-nidoo-la-nueva-alternativa-para-estacionar-en-bogota.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                       <a href="http://periodicoamarillo.com/nidoo-la-pagina-web-para-encontrar-parqueadero-en-bogota/" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/Periodico-Amarillo-NIDOO-la-pagina-web-para-encontrar-parqueadero-en-Bogota.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                       <a href="https://www.publimetro.co/co/bogota/2016/09/20/ahora-encontrar-parqueadero-bogota-sera-menos-doloroso.html" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/Publimetro-ahora-encontrar-parqueadero-bogota-sera-menos-doloroso.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                       <a href="#" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/Revista-Caras-NIDOO-el-nuevo-garaje.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                       <a href="http://www.wradio.com.co/escucha/archivo_de_audio/nidoo-es-una-plataforma-que-te-ayuda-a-conseguir-parqueadero-cerca-santiago-robayo/20160905/oir/3237576.aspx" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/W-Radio-nidoo-es-una-plataforma-que-te-ayuda-a-conseguir-parqueadero-cerca.png'); ?>" alt="">
                       </a>
                   </div>
                   <div>
                       <a href="https://www.xataka.com.co/aplicaciones/asi-es-nidoo-la-aplicacion-para-conseguir-parqueadero-en-bogota" target="_blank">
                           <img class="img-responsive center-block" src="<?php echo base_url('assets/images/medios/Xataca-asi-es-nidoo-la-aplicacion-para-conseguir-parqueadero-en-bogota.png'); ?>" alt="">
                       </a>
                   </div>
               </div>
           </div>
           
        </div>
        <!-- /logos -->
        
        
    </div>
</section>

<!-- /sección -->

<!-- /contenido -->


<?php $this->load->view('site/footer'); ?>