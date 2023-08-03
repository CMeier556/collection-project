<?php
require('../Word.php');
use PHPUnit\Framework\TestCase;

class WordTest extends TestCase {

    public function test_success_createWordCard() 
    {
        $name = 'beer';
        $definition = 'a lovely drink';
        $synonyms = 'ale, pint, lager';
        $sentence = 'I love beer';

        $testWord = new Word($name, $definition, $synonyms, $sentence);

        $expectedResult = 
        "<section class='wordContainer'>
            <div class='item'>
                <h2 class='dictionaryWord'>beer</h2>
                <p class='stat'><span>Definition</span>:  a lovely drink</p>
                <p class='stat'><span>Synonyms</span>:  ale, pint, lager</p>
                <p class='stat'><span>Example Sentence</span>:  I love beer</p>
            </div>
        </section>";

        $result = $testWord->createWordCard();
        $this->assertEquals ($expectedResult, $result);
    }
}