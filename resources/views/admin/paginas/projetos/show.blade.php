@component('admin.layout.elementos.body')
@slot('title') PROJETOS - Factory Solution @endslot
@slot('position') Painel admin @endslot
@slot('description') administre seus projetos @endslot
<h4> {{ $projetos->nome }}</h4>
<div class="form-group">
<label> ID </label> 
<input type="text" class="form-control" value="{!! $projetos->id !!}" readonly >
</div>
<label> Cliente </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $projetos->cliente !!}" readonly>
</div>
<label> Tipo Projeto </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $projetos->tipo !!}" readonly>
</div>
<label> Descrição </label>
<div class="form-group">
<textarea class="form-control" readonly> {!! $projetos->DescricaoProjeto !!} </textarea>
</div>
<label> Criado em </label>
<div class="form-group">
<input type="text" class="form-control" value="{!! $projetos->created_at->format('d/m/Y H:i:s') !!}" disabled>
</div>
<div class="form-group">
<label class="form-control"> Ações
<a href="{{ route('projetos.index') }}" class="btn btn-xs btn-default"> Voltar </a>
<a href="{{ route('projetos.edit',$projetos->id ) }}" class="btn btn-xs btn-default"> EDITAR </a>

<form action="{!! route('projetos.destroy',$projetos->id  ) !!}" class="form-horizontal" method="post" style="display: inline-block">

<input type="hidden" name="_method" value="DELETE">
{!! csrf_field() !!}
<input type="submit" value="REMOVER" class="btn btn-xs btn-default">

</form>
 </label>

@endcomponent









