@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="h3 mb-3">ລະບົບຈັດການ ຜູ້ໃຊ້ງານ</div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Create</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $val)
                    <tr>
                        <td>{{ $val->id }}</td>
                        <td>{{ $val->name }}</td>
                        <td>{{ $val->role }}</td>
                        <td>{{ $val->created_at }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('/admin/role/update/' . $val->id) }}">ແກ້ໄຂ</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
