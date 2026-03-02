<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantRelationRequestGui\Dependency\Facade;

use Generated\Shared\Transfer\MerchantRelationRequestCollectionRequestTransfer;
use Generated\Shared\Transfer\MerchantRelationRequestCollectionResponseTransfer;
use Generated\Shared\Transfer\MerchantRelationRequestCollectionTransfer;
use Generated\Shared\Transfer\MerchantRelationRequestCriteriaTransfer;

class MerchantRelationRequestGuiToMerchantRelationRequestFacadeBridge implements MerchantRelationRequestGuiToMerchantRelationRequestFacadeInterface
{
    /**
     * @var \Spryker\Zed\MerchantRelationRequest\Business\MerchantRelationRequestFacadeInterface
     */
    protected $merchantRelationRequestFacade;

    /**
     * @param \Spryker\Zed\MerchantRelationRequest\Business\MerchantRelationRequestFacadeInterface $merchantRelationRequestFacade
     */
    public function __construct($merchantRelationRequestFacade)
    {
        $this->merchantRelationRequestFacade = $merchantRelationRequestFacade;
    }

    public function getMerchantRelationRequestCollection(
        MerchantRelationRequestCriteriaTransfer $merchantRelationRequestCriteriaTransfer
    ): MerchantRelationRequestCollectionTransfer {
        return $this->merchantRelationRequestFacade
            ->getMerchantRelationRequestCollection($merchantRelationRequestCriteriaTransfer);
    }

    public function updateMerchantRelationRequestCollection(
        MerchantRelationRequestCollectionRequestTransfer $merchantRelationRequestCollectionRequestTransfer
    ): MerchantRelationRequestCollectionResponseTransfer {
        return $this->merchantRelationRequestFacade
            ->updateMerchantRelationRequestCollection($merchantRelationRequestCollectionRequestTransfer);
    }
}
