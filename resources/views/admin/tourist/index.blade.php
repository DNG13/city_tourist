@extends('layouts.app')

@section('title', 'Всі туристи')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin: 50px">
            <h4><strong>Всі туристи</strong></h4>

            <div>
                <a class="btn btn-info btn pull-right" style="margin-bottom: 5px" href="{{ url('/admin/tourist/create')}}">Додати туриста</a>
            </div>
            @if(!count($tourists)==0)
                <table class="table table-striped" border="1">
                    <thead>
                    <tr>
                        <th><p>ID</p></th>
                        <th><p>Ім'я</p></th>
                        <th><p>Прізвище</p></th>
                        <th><p>Дата народження</p></th>
                        <th><p>Час створення</p></th>
                        <th><p>Час оновлення</p></th>
                        <th>Дія</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tourists as $tourist)
                        <tr class="odd">
                            <td>{{ $tourist->id }}</td>
                            <td>{{ $tourist->first_name }}</td>
                            <td>{{ $tourist->last_name }}</td>
                            <td>{{ date('j/n/Y', strtotime($tourist->birthday )) }}</td>
                            <td>{{ date('j/n/Y H:i', strtotime($tourist->created_at )) }}</td>
                            <td>{{ date('j/n/Y H:i', strtotime($tourist->updated_at )) }}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-info btn-sm" href="/admin/tourist/{{ $tourist->id }}" title="Перегляд" >
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="/admin/tourist/{{ $tourist->id }}/edit" title="Редагувати">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <form action="/admin/tourist/{{ $tourist->id }}" method="POST">
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
                <h4>У вас немає туристів.</h4>
            @endif
        </div>
    </div>
@endsection