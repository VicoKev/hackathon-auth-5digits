@extends('layouts.core')
@section('content')
    <div class="container">
        <div>
            <h1 class="welcome-text">BIENVENUE AU SCOP !</h1>
            <p class="question-text">Etes-vous déjà inscrits ou nouveau ?</p>
            <div>
                <div class="page1_homme"><img src="{{asset('assets\images\illustrations\page1_homme.svg')}}" alt=""></div>
                <div class="btn-container">
                    <button>Usager</button>
                    <button>Nouveau</button>
                </div>
                <div class="page1_femme"><img src="{{asset('assets\images\illustrations\page1_femme.svg')}}" alt=""></div>
            </div>
        </div>
    </div>
@endsection
