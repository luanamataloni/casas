<html>      <?php
            require 'INCLUIDOR.php';
      
                  
                  $verboso = false;
            
                  if(!isset($_SESSION)) 
                  { 
                        session_start();
            
                        if($verboso)
                        {
                              echo "INICIANDO SESSION";
                        }
                  }
            
            
                  if(isset($_SESSION['STEP']))
                  { 
                        $step = $_SESSION['STEP'];
                        
                        if($step == -1)
                        {
                              $step = 1;
                              $_SESSION['STEP'] = (int) $step;
                        }
            
            
            
            
                        if($verboso)
                        {
                              echo "STEP:" . $step ."<br>";
                        }
            
            
            
                        
            
                        if($step == 1)
                        {
                              $step = 2;
                              compilar("index",false);
                              $_SESSION['STEP'] = (int) $step;
                              // sleep(1);
                              header("Refresh:0");
                              
                              
                              
                              if($verboso)
                              {
                                    echo "ENTRE 1 PONGO EN 2";
                              }
                        }
                        else if ($step == 2)
                        {
                              $step = 3;
                              compilar("index",false);
                              $_SESSION['STEP'] = (int) $step;
                              header("Refresh:0");
                              // header("Location: http://localhost/FRONT-START/index.php".$step);
                              
                              
                              if($verboso)
                              {
                                    echo "ENTRE 2 PONGO EN 3";
                              }
                        }
                        else if ($step == 3)
                        {
                              $step = 1;
                              compilar("index",false);
                              $_SESSION['STEP'] = (int) $step;
                              // sleep(3);
                              // header("Refresh:0");
                              // header("Location: http://localhost/FRONT-START/index.php".$step);
                              
                              
                              
                              
                              if($verboso)
                              {
                                    echo "ENTRE 3 PONGO EN 1";
                              }
                        }
                  }
                  else
                  {
                        compilar("index",false);
                        $_SESSION['STEP'] = 1;
                        header("Refresh:0");
                        
                        
                        
                        if($verboso)
                        {
                              echo "NO HABIA VARIABLE DE SESSION";
                        }
                  }
      ?>
      
      <head>
      
      
            <!-- COLOR BARRA : -->
            <meta content="width=device-width, user-scalable=no" name="viewport">
            <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
            <meta name="theme-color" content="#E36B2C">
      
            <!-- FAVICON : -->
            <link rel="icon" href="assets/images/apmticon.ico" />
      
      
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>
      
            <!-- BS4: -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      
            <!-- FONT AWESOME: -->
            <script src="https://kit.fontawesome.com/01ed377a67.js" crossorigin="anonymous"></script>
            
            <!-- FONTS: -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
            
            <!-- DE ACA SE PUEDE BORRAR: -->
            <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
            <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" rel="stylesheet" /> -->
            <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
            <!-- <script async defer src="https://apis.google.com/js/platform.js"></script> -->
      
      
      
      
      
      </head>      <body ng-app="app" ng-controller="ctl" ng-init="init()" ng-cloak class="body sin-padding col-12">		<div class="contenedor-padre flex">
		
		    <div class="contenedor-izq contenedores-banner col-3">
		        <img class="img-logo" src="https://everythingfenix.com/wp-content/uploads/2018/03/everything-fenix-logo-on-black.png">
		    </div>
		    <div class="contenedor-mid contenedores-banner col-5">
		        <div class="padre flex-between flex-center-v">
		            <div class="item">Contacto</div>
		            <div class="item">Trabajo</div>
		            <div class="item">Tu Vieja</div>
		            <div class="item">Tu Papa</div>
		        </div>
		        
		        <style>
		        .item{
		            padding-left: 25px;
		            padding-right: 25px;
		            padding-top: 15px;
		            color: white;
		            font-size: 16px;
		            font-weight: bold;
		            font-family: 'Montserrat';
		            
		        }
		        .padre{
		            padding-top: 10px;
		        }
		        
		        </style>
		        
		    </div>
		    <div class="contenedor-der contenedores-banner col-4">
		        <div class="caja-login flex-between flex-center-v">
		            <div class="login-in button col-6 flex-center-v">
		        
		                <!-- BOTON INGRESAR -->
		                <button class="btn btn-secondary" ng-click="mostrarCartelUsuario()">
		                    <i class="fa-solid fa-user"></i>
		                    Ingresar
		                </button>
		        
		        
		                <div class="login-up button col-6">
		        
		                    {{mostrarCartel}}
		                </div>
		        
		                
		        
		        
		            </div>
		            
		        </div>
		        
		        
		        
		        <style>
		            
		            .login-in {
		                /* background-color: black; */
		                height: 100%;
		        
		            }
		            .login-up {
		                /* background-color: blue; */
		                height: 100%;
		                
		            }
		            .caja-login {
		                height: 70px;
		                /* background-color: white; */
		        
		            }
		        </style>
		        
		    </div>
		</div>
		
		<div class="cartelito" ng-show="mostrarCartel"> 
		    <div class="form-group">
		      <label for="usr">Nombre Usuario:</label>
		      <input type="text" class="form-control" ng-model="correo">
		        <br>
		        El Email que escribiste es: 
		      {{correo}}
		    </div>
		
		    <div class="form-group">
		      <label for="pwd">Contrase??a:</label>
		      <input type="password" class="form-control" ng-model="contrasena">
		      <br>
		      Tu contrase??a es:
		      {{contrasena}}
		    </div>
		
		
		    <button class="btn btn-info" ng-click="guardarUsuario()" >
		        Ingresar
		    </button>
		
		    <button class="btn btn-danger" ng-click="mostrarCartelUsuario()">
		        Cancelar
		    </button>
		</div>
		
		
		<style>
		.cartelito {
		    position: absolute;
		    top: 20%;
		    left: 20%;
		    right: 20%;
		    border: solid 1px red;
		}
		</style>
		
		
		
		<style>
		
		    .contenedor-padre
		    {
		        height: 70px;
		        background-color: red;
		
		    }
		    .contenedor-izq
		    {
		        height: 100%;
		        background-color: green;
		    }
		    .contenedor-mid
		    {
		        height: 100%;
		        background-color: blue;
		    }
		    .contenedor-der
		    {
		        height: 100%;
		        background-color: rgb(255, 204, 0);
		    }
		
		    .img-logo{
		        height: 100%;
		    }
		</style>	</body>	<script>      app = angular.module('app', ['ngSanitize']);
      app.controller('ctl', function ($scope, $http)
      {	
	    // VARIABLE
	    $scope.mostrarCartel=true;
	
	
	    // FUNCION
	    $scope.mostrarCartelUsuario = function()
	    {
	        $scope.mostrarCartel=!$scope.mostrarCartel;
	    }
	
	    $scope.guardarUsuario=function(){
	        // alert("Estoy guardando el usuario" + " "+  $scope.correo + " " + $scope.contrasena)
	
	        $scope.cargando = false;
	        $.ajax(
	        {
	            url:"autenticarse.php",
	            data:
	            {
	                "mail":$scope.correo,
	                "clave":$scope.contrasena
	            },
	            beforeSend: function (xhr) 
	            {
	                $scope.cargando = true;
	            },
	            success: function (resultado, textStatus, jqXHR) 
	            {
	                if(resultado == true)
	                {
	                    alert("INGRESASTE A LA WEB");
	                }
	                else
	                {
	                    alert("USUARIO O CLAVE INVALIDAS")
	                }
	                $scope.cargando = false;
	                $scope.$evalAsync();
	            }
	
	        });
	    }
	    
	
	
	});      </script>
      
      <style>
      .sin-padding {
            padding-left: 0px;
            padding-right: 0px;
            margin-left: 0px;
            margin-right: 0px;
      }
      
      .pointer {
            cursor: pointer;
      }
      
      .flex {
            display: flex;
      }
      .flex-center
      {
            display: flex;
            justify-content: center;
            align-items: center;
      }
      .flex-center-h
      {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
      }
      .flex-center-v
      {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
      }
      .flex-start
      {
            display: flex;
            justify-content: start;
            align-items: center;
      }
      .flex-between
      {
            display: flex;
            justify-content: space-between;
            align-items: center;
      }
      .center
          {
              text-align: center;
          }
      </style></html>