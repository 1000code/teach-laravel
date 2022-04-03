@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="h3 mb-3">ແກ້ໄຂ ຂໍ້ມູນສະມາຊິກ</div>

        <form action="{{ route('admin.role.update.now') }} " method="post">
            @csrf
            <input type="hidden" value="{{ $user->id }}" name="slug">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="{{ $user->name }}" name="name" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Phone</label>
                    <input type="number" value="{{ $user->phone }}" name="phone" class="form-control">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-select">
                        <option {{ $user->status === 'open' ? 'selected' : '' }} value="open">Open</option>
                        <option {{ $user->status === 'close' ? 'selected' : '' }} value="close">Close</option>
                    </select>
                    @error('role')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Role</label>
                    <select name="role" id="" class="form-select">
                        <option {{ $user->role === 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                        <option {{ $user->role === 'member' ? 'selected' : '' }} value="member">Member</option>
                    </select>
                    @error('role')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>


            </div>
        </form>
    </div>
@endsection
