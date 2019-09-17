@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <table class="table">
                <tr>
                <th>Test Time</th>
                <th>Test Action</th>

                </tr>
                @foreach(auth()->user()->tests as $test)

                    <tr>
                    <td>{{$test->created_at->diffForHumans()}}</td>
                        <td>
                            @if(!$test->isComplete())
                            <a href="/tests/{{$test->id}}" class="btn btn-primary">Continue</a>
                            @else
                            <a href="/report/{{$test->id}}" class="btn btn-primary">View Report</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
            <form action="/tests" method="POST">
                @csrf
            <button class="btn btn-primary">Take Color-blindness Test</button>
            </form>
        </div>
    </div>
</div>
@endsection
