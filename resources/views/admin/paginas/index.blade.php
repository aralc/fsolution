@component('admin.layout.elementos.body')
@slot('title') 'Painel de Administração - factory solution' @endslot
@slot('position') Painel admin @endslot
@slot('description') Inicie sua jornado de transformação @endslot

<table class='table table-hover table-bordered'>
	<tr> 
		<td><a href="{!! route('projetos.index') !!}" ><button class="btn">projetos</button></a>	</td>
		<td><a href="{!! route('clientes.index') !!}" ><button class="btn">Clientes</button></a>	</td>
		<td><a href="{!! route('recursos.index') !!}" ><button class="btn">Recursos</button></a>	</td>
		<td><a href="{!! route('atividades.index') !!}" ><button class="btn">Atividades</button></a>	</td>
	</tr>		
                   
</table>
 <a href="{!! route('home') !!}"> <button type="button" class="btn btn-default">VOLTAR</button> 
@endcomponent