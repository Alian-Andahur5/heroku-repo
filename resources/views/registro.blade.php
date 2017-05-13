@extends('layouts.main')

@section('content')


<div  class="row" style="width:600px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;">
  <div class="container">
         <div class="row">


                <div class="row">
                    <div class="input-field col s6" >

                    <input placeholder="ingresar nombre" name="ingresarnombre"  id="nombre" type="text" class="validate" data-length="10">
                   <label class="active">Nombre</label>
                    <div  id="caja-error" class="alert alert-danger hide" role="alert">Nombre de usuario debe ser menor a 10 caracteres</div>
                    <div  id="caja-correcta" class="alert alert-success hide" role="alert"> Nombre de usuario correcto </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    <input placeholder="ingresar su email" name="ingresaremail" id="email" type="text" class="validate">
                    <label class="active" for="email">Email</label>

                    <div  id="mail-error" class="alert alert-danger hide" role="alert">Tu correo tiene caracteres no válidos</div>
                    <div  id="mail-correcto" class="alert alert-success hide" role="alert"> Tu correo es válido </div>
                    </div>
                </div>
                <div class="row">
                <div class="input-field col s6">

                    <input placeholder="ingresar una contreña" name="ingcontraseña1" id="contraseña1" type="password" class="validate">
                    <label class="active" for="contraseña">Contraseña</label>
                    <div  id="contraseña1-error" class="alert alert-danger hide" role="alert">Este campo no puede estar vacio</div>

                    </div>
                </div>
                <div class="row">
                <div class="input-field col s6">


                    <input placeholder="ingresar nuevamente su contraseña" name="ingcontraseña2" id="contraseña2" type="password">
                    <label class="active" for="recontraseña">Ingrese nuevamente la contraseña</label>
                    <div  id="contraseña1-error1" class="alert alert-danger hide" role="alert">La contraseña no puede tener espacios en blanco</div>
                    <div  id="contraseña2-error1" class="alert alert-danger hide" role="alert">Este campo no puede estar vacío</div>
                    <div  id="contraseña2-error2" class="alert alert-danger hide" role="alert">Las contraseñas no coinciden</div>
                    <div  id="contraseña-ok" class="alert alert-success hide" role="alert">Las contraseñas coinciden</div>

                    </div>
                </div>
                </div>

                <div class="col s6 offset-s4"><input  type="submit" id="confirmar" value="confirmar" class="waves-effect waves-light btn z-depth-5 disabled"></a></div>

        </div>
        </div>
@Stop
@section('scripts')
        <script>
//validacion nombre dentro de document

       var statusbtn = false;
            $(document).ready(function(){

                $("#nombre").blur(function(event) {
                   var username = $("#nombre").val();
                   var n = username.length;

                  if (n > 10) {
                         $('#caja-error').removeClass('hide').delay(2000).fadeOut(400);
                              $("#username").val("");
                            statusbtn = false;
                   } else {
                         $('#caja-correcta').removeClass('hide').delay(2000).fadeOut(400);
                         statusbtn = true;
                   }
                });


//Validacion email

                //capturo un evento(click en el boton, tu despues lo cambias a blur del email)
                $("#email").blur(function(event) {
                    //capturo el valor del input email en la variabel email
                    var email = $("#email").val();
                    //llamo a mi funcion definida mas abajo, pasando el parametro que espera
                    validarEmail(email);
                });
                //defino la funcion
                function validarEmail( email ) {
                    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if ( !expr.test(email) )
                    {
                      $('#mail-error').removeClass('hide').delay(2000).fadeOut(400);
                      statusbtn = false;
                    }
                    else {

                      $('#mail-correcto').removeClass('hide').delay(2000).fadeOut(400);
                      statusbtn = true;

                    }
                }

//validacion password1 y password2

                  $("#contraseña2").blur(function(event) {
                     var p2 = $("#contraseña2").val();
                     var p1 = $("#contraseña1").val();
                     var espacios = false;
                     var cont = 0;
                     while (!espacios && (cont < p1.length)) {
                       if (p1.charAt(cont) == " ")
                         espacios = true;
                       cont++;
                     }
                     if (espacios) {

                           $('#contraseña1-error1').removeClass('hide').delay(2000).fadeOut(400);
                           statusbtn = false;

                     }
                     if (p1.length == 0 || p2.length == 0) {

                            $('#contraseña2-error1').removeClass('hide').delay(2000).fadeOut(400);
                            statusbtn = false;
                         }


                         if (p1 != p2) {

                             $('#contraseña2-error2').removeClass('hide').delay(2000).fadeOut(400);
                               statusbtn = false;

                            } else {

                                $('#contraseña-ok').removeClass('hide').delay(2000).fadeOut(400);
                                  statusbtn = true;

                            }
                    });

                    if(btnstatus != false){

                       console.log("bnt activado");
                    }


                 Materialize.updateTextFields();
                });
        </script>
@Stop
