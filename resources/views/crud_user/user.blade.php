@extends('layouts.cruduser')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2 class="text-center">EDIT USER</h2>
        </div>
        <div class="mx-auto pull-right">
            <div class="float-left">
                <form action="{{ route('users.index') }}" method="GET" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search Nama User" id="term">
                        <span class="input-group-btn mr-4 mt-1">
                            <button class="btn btn-info" type="submit" title="Search Mahasiswa">
                                <span class="fas fa-search">Search</span>
                            </button>
                        </span>
                        <a href="{{ url('user.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt">Refresh</span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('home') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger" >Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
<div class="d-flex">
    {{ $users->appends(request()->term)->links('pagination::bootstrap-4') }}
</div>
@endsection