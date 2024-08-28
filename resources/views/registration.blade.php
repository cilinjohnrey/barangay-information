@extends('layouts.loginLayout')
@section('styles')
    <link rel="stylesheet" href="/css/registration.css">
@endsection
@section('content')
    <div class="ms-auto me-auto regContainer">
        <h2 class="registerTitle">Employee Registration</h2>        
            <form class="ms-auto me-auto mt-3 regForm" method="POST" action="{{ route('regValidation.save')}}" id="mainForm" autocomplete="off" enctype="multipart/form-data">
                @csrf
                    <div class="personalInfo">
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
                            <span class="text-danger error-text fname_error"></span>

                        </div>

                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                            <span class="text-danger error-text lname_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" autocomplete="off">
                            <span class="text-danger error-text email_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" autocomplete="off">
                            <span class="text-danger error-text address_error"></span>
                        </div>


                        <div class="mb-3">
                            <label for="profile" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" id="profile" name="profile" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                            <span class="text-danger error-text profile_error"></span>
                        </div>
                    </div>

                    <div class="accountInfo">
                        <div class="mb-3">
                            <label for="position" class="form-label">Employee Work Position</label>
                            <input type="text" class="form-control" id="position" name="position" placeholder="Enter Work Position">
                            <span class="text-danger error-text position_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">Employee Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact">
                            <span class="text-danger error-text contact_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="employeeId" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" id="employeeId" name="employeeId" placeholder="Enter Employee ID">
                            <span class="text-danger error-text employeeId_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="passwords" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passwords" name="passwords" placeholder="Enter Password">
                            <span class="text-danger error-text passwords_error"></span>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                
            </form>
    </div>
    <script src="/js/jquery-3.5.0.min.js"></script>
    <script src="/js/main.js"></script>
@endsection
