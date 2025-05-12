<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EmpModel;
use CodeIgniter\Database\BaseUtils;

class SiteController extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
   
    public function employee()
    {   
        $employee = new EmpModel();
        $data['employee']=$employee->findAll();
        
        return view('Employee/Employee',$data);
    }
    public function create()
    {
        return view('Employee/Registration');
    }
    public function savedata()
    {
        $employee = new EmpModel();
        $data = [
            'first_name'=>$this->request->getPost('first_name'),
            'last_name'=>$this->request->getPost('last_name'),
            'cno'=>$this->request->getPost('cno'),
            'email'=>$this->request->getPost('email'),
            'designation'=>$this->request->getPost('designation')
        ];

        $employee->save($data);
        return redirect()->to(base_url('employee'))->with('status','Employe added');

    }
    public function edit($id)
    {
        $employee = new EmpModel();
        $data['employee']=$employee->find($id); 
        return view('Employee/Update',$data);

    }
    public function update($id)
    {
        $employee = new EmpModel();
       
        $data = [
            'first_name'=>$this->request->getPost('first_name'),
            'last_name'=>$this->request->getPost('last_name'),
            'cno'=>$this->request->getPost('cno'),
            'email'=>$this->request->getPost('email'),
            'designation'=>$this->request->getPost('designation')
        ];

        $employee->update($id,$data);
        return redirect()->to(base_url('employee'))->with('status','Employe updated');

    }
    public function delete($id)
    {
        $employee = new EmpModel();
        $employee->delete($id);
        return redirect()->to(base_url('employee'));
    }
}
?>