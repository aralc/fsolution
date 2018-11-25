@component('admin.layout.elementos.body')
@slot('title') CRIAR PROJETOS - Factory Solution @endslot
@slot('position') CRIAR @endslot
@slot('description') administre seus projetos @endslot

					  <h1> Create </h1>
<form action="{!! route('clientes.store') !!}" class="form-horizontal" method="post">
@include('admin.paginas.clientes.form')
</form>
<a href="{{ route('clientes.index') }}" class="btn btn-xs btn-default"> VOLTAR </a>
@endcomponent









