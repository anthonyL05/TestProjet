<?php
/**
 * User: antho
 * Date: 24/05/2017
 */
namespace Test;

use App\Token;

/**
 * Class TestToken
 * @covers \App\Token
 */
class TestToken extends \PHPUnit\Framework\TestCase
{
    /** @var Token $token */
    private $token;

    /**
     * TestToken constructor.
     * @param null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = ''){
        parent::__construct($name, $data, $dataName);
        $this->token = new Token();
    }

    public function testGenerateToken(){
        $token = $this->token->generateToken();
        $this->assertGreaterThan("5",strlen($token));
        $this->assertRegExp('/^[a-zA-Z0-9]+$/i',$token);
    }
}