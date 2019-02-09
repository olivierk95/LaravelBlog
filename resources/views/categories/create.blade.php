@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            Add a category
        @endslot

        <form method='POST' action="{{ route('category.store') }}">
            {{ csrf_field() }}

            @include('partials.form-group', [
                'title' => __('Name'),
                'type' => 'text',
                'name' => 'name',
                'required' =>true,
            ])

            @component('components.button')
                Send
            @endcomponent

        </form>
    
    @endcomponent

@endsection