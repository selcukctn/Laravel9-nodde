@foreach($children as $sub)
        <!--<li><a href="{{route('select.index',['id'=>$sub->parent_id])}}" class="link-dark rounded">{{$rs->title}}</a></li>-->
        @if(count($sub->children))
        <li><a href="{{route('select.index',['id'=>$sub->id])}}" class="link-dark rounded">{{$rs->title}}</a></li>
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            @include('home.categorytree',['children'=>$sub->children])
        </ul>
        @else
            <li><a href="{{route('select.index',['id'=>$sub->id])}}" class="link-dark rounded">{{$sub->title}}</a></li>
        @endif
@endforeach
