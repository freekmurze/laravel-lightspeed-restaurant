<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class Labour extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/labour";
    }

    /**
     *    Get clock times
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/labour/getClockTimesUsingGET_1
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/labour/getClockTimesUsingGET
     */
    public function getClockTimes(string $userId = null, array $data = null)
    {
        $endpoint = $this->endpoint("/clocktime/{$userId}");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get employees
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/labour/getEmployeesUsingGET_1
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/labour/getEmployeesUsingGET
     */
    public function getEmployees(string $userId = null, array $data = null)
    {
        $endpoint = $this->endpoint("/employee/{$userId}");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }
}
