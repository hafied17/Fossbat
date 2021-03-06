<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\RESTful\ResourceController;

class Contact extends ResourceController
{

	protected $format = 'json';
	protected $modelName = 'App\Models\ContactModel';
	/*	protected $model;

	public function __construct()
	{
		$this->model = new ContactModel();
	}*/

	public function index()
	{
		$data = [
			'massage' => 'success',
			'data' => $this->model->findAll()
		];

		return $this->response->setStatusCode(200)->setJSON($data);
	}

	public function show($id = null)
	{
		$data = [
			'massage' => 'success',
			'data' => $this->model->find($id)
		];

		return $this->respond($data, 200);
	}

	public function create()
	{
		$input = $this->validate(
			$this->model->getValidationRules(),
			$this->model->getValidationMessages()
		);

		if ($input) {
			$this->model->save(
				$this->request->getPost()
			);

			$response = [
				'massage' => 'success'
			];

			return $this->respond($response, 201);
		} else {
			$response = [
				'massage' => 'fail',
				'errors' => $this->validator->getErrors()
			];
			return $this->respond($response, 422);
		}
	}
}
