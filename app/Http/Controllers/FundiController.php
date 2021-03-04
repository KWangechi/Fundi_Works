<?php

namespace App\Http\Controllers;
use App\Fundi;
use Illuminate\Http\Request;
use App\Events\NewFundiHasRegisteredEvent;
use Intervention\Image\Facades\Image;

class FundiController extends Controller
{

    public function index(){

        $fundi = Fundi::all();
        
                return view('admin.adminfundi')->with('fundis', $fundi);
            }
        

public function list(){

    return view('admin.fundi');
}

public function store(Request $request){
    
    $fundi = Fundi::create($this->validateRequest());
    $this->storeImage($fundi);

    event(new NewFundiHasRegisteredEvent($fundi));


        return redirect('adminfundi')->with('status', 'You have successfully added a new fundi');

   
    /*
    $root = request()->validate([
        'name' => 'required',
        'image' => 'required|image',
        'age' =>'required',
        'occupation' => 'required',
        
        ]);
      
        $fundi = new Fundi();
        $fundi->name = request('name');
        $fundi->image = request('image');
        $fundi->age = request('age');
        $fundi->occupation = request('occupation');
        
       
        $fundi->save();
        return back();

*/

}

/*
public function update(Fundi $fundi){

$fundi->update($this->validateRequest());

$this->storeImage($fundi);

return redirect('adminfundi/', $fundi->id);

}
*/


private function validateRequest(){

    return tap(request()->validate([
        'idNumber' => 'required|max:7',
        'image' => 'file|image',
        'firstname' => 'required',
        'lastname' => 'required',
        'dob' =>'required',
        'address' => 'required',
        'phoneNumber' => 'required',
        'occupation' =>'required',
        'ratings' =>'required',
        ]),
        
        function() {


    }); 
}

private function storeImage($fundi){

    $fundi->update([
'image' => request()->image->store('uploads', 'public')
    ]);

$image = Image::make(public_path('storage/'. $fundi->image))->fit(100,100);
$image->save();

}

public function fundiUpdate(Request $request, $id){

    $fundi = Fundi::find($id);

    
    $fundi->idNumber = $request->input('idNumber');
   // $fundi->image = $request->input('image');
    $fundi->firstname = $request->input('firstname');
    $fundi->lastname = $request->input('lastname');
    $fundi->dob = $request->input('dob');
    $fundi->address = $request->input('address');
    $fundi->phoneNumber = $request->input('phoneNumber');
    $fundi->occupation = $request->input('occupation');
    $fundi->ratings = $request->input('ratings');

    $fundi->update();
    
    return redirect('adminfundi')->with('status', 'You have successfully editted the information!!');
    
    
    }
    
public function fundiEdit(Request $request, $id){

        $fundi = Fundi::findOrFail($id);
        return view('admin.fundiedit')->with('fundi', $fundi);


    }



public function delete($id){

    $fundi = Fundi::findOrFail($id);

    $fundi->delete();

    return redirect('adminfundi')->with('status', 'You have successfully deleted a fundi');
}
}




