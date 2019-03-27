<ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
	@foreach($childs as $child)
		<li class="nav-item dropdown">
			{{ $child->title }}
			@if(count($child->childs))
				@include('manageChild',['childs' => $child->childs])
			@endif
		</li>
	@endforeach
</ul>