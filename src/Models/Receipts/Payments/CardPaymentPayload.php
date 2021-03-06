<?php

namespace igorbunov\Checkbox\Models\Receipts\Payments;

class CardPaymentPayload extends PaymentParent
{
    /** @var int $code */
    public $code;
    /** @var string $card_mask */
    public $card_mask;

    public function __construct(
        string $value,
        string $label = 'Безготівковий',
        int $code = 0,
        string $card_mask = ''
    ) {
        parent::__construct(parent::TYPE_CARD, $value, $label);

        $this->code = $code;
        $this->card_mask = $card_mask;
    }
}
