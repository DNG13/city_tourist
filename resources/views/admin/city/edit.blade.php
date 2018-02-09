@extends('layouts.app')

@section('title', 'Місто(редагувати)')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" style="width: 600px">
                <div class="panel-heading">Місто(редагувати)</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('city.update', $city->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Назва міста</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $city->name }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-md-4 control-label">Країна</label>

                            <div class="col-md-8">
                                <input id="country" type="text" class="form-control" name="country" value="{{ $city->country }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-info">
                                    Зберегти
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
