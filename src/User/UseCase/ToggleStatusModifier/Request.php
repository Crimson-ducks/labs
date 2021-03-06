<?php
namespace Clearbooks\Labs\User\UseCase\ToggleStatusModifier;

interface Request
{
    /**
     * @return string
     */
    public function getToggleIdentifier();

    /**
     * @param string $toggleIdentifier
     */
    public function setToggleIdentifier( $toggleIdentifier );

    /**
     * @return string
     */
    public function getNewToggleStatus();

    /**
     * @param string $toggleStatus
     */
    public function setNewToggleStatus( $toggleStatus );

    /**
     * @return int
     */
    public function getUserIdentifier();

    /**
     * @param int $userIdentifier
     */
    public function setUserIdentifier( $userIdentifier );

    /**
     * @return int|null
     */
    public function getGroupIdentifier();

    /**
     * @param int $groupIdentifier
     */
    public function setGroupIdentifier( $groupIdentifier );
}
//EOF Request.php
