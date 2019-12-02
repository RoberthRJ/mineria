@extends('layouts.app')

@push('styles')

    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet">

@endpush

@section('content')
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="banner-text">
                    <h1>Agenda Minera Perú</h1>
                    <p>Conecta con cientos de serviciis mineros a nivel nacional, encuentra al más cercano a tu zona.</p>
                </div>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ubicación" name="location" id="location">
                        <select class="custom-select" id="category_id" name="category_id">
                            <option value="">Categoría</option>
                            @foreach(\App\Category::orderBy('category')->pluck('category', 'id') as $id => $category)
                                <option {{ (int) old('category_id') === $id ? 'selected' : '' }} value="{{$id}}">
                                    {{$category}}
                                </option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="explore">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3>Explora diversas opciones</h3>
            </div>
            <div class="d-flex">
                <div class="custom-card d-flex" style="height: 5rem">
                    <img src="assets/images/card/card-1.jpg" alt="" class="img-fluid">
                    <div class="card-text">
                        <p>Busco servicios mineros</p>
                    </div>
                </div>

                <div class="custom-card d-flex" style="height: 5rem">
                    <img src="assets/images/card/card-2.jpg" alt="" class="img-fluid">
                    <div class="card-text">
                        <p>Oferta tus servicios</p>
                    </div>
                </div>

                <div class="custom-card d-flex" style="height: 5rem">
                    <img src="assets/images/card/card-3.jpg" alt="" class="img-fluid">
                    <div class="card-text">
                        <p>Encuentra empleo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="help">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <img src="assets/images/background/background-footer-3.jpg" alt="">
                <div class="help-text text-center">
                    <h3>¿Estas buscando ayuda?</h3>
                    <button class="btn">Explora <i class="fa fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="cards">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3>Explora servicios minero alrededor del Perú</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero explicabo ea laboriosam nostrum quas in vitae repellendus dignissimos.</p>
            </div>
            <div class="pt-2">

                @include('shared.index-card')

            </div>
        </div>
    </div>
</section>
@endsection


@push('scripts')

@endpush
