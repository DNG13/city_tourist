@extends('layouts.app')

@section('title', 'Місто(перегляд)')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" style="width: 600px">
                <div class="panel-heading">Місто(перегляд)</div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div>
                            <label for="name" class="col-md-4">Назва міста</label>
                            <div class="col-md-8">
                                <p id="name" >{{ $city->name }}</p>
                            </div>
                        </div>

                        <div>
                            <label for="country" class="col-md-4">Країна</label>
                            <div class="col-md-8">
                                <p id="country">{{ $city->country }}</p>
                            </div>
                        </div>

                        <div>
                            <div class="col-md-12">
                                <a href="/admin/city/{{ $city->id }}/edit" class="btn btn-info" role="button">Редагувати</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
