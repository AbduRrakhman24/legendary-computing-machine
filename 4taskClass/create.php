<?php

class Animal 
{
    private int $age;
    private int $height;
    private int $length;
    private string $voice;
    private BOOL $hasTail;
    
    
    public function __construct($age, $height, $length, $voice, $hasTail)
    {
        if ($age < 0)
            {
                $age = 0;
            }
        $this->age = $age;

        if ($height < 0)
            {
            $height = 0;
            }
        $this->height = $height;

        if ($length < 0)
            {
            $length = 0;
            }
        $this->length = $length;

        $this->voice = $voice;

        $this->hasTail = $hasTail;
        
    }

    public function getAge()
        {
            return $this->age;
        }
    public function getHeight()
        {
        return  $this->height;
        }
    public function getlength()
        {
        return $this->length;
        }
    public function getVoice()
        {
        return $this->voice;
        }
    public function getHasTail()
        {
        return $this->hasTail;
        }

}

$animal = new Animal(11, 22, 11, 'sdf', true);

echo $animal;
