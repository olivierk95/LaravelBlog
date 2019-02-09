@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            Password renewal
        @endslot

        <form method="POST" action="{{route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            @include('partials.form-group', [
            'title' => __('Mail address'),
            'type' => 'email',
            'name' => 'email',
            'required' => true,
            ])
            
            @include('partials.form-group', [
            'title' => __('Password'),
            'type' => 'password',
            'name' => 'password',
            'required' => true,
            ])

            @include('partials.form-group', [
            'title' => __('Password confirmation'),
            'type' => 'password',
            'name' => 'password_confirmation',
            'required' => true,
            ])

            @component('components.button')
                Renew
            @endcomponent
        </form>

    @endcomponent
@endsection
