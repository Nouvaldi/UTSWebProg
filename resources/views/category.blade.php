@extends('template')

@section('title', 'Category')

@section('content')

    <div class="container" style="width: 60rem; padding: 10px 0">
        <div class="card border border-0">
            @foreach ($idxcategory as $c)

                <h5 class="card-header bg-dark text-light rounded-0">{{$c->name}}</h5>
                <div class="card-body" style="padding: 10px 0">
                    <div class="row row-cols-4 g-2">
                        @foreach ($c->books as $book)

                        <div class="col">
                            <div class="card">
                                <div class="card-body" style="padding: 0">
                                    <img src={{$book->image}} class="card-img-top" alt="...">
                                    <div class="container" style="padding: 10px">
                                        <h5 class="card-title" style="height: 50px">{{$book->title}}</h5>
                                        <p>by</p>
                                        <p class="card-text">{{$book->author}}</p>
                                        <div>
                                            <a href="/book/{{$book->title}}" class="btn btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection
