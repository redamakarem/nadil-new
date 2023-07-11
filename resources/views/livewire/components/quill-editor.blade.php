
<div id="{{$quillId}}" wire:ignore>
    
</div>


@push('scripts')
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        const quill = new Quill('#{{ $quillId }}', {
            theme: 'snow'
        });
        quill.on('text-change', function () {
        let value = document.getElementsByClassName('ql-editor')[0].innerHTML;
        @this.set('value', value)
    });
    </script>    
@endpush
