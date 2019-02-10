@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            Edit the category
        @endslot

        <form method="POST" action="{{ route('category.update', $category->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            @include('partials.form-group', [
                'title' => __('Name'),
                'type' => 'text',
                'name' => 'name',
                'value' => $category->name,
                'required' => true,
                ])

            @component('components.button')
                Send 
            @endcomponent
        
        </form>

    @endcomponent

@endsection