@extends('layouts.school')
@section('school-content')


    <section class="hero is-link">
        <div class="hero-body">
            <div class="level">
                <h5 class="has-text-weight-bold level-left">
                    School List
                </h5>
                <div class="level-right">
                    <a class="button is-primary" href="/school/create">Add</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="columns is-centered">
            <table class="table is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Type</th>
                    <th>Kind of school</th>
                    <th>Curriculum</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
                </thead>
                @if(count($schools)>0)
                    @foreach($schools as $school)
                        <tbody>
                        <td>{{$school->name}}</td>
                        <td>{{$school->email}}</td>
                        <td>{{$school->phone}}</td>
                        <td>{{$school->address}}</td>
                        <td>{{$school->type}}</td>
                        <td>{{$school->kind_of_school}}</td>
                        <td>{{$school->curriculum}}</td>
                        <td>{{$school->status}}</td>
                        <td>
                            <a href="{{route("school.edit",$school->id)}}" class="button is-info">Edit</a>
                        </td>
                        </tbody>
                    @endforeach

                @else
                    <h3 class="is-vcentered">No School</h3>
                @endif
            </table>
        </div>
    </div>

@endsection
