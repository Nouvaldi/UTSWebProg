@extends('template')

@section('title', 'Publisher')

@section('content')

    @foreach ($publisher_data as $p)

        <div class="container" style="width: 60rem; padding: 10px 0">
            <div class="card border border-0">
                <div class="bg-dark text-light rounded-0">
                    <div class="row card-header">
                        <div class="col-1 text-center">
                            <img src={{$p->image}} style="width: 2rem" alt="...">
                        </div>
                        <div class="col-9">
                            <h5>{{$p->name}}</h5>
                        </div>
                    </div>

                    <div class="row card-body">
                        <p>Address - {{$p->address}}</p>
                        <p>Phone - {{$p->phone}}</p>
                        <p>Email - {{$p->email}}</p>
                    </div>
                </div>

                <div class="card-body" style="padding: 10px 0">
                    <div class="row row-cols-4 g-2">
                        @foreach ($p->books as $book)

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
            </div>
        </div>

    @endforeach
    <div class="card-body d-flex justify-content-center">
        {{$publisher_data->links()}}
    </div>

@endsection
