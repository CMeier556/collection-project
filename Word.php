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
        "<section class='word-container'>
            <div class='item'>
                <h2 class='dictionaryWord'>$this->name</h2>
                <p class='stat'><b>Definition</b>:  $this->definition</p>
                <p class='stat'><b>Synonyms</b>:  $this->synonyms</p>
                <p class='stat'><b>Example Sentence</b>:  $this->sentence</p>
            </div>
        </section>";
    }
}   
