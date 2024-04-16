@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('success'))
            <div class="alert alert-success" id="successMessage">
                {!! session('success') !!}
            </div>
            @endif
            <h2>User List</h2>
            <div class="browsebtn text-right">
                <!-- <a href="{{ url('add-user') }}">Add User</a> -->
            </div>
            <div class="row">
                <div class="col-md-6 mt-5 mx-auto p-5">
                    <div class="table-responsive">
                            <table class="table table-bordered table-striped-col data_table_list">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                    </tr>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{$d->username}}</td>
                                            <td>{{$d->email}}</td>
                                        </tr>
                                    @endforeach
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>  
        </div>    
    </div>      
</div>

@endsection 