<?php
namespace McShop\Core\Form;

use Symfony\Component\Console\Question\Question;
use Symfony\Component\Form\Form;

class PasswordTransformer extends TextTransformer
{
    /**
     * @param Form $form
     *
     * @return Question
     */
    public function transform(Form $form)
    {
        $question = parent::transform($form);
        $question->setHidden(true);

        return $question;
    }
}
