<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class FrontController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function RecoginationLetter()
	{
		return view('RecoginationLetter');
	}

//about

	public function messageRequirement()
	{
		return view('about.Message_Requirement');
	}

	public function trust()
	{
		return view('about.trust');
	}

	public function trustAffidavit()
	{
		return view('about.trustAffidavit');
	}

//college

	public function faculty()
	{
		return view('college.faculty');
	}

	public function approvalLeter()
	{
		return view('college.faculty.approvalLeter');
	}

	public function profile1()
	{
		return view('college.faculty.profile.p_1');
	}

	public function profile2()
	{
		return view('college.faculty.profile.p_2');
	}

	public function profile3()
	{
		return view('college.faculty.profile.p_3');
	}

	public function profile4()
	{
		return view('college.faculty.profile.p_4');
	}

	public function profile5()
	{
		return view('college.faculty.profile.p_5');
	}

	public function profile6()
	{
		return view('college.faculty.profile.p_6');
	}

	public function affidavit1()
	{
		return view('college.faculty.Affidavit.a_1');
	}

	public function affidavit2()
	{
		return view('college.faculty.Affidavit.a_2');
	}

	public function affidavit3()
	{
		return view('college.faculty.Affidavit.a_3');
	}

	public function affidavit4()
	{
		return view('college.faculty.Affidavit.a_4');
	}

	public function affidavit5()
	{
		return view('college.faculty.Affidavit.a_5');
	}

	public function affidavit6()
	{
		return view('college.faculty.Affidavit.a_6');
	}

	public function Joining1()
	{
		return view('college.faculty.Joining.j_1');
	}

	public function Joining2()
	{
		return view('college.faculty.Joining.j_2');
	}

	public function Joining3()
	{
		return view('college.faculty.Joining.j_3');
	}

	public function Joining4()
	{
		return view('college.faculty.Joining.j_4');
	}

	public function Joining5()
	{
		return view('college.faculty.Joining.j_5');
	}

	public function Joining6()
	{
		return view('college.faculty.Joining.j_6');
	}

	// public function Appointment1()
	// {
	// 	return view('college.faculty.Appointment.ap_1');
	// }

	public function Appointment2()
	{
		return view('college.faculty.Appointment.ap_2');
	}

	public function Appointment3()
	{
		return view('college.faculty.Appointment.ap_3');
	}

	public function Appointment4()
	{
		return view('college.faculty.Appointment.ap_4');
	}

	public function Appointment5()
	{
		return view('college.faculty.Appointment.ap_5');
	}

	public function Appointment6()
	{
		return view('college.faculty.Appointment.ap_6');
	}



	public function infrastructure()
	{
		return view('college.infrastructure');
	}

	public function infrastructurePhoto()
	{
		return view('college.infrastructure_photo');
	}

	public function balanceSheet()
	{
		return view('college.Balance_Sheet');
	}

	public function CourseOffered()
	{
		return view('college.CourseOffered');
	}

	public function support()
	{
		return view('college.support');
	}

//gallery

	public function gallery()
	{
		return view('extra.gallery');
	}

	public function news()
	{
		return view('extra.news');
	}

	public function contacts()
	{
		return view('contacts.contacts');
	}
}