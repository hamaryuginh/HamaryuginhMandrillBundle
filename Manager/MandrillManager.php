<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 13:22
 */

namespace Hamaryuginh\MandrillBundle\Manager;

use Hamaryuginh\MandrillBundle\Services\MandrillServiceInterface;

class MandrillManager
{

    /** @var array $mandrillSubServices */
    private $mandrillSubServices;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mandrillSubServices = array();
    }

    /**
     * @param MandrillServiceInterface $mandrillSubService
     */
    public function registerMandrillService(MandrillServiceInterface $mandrillSubService)
    {
        if (!array_key_exists($mandrillSubService->getName(), $this->mandrillSubServices))
            $this->mandrillSubServices[$mandrillSubService->getName()] = $mandrillSubService;
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->mandrillSubServices;
    }

    /**
     * @param $name
     * @return bool
     */
    public function has($name)
    {
        return array_key_exists($name, $this->mandrillSubServices);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        return $this->mandrillSubServices[$name];
    }
} 