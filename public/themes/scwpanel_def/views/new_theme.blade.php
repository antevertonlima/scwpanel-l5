<div class="panel-heading">Cadastro de novo tema</div>

<div class="panel-body">
	@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
	        <strong>{{ $message }}</strong>
	</div>
	@endif

	@if ($message = Session::get('error'))
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
	        <strong>{{ $message }}</strong>
	</div>
	@endif

	@if ($message = Session::get('warning'))
	<div class="alert alert-warning alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	</div>
	@endif

	@if ($message = Session::get('info'))
	<div class="alert alert-info alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	</div>
	@endif
	@if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>	
					{{ $error }}
				</div>
            @endforeach
    @endif
    <form action="/scwpanel/theme/upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
	    <label for="photos">Escolha um arquivo:</label>
	    <input type="file" name="photos" class="form-control">
	</div>
    
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>
</div>