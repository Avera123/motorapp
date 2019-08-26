<div class="form-group">
	{{ Form::label('name', 'Nombre de la marca') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('logoUrl', 'logo de la marca') }}
	{{ Form::file('logoUrl', null, ['class' => 'form-control-file']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#name, #slug").stringToSlug({
				callback: function(text){
					$("#slug").val(text);
				}
			})
		})
		CKEDITOR.config.height = 400;
		CKEDITOR.config.width = 'auto';
		CKEDITOR.replace('description');
	</script>
@endsection