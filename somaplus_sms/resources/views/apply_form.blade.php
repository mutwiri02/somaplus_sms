@extends('layouts.app')
@section('content')
    <div class="space-50"></div>
    <div class="space-50"></div>
    <section class="section-padding" id="send-application">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="{{ asset('images/about-logo.png') }}" alt="About Logo" width="50">
                        <div class="space-20"></div>
                        <h5 class="title">Send Application for a school of your choice</h5>
                        <div class="space-30"></div>
                        <div class="space-20"></div>

                        @livewire('school-form')

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

