<x-admins.master>
    <x-slot:title>
        {{__('Frontend Edit | Artsell')}}
    </x-slot:title>
    <div class="container pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{__('Frontend Edit')}}</h1>
            <x-admins.layouts.frontEditTabs />

        </div>

        <div class="carodelEdit">
            <button type="button" class="btn btn-outline-secondary mb-3" data-bs-toggle="modal" data-bs-target="#addCaroselModal">
                <i class="fa-solid fa-plus"></i> Add Carosel
            </button>
            <x-admins.layouts.caroselModal.caroselInsertModal />
            <div class="scrollmenu">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">
                <img src="{{asset('assets/img/art.jpg')}}" alt="">

            </div>
        </div>



    </div>
</x-admins.master>