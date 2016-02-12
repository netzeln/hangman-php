<?php
class Word
{
    private $secretWord;

    function  __construct($newWord){
        $this->secretWord = $newWord;
    }

    function getSecretWord()
    {
        return $this->secretWord;
    }

    function setSecretWord($newWord)
    {
        $this->secretWord = $newWord;
    }

    function hideWord()
    {
        $wordSplit = str_split(strtoupper($this->secretWord));

        $wordAsDash = array();

        foreach ($wordSplit as $letter)
        {
            array_push($wordAsDash, "_");
        }

        return $wordAsDash;
    }
} ?>
