
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Restaurants</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" >
                        <a href="{{route('admin.restaurants.create')}}" class="btn btn-primary">Add</a>


                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Done By</th>
                        <th>Done on</th>
                        <th>Done at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($logs as $log)
                        <tr>
                            <td>{{$log->description}}</td>
                            <td>{{$log->causer->name}}</td>
                            <td>{{$log->subject->name_en}}</td>
                            <td>{{$log->updated_at}}</td>
                            

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
        window.addEventListener('show-swal-delete',evt => {
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
