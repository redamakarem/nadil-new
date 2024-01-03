<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Activity Logs</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm">


                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Object type</th>
                            <th>Done By</th>
                            <th>Done on</th>
                            <th>Done at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($logs as $log)
                            <tr>
                                <td>{{ $log->description }}</td>
                                @switch($log->subject_type)
                                    @case('App\Models\User')
                                        <td>User</td>
                                    @break

                                    @case('App\Models\Restaurant')
                                        <td>Restaurant</td>
                                    @break

                                    @case('App\Models\Menu')
                                        <td>Menu</td>
                                    @break

                                    @case('App\Models\Dish')
                                        <td>Dish</td>
                                    @break

                                    @case('App\Models\MenuCategory')
                                        <td>Menu category</td>
                                    @break

                                    @default
                                        <td>Unknown</td>
                                @endswitch
                                <td>{{ $log->causer->name }}</td>
                                @switch($log->subject_type)
                                    @case('App\Models\User')
                                        <td>{{ $log->subject->name }}</td>
                                    @break

                                    @case('App\Models\Restaurant')
                                        <td>{{ $log->subject->name_en }}</td>
                                    @break

                                    @case('App\Models\Menu')
                                        <td>{{ $log->subject->name_en }}</td>
                                    @break

                                    @case('App\Models\Dish')
                                        <td>{{ $log->subject->name_en }}</td>
                                    @break

                                    @case('App\Models\MenuCategory')
                                        <td>{{ $log->subject->name_en }}</td>
                                    @break

                                    @default
                                        <td>Unknown</td>
                                @endswitch
                                <td>{{ $log->updated_at }}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No results found</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    @push('scripts')
        <script>
            window.addEventListener('show-swal-delete', evt => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emit('deleteConfirmed')
                    }
                })
            })
        </script>
    @endpush
