<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Server;

class AdminsController extends Controller {

    public function home() {
        return view('admin.index');
    }

    protected $admin;
    protected $request;

    public function __construct(Admin $admin, Request $request) {
        $this->admin = $admin;
        $this->request = $request;
    }

    public function getIndex() {
        $admins = $this->admin->paginate(10);

        $status = "";
        if ($this->request->session()->has('status')) {
            $status = $this->request->session()->get('status');
        }
        return view('admin.administrators.index', compact('admins', 'status'));
    }

    public function getCreate() {
        $servers = Server::all();

        return view('admin.administrators.create', compact('servers'));
    }

    public function postCreate(Request $request) {
        $data = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:admins',
            'id_server' => 'required',
            'password' => 'required',
        ]);

        $this->admin->create($data)->save();

        $status = "Administrator " . $data['name'] . " registered successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/administrators');
    }

    public function getEdit($id) {
        $admin = $this->admin->find($id);
        $servers = Server::all();
        return view('admin.administrators.edit', compact('admin', 'servers'));
    }

    public function postEdit(Request $request, $id) {
        $data = $request->except('_token');
        
        $this->validate($request, [
            'name' => 'required',
            'email' => "required|unique:admins,email,$id",
            'id_server' => 'required',
            'password' => 'required',
        ]);
        
        $this->admin->where('id', $id)->update($data);

        $status = "Successfully " . $data['name'] . "  updated administrator!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/administrators');
    }

    public function getDelete($id) {
        $admin = $this->admin->find($id);
        $admin->delete();

        $status = "Administrator " . $admin['name'] . " deleted successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/administrators');
    }

}
