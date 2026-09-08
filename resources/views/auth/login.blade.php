@extends('layouts.auth')

@section('title', 'Login Administrator | VISIT-IN')

@section('content')

    <p class="auth-location">
        Evara Beach
    </p>

    <h2 class="auth-title">
        Login Administrator
    </h2>

    <p class="auth-description">
        Masuk untuk mengakses Dashboard VISIT-IN
    </p>

    @if ($errors->any())
        <div class="auth-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="auth-field">
            <label for="email">
                Email
            </label>

            <input
                id="email"
                type="email"
                name="email"
                class="auth-input"
                value="{{ old('email') }}"
                placeholder="Masukkan email"
                required
                autofocus
                autocomplete="email"
            >
        </div>

        <div class="auth-field">
            <label for="password">
                Password
            </label>

            <input
                id="password"
                type="password"
                name="password"
                class="auth-input"
                placeholder="Masukkan password"
                required
                autocomplete="current-password"
            >
        </div>

        <label class="auth-remember">
            <input
                type="checkbox"
                name="remember"
                id="remember"
                {{ old('remember') ? 'checked' : '' }}
            >

            Remember Me
        </label>

        <button type="submit" class="auth-button">
            MASUK
        </button>
    </form>

    <p class="auth-note">
        Akses khusus Administrator VISIT-IN
    </p>

@endsection