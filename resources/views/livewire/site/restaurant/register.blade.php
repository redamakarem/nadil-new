   
        <div class="flex flex-col justify-center h-full bg-nadilBtn-100 space-y-6 px-8 py-12 rounded-lg">
            <h2 class="text-2xl font-lato uppercase">{{ __('Join Us') }}</h2>
            <div class="form-container ">
                <form wire:submit.prevent="register">
                    <div class="mb-3 shadow input-container flex flex-col">
                        <input wire:model.lazy="form_data.name"
                        type="text" class="rounded-lg py-4 font-lato rtl:font-ahlan"
                        placeholder="Restaurant Name">
                        @error('form_data.name') <span class="danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3 shadow input-container flex flex-col">
                        <input wire:model.lazy="form_data.owner"
                        type="text" class="rounded-lg py-4 font-lato rtl:font-ahlan"
                        placeholder="Owner Name">
                        @error('form_data.owner') <span class="danger">{{$message}}</span> @enderror
                    </div>

                    <div class="mb-3 shadow input-container flex flex-col">
                        <input wire:model.lazy="form_data.locations"
                        type="text" class="rounded-lg py-4 font-lato rtl:font-ahlan"
                        placeholder="Number of Locations">
                        @error('form_data.locations') <span class="danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3 shadow input-container flex flex-col">
                        <input wire:model.lazy="form_data.email"
                        type="text" class="rounded-lg py-4 font-lato rtl:font-ahlan"
                        placeholder="E-mail">
                        @error('form_data.email') <span class="danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3 shadow input-container flex flex-col">
                        <input wire:model.lazy="form_data.phone"
                        type="text" class="rounded-lg py-4 font-lato rtl:font-ahlan"
                        placeholder="Phone Number">
                        @error('form_data.phone') <span class="danger">{{$message}}</span> @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="bg-nadilBg-100 px-12 py-4 rounded-lg shadow-lg font-lato rtl:font-ahlan uppercase" type="submit">All Done</button>
                    </div>
                </form>
            </div>
    </div>
    
