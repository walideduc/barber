@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        {!! BootForm::open() !!}
                        {!! BootForm::text('First Name', 'first_name') !!}
                        {!! BootForm::text('Last Name', 'last_name') !!}
                        {!! BootForm::text('Date of Birth', 'date_of_birth') !!}
                        {!! BootForm::email('Email', 'email') !!}
                        {!! BootForm::password('Password', 'password') !!}
                        {!! BootForm::submit('Submit') !!}
                        {!! BootForm::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
