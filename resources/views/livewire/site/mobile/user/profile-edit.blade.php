<div class="flex flex-col space-y-8 items-center px-2">
    <form wire:submit='submit' class="flex flex-col items-center">
    <div class="w-full my-2">
        <input type="text" wire:model='profile.name' class="flex items-center w-full ltr:font-lato rtl:font-ahlan ltr:placeholder:font-bold rtl:placeholder:font-normal text-[19px] ltr:tracking-[2px] rtl:tracking-normal border-[#707070] border-2 p-4 rounded-[19px]">
    </div>
    <div class="w-full my-2">
        <select wire:model='area' class="flex items-center w-full ltr:font-lato rtl:font-ahlan ltr:placeholder:font-bold rtl:placeholder:font-normal text-[19px] ltr:tracking-[2px] rtl:tracking-normal border-[#707070] border-2 p-4 rounded-[19px]">
            <option value="">{{ __('Select Area') }}</option>
                            @foreach ($governates as $governate)
                                <optgroup label="{{ $governate->name_en }}">
                                    @foreach ($governate->areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name_en }}</option>
                                    @endforeach
                                </optgroup>
                            @endforeach
        </select>
    </div>
    <div class="w-full my-2">
        <input type="text" wire:model='profile.phone' class="flex items-center w-full ltr:font-lato rtl:font-ahlan ltr:placeholder:font-bold rtl:placeholder:font-normal text-[19px] ltr:tracking-[2px] rtl:tracking-normal border-[#707070] border-2 p-4 rounded-[19px]">
    </div>
    <div class="w-full my-2">
        <input type="text" wire:model='profile.email' class="flex items-center w-full ltr:font-lato rtl:font-ahlan ltr:placeholder:font-bold rtl:placeholder:font-normal text-[19px] ltr:tracking-[2px] rtl:tracking-normal border-[#707070] border-2 p-4 rounded-[19px]">
    </div>
    <div class="w-full my-2">
        <select wire:model='gender' class="flex items-center w-full ltr:font-lato rtl:font-ahlan ltr:placeholder:font-bold rtl:placeholder:font-normal text-[19px] ltr:tracking-[2px] rtl:tracking-normal border-[#707070] border-2 p-4 rounded-[19px]">
            <option value="">{{ __('Select Gender') }}</option>
            <option value="0">{{ __('Male') }}</option>
            <option value="1">{{ __('Female') }}</option>

        </select>
    </div>
    <button class="uppercase font-lato font-bold bg-[#F8F8F8] shadow-md rounded-lg py-4 px-8 text-center w-2/3 mb-4">{{__('Save')}}</button>
    </form>
</div>