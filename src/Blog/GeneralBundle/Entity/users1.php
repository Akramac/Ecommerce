<?php
namespace Blog\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * users1
 *
 * @ORM\Table("userss)
 * @ORM\Entity(repositoryClass="Blog\GeneralBundle\Repository\userssRepository")
 */
class Userss
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=125)
     */
    private $UserName;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=125)
     */
    private $FirstName;
    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=125)
     */
    private $LastName;
    /**
     * @var float
     *
     * @ORM\Column(name="email", type="float")
     */
    private $EmailName;
}
