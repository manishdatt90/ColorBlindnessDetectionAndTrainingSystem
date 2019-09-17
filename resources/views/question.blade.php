@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    What number do you see in this image or click "Can't see anything" button?
                </div>
                <div class="card-body">
                <img  src="/img/Ishihara-Plate-{{str_pad($index, 2, '0', STR_PAD_LEFT)}}-38.jpg" />
                     <div class="row">
                         <div class="col-lg-6">
                    <form  action="/responses" method="POST">
                        <div class="form-group">
                        <input class="form-control" type="number" name="response" required autofocus="autofocus" tabindex="-1"/>
                        </div>
                        <div class="form-group">
                        <input type="hidden" name="test_id" value="{{$test_id}}"/>
                        </div>
                        <input type="hidden" name="index" value="{{$index}}"/>
                        @csrf
                        <div class="form-group">
                        <button class="btn btn-primary">Next</button>
                        </div>
                    </form>
                         </div>
                         <div class="col-lg-6">
                    <form action="/responses" method="POST">

                        <input type="hidden" name="test_id" value="{{$test_id}}"/>
                        <input type="hidden" name="index" value="{{$index}}"/>
                        @csrf
                        <div class="form-group">
                        <button class="btn btn-primary">Can't see anything</button>
                        </div>
                    </form>
                         </div>
                     </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
