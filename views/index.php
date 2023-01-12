<html>
    <head>
        <title><?=Config::SITE_TITLE?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
<?php require_once (Config::publicPath().'css/style.css'); ?>
        </style>

    </head>

    <body class="container-fluid">
        <div id="canvas" class="row">
            <div id="leftbar" class="col-2">
                <div class="leftbar-logo">
                    <div class="leftbar-logo-img">
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 0H0V7H7V0Z" fill="white"/>
                            <path d="M10 3H3V10H10V3Z" fill="#4F4F4F" stroke="white" stroke-width="0.990945" stroke-miterlimit="10"/>
                        </svg>
                    </div>
                    <div class="leftbar-logo-text">
                        BOOT<b>SRM</b>
                    </div>
                </div>
                <div class="left-logo">
                    <svg width="160" height="26" viewBox="0 0 160 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M151.061 1.89281H159.5V0.255464H140.859V1.89281H149.298V25.7445H151.073V1.89281H151.061ZM123.088 1.89281H129.458C134.512 1.89281 138.743 4.11076 138.743 9.20858C138.743 14.3412 134.501 16.5243 129.458 16.5243H123.088V1.89281ZM121.325 0.255464V25.7445H123.1V18.1733H129.588C132.467 18.1733 133.972 18.6842 136.217 22.1447L138.579 25.7445H140.612L137.85 21.5989C136.264 19.1603 134.9 18.0339 133.396 17.523C137.521 16.4663 140.507 13.7374 140.507 9.22018C140.507 3.35596 135.605 0.267079 129.376 0.267079H121.325V0.255464ZM102.602 12.0188V1.89281H116.718V0.255464H100.839V25.7445H116.718V24.1072H102.602V13.6213H116.012V12.0188H102.602ZM87.3459 0C82.9266 0 78.8012 2.65922 78.8012 6.88611C78.8012 10.3814 81.2341 12.2394 86.5349 12.9245L89.7083 13.3658C93.9043 13.9116 95.9376 15.4792 95.9376 18.7191C95.9376 22.2492 92.4704 24.3627 88.4977 24.3627H88.2744C83.5965 24.3627 80.4937 22.2841 79.2831 19.1952L78.143 20.2519C79.5769 23.7124 83.1499 26 88.2744 26H88.4977C93.3989 26 97.7124 23.1666 97.7124 18.7191C97.7124 14.3877 95.0209 12.3787 89.8611 11.7284L86.6877 11.2872C82.2684 10.7066 80.5759 9.35954 80.5759 6.83966C80.5759 3.44886 84.0784 1.63733 87.3576 1.63733H87.8043C90.9424 1.63733 93.9278 2.91469 95.6555 5.31844L96.7956 4.26172C94.8798 1.53283 91.4948 0 87.8043 0H87.3459Z" fill="#26B5C5"/>
                        <path d="M15.6031 17.3256L24.4887 0.255464H17.3779L12.4767 9.64984L7.61079 0.255464H0.5L9.33855 17.3256V25.7329H15.6031V17.3256ZM42.8005 12.9942C42.8005 17.3953 39.7799 20.1358 35.913 20.1358C32.0814 20.1358 29.0608 17.4069 29.0608 12.9942C29.0608 8.62795 32.0814 5.81777 35.913 5.81777C39.7799 5.82938 42.8005 8.62795 42.8005 12.9942ZM49.065 12.9942C49.065 5.81777 43.1648 0 35.913 0C28.6494 0 22.7962 5.82938 22.7962 12.9942C22.7962 20.2054 28.6611 25.9884 35.913 25.9884C43.1648 26 49.065 20.2054 49.065 12.9942ZM72.9715 15.2238V0.255464H66.7069V15.038C66.7069 19.4042 64.2034 20.1358 62.5462 20.1358C60.889 20.1358 58.3855 19.4042 58.3855 15.038V0.255464H52.1209V15.2238C52.1209 22.7253 57.504 26 62.5462 26C67.6002 26 72.9715 22.7253 72.9715 15.2238Z" fill="#26B5C5"/>
                    </svg>
                </div>
                <div class="left-menu">
                    <div class="left-menu-item">
                        <div class="left-menu-item-img">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 13.125V10.2083C16 9.72533 15.616 9.33333 15.1429 9.33333H14.2857V7.58333C14.2857 6.94517 13.768 6.41667 13.1429 6.41667H8.57143V4.66667H9.42857C9.90171 4.66667 10.2857 4.27467 10.2857 3.79167V0.875C10.2857 0.392 9.90171 0 9.42857 0H6.57143C6.09829 0 5.71429 0.392 5.71429 0.875V3.79167C5.71429 4.27467 6.09829 4.66667 6.57143 4.66667H7.42857V6.41667H2.85714C2.232 6.41667 1.71429 6.94517 1.71429 7.58333V9.33333H0.857143C0.384 9.33333 0 9.72533 0 10.2083V13.125C0 13.608 0.384 14 0.857143 14H3.71429C4.18743 14 4.57143 13.608 4.57143 13.125V10.2083C4.57143 9.72533 4.18743 9.33333 3.71429 9.33333H2.85714V7.58333H7.42857V9.33333H6.57143C6.09829 9.33333 5.71429 9.72533 5.71429 10.2083V13.125C5.71429 13.608 6.09829 14 6.57143 14H9.42857C9.90171 14 10.2857 13.608 10.2857 13.125V10.2083C10.2857 9.72533 9.90171 9.33333 9.42857 9.33333H8.57143V7.58333H13.1429V9.33333H12.2857C11.8126 9.33333 11.4286 9.72533 11.4286 10.2083V13.125C11.4286 13.608 11.8126 14 12.2857 14H15.1429C15.616 14 16 13.608 16 13.125Z" fill="#26B5C5"/>
                            </svg>
                        </div>
                        <div>Отделы</div>
                    </div>
                </div>
            </div>
            <div id="main-wrapper" class="col">
                <div class="main-header">
                    <div>
                        <h1>Отделы: Общая</h1>
                    </div>
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="button-addon2" style="border: 1px solid #DEDEDE">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="border: 1px solid #DEDEDE;background: #fff;border-left:0"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div>
                        Должность пользователя
                    </div>
                    <div>
                        <div class="usermenu dropdown">
                            <div class="usermenu-header dropdown-toggle" id="usermenu-buton" data-bs-toggle="dropdown" aria-expanded="false">
                                <div>
                                    <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9473 17.099L18.697 12.4152C18.43 11.4133 17.8483 10.533 17.0444 9.91444C16.2405 9.29584 15.2606 8.97451 14.2607 9.00158C13.2608 9.02865 12.2983 9.40257 11.5265 10.0638C10.7546 10.7251 10.2177 11.6357 10.0013 12.6507L9.03427 17.1739C8.98748 17.3931 8.98862 17.6203 9.03761 17.839C9.0866 18.0576 9.18219 18.262 9.31733 18.4371C9.45247 18.6122 9.6237 18.7535 9.81841 18.8506C10.0131 18.9477 10.2263 18.9982 10.4423 18.9983H12.1768C12.2872 19.5632 12.582 20.0711 13.0115 20.4359C13.4409 20.8007 13.9785 21 14.5331 21C15.0877 21 15.6253 20.8007 16.0547 20.4359C16.4841 20.0711 16.779 19.5632 16.8894 18.9983H18.558C18.7802 18.9981 18.9994 18.9447 19.1985 18.842C19.3976 18.7394 19.5711 18.5903 19.7056 18.4065C19.8402 18.2227 19.932 18.009 19.974 17.7822C20.016 17.5554 20.007 17.3216 19.9478 17.099H19.9473ZM14.5331 19.9979C14.2358 19.9966 13.9461 19.8999 13.7037 19.7209C13.4613 19.542 13.278 19.2896 13.1789 18.9983H15.8872C15.7881 19.2896 15.6049 19.542 15.3625 19.7209C15.1201 19.8999 14.8304 19.9966 14.5331 19.9979ZM18.9403 17.8012C18.8955 17.863 18.8373 17.9131 18.7705 17.9474C18.7037 17.9816 18.6301 17.9992 18.5556 17.9986H10.4423C10.3703 17.9986 10.2992 17.9818 10.2343 17.9494C10.1694 17.917 10.1123 17.8699 10.0672 17.8115C10.0222 17.7531 9.99031 17.685 9.97399 17.6121C9.95767 17.5392 9.95731 17.4634 9.97294 17.3904L10.94 12.8671C11.1104 12.0705 11.5321 11.3559 12.1381 10.8371C12.744 10.3182 13.4995 10.0247 14.2844 10.0034C15.0692 9.982 15.8384 10.2339 16.4697 10.7191C17.101 11.2043 17.5581 11.8949 17.7684 12.6811L19.0187 17.3649C19.0391 17.4389 19.0427 17.5169 19.0291 17.5927C19.0155 17.6684 18.9851 17.7398 18.9403 17.8012Z" fill="#778184"/>
                                        <rect x="16" width="24" height="15" rx="7.5" fill="#8BCB85"/>
                                        <path d="M23.4219 10.5341V4.77273H24.5682V10.5341H23.4219ZM21.1165 8.22443V7.08239H26.8778V8.22443H21.1165ZM31.7124 12.1193C31.1783 12.1193 30.6982 12.017 30.272 11.8125C29.8487 11.6051 29.5107 11.321 29.2578 10.9602C29.005 10.5994 28.87 10.1875 28.853 9.72443H30.1314C30.1626 10.0994 30.3288 10.4077 30.63 10.6491C30.9311 10.8906 31.2919 11.0114 31.7124 11.0114C32.0476 11.0114 32.3445 10.9347 32.603 10.7812C32.8643 10.625 33.0689 10.4105 33.2166 10.1378C33.3672 9.86506 33.4425 9.55398 33.4425 9.20455C33.4425 8.84943 33.3658 8.53267 33.2124 8.25426C33.0589 7.97585 32.8473 7.7571 32.5774 7.59801C32.3104 7.43892 32.0036 7.35795 31.657 7.35511C31.3928 7.35511 31.1271 7.40057 30.8601 7.49148C30.593 7.58239 30.3771 7.7017 30.2124 7.84943L29.0064 7.67045L29.4964 3.27273H34.2947V4.40199H30.5916L30.3146 6.84375H30.3658C30.5362 6.67898 30.7621 6.54119 31.0433 6.4304C31.3274 6.3196 31.6314 6.2642 31.9553 6.2642C32.4865 6.2642 32.9595 6.39062 33.3743 6.64347C33.7919 6.89631 34.12 7.24148 34.3587 7.67898C34.6001 8.11364 34.7195 8.61364 34.7166 9.17898C34.7195 9.74432 34.5916 10.2486 34.3331 10.6918C34.0774 11.1349 33.7223 11.4844 33.2678 11.7401C32.8161 11.9929 32.2976 12.1193 31.7124 12.1193Z" fill="white"/>
                                    </svg>
                                </div>
                                <div class="usermenu-header-image">
                                    <img src="/images/avatar.png">
                                </div>
                                <div>
                                    Имя пользователя
                                </div>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="usermenu-button">
                                <li><a class="dropdown-item" href="#">Меню</a></li>
                                <li><a class="dropdown-item" href="#">Пользователя</a></li>
                                <li><a class="dropdown-item" href="#">С разными</a></li>
                                <li><a class="dropdown-item" href="#">Функциями</a></li>
                                <li><a class="dropdown-item text-danger" href="#">И выходом</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="main-buttons row">
                    <div class="col-3 d-grid gap-2">
                        <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#section-modal">Создать отдел +</button>
                        <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#user-modal">Добавить сотрудника +</button>
                    </div>
                </div>

                <div class="main-body" style="margin-top: 30px">
                    <div class="section">
                        <div class="section-header">
                            <div class="section-title">
                                <h5>Название отдела</h5>
                                <span><a href="#">Руководитель отдела</a></span>
                            </div>
                            <div class="section-control">Управление</div>
                        </div>
                        <div class="section-users">
                            <div class="section-user row">
                                <div class="section-user-title col-2">Имя сотрудника</div>
                                <div class="section-user-position col-2">Должность сотрудника</div>
                                <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                            </div>
                            <div class="section-user row">
                                <div class="section-user-title col-2">Имя сотрудника</div>
                                <div class="section-user-position col-2">Должность сотрудника</div>
                                <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                            </div>
                        </div>
                        <div class="section-subs">
                            <div class="section sub">
                                <div class="section-header">
                                    <div class="section-title">
                                        <h5>Название отдела</h5>
                                        <span><a href="#">Руководитель отдела</a></span>
                                    </div>
                                    <div class="section-control">Управление</div>
                                </div>
                                <div class="section-users">
                                    <div class="section-user row">
                                        <div class="section-user-title col-2">Имя сотрудника</div>
                                        <div class="section-user-position col-2">Должность сотрудника</div>
                                        <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                    </div>
                                    <div class="section-user row">
                                        <div class="section-user-title col-2">Имя сотрудника</div>
                                        <div class="section-user-position col-2">Должность сотрудника</div>
                                        <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                    </div>
                                    <div class="section-user row">
                                        <div class="section-user-title col-2">Имя сотрудника</div>
                                        <div class="section-user-position col-2">Должность сотрудника</div>
                                        <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                    </div>
                                    <div class="section-user row">
                                        <div class="section-user-title col-2">Имя сотрудника</div>
                                        <div class="section-user-position col-2">Должность сотрудника</div>
                                        <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                    </div>
                                </div>
                                <div class="section sub">
                                    <div class="section-header">
                                        <div class="section-title">
                                            <h5>Название отдела</h5>
                                            <span><a href="#">Руководитель отдела</a></span>
                                        </div>
                                        <div class="section-control">Управление</div>
                                    </div>
                                    <div class="section-users">
                                        <div class="section-user row">
                                            <div class="section-user-title col-2">Имя сотрудника</div>
                                            <div class="section-user-position col-2">Должность сотрудника</div>
                                            <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                        </div>
                                        <div class="section-user row">
                                            <div class="section-user-title col-2">Имя сотрудника</div>
                                            <div class="section-user-position col-2">Должность сотрудника</div>
                                            <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                        </div>
                                        <div class="section-user row">
                                            <div class="section-user-title col-2">Имя сотрудника</div>
                                            <div class="section-user-position col-2">Должность сотрудника</div>
                                            <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                        </div>
                                        <div class="section-user row">
                                            <div class="section-user-title col-2">Имя сотрудника</div>
                                            <div class="section-user-position col-2">Должность сотрудника</div>
                                            <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                        </div>
                                    </div>
                                    <div class="section sub">
                                        <div class="section-header">
                                            <div class="section-title">
                                                <h5>Название отдела</h5>
                                                <span><a href="#">Руководитель отдела</a></span>
                                            </div>
                                            <div class="section-control">Управление</div>
                                        </div>
                                        <div class="section-users">
                                            <div class="section-user row">
                                                <div class="section-user-title col-2">Имя сотрудника</div>
                                                <div class="section-user-position col-2">Должность сотрудника</div>
                                                <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                            </div>
                                            <div class="section-user row">
                                                <div class="section-user-title col-2">Имя сотрудника</div>
                                                <div class="section-user-position col-2">Должность сотрудника</div>
                                                <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                            </div>
                                            <div class="section-user row">
                                                <div class="section-user-title col-2">Имя сотрудника</div>
                                                <div class="section-user-position col-2">Должность сотрудника</div>
                                                <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                            </div>
                                            <div class="section-user row">
                                                <div class="section-user-title col-2">Имя сотрудника</div>
                                                <div class="section-user-position col-2">Должность сотрудника</div>
                                                <div class="section-user-controls col-2 offset-6 text-end">Управление</div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>



        <div id="sidebar-right" class="offcanvas offcanvas-end" tabindex="-1" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
        </div>

        <!-- Добавление/редактирование отдела -->
        <div class="modal fade" id="section-modal" tabindex="-1" aria-labelledby="section-modal-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="section-modal-label">Отдел</h5>
                        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                    </div>
                    <div class="modal-body">
                        <form id="section-update-form">
                            <input type="hidden" name="id" value="" id="section-id-field">
                            <div class="row mb-3">
                                <label for="section-title-field" class="col-sm-4 col-form-label">Наименование<sup>*</sup></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="section-title-field" required="required">
                                </div>
                                <label for="section-sub-field" class="col-sm-12 col-form-label text-end">Подотдел
                                    <input type="checkbox" class="form-check-input" id="section-sub-field">
                                </label>
                                <label for="section-main-field" class="col-sm-4 col-form-label section-main-block" style="display: none">Главный отдел<sup>*</sup></label>
                                <div class="col-sm-8">
                                    <select class="form-select section-main-block" id="section-main-field" style="display: none">
                                        <option value="0">Главный</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                        <button type="button" class="btn btn-primary" id="section-form-submit" form="section-update-form" disabled="disabled">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Добавление/редактирование пользователя -->
        <div class="modal fade" id="user-modal" tabindex="-1" aria-labelledby="user-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="user-modal-label">Пользователь</h5>
                        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                    </div>
                    <div class="modal-body">
                        <form id="user-update-form">
                            <input type="hidden" name="id" value="" id="user-id-field">
                            <div class="row mb-2">
                                <div class="mb-2 form-header">Персональная информация</div>
                                <label for="user-sname-field" class="col-sm-3 col-form-label text-end">Фамилия<sup>*</sup></label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" class="form-control" id="user-sname-field" required="required">
                                </div>
                                <label for="user-fname-field" class="col-sm-3 col-form-label text-end">Имя<sup>*</sup></label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" class="form-control" id="user-fname-field" required="required">
                                </div>
                                <label for="user-tname-field" class="col-sm-3 col-form-label text-end">Отчество</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" class="form-control" id="user-tname-field">
                                </div>
                                <label for="user-birth-field" class="col-sm-3 col-form-label text-end">Дата рождения</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="date" class="form-control" id="user-birth-field">
                                </div>
                                <label for="user-ava-field" class="col-sm-3 col-form-label text-end">Аватар</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="file" class="form-control" id="user-ava-field">
                                </div>
                                <div class="mb-2 form-header">Должность</div>
                                <label for="user-section-field" class="col-sm-3 col-form-label text-end">Отдел</label>
                                <div class="col-sm-9 mb-2">
                                    <select class="form-select" id="user-section-field">
                                        <option value="0">Главный</option>
                                    </select>
                                </div>
                                <label for="user-position-field" class="col-sm-3 col-form-label text-end">Должность</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" class="form-control" id="user-position-field">
                                </div>
                                <label for="user-work-begin-field" class="col-sm-3 col-form-label text-end">Дата начала работы</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="date" class="form-control" id="user-work-begin-field">
                                </div>
                                <div class="mb-2 form-header">Контакты</div>
                                <label for="user-email-field" class="col-sm-3 col-form-label text-end">E-mail</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="email" class="form-control" id="user-email-field">
                                </div>
                                <label for="user-phone-work-field" class="col-sm-3 col-form-label text-end">Телефон (рабочий)</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" class="form-control" id="user-phone-work-field">
                                </div>
                                <label for="user-phone-pers-field" class="col-sm-3 col-form-label text-end">Телефон (личный)</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" class="form-control" id="user-phone-pers-field">
                                </div>
                                <label class="col-sm-3 col-form-label text-end">Соцсети</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" class="form-control" class="user-social-field">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                        <button type="button" class="btn btn-primary" id="user-form-submit" form="user-update-form" disabled="disabled">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>





        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript">
    <?php require_once (Config::publicPath().'js/main.js'); ?>
        </script>
    </body>
</html>