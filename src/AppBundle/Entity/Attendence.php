<?php

namespace AppBundle\Entity;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;

/**
 * Attendence
 *
 * @ORM\Table(name="attendence")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AttendenceRepository")
 * @Vich\Uploadable
 */
class Attendence
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $timein;


    /**
     * @ORM\Column(type="string")
     */
    private  $timeout;

    /**
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private  $atten_id;

    /**
     * @ORM\Column(type="string")
     */
    private  $status_abs_pre;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

//    /**
//     * @ORM\Column(type="datetime")
//     * @var \DateTime
//     */
//    private $updatedAt;




    /**
     * @return mixed
     */
    public function getTimein()
    {
        return $this->timein;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getAttenId()
    {
        return $this->atten_id;
    }

    /**
     * @return mixed
     */
    public function getStatusAbsPre()
    {
        return $this->status_abs_pre;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $timein
     */
    public function setTimein($timein)
    {
        $this->timein = $timein;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
    }


    /**
     * @param mixed $timeout
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $atten_id
     */
    public function setAttenId($atten_id)
    {
        $this->atten_id = $atten_id;
    }

    /**
     * @param mixed $status_abs_pre
     */
    public function setStatusAbsPre($status_abs_pre)
    {
        $this->status_abs_pre = $status_abs_pre;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

//    /**
//     * @return \DateTime
//     */
//    public function getUpdatedAt()
//    {
//        return $this->updatedAt;
//    }




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

