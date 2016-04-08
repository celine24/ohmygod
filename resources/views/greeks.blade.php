{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('titles', 'Titles:') !!}
			{!! Form::textarea('titles') !!}
		</li>
		<li>
			{!! Form::label('parents', 'Parents:') !!}
			{!! Form::text('parents') !!}
		</li>
		<li>
			{!! Form::label('descendants', 'Descendants:') !!}
			{!! Form::textarea('descendants') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('attributes', 'Attributes:') !!}
			{!! Form::textarea('attributes') !!}
		</li>
		<li>
			{!! Form::label('power_id', 'Power_id:') !!}
			{!! Form::text('power_id') !!}
		</li>
		<li>
			{!! Form::label('power_level', 'Power_level:') !!}
			{!! Form::text('power_level') !!}
		</li>
		<li>
			{!! Form::label('strengths', 'Strengths:') !!}
			{!! Form::textarea('strengths') !!}
		</li>
		<li>
			{!! Form::label('weaknesses', 'Weaknesses:') !!}
			{!! Form::textarea('weaknesses') !!}
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
			{!! Form::label('opinion_id', 'Opinion_id:') !!}
			{!! Form::text('opinion_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}