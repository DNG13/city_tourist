@extends('layouts.app')

@section('title', 'Турист(перегляд)')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" style="width: 600px">
                <div class="panel-heading">Турист(перегляд)</div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div>
                            <label for="first_name" class="col-md-4">Ім'я</label>
                            <div class="col-md-8">
                                <p id="first_name" >{{ $tourist->first_name }}</p>
                            </div>
                        </div>

                        <div>
                            <label for="surname" class="col-md-4">Прізвище</label>
                            <div class="col-md-8">
                                <p id="last_name">{{ $tourist->last_name }}</p>
                            </div>
                        </div>

                        <div>
                            <label for="country" class="col-md-4">Дата народження</label>
                            <div class="col-md-8">
                                <p id="country">{{ $tourist->birthday }}</p>
                            </div>
                        </div>

                        <div>
                            <div class="col-md-12">
                                <a href="/admin/tourist/{{ $tourist->id }}/edit" class="btn btn-info" role="button">Редагувати</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
