<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" >
                        <a href="{{route('admin.restaurant.schedules.create',['restaurant' => $restaurant])}}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" style="min-height: 250px">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Slot length</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($schedules as $schedule)
                        <tr>
                            <td>{{$schedule->name}}</td>
                            <td>{{$schedule->from_date}}</td>
                            <td>{{$schedule->to_date}}</td>
                            <td>{{$schedule->from_time}}</td>
                            <td>{{$schedule->to_time}}</td>
                            <td>{{$schedule->slot_length}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" id="dropdownSubMenu1" class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions<span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div aria-labelledby="dropdownSubMenu1" class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="{{route('admin.restaurant.schedules.edit',['sched' => $schedule->id])}}">Edit</a>
                                        <a class="dropdown-item {{$restaurant->schedules->count()==1? 'hidden':''}}"  href="#" wire:click.prevent="confirmScheduletDeletion({{ $schedule->id }})">Delete</a>
                                    </div>
                                </div>
                            </td>

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

@push('styles')
    <style>
        .hidden{
            display: none;
        }
    </style>
    
@endpush

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
