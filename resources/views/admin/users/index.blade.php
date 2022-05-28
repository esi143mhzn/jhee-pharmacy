@extends('admin.layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Users</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="display: flex; flex-direction:row; justify-content: space-between">
                <h6 class="m-0 font-weight-bold text-primary">USER LIST</h6>

                <a href="{{ route('admin.users.create') }}" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add User</span>
                </a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email Address</th>
                                <th>Mobile No.</th>
                                <th>Address</th>
                                <th style="width: 115px;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email Address</th>
                                <th>Mobile No.</th>
                                <th>Address</th>
                                <th style="width: 115px;">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                                    <td>{{$user->role->type}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile_no}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>
                                        <a href={{ route('admin.users.edit', $user->id)}} class="btn btn-info" style="float:left;">Edit</a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" style="float: right;">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection