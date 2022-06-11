<!--sidebars start-->
<div class="flex-shrink-0 p-3 bg-white hidden_mobile" style="width: 20%;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-5 fw-semibold">Nodde</span>
    </a>
    <ul class="list-unstyled ps-0">
        @php
              use App\Http\Controllers\HomeController;
                $parentCategories =HomeController::mainCategory();
        @endphp

           @foreach($parentCategories as $rs)

            <li class="mb-1">
                <option value="{{$rs->id}}" class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                </option>
                <div class="collapse" id="home-collapse" style="">
                @if(count($rs->children))
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        @include('home.categorytree',['children'=>$rs->children])
                    </ul>
                @else

                @endif</li>
            @endforeach

    </ul>
</div>
<!--sidebars end-->
