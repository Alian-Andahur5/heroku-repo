@extends('layouts.main')

@section('content')

  <div class="container">
         <div class="row">
            <form name="Registrar" class="col s12">

                <div class="row">
                    <div class="input-field col s6" >
                    <input placeholder="ingresar nombre" id="nombre" type="text" class="validate" data-length="10">
                    <label class="active">Nombre</label>
                    <div  id="caja-error" class="alert alert-danger hide" role="alert">Nombre de usuario debe ser menor a 25 caracteres</div>
                    <div  id="caja-correcta" class="alert alert-success hide" role="alert"> Nombre de usuario correcto </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    <input placeholder="ingresar su email" id="email" type="email" class="validate">
                    <label class="active" for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6">
<<<<<<< HEAD
                    <input placeholder="ingresar una contreña" id="contraseña" type="password" class="validate">
=======

                    <input placeholder="ingresar una contreña" id="contraseña1" type="password" class="validate">
>>>>>>> 5ec1d76b70c9b3b3fc456347462acc723c8c408d
                    <label class="active" for="contraseña">Contraseña</label>

                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6">
<<<<<<< HEAD
                    <input placeholder="ingresar nuevamente su contreña" id="recontraseña" type="password">
=======
                    <input placeholder="ingresar nuevamente su contreña" id="contraseña2" type="password">
>>>>>>> 5ec1d76b70c9b3b3fc456347462acc723c8c408d
                    <label class="active" for="recontraseña">Ingrese nuevamente la contraseña</label>

                    </div>
                    </div>
                </div>
                <a class="waves-effect waves-light btn z-depth-5">confirmar</a>
        </div>
@Stop
@section('scripts')
        <script>

//validacion nombre dentro de document

                $(document).ready(function(){
                $("#nombre").blur(function(event) {
                 var username = $("#nombre").val();
                 var n = username.length;
                 $('#caja-error').removeClass('hide');
                 $(this).val("");
                 $('#caja-correcta').removeClass('hide');
                 $(this).val("");


                 if (n > 25) {
                     greeting = "#caja-error";
                 } else {
                     greeting = "#caja-correcta";
                 }


                });
//Validacion email
                 function validateMail(email){

                    	object=document.getElementById(email);
                    	valueForm=object.value;


                    	var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
                    	if(valueForm.search(patron)==0)
                    	{

                    		object.style.color="#000";
                    		return;
                    	}

                    	object.style.color="#f00";
                    };

                    var p1 = document.getElementById("contraseña1").value; //validacion password1 y password2
                    var p2 = document.getElementById("contraseña2").value;
                    var espacios = false;
                    var cont = 0;

                      while (!espacios && (cont < p1.length)) {
                        if (p1.charAt(cont) == " ")
                          espacios = true;
                        cont++;
                      }
                      if (espacios) {
                        alert ("La contraseña no puede contener espacios en blanco");
                        return false;
                      }


                      if (p1.length == 0 || p2.length == 0) {
                            alert("Los campos de la contraseña no pueden quedar vacios");
                            return false;
                          }


                          if (p1 != p2) {
                               alert("Las passwords deben de coincidir");
                               return false;
                             } else {
                               alert("Todo esta correcto");
                               return true;
                             }


                });

                $(document).ready(function() {
                 Materialize.updateTextFields();
                });
        </script>
@Stop
