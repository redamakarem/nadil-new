
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Contact Messages</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($contact_messages as $contact_message)
                        <tr>
                            <td>{{$contact_message->name}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">Action</button>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div aria-labelledby="dropdownSubMenu1" class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="{{route('admin.contact-messages.show',['id'=>$contact_message->id])}}">View</a>
                                        <a class="dropdown-item" href="#"
                                           wire:click.prevent="confirmCuisineDeletion({{$contact_message->id}})">Delete</a>
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
