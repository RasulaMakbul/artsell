<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaroselRequest;
use App\Models\Carosel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function aboutUsAdminView()
    {
        return view('admins.aboutUsAdmin');
    }
    public function settings()
    {
        return view('admins.settings');
    }

    public function storeCarosel(CaroselRequest $request)
    {
        $fileName = $this->uploadImage($request->File('image'));
        #dd($request->file('image'));

        $carosel = new Carosel();
        $carosel->title = $request->title;
        $carosel->description = $request->description;
        $carosel->link = $request->link;
        $carosel->image = $fileName;
        $carosel->save();
        return response()->json([
            'status' => 'success',
        ]);
    }



    public function uploadImage($image)
    {
        $originalName = $image->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;
        $image->move(storage_path('/app/public/carosel'), $fileName);
        return $fileName;
    }
}
