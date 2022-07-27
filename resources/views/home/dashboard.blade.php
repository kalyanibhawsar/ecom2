@extends('home.layouts.layout')
@section('content')
    @include('home.includes.slider')
    <!--/slider-->
    <section>
        <div class="container">
            <div class="row">
                @include('home.product.sidebar')
                @include('home.product.index')
            </div>
        </div>
    </section>
@endsection
