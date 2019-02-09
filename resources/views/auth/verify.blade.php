@extends('layouts.form')

@section('card')

    @component('components.card')
        
        @slot('title')
            Verifying your email address
        @endslot

        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                A new verification link has been sent to your email address.
            </div>
        @endif

        <p> Before using this website, please check out the verification link in your mails.</p>
        If you haven't received the mail yet <a href="{{ route('verification.resend') }}"> click here to receive a new one.</a>

    @endcomponent
@endsection
