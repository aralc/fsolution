@component('admin.layout.elementos.body')
@slot('title') EDITAR PROJETOS - Factory Solution @endslot
@slot('position') EDITAR @endslot
@slot('description') administre seus projetos @endslot

<form action="{!! route('projetos.update', $projetos->id ) !!}" class="form-horizontal" method="post">

<input type="hidden" name="_method" value="PUT">
@include('admin.paginas.projetos.form')
</form>
<div class="form-group">
    <label for="body" class="control-label col-sm-2">Criado em</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{!! $projetos->created_at->format('d/m/Y H:i:s') !!}" disabled>
    </div>
</div>



<label class="form-control"> Criado em </label>

					  
<a href="{{ route('projetos.show' , $projetos->id ) }}" class="btn btn-xs btn-default"> Voltar </a>
@endcomponent









