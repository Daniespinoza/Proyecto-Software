@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

              <div class="panel-body">
                <h1>{{ $name }}</h1>
                <br>
                <h1>{{ $msg }}</h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        You are logged in!

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
