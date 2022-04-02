@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="h3 mb-3">ແກ້ໄຂ ຂໍ້ມູນສະມາຊິກ</div>

        <form action="" method="post">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="{{ $user->name }}" class="form-control">
                </div>
            </div>
        </form>
    </div>
@endsection
