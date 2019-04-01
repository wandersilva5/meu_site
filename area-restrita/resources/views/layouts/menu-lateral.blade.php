<div class="sidebar-nav">
    <ul>
        @inject('menu_lista', 'App\Models\Menu')
        
        @foreach($menu_lista->all() as $menu)
            @if($menu->menu_pai != '')
                <li>
                    <a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse">
                    <i class="fa fa-fw fa-{{ $menu->icone }}"></i> {{ $menu->nome }}<i class="fa fa-collapse"></i>
                    </a>
                </li>
                @foreach($menu_lista->where($menu->id, $menu->menu_pai) as $filhos)
                <li>
                    <ul class="dashboard-menu nav nav-list collapse in">
                        <li>
                        <a href="{{ $filhos->url }}"><span class="fa fa-caret-right"></span> {{ $filhos->nome }}</a>
                        </li>
                    </ul>
                </li>
                @endforeach
            @endif
        @endforeach
       
    </ul>
</div>