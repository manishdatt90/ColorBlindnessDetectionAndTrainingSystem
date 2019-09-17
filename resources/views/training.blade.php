@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($test->answers()->where('is_correct', true)->where('is_rgd', true)->where('plate_id', '<', 10)->get() as $ans)
            <?php $index = $ans->plate_id; ?>
            <div class="card">
                <div class="card-header">
                    {{\App\Answer::$correct_answers[$index]['message']}}
{{--                    This card has {{\App\Answer::$correct_answers[$index]['correct']}} written on it--}}
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <img src="/img/Ishihara-Plate-{{str_pad($index, 2, '0', STR_PAD_LEFT)}}-38.jpg" />
                        </div>
                        <div class="col-md-6">
                            <img src="/img/Ishihara-Plate-Test-{{str_pad($index, 2, '0', STR_PAD_LEFT)}}-38.jpg" />
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

            <form action="/tests" method="POST">
                @csrf
                <button class="btn btn-default">Retake test</button>
            </form>
        </div>
    </div>
</div>
@endsection
