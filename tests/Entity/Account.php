<?php

namespace FacturationPro;
use PHPUnit\Framework\TestCase;

/**
 * @covers Account
 */

class AccountTest extends TestCase
{
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return Firm[]
     */
    public function getFirms()
    {
        return $this->firms;
    }
}
?>