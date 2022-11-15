@extends('frontend.layout.content')

@section('content-container')
    <div class="container page-content">
        <ul class="row products-grid">
            <li class="col-sm-6 col-md-4">
                <div class="products-image">
                    <img src="{{url('frontend/img/paralen.jpg')}}" alt="Paralen">
                </div>
                <div class="products-heading">
                    <h1>Paralen</h1>
                </div>
                <div class="products-description">
                    <p>Fusce venenatis bibendum leo, non tincidunt id.</p>
                </div>
                <div class="products-button">
                    <button type="button" class="btn btn-success">
                        <i class="bi bi-cart4"></i>
                        12,03€
                    </button>
                </div>
            </li>
            <li class="col-sm-6 col-md-4">
                <div class="products-image">
                    <img src="{{url('frontend/img/ibalgin.jpg')}}" alt="Ibalgin">
                </div>
                <div class="products-heading">
                    <h1>Ibalgin</h1>
                </div>
                <div class="products-description">
                    <p>Fusce venenatis bibendum leo, non tincidunt id.</p>
                </div>
                <div class="products-button">
                    <button type="button" class="btn btn-success">
                        <i class="bi bi-cart4"></i>
                        12,03€
                    </button>
                </div>
            </li>
            <li class="col-sm-6 col-md-4">
                <div class="products-image">
                    <img src="{{url('frontend/img/cierneuhlie.jpg')}}" alt="Carbosorb">
                </div>
                <div class="products-heading">
                    <h1>Carbosorb</h1>
                </div>
                <div class="products-description">
                    <p>Fusce venenatis bibendum leo, non tincidunt id.</p>
                </div>
                <div class="products-button">
                    <button type="button" class="btn btn-success">
                        <i class="bi bi-cart4"></i>
                        12,03€
                    </button>
                </div>
            </li>
            <li class="col-sm-6 col-md-4">
                <div class="products-image">
                    <img src="{{url('frontend/img/calciumchloratum.jpg')}}" alt="Calcium">
                </div>
                <div class="products-heading">
                    <h1>Calcium</h1>
                </div>
                <div class="products-description">
                    <p>Fusce venenatis bibendum leo, non tincidunt id.</p>
                </div>
                <div class="products-button">
                    <button type="button" class="btn btn-success">
                        <i class="bi bi-cart4"></i>
                        12,03€
                    </button>
                </div>
            </li>
            <li class="col-sm-6 col-md-4">
                <div class="products-image">
                    <img src="{{url('frontend/img/brufen.jpg')}}" alt="Brufen">
                </div>
                <div class="products-heading">
                    <h1>Brufen</h1>
                </div>
                <div class="products-description">
                    <p>Fusce venenatis bibendum leo, non tincidunt id.</p>
                </div>
                <div class="products-button">
                    <button type="button" class="btn btn-success">
                        <i class="bi bi-cart4"></i>
                        12,03€
                    </button>
                </div>
            </li>
            <li class="col-sm-6 col-md-4">
                <div class="products-image">
                    <img src="{{url('frontend/img/lavekan.jpg')}}" alt="Lavekan">
                </div>
                <div class="products-heading">
                    <h1>Lavekan</h1>
                </div>
                <div class="products-description">
                    <p>Fusce venenatis bibendum leo, non tincidunt id.</p>
                </div>
                <div class="products-button">
                    <button type="button" class="btn btn-success">
                        <i class="bi bi-cart4"></i>
                        12,03€
                    </button>
                </div>
            </li>
        </ul>
    </div>
@endsection
