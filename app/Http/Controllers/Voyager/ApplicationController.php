<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Application;
use App\Mail\Application\Accepted;
use App\Mail\Application\Rejected;

class ApplicationController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function edit(Request $request, $id)
    {
        $application = Application::find($id);
        if ($application->status === 'Pending') return parent::edit($request, $id);
        else return back()->with([
            'message'    => 'Applications can not be edited if their status is other than "Pending"',
            'alert-type' => 'error',
        ]);
    }
    public function update(Request $request, $id)
    {
        $application = Application::find($id);
        
        $request->merge([
            'current_status' => $application->status
        ]);
        $request->validate([
            'current_status' => [
                function ($attribute, $value, $fail) {
                    if ($value !== 'Pending') {
                        $fail('Applications can not be edited if their status is other than "Pending"');
                    }
                }
            ]
        ]);

        $response = parent::update($request, $id);

        if ($request->session()->get('alert-type') === 'success') {
            switch ($request->status) {
                case 'Accepted':
                    Mail::to($application->email)->queue(new Accepted($application));
                    break;
                
                case 'Rejected':
                    Mail::to($application->email)->queue(new Rejected($application));
                    break;
            }
        }

        return $response;
    }
}