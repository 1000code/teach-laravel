@extends('layouts.app')
@section('contents')
    <div class="container">
        <div class="mt-3"></div>
        <a href="{{ route('book.form') }}" class="btn btn-primary"> Add Book</a>

        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }} </div>
        @endif


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($books as $key => $val)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $val->name }}</td>
                        <td>{{ $val->type }}</td>
                        <td>
                            <a href="" class="btn  btn-warning">ແກ້ໄຂ</a>
                            <button type="button" class="btn btn-danger">ລົບ</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>




@endsection
