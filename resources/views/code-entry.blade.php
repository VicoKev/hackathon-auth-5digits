@extends('layouts.core')
@section('content')
    <div class="container">
        <div>
            <h1 class="welcome-text">BIENVENUE AU SCOP !</h1>
            <div class="page2"><img src="{{asset('assets\images\illustrations\page2.svg')}}" alt=""></div>
            <div class="code-container">
                <div>
                    <label for="code">Code :</label>
                    <input type="text" maxlength="15">
                </div>
            </div>
            <div class="validate-btn">
                <button>Valider</button>
            </div>
        </div>
    </div>
@endsection
