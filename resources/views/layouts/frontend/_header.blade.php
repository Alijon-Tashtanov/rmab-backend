<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:48
 */

?>

    <!-- NAVIGATION -->
<div class="navigation">
    <div class="my-container">
        <div class="navigation-in">
            <div class="left-nav">
                <svg
                    class="hov my-burger"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                >
                    <path
                        d="M4.75 17C4.5375 17 4.35938 16.9298 4.21563 16.7894C4.07188 16.649 4 16.4751 4 16.2676C4 16.0601 4.07188 15.8862 4.21563 15.7461C4.35938 15.6059 4.5375 15.5359 4.75 15.5359H20.25C20.4625 15.5359 20.6406 15.606 20.7844 15.7464C20.9281 15.8868 21 16.0607 21 16.2683C21 16.4758 20.9281 16.6496 20.7844 16.7897C20.6406 16.9299 20.4625 17 20.25 17H4.75ZM4.75 12.2321C4.5375 12.2321 4.35938 12.1619 4.21563 12.0215C4.07188 11.8811 4 11.7072 4 11.4997C4 11.2922 4.07188 11.1183 4.21563 10.9782C4.35938 10.838 4.5375 10.7679 4.75 10.7679H20.25C20.4625 10.7679 20.6406 10.8381 20.7844 10.9785C20.9281 11.1189 21 11.2928 21 11.5003C21 11.7078 20.9281 11.8817 20.7844 12.0218C20.6406 12.162 20.4625 12.2321 20.25 12.2321H4.75ZM4.75 7.46414C4.5375 7.46414 4.35938 7.39395 4.21563 7.25357C4.07188 7.11321 4 6.93926 4 6.73174C4 6.52424 4.07188 6.35041 4.21563 6.21025C4.35938 6.07008 4.5375 6 4.75 6H20.25C20.4625 6 20.6406 6.07019 20.7844 6.21057C20.9281 6.35095 21 6.5249 21 6.7324C21 6.93992 20.9281 7.11376 20.7844 7.25391C20.6406 7.39407 20.4625 7.46414 20.25 7.46414H4.75Z"
                        fill="#000"
                    />
                </svg>
                <a href="#">
                    <div>
                        <img
                            class="w-[180px]"
                            src="template/images/logo-white.svg"
                            alt="logo"
                        />
                    </div>
                </a>
                <div class="my-global">
                    <a
                        :href="i.url"
                        class="my-global-in hov"
                        target="_blank"
                        v-for="i in socials?.data"
                        v-show="i.status == 1"
                        :key="i"
                    >
                        <i v-html="i.icon"></i>
                    </a>
                </div>
                <div class="location txt-16">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                    >
                        <path
                            d="M11.9992 19.5135C13.9556 17.7622 15.4527 16.0824 16.4906 14.474C17.5284 12.8657 18.0473 11.457 18.0473 10.2481C18.0473 8.42498 17.4681 6.92627 16.3098 5.7519C15.1515 4.57753 13.7146 3.99035 11.9992 3.99035C10.2838 3.99035 8.84698 4.57753 7.68865 5.7519C6.53031 6.92627 5.95115 8.42498 5.95115 10.2481C5.95115 11.457 6.47006 12.8657 7.50787 14.474C8.54571 16.0824 10.0428 17.7622 11.9992 19.5135ZM11.9992 20.9403C11.8044 20.9403 11.6095 20.9067 11.4146 20.8394C11.2198 20.7721 11.0435 20.6679 10.8858 20.5269C9.98836 19.7 9.14862 18.8484 8.36657 17.9721C7.58452 17.0958 6.90471 16.2199 6.32715 15.3442C5.74958 14.4686 5.29253 13.6006 4.956 12.7404C4.61945 11.8801 4.45117 11.0493 4.45117 10.2481C4.45117 7.94038 5.19765 6.07213 6.6906 4.64328C8.18353 3.21443 9.95307 2.5 11.9992 2.5C14.0454 2.5 15.8149 3.21443 17.3078 4.64328C18.8008 6.07213 19.5473 7.94038 19.5473 10.2481C19.5473 11.0493 19.379 11.8785 19.0424 12.7356C18.7059 13.5926 18.2505 14.4606 17.6761 15.3394C17.1017 16.2183 16.4235 17.0942 15.6415 17.9673C14.8594 18.8404 14.0197 19.6903 13.1223 20.5173C12.9669 20.6583 12.7903 20.7641 12.5925 20.8346C12.3948 20.9051 12.197 20.9403 11.9992 20.9403ZM12.0009 11.8654C12.4985 11.8654 12.9239 11.6882 13.2771 11.3339C13.6303 10.9795 13.8069 10.5536 13.8069 10.056C13.8069 9.55839 13.6297 9.133 13.2754 8.7798C12.9211 8.4266 12.4951 8.25 11.9975 8.25C11.4999 8.25 11.0745 8.42717 10.7213 8.7815C10.3681 9.13583 10.1915 9.56179 10.1915 10.0594C10.1915 10.557 10.3687 10.9824 10.723 11.3356C11.0774 11.6888 11.5033 11.8654 12.0009 11.8654Z"
                            fill="white"
                        />
                    </svg>
                    <p>O’zbekiston, Toshkent</p>
                </div>
            </div>
            <div class="left-nav">
                <div class="nav-contact">
                    <div class="nav-contact-in">
                        <p class="txt-12">Ishonch raqami</p>
                        <a class="txt-18" href="tel:998901615131">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="25"
                                height="24"
                                viewBox="0 0 25 24"
                                fill="none"
                            >
                                <path
                                    d="M19.9403 20.5C18.0557 20.5 16.1625 20.0618 14.2606 19.1855C12.3586 18.3092 10.6112 17.073 9.01828 15.4769C7.42532 13.8807 6.19071 12.1333 5.31442 10.2346C4.43814 8.33588 4 6.44423 4 4.55963C4 4.25688 4.1 4.00458 4.3 3.80275C4.5 3.60092 4.75 3.5 5.05 3.5H8.3115C8.56407 3.5 8.78682 3.58238 8.97977 3.74713C9.17272 3.91188 9.29548 4.1154 9.34803 4.3577L9.9211 7.29998C9.96085 7.57306 9.95252 7.80768 9.8961 8.00383C9.8397 8.19998 9.73842 8.36472 9.59225 8.49805L7.28265 10.7461C7.65445 11.4269 8.07913 12.0708 8.5567 12.6779C9.03427 13.2849 9.55125 13.8647 10.1077 14.4173C10.6564 14.966 11.2397 15.4756 11.8577 15.9462C12.4756 16.4167 13.1429 16.8545 13.8596 17.2596L16.1038 14.9962C16.2602 14.8333 16.4497 14.7192 16.6721 14.6539C16.8945 14.5885 17.1256 14.5724 17.3654 14.6058L20.1423 15.1712C20.3948 15.2378 20.6009 15.3667 20.7605 15.5577C20.9201 15.7487 21 15.9654 21 16.2077V19.45C21 19.75 20.899 20 20.6972 20.2C20.4954 20.4 20.2431 20.5 19.9403 20.5ZM6.57305 9.32693L8.35768 7.61923C8.38973 7.59358 8.41056 7.55832 8.42018 7.51345C8.42979 7.46857 8.42819 7.4269 8.41538 7.38845L7.98075 5.15383C7.96793 5.10254 7.9455 5.06408 7.91345 5.03845C7.8814 5.0128 7.83973 4.99998 7.78845 4.99998H5.64997C5.61152 4.99998 5.57948 5.0128 5.55383 5.03845C5.52818 5.06408 5.51535 5.09613 5.51535 5.1346C5.56663 5.81793 5.67849 6.51217 5.85092 7.2173C6.02337 7.92243 6.26408 8.62564 6.57305 9.32693ZM15.273 17.9692C15.9359 18.2782 16.6272 18.5144 17.3471 18.6779C18.067 18.8413 18.7397 18.9384 19.3654 18.9692C19.4038 18.9692 19.4359 18.9564 19.4615 18.9308C19.4872 18.9051 19.5 18.873 19.5 18.8346V16.7308C19.5 16.6795 19.4872 16.6378 19.4615 16.6057C19.4359 16.5737 19.3974 16.5512 19.3461 16.5384L17.2461 16.1115C17.2077 16.0987 17.174 16.0971 17.1452 16.1067C17.1163 16.1163 17.0859 16.1372 17.0538 16.1692L15.273 17.9692Z"
                                    fill="#A1BAD5"
                                />
                            </svg>
                            5068
                        </a>
                    </div>
                    <div class="nav-contact-in">
                        <p class="txt-12">Savol va takliflar bo’yicha</p>
                        <a class="txt-18" href="tel:71 328 95 78">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="25"
                                height="24"
                                viewBox="0 0 25 24"
                                fill="none"
                            >
                                <path
                                    d="M19.9403 20.5C18.0557 20.5 16.1625 20.0618 14.2606 19.1855C12.3586 18.3092 10.6112 17.073 9.01828 15.4769C7.42532 13.8807 6.19071 12.1333 5.31442 10.2346C4.43814 8.33588 4 6.44423 4 4.55963C4 4.25688 4.1 4.00458 4.3 3.80275C4.5 3.60092 4.75 3.5 5.05 3.5H8.3115C8.56407 3.5 8.78682 3.58238 8.97977 3.74713C9.17272 3.91188 9.29548 4.1154 9.34803 4.3577L9.9211 7.29998C9.96085 7.57306 9.95252 7.80768 9.8961 8.00383C9.8397 8.19998 9.73842 8.36472 9.59225 8.49805L7.28265 10.7461C7.65445 11.4269 8.07913 12.0708 8.5567 12.6779C9.03427 13.2849 9.55125 13.8647 10.1077 14.4173C10.6564 14.966 11.2397 15.4756 11.8577 15.9462C12.4756 16.4167 13.1429 16.8545 13.8596 17.2596L16.1038 14.9962C16.2602 14.8333 16.4497 14.7192 16.6721 14.6539C16.8945 14.5885 17.1256 14.5724 17.3654 14.6058L20.1423 15.1712C20.3948 15.2378 20.6009 15.3667 20.7605 15.5577C20.9201 15.7487 21 15.9654 21 16.2077V19.45C21 19.75 20.899 20 20.6972 20.2C20.4954 20.4 20.2431 20.5 19.9403 20.5ZM6.57305 9.32693L8.35768 7.61923C8.38973 7.59358 8.41056 7.55832 8.42018 7.51345C8.42979 7.46857 8.42819 7.4269 8.41538 7.38845L7.98075 5.15383C7.96793 5.10254 7.9455 5.06408 7.91345 5.03845C7.8814 5.0128 7.83973 4.99998 7.78845 4.99998H5.64997C5.61152 4.99998 5.57948 5.0128 5.55383 5.03845C5.52818 5.06408 5.51535 5.09613 5.51535 5.1346C5.56663 5.81793 5.67849 6.51217 5.85092 7.2173C6.02337 7.92243 6.26408 8.62564 6.57305 9.32693ZM15.273 17.9692C15.9359 18.2782 16.6272 18.5144 17.3471 18.6779C18.067 18.8413 18.7397 18.9384 19.3654 18.9692C19.4038 18.9692 19.4359 18.9564 19.4615 18.9308C19.4872 18.9051 19.5 18.873 19.5 18.8346V16.7308C19.5 16.6795 19.4872 16.6378 19.4615 16.6057C19.4359 16.5737 19.3974 16.5512 19.3461 16.5384L17.2461 16.1115C17.2077 16.0987 17.174 16.0971 17.1452 16.1067C17.1163 16.1163 17.0859 16.1372 17.0538 16.1692L15.273 17.9692Z"
                                    fill="#A1BAD5"
                                />
                            </svg>
                            71 328 95 78
                        </a>
                    </div>
                </div>
                <div class="language">
                    <ul>
                        <li>
                            {{App::getLocale()}}
                            <a href="{{route('locale','uz')}}"
                               class="lang {{(session('locale') == 'uz')? 'active':''}}">O'zbek</a>
                            <a href="{{route('locale','ru')}}"
                               class="lang {{(session('locale') == 'ru')? 'active':''}}">Русский</a>
                            <a href="{{route('locale','en')}}"
                               class="lang {{(session('locale') == 'en')? 'active':''}}">English</a>
                        </li>
                    </ul>
                    <div class="language-in hov">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                        >
                            <path
                                d="M12 21.5C10.6974 21.5 9.46825 21.2503 8.3125 20.7509C7.15673 20.2516 6.14872 19.5718 5.28845 18.7115C4.4282 17.8512 3.7484 16.8432 3.24905 15.6875C2.74968 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74968 9.45543 3.24905 8.3048C3.7484 7.15417 4.4282 6.14872 5.28845 5.28845C6.14872 4.4282 7.15673 3.7484 8.3125 3.24905C9.46825 2.74968 10.6974 2.5 12 2.5C13.3128 2.5 14.5445 2.74968 15.6952 3.24905C16.8458 3.7484 17.8512 4.4282 18.7115 5.28845C19.5718 6.14872 20.2516 7.15417 20.7509 8.3048C21.2503 9.45543 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.7509 15.6875C20.2516 16.8432 19.5718 17.8512 18.7115 18.7115C17.8512 19.5718 16.8458 20.2516 15.6952 20.7509C14.5445 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5102 19.3019 12.9397 18.6192 13.2885 17.9307C13.6372 17.2423 13.9211 16.4897 14.1404 15.673H9.85958C10.0916 16.5153 10.3788 17.2807 10.7211 17.9692C11.0634 18.6577 11.4897 19.3275 12 19.9788ZM10.0635 19.7038C9.68014 19.1538 9.33591 18.5285 9.03078 17.8279C8.72564 17.1272 8.48846 16.4089 8.31922 15.673H4.92688C5.45509 16.7115 6.16343 17.584 7.0519 18.2904C7.94038 18.9968 8.94424 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0596 18.9968 16.9481 18.2904C17.8365 17.584 18.5449 16.7115 19.0731 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.9211 17.8375C14.616 18.5381 14.2878 19.1602 13.9365 19.7038ZM4.29805 14.1731H8.01538C7.95256 13.8013 7.90705 13.4369 7.87885 13.0798C7.85065 12.7227 7.83655 12.3628 7.83655 12C7.83655 11.6372 7.85065 11.2772 7.87885 10.9202C7.90705 10.5631 7.95256 10.1987 8.01538 9.82688H4.29805C4.2019 10.1666 4.12818 10.5198 4.0769 10.8865C4.02562 11.2532 3.99998 11.6243 3.99998 12C3.99998 12.3756 4.02562 12.7468 4.0769 13.1135C4.12818 13.4801 4.2019 13.8333 4.29805 14.1731ZM9.51535 14.1731H14.4846C14.5474 13.8013 14.5929 13.4401 14.6212 13.0894C14.6494 12.7388 14.6635 12.3756 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9106C14.5929 10.5599 14.5474 10.1987 14.4846 9.82688H9.51535C9.45253 10.1987 9.40702 10.5599 9.3788 10.9106C9.3506 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3756 9.3506 12.7388 9.3788 13.0894C9.40702 13.4401 9.45253 13.8013 9.51535 14.1731ZM15.9846 14.1731H19.7019C19.7981 13.8333 19.8718 13.4801 19.9231 13.1135C19.9743 12.7468 20 12.3756 20 12C20 11.6243 19.9743 11.2532 19.9231 10.8865C19.8718 10.5198 19.7981 10.1666 19.7019 9.82688H15.9846C16.0474 10.1987 16.0929 10.5631 16.1211 10.9202C16.1493 11.2772 16.1634 11.6372 16.1634 12C16.1634 12.3628 16.1493 12.7227 16.1211 13.0798C16.0929 13.4369 16.0474 13.8013 15.9846 14.1731ZM15.6807 8.32693H19.0731C18.5384 7.27563 17.8349 6.40318 16.9625 5.70958C16.09 5.01599 15.0814 4.54163 13.9365 4.2865C14.3198 4.86855 14.6608 5.50509 14.9596 6.19613C15.2583 6.88716 15.4987 7.59743 15.6807 8.32693ZM9.85958 8.32693H14.1404C13.9083 7.49103 13.6163 6.72083 13.2644 6.01633C12.9125 5.31184 12.491 4.64678 12 4.02113C11.5089 4.64678 11.0875 5.31184 10.7356 6.01633C10.3836 6.72083 10.0916 7.49103 9.85958 8.32693ZM4.92688 8.32693H8.31922C8.50128 7.59743 8.74167 6.88716 9.0404 6.19613C9.33912 5.50509 9.68014 4.86855 10.0635 4.2865C8.91219 4.54163 7.90193 5.0176 7.03268 5.7144C6.16344 6.4112 5.46151 7.28204 4.92688 8.32693Z"
                                fill="white"
                            />
                        </svg>
                        <p class="txt-16">UZ</p>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                        >
                            <path
                                d="M11.9997 14.6615C11.8791 14.6615 11.767 14.6423 11.6631 14.6038C11.5593 14.5653 11.4606 14.4993 11.367 14.4057L6.87276 9.91151C6.73429 9.77306 6.66346 9.59902 6.66026 9.38941C6.65704 9.17979 6.72788 9.00255 6.87276 8.85768C7.01763 8.71281 7.19326 8.64038 7.39966 8.64038C7.60606 8.64038 7.78169 8.71281 7.92656 8.85768L11.9997 12.9308L16.0728 8.85768C16.2112 8.71923 16.3852 8.6484 16.5949 8.64518C16.8045 8.64198 16.9817 8.71281 17.1266 8.85768C17.2714 9.00255 17.3439 9.17819 17.3439 9.38461C17.3439 9.59101 17.2714 9.76664 17.1266 9.91151L12.6323 14.4057C12.5388 14.4993 12.44 14.5653 12.3362 14.6038C12.2324 14.6423 12.1202 14.6615 11.9997 14.6615Z"
                                fill="white"
                            />
                        </svg>
                    </div>
                    <div class="language-menu">
                        <a class="txt-16 hov flex flex-col">UZ</a>
                    </div>
                </div>
                <div class="nav-ac hov">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                    >
                        <rect width="32" height="32" rx="16" fill="white"/>
                        <path
                            d="M16.0001 15.6472C14.9213 15.6472 13.9998 15.255 13.2355 14.4705C12.4712 13.6861 12.089 12.7403 12.089 11.6332C12.089 10.526 12.4712 9.5802 13.2355 8.79578C13.9998 8.01135 14.9213 7.61914 16.0001 7.61914C17.0789 7.61914 18.0004 8.01135 18.7647 8.79578C19.529 9.5802 19.9112 10.526 19.9112 11.6332C19.9112 12.7403 19.529 13.6861 18.7647 14.4705C18.0004 15.255 17.0789 15.6472 16.0001 15.6472ZM7.61914 22.6387V21.8315C7.61914 21.2698 7.76778 20.7497 8.06506 20.2711C8.36233 19.7925 8.75952 19.4246 9.25664 19.1672C10.3612 18.6114 11.4755 18.1946 12.5994 17.9167C13.7233 17.6388 14.8569 17.4999 16.0001 17.4999C17.1433 17.4999 18.2769 17.6388 19.4008 17.9167C20.5247 18.1946 21.639 18.6114 22.7435 19.1672C23.2407 19.4246 23.6379 19.7925 23.9351 20.2711C24.2324 20.7497 24.381 21.2698 24.381 21.8315V22.6387C24.381 23.1224 24.2159 23.5338 23.8857 23.8727C23.5555 24.2116 23.1547 24.381 22.6834 24.381H9.31679C8.84546 24.381 8.44469 24.2116 8.11448 23.8727C7.78425 23.5338 7.61914 23.1224 7.61914 22.6387Z"
                            fill="#0162A7"
                        />
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                    >
                        <path
                            d="M4.25 17.6347C4.0375 17.6347 3.85938 17.5628 3.71563 17.419C3.57188 17.2751 3.5 17.0969 3.5 16.8844C3.5 16.6718 3.57188 16.4937 3.71563 16.3501C3.85938 16.2065 4.0375 16.1347 4.25 16.1347H19.75C19.9625 16.1347 20.1406 16.2066 20.2843 16.3504C20.4281 16.4942 20.5 16.6724 20.5 16.885C20.5 17.0976 20.4281 17.2757 20.2843 17.4193C20.1406 17.5629 19.9625 17.6347 19.75 17.6347H4.25ZM4.25 12.7501C4.0375 12.7501 3.85938 12.6782 3.71563 12.5344C3.57188 12.3905 3.5 12.2123 3.5 11.9998C3.5 11.7872 3.57188 11.6091 3.71563 11.4655C3.85938 11.3219 4.0375 11.2501 4.25 11.2501H19.75C19.9625 11.2501 20.1406 11.322 20.2843 11.4658C20.4281 11.6096 20.5 11.7878 20.5 12.0004C20.5 12.213 20.4281 12.3911 20.2843 12.5347C20.1406 12.6783 19.9625 12.7501 19.75 12.7501H4.25ZM4.25 7.86545C4.0375 7.86545 3.85938 7.79355 3.71563 7.64973C3.57188 7.50593 3.5 7.32773 3.5 7.11513C3.5 6.90254 3.57188 6.72446 3.71563 6.58088C3.85938 6.43728 4.0375 6.36548 4.25 6.36548H19.75C19.9625 6.36548 20.1406 6.43739 20.2843 6.5812C20.4281 6.72502 20.5 6.90322 20.5 7.1158C20.5 7.3284 20.4281 7.50649 20.2843 7.65008C20.1406 7.79366 19.9625 7.86545 19.75 7.86545H4.25Z"
                            fill="white"
                        />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- NAVIGATION END -->

<!-- MY NAVIGATION -->
<div class="my-navbar">
    <div class="my-container">
        <div class="my-navbar-in">
            <div class="my-menus">
                <ul>
                    <li>
                        <a href="{{route('index')}}">
                            <p class="txt-16">Asosiy</p>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <p class="txt-16">
                                aboutUs
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M16.5303 9.96967C16.8232 10.2626 16.8232 10.7374 16.5303 11.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L7.4697 11.0303C7.1768 10.7374 7.1768 10.2626 7.4697 9.96967C7.7626 9.67678 8.2374 9.67678 8.5303 9.96967L12 13.4393L15.4697 9.96967C15.7626 9.67678 16.2374 9.67678 16.5303 9.96967Z"
                                        fill="#38434E"
                                    />
                                </svg>
                            </p>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="{{route('news')}}">
                                    <p class="txt-16">
                                        <span>Yangiliklar</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Vakansiyalar</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>bizning afzalliklarimiz</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Rekvizitlar</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Autopark</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Hamkorlar</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Filiallar</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <p class="txt-16">
                                Bizning xizmarlar
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M16.5303 9.96967C16.8232 10.2626 16.8232 10.7374 16.5303 11.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L7.4697 11.0303C7.1768 10.7374 7.1768 10.2626 7.4697 9.96967C7.7626 9.67678 8.2374 9.67678 8.5303 9.96967L12 13.4393L15.4697 9.96967C15.7626 9.67678 16.2374 9.67678 16.5303 9.96967Z"
                                        fill="#38434E"
                                    />
                                </svg>
                            </p>
                        </a>
                        <ul class="drop-menu">
                            {{--                            <!-- {{store.services}} -->--}}
                            <li>
                                <a>
                                    <p class="txt-16">
                                        <span>Maxsus aloqa xizmatlari</span>
                                    </p>
                                </a>
                                <a v-else href="#">
                                    <p class="txt-16">
                                        <span>Telekamunikatsiya xizmatlari</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <p class="txt-16">
                                <span>Malumotlar</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M16.5303 9.96967C16.8232 10.2626 16.8232 10.7374 16.5303 11.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L7.4697 11.0303C7.1768 10.7374 7.1768 10.2626 7.4697 9.96967C7.7626 9.67678 8.2374 9.67678 8.5303 9.96967L12 13.4393L15.4697 9.96967C15.7626 9.67678 16.2374 9.67678 16.5303 9.96967Z"
                                        fill="#38434E"
                                    />
                                </svg>
                            </p>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a>
                                    <p class="txt-16">
                                        <span>Yuklarni qayta ishlash tartibi</span>
                                    </p>
                                </a>
                                <a v-else href="#">
                                    <p class="txt-16">
                                        <span>Yetkazib berish turlari</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div>
                            <p class="txt-16">
                                interaktiv xizmatlari
                                <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                        >
                          <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M16.5303 9.96967C16.8232 10.2626 16.8232 10.7374 16.5303 11.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L7.4697 11.0303C7.1768 10.7374 7.1768 10.2626 7.4697 9.96967C7.7626 9.67678 8.2374 9.67678 8.5303 9.96967L12 13.4393L15.4697 9.96967C15.7626 9.67678 16.2374 9.67678 16.5303 9.96967Z"
                              fill="#A0AEC0"
                          />
                        </svg>
                      </span>
                            </p>
                        </div>
                        </template>
                        <ul class="drop-menu">
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Shartnoma tuzish</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Sifat nazorati</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Jo`natma haqida malumot olish</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Xizmatdan foydalanish uchun ariza berish</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <p class="txt-16">
                                Korrupsiya
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M16.5303 9.96967C16.8232 10.2626 16.8232 10.7374 16.5303 11.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L7.4697 11.0303C7.1768 10.7374 7.1768 10.2626 7.4697 9.96967C7.7626 9.67678 8.2374 9.67678 8.5303 9.96967L12 13.4393L15.4697 9.96967C15.7626 9.67678 16.2374 9.67678 16.5303 9.96967Z"
                                        fill="#38434E"
                                    />
                                </svg>
                            </p>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span>Ichki hujjatlar</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span> Maqolalar</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="txt-16">
                                        <span> Ariza va murojatlar</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <p class="txt-16">Kontaktlar</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav-left">
                <button class="my-btn txt-16">
                    <a href="/interactive"> Shartnoma tuzish </a>
                </button>
                <svg
                    class="search hov"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"

                >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M10.9502 3C6.55945 3 3 6.55945 3 10.9502C3 15.3411 6.55945 18.9005 10.9502 18.9005C12.9003 18.9005 14.6864 18.1984 16.0695 17.0332L20.0362 21L21 20.0362L17.0332 16.0695C18.1984 14.6864 18.9005 12.9003 18.9005 10.9502C18.9005 6.55945 15.3411 3 10.9502 3ZM4.3629 10.9502C4.3629 7.31216 7.31216 4.3629 10.9502 4.3629C14.5884 4.3629 17.5376 7.31216 17.5376 10.9502C17.5376 14.5884 14.5884 17.5376 10.9502 17.5376C7.31216 17.5376 4.3629 14.5884 4.3629 10.9502Z"
                        fill="#38434E"
                    />
                </svg>
                <div class="search-header" ref="search">
                    <div class="search-input">
                        <input
                            placeholder="Search..."
                            type="text"
                            v-model="store.searchValue"
                            @input="offSearchError($event)"
                        />
                        <button type="submit" @click="generateUrl()">Search</button>
                    </div>
                    <span class="errorMessage txt-14" v-if="searchEploye"
                    >Maydon to`ldirilishi zarur</span
                    >
                    <!-- <button @click="store.searchSection = false">
                      <svg width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                          d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"
                          fill="#033960FF" />
                      </svg>
                    </button> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MY NAVIGATION END -->
