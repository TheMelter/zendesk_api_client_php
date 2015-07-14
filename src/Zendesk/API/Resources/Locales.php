<?php

namespace Zendesk\API\Resources;

use Zendesk\API\Traits\Resource\Find;
use Zendesk\API\Traits\Resource\FindAll;

/**
 * The Locales class exposes view management methods
 */
class Locales extends ResourceAbstract
{
    const OBJ_NAME = 'locale';
    const OBJ_NAME_PLURAL = 'locales';

    use Find;
    use FindAll;

    /**
     * {@inheritdoc}
     */
    protected function setUpRoutes()
    {
        $this->setRoutes([
            'findAllPublic' => "{$this->resourceName}/public.json",
            'findAllAgent'  => "{$this->resourceName}/agent.json",
            'findCurrent'   => "{$this->resourceName}/current.json",
            'findBest'      => "{$this->resourceName}/detect_best_locale.json",
        ]);
    }

    /**
     * This lists the translation locales that are available to all accounts
     *
     * @param array $params
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findAllPublic(array $params = [])
    {
        $this->findAll($params, __FUNCTION__);
    }

    /**
     * This lists the translation locales that have been localized for agents.
     *
     * @param array $params
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findAllAgent(array $params = [])
    {
        $this->findAll($params, __FUNCTION__);
    }

    /**
     * This works exactly like show, but instead of taking an id as argument,
     * it renders the locale of the user performing the request
     *
     * @param array $params
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findCurrent(array $params = [])
    {
        $this->findAll($params, __FUNCTION__);
    }

    /**
     * Detect best language for user
     *
     * @param array $params
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findBest(array $params = [])
    {
        $this->findAll($params, __FUNCTION__);
    }
}
