<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStoreRequest;
use App\HTTP\Services\StoreService;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    /**
     * StoreService service property for the class
     *
     * @var StoreService
     */
    private StoreService $oStoreService;

    /**
     * contructor method for the class
     * 
     * @param StoreService $oStoreService
     */
    public function __construct(StoreService $oStoreService)
    {
        $this->oStoreService = $oStoreService;
    }

    /**
     * Handles the create store endpoint
     * @param CreateStoreRequest    $oRequest
     * 
     * @return RedirectResponse     Redirect after a success Create of Store record
     */
    public function createStore(CreateStoreRequest $oRequest) : RedirectResponse
    {
        $aValidatedData = $oRequest->validated();
        // may create additional validation using StoreService
        $aCreateResponse = $this->oStoreService->createStore($aValidatedData);
        // this is for form submission
        return back()->with('success', $aCreateResponse['message']);
    }
}
