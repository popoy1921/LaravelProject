<?php

namespace App\HTTP\Services;

use App\Models\StoreModel;

/**
 * Class that would handle any logic for Store
 */
class StoreService
{
    /**
     * Assigment of values and Creation of Store Records
     * @param array     $aStoreDetails
     * 
     * @return array    array
     */
    public function createStore(array $aStoreDetails) : array
    {
        // could handle exception using try catch
        $mCreateProductResponse = StoreModel::create([
            'name'          => $aStoreDetails['name'],
            'description'   => $aStoreDetails['description'],
        ]);
        // status code will be useful accessing this code via API
        return [
            'message' => $aStoreDetails['name'] . ' has been suceccessfully registered!',
            'data'    => $mCreateProductResponse->toArray(),
            'code'    => 200
        ];
    }
}

?>