<p>coucouuuu</p>

@foreach ($pvs as $pv)

	{{ $pv->celebrity }}

@endforeach

{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('group_id', 'Group_id:') !!}
			{!! Form::text('group_id') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('celebrity', 'Celebrity:') !!}
			{!! Form::text('celebrity') !!}
		</li>
		<li>
			{!! Form::label('entente', 'Entente:') !!}
			{!! Form::textarea('entente') !!}
		</li>
		<li>
			{!! Form::label('test_rp', 'Test_rp:') !!}
			{!! Form::textarea('test_rp') !!}
		</li>
		<li>
			{!! Form::label('already_played', 'Already_played:') !!}
			{!! Form::text('already_played') !!}
		</li>
		<li>
			{!! Form::label('greek_id', 'Greek_id:') !!}
			{!! Form::text('greek_id') !!}
		</li>
		<li>
			{!! Form::label('host_id', 'Host_id:') !!}
			{!! Form::text('host_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}