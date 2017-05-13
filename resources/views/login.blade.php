@extends('layouts.main')


@section('content')

<div  class="row" style="width:600px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;">
        <div class="container">
         <div class="row">
            <form class="col s12">
            <div class="row">
            </div>
                <div class="row">
                    <div class="input-field col s6">
                    <input placeholder="ingrese su email" id="email" type="email" class="validate">
                    <label class="active" for="email" data-error="no valido" data-success="correcto">Email</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6 ">
                    <input placeholder="ingrese su contraseña" id="contraseña" type="password" class="validate">
                    <label class="active" for="contraseña">Contraseña</label>
                    </div>
                    </div>
                </div>

                <div class="col s6 offset-s4"><a class="waves-effect waves-light btn z-depth-5">Confirmar</a></div>
        </div>
        </div>
@Stop
@Section('scripts')



@Stop
