@extends('layouts.default')
@section('content')
@section('page_title', 'Usuário')
@section('page_description', 'Visualização')
<div class='box'>
    <div class="box-body">
        <table class='table'>
            <thead>
                <th>Militar</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach($user as $u)
                    <tr>
                        <td>{{$u['nome']}}</td>
                        <td>{{$u['status']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop