<?php

namespace App\Http\Controllers;

use App\Jobs\ContactMeJob;
use App\Models\ContactMe;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{

    public function renderAdminIndex()
    {
        $totalContactMailsCount = ContactMe::totalContactCount();
        $recentContactMails = ContactMe::getRecentContacts();

        $data = [
            'totalContactMailsCount' => $totalContactMailsCount
        ];
        return view('admin.index')->with(['data' => $data, 'recentContactMails' => $recentContactMails]);        
    }
    
    /**
     * Render Admin Contact mails
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     * 
     */
    public function renderContactMails()
    {
        return view('admin.contact-mails');
    }

    /**
     * Save & Send 
     * Contact Us mail.
     *
     */
    public function contactSubmit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $contactUs = new ContactMe();
        $validation = Validator::make($request->all(), $contactUs->rules());
        if ($validation->fails()) {
            return response()->json(['code' => 400, 'msg' => $validation->errors()->first()]);
        }
        $contactUs->edit();
        dispatch(new ContactMeJob($name, $email, $subject, $message))->afterResponse();

        return response()->json(['code' => 200, 'msg' => 'Thanks for contacting me, I will be in touch soon']);
    }

    /**
     * Ajax call that returns list of Contact mails in datatable
     * @return mixed
     * @throws \Exception
     * 
     */
    public function displayContactMails()
    {
        return Datatables::of(ContactMe::query()->orderBy('id', 'DESC'))->editColumn('created_at', function ($contact_date) {
            return $contact_date->created_at->format('d/m/Y');
        })->make(true);
    }

    /**
      * Render Edit wen=b content page
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     * 
     */
    public function renderEditWebsitePage()
    {
        return view('admin.edit-website');
    }
}

?>