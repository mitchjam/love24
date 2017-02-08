<?php

namespace MitchellJamieson\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmissionRequest extends FormRequest {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'studio' => 'required',
			'email' => 'required|email',
			'video_url' => 'required',
			'music' => 'required',
			// 'equipment' => 'required',
		];
	}
}