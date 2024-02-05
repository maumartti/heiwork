<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\HomeController;

//rutas login google y facebook
Route::get('auth/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{driver}/callback', 'Auth\LoginController@handleProviderCallback');



Route::get('/sobre-nosotros', 'HomeController@sobreNosotros');
Route::get('/terminos-condiciones', 'HomeController@terminos');
Route::get('/contacto', 'HomeController@contacto');

//Library
Route::get('/es/{url}', 'HomeController@example')->name('example');

//Articles
Route::get('/teletrabajo-freelance', 'BlogController@articleTrabajoFreelance');
Route::get('/iniciar-como-freelancer', 'BlogController@iniciarFreelancer');
Route::get('/50-mejores-trabajos-freelance', 'BlogController@mejoresTrabajosFreelancer');
Route::get('/teletrabajo-freelance-latinoamerica', 'BlogController@teletrabajoFreelanceLatinoamérica');
Route::get('/trabajos-desde-casa', 'BlogController@trabajosDesdeCasa');
Route::get('/trabajar-en-casa', 'BlogController@trabajarCasa');
//end articles

//post comment
Route::post('/postComment', 'BlogController@postComment');

Route::get('/blog/{title?}', 'BlogController@index');
Route::get('/blog/tags/{tag?}', 'BlogController@tag');
Route::get('/blog/category/{category?}', 'BlogController@category');
Route::get('/blog/pais/{pais?}', 'BlogController@category');
Route::get('/addBlog', 'BlogController@addBlog');
Route::resource('AppBlog', 'BlogController');

Route::get('/addEmails', 'HomeController@addEmails');
Route::post('/addEmail', 'HomeController@addEmail');

Route::get('/verifyexplireplan', 'HomeController@verifyexplireplan')->name('verifyexplireplan');
Route::get('/planes', 'HomeController@plans')->name('plans');
Route::get('/pay/{type}', 'HomeController@pay')->name('pay');
Route::get('/confirmedPay/{code}', 'HomeController@confirmedPay')->name('confirmedPay');
Route::get('/invoicePay/{code}', 'HomeController@invoicePay')->name('invoicePay');

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');

Route::get('/', 'HomeController@index')->name('index');
Route::get('/ganar-dinero/', 'HomeController@ganarDinero')->name('ganarDinero');
Route::get('/freelancers/{country?}', 'HomeController@freelancers')->name('freelancers');
Route::get('/oferta/{title}/{id}', 'HomeController@oferta')->name('oferta');
Route::get('/projects', 'HomeController@myProjectsFreelance')->name('projectsFreelance');
Route::get('/projects-freelance', 'HomeController@myProjectsFreelance')->name('projectsFreelance');
Route::get('/projects-client', 'HomeController@myProjectsClient')->name('projectsClient');
Route::get('/messages/{id?}', 'HomeController@messages')->name('messages');
Route::post('/setMessage','HomeController@setMessage');
Route::post('/responseMessage','HomeController@responseMessage');
Route::get('/blog', 'HomeController@blogs')->name('blog');
Route::get('/deleteApplication/{id}', 'HomeController@deleteApplication')->name('deleteApplication');
Route::get('/account', 'HomeController@account')->name('account');
Route::get('/freelancer/{code}', 'HomeController@profile')->name('profile');
Route::get('/filter/{type?}/{category?}', 'HomeController@filter')->name('filter');
Route::get('/ocultBoxHome', 'HomeController@ocultBoxHome');
Route::post('/setApplication','HomeController@setApplication');
Route::post('/setPost','HomeController@setPost');
Route::get('/setCountryUser/{country_code}', 'HomeController@setCountryUser');
Route::get('/setRubroUser/{rubro_code}', 'HomeController@setRubroUser');
Route::post('/editUser','HomeController@editUser');
Route::post('/editUserNews', 'HomeController@editUserNews');
Route::post('/editProfile','HomeController@editProfile');
Route::get('/publicar', 'HomeController@newPost');
Route::get('mail/send', 'MailController@send');
Route::get('/closeProyect/{id}', 'HomeController@closeProyect');

Route::get('/fakeAccounts/{id?}', 'HomeController@getfakeAccounts');
Route::get('/messagesFakes/{id?}/{idMsj?}', 'HomeController@messagesFakes');
Route::post('/responseMessageFake','HomeController@responseMessageFake');

//new
//Route::get('/p/{url}/{code}', 'PostController@show')->name('showPost');

//--

//panel de mensajes cuentas fake
Route::post('/sendMessageContact', 'HomeController@sendMessageContact')->name('sendMessageContact');
Route::get('/deleteAccount', 'HomeController@deleteAccount')->name('deleteAccount');

Route::get('/sitemap', 'HomeController@sitemap')->name('sitemap');
//Route::get("{any}", "HomeController@index")->where("any", ".*"); //renderiza los reload del SPA



Route::fallback(function () {
	$HomeController = new HomeController;
    $HomeController->getMessagesNotificationAuth();//muestra mensajes y notif si esta log
    return view('404');

});
//Route::get('/home', 'HomeController@index')->name('home');
