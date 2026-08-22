<?php

namespace TGHP\CasaByGrace\Form;

interface FormAfterSubmissionProcessorInterface
{

    /**
     * @return void
     */
    public function afterProcess($postId);

}