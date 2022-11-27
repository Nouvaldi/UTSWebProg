<div class="container-fluid bg-warning">
    <p class="text-center fs-1 text-light fw-light" style="margin: 0; padding: 20px 0">Giant Book Supplier</p>
</div>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/home">Home</a>
    </li>
    <li class="nav-item dropdown text-primary">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
        <ul class="dropdown-menu">
            @foreach ($category_data as $category)
                <li>
                    <a class="dropdown-item" href="/category/{{$category->name}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/publisher">Publisher</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
    </li>

</ul>
