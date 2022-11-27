@extends('template')

@section('title', 'Book')

@section('content')

    <div class="d-flex justify-content-center" style="padding: 10px 0">
        <div class="card border border-0" style="width: 30rem;">
            <h5 class="card-header bg-dark text-light rounded-0">Book Detail</h5>
            @foreach ($book_data as $b)

                <div class="card" style="padding: 0; width: 30rem">
                    <img src={{$b->image}} class="card-img-top" alt="...">
                    <div style="padding: 10px">
                        <p class="card-text">Title: {{$b->title}}</p>
                        <p class="card-text">Author: {{$b->author}}</p>
                        <p class="card-text">Publisher: {{$b->publisher->name}}</p>
                        <p class="card-text">Year: {{$b->year}}</p>
                        <p class="card-text">Synopsis: <br>{{$b->synopsis}}</p>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection
