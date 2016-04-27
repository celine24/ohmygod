<div>

    @foreach ($pvs as $pv)

        {{ $pv->group_id }}
        {{ $pv->group->name }}
    @endforeach
</div>