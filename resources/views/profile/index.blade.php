@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img src="{{asset('cover_photo/adrflogo1.png')}}" width="100">
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Your Profile</div>

                <form action="{{route('profile.create')}}" method="POST">@csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <div class="form-group">
                        <label for="">Experience</label>
                        <textarea name="experience" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Bio</label>
                        <textarea name="experience" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </div>
            </div>
            <!-- @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif -->

        </div>
    </form>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Your Information</div>
                <div class="card-body">
                    <!-- <p>Name:{{Auth::user()->first_name}}</p> -->
                    <!-- <p>Email:{{Auth::user()->email}}</p> -->
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Upload Cover Letter</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_letter">
                    <br>
                    <button class="btn btn-success float-right" type="submit">Upload</button>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Upload Resume</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_letter">
                    <br>
                    <button class="btn btn-success float-right" type="submit">Resume</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
