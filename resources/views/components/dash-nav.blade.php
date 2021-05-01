<div class="shadow-lg p-3 text-info bg-dark fixed-top fixed-bottom fixed-start" style="width: 280px;">
	<h1 class="text-info mt-2 mx-auto">Dashboard</h1>
	<hr>
	<ul class="nav nav-pills flex-column mb-auto">
		<li class="nav-item">
			<a href="{{url('dashboard')}}" class="nav-link {{Route:: currentRouteName() == 'dashboard' ? 'active' : ''}}">
				<svg class="bi me-2" width="16" height="16">
					<use xlink:href="#home" />
				</svg>
				Home
			</a>
		</li>
		<hr class="mb-3">
		<li class="nav-item">
			<a href="{{url('dashboard/category')}}" class="nav-link {{strpos ( Route:: currentRouteAction(),'Category') ? 'active' : ''}}">
				<svg class="bi me-2" width="16" height="16">
					<use xlink:href="#speedometer2" />
				</svg>
				Category
			</a>
		</li>
		<hr class="mb-3">
		<li class="nav-item">
			<a href="{{url('dashboard/video')}}" class="nav-link {{strpos ( Route:: currentRouteAction(),'Video') ? 'active' : ''}}">
				<svg class="bi me-2" width="16" height="16">
					<use xlink:href="#table" />
				</svg>
				Video
			</a>
		</li>
		<hr class="mb-3">
		<li class="nav-item">
			<a href="{{url('dashboard/post')}}" class="nav-link {{strpos ( Route:: currentRouteAction(),'Post') ? 'active' : ''}}">
				<svg class="bi me-2" width="16" height="16">
					<use xlink:href="#grid" />
				</svg>
				Post
			</a>
		</li>
		<hr class="mb-3">
		<li class="nav-item">
			<a href="{{ route('profile.show') }}" class="nav-link">
				<svg class="bi me-2" width="16" height="16">
					<use xlink:href="#profile" />
				</svg>
				profile
			</a>
		</li>
		<hr class="mb-3 text-white">
		<li class="nav-item">
			<form action="/logout" class="d-flex nav-link text-white" method="post">
				@csrf
				<button class="btn btn-lg btn-danger w-100 me-2" role="button" aria-pressed="true" type="submit">
					signout
				</button>
			</form>
		</li>
	</ul>
	<hr>
</div>

@section('custom-script')
<script>
	$(document).ready(() => {
		// const tabs = ['/category','/user','/english','/dutch']
		// const url = "{{url()->current()}}"
	});
</script>
@stop