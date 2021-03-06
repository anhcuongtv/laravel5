<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateNewsRequest extends Request {

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
        //require|email
		return [
			'title' => 'required|min:3',
            'content' => 'required',
            'publish_at' => ['required'=>'date']
		];
	}

}
