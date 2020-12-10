@extends('layouts.app')
@section('content')
<section>
    <div class="title is-2"> Search Results For " {{$searchName}} " +"{{$searchAddress}}"</div>
    <div class="columns">

    @foreach($searchResult as $result)
        <div class="card column" style="margin-right: 20px;">
            <div class="card-content">
                <p class=" title is-5">
                    {{$result->name}}
                </p>
                <p class="subtitle is-6" style="margin-top: 5px">
                    Gibson Youth Academy is a modern prison! If you want to sentence your child to prison send it here.
                </p>
            </div>
            <footer class="card-footer">
                <p class="card-footer-item">
      <span>
        Email <a href="#">{{$result->email}}</a>
      </span>
                </p>
                <p class="card-footer-item">
      <span>
        Phone no <a href="#">{{$result->phone}}</a>
      </span>
                </p>
            </footer>
        </div><br>
        @endforeach

    </div>
</section>


@endsection
