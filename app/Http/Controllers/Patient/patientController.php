<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patients;
use File;
use VerumConsilium\Browsershot\Facades\PDF;


class patientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = Patients::All();

        return view('index', ['data' => $data]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function search()
    {
        return view('find');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function qr($id)
    {

        $data = Patients::where('client_id', $id)->first();

        return view('qr-code', ['data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:patients,name',
            'age' => 'required|numeric',
            'register' => 'required|date',
            'collect' => 'required|date',
            'auth' => 'required|date',
            'print' => 'required|date',
            'gender' => 'required',
            'visit_date' => 'required',
            'pay_date' => 'required',
            'result_date' => 'required',
            'branch' => 'required',
            'pay_username' => 'required',
            'price' => 'required',
            'visit' => 'required',
            'result' => 'required'
        ], [
            'name.required' => 'الاسم مطلوب',
            'age.required' => 'السن مطلوب',
            'register.required' => 'تاريخ التسجيل مطلوب',
            'collect.required' => 'تاريخ التحصيل مطلوب',
            'auth.required' => 'تاريخ التصديق مطلوب',
            'print.required' => 'تاريخ الطباعة مطلوب',
            'gender.required' => 'الجنس مطلوب',
            'visit_date.required' => 'تاريخ الزيارة مطلوب',
            'pay_date.required' => 'تاريخ الدفع مطلوب',
            'result_date.required' => 'تاريخ النتيجة مطلوب',
            'branch.required' => 'الفرع مطلوب',
            'pay_username.required' => 'اسم الدافع مطلوب',
            'price.required' => 'السعر مطلوب',
            'visit.required' => 'رقم الزيارة مطلوب',
            'result.required' => 'التحليل مطلوب'

        ]);

        $request->merge(['name' => strtoupper($request->name), 'patient_id' => rand(1334539220, 3334539220), 'client_id' => rand(13345, 333467)]);

        $data = Patients::create($request->except('_token'));

        session()->flash('message', "تم تسجيل التحليل بنجاح");

        return redirect('qr-code/' . $request->client_id)->withInput(['data' => $data])->withErrors($validated);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function pdf($id)
    {

        $data = Patients::where('client_id', $id)->first();

        // File::put(
        //     'test.html',
        //     view('report')
        //         ->with(['data' => $data])
        //         ->render()
        // );


        return PDF::loadView('report', ['data' => $data])
            // ->setNodeBinary('/usr/local/bin/node')
             // ->setNpmBinary('/usr/local/bin/npm')
            // ->landscape()
            // ->setIncludePath(base_path('node_modules/puppeteer/lib/cjs/puppeteer/node') . ':/usr/local/bin')
            ->paperSize(430, 260)
            ->download($data->name . '.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $data = Patients::where('client_id', $id)->first();

        return view('report_view', ['data' => $data]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
