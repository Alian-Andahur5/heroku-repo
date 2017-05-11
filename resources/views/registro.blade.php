@extends('layouts.main')

@section('content')



  <div class="container">
         <div class="row">
            <form name="Registrar" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                    <input id="nombre" type="text">
                    <label for="nombre">Nombre</label>
                    <div  id="caja-error" class="alert alert-danger hide" role="alert">Nombre de usuario debe ser menor a 25 caracteres</div>

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    <input id="email" type="text">
                    <label for="email">Email</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6">
                    <input id="contraseña" type="text">
                    <label for="contraseña">Contraseña</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6">
                    <input id="recontraseña" type="text">
                    <label for="recontraseña">Ingrese nuevamente la contraseña</label>
                    </div>
                    </div>
                </div>
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
                     greeting = "#caja-error";
                   }
                 else {
                      greeting = "hide";
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
        </script>
@Stop
