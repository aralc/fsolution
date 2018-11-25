@component('admin.layout.elementos.body')
@slot('title') CLIENTES - Factory Solution @endslot
@slot('position') Painel admin @endslot
@slot('description') administre seus clientes @endslot
<p>
<td><a href="{!! route('clientes.create') !!}"> <button type="button" class="btn btn-default">INCLUIR CLIENTE</button> </a>
<table class='table table-hover table-bordered'>
	<thead>
	<tr> 
		<td> Id	</td>
		<td> Nome</td>
		<td> cnpjCpf </td>
		<td> Criado em </td>
		<td> Ações</td>
	</tr>
	</thead>
	<tbody>
	<tr> 
	
@foreach($clientes as $c)
	<td> {{ $c->id }} </td>
	<td> {{ $c->nome }} </td>
	<td> {{ $c->cnpjCpf }} </td>
		<td> {{ $c->created_at }} </td>
	<td> <a href="{{ route('clientes.show',$c->id) }}" ><button type="button" class="btn btn-default">VISUALIZAR</button></a></td>
	</tr>
	@endforeach
	
	
		
	</tbody>	

</table>
	{{ $clientes->links() }}
<br>	
<td><a href="{!! route('paginas.index') !!}"> <button type="button" class="btn btn-default">VOLTAR</button> </a>	

@endcomponent
