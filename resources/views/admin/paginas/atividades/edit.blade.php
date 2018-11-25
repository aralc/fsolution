@component('admin.layout.elementos.body')
@slot('title') EDITAR ATIVIDAEDS - Factory Solution @endslot
@slot('position') EDITAR @endslot
@slot('description') administre seus atividades @endslot

<form action="{!! route('atividades.update', $atividades->id ) !!}" class="form-horizontal" method="post">

<input type="hidden" name="_method" value="PUT">
@include('admin.paginas.atividades.form')
</form>
<div class="form-group">
    <label for="body" class="control-label col-sm-2">Criado em</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{!! $atividades->created_at->format('d/m/Y H:i:s') !!}" disabled>
    </div>
</div>





					  
<a href="{{ route('atividades.show' , $atividades->id ) }}" class="btn btn-xs btn-default"> Voltar </a>
@endcomponent









