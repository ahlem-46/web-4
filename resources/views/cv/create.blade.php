@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cvs')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-groupe " >
            <label for="">Titer</label>
            <input name='titre' type="text" class="form-control ">
            </div>


            <div class="form-groupe">
            <label for="">Presentation</label>
            <textarea name="presentation" class="form-control"></textarea>
            </div>

            <div class="form-groupe">
                <label for="">email</label>
                <input
                 name="email" type="email" class="form-control">
            </div>
               
            <div class="form-groupe">
                <label for="">Image</label>
                <input name="image" type="file" class="form-control">
            </div>
        <br>
            
            <div class="form-groupe">
            <input type="submit" class="form-control btn  btn-primary" value="Enregistrer">

            </div>

        </form>
        </div>
    </div>
</div>

@endsection