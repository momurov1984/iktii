@extends('admin.layout')

@section('title')
    Добавление новго слайдера
@endsection

@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление новго слайдера</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('slider.index')}}">Слайдер</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавление новго слайдера</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Добавление новго слайдера</h6>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'slider.store', 'method' => 'put', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Название Слайдер') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название Слайдер']) !!}
                            @if($errors->has('name'))
                                <span class="text-danger">Это поле обьязательно!</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('body', 'Мини описание слайдера') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Мини описание слайдера']) !!}
                            @if($errors->has('body'))
                                <span class="text-danger">Это поле обьязательно!</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('url', 'Ссылка (url адрес)') !!}
                            {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Ссылка (url адрес)']) !!}
                            @if($errors->has('url'))
                                <span class="text-danger">Это поле обьязательно!</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                {!! Form::label('image', 'Выберите файл') !!}
                                {!! Form::file('image', ['class' => 'form-control']) !!}
                                @if($errors->has('image'))
                                    <span class="text-danger">Это поле обьязательно!</span>
                                @endif
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
