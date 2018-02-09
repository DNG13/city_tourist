@extends('layouts.app')

@section('title', 'Місто(створити)')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default" style="width: 600px">
                <div class="panel-heading">Місто(створити)</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('admin/city')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Назва міста</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-md-4 control-label">Країна</label>

                            <div class="col-md-8">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required autofocus>
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
