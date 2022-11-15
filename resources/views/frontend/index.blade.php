@extends('frontend.layout.content')

@section('content-container')
    <div class="container page-content">
        <div class="row">
            <div class="home-heading">
                <h1>FRI Lekáreň</h1>
            </div>
            <div class="home-text">
                <p>Nunc dui turpis, gravida vel<br>
                    aliquet eget, placerat eu enim!</p>
            </div>
            <div class="home-image">
                <a href="{{url('/products')}}"><img src="{{url('frontend/img/building.jpg')}}" alt="Building"></a>
            </div>
        </div>
    </div>
@endsection
