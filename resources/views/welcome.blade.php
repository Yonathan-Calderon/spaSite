@extends('layouts.template')

@section('content')

@foreach($productos as $producto)



                    
                    <div class="place__card">
                        <img src="{{ asset('storage').'/'.$producto->imagenServicio}}" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">{{$producto->tituloServicio}}</h3>
                                <span class="place__price">{{$producto->precioServicio}}$&nbsp por sesion</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                           <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

               

@endforeach
@endsection
