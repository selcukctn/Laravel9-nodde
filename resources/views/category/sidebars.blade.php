<!--sidebars start-->
<div class="flex-shrink-0 p-3 bg-white hidden_mobile" style="width: 20%;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-5 fw-semibold">Nodde</span>
    </a>
    <ul class="list-unstyled ps-0">
        @foreach($datalist as $rs)
            <li class="mb-1">
                @if($rs->parent_id == 0)
                <option value="{{$rs->id}}" class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                   {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                </option>
                @endif
                <div class="collapse" id="home-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/selectcategory/{{$rs->id}}" class="link-dark rounded">{{$rs->title}}</a></li>
                    </ul>
                </div>
            </li>
        @endforeach
    </ul>
</div>
<!--sidebars end-->
