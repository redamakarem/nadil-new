<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @if ($errors->any())
                <div class="alert alert-danger m-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" wire:submit.prevent="submit">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control"
                               id="name" placeholder="Enter name" wire:model.defer="form_data.name">
                        @error('name')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control"
                               id="email" placeholder="Enter email" wire:model.defer="form_data.email">
                        @error('name')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control"
                               id="coordinates" placeholder="Password"
                               wire:model.defer="form_data.password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                               id="coordinates" placeholder="Password"
                               wire:model.defer="form_data.password_confirmation">
                    </div>
                    <div class="form-group">
                                               <label>Restaurant</label>
                       <select class="select2 form-control" style="width: 100%;"
                               id="restaurants" 
                               wire:model="form_data.restaurant_id">
                               <option value="">{{__('Select Restaurant')}}</option>
                           @foreach($restaurants as $restaurant)
                               <option value="{{$restaurant->id}}">{{$restaurant->name_en}}</option>
                           @endforeach
                       </select>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select class="select2 form-control" style="width: 100%;"
                                id="roles"
                                wire:model="form_data.roles">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


        </div>
        <!-- /.card -->
    </div>
</div>
@push('scripts')
    <script>




    </script>
@endpush
