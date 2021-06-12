<?php

namespace App\Http\Controllers;
use App\Http\Requests\studentEditRequest;
use App\Http\Requests\StudentsControllerRequest;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $hasTerm = request()->has('term');
        /**
         * When checks for the first argument ($hasTerm) if true (if has term in get request) it will run the function static function($query)...
         *
         * query() : used when you can not access what you want directly like : Student::when does not work so you use Student::query()->when
         *
         * "%$term%"? :(
         *
         *
         */
        $students = Student::query()->when($hasTerm,static function($query){
            $term = \request('term');
            $query->where('name','like',"%$term%");
        })->get();
        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id')->all();

        return view('create' , compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request  $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
            'photo_id' => 'required|max:255',
            'role_id' => 'required|max:255',
            'is_active' => 'required|max:255',
            'gender' => 'required|max:255',
            'date_of_birth'=> 'required|max:255',
            'last_mark'=> 'required|max:255',
        ]);
        if(trim($request->password) == ''){

            $input = $request->except('password');

        } else{
            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();


            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;


        }

        $student = Student::create($input);

        return redirect('/students')->with('completed', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $students = Student::all();

        return view('show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $roles = Role::pluck('name','id')->all();
        return view('edit', compact('student','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request  $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
            'photo_id' => 'required|max:255',
            'role_id' => 'required|max:255',
            'is_active' => 'required|max:255',
            'gender' => 'required|max:255',
            'date_of_birth'=> 'required|max:255',
            'last_mark'=> 'required|max:255',
        ]);
        $student = Student::findOrFail($id);

        if(trim($request->password) == ''){
            if(isset($updateData['password'])) unset($updateData['password']);
            $input = $updateData;

        } else{

            $input = $updateData;

            $input['password'] = bcrypt($request->password);

        }
        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();


            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;


        }


        Student::whereId($id)->update($input);
        return redirect('/students')->with('completed', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);



        $student->delete();


        return redirect('/students')->with('completed', 'Student has been deleted');
    }
}
