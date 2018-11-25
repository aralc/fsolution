@component('admin.layout.elementos.body')
@slot('title') atividades - Factory Solution @endslot
@slot('position') Painel admin @endslot
@slot('description') administre suas atividades @endslot
<h4> {{ $atividades->nome }}</h4>
<div class="form-group">
<label> ID </label> 
<input type="text" class="form-control" value="{!! $atividades->id !!}" readonly >
</div>
<label> Titulo </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $atividades->titulo !!}" readonly>
</div>

<label> Atividade </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $atividades->atividade !!}" readonly>
</div>

<label> Custo </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $atividades->custo !!}" readonly>
</div>

<label> Criado em </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $atividades->created_at->format('d/m/Y H:i:s') !!}" disabled>
</div>
<div class="form-group">
<label class="form-control"> Ações
<a href="{{ route('atividades.index') }}" class="btn btn-xs btn-default"> Voltar </a>
<a href="{{ route('atividades.edit',$atividades->id ) }}" class="btn btn-xs btn-default"> EDITAR </a>
<form action="{!! route('atividades.destroy',$atividades->id  ) !!}" class="form-horizontal" method="post" style="display: inline-block">

<input type="hidden" name="_method" value="DELETE">
{!! csrf_field() !!}
<input type="submit" value="REMOVER" class="btn btn-xs btn-default">

</form>
 </label>

@endcomponent









