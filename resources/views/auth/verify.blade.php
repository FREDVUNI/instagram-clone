@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
                <div class="col col-lg-5 col-md-6 col-sm-8">
                    <div class="section-title-s4">
                        <h2>Verify Your Email Address</h2>
                        <br>
                    </div>
                    <br><br>
                </div>
            </div>
        <div class="col-md-8">
            <div class="card">
                <!--div class="card-header">{{ __('Verify Your Email Address') }}</div-->

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
