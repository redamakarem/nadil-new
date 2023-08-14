@extends('layouts.site-tw')
@section('content')

<div id="page-wrapper">
    {{-- <div class="banner h-auto bg-red-400">
        <div class="flex mx-18 gap-4 min-h-[500px]">
            <div class="w-1/2 flex flex-col justify-center">
                <h2 class="font-lato uppercase text-5xl text-center text-white leading-[60px]">All your booking needs <br> in one place</h2>
            </div>
            <div class="w-1/2">
                <img src="{{asset('/images/about.png')}}" alt="" class="h-full w-auto" />
            </div>
        </div>
    </div> --}}
    <div id="page-content" class="flex flex-grow flex-col w-[85%] max-w-12xl mx-auto py-[80px] ">
        <div class="flex flex-col">
            <div class="flex flex-col-reverse lg:flex-row lg:space-x-10 justify-between lg:rtl:space-x-reverse">
                <div class="lg:w-1/2">@livewire('site.restaurant.register')</div>
                <div class="lg:w-1/2"><img src="{{asset('/images/about.png')}}" alt="" class="object-cover w-full rounded-lg"/></div>
            </div>
            <div class="about my-8">
                <h1 class="text-3xl font-bold text-center font-lato uppercase text-gray-700">Who are we?</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate autem distinctio excepturi quae pariatur ex ullam soluta! Aspernatur soluta tempora blanditiis obcaecati neque sunt deleniti illum mollitia magni assumenda aut expedita odio, autem modi ipsam velit id. Natus quisquam, alias minus expedita sed maiores saepe officiis. Sunt veniam doloribus laboriosam impedit rerum, nisi quibusdam dolore quod commodi! Ab dolor vel quam placeat unde porro deleniti, reiciendis modi blanditiis, nobis voluptate nesciunt tempora officiis incidunt dicta molestiae minus nam. Aperiam itaque natus accusantium dolore quia voluptatibus autem nobis fugiat in architecto, sequi delectus ducimus deleniti perspiciatis unde praesentium vero impedit dolores quidem dolor deserunt? Voluptatibus ratione repudiandae rerum doloremque hic fugiat tenetur debitis, nulla animi laborum architecto nam cum nesciunt quod culpa magnam rem voluptas nostrum neque totam inventore. Eaque assumenda blanditiis ipsum aperiam dolorem inventore nisi ullam modi error soluta et sint maiores similique maxime porro eligendi repudiandae possimus cum enim natus saepe veniam, architecto sapiente quis. Numquam eligendi culpa aperiam laudantium quae incidunt neque sequi, hic exercitationem esse et suscipit animi qui non molestiae dolor dolorum! Nihil soluta aliquam totam temporibus rem, adipisci molestias accusamus ducimus? Quo neque odit debitis aut obcaecati laboriosam exercitationem molestiae laudantium ducimus quaerat. Rerum optio porro repellat iste fugiat nobis! Fugit nihil aliquam officia laudantium iste, voluptate cumque itaque corporis harum quis. Deserunt nisi debitis exercitationem quis adipisci quae facere nemo illum consectetur laborum mollitia nihil tempore aspernatur at quia voluptatem, perspiciatis nostrum ab, vitae odit praesentium velit accusantium hic dolores. Minima neque molestiae saepe consectetur suscipit placeat soluta. Officiis voluptatum totam necessitatibus hic non, voluptates veniam aspernatur enim reiciendis assumenda. Earum non minima labore tenetur quo esse facilis! Ullam nemo praesentium vitae esse earum neque? Odio nesciunt mollitia minus. Rem a veniam dignissimos sint aspernatur hic reprehenderit suscipit quis excepturi eveniet iure impedit eius labore autem, error ut enim? Officia quos fuga ullam dolore dicta eligendi dignissimos, sit tenetur pariatur rem. Dolorum dolore tempora neque est labore, eius enim dicta. Illum modi cumque eum explicabo aut sint totam perferendis nihil architecto molestias doloribus dignissimos harum vitae expedita, soluta repellendus exercitationem ex ipsam consectetur incidunt! Labore laudantium possimus nihil architecto ipsum ducimus eveniet repellat provident dignissimos deleniti praesentium soluta id autem quae quibusdam sequi, eligendi ad illo asperiores at officiis nam. Necessitatibus earum tempora libero! Adipisci necessitatibus facilis natus error laboriosam voluptatibus eligendi, illo dicta fuga animi quaerat accusantium aperiam, tempora incidunt similique, et vitae reprehenderit perferendis soluta nihil! Nisi necessitatibus ipsam pariatur eaque fuga! Voluptates omnis necessitatibus inventore possimus numquam accusantium itaque, totam quae neque officia odio harum? Ipsam placeat doloribus voluptate, suscipit soluta possimus nam repudiandae, repellendus autem quidem magnam provident? Repudiandae, at maiores aliquam dolorum cum tenetur recusandae, quasi nobis ab iure commodi cupiditate dolorem accusantium dignissimos dicta sit voluptates error sapiente eligendi minus. At in beatae reprehenderit, quaerat suscipit maiores sunt aperiam recusandae, harum enim numquam. Eius et inventore, suscipit sit unde ex quidem delectus libero odit quasi ab vitae vel dolore! Nam nemo exercitationem dignissimos totam quod odit sit.
                </p>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-center font-lato uppercase text-gray-700">What do we provide</h2>
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                    <div class="flex flex-col items-center space-y-18 shadow-md rounded-md py-8 px-4">
                        <h4 class="text-4xl font-lato uppercase">Service</h4>
                        <i class="fa-solid fa-utensils text-5xl"></i>
                        <p class="font-lato text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                    <div class="flex flex-col items-center space-y-18 shadow-md rounded-md py-8 px-4">
                        <h4 class="text-4xl font-lato uppercase">Service</h4>
                        <i class="fa-solid fa-utensils text-5xl"></i>
                        <p class="font-lato text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                    <div class="flex flex-col items-center space-y-18 shadow-md rounded-md py-8 px-4">
                        <h4 class="text-4xl font-lato uppercase">Service</h4>
                        <i class="fa-solid fa-utensils text-5xl"></i>
                        <p class="font-lato text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                    <div class="flex flex-col items-center space-y-18 shadow-md rounded-md py-8 px-4">
                        <h4 class="text-4xl font-lato uppercase">Service</h4>
                        <i class="fa-solid fa-utensils text-5xl"></i>
                        <p class="font-lato text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                    <div class="flex flex-col items-center space-y-18 shadow-md rounded-md py-8 px-4">
                        <h4 class="text-4xl font-lato uppercase">Service</h4>
                        <i class="fa-solid fa-utensils text-5xl"></i>
                        <p class="font-lato text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                    <div class="flex flex-col items-center space-y-18 shadow-md rounded-md py-8 px-4">
                        <h4 class="text-4xl font-lato uppercase">Service</h4>
                        <i class="fa-solid fa-utensils text-5xl"></i>
                        <p class="font-lato text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection


