<!doctype html>
 <style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
legend{
    color: #36A0FF;
}
}
</style>

<html class="no-js" lang="en">

    <head>

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SIALCSV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    {!!Html::style('css/vendor.css')!!}  
      
    {!!Html::style('css/app.css')!!}  





       

        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>

    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
        <div class="logo">
        	<span class="l l1"></span>
        	<span class="l l2"></span>
        	<span class="l l3"></span>
        	<span class="l l4"></span>
        	<span class="l l5"></span>
        </div>        Registro de Usuario
        
      </h1> </header>
                    <div class="auth-content">
                        <p class="text-xs-center">Modificacion de Usuario</p>
                        {!! Form::open(array('route'=>'permitir.store', 'method' => 'post','files'=>true) )!!}
                       <!-- <form id="signup-form" action="/index.html" method="GET" novalidate="">-->
                            <div class="form-group"> 
                               <i class="fa fa-user bigicon"></i>
                            <label for="firstname">Nuevo usuario</label>
                                <div class="row">
                                    <div class="col-sm-6"> 
                                    <input type="text" class="form-control" id="login" name="login" placeholder="Nombre" required=""> </div>
                                    
                                </div>
                            </div>
                            <div class="form-group"> 
                             <i class="fa fa-google-plus bigicon"></i>

                            <label for="email">Email</label> <input type="email" class="form-control" id="correoEmp" name="correoEmp" placeholder="Correo electronico" required=""> </div>
                             <div class="form-group"> 
                             <i class="fa fa-unlock bigicon"></i>
                            <label for="password">Contraseña Actual</label>
                                <div class="row">
                                    <div class="col-sm-6"> <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required=""> </div>
                                    
                                </div>
                            </div>

                             <div class="row">
                                    <div class="col-sm-6"> <input type="hidden" class="form-control" name="pass" id="pass" placeholder="Contraseña" disabled="true"> </div>
                                    <div class="col-sm-6"> <input type="hidden" class="form-control" name="retype_password" id="retype_password" placeholder="Repita contraseña" disabled="true"> </div>
                                </div>


                            <div class="form-group"> 
                             <i class="fa fa-unlock-alt bigicon"></i>
                            <label for="password">Nueva Contraseña</label>

                               
                                   
                                     <?php
                                     $h=0;
                     
                                        if($h==0){
                                          
                                      ?>


                                <div class="row">
                                    <div class="col-sm-6"> <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required=""> </div>
                                    <div class="col-sm-6"> <input type="password" class="form-control" name="retype_password" id="retype_password" placeholder="Repita contraseña" required=""> </div>
                                </div>
                            </div>
                               <?php } 
                                                     ?>
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Aceptar</button> </div>
                            
                       {!! Form::close() !!}
                    </div>
                </div>
                <div class="text-xs-center">
                    <a href="/" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Regresar </a>
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        
        {!! Html::script('js/vendor.js') !!}
        {!! Html::script('js/app.js') !!}
    </body>

</html>