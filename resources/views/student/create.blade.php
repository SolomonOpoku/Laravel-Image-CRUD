@extends('layout.studentLayout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

        @if(session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add student with Image
                    <a href="{{url('students')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('add-student')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Profile Image</label>
                            <input type="file" name="profile_image" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save student</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection