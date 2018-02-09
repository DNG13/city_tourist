@extends('layouts.app')

@section('title', 'Турист(створити)')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" style="width: 600px">
                <div class="panel-heading">Турист(створити)</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('admin/tourist')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="first_name" class="col-md-4 control-label">Ім'я</label>

                            <div class="col-md-8">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="surname" class="col-md-4 control-label">Прізвище</label>

                            <div class="col-md-8">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  for="birthday" class="col-md-4 control-label">Дата народження</label>
                            <div class="col-md-8">
                                <input id="birthday" type="date" min='1850-01-01' max="{{date("Y-d-m")}}" class="form-control" name="birthday" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-info">
                                    Додати
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection