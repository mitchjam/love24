<?php

namespace MitchellJamieson\Blog\Http;

use Illuminate\Routing\Controller;
use MitchellJamieson\Blog\Models\Studio;
use MitchellJamieson\Blog\Models\Submission;
use MitchellJamieson\Blog\Http\Requests\SubmissionRequest;

class SubmissionController extends Controller {

	public function store(SubmissionRequest $request)
	{
		Submission::fromRequest($request);

		return redirect('/');
	}
}