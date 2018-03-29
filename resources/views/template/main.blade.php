@include('template.header')
@include('template.navigation')

<div class="content-wrapper">
    <div class="container-fluid">
	
		@yield('breadcrumb')
		@include('template.flash')

		@yield('content')

	</div>

@include('template.footer')