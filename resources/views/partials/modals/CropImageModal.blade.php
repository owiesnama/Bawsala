<modal name="cropImageModal"
       height="auto"
       :click-To-Close="false">
    <image-cropper @cropped="setImage" :cropping="loading" :crop-ratio="cropRatio" :src="imageToCrop"/>
</modal>