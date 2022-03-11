<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $SirChristopherSeno = [
        4200001 =>
        ['lastname' => 'seno', 
        'firstname' => 'chris',
        'birthday' => '1998/02/23',
        'isnewstudent' => true],
        4200011 => [
            'lastname' => 'Ortiz',
            'firstname' => 'Bryan',
            'birthday' => '2001/09/21',
            'isnewstudent' => False
        ]
    ];

    public function index()
    {
        return view('Home.index', ['students'=>$this->student]);
    }
    public function show($id)
    {
        abort_if(!(isset($this->student[$id])), 404);
        return view('Home.show', ['student'=>$this->student[$id]]);
    }
    public function create()
    {
        return view('Home.create');
    }
    public function store(Request $request)
    {
        $lastname = Request()->input('lastname');
        $firstname = Request()->input('firstname');
        $birthday = Request()->input('birthday');
        $students = [
                'lastname' => $lastname,
                'firstname' => $firstname,
                'birthday' => $birthday,
                'isnewstudent' => True
                
            ];
        return view('Home.store', ['student'=>$student]);
    }
    public function edit($id)
    {
        abort_if(!(isset($this->student[$id])), 404);
        return view('Home.edit', ['student'=>$this->student[$id]]);   
    }
    public function update(Request $request, $id)
    {
        $lastname = Request()->input('lastname');
        $firstname = Request()->input('firstname');
        $birthday = Request()->input('birthday');
        $student = [
            $id => [
                'lastname' => $lastname,
                'firstname' => $firstname,
                'birthday' => $birthday,
                'isnewstudent' => $isnewstudent
            ]    
        ];
        return view('Home.store', ['student'=>$this->student[$id]]);
    }
    public function destroy($id)
    {
        $this->student[$id] -> delete();
        return view('Home.index', ['students'=>$this->student]);
    }
}