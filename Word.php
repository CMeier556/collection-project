<?php

class Word {
    private string $name;
    private string $definition;
    private string $synonyms;
    private string $sentence;

    public function __construct (string $name, string $definition, string $synonyms, string $sentence)
    {
        $this->name = $name;
        $this->definition = $definition;
        $this->synonyms = $synonyms;
        $this->sentence = $sentence;
    }

    public function createWordCard() 
    {
        return 
        "<section class='wordContainer'>
            <div class='item'>
                <h2 class='dictionaryWord'>$this->name</h2>
                <p class='stat'><span>Definition</span>:  $this->definition</p>
                <p class='stat'><span>Synonyms</span>:  $this->synonyms</p>
                <p class='stat'><span>Example Sentence</span>:  $this->sentence</p>
            </div>
        </section>";
    }
}   
