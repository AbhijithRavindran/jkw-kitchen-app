<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodMenu;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $food_menu_highlighted = FoodMenu::where([
            'status' => true,
            'highlight' => true,
            'trash' => false
     ])->get();
        $food_menu = FoodMenu::where([
                                        'status' => true,
                                        'trash' => false
                                ])->get();
        return view('home', compact('food_menu_highlighted', 'food_menu'));
    }

    public function menu()
    {
        $food_menu_highlighted = FoodMenu::where([
            'status' => true,
            'highlight' => true,
            'trash' => false
     ])->get();
        $food_menu = FoodMenu::where([
                                'status' => true,
                                'trash' => false
                        ])->get();
        return view('menu', compact('food_menu_highlighted', 'food_menu'));
    }

    public function cart(){
        return view("cart");
    }

    public function customer_info(){
        return view("customer_info");
    }

}
