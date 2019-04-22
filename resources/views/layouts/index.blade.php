<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">	
	  <a class="navbar-brand" href="#">Account Manager</a>	
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="	false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
      <a class="btn btn-primary" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
    				    </tr>
    				</thead>
    			
    				<tbody>
						@foreach($users as $row)
    						<tr>    
    						  <th>{{$row->id}}</th>
    						  <th>{{$row->username}}</th>
    						  <th>{{$row->first_name}}</th>
    						  <th>{{$row->last_name}}</th>
    						  <th>{{$row->middle_initial}}</th>                 
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