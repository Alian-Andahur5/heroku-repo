@extends('layouts.main')


@section('content')


        <div class="container">
         <div class="row">
            <form class="col s12">
            <div class="row">
            </div>
                <div class="row">
                    <div class="input-field col s6">
                    <input placeholder="ingrese su email" id="email" type="text">
                    <label class="active" for="email">Email</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6 ">
                    <input placeholder="ingrese su contraseña" id="contraseña" type="text">
                    <label class="active" for="contraseña">Contraseña</label>
                    </div>
                    </div>
                </div>

                <a class="waves-effect waves-light btn z-depth-5">Confirmar</a>
        </div>
@Stop
@Section('scripts')



@Stop
