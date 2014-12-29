<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/


namespace CustomDelivery\Form;

use CustomDelivery\CustomDelivery;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;
use Thelia\Form\BaseForm;
use VirtualProductGereso\VirtualProductGereso;

/**
 * Class SliceForm
 * @package VirtualProductGereso\Form
 * @author Julien Chanséaume <jchanseaume@openstudio.fr>
 */
class SliceForm extends BaseForm
{
    protected function trans($id, array $parameters = [])
    {
        return $this->translator->trans($id, $parameters, CustomDelivery::getModuleCode());
    }

    protected function buildForm()
    {
        $form = $this->formBuilder;

        $config = CustomDelivery::getConfig();

        $form
            ->add(
                "id",
                "number",
                [
                    'constraints' => [
                        new NotBlank()
                    ],
                    'label' => $this->trans("Id")
                ]
            )
            ->add(
                "area",
                "area_id",
                [
                    'constraints' => [
                        new NotBlank(),
                        new GreaterThanOrEqual(['value' => 0])
                    ],
                    'label' => $this->trans("Area"),
                ]
            )
            ->add(
                "priceMax",
                "float",
                [
                    'constraints' => [
                        new NotBlank(),
                        new GreaterThanOrEqual(['value' => 0])
                    ],
                    'label' => $this->trans("Area"),
                ]
            )
            ->add(
                "area",
                "area_id",
                [
                    'constraints' => [
                        new NotBlank(),
                        new GreaterThanOrEqual(['value' => 0])
                    ],
                    'label' => $this->trans("Area"),
                ]
            )
            ->add(
                "area",
                "area_id",
                [
                    'constraints' => [
                        new NotBlank(),
                        new GreaterThanOrEqual(['value' => 0])
                    ],
                    'label' => $this->trans("Area"),
                ]
            )

        ;
    }

    /**
     * @return string the name of you form. This name must be unique
     */
    public function getName()
    {
        return "customdelivery-configuration-form";
    }
}
