
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Owner</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($restaurants as $restaurant)
                        <tr>
                            <td>{{$restaurant->name_en}}</td>
                            <td>{{$restaurant->email}}</td>
                            <td>{{$restaurant->address}}</td>
                            <td>{{$restaurant->phone}}</td>
                            <td>{{$restaurant->owner->name}}</td>
                            <td>{{$restaurant->is_active ? "Active" : "Inactive"}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">Action</button>
                                    <button type="button" id="dropdownSubMenu1" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div aria-labelledby="dropdownSubMenu1" class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="{{route('admin.restaurants.edit',['id' => $restaurant->id])}}">Edit</a>
                                        <a class="dropdown-item" href="#"
                                           wire:click.prevent="confirmRestaurantDeletion({{$restaurant->id}})">Delete</a>
                                        <a class="dropdown-item" href="{{route('admin.restaurants.menus',['restaurant' => $restaurant->id])}}">Menus</a>
                                        <a class="dropdown-item" href="{{route('admin.restaurant.schedules.index',['restaurant' => $restaurant->id])}}">Schedules</a>
                                        <a class="dropdown-item" href="{{route('admin.restaurant.dishes.index',['restaurant' => $restaurant->id])}}">Dishes</a>
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
