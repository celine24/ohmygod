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
			{!! Form::label('pv1_id', 'Pv1_id:') !!}
			{!! Form::text('pv1_id') !!}
		</li>
		<li>
			{!! Form::label('pv2_id', 'Pv2_id:') !!}
			{!! Form::text('pv2_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}