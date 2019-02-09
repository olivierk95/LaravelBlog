@extends('layouts.form')

@section('card')

    @component('components.card')
    
        @slot('title')
            Register
        @endslot

        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            @include('partials.form-group', [
                'title' => __('Name'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Email address'),
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
                'title' => __('Confirm password'),
                'type' => 'password',
                'name' => 'password_confirmation',
                'required' => true,
                ])
            
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="ok" name="ok" required>
                        <label class="custom-control-label" for="ok"> I acknowledge that I have read and agree to the Terms and Conditions.</label>
                    </div>
                </div>

            @component('components.button')
                Register
            @endcomponent

        </form>
    @endcomponent
@endsection
