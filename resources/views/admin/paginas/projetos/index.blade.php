@component('admin.layout.elementos.body')
@slot('title') PROJETOS - Factory Solution @endslot
@slot('position') Painel admin @endslot
@slot('description') administre seus projetos @endslot
<p>
<td><a href="{!! route('projetos.create') !!}"> <button type="button" class="btn btn-default">INCLUIR PROJETO</button> </a>
<table class='table table-hover table-bordered'>
	<thead>
	<tr> 
		<td> Id	</td>
		<td> Nome</td>
		<td> Cliente </td>
		<td> Tipo Projeto	</td>
		<td> Criado em	</td>
		<td> Ações</td>
	</tr>
	</thead>
	<tbody>
	<tr> 
	
	@foreach($projetos as $p)
	<td> {{ $p->id }} </td>
	<td> {{ $p->nome }} </td>
	<td> {{ $p->cliente }} </td>
	<td> {{ $p->tipo }} </td>
	<td> {{ $p->created_at }} </td>
	<td> <a href="{{ route('projetos.show',$p->id) }}" ><button type="button" class="btn btn-default">VISUALIZAR</button></a></td>
	</tr>
	@endforeach
	
	
		
	</tbody>	

</table>
	{{ $projetos->links() }}
<br>	
<td><a href="{!! route('paginas.index') !!}"> <button type="button" class="btn btn-default">VOLTAR</button> </a>	

@endcomponent
