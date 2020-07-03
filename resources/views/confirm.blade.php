@extends('layouts.app')

@section('title', 'Thank you for contacting HighPoint')

@section('content')
<div class="thankyou">
    <div class="header">
        <div class="container">
            <div class="row">
            <img src="img/highpointlogo.png" alt="HighPoint Interactive" />
            </div>
        </div>
    </div>
    <div class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Thank <span>You</span></h1>
                </div>
            </div>
        </div>
    </div><!--/hero-->
    <div class="services d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 panel-content">
                    <h2>Thank You <span>For Contacting Us</span></h2>
                    <p class="blurb">A member will reach out to you soon!</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection