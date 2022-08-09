<?php

namespace App\Http\Controllers;
use App\Models\MS365PassReset;
use http\Client;
use Illuminate\Http\Request;
use it\thecsea\osticket_php_client\OsticketPhpClient;
use it\thecsea\osticket_php_client\OsticketPhpClientException;
use Kris\LaravelFormBuilder\FormBuilder;



class MS365PassResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


 public function FormView( FormBuilder $formBuilder) {

     $form = $formBuilder->create('App\Forms\Microsoft365AccessRequest', [
         'method' => 'POST',
         'url' => route('MS365PassResetFormStore')
     ]);

     return view('MS365PasswordReset.showform',compact('form'));

 }


    public function store(Request $request)
    {



      $pesel = $request->pesel;
      $phoneNumber = $request->phoneNumber;
      $m365login = $request->m365login;




        return  view('MS365PasswordReset.success');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MS365PassReset  $mS365PassReset
     * @return \Illuminate\Http\Response
     */
    public function show(MS365PassReset $mS365PassReset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MS365PassReset  $mS365PassReset
     * @return \Illuminate\Http\Response
     */
    public function edit(MS365PassReset $mS365PassReset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MS365PassReset  $mS365PassReset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MS365PassReset $mS365PassReset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MS365PassReset  $mS365PassReset
     * @return \Illuminate\Http\Response
     */
    public function destroy(MS365PassReset $mS365PassReset)
    {
        //
    }
}
