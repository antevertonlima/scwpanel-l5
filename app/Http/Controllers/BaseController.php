<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Facuz\Theme\Contracts\Theme;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
	 * Theme instance.
	 *
	 * @var \Teepluss\Theme\Theme
	 */
	protected $theme;

	/**
	 * Construct
	 *
	 * @return void
	 */
	public function __construct(Theme $theme)
	{
		//pega thema ativo
		$tema     = DB::table('themes')->select('name')->where('active', 'A')->first();
		$temaName = (is_null($tema)) ? env('APP_THEME') : $tema->name;

		// Using theme as a global.
		$this->theme = $theme->uses($temaName);
	}
}
