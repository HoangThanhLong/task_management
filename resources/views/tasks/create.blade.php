@extends('home')

@section('title', 'Thêm mới công viêc')


@section('content')

    <div class="row">

        <div class="col-md-12">

            <h2>Thêm mới công việc</h2>

        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label >Tên công việc</label>

                    <input type="text" class="form-control @error ('title') is_invalid @enderror " name="title">
                    @error('title')
                    <div style="color: deeppink">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label >Nội dung</label>

                    <textarea class="form-control @error('content') is_invalid @enderror" rows="3" name="content"></textarea>
                    @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="exampleFormControlFile1">Ảnh</label>

                    <input type="file" name="image" class="form-control-file @error('image') is_invalid @enderror">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="exampleFormControlFile1">Ngày hết hạn</label>

                    <input type="date" name="due_date" class="form-control @error('due_date') is_invalid @enderror">
                    @error('due_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

            </form>

        </div>

    </div>


@endsection
