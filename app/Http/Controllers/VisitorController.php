<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataVisitor = Visitor::all();

        return view('visitors', [
            'dataVisitor' => $dataVisitor,
            'title' => 'Visitors List'
        ]);
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
        $dataVisitor = $request->all();
        // dd($dataVisitor);

        $visitor = new Visitor();
        $visitor->card_id = $dataVisitor['card_id'];
        $visitor->name = $dataVisitor['name'];
        $visitor->email = $dataVisitor['email'];
        $visitor->phone = $dataVisitor['phone'];
        $visitor->gender = $dataVisitor['gender'];
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('visitorsPhoto/', $request->file('photo')->getClientOriginalName());
            $visitor->photo = $request->file('photo')->getClientOriginalName();
        }
        $visitor->save();

        $device = $dataVisitor['device_id'] ?? null;
        $visitor->visitorToDevice()->attach($device);

        return redirect()->route(route: 'visitors.index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        $dataVisitor = $request->all();
        // dd($dataVisitor);

        // $visitor = Visitor::find($visitor->id);
        $visitor->name = $dataVisitor['name'];
        $visitor->email = $dataVisitor['email'];
        $visitor->phone = $dataVisitor['phone'];
        $visitor->gender = $dataVisitor['gender'];
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('visitorsPhoto/', $request->file('photo')->getClientOriginalName());
            $visitor->photo = $request->file('photo')->getClientOriginalName();
        }
        $visitor->save();

        $device = $dataVisitor['device_id'] ?? null;
        $visitor->visitorToDevice()->sync($device);

        return redirect()->route(route: 'visitors.index')->with('success', 'Data Berhasil Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();

        return redirect()->route(route: 'visitors.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
