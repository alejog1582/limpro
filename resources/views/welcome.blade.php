@extends('layouts.app')

@section('content')

    <!--carrousel-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="slider-1">
                    <div style="background-color: #362f2f82">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-6 text-center">
                                <h2 style="color: white">Hacemos el oficio por ti</h2>
                                <h1 style="color: white">Servicio de Aseo</h1>
                                <h3 style="color: white">Califica el servicio prestado y selecciona la persona que te prestara el servicio <small>  <a href="#" style="color: red; text-decoration: underline;">Leer Mas.</a></small></h3>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div style="color: white; background-color: #285091" class="col-12 text-center">
                                        <h3>
                                            Solicita Un Servicio
                                        </h3>
                                    </div>
                                    <div class="col-12" style="background-color: rgba(204,204,204,0.8); color: #285091">
                                        <br>
                                        <form action="/newservicio" method="post">
                                            {{ csrf_field() }}
                                            <label for="date">Selecciona la fecha en que deseas el servicio:</label>
                                            <input type="text" class="form-control datepicker" name="date">
                                            <br>
                                            <button type="submit" class="btn btn-default btn-primary">Seleccionar Fecha</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="carousel-item">
                <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
            </div>-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Fin-carrousel-->

@endsection