<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Models\Admin\Faqs\GeneralFaq;
use App\Models\Admin\Partner\Partner;
use App\Models\Admin\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Schema;
use App\Models\Admin\Trip\TripCategory;
use App\Models\Admin\Pages\GeneralPage;
use App\Models\Frontend\Contact;
use UniSharp\LaravelFilemanager\LaravelFilemanagerServiceProvider;
use Intervention\Image\ImageServiceProvider;
use App\Models\Menu;
use Illuminate\Support\Facades\Schema as FacadesSchema;

// use App\Models\Service\Service;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // FacadesSchema::defaultStringLength(191);
        // // -------------------------Project Section-----------------------------------
        // View::composer(['frontend.layouts*'], function ($view) {
        //     $view->with('cat_menu', TripCategory::where('parent_id', '!=', null)->where('display', 1)->get());
        // });

        // View::composer(['frontend.layouts*'], function ($view) {
        //     $view->with('pages', GeneralPage::where('status', 'active')->get());
        // });

        // // View::composer(['frontend*'],function($view){
        // //     $view->with('setting',Setting::first());
        // // });

        // View::composer(['frontend*'], function ($view) {
        //     $view->with('inbond', TripCategory::where('bond_status', '1')->where('status', 'active')->orderBy('position')->get())
        //     ->with('outbond', TripCategory::where('bond_status', '2')->where('status', 'active')->orderBy('position')->get());
        // });


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        // // Setting Sharing
        //     @$setting = Setting::find(1);
        //     view()->share('setting', @$setting);
        // // Mailing for site
        //     define('SITE_MAIL', @$setting->email);

        // // Notifiaction on nav bar
        // $messages = Contact::where('is_read', 'no')->take(2)->get();

        // View::share('messages', $messages);

        // // Header Pages
        // $headerpages = GeneralPage::whereIn('show_in', ['header','both'])->where('status', 'active')->orderBy('position')->get();
        // View::share('headerpages', $headerpages);
        // // Footer Pages
        // $footerpages = GeneralPage::whereIn('show_in', ['footer','both'])->where('status', 'active')->get();
        // View::share('footerpages', $footerpages);

        // // Partners or sister concerns & Affiliates
        // $sisters = Partner::where('status', 'active')->where('show_in', 'sister')->orderByDesc('created_at')->take(4)->get();
        // view()->share('sisters', $sisters);

        // $affiliates = Partner::where('status', 'active')->where('show_in', 'affiliate')->orderBy('position')->get();
        // view()->share('affiliates', $affiliates);

        // View::share('footerMenu', Menu::where(['parent_id' => null,'publish_status' => 1])->whereNotIn('header_footer', ['1'])
        // ->select('id', 'name', 'slug', 'position', 'parent_id', 'external_link', 'category_slug', 'title_slug')
        // ->orderBy('position', 'ASC')
        // ->take(5)
        // ->get());

        // View::share('menus', Menu::where(['parent_id' => null, 'publish_status' => 1])->whereNotIn('header_footer', ['2'])
        //     ->select('id', 'name', 'slug', 'position', 'parent_id', 'header_footer', 'external_link', 'category_slug', 'page_title', 'title_slug', 'icon', 'image')
        //     ->with('children:id,name,slug,position,parent_id,header_footer,external_link,category_slug,page_title,title_slug')
        //     ->orderBy('position', 'ASC')
        //     ->get());



        // // not nescessarry but needed on footer of frontend only there
        // $faqs = GeneralFaq::where('status', 'active')->get();
        // view()->share('faqs', $faqs);
    }
}
