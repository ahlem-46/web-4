@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cvs')}}" method="post">
            @csrf
            <div class="form-groupe row" >
            <label for=""  class="col-md-4">Titer</label>
            <input name='titre' type="text" class="form-control col-md-8">
            </div>


            <div class="form-groupe">
            <label for="">Presentation</label>
            <textarea name="presentation" class="form-control"></textarea>
            </div>

            <div class="form-groupe">
                <label for="">email</label>
                <input
                 name="pre" type="email" class="form-control">
                </div>
               

            <div class="form-groupe">
            <input type="submit" class="form-control btn  btn-primary" value="PUT">
            </div>

        </form>
        </div>
    </div>
</div>

@endsection