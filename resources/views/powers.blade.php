{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('level1', 'Level1:') !!}
			{!! Form::textarea('level1') !!}
		</li>
		<li>
			{!! Form::label('level2', 'Level2:') !!}
			{!! Form::textarea('level2') !!}
		</li>
		<li>
			{!! Form::label('level3', 'Level3:') !!}
			{!! Form::textarea('level3') !!}
		</li>
		<li>
			{!! Form::label('greek_id', 'Greek_id:') !!}
			{!! Form::text('greek_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}