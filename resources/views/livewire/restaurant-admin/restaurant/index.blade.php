
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('Your Restaurants')}}</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" >
                        {{-- <a href="{{route('restaurant-admin.restaurants.create')}}" class="btn btn-primary">Add</a> --}}


                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                @role('restaurant-super-admin')
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Max Party Size</th>
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
                            <td>{{$restaurant->max_party_size}}</td>
                            <td>{{$restaurant->is_active ? "Active" : "Inactive"}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" id="dropdownSubMenu1" class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions<span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div aria-labelledby="dropdownSubMenu1" class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurants.show',['id' => $restaurant->id])}}">View</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurants.edit',['id' => $restaurant->id])}}">Edit</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.dishes-new.index',['restaurant' => $restaurant])}}">Dishes</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurant.schedules.index',['restaurant' => $restaurant->id])}}">Schedules</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.menus.index',['restaurant' => $restaurant->id])}}">Menus</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.tables.index')}}">Tables</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurant.staff',['restaurant' => $restaurant->id])}}">Staff</a>
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
                @endrole

                @role('restaurant-admin')
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Max Party Size</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td>{{$restaurants->name_en}}</td>
                            <td>{{$restaurants->email}}</td>
                            <td>{{$restaurants->address}}</td>
                            <td>{{$restaurants->phone}}</td>
                            <td>{{$restaurants->max_party_size}}</td>
                            <td>{{$restaurants->is_active ? "Active" : "Inactive"}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" id="dropdownSubMenu1" class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions<span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div aria-labelledby="dropdownSubMenu1" class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurants.show',['id' => $restaurants->id])}}">View</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurants.edit',['id' => $restaurants->id])}}">Edit</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurant.schedules.index',['restaurant' => $restaurants->id])}}">Schedules</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.menus.index')}}">Menus</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.tables.index')}}">Tables</a>
                                        <a class="dropdown-item" href="{{route('restaurant-admin.restaurant.staff',['restaurant' => $restaurants->id])}}">Staff</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    

                    </tbody>
                </table>
                @endrole

                @role('restaurant-host')
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Max Party Size</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td>{{$restaurants->name_en}}</td>
                            <td>{{$restaurants->email}}</td>
                            <td>{{$restaurants->address}}</td>
                            <td>{{$restaurants->phone}}</td>
                            <td>{{$restaurants->max_party_size}}</td>
                            <td>{{$restaurants->is_active ? "Active" : "Inactive"}}</td>
                            

                        </tr>
                    

                    </tbody>
                </table>
                @endrole
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
    <script>
        const dropdowns = document.querySelectorAll('.dropdown-toggle')
const dropdown = [...dropdowns].map((dropdownToggleEl) => new bootstrap.Dropdown(dropdownToggleEl, {
    popperConfig(defaultBsPopperConfig) {
        return { ...defaultBsPopperConfig, strategy: 'fixed' };
    }
}));
    </script>
@endpush

@push('styles')
    <style>
        tbody{
            height: 300px;
        }
    </style>
@endpush
