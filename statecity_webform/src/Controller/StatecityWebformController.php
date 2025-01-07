<?php

namespace Drupal\statecity_webform\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Returns city data based on state ID.
 */
class StatecityWebformController extends ControllerBase
{

    /**
     * Fetches cities based on state ID.
     *
     * @param int $state_id
     *   The state ID.
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *   The JSON response with city data.
     */
    public function getCities($state_code)
    {
        $states = statecity_webform_getStatesData();

        $stateId = '';
        foreach ($states as $state) {
            if (strtolower($state['state_code']) === strtolower($state_code)) {
                $stateId =  $state['state_id'];
                break;
            }
        }

        $districtsArray = statecity_webform_getDistrictData();

        $districts = array_filter($districtsArray, function ($district) use ($stateId) {
            return $district['state_id'] === $stateId;
        });

        $district_title =  array_map(function ($district) {
            return $district['district_title'];
        }, $districts);


        return new JsonResponse($district_title);
    }


}
