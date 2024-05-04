@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('app.auth.verify.verify')</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                        @lang('app.auth.verify.freshVerification')
                        </div>
                    @endif

                    @lang('app.auth.verify.beforeProceeding')
                    @lang('app.auth.verify.notReceiveEmail'),
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">@lang('app.auth.verify.requestAnother')</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
