<!-- Header Start -->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<li class=" nav-item"><a href="{{route('dashboard')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a></li>
			<!-- Navigation Header -->
			<li class=" navigation-header">
				<span data-i18n="nav.category.layouts">Create, Read & Delete</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
			</li>

            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Courses</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('courses.index')}}" data-i18n="nav.page_layouts.1_column">Add Courses</a>
                    </li>
                    <li><a class="menu-item" href="{{route('courses.index')}}" data-i18n="nav.page_layouts.1_column">All Courses</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="app-todo.html"><i class="la la-check-square"></i><span class="menu-title" data-i18n="">ToDo</span></a>
            </li>

            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Technology</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('technology.index')}}" data-i18n="nav.page_layouts.1_column">Add Technology</a>
                    </li>
                    <li><a class="menu-item" href="{{route('technology.index')}}" data-i18n="nav.page_layouts.1_column">All Technologies</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Team</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('team.index')}}" data-i18n="nav.page_layouts.1_column">Add Team Member</a>
                    </li>
                    <li><a class="menu-item" href="{{route('team.index')}}" data-i18n="nav.page_layouts.1_column">All Team Member</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Client Testimonials</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('testimonial.index')}}" data-i18n="nav.page_layouts.1_column">Add Client Testimonials</a>
                    </li>
                    <li><a class="menu-item" href="{{route('testimonial.index')}}" data-i18n="nav.page_layouts.1_column">All Client Testimonials</a>
                    </li>
                </ul>
            </li>



		</ul>
	</div>
</div>
<!-- Header ENd -->
