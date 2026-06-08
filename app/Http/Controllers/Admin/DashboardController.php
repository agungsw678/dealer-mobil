<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Models\Car;
use App\Models\Promo;
use App\Models\SalesContact;
use App\Models\VideoReview;

class DashboardController extends BaseAdminController
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalCars' => Car::count(),
            'totalPromos' => Promo::count(),
            'totalBanners' => Banner::where('status', true)->count(),
            'totalVideos' => VideoReview::where('status', true)->count(),
            'totalContacts' => SalesContact::count(),
            'latestCars' => Car::latest()->limit(5)->get(),
            'latestPromos' => Promo::latest()->limit(5)->get(),
            'latestVideos' => VideoReview::latest()->limit(5)->get(),
            'latestContacts' => SalesContact::latest()->limit(5)->get(),
        ]);
    }
}
