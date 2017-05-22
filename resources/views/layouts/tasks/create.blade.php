@extends( 'layouts.tasks.index' )




@section( 'content' )

	<h1>Create a Task</h1>

	<form method="POST" action="/tasks">
		
		{{ csrf_field() }}

	  <div class="form-group">

	    <label for="title">Task Title:</label>
	    <input type="text" class="form-control" id="title" name="title">
	  
	  </div>
	  
	  <div class="form-group">
	  
	    <label for="formGroupExampleInput2">Body</label>
	    <textarea name="body" id="body" class="form-control"></textarea>
	  
	  </div>
	
		<button type="submit" class="btn btn-primary">Publish</button>
	</form>

@endsection