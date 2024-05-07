<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
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

    /**
     * Store form for create and update
     * @param int $iStoreId     product id of product to be presented
     * 
     * @return View             page for Store Form
     */
    public function showStoreFormPage(?int $iStoreId = null) : View
    {
        // default is for update
        $aPageDetails = array();
        $sTitle = 'Update Store';
        $sSubmitButtonPage = 'Update Store';
        $bIsUpdate = true;

        // create form
        if (is_null($iStoreId) === true) {
            $sTitle = 'Create Store';
            $sSubmitButtonPage = 'Add Store';
            $bIsUpdate = false;
        }

        $aPageDetails['sTitle'] = $sTitle;
        $aPageDetails['sSubmitButtonPage'] = $sSubmitButtonPage;
        $aPageDetails['bIsUpdate'] = $bIsUpdate;
        return view('StoreForm', $aPageDetails);
    }
}
