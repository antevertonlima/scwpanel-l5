<div class="panel-heading">Listagem de temas
	<div class="pull-right">
		<a href="#" class="btn btn-xs btn-info">Novo</a>
	</div>
</div>

<div class="panel-body">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Status</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
	   @forelse ($themes as $theme)
		   <tr>
	         <td>{{ $theme->name }}</td>
	         <td>{{ $theme->type }}</td>
	         <td>
		         @if($theme->active == 'N')
		         	Inativo
		         @elseif($theme->active == 'A')
		         	Ativo
		         @endif
	         </td>
	         <td>
	         	@if($theme->active == 'N')
		        	<a href="#" class="btn btn-xs btn-success"> Ativar </a>
		        @endif
	         </td>
	       </tr>
	   @empty
		    <p>Não existe tema cadastrado no sistema</p>
	   @endforelse
    </tbody>
  </table>
</div>