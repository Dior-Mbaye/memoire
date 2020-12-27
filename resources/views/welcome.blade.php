@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<style>
    .home{
        display: flex;
        flex-direction: row;
    }
    .text-welcome{
        display: flex;
        flex-direction:column;
        justify-content: center;
        width: 50%;
    }
    .image-welcome{
        width: 50%;
        display: flex;
        flex-direction:column;
        justify-content: center;
    }
    .img{
        border-radius: 40%;
    }
</style>
    <div class="header  py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-md-12 home">
                        <div class="text-welcome">
                            <h1 style="color: white;">BIENVENUE DANS LA COMMUNAUTE PROFESSIONNELLE DE L'ESMT</h1>
                        </div>
                        <div class="image-welcome">
                        <img src="{{ asset('argon') }}/img/brand/img.jpg" class="img" style="width: 80%;height:100%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
