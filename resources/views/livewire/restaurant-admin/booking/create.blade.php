<div class="row">
    <div class="col-12">

        <!-- form start -->
        <form wire:submit.prevent="submit">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Booking</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <div class="form-group">
                        <label for="restaurant">Restaurant</label>
                        <select class="select2 form-control"
                                id="restaurant" wire:model="selected_restaurant"
                                data-placeholder="Select owner" style="width: 100%">
                            <option value="">{{__('Select Restaurant')}}</option>
                            @foreach($restaurants as $restaurant)
                                <option value="{{$restaurant->id}}">{{$restaurant->name_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user">User</label>
                        <select class="select2 form-control"
                                id="user" wire:model="selected_user"
                                data-placeholder="Select owner" style="width: 100%">
                            <option value="">Select User</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="booking_date">Booking Date</label>
                        <div wire:ignore>
                            <input type="text" id="booking_date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{__('Booking Time')}}</label>
                        <div>
                            @forelse($slot_options as $key =>$value)
                                <label class="btn btn-secondary {{$slot_options[$key]==$selected_time?'active':''}}">
                                    <input type="radio" wire:model="selected_time" value="{{$value}}"> {{$value}}
                                </label>
                                @empty
                                <p>Please select Restaurant and Booking date</p>
                            @endforelse

                        </div>

                    </div>


                    <div class="form-group">
                        <label for="booking_phone">Phone</label>
                        <input wire:model="booking.phone"
                               type="text" class="form-control" id="booking_phone" placeholder="Enter phone number">
                    </div>
                    <div class="form-group">
                        <label for="booking_seats">Seats</label>
                        <input wire:model="booking.seats"
                               type="text" class="form-control" id="booking_seats" placeholder="Enter number of seats">
                    </div>
                    
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>


    </div>
</div>



@push('styles')
    <link rel="stylesheet" href="{{asset('pickadate/lib/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset('pickadate/lib/themes/default.date.css')}}">
    <link rel="stylesheet" href="{{asset('pickadate/lib/themes/default.time.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@endpush
@push('scripts')

    <script src="{{asset('pickadate/lib/compressed/picker.js')}}"></script>
    <script src="{{asset('pickadate/lib/compressed/picker.date.js')}}"></script>
    <script src="{{asset('pickadate/lib/compressed/picker.time.js')}}"></script>
    <script src="{{asset('pickadate/lib/compressed/legacy.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        jQuery(document).ready(function () {
            jQuery('#cuisines').select2().on('change', function () {
                @this.set('form_data.cuisines',jQuery(this).val());
                console.log('Cuisines : ' + @this.form_data.cuisines)
            });

            jQuery('#booking_date').pickadate({
                onSet: function () {
                    console.log(this.get('select', 'yyyy-mm-dd'));
                @this.set('selected_date', this.get('select', 'yyyy-mm-dd'));
                }
            });
            jQuery('#end_date').pickadate({
                onSet: function () {
                    console.log(this.get('select', 'yyyy-mm-dd'));
                @this.set('end_date', this.get('select', 'yyyy-mm-dd'));
                }
            });
            jQuery('#booking_time').pickatime({
                onSet: function () {
                    console.log(this.get('select', 'HH:i'));
                @this.set('booking_time', this.get('select', 'HH:i'));
                }
            });
            jQuery('#end_time').pickatime({
                onSet: function () {
                    console.log(this.get('select', 'HH:i'));
                @this.set('end_time', this.get('select', 'HH:i'));
                }
            });
            
            window.addEventListener('alert', ({detail: {type, message}}) => {
                if (type === 'success') {
                    toastr.success(message);
                } else {
                    toastr.error(message);
                }
            });

            toastr.options.onHidden = function () {
                Livewire.emit('ScheduleAdded');
            }
        })
    </script>
@endpush

