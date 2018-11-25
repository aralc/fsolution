@component('admin.layout.elementos.body')
@slot('title') CRIAR ATIVIDADES - Factory Solution @endslot
@slot('position') CRIAR @endslot
@slot('description') administre seus projetos @endslot

					  <h1> Create </h1>
<form action="{!! route('atividades.store') !!}" class="form-horizontal" method="post">
@include('admin.paginas.atividades.form')
</form>
<a href="{{ route('atividades.index') }}" class="btn btn-xs btn-default"> VOLTAR </a>
@endcomponent









