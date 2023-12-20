@extends('layout.mainlayout')
@section('title')
    Register
@endsection
@section('css')
    <style>
        #unchecked_termAndCondition {
            cursor: pointer;
        }

        #checked_termAndCondition {
            cursor: pointer;
        }

        #termCheckbox {
            cursor: pointer;
        }
    </style>
@endsection
@section('backButton')
    <div class="row mt-2 ms-2 position-fixed" id="backButton">
        <div class="col-auto">
            <div class="card shadow rounded border-0 bg-secondary text-white">
                <div class="card-body">
                    Back
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            <h1 class="text-center"> Register here </h1>
        </div>
        <div class="card-body m-3">

            <form id="registerForm" action="{{ url('register/validation') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="usernameRegister">Username<span style="font-size: 15px; color: red;">*</span></label>
                        <input type="text" class="form-control mb-2" id="usernameRegister" name="usernameRegister"
                            placeholder="John doe">
                        <label for="passwordRegister">Password<span style="font-size: 15px; color: red;">*</span></label>
                        <input type="password" class="form-control mb-2" id="passwordRegister" name="passwordRegister"
                            placeholder="********">
                        <label for="confirmPassword">Confirm Password<span
                                style="font-size: 15px; color: red;">*</span></label>
                        <input type="password" class="form-control mb-2" id="confirmPassword" name="confirmPassword"
                            placeholder="********">
                        <p style="font-style: italic; font-size: 10px; margin-top: -5px;"> note: form input labeled with
                            <span style="font-size: 13px; color: red;">*</span> is required!
                        </p>
                    </div>
                    <div class="col-md-6">

                        <section id="unchecked_termAndCondition">
                            <input type="checkbox" id="termCheckbox">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sagittis lacus. Ut
                                ultricies
                                lacus auctor, tincidunt mi eget, ultricies dolor. In bibendum facilisis sapien, vel
                                tincidunt
                                risus.</span>
                        </section>

                        <hr>
                        <button type="submit" class="btn btn-primary form-control mb-2" id="submitBtn" disabled> Submit
                        </button>
                        <button type="reset" class="btn btn-secondary form-control"> Clear </button>

                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        var appUrl = '{{ url('/') }}'; //Variable untuk memanggil root website
        $(document).ready(function() {

            $(document).on('click', '#unchecked_termAndCondition', function() {

                $('#termCheckbox').prop('checked', true);
                $(this).attr('id', 'checked_termAndCondition');

                $('#submitBtn').prop('disabled', !$('#termCheckbox').prop('checked'));

            });
            $(document).on('click', '#checked_termAndCondition', function() {

                $('#termCheckbox').prop('checked', false);
                $(this).attr('id', 'unchecked_termAndCondition');

                $('#submitBtn').prop('disabled', !$('#termCheckbox').prop('checked'));

            });
            $('#backButton').on('click', function() {
                location.href = appUrl + '/';
            });
        });
    </script>
@endsection
