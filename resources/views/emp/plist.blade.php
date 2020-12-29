<!DOCTYPE html>
<html>

<head>
	<title>Product List</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js"
		integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body>
	<a href="/emp">Back</a> |
	<a href="/logout">logout</a>
	<br>
	<div class="input-group mb-0">
		<div class="form-group">
			<input type="text" id="myInput" class="form-control" placeholder="Search by ID..">
		</div>

	</div>
	<br>

	<table id="dataTable" border="1">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>quantity</td>
			<td>price</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($p); $i++) <tr>
			<td>{{$p[$i]['id']}}</td>
			<td>{{$p[$i]['name']}}</td>
			<td>{{$p[$i]['quantity']}}</td>
			<td>{{$p[$i]['price']}}</td>
			<td>

				<a href="/emp/edit/{{$p[$i]['id']}}">Edit </a>
				<a href="/emp/delete/{{$p[$i]['id']}}">Delete </a>
			</td>
			</tr>

			@endfor


	</table>

	<script>
		$(document).ready(function() {
   $('#myInput').keyup(function(){
    myFunction();
  });
  
   function myFunction() {
     
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
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

});
	</script>
</body>

</html>