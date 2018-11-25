@component('admin.layout.elementos.body')
@slot('title') ATIVIDADES - Factory Solution @endslot
@slot('position') Painel admin @endslot
@slot('description') administre seus atividades @endslot
<p>
<td><a href="{!! route('atividades.create') !!}"> <button type="button" class="btn btn-default">INCLUIR ATIVIDADE</button> </a>
<table class='table table-hover table-bordered'>
	<thead>
	<tr> 
		<td> Id	</td>
		<td> Titulo</td>
		<td> Atividades </td>
		<td> Custo </td>
		<td> Criado em </td>
		<td> Ações</td>
	</tr>
	</thead>
	<tbody>
	<tr> 
	
@foreach($atividades as $a)
	<td> {{ $a->id }} </td>
	<td> {{ $a->titulo }} </td>
	<td> {{ $a->atividade }} </td>
	<td> {{ $a->custo }} </td>
	<td> {{ $a->created_at }} </td>
	<td> <a href="{{ route('atividades.show',$a->id) }}" ><button type="button" class="btn btn-default">VISUALIZAR</button></a></td>
	</tr>
	@endforeach
	
	
		
	</tbody>	

</table>
	{{ $atividades->links() }}
<br>	
<td><a href="{!! route('paginas.index') !!}"> <button type="button" class="btn btn-default">VOLTAR</button> </a>	

@endcomponent
