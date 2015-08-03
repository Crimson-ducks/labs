<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr
 * Date: 30/07/2015
 * Time: 14:46
 */

namespace Clearbooks\Labs\Release;


use Clearbooks\Labs\Release\Gateway\ReleaseGateway;

class GetPublicRelease
{
    private $gateway;

    /**
     * GetPublicRelease constructor.
     * @param $gateway
     */
    public function __construct( ReleaseGateway $gateway )
    {
        $this->gateway = $gateway;
    }

    /**
     * @return array
     */
    public function execute()
    {

        $releases = $this->gateway->getAllReleases();
        $publicReleases = [ ];

        foreach ( $releases as $release ) {
            if ( $release->isIsVisible() ) {
                $publicReleases [] = $release;
            }
        }

        return $publicReleases;
    }
}