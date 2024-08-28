@extends('layouts.loginLayout')

@section('styles')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')
    <div class="loginContainer">        
        <form class="ms-auto me-auto mt-3 loginForm" action="{{ route('regValidation.check') }}" method="POST">
            @csrf
            <img src="/images/logo.png" alt="Barangay Logo" class="brgyLogo">
            
            @if ($errors->has('fail'))
              <div class="alert alert-danger">
                  {{ $errors->first('fail') }}
              </div>
            @endif

            <div class="mb-3">
              <label for="employeeId" class="form-label">Employee ID</label>
              <input type="text" class="form-control" name="employeeId" id="employeeId" placeholder="Enter Employee ID">
              <span class="text-danger">@error('employeeId') {{ $message }} @enderror</span>
            </div>
            <div class="mb-3">
              <label for="passwords" class="form-label">Password</label>
              <input type="password" class="form-control" name="passwords" id="passwords" placeholder="Enter Password">
              <span class="text-danger">@error('passwords') {{ $message }} @enderror</span>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
    </div>
@endsection
