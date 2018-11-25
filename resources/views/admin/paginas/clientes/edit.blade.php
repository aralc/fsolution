@component('admin.layout.elementos.body')
@slot('title') EDITAR clientes - Factory Solution @endslot
@slot('position') EDITAR @endslot
@slot('description') administre seus clientes @endslot

<form action="{!! route('clientes.update', $clientes->id ) !!}" class="form-horizontal" method="post">

<input type="hidden" name="_method" value="PUT">
@include('admin.paginas.clientes.form')
</form>
<div class="form-group">
    <label for="body" class="control-label col-sm-2">Criado em</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{!! $clientes->created_at->format('d/m/Y H:i:s') !!}" disabled>
    </div>
</div>





					  
<a href="{{ route('clientes.show' , $clientes->id ) }}" class="btn btn-xs btn-default"> Voltar </a>
@endcomponent









