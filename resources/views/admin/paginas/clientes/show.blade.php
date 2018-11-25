@component('admin.layout.elementos.body')
@slot('title') clientes - Factory Solution @endslot
@slot('position') Painel admin @endslot
@slot('description') administre seus clientes @endslot
<h4> {{ $clientes->nome }}</h4>
<div class="form-group">
<label> ID </label> 
<input type="text" class="form-control" value="{!! $clientes->id !!}" readonly >
</div>
<label> Cliente </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $clientes->nome !!}" readonly>
</div>

<label> Cnpj / CPF </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $clientes->cnpjCpf !!}" readonly>
</div>

<label> CEP </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $clientes->cep !!}" readonly>
</div>

<label> Cidade </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $clientes->cidade !!}" readonly>
</div>

<label> Bairro </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $clientes->bairro !!}" readonly>
</div>

<label> Rua </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $clientes->rua !!}" readonly>
</div>

<label> Numero </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $clientes->numero !!}" readonly>
</div>
<label> Descrição </label>
<div class="form-group">
<textarea class="form-control" readonly> {!! $clientes->descricao !!} </textarea>
</div>
<label> Criado em </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $clientes->created_at->format('d/m/Y H:i:s') !!}" disabled>
</div>
<div class="form-group">
<label class="form-control"> Ações
<a href="{{ route('clientes.index') }}" class="btn btn-xs btn-default"> Voltar </a>
<a href="{{ route('clientes.edit',$clientes->id ) }}" class="btn btn-xs btn-default"> EDITAR </a>

<form action="{!! route('clientes.destroy',$clientes->id  ) !!}" class="form-horizontal" method="post" style="display: inline-block">

<input type="hidden" name="_method" value="DELETE">
{!! csrf_field() !!}
<input type="submit" value="REMOVER" class="btn btn-xs btn-default">

</form>
 </label>

@endcomponent









