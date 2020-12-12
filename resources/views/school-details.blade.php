@extends('layouts.app')
@section('content')
    <section>
        <div class="columns is-centered">
            <div class="card" style="width: 800px;margin-top:40px;">
                <div class="card-content">
                        @csrf
                        <div class="title is-1"> {{$school->name}} <div class="control" style="margin-top: 50px;">
                                @if($success != "")
                                    <div class="notification is-primary is-light">
                                        {{$success}}
                                    </div>
                                @endif
                            </div> </div>
                    <div style="margin-left: 50px;">
                        <div class="subtitle" style="margin-top:10px;">Email : {{$school->email}}</div>
                        <div class="subtitle" style="margin-top:10px;">Phone : {{$school->phone}}</div>
                        <div class="subtitle" style="margin-top:10px;">Address :{{$school->address}}</div>
                        <div class="subtitle" style="margin-top:10px;">Type : {{$school->type}}</div>
                        <div class="subtitle" style="margin-top:10px;">Category :{{$school->kind_of_school}}</div>
                        <div class="subtitle" style="margin-top:10px;">Curriculum : {{$school->curriculum}}</div>
                        <div class="subtitle" style="margin-top:10px;">Status : {{$school->status}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container card" style="padding: 10px;margin:40px;">
            <div class="title is-2" style="margin-left:70px">Classes for {{$school->name}} </div>
            <div class="columns is-centered card-content">
                <table class="table is-striped is-narrow is-hoverable is-fullwidth">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Grade</th>
                        <th>Capacity</th>
                        <th>Reserved</th>
                    </tr>
                    </thead>
                    @if(count($classes)>0)
                        @foreach($classes as $class)
                            <tbody>
                            <td>{{$class->id}}</td>
                            <td>{{$class->grade}}</td>
                            <td>{{$class->capacity}}</td>
                            <td>{{$class->reserved}}</td>
                            <td>
                                <a href="/reserve-class/{{$class->id}}/school/{{$school->id}}" class="button is-danger">Reserve Class</a>
                            </td>
                            </tbody>
                        @endforeach
                    @else
                        <h3 class="is-desktop is-vcentered">No Classes</h3>
                    @endif
                </table>
            </div>
        </div>
    </section>
@endsection
