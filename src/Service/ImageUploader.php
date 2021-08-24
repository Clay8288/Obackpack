<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

class ImageUploader
{

    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function upload(Form $form, string $file)
    {
                // manage Downloading picturefile
                // we get the "physical" file
                /** @var UploadedFile $picture */
                $picture = $form->get($file)->getData();

                // this condition to change original file's name
                if ($picture){
                    //we get the name's file
                    $originalFilename = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);

                    //we 'clean' the file name with service SluggerInterface (delete specials caracters,..)
                    $safeFilename = $this->slugger->slug($originalFilename);

                    //we create a unique name 
                    $fileName = $safeFilename . '-' . uniqid() . '.' . $picture->guessExtension();

                    //we transfer the picture to public file with 
                    try{
                        $picture->move(
                            // file where downloading 
                            'img/',
                            $fileName
                        );
                    } catch (FileException $e) {
                        // Error part if something happend with file upload
                        $e;
                    }
                    return $fileName;

                }
                return null;
    }
}
