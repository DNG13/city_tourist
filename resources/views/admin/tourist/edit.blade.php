@extends('layouts.app')

@section('title', 'Турист(редагувати)')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" style="width: 600px">
                <div class="panel-heading">Турист(редагувати)</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('tourist.update', $tourist->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="first_name" class="col-md-4 control-label">Ім'я</label>

                            <div class="col-md-8">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $tourist->first_name }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="surname" class="col-md-4 control-label">Прізвище</label>

                            <div class="col-md-8">
                                <input id="surname" type="text" class="form-control" name="last_name"  value="{{ $tourist->last_name }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  for="birthday" class="col-md-4 control-label">Дата народження</label>

                            <div class="col-md-8">
                                <input type="date" min='1850-01-01' max="{{date("Y-m-d")}}" name="birthday" class="form-control" value="{{ $tourist->birthday }}"  required>
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
