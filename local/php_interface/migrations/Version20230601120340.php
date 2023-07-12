<?php

namespace Sprint\Migration;


class Version20230601120340 extends Version
{
    protected $description = "Категории ИБ ценный игрок";

    protected $moduleVersion = "4.3.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'valuable_player',
            'people'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
)        );
    }

    public function down()
    {
        //your code ...
    }
}
