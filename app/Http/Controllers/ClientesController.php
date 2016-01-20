<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;
use CodeDelivery\Repositories\ClienteRepository;

use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Http\Requests\AdminClienteRequest;

class ClientesController extends Controller
{
	private $repository;

	public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
    	$clientes = $this->repository->paginate(10);
    	return view('admin.clientes.index', compact('clientes'));
    }

    public function create()
    {
    	return view('admin.clientes.create');
    }

    public function store(AdminclienteRequest $request)
    {
    	$this->repository->create($request->all());

    	return redirect()->route('admin.clientes.index');
    }

    public function edit($id)
    {
    	$cliente = $this->repository->find($id);

    	return view('admin.clientes.edit', compact('cliente'));
    }

    public function update( AdminclienteRequest $request, $id)
    {
    	$cliente = $this->repository->update($request->all(), $id);

    	return redirect()->route('admin.clientes.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.clientes.index');
    }
}
