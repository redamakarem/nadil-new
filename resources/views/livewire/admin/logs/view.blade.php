<div>
    @if ($activity)
        <!-- /.card-header -->
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap" style="min-height: 250px">
        <thead>
        <tr>
            <th>Field</th>
            <th>Old Value</th>
            <th>New Value</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($activity->changes['old'] as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
                <td>{{ $activity->changes['attributes'][$key] ?? '' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!-- /.card-body -->
        
    @endif
</div>
