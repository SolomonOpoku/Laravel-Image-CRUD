@extends('layout.studentLayout')

@section('content')

<table class="table table-bordered table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
    @foreach($student as $item)
    <tr>
        <td>{{$item -> id}}</td>
        <td>{{$item -> name}}</td>
        <td>{{$item -> email}}</td>
        <td>{{$item -> course}}</td>
        <td>
        <img src="{{ asset('uploads/students/'.$item -> profile_image) }}" alt="profile_image" width="70px" height="100%">
        </td>
        <td>
            <a href="{{url('edit-student/'.$item -> id)}}" class="btn btn-primary btn-sm">a>
        </td>
        <td>
            <a href="{{url('delete-student/'. $item -> id)}}" class="btn btn-dbtn-sm">Delete</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection