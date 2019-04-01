@extends('layouts.master')

@section('title') Menu @endsection
@section('subtitle') Home @endsection

@section('content')
<div class="panel panel-default">
    <a href="#page-stats" class="panel-heading" data-toggle="collapse">Lista dos Menus Existentes</a>
    <div id="page-stats" class="panel-collapse panel-body collapse in">
        <div class="btn-toolbar list-toolbar">
            <button class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar Menu</button>
            {{-- <button class="btn btn-default">Editar</button>
            <button class="btn btn-default">Export</button> --}}
            <div class="btn-group">
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ordem</th>
                    <th>Nome</th>
                    <th>Menu Pai</th>
                    <th>Menu Filho</th>
                    <th>icone</th>
                    <th>url</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menu_list as $menu)
                <tr>
                    <td>{{ $menu->ordem }}</td>
                    <td>{{ $menu->nome }}</td>
                    <td>{{ $menu->menu_pai }}</td>
                    <td>{{ $menu->menu_filho }}</td>
                    <td>{{ $menu->icone }}</td>
                    <td>{{ $menu->url }}</td>
                    <td>
                        <div class="btn-group">
                            <a  href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ route('menu.destroy', $menu->id) }}" class="btn btn-danger waves-effect">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
                
        </table>
    </div>
</div>
@endsection