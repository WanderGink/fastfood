<?php namespace FastFood\Http\Requests;

use FastFood\Http\Requests\Request;

class UserFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'email' => 'required',
			'password' => 'required|confirmed|min: 6|max: 32',
			'name' => 'required|min: 6|max: 32',
			'phone' => 'required|numeric'
		];
	}

}
