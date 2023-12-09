@extends('admin.layout')

@section('title')
    Добавление нового файла
@endsection

@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление нового файла</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('files.index')}}">Файлы</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавление нового файла</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Добавление нового файла</h6>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'files.store', 'method' => 'put', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Название') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название']) !!}
                            @if($errors->has('name'))
                                <span class="text-danger">Это поле обьязательно!</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Категории') !!}
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Выберите пункт']) !!}
                            @if($errors->has('category_id'))
                                <span class="text-danger">Это поле обьязательно!</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="sub_category_id" class="form-label">Под Категория</label>
                            <select class="form-control" id="sub_category_id" name="sub_category_id">
                                <option></option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type" class="form-label">Раздел</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="0">Научные проекты</option>
                                <option value="1">Дипломные работы</option>
                                <option value="2">Публикации</option>
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('url', 'URL ссылка (не обязательно)') !!}
                            {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'URL ссылка']) !!}
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                {!! Form::label('file', 'Выберите файл (не обязательно)') !!}
                                {!! Form::file('file', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <br>
                        <hr>
                        {!! Form::reset('Очистить', ['class' => 'btn btn-primary']) !!}
                        {!! Form::submit('Добавить', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="category_id"]').on('change', function (){
                var category_id = $(this).val();
                if(category_id){
                    $.ajax({
                        url: "{{url('/admin/files/ajax')}}/"+category_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data){
                            $('select[name="sub_category_id"]').html('');
                            var d = $('select[name="sub_category_id"]').empty();
                            $.each(data, function (key, value){
                                $('select[name="sub_category_id"]').append('<option value="' +value.id+ '">' + value.name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection
