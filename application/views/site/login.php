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
                            echo form_open('site/login',$at); 
                        ?>                 
                            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>  
                            <?php $this->load->view('site/alerts'); ?>
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
                                        <input type="email" name="email" class="form-control" placeholder="Dirección de correo electrónico">
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group inputicon">
                                       <i class="fa fa-lock" aria-hidden="true"></i>                            
                                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                      </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="checkbox"> Recordarme
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
                                
                        <?php echo form_close(); ?>  
                    </div>
                </div>
           </div>
       </div>    
    </div> 
<!-- /sección -->
<!-- /contenido -->
<?php $this->load->view('site/footer'); ?>