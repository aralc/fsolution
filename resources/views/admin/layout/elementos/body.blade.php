@component('admin.layout.default')
@slot('position') - Dashboard admin - @endslot
<h3> {{ $title ??  'teste1 ' }}</h3> <span> {{ $description ??  'teste2' }}</span>
	{{ $slot }}
@endcomponent	
	

