

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cvs')}}" methode="post">
        @method('PUT')
            @csrf
            <div class="form-groupe">
            <label for="">Titer</label>
            <input name='titer' type="text" class="form-control">
            </div>


            <div class="form-groupe">
            <label for="">Presentation</label>
            <textarea name="presentation" class="form-control"></textarea>
            </div>

           

            <div class="form-groupe">
            <input type="submit" class="form-control btn  btn-primary" value="PUT">
            </div>

        </form>
        </div>
    </div>
</div>

