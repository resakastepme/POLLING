@extends('layout.mainlayout')
@section('title')
    Polling
@endsection
@section('content')
    <div class="card shadow rounded border-0 p-3">
        <div class="card-body">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-center"> Anonymous<br>Polling </h1>
                </div>
                <div class="col-md-6">

                    <form id="formLogin" action="{{ route('register') }}">

                        <label for="username">Username<span style="font-size: 15px; color: red;">*</span></label>
                        <input type="text" name="username" id="username" class="form-control mb-2" placeholder=""
                            required>
                        <label for="password">Password<span style="font-size: 15px; color: red;">*</span></label>
                        <input type="password" name="password" id="password" class="form-control mb-2" placeholder=""
                            required>
                        <section id="unchecked_termAndCondition" style="margin-top: -8px;" class="mb-3">
                            <input type="checkbox" id="termCheckbox">
                            <span>Remember me</span>
                        </section>

                        <button type="submit" class="btn btn-primary me-2 form-control"> Login </button>

                        <hr>

                        <button type="button" id="registerBtn" class="btn btn-secondary form-control"> Register
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        var appUrl = '{{ url('/') }}'; //Variable untuk memanggil root website
        $(document).ready(function() {

            // Register button on Click redirect
            $('#registerBtn').on('click', function() {
                location.href = appUrl + '/register';
            });

        });
    </script>
@endsection
