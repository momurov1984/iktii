@extends('admin.layout')

@section('title')
    Добавление новой под категории
@endsection

@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление новой под категории</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('subcategory.index')}}">Под категории</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавление новой под категории</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Добавление новой под категории</h6>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'subcategory.store', 'method' => 'put', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Название под категории') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название под категории']) !!}
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
                            {!! Form::label('body', 'Описание') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Описание']) !!}
                            @if($errors->has('body'))
                                <span class="text-danger">Это поле обьязательно!</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                {!! Form::label('image', 'Выберите изображение (не обязательно)') !!}
                                {!! Form::file('image', ['class' => 'form-control']) !!}
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
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection
