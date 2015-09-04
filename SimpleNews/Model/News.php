<?php
     
    namespace Tutorial\SimpleNews\Model;
     
    use Magento\Framework\Model\AbstractModel;
     
    class News extends AbstractModel
    {
        /**
         * Define resource model
         */
        protected function _construct()
        {
            $this->_init('Tutorial\SimpleNews\Model\Resource\News');
        }
}
