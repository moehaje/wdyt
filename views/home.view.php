<?php $title = 'Home — WDY' ?>

<?php ob_start() ?>

<div class="aside">
    <h1 class="heading">Last Engagements</h1>
    <div class="content">
        <a href="" class="a-block to-ideas">
            <div class="left">
                <div class="show">
                    <div class="frame">
                        <p class="body">10</p>
                    </div>
                </div>
                <p class="title">
                    You ideas
                </p>
            </div>
            <div class="right">
                <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.43589 19.3671L18.4192 5.38379" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.1692 12.2951V4.63353H11.5076" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
        <div class="form-container">
            <h4 class="body">Wdy think about today?</h4>
            <form action="" method="POST" class="add-form" invalidate>
                <div class="heading">
                    <p class="title">Add an idea</p>
                    <div class="buttons">
                        <div class="button icon-s light-border">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1111 10.7778C16.602 10.7778 17 11.1757 17 11.6667V15.2222C17 15.6937 16.8127 16.1459 16.4793 16.4793C16.1459 16.8127 15.6937 17 15.2222 17H2.77778C2.30628 17 1.8541 16.8127 1.5207 16.4793C1.1873 16.1459 1 15.6937 1 15.2222V2.77778C1 2.30628 1.1873 1.8541 1.5207 1.5207C1.8541 1.1873 2.30628 1 2.77778 1H6.33333C6.82425 1 7.22222 1.39797 7.22222 1.88889C7.22222 2.37981 6.82425 2.77778 6.33333 2.77778H4.11111C3.37473 2.77778 2.77778 3.37473 2.77778 4.11111V13.8889C2.77778 14.6253 3.37473 15.2222 4.11111 15.2222H13.8889C14.6253 15.2222 15.2222 14.6253 15.2222 13.8889V11.6667C15.2222 11.1757 15.6202 10.7778 16.1111 10.7778Z" fill="#222222"/>
                                <path d="M17 5.02222C17 4.76449 16.791 4.55556 16.5333 4.55556H13.9111C13.6534 4.55556 13.4444 4.34662 13.4444 4.08889V1.46667C13.4444 1.20893 13.2355 1 12.9778 1H12.1333C11.8756 1 11.6666 1.20893 11.6666 1.46667V4.08889C11.6666 4.34662 11.4577 4.55556 11.2 4.55556H8.57775C8.32002 4.55556 8.11108 4.76449 8.11108 5.02222V5.86667C8.11108 6.1244 8.32002 6.33333 8.57775 6.33333H11.2C11.4577 6.33333 11.6666 6.54227 11.6666 6.8V9.42222C11.6666 9.67996 11.8756 9.88889 12.1333 9.88889H12.9778C13.2355 9.88889 13.4444 9.67996 13.4444 9.42222V6.8C13.4444 6.54227 13.6534 6.33333 13.9111 6.33333H16.5333C16.791 6.33333 17 6.1244 17 5.86667V5.02222Z" fill="#222222"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="inputs">
                    <div class="type-inputs">
                        <input type="text" name="title" placeholder="Your idea" class="subtitle">
                        <textarea name="description" placeholder="Describe your idea" class="subtitle" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'></textarea>
                    </div>
                    <input type="submit" value="Add the idea" class="subtitle bold">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="company-profile">
        <div class="profile">
            <div class="pic">

            </div>
            <div class="title">
                <p class="title">Apple</p>
                <p class="subtitle">Design Community</p>
            </div>
        </div>
        <div class="buttons">
            <a href="" class="a-block button text-wide subtitle">View All</a>
            <!-- <a href="" class="a-block button icon-s">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5209 3H2.03472C1.7603 3 1.49711 3.10902 1.30306 3.30306C1.10902 3.49711 1 3.7603 1 4.03472V14.382C1 14.6564 1.10902 14.9196 1.30306 15.1136C1.49711 15.3077 1.7603 15.4167 2.03472 15.4167H16.5209C16.7953 15.4167 17.0585 15.3077 17.2525 15.1136C17.4466 14.9196 17.5556 14.6564 17.5556 14.382V4.03472C17.5556 3.7603 17.4466 3.49711 17.2525 3.30306C17.0585 3.10902 16.7953 3 16.5209 3ZM15.5537 14.2113C15.6166 14.2743 15.572 14.382 15.4829 14.382H3.12933C3.04105 14.382 2.99607 14.2759 3.05743 14.2125L6.44551 10.7082C6.48392 10.6685 6.48283 10.6051 6.44307 10.5668L5.84198 9.98654C5.80226 9.9482 5.73899 9.94929 5.70062 9.98899L2.20663 13.604C2.14414 13.6686 2.03472 13.6244 2.03472 13.5345V5.06171C2.03472 4.97274 2.1422 4.92807 2.20526 4.99083L8.46553 11.2209C8.6594 11.4136 8.92165 11.5218 9.19501 11.5218C9.46837 11.5218 9.73063 11.4136 9.92449 11.2209L16.3503 4.83031C16.4134 4.76758 16.5209 4.81226 16.5209 4.90122V13.4731C16.5209 13.5622 16.4131 13.6069 16.3501 13.5439L12.7838 9.97749C12.7447 9.93844 12.6814 9.93844 12.6424 9.97749L12.0543 10.5656C12.0152 10.6046 12.0152 10.6679 12.0542 10.707L15.5537 14.2113ZM2.88417 4.2056C2.82094 4.14268 2.8655 4.03472 2.95471 4.03472H15.4404C15.5296 4.03472 15.5741 4.14272 15.5109 4.20563L9.26555 10.4161C9.22654 10.4549 9.1635 10.4549 9.1245 10.4161L2.88417 4.2056Z" fill="black"/>
                </svg>
            </a> -->
            <a href="" class="a-block button icon-s fill">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.1111 10.7778C16.602 10.7778 17 11.1757 17 11.6667V15.2222C17 15.6937 16.8127 16.1459 16.4793 16.4793C16.1459 16.8127 15.6937 17 15.2222 17H2.77778C2.30628 17 1.8541 16.8127 1.5207 16.4793C1.1873 16.1459 1 15.6937 1 15.2222V2.77778C1 2.30628 1.1873 1.8541 1.5207 1.5207C1.8541 1.1873 2.30628 1 2.77778 1H6.33333C6.82425 1 7.22222 1.39797 7.22222 1.88889C7.22222 2.37981 6.82425 2.77778 6.33333 2.77778H4.11111C3.37473 2.77778 2.77778 3.37473 2.77778 4.11111V13.8889C2.77778 14.6253 3.37473 15.2222 4.11111 15.2222H13.8889C14.6253 15.2222 15.2222 14.6253 15.2222 13.8889V11.6667C15.2222 11.1757 15.6202 10.7778 16.1111 10.7778Z" fill="white"/>
                    <path d="M17 5.02222C17 4.76449 16.791 4.55556 16.5333 4.55556H13.9111C13.6534 4.55556 13.4444 4.34662 13.4444 4.08889V1.46667C13.4444 1.20893 13.2355 1 12.9778 1H12.1333C11.8756 1 11.6666 1.20893 11.6666 1.46667V4.08889C11.6666 4.34662 11.4577 4.55556 11.2 4.55556H8.57775C8.32002 4.55556 8.11108 4.76449 8.11108 5.02222V5.86667C8.11108 6.1244 8.32002 6.33333 8.57775 6.33333H11.2C11.4577 6.33333 11.6666 6.54227 11.6666 6.8V9.42222C11.6666 9.67996 11.8756 9.88889 12.1333 9.88889H12.9778C13.2355 9.88889 13.4444 9.67996 13.4444 9.42222V6.8C13.4444 6.54227 13.6534 6.33333 13.9111 6.33333H16.5333C16.791 6.33333 17 6.1244 17 5.86667V5.02222Z" fill="white"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="vote-cards">
        <a href="#" class="a-block vote-card sunny-lime">
            <div class="top">
                <div class="pic"></div>
                <div class="buttons">
                    <object data="" type=""><a href="" class="a-block button text fill title">VOTE</a></object>
                    <object data="" type="">
                        <a href="" class="a-block button icon-s">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.43589 19.3671L18.4192 5.38379" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.1692 12.2951V4.63353H11.5076" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </object>
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <p class="heading">Awesome idea merging Laravel and React together</p>
                    <p class="body opacity-50">Jeffrey Daw</p>
                </div>
                <div class="text center">
                    <p class="heading">29</p>
                    <p class="title">🔥</p>
                </div>
            </div>
        </a>
        <a href="#" class="a-block vote-card heather">
            <div class="top">
                <div class="pic"></div>
                <div class="buttons">
                    <object data="" type=""><a href="" class="a-block button text fill title">VOTE</a></object>
                    <object data="" type="">
                        <a href="" class="a-block button icon-s">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.43589 19.3671L18.4192 5.38379" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.1692 12.2951V4.63353H11.5076" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </object>
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <p class="heading">WDY think about getting professional using amazing shortcuts w/ PhpStorm, that makes your life easier!</p>
                    <p class="body opacity-50">Jeffrey Daw</p>
                </div>
                <div class="text center">
                    <p class="heading">14</p>
                    <p class="title">🔥</p>
                </div>
            </div>
        </a>
        <a href="#" class="a-block vote-card pink-crepe">
            <div class="top">
                <div class="pic"></div>
                <div class="buttons">
                    <object data="" type=""><a href="" class="a-block button text fill title">VOTE</a></object>
                    <object data="" type="">
                        <a href="" class="a-block button icon-s">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.43589 19.3671L18.4192 5.38379" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.1692 12.2951V4.63353H11.5076" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </object>
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <p class="heading">WDY think about connecting Front w/ Back without API ?</p>
                    <p class="body opacity-50">Jeffrey Daw</p>
                </div>
                <div class="text center">
                    <p class="heading">39</p>
                    <p class="title">🔥</p>
                </div>
            </div>
        </a>
        <a href="#" class="a-block vote-card light-teal">
            <div class="top">
                <div class="pic"></div>
                <div class="buttons">
                    <object data="" type=""><a href="" class="a-block button text fill title">VOTE</a></object>
                    <object data="" type="">
                        <a href="" class="a-block button icon-s">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.43589 19.3671L18.4192 5.38379" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.1692 12.2951V4.63353H11.5076" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </object>
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <p class="heading">Awesome idea merging Laravel and React together</p>
                    <p class="body opacity-50">Jeffrey Daw</p>
                </div>
                <div class="text center">
                    <p class="heading">7</p>
                    <p class="title">🔥</p>
                </div>
            </div>
        </a>
        <a href="#" class="a-block vote-card sky-blue">
            <div class="top">
                <div class="pic"></div>
                <div class="buttons">
                    <object data="" type=""><a href="" class="a-block button text fill title">VOTE</a></object>
                    <object data="" type="">
                        <a href="" class="a-block button icon-s">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.43589 19.3671L18.4192 5.38379" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.1692 12.2951V4.63353H11.5076" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </object>
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <p class="heading">WDY think about getting professional using amazing shortcuts w/ PhpStorm, that makes your life easier!</p>
                    <p class="body opacity-50">Jeffrey Daw</p>
                </div>
                <div class="text center">
                    <p class="heading">14</p>
                    <p class="title">🔥</p>
                </div>
            </div>
        </a>
    </div>
</div>

<?php $content = ob_get_clean() ?>

<?php require base_path('views/layouts/app.php') ?>