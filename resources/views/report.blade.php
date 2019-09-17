@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1>
                    @if($test->hasRgd())
                        Test Result : Color-blindness Detected
                    @else
                        Test Result: Normal Vision
                    @endif
                </h1>
                @if($test->hasRgd())
                    <a href="/training/{{$test->id}}" class="btn btn-success">Take Training</a>
                @endif
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <tr>
                        <th>Plate Number</th>
                        <th>Correct Answer</th>
                        <th>RGD Answer</th>
                        <th>Given Answer</th>
{{--                        <th>is Correct</th>--}}
{{--                        <th>is RGD</th>--}}
                    </tr>
                    @foreach($test->answers as $response)

                        <tr>
                            <td>{{$response->plate_id}}</td>
                            <td>
                                {{\App\Answer::$correct_answers[$response->plate_id]['correct']}}
                            </td><td>
                                {{\App\Answer::$correct_answers[$response->plate_id]['rgd']}}
                            </td>
                            <td>{{$response->given_answer}}</td>
{{--                            <td>{{$response->is_correct}}</td>--}}
{{--                            <td>{{$response->is_rgd}}</td>--}}
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
