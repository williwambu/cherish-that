<?php
class HomeController extends BaseController
{
    
    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */
    
    public function showWelcome() {
        return View::make('index')->nest('child', 'partials.home');
    }
    
    public function about() {
        return View::make('index')->nest('child', 'partials.about');
    }
    
    public function gallery() {
        return View::make('index')->nest('child', 'partials.gallery');
    }
    
    public function orderCake() {
        return View::make('index')->nest('child', 'partials.order');
    }
    
    public function weddingCakes() {
        return View::make('index')->nest('child', 'partials.wedding-cakes');
    }
    
    public function birthdayCakes() {
        return View::make('index')->nest('child', 'partials.birthday-cakes');
    }
    
    public function contactUs() {
        return View::make('index')->nest('child', 'partials.contact-us');
    }
    
    public function flavours() {
        return View::make('index')->nest('child', 'partials.flavours');
    }

    public function cateringServices(){
        return View::make('index') -> nest('child', 'partials.catering');
    }
}
