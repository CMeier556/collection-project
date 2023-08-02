<?php
require('../Word.php');
use PHPUnit\Framework\TestCase;

class WordTest extends TestCase {

    public function testWordCardCreator() 
    {
        $name = 'beer';
        $definition = 'a lovely drink';
        $synonyms = 'ale, pint, lager';
        $sentence = 'I love beer';

        $testWord = new Word ($name, $definition, $synonyms, $sentence);

        $expectedResult = 
        "<section class='word-container'>
            <div class='item'>
                <h2 class='dictionaryWord'>beer</h2>
                <p class='stat'><b>Definition</b>:  a lovely drink</p>
                <p class='stat'><b>Synonyms</b>:  ale, pint, lager</p>
                <p class='stat'><b>Example Sentence</b>:  I love beer</p>
            </div>
        </section>";

        $result = $testWord->createWordCard();

        $this->assertEquals ($expectedResult, $result);
    }
}