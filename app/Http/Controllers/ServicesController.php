<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //TODO add description field
    public function storeService(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:services|max:255',
        ]);
//        $service = new Service();
//        $service->name= $request->name ;
//        $service->user_id = auth()->id();
//        $service->save();

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => auth()->id(),
        ]);
        return redirect()->back();
    }

    public function manageServices(){
        $services=Service::all();

        $data = [
            'title' => 'Services',
            'services' => $services
        ];
        return view('admin.services')->with($data);
    }
    public function show($id){

    }

    public function edit($id){
        $service = Service::find($id);
        return view('pages.edit')->with('service', $service);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $service = Service::find($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->user_id = auth()->id();
        $service->save();

        return redirect('/services')->with('success', 'Updated');
    }

    public function destroy($id){
        $service = Service::find($id);
        $service->delete();
        return redirect('services/manage')->with('success', 'Service removed');
    }
}
