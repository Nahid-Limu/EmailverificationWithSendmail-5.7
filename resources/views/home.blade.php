@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <h1 class="jumbotron"> Sent Email 
                    <form method="POST" action="{{ route('sentMail') }}">
                            @csrf
                        <table class="table table-bordered">
                            <tr class="form-group">
                                <td><label class="form-control" for="">Name:</label></td>
                                <td><input class="form-control" type="text" name="name"></td>
                            </tr>
                            <tr class="form-group">
                                <td><label class="form-control" for="">Email:</label></td>
                                <td><input class="form-control" type="email" name="email"></td>
                            </tr>
                            <tr class="form-group">
                                <td><label class="form-control" for="">Message:</label></td>
                                <td><textarea class="form-control" name="msg" id="" cols="30" rows="5"></textarea></td>
                            </tr>
                            
                        </table>
                        <button class="btn btn-danger pull-right" type="submit">Sent</button>
                    </form>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
