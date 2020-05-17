<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FoodMenuController extends Controller
{
    public function index($type = ""){
        $user = Auth::user();
        if($type == "active"){
            $food_menu =  FoodMenu::where('status', true)->get();
            $food_menu =  $food_menu->where('trash', false);
        }else{
            $food_menu = FoodMenu::where('trash', false)->get();
        }
        return view('admin.food_menu.index', compact('food_menu', 'user', 'type'));
    }

    public function new(){
        $user = Auth::user();
        return view('admin.food_menu.new', compact('user'));
    }

    public function create(Request $request){
        $food_menu_item = new FoodMenu;
        $food_menu_item->name = $request->input('name');
        $food_menu_item->description = $request->input('description');
        $food_menu_item->price = $request->input('price');
        if($request->input('status') == "active"){
            $food_menu_item->status = true;
        }else{
            $food_menu_item->status = false;
        }
        $path = $request->file('image')->store('images');
        $food_menu_item->image_url = Storage::url($path);
        $food_menu_item->save();
        return redirect('/admin/food_menu/list'); 
    }

    public function show($id){
        $user = Auth::user();
        $food_menu_item = FoodMenu::find($id);
        return view('admin.food_menu.show', compact('user', 'food_menu_item'));
    }

    public function update(Request $request , $id){
        $food_menu_item = FoodMenu::find($id);
        $food_menu_item->name = $request->input('name');
        $food_menu_item->description = $request->input('description');
        $food_menu_item->price = $request->input('price');
        $path = $request->file('image')->store('images');
        $food_menu_item->image_url = Storage::url($path);
        $food_menu_item->save();
        return redirect('/admin/food_menu/list'); 
    }

    public function activate($id){
        $food_menu_item = FoodMenu::find($id);
        $food_menu_item->status = true;
        $food_menu_item->save();
        return redirect('/admin/food_menu/list'); 
    }

    public function deactivate($id){
        $food_menu_item = FoodMenu::find($id);
        $food_menu_item->status = false;
        $food_menu_item->save();
        return redirect('/admin/food_menu/list'); 
    }

    public function highlight($id){
        $food_menu_item = FoodMenu::find($id);
        $food_menu_item->highlight = true;
        $food_menu_item->save();
        return redirect('/admin/food_menu/list');  
    }

    public function unhighlight($id){
        $food_menu_item = FoodMenu::find($id);
        $food_menu_item->highlight = false;
        $food_menu_item->save();
        return redirect('/admin/food_menu/list');  
    }

    public function delete($id){
        $food_menu_item = FoodMenu::find($id);
        $food_menu_item->trash = true;
        $food_menu_item->save();
        return redirect('/admin/food_menu/list'); 
    }

    public function itemStatus(){

    }
}
