<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">	
	  <a class="navbar-brand" href="#">Hi, {{ Auth::user()->first_name }}</a>	
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="	false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
      <a class="btn btn-danger" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	      @csrf
      </form>
	</nav>
	<div class='containter'>
		<div class="card mx-auto" style="width: 100rem;  margin-top: 3rem;">
		  	<div class="card-body">
		    	<table id="table_id" class="display" style=''>
    				<thead>
    				    <tr>
    				        <th>#</th>
    				        <th>Username</th>
    				        <th>First Name</th>
    				        <th>Last Name</th>
    				        <th>Middle Initial</th>
    				        <th>Options</th>
    				    </tr>
    				</thead>
    			
    				<tbody>
						@foreach($users as $row)
    						<tr>    
    						  <td>{{$row->id}}</td>
    						  <td>{{$row->username}}</td>
    						  <td>{{$row->first_name}}</td>
    						  <td>{{$row->last_name}}</td>
    						  <td>{{$row->middle_initial}}</td>
    						  <td><a href="#"><i class="fas fa-user-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color:red"><i class="far fa-trash-alt"></i></a>
    						  </td>                 
    						</tr>
    				    @endforeach
    				</tbody>
    			
				</table>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	<script
 	 src="https://code.jquery.com/jquery-3.4.0.min.js"
  	integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  	crossorigin="anonymous"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script>
		$(document).ready( function () {
    	$('#table_id').dataTable();
			} );
	</script>
</body>
</html>