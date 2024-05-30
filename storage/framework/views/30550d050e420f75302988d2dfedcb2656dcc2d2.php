<div class="banner-page" >
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = $activeBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="swiper-slide" data - hash="slide1">
            <div class="my-container flex item-center ">
                <div class="text-blog flex-col flex justify-center">
                    <p class="txt-42">
                        <span><?php echo e($banner->getTranslation('title', app()->getLocale())); ?></span>
                    </p>
                    <div class="blog-icon">
                        <div class="text">
                            <p class="txt-16">
                                Tez
                            </p>
                        </div>
                    </div>

                    <div class="bottom">
                        <div class="nav-contact-in">
                            <p class="txt-12">
                                <?php echo e($banner->getTranslation('button_label', app()->getLocale())); ?>

                            </p>
                            <a class="txt-18" href="tel:998901615131">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                     viewBox="0 0 25 24"
                                     fill="none">
                                    <path
                                        d="M19.9403 20.5C18.0557 20.5 16.1625 20.0618 14.2606 19.1855C12.3586 18.3092 10.6112 17.073 9.01828 15.4769C7.42532 13.8807 6.19071 12.1333 5.31442 10.2346C4.43814 8.33588 4 6.44423 4 4.55963C4 4.25688 4.1 4.00458 4.3 3.80275C4.5 3.60092 4.75 3.5 5.05 3.5H8.3115C8.56407 3.5 8.78682 3.58238 8.97977 3.74713C9.17272 3.91188 9.29548 4.1154 9.34803 4.3577L9.9211 7.29998C9.96085 7.57306 9.95252 7.80768 9.8961 8.00383C9.8397 8.19998 9.73842 8.36472 9.59225 8.49805L7.28265 10.7461C7.65445 11.4269 8.07913 12.0708 8.5567 12.6779C9.03427 13.2849 9.55125 13.8647 10.1077 14.4173C10.6564 14.966 11.2397 15.4756 11.8577 15.9462C12.4756 16.4167 13.1429 16.8545 13.8596 17.2596L16.1038 14.9962C16.2602 14.8333 16.4497 14.7192 16.6721 14.6539C16.8945 14.5885 17.1256 14.5724 17.3654 14.6058L20.1423 15.1712C20.3948 15.2378 20.6009 15.3667 20.7605 15.5577C20.9201 15.7487 21 15.9654 21 16.2077V19.45C21 19.75 20.899 20 20.6972 20.2C20.4954 20.4 20.2431 20.5 19.9403 20.5ZM6.57305 9.32693L8.35768 7.61923C8.38973 7.59358 8.41056 7.55832 8.42018 7.51345C8.42979 7.46857 8.42819 7.4269 8.41538 7.38845L7.98075 5.15383C7.96793 5.10254 7.9455 5.06408 7.91345 5.03845C7.8814 5.0128 7.83973 4.99998 7.78845 4.99998H5.64997C5.61152 4.99998 5.57948 5.0128 5.55383 5.03845C5.52818 5.06408 5.51535 5.09613 5.51535 5.1346C5.56663 5.81793 5.67849 6.51217 5.85092 7.2173C6.02337 7.92243 6.26408 8.62564 6.57305 9.32693ZM15.273 17.9692C15.9359 18.2782 16.6272 18.5144 17.3471 18.6779C18.067 18.8413 18.7397 18.9384 19.3654 18.9692C19.4038 18.9692 19.4359 18.9564 19.4615 18.9308C19.4872 18.9051 19.5 18.873 19.5 18.8346V16.7308C19.5 16.6795 19.4872 16.6378 19.4615 16.6057C19.4359 16.5737 19.3974 16.5512 19.3461 16.5384L17.2461 16.1115C17.2077 16.0987 17.174 16.0971 17.1452 16.1067C17.1163 16.1163 17.0859 16.1372 17.0538 16.1692L15.273 17.9692Z"
                                        fill="#A1BAD5"/>
                                </svg>
                             <?php echo e($banner->question_suggestion); ?>

                            </a>
                        </div>
                        <div>
                            <a href="<?php echo e($banner->button_url); ?>">
                                <button class="my-btn2">
                                    <?php echo e($banner->getTranslation('button_label', app()->getLocale())); ?>

                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="images-banner">
                    <img data - aos="fade-left" data - aos - duration="1000" src="template/images/car2.png" alt="car">
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
</div >
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/frontend/main/_banners.blade.php ENDPATH**/ ?>