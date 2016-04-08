{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('lastname', 'Lastname:') !!}
			{!! Form::text('lastname') !!}
		</li>
		<li>
			{!! Form::label('firstname', 'Firstname:') !!}
			{!! Form::text('firstname') !!}
		</li>
		<li>
			{!! Form::label('birth_date', 'Birth_date:') !!}
			{!! Form::text('birth_date') !!}
		</li>
		<li>
			{!! Form::label('birth_place', 'Birth_place:') !!}
			{!! Form::text('birth_place') !!}
		</li>
		<li>
			{!! Form::label('nationality', 'Nationality:') !!}
			{!! Form::text('nationality') !!}
		</li>
		<li>
			{!! Form::label('job', 'Job:') !!}
			{!! Form::text('job') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('personality', 'Personality:') !!}
			{!! Form::textarea('personality') !!}
		</li>
		<li>
			{!! Form::label('gender_orientation', 'Gender_orientation:') !!}
			{!! Form::text('gender_orientation') !!}
		</li>
		<li>
			{!! Form::label('story', 'Story:') !!}
			{!! Form::textarea('story') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}