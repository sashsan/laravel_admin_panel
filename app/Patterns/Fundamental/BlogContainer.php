<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 05.07.2019
     * Time: 0:59
     */

    namespace App\Patterns\Fundamental;

    use App\Patterns\Fundamental\PropertyContainer\PropertyContainer;

    class BlogContainer extends PropertyContainer
    {

        private $imgWidth;
        private $imgHeight;
        private $galleryWidth;
        private $GalleryHeight;



        public function getImgWidth(){return $this->imgWidth;}

        public function setImgWidth($imgWidth){$this->imgWidth = $imgWidth;}

        public function getImgHeight(){return $this->imgHeight;}

        public function setImgHeight($imgHeight){$this->imgHeight = $imgHeight;}

        public function getGalleryWidth(){return $this->galleryWidth;}

        public function setGalleryWidth($galleryWidth): void {$this->galleryWidth = $galleryWidth;}

        public function getGalleryHeight(){return $this->GalleryHeight;}

        public function setGalleryHeight($GalleryHeight){$this->GalleryHeight = $GalleryHeight;}





    }
