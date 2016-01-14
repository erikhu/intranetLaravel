<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Huellas - Intranet</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">    

    <!-- Custom styles for this template -->
    <link href="/assets/css/register.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" method="post" action="/auth/register">
                    <h2>Registro de Usuario <small>Intranet Huellas - Docentes.</small></h2>
                    <hr class="colorgraph">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        Por favor, corrija los siguientes errores: <br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach                                          
                        </ul>                     
                    </div>                     
                  @endif
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="nombres" id="nombres" class="form-control input-lg" placeholder="Nombres" tabindex="1" autofocus required>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="tipo_usuario" value="docente">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="apellidos" id="apellidos" class="form-control input-lg" placeholder="Apellidos" tabindex="2" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="tel" name="telefono" id="telefono" class="form-control input-lg" placeholder="Teléfono" tabindex="3">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">                                
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electronico" tabindex="4" required>
                            </div>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <input type="text" name="colegio" id="colegio" class="form-control input-lg" placeholder="Colegio" tabindex="5" required>
                    </div>  
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="grado" id="grado" class="form-control input-lg" placeholder="Grado" tabindex="6" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 checkboxes">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="seccionPrimaria" name="seccionPrimaria" tabindex="7" value="off"> Primaria
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="seccionSecundaria" name="seccionSecundaria" value="off" tabindex="8"> Secundaria
                            </label>
                        </div>                    
                    </div>
                    <div class="row">                        
                        <div class="col-xs-12 col-sm-12 col-ms-12">
                            <h2><small>Cargo que desempeña</small></h2>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">                            
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Tutor" checked>
                                    Tutor
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="ProfesorReligion">
                                    Profesor de Religión
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="CoordinadorTutoria">
                                    Coordinador de Tutoría
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios4" value="Otro">
                                    Otro
                                </label>
                            </div>                            
                        </div>       
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios5" value="DirectorCoordAcademico">
                                    Coordinador Académico
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios6" value="Director">
                                    Director
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios7" value="Promotor">
                                    Promotor
                                </label>
                            </div>                            
                        </div>        
                    </div>                    
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="11">
                    </div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-2 checkboxes">
                           <div class="form-group lbl">
                               <label>Proyecto </label>
                           </div>
                       </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 checkboxes">                            
                            <label class="checkbox-inline">
                                <input type="checkbox" value="off" id="proyHuellas" name="proyHuellas" tabindex="12"> Huellas
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="off" id="proyJMF" name="proyJMF" tabindex="13"> Jesus Me Fascina
                            </label>
                        </div>                    
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="14"></div>
                        <div class="col-xs-12 col-md-6"><a id="btnLogin" href="/" class="btn btn-success btn-block btn-lg">Iniciar Sesión</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>      
    <script src="/assets/js/main.js"></script>
</body>
</html>