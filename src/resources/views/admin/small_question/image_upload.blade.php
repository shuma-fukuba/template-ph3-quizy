@extends('layouts.app')

@section('content')
    <div>
        <form method="POST" action="{{ route('admin.small_question.image_upload', ['id' => $id])}}" enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name="smqll_question_num">
            <label>画像選択<input type="file" name="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></label>
            <input type="submit" value="アップロード">
            </form>
    </div>
@endsection
