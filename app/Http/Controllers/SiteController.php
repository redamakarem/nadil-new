<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Legal;
use App\Models\Booking;
use App\Models\Cuisine;
use App\Models\MealType;
use App\Models\Schedule;
use Carbon\CarbonPeriod;
use App\Models\Restaurant;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Providers\RouteServiceProvider;

class SiteController extends Controller
{
    public function index()
    {
        if(auth()->user() ){if(auth()->user()->hasRole('admin')){
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }
        if(auth()->user()->hasAnyRole(['restaurant-admin','restaurant-super-admin','restaurant-host','restaurant-manager'])){
            return redirect()->intended(RouteServiceProvider::RESTAURANT_HOME);
        }
        if(auth()->user()->hasRole('user')){
            return redirect()->intended(RouteServiceProvider::HOME);
        }}
        if(session('target_route','') != ''){
            return redirect(route(session('target_route',''),session('booking_restaurant')));
        }
        $agent = new Agent();
        $restaurants = Restaurant::where('is_active',true)->get();
        $cuisines = Cuisine::all();
        $meal_types = MealType::with('restaurants')->get();
        $featured = Restaurant::where('is_active',true)->where('is_featured',true)->get();
        $latest = Restaurant::where('is_active',true)->orderBy('created_at','desc')->take(12)->get();
        if ($agent->isDesktop()) {
            return view('site.home', [
                'restaurants' => $restaurants,
                'cuisines' => $cuisines,
                'meal_types' => $meal_types,
                'featured' => $featured,
                'latest' => $latest,
            ]);
        }


        return view('site.mobile.home', [
            'restaurants' => $restaurants,
            'cuisines' => $cuisines,
            'meal_types' => $meal_types,
            'featured' => $featured,
            'latest' => $latest,
        ]);
    }

    public function homeResp()
    {
        $restaurants = Restaurant::where('is_active',true)->get();
        $cuisines = Cuisine::all();
        $meal_types = MealType::with('restaurants')->get();
        $featured = Restaurant::where('is_active',true)->where('is_featured',true)->get();
        $latest = Restaurant::where('is_active',true)->orderBy('created_at','desc')->take(12)->get();
        return view('site.home-resp', [
            'restaurants' => $restaurants,
            'cuisines' => $cuisines,
            'meal_types' => $meal_types,
            'featured' => $featured,
            'latest' => $latest,
        ]);
    }

    public function show_restaurant($restaurant_id)
    {

        $current_time = Carbon::now();
        $time_str = $current_time->toTimeString();


        $agent = new Agent();
        $restaurant = Restaurant::with('menus')->findOrFail($restaurant_id);
        if ($agent->isMobile()) {
            return view('site.mobile.restaurant-menu', compact('restaurant'));
        } else {
            return view('site.restaurant-menu', compact('restaurant'));
        }
    }
    public function show_restaurant_resp($restaurant_id)
    {

        $current_time = Carbon::now();
        $time_str = $current_time->toTimeString();


       $restaurant = Restaurant::with('menus')->findOrFail($restaurant_id);
        
            return view('site.restaurant-menu-resp', compact('restaurant'));
        
    }

    public function book_restaurant($restaurant_id)
    {
        $agent = new Agent();
        $restaurant = Restaurant::with('schedules')->findOrFail($restaurant_id);
        if ($agent->isMobile()) {
            return view('site.mobile.restaurant-booking', compact('restaurant'));
        } else {
            return view('site.restaurant-booking', compact('restaurant'));
        }
    }
    public function book_restaurant_resp($restaurant_id)
    {
        $restaurant = Restaurant::with('schedules')->findOrFail($restaurant_id);
        
            return view('site.restaurant-booking-resp', compact('restaurant'));
        
    }

    public function check_booking(Request $request)
    {
        $agent = new Agent();
        $validated_data = $request->validate(
            [
                'search_date' => ['required'],
                'search_time' => ['required'],
                'search_seats' => ['required'],
                'search_name' => ['sometimes','nullable']
             ]
        );
        // dd($validated_data);
        $result = Restaurant::whereHas('menus')
        ->where('name_'. app()->getLocale(),'LIKE','%'. $validated_data['search_name'].'%')
        ->orWhereRelation('areaa','name_'. app()->getLocale(),$validated_data['search_name'])
        ->orWhereRelation('cuisines','name_'. app()->getLocale(),$validated_data['search_name'])
        ->where('is_active',true)
        ->get()->filter(function ($value, $key) use($validated_data) {
            return $value->getAvailableSeats($validated_data['search_date'],$validated_data['search_time']) > $validated_data['search_seats'];
        });
        if ($agent->isMobile()) {
            return view('site.mobile.search',compact(['result','validated_data']));
        }

        return view('site.search',compact(['result','validated_data']));
    }


    public function check_booking_resp(Request $request)
    {
        $validated_data = $request->validate(
            [
                'search_date' => ['required'],
                'search_time' => ['required'],
                'search_seats' => ['required'],
                'search_name' => ['sometimes','nullable']
             ]
        );
        // dd($validated_data);
        $result = Restaurant::whereHas('menus')
        ->where('name_'. app()->getLocale(),'LIKE','%'. $validated_data['search_name'].'%')
        ->orWhereRelation('areaa','name_'. app()->getLocale(),$validated_data['search_name'])
        ->orWhereRelation('cuisines','name_'. app()->getLocale(),$validated_data['search_name'])
        ->where('is_active',true)
        ->get()->filter(function ($value, $key) use($validated_data) {
            return $value->getAvailableSeats($validated_data['search_date'],$validated_data['search_time']) > $validated_data['search_seats'];
        });
       

        return view('site.user.search-resp',compact(['result','validated_data']));
    }

    public function getTimeSlots($start_time, $end_time, $slot_length)
    {
        $period = CarbonPeriod::create($start_time, $slot_length, $end_time);
        $slots = [];
        foreach ($period as $item) {
            array_push($slots, $item->format("h:i A"));
        }

        return $slots;
    }

    public function restaurants()
    {
    }


    public function userRegister()
    {
        $agent = new Agent();
        if ($agent->isDesktop()){
        return view('site.user-register');
        }
        else{
            return view('auth.mobile.register');
        }
    }

    public function registrationThanks()
    {
        return view('site.registration-thanks');
    }

    public function contact()
    {
        $agent = new Agent();
        if ($agent->isDesktop()){
        return view('site.contact');
        }
        else{
            return view('site.mobile.contact');
        }
    }

    public function restaurants_by_cuisine($cuisine)
    {
        $agent = new Agent();
        $restaurants = Cuisine::findOrFail($cuisine)->restaurants;
        if ($agent->isDesktop()){
        return view('site.restaurants-by-cuisine',compact(['restaurants']));
        }
        else{
            $result=$restaurants;
            return view('site.mobile.restaurants-by-cuisine',compact(['result']));
        }
    }

    public function about()
    {
        $agent = new Agent();
        if ($agent->isDesktop()){
        return view('site.about');
        }
        else{
            return view('site.mobile.about');
        }
    }
    public function privacy()
    {
        $agent = new Agent();
        $privacy = Legal::where('slug', 'privacy-policy')->first();
        if ($agent->isDesktop()){
        return view('site.privacy',compact('privacy'));
        }
        else{
            return view('site.mobile.privacy',compact('privacy'));
        }
    }
    public function faq()
    {
        $agent = new Agent();
        $faq = Legal::where('slug', 'faq')->first();
        if ($agent->isDesktop()){
        return view('site.faq',compact('faq'));
        }
        else{
            return view('site.mobile.faq',compact('faq'));
        }
    }
    public function tos()
    {
        $agent = new Agent();
        $tos = Legal::where('slug', 'terms-of-use')->first();
        if ($agent->isDesktop()){
        return view('site.tos',compact('tos'));
        }
        else{
            return view('site.mobile.tos',compact('tos'));
        }
    }

    public function show_booking_confirmation($booking_id)
    {
        $agent = new Agent();
        $booking = Booking::findOrFail($booking_id);
        if ($agent->isDesktop()) {
            return view('site.booking-thanks', compact('booking'));
        } else {
            return view('site.mobile.booking-thanks', compact('booking'));
        }
        
    }
    public function show_booking_confirmation_resp($booking_id)
    {
        $booking = Booking::findOrFail($booking_id);
            return view('site.booking-thanks-resp', compact('booking'));
        
        
    }

    public function password_reset_success()
    {
        $agent = new Agent();
        if ($agent->isDesktop()) {
            return view('auth.password-reset-success');
        } else {
            return view('auth.mobile.password-reset-success');
        }
    }
}
