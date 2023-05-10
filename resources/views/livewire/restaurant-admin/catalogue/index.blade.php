{{--{{dd($menus)}}--}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Menus</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" >
                        <a href="{{ route('restaurant-admin.menus.create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" style="min-height: 250px">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Restaurant</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($menus as $menu)
                        <tr>
                            <td>{{$menu->name}}</td>
                            <td>{{$menu->restaurant->name_en}}</td>
                            <td>{{$menu->from_date}}</td>
                            <td>{{$menu->to_date}}</td>
                            <td>{{$menu->from_time}}</td>
                            <td>{{$menu->to_time}}</td>
                            <td>{{$menu->is_active?'Yes':'No'}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">Action</button>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div aria-labelledby="dropdownSubMenu1" class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurant.menus.edit',
                                            ['restaurant' => $menu->restaurant,'menu' => $menu])}}">Edit</a>
                                        <a class="dropdown-item" href="#"
                                        >Delete</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurant.menu.categories.index',['restaurant' =>$menu->restaurant,'menu' => $menu])}}">Categories</a>
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
