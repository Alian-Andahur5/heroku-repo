@extends('layouts.main')

@section('content')

  <div class="container">
         <div class="row">
            <form name="Registrar" class="col s12">

                <div class="row">
                    <div class="input-field col s6" >
                    <input placeholder="ingresar nombre" id="nombre" type="text" class="validate">
                    <label class="active">Nombre</label>
                    <div  id="caja-error" class="alert alert-danger hide" role="alert">Nombre de usuario debe ser menor a 25 caracteres</div>
                    <div  id="caja-correcta" class="alert alert-success hide" role="alert"> Nombre de usuario correcto </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    <input placeholder="ingresar su email" id="email" type="text" class="validate">
                    <label class="active" for="email">Email</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6">
                    <input placeholder="ingresar una contreña" id="contraseña" type="text" class="validate">
                    <label class="active" for="contraseña">Contraseña</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6">
                    <input placeholder="ingresar nuevamente su contreña" id="recontraseña" type="text">
                    <label class="active" for="recontraseña">Ingrese nuevamente la contraseña</label>
                    </div>
                    </div>
                </div>
                <a class="waves-effect waves-light btn z-depth-5">confirmar</a>
        </div>
@Stop
@section('scripts')
        <script>
        
                $(document).ready(function(){
                $("#nombre").blur(function(event) {
                 var username = $("#nombre").val();
                 var n = username.length;
                 $('#caja-error').removeClass('hide');
                 $(this).val("");
                 console.log(n);

                 if (n > 25) {
                         greeting = "caja-error";
                     } 


                });

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
                    }



                });

                $(document).ready(function() {
                 Materialize.updateTextFields();
                });
        </script>
@Stop
