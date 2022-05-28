@extends('admin.layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Add User Form</h1>

        <form action={{ route('admin.users.store')}} method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.users.partials.fields')

            <button class="btn btn-primary btn-user btn-block">Save</button>
        </form>
    </div>

    
    <!-- /.container-fluid -->
@endsection