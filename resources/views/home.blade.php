@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <script
                        async
                        type="application/javascript"
                        src="https://telegram.org/js/telegram-widget.js?7"
                        data-telegram-login="{{ config('services.telegram-bot-api.name')}}"
                        data-size="large"
                        data-auth-url="{{ route('telegram.connect') }}"
                        data-request-access="write"
                    >
                    </script>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
