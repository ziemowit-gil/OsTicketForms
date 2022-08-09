<?php

namespace App\Http\Controllers;

use App\Models\MS365PassReset;
use Illuminate\Http\Request;
use it\thecsea\osticket_php_client\OsticketPhpClient;
use it\thecsea\osticket_php_client\OsticketPhpClientException;


class MS365PassResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


 public function FormView() {

     return view('MS365PasswordReset.showform');

 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $url = 'https://www.srv45346.seohost.com.pl/feer/helpdesk';
        $apiKey = '';


        $support = new OsticketPhpClient($url, $apiKey);
        try{
            $response = $client->newTicket()
                ->withName('test')
                ->withEmail('test@test.com')
                ->withPhone('+48535231923')
                ->withSubject('subject')
                ->withMessage('message')
                ->withTopicId('1')
                ->getData();
            print $response;
        }catch(OsticketPhpClientException $e){
            print $client->getMessage();
        }


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
