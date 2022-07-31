<x-bootstrap_v513.dropdown-class-default/>
	<div class="btn-group  btn-group-sm" role="group" aria-label="Basic example">
		<a type="button" 
			href="{{ route($route.'.show', $id) }}" 
			class="btn btn-outline-primary">
			View
		</a>
		<a type="button" 
			href="{{ route($route.'.edit', $id) }}" 
			class="btn btn-outline-primary">
			Edit
		</a>
		<a type="button" 
			href="{{ route($route.'.deletedata', $id) }}" 
			class="btn btn-danger">
			Delete
		</a>
	</div>
</div>