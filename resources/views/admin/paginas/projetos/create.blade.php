@component('admin.layout.elementos.body')
@slot('title') CRIAR PROJETOS - Factory Solution @endslot
@slot('position') CRIAR @endslot
@slot('description') administre seus projetos @endslot

					  <h1> Create </h1>
<form action="{!! route('projetos.store') !!}" class="form-horizontal" method="post">
@include('admin.paginas.projetos.form')
</form>
<a href="{{ route('projetos.index') }}" class="btn btn-xs btn-default"> VOLTAR </a>
@endcomponent









