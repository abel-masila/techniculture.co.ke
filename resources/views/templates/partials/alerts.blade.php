@if(Session::has('info'))
	<div class="alert alert-dismissible alert-success" role="alert">
		{{ Session::get('info') }}
	</div>
@endif