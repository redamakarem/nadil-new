
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Restaurant</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" wire:submit.prevent="submit">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="name_en">Name</label>
                        <input type="text" name="name_en" class="form-control"
                               id="name_en" placeholder="Enter name" wire:model.defer="restaurant.name_en">
                        @error('name_en')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="name_ar">Arabic Name</label>
                        <input type="text" name="name_ar" class="form-control"
                               id="name_ar" placeholder="Enter Arabic name" wire:model.defer="restaurant.name_ar">
                        @error('name_ar')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control"
                               id="email" placeholder="Enter email" wire:model.defer="restaurant.email">
                        @error('name')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="coordinates">Coordinates</label>
                        <div id="googleMap" style="width:100%;height:400px;" wire:ignore></div>
                        <input type="text" readonly name="coordinates" class="form-control"
                               id="coordinates" placeholder="Click on the map to get coordinates"
                               wire:model="coordinates">
                        @error('coordinates')<p class="error">{{$message}}</p>@enderror
                    </div>

                    <div class="form-group">
                        <label for="restaurant_image">Restaurant Image</label>
                        <x-media-library-attachment name="restaurant_image"/>
                    </div>
                    <div class="form-group">
                        <label for="restaurant_bg">Restaurant Background</label>
                        <x-media-library-attachment name="restaurant_bg"/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control"
                               id="phone" placeholder="Ex: 25555555" wire:model.defer="restaurant.phone">
                        @error('phone')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control"
                                  rows="3" name="address" wire:model.defer="restaurant.address"
                                  placeholder="Address..."></textarea>
                    </div>

                    <div class="form-group" wire:ignore>
                        <label>Cuisines</label>
                        <select class="select2" style="width: 100%;"
                                id="cuisines" multiple="multiple" wire:model.defer="selected_cuisines"
                                data-placeholder="Select cuisine(s)" >
                            @foreach($cuisines as $cuisine)
                                <option value="{{$cuisine->id}}">{{$cuisine->name_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" wire:ignore>
                        <label>Meal Types</label>
                        <select class="select2" style="width: 100%;"
                                id="meal_types" multiple="multiple" wire:model.defer="selected_meal_types"
                                data-placeholder="Select meal types(s)" >
                            @foreach($meal_types as $meal_type)
                                <option value="{{$meal_type->id}}">{{$meal_type->name_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Max Party Size</label>
                        <input type="text" name="name" class="form-control"
                               id="name" placeholder="Enter name" wire:model.defer="restaurant.max_party_size">
                        @error('restaurant.max_party_size')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Estimated Dining Time</label>
                        <input type="text" name="name" class="form-control"
                               id="estimated_dining_time" placeholder="Eg: 45" wire:model.defer="restaurant.estimated_dining_time">
                        @error('restaurant.estimated_dining_time')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="accessible" wire:model="restaurant.accessible">
                        <label class="form-check-label" for="accessible">{{ __('Accessible') }}</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="private_rooms" wire:model="restaurant.private_rooms">
                        <label class="form-check-label" for="private_rooms">{{ __('Private Rooms') }}</label>
                    </div>
                    <div class="form-group">
                        <label for="instagram">Opening Hours English</label>
                        <input type="text" name="instagram" class="form-control" id="instagram"
                            placeholder="Eg: 10 am to 11pm" wire:model="restaurant.opening_hours_en">
                        @error('form_data.facebook')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="instagram">Opening Hours Arabic</label>
                        <input type="text" name="instagram" class="form-control" id="instagram"
                            placeholder="Eg: 10 am to 11pm" wire:model="restaurant.opening_hours_ar">
                        @error('form_data.facebook')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="instagram">Weekend Opening Hours English</label>
                        <input type="text" name="instagram" class="form-control" id="instagram"
                            placeholder="Eg: 10 am to 11pm" wire:model="restaurant.weekend_opening_hours_en">
                        @error('form_data.facebook')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="instagram">Weekend Opening Hours English</label>
                        <input type="text" name="instagram" class="form-control" id="instagram"
                            placeholder="Eg: 10 am to 11pm" wire:model="restaurant.weekend_opening_hours_ar">
                        @error('form_data.facebook')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" class="form-control"
                               id="facebook" placeholder="Eg: www.facebook.com" wire:model.defer="restaurant.facebook">
                        @error('restaurant.facebook')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" class="form-control"
                               id="instagram" placeholder="Eg: www.instagram.com" wire:model.defer="restaurant.instagram">
                        @error('restaurant.facebook')<p class="error">{{$message}}</p>@enderror
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="accessible" wire:model="restaurant.is_active">
                        <label class="form-check-label" for="accessible">{{ __('Active') }}</label>
                    </div>
                    <div class="form-group">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <p><strong>Opps Something went wrong</strong></p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
        jQuery(document).ready(function () {
            jQuery('#cuisines').select2().on('change', function () {
                @this.set('selected_cuisines',jQuery(this).val());
                console.log('Cuisines : ' + @this.selected_cuisines)
            });
            jQuery('#meal_types').select2().on('change', function () {
                @this.set('selected_meal_types',jQuery(this).val());
                console.log('Meal Types : ' + @this.selected_meal_types)
            });

            window.addEventListener('alert', ({detail: {type, message}}) => {
                if (type === 'success') {
                    toastr.success(message);
                } else {
                    toastr.error(message);
                }
            });

            toastr.options.onHidden = function () {
                Livewire.emit('restaurantEdited');
            }

        });


        document.addEventListener('livewire:load', function () {
            initMap();


        })
        function initMap() {
            const myLatlng = { lat: 29.377194479736122, lng: 47.97981981486454 };
            const map = new google.maps.Map(document.getElementById("googleMap"), {
                zoom: 14,
                center: myLatlng,
            });
            // Create the initial InfoWindow.
            let infoWindow = new google.maps.InfoWindow({
                content: "Click the map to get Lat/Lng!",
                position: myLatlng,
            });

            infoWindow.open(map);
            // Configure the click listener.
            map.addListener("click", (mapsMouseEvent) => {
                // Close the current InfoWindow.
                infoWindow.close();
                // Create a new InfoWindow.
                infoWindow = new google.maps.InfoWindow({
                    position: mapsMouseEvent.latLng,
                });
                infoWindow.setContent(
                    JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                );
                infoWindow.open(map);
            @this.coordinates=JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2);
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfJsNn93pyzgF-9ICzEI1q-N9UN3c0SxE&callback=initMap"></script>
@endpush
