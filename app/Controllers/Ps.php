<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ps_model;

class Ps extends BaseController
{
    protected $psModel;

    public function __construct()
    {
        $this->psModel = new Ps_model();
    }

    public function index()
    {
        $data['ps'] = $this->psModel->findAll();
        return view('ps/index', $data);
    }

    public function create()
    {
        return view('ps/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $data = [
            'ps_id' => $this->request->getPost('ps_id'),
            'ps_nama' => $this->request->getPost('ps_nama'),
            'ps_waktu' => $this->request->getPost('ps_waktu'),
            'ps_kondisi' => $this->request->getPost('ps_kondisi'),
        ];

        if (!$validation->run($data, 'ps')) {
            return redirect()->to(base_url('ps/create'))->withInput()->with('errors', $validation->getErrors());
        }

        $this->psModel->insert($data);

        return redirect()->to(base_url('ps'))->with('success', 'Ps created successfully');
    }

    public function edit($id)
    {
        $data['ps'] = $this->psModel->find($id);

        return view('ps/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('ps_id');

        $data = [
            'ps_nama' => $this->request->getVar('ps_nama'),
            'ps_waktu' => $this->request->getVar('ps_waktu'),
            'ps_kondisi' => $this->request->getVar('ps_kondisi'),
        ];

        $this->psModel->update($id, $data);

        return redirect()->to(base_url('ps'))->with('success', 'Ps updated successfully');
    }

    public function delete($id)
    {
        
        $this->psModel->delete($id);

        return redirect()->to(base_url('ps'))->with('success', 'Ps deleted successfully');
    }
}  