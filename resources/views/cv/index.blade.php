<<<<<<< Updated upstream
@extends('layouts.master')
@section('content')
<table id="myTable" class="table">
    <thead class="thead-dark">
  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Image</th>
  </tr>
</thead>
  
     @foreach($cv as $cvv )
     <tr>
    <td>{{$cvv->titre}}</td>
    <td>{{$cvv->presentation}}</td>
    <td>{{$cvv->email}}</td>
    <td>
      <img   class="img-circle" alt="Cinque Terre" width="304" height="236" src="{{ asset('/storage/'.$cvv->image) }}" alt="" title=""></td>

  </tr>
    @endforeach
  
  
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
=======
@extends('layouts.app')
@section('content')
    
>>>>>>> Stashed changes
@endsection