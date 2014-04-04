<?php
/**
 * Public Routes Start
 */
//Route to home page
Route::get('/', function()
{
	return View::make('public.home');
});
Route::get('pricing', function()
{
	return View::make('public.pricing');
});
Route::get('portfolio',function(){
    return View::make('public.portfolio');
});
Route::get('login',function(){
    return View::make('public.login');
});

/**
 * services Routes Start
 */
Route::get('services',function(){
    return View::make('public.services.services');
});
Route::get('webdesign',function(){
    return View::make('public.services.webdesign');
});
Route::get('ecommerce',function(){
    return View::make('public.services.ecommerce');
});
Route::get('seo',function(){
    return View::make('public.services.seo');
});
Route::get('maintenance',function(){
    return View::make('public.services.maintenance');
});
Route::get('hosting',function(){
    return View::make('public.services.hosting');
});
/**
 * services Routes End
 */

/**
 * support Routes Start
 */
Route::get('support',function(){
    return View::make('public.support.support');
});
Route::get('faq',function(){
    return View::make('public.support.faq');
});
Route::get('contactus',function(){
    return View::make('public.support.contactus');
});
/**
 * support Routes End
 */

/**
 * Public Routes End
 */