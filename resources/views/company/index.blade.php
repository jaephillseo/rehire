@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="company-profile">
            <img src="{{asset('logo/adrflogo1.png')}}" style="width: 100%;">
            <div class = "company-desc">
                <img src="{{asset('logo/adrflogo1.png')}}" width="100">
                <p>{{$company->description}}</p>
                <h1>{{$company->cname}}</h1>
                <p>Slogan-{{$company->slogan}}-&nbsp;Address-{{$company->address}}-&nbsp;Phone Number-{{$company->phone}}-&nbsp;Website-{{$company->website}}</p>
            </div>
        </div>
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($company->jobsList as $job)
                <tr>
                    <td><img src="{{asset('cover_photo/adrflogo1.png')}}" width="80"></td>
                    <td>Position: {{$job->position}}
                        <br>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$job->type}}
                    </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>Address: {{$job->address}}</td>
                    <td>Date: {{$job->created_at->diffForHumans()}}</td>
                    <td>
                        <a href="{{route('jobs.show',[$job->id, $job->slug])}}">
                            <button class="btn btn-success btn-ssm">Apply</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
