<?php
/**
 * Created by PhpStorm.
 * User: safa
 * Date: 07/02/2019
 * Time: 4:13 PM
 */

namespace Grafikart\RecaptchaBundle\Constraints;


use Symfony\Component\Validator\Constraint;


class Recaptcha extends Constraint{
public $message = 'Invalid Captcha';


}