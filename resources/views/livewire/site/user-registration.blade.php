<div class="w-full ltr:font-lato rtl:font-ahlan py-4 rounded-[19px] uppercase text-lg ltr:tracking-[2px] rtl:tracking-normal md:max-w-6xl bg-nadilBtn-100 mx-auto my-8 px-6">
    <div class="row">
        <div class="py-5"></div>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="form-container ">
                <h2 class="ltr:font-lato rtl:font-ahlan text-center font-bold uppercase text-lg ltr:tracking-[2px] rtl:tracking-normal mb-8">{{__('nadil.user_registration.title')}}</h2>
                <form wire:submit.prevent="register">
                    <div class="mb-3">
                        @error('profile.name') <span class="danger">{{$message}}</span> @enderror

                        <input wire:model.lazy="profile.name"
                               type="text" class="w-full ltr:font-lato rtl:font-ahlan py-4 rounded-[19px] text-lg ltr:tracking-[2px] rtl:tracking-normal"
                               placeholder="{{__('nadil.user_registration.name')}}">
                    </div>

                    <div class="mb-3">
                        @error('profile.email') <span class="danger">{{$message}}</span> @enderror
                        <input wire:model.lazy="profile.email"
                               type="text" class="w-full ltr:font-lato rtl:font-ahlan py-4 rounded-[19px] text-lg ltr:tracking-[2px] rtl:tracking-normal"
                               placeholder="{{__('nadil.user_registration.email')}}">
                    </div>
                    <div class="mb-3">
                        @error('profile.gender') <span class="danger">{{$message}}</span> @enderror
                        <select class="w-full ltr:font-lato rtl:font-ahlan py-4 rounded-[19px] text-lg ltr:tracking-[2px] rtl:tracking-normal" aria-label="Gender" wire:model="profile.gender">
                            <option selected>{{__('nadil.user_registration.gender')}}</option>
                            <option value="0">{{__('nadil.user_registration.male')}}</option>
                            <option value="1">{{__('nadil.user_registration.female')}}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        @error('area') <span class="danger">{{$message}}</span> @enderror
                        <select class="w-full rounded-[19px] shadow-md ltr:font-lato rtl:font-ahlan py-4" aria-label="Gender" wire:model="area">
                            <option value="">{{__('nadil.user_registration.area') }}</option>
                            @foreach ($governates as $governate)
                                <optgroup label="{{ $governate->{'name_' . app()->getLocale()} }}">
                                    @foreach ($governate->areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->{'name_' . app()->getLocale()} }}</option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3" wire:ignore>
                        @error('date_of_birth') <span class="danger">{{$message}}</span> @enderror
                        <input  id="dob"
                               type="text" class="w-full ltr:font-lato rtl:font-ahlan py-4 rounded-[19px] text-lg ltr:tracking-[2px] rtl:tracking-normal"
                               placeholder="{{__('nadil.user_registration.dob')}}">
                    </div>
                    <div class="mb-3">
                        @error('profile.phone') <span class="danger">{{$message}}</span> @enderror
                        <input wire:model.lazy="profile.phone"
                               type="text" class="w-full ltr:font-lato rtl:font-ahlan py-4 rounded-[19px] text-lg ltr:tracking-[2px] rtl:tracking-normal"
                               placeholder="{{__('nadil.user_registration.phone')}}">
                    </div>

                    <div class="mb-3">
                        @error('password') <span class="danger">{{$message}}</span> @enderror
                        <input wire:model.lazy="password"
                               type="password" class="w-full ltr:font-lato rtl:font-ahlan py-4 rounded-[19px] text-lg ltr:tracking-[2px] rtl:tracking-normal"
                               placeholder="{{__('nadil.user_registration.password')}}">
                    </div>
                    <div class="mb-3">
                        @error('password_confirmation') <span class="danger">{{$message}}</span> @enderror
                        <input wire:model.lazy="password_confirmation"
                               type="password" class="w-full ltr:font-lato rtl:font-ahlan py-4 rounded-[19px] text-lg ltr:tracking-[2px] rtl:tracking-normal"
                               placeholder="{{__('nadil.user_registration.confirm_password')}}">
                    </div>
                    <div class="my-3 px-4 ltr:font-lato rtl:font-ahlan uppercase text-[10px] font-bold ltr:tracking-[2px] rtl:tracking-normal">{{__('nadil.user_registration.register_agree')}} <a href="#" class="underline">{{__('nadil.footer.terms')}}</a> {{__('nadil.user_registration.and')}} <a href="#" class="underline">{{__('nadil.footer.cancellation')}}</a></div>
                    <div class="flex justify-end">
                        <button class="bg-nadilBg-100 uppercase px-6 py-4 rounded-md font-lato rtl:font-ahlan" type="submit">{{__('nadil.user_registration.register')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="py-3"></div>
    </div>
</div>
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .flatpickr-day.selected{
            background: #0a0e14;
        }
        .flatpickr-day.selected:hover{
            background: #666666;
        }
    </style>

@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ar.js"></script>
<script>
    var booking_date = flatpickr("#dob", {
        "locale": "{{app()->getLocale()}}",
        dateFormat: 'Y-m-d',
        maxDate: "2007-12-31",
    });
    booking_date.config.onChange.push(function(selectedDates,dateStr,instance) {
        console.log(dateStr);
    @this.date_of_birth = dateStr;
    } );

</script>

@endpush
