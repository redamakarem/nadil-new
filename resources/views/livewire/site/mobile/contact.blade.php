<div class="flex flex-col items-center">
    <div class="flex flex-col w-full rounded-[64px] border-2 bg-[#EFEFEF] my-12 px-6 py-12 space-y-8">
        @if (session()->has('success'))
            <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                Message sent. We will get back to you as soon as possible.
            </div>
        @endif
        <form wire:submit.prevent='submit'>
            <div class="flex flex-col space-y-4">
                @if ($errors->any())
                <div class="alert alert-danger m-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="flex flex-col space-y-2">
                    <label for="name" class="text-[#1A1A1A] font-bold text-[18px]">Name</label>
                    <input type="text" name="name" id="name"
                        class="rounded-xl px-4 py-2" wire:model='contact.name'>
                    @error('contact.name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="email" class="text-[#1A1A1A] font-bold text-[18px]">Email</label>
                    <input type="email" name="email" id="email"
                        class="rounded-xl px-4 py-2" wire:model='contact.email'>
                    @error('contact.email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="subject" class="text-[#1A1A1A] font-bold text-[18px]">Subject</label>
                    <input type="text" subject="subject" id="subject"
                        class="rounded-xl px-4 py-2" wire:model='contact.subject'>
                    @error('contact.name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="message" class="text-[#1A1A1A] font-bold text-[18px]">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"
                        class="rounded-xl px-4 py-2" wire:model='contact.message'></textarea>
                    @error('contact.message')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-nadilBg-100 text-black rounded-xl px-8 py-2 mt-4">Submit</button>
            </div>
        </form>
    </div>
</div>
