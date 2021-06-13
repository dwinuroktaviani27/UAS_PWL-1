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

                    <li class="nav-item">
                    <a href="{{ route('users.index') }}">{{ __('Edit User') }}</a></li>
                    <li class="nav-item"><a href="{{ route('comment.index') }}">{{ __('Edit comment') }}</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection