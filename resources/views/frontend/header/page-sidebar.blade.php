<div class="page-sidebar-menu">
	<h3>About</h3>
	<ul>
		<li>
			<a href="{{url('company-profile')}}">
				<p>Company profile</p>
				<span class="abroad-span-border"></span>
			</a>
		</li>

		<li>
			<a href="{{url('our-team')}}">
				<p>Our team</p>
				<span class="abroad-span-border"></span>
			</a>
		</li>

		<li>
			<a href="{{url('message-from-ceo')}}">
				<p>Messege from CEO</p>
				<span class="abroad-span-border"></span>
			</a>
		</li>
	</ul>
</div>



<div class="page-sidebar-menu">
	<h3>Study Abroad</h3>
	<ul>
		@foreach($sideheader as $head)
		<li>
			<a href="{{url('study-abroad-dynamic/'.$head->id)}}">
				<p>{{$head->title}}</p>
				<span class="abroad-span-border"></span>
			</a>
		</li>
		@endforeach
	</ul>
</div>


<div class="page-sidebar-menu">
	<h3>Class</h3>
	<ul>
		@foreach($sideheaderclass as $class)
		<li>
			<a href="{{url('class-dynamic/'.$class->title)}}">
				<p>{{$class->title}}</p>
				<span class="abroad-span-border"></span>
			</a>
		</li>
		@endforeach

		

		
	</ul>
</div>

