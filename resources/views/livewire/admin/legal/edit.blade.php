<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Legal Item</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form wire:submit.prevent='submit'>
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('English Title') }}</label>
                <input type="text" wire:model='legal.title_en' class="form-control">
            </div>
            <div class="form-group">
                <label>{{ __('Arabic Title') }}</label>
                <input type="text" wire:model='legal.title_ar' name="title_ar" class="form-control">
            </div>
            <div class="form-group" wire:ignore>
                <label>{{ __('English Description') }} </label>
                <div id="description_en" class="form-control"  wire:ignore ></div>
            </div>
            <div class="form-group" wire:ignore>
                <label>{{ __('Arabic Description') }}</label>
                <div id="description_ar"  class="form-control" wire:ignore ></div>
            </div>
            <div class="form-group">
                @if ($errors->any())
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
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('#description_en').summernote({
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                    callbacks: {
                        onBlur: function(contents, $editable) {
                        @this.set('content_en', jQuery(this).summernote('code'));
                    }
  }
  });
  jQuery('#description_en').summernote('code', @this.content_en);

  jQuery('#description_ar').summernote({
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                    callbacks: {
                        onBlur: function(contents, $editable) {
                        @this.set('content_ar', jQuery(this).summernote('code'));
                    }
  }
  });
    jQuery('#description_ar').summernote('code', @this.content_ar);
           

});
        
    </script>    
@endpush