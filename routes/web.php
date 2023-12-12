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

Route::get('/', function () {
    return redirect()->route('front.index');
});

Route::get('index', 'FrontController@index')->name('front.index');
Route::get('Recogination-Letter', 'FrontController@RecoginationLetter')->name('front.Recogination.Letter');
//about
Route::get('message-requirement', 'FrontController@messageRequirement')->name('front.message.requirement');
Route::get('trust', 'FrontController@trust')->name('front.trust');
Route::get('trust-affidavit', 'FrontController@trustAffidavit')->name('front.trust.affidavit');

//college
Route::get('faculty', 'FrontController@faculty')->name('front.faculty');
Route::get('approval-leter', 'FrontController@approvalLeter')->name('front.faculty.approval.leter');
Route::get('profile1', 'FrontController@profile1')->name('front.faculty.profile1');
Route::get('profile2', 'FrontController@profile2')->name('front.faculty.profile2');
Route::get('profile3', 'FrontController@profile3')->name('front.faculty.profile3');
Route::get('profile4', 'FrontController@profile4')->name('front.faculty.profile4');
Route::get('profile5', 'FrontController@profile5')->name('front.faculty.profile5');
Route::get('profile6', 'FrontController@profile6')->name('front.faculty.profile6');

Route::get('affidavit1', 'FrontController@affidavit1')->name('front.faculty.affidavit1');
Route::get('affidavit2', 'FrontController@affidavit2')->name('front.faculty.affidavit2');
Route::get('affidavit3', 'FrontController@affidavit3')->name('front.faculty.affidavit3');
Route::get('affidavit4', 'FrontController@affidavit4')->name('front.faculty.affidavit4');
Route::get('affidavit5', 'FrontController@affidavit5')->name('front.faculty.affidavit5');
Route::get('affidavit6', 'FrontController@affidavit6')->name('front.faculty.affidavit6');

Route::get('Joining1', 'FrontController@Joining1')->name('front.faculty.Joining1');
Route::get('Joining2', 'FrontController@Joining2')->name('front.faculty.Joining2');
Route::get('Joining3', 'FrontController@Joining3')->name('front.faculty.Joining3');
Route::get('Joining4', 'FrontController@Joining4')->name('front.faculty.Joining4');
Route::get('Joining5', 'FrontController@Joining5')->name('front.faculty.Joining5');
Route::get('Joining6', 'FrontController@Joining6')->name('front.faculty.Joining6');

// Route::get('Appointment1', 'FrontController@Appointment1')->name('front.faculty.Appointment1');
Route::get('Appointment2', 'FrontController@Appointment2')->name('front.faculty.Appointment2');
Route::get('Appointment3', 'FrontController@Appointment3')->name('front.faculty.Appointment3');
Route::get('Appointment4', 'FrontController@Appointment4')->name('front.faculty.Appointment4');
Route::get('Appointment5', 'FrontController@Appointment5')->name('front.faculty.Appointment5');
Route::get('Appointment6', 'FrontController@Appointment6')->name('front.faculty.Appointment6');

Route::get('infrastructure', 'FrontController@infrastructure')->name('front.infrastructure');
Route::get('infrastructure-photo', 'FrontController@infrastructurePhoto')->name('front.infrastructure.photo');
Route::get('balance-sheet', 'FrontController@balanceSheet')->name('front.balance.sheet');
Route::get('Course-Offered', 'FrontController@CourseOffered')->name('front.Course.Offered');
Route::get('support', 'FrontController@support')->name('front.support');

//college
Route::get('gallery', 'FrontController@gallery')->name('front.gallery');
Route::get('news', 'FrontController@news')->name('front.news');

//contacts
Route::get('contacts', 'FrontController@contacts')->name('front.contacts');



