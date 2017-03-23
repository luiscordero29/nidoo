<?php $this->load->view('site/header'); ?>
<!-- contenido -->
<!-- sección -->
    <div class="container container-login">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">MI CUENTA</div>
                    <div class="panel-body">
                        <?php 
                            $at = array('class' => 'formulariologin', 'role' => 'form');
                            echo form_open('site/register',$at); 
                        ?>                 
                            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>  
                            <?php $this->load->view('site/alerts'); ?>
                            
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
<!-- /sección -->
<!-- /contenido -->
<?php $this->load->view('site/footer'); ?>