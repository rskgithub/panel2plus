@extends('templates.main')
@section('title','Dashboard')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron">
                <h1>Hello,Peter</h1>
                <p>Welcome to the dashboard!</p>
                <p><a class="btn btn-default" role="button" href="#">My Account</a></p>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="text-center">My Current Packages</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Package Type</th>
                        <th>View </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>My Support Tickets</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Reply From Support - RE: DNS Issues</h3></div>
                <div class="panel-body"><span>Hello Peter,<br>Sorry that you've been having issues with the DNS. I have fixed it for you :)<br>Dan - Support Team<br></span>
                    <hr>
                    <div class="btn-group" role="group">
                        <button class="btn btn-success btn-sm" type="button">Close Ticket</button>
                        <button class="btn btn-info btn-sm" type="button">Reply to ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection