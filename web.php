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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
        $contacts=DB::table('contact_list')->get();
//      $this->viewData['contact_list'] = $contacts;
//      dd($this);    
//      return view('welcome', $this->viewData);
        return view('welcome', compact('contacts'));
});

Route::post('/addContact', function(Request $request) {
        $cName=$request->input('NAME');
        $cCom=$request->input('Company');
        $cNum=$request->input('PreferredPhone');
        $cMail=$request->input('Email');
        $cAdd=$request->input('PostalAddress');
        $cMeet=$request->input('MeetingTime');
        $cID=$request->input('id');
//      DB::table('contact_list')->insert('insert into contact_list (NAME, Company, PreferredPhone, Email, PostalAddress, MeetingTime, id) values (?,?,?,?,?,?,?)', 
//              [$cName, $cCom, $cNum, $cMail, $cAdd, $cMeet, $cID]);
        DB::table('contact_list')->insert([
        ['NAME'=>$cName, 'Company'=>$cCom, 'PreferredPhone'=>$cNum, 'Email'=>$cMail, 'PostalAddress'=>$cAdd, 'MeetingTime'=>$cMeet, 'id'=>$cID]
        ]);
        return redirect('/');
});

Route::get('/removeContact', function(Request $request){
//      dd($request2);
        $cID=$request->input('id');
        DB::table('contact_list')->where('id', '=', $cID)->delete();
        return redirect('/');
});
