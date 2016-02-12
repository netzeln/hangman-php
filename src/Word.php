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

    function checkLetter($guessLetter)
    {
        $wordSplit = str_split(strtoupper($this->secretWord));
        $wordWithNewLetter = array();

        foreach ($wordSplit as $letter)
        {
            if ($letter = $guessLetter)
            {
                array_push($wordWithNewLetter, $guessLetter);
            } else {
                array_push($wordWithNewLetter, "_");
            }
        } return $wordWithNewLetter;
    }
} ?>
