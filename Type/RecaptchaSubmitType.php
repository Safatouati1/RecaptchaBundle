<?php
/**
 * Created by PhpStorm.
 * User: safa
 * Date: 07/02/2019
 * Time: 9:17 AM
 */

namespace Grafikart\RecaptchaBundle\Type;

use Grafikart\RecaptchaBundle\Constraints\Recaptcha;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecaptchaSubmitType extends AbstractType
{


    /**
     * @var string
     */
private $key;

    /**
     * RecaptchaSubmitType constructor.
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }


    // parametre de configuration
    public function configureOptions(OptionsResolver $resolver)
    {
      //redifintion du clé
        //ce champs là n'est pas relier àune information ds notre objet qui presente les données
        $resolver->setDefaults(['mapped'=>false,
        'constraints' => new Recaptcha()
        ]);

    }
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['label']=false;
         $view->vars['key']=$this->key;
          $view->vars['button']=$options['label'];
    }

// donner un préfie a notre bloc
public function getBlockPrefix()
{
  return 'recaptcha_submit';
}
//préciser le champs quyi ets parent a celui la
public function getParent()
{
   return TextType::class;
}
}