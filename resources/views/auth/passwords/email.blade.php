@extends('layouts.form')

@section('card')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @component('components.card')

        @slot('title')
            Password renewal
        @endslot

        <form method="POST" action="{{route('password.email') }}">
            {{ csrf_field() }}

            @include('partials.form-group', [
            'title' => __('Mail address'),
            'type' => 'email',
            'name' => 'email',
            'required' => true,
            ])

            @component('components.button')
                Send modifications
            @endcomponent
            
        </form>

    @endcomponent

@endsection
