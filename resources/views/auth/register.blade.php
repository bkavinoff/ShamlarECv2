@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      	<!--//////////////<CABECERA>///////////////-->
        <div class="container">
            <div class="panel panel-success text-center">
                <div class="panel-heading">
                    Registro de nuevo usuario
                </div>
            </div>
      		<!--//////////////</CABECERA>///////////////-->
            <span class="RegistroOK ">
                        @echo "<div class=\"alert alert-info text-center\" role=\"alert\"><strong>HECHO!!</strong> El usuario se ha registrado con éxito.</div>";

            </span>
    		<!--//////////////<CONTENIDO>///////////////-->
      		<div class ="fondoregistracion container-fluid">
          		<form id='register' action='/register' method='post' enctype="multipart/form-data">
                    {{ csrf_field() }}
              		<input type='hidden' name='submitted' id='submitted' value='1'/>
              		<div>
                        <span class='error'></span>
                    </div>
            		<div class="container2">
              	         <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                		        <input class="form-control" type="text" placeholder="Nombre" name="name" id= "name" value= "" maxlength="50" required >
                			    <span style="color: red"  class='error'>
                			    </span>
                		    </div>
              		    </div>
            	    </div>
            		<br>
    		            <div class="container2">
              			<div class="form-group">
                			<div class="col-lg-12 col-md-12 col-xs-12">
                 		        <input class="form-control" type="text" placeholder="E-mail" name="email" id = "email" value=""  maxlength="50" required>
                				<span style="color: red"  class='error'>
                				</span>
              				</div>
              			</div>
            		</div>
            		<br>
            		<div class="container2">
              			<div class="form-group">
                			<div class="col-lg-12 col-md-12 col-xs-12">
                  				<input class="form-control" type='text' placeholder="Nombre de Usuario" name='username' id='username' value='' maxlength="50" />
                  				<span style="color: red"  class='error'>
                                </span>
                    		</div>
                  		</div>
                	</div>
                    <br>
            		<div class="container2">
              			<div class="form-group">
                			<div class="col-lg-12 col-md-12 col-xs-12">
                                <input class="form-control" type="password" placeholder="Password" name="password" id = "password" maxlength="50" required>
                                <span style="color: red"  class='error'>
                			 	</span>
                			</div>
            			</div>
          			</div>
                    <br>
            		<div class="container2">
              			<div class="form-group">
                			<div class="col-lg-12 col-md-12 col-xs-12">
                                <input class="form-control" type="password" placeholder="Password" name="password_confirmation" id = "password_confirmation" maxlength="50" required>
                                <span style="color: red"  class='error'>
                			 	</span>
                			</div>
            			</div>
          			</div>
                    <br>
          	        <br>
              	    <div class='container2'>
                        <div class="form-group ">
                            <div class="col-lg-12 col-md-12 col-xs-12">
             				    <label for='avatar' >Avatar:</label><br/>
                 		        <input class="form-control" type='file' name='avatar'/><br/>
                 		        <span id='register_username_errorloc' class='error'></span>
                            </div>
                        </div>
                    </div>
    			        <div class="col-lg-2 col-md-2 col-xs-2">
          		 		<button class = "btn btn-success vermas" type="submit" value="Enviar">REGISTRARME</button>
        			</div>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection
