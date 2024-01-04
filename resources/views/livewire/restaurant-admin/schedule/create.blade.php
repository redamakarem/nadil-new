<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Schedule</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form wire:submit.prevent="submit">
        <div class="card-body">
            
            <div class="form-group">
                <label for="name_en">Restaurant</label>
                <select class="form-control" wire:model='selected_restaurant_id'>
                    <option value="">{{__('Select Restaurant')}}</option>
                    @foreach ($restaurants as $restaurant)
                        <option value="{{$restaurant->id}}">{{$restaurant->name_en}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Schedule Name</label>
                <input wire:model="name"
                       type="text" class="form-control" id="name" placeholder="Enter schedule name">
            </div>
            <div class="form-group" wire:ignore>
                <label for="start_date">Start Date</label>
                <input wire:model="start_date"
                       type="text" class="form-control pdate" id="start_date" placeholder="Choose start date">
            </div>
            <div class="form-group"  wire:ignore>
                <label for="end_date">End Date</label>
                <input wire:model="end_date"
                       type="text" class="form-control pdate" id="end_date" placeholder="Choose end date">
            </div>
            <div class="form-group"  wire:ignore>
                <label for="start_time">Start Time</label>
                <input wire:model="start_time"
                       type="text" class="form-control ptime" id="start_time" placeholder="Choose start time">
            </div>
            <div class="form-group"  wire:ignore>
                <label for="end_time">End Time</label>
                <input wire:model="end_time"
                       type="text" class="form-control ptime" id="end_time" placeholder="Choose end time">
            </div>

            <div class="form-group">
                <label for="end_time">Slot Length</label>
                <select wire:model='slot_length' class="form-control">
                    <option value="">Select slot length</option>
                    <option value="15">15 minutes</option>
                    <option value="30">30 minutes</option>
                    <option value="45">45 minutes</option>
                    <option value="60">60 minutes</option>
               </select>
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



@push('styles')
    <link rel="stylesheet" href="{{asset('pickadate/lib/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset('pickadate/lib/themes/default.date.css')}}">
    <link rel="stylesheet" href="{{asset('pickadate/lib/themes/default.time.css')}}">
@endpush
@push('scripts')

    <script src="{{asset('pickadate/lib/compressed/picker.js')}}"></script>
    <script src="{{asset('pickadate/lib/compressed/picker.date.js')}}"></script>
    <script src="{{asset('pickadate/lib/compressed/picker.time.js')}}"></script>
    <script src="{{asset('pickadate/lib/compressed/legacy.js')}}"></script>

    <script>
        jQuery(document).ready(function () {
            jQuery('#start_date').pickadate({
                onSet: function() {
                    console.log(this.get('select', 'yyyy-mm-dd'));
                @this.set('start_date',this.get('select', 'yyyy-mm-dd'));
                }
            });
            jQuery('#end_date').pickadate({
                onSet: function() {
                    console.log(this.get('select', 'yyyy-mm-dd'));
                @this.set('end_date',this.get('select', 'yyyy-mm-dd'));
                }
            });
            jQuery('#start_time').pickatime({
                onSet: function() {
                    console.log(this.get('select', 'HH:i'));
                @this.set('start_time',this.get('select', 'HH:i'));
                }
            });
            jQuery('#end_time').pickatime({
                onSet: function() {
                    console.log(this.get('select', 'HH:i'));
                @this.set('end_time',this.get('select', 'HH:i'));
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

