@extends('layouts.app')

@section('title', 'Всі міста')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin: 50px">
            <h4><strong>Всі міста</strong></h4>

            <div>
                <a class="btn btn-info btn pull-right" style="margin-bottom: 5px" href="{{ url('/admin/city/create')}}">Додати місто</a>
            </div>
            @if(!count($cities)==0)
                <table class="table table-striped" border="1">
                    <thead>
                        <tr>
                            <th><p>ID</p></th>
                            <th><p>Назва міста</p></th>
                            <th><p>Країна</p></th>
                            <th><p>Час створення</p></th>
                            <th><p>Час оновлення</p></th>
                            <th>Дія</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cities as $city)
                            <tr class="odd">
                                <td>{{ $city->id }}</td>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->country }}</td>
                                <td>{{ date('j/n/Y H:i', strtotime($city->created_at )) }}</td>
                                <td>{{ date('j/n/Y H:i', strtotime($city->updated_at )) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info btn-sm" href="/admin/city/{{ $city->id }}" title="Перегляд" >
                                            <i class="fa fa-file-text" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm" href="/admin/city/{{ $city->id }}/edit" title="Редагувати">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <form action="/admin/city/{{ $city->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-warning btn-sm" title="Видалити">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h4>У вас немає міст.</h4>
            @endif
        </div>
    </div>
@endsection