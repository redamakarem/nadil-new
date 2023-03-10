<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Edit Cuisine</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form wire:submit.prevent="submit">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Cuisine Name</label>
                <input wire:model.defer="cuisine.name_en"
                       type="text" class="form-control" id="name" placeholder="Enter cuisine name">
                @error('name_en')<span class="error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="name">Cuisine Arabic Name</label>
                <input wire:model.defer="cuisine.name_ar"
                       type="text" class="form-control" id="name" placeholder="Enter cuisine arabic name">
                @error('name')<span class="error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                @if ($cuisine->getFirstMediaUrl('cuisine_images') && !$cuisine_image)
                    <img src="{{$cuisine->getFirstMediaUrl('cuisine_images')}}" style="width: 125px;height:auto"/>
                @endif
                <x-media-library-attachment name="cuisine_image"/>
            </div>
        </div>



        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@push('scripts')
    <script>
        jQuery(document).ready(function () {
            window.addEventListener('alert', ({detail: {type, message}}) => {
                if (type === 'success') {
                    toastr.success(message);
                } else {
                    toastr.error(message);
                }
            });

            toastr.options.onHidden = function () {
                Livewire.emit('cuisineUpdated');
            }
        });


    </script>
@endpush
