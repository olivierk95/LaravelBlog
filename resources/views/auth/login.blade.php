@extends('layouts.form')

@section('card')
    @component('components.card')

        @slot('title')
            Connection
        @endslot

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

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

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                <label class="custom-control-label" for="remember"> Remember me</label>
            </div>

            @component('components.button')
                Connection
            @endcomponent

            <a class="btn btn-link" href="{{ route('password.request') }}">
                @lang('Forgot your password?')
            </a>
        </form>
    @endcomponent            
@endsection
