<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * This method is used for printing a string in practicing for routes 
     * @param string|null $sString1
     * @param string|null $sString2
     * 
     * @return string
     */
    public function showSamplePage(string $sString1 = null, string $sString2 = null) : string
    {
        $sParametersString = '';
        $sParametersString .= is_null($sString1) === true ? '' : $sString1;
        $sParametersString .= is_null($sString2) === true ? '' : '- ' . $sString2;
        return 'This is a sample page. ' . $sParametersString;
    }
}
