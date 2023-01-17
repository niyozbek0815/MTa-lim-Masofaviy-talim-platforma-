<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GetSkills  : GetSkills Online Learning Admin Bootstrap 5 Template" />
    <meta property="og:title" content="GetSkills  : GetSkills Online Learning  Admin Bootstrap 5 Template" />
    <meta property="og:description" content="GetSkills  : GetSkills Online Learning  Admin Bootstrap 5 Template" />
    <meta property="og:image" content="https://getskills.dexignzone.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>TDTU Admin</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <link href="{{ asset('./vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('./vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('./vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <div class="ellipse">
            <svg class="green-line" width="669" height="487" viewBox="0 0 669 487" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M237.231 -68.6319V-68.6021L237.233 -68.5724C240.62 -11.7125 250.024 41.8582 269.813 81.245C289.627 120.683 319.922 146 365 146C385.587 146 411.761 133.509 439.623 113.32C467.532 93.0977 497.301 65.0267 525.114 33.5967C552.929 2.16452 578.809 -32.6519 598.929 -66.3803C619.03 -100.077 633.422 -132.754 638.209 -159.92C641.588 -173.074 642.414 -182.818 640.908 -189.917C639.382 -197.111 635.464 -201.562 629.562 -204.027C623.75 -206.455 616.074 -206.932 607.015 -206.43C598.241 -205.944 588.029 -204.527 576.749 -202.962L575.574 -202.799C528.514 -196.273 462.757 -187.599 400.301 -230.953C363.87 -256.242 335.385 -267.371 313.122 -267.543C290.75 -267.716 274.81 -256.826 263.567 -238.544C252.361 -220.322 245.792 -194.726 242.013 -165.305C238.231 -135.864 237.231 -102.487 237.231 -68.6319Z"
                    stroke="url(#paint0_linear_1146_121)" stroke-opacity="0.2" stroke-width="2" />
                <path
                    d="M287.231 -67.4176V-67.3879L287.233 -67.3582C289.553 -28.4105 294.217 9.84134 306.007 38.3782C311.906 52.6574 319.615 64.5666 329.764 72.9092C339.931 81.2668 352.495 86 368 86C375.138 86 383.313 83.7364 392.143 79.7017C400.983 75.6628 410.535 69.8223 420.443 62.6034C440.259 48.1655 461.567 28.1615 481.528 5.85989C501.491 -16.4438 520.129 -41.0702 534.597 -64.767C549.044 -88.4293 559.379 -111.238 562.673 -129.918C564.991 -138.942 565.57 -145.674 564.523 -150.609C563.457 -155.638 560.702 -158.775 556.561 -160.504C552.509 -162.197 547.187 -162.52 540.969 -162.175C534.942 -161.841 527.931 -160.869 520.207 -159.797L519.394 -159.684C487.137 -155.211 442.184 -149.29 399.489 -178.927C374.503 -196.272 354.915 -203.942 339.561 -204.061C324.099 -204.18 313.08 -196.642 305.327 -184.036C297.612 -171.489 293.103 -153.893 290.511 -133.715C287.916 -113.517 287.231 -90.6247 287.231 -67.4176Z"
                    stroke="url(#paint1_linear_1146_121)" stroke-opacity="0.2" stroke-width="2" />
                <path
                    d="M332.533 -59.8058V-59.776L332.535 -59.7463L332.561 -59.3074C333.782 -38.8127 335.056 -17.4149 340.066 -1.10762C342.592 7.11435 346.095 14.1385 351.098 19.115C356.131 24.1204 362.63 27 371 27C374.892 27 379.512 25.6578 384.58 23.3203C389.663 20.9759 395.271 17.5951 401.161 13.4356C412.942 5.11595 425.92 -6.37057 438.178 -19.0723C450.436 -31.7753 461.997 -45.7173 470.932 -58.9594C479.838 -72.158 486.203 -84.7593 487.978 -94.7885C489.212 -99.6027 489.418 -103.264 488.58 -105.974C487.709 -108.787 485.755 -110.446 483.07 -111.289C480.454 -112.109 477.117 -112.169 473.319 -111.873C469.69 -111.59 465.525 -110.971 461.007 -110.299C460.777 -110.265 460.547 -110.231 460.315 -110.197C441.081 -107.34 415.338 -103.772 392.855 -119.379C379.566 -128.603 369.074 -132.739 360.782 -132.803C352.383 -132.868 346.393 -128.756 342.208 -121.95C338.06 -115.205 335.656 -105.786 334.278 -95.0551C332.897 -84.3042 332.533 -72.1297 332.533 -59.8058Z"
                    stroke="url(#paint2_linear_1146_121)" stroke-opacity="0.2" stroke-width="2" />
                <path
                    d="M714.469 -193.085L714.52 -193.184L714.548 -193.292C718.948 -210.237 720.013 -222.748 718.067 -231.833C716.102 -241.007 711.07 -246.658 703.492 -249.792C696.003 -252.89 686.083 -253.509 674.316 -252.863C662.922 -252.238 649.658 -250.416 634.987 -248.4L633.466 -248.191C572.289 -239.789 486.688 -228.599 405.386 -284.489C358.04 -317.036 321.07 -331.322 292.22 -331.542C263.264 -331.764 242.631 -317.817 228.057 -294.348C213.521 -270.94 204.987 -238.034 200.075 -200.168C195.161 -162.282 193.861 -119.324 193.861 -75.7413V-75.7112L193.863 -75.6812C198.264 -2.5202 207.565 70.3105 230.324 124.875C241.708 152.167 256.483 174.95 275.753 190.915C295.041 206.894 318.783 216 348 216C374.693 216 406.34 199.175 439.83 171.987C473.364 144.762 508.921 107.001 543.46 64.8156C612.54 -19.5574 677.647 -121.752 714.469 -193.085Z"
                    stroke="url(#paint3_linear_1146_121)" stroke-opacity="0.2" stroke-width="2" />
                <path
                    d="M906.856 -268.482L906.907 -268.581L906.936 -268.689C913.93 -295.624 915.596 -315.423 912.529 -329.743C909.442 -344.152 901.565 -352.985 889.688 -357.898C877.901 -362.773 862.227 -363.766 843.522 -362.74C825.417 -361.747 804.332 -358.849 780.976 -355.64L778.569 -355.309C681.231 -341.942 544.808 -324.092 415.233 -413.166C339.93 -464.932 281.223 -487.584 235.495 -487.933C189.659 -488.283 157.005 -466.228 133.905 -429.029C110.842 -391.89 97.2761 -339.631 89.4644 -279.406C81.6501 -219.16 79.5816 -150.835 79.5815 -81.4937V-81.4637L79.5833 -81.4337C86.5855 34.9724 101.382 150.775 137.556 237.5C155.647 280.872 179.109 317.032 209.673 342.354C240.256 367.691 277.901 382.134 324.256 382.134C366.513 382.134 416.731 355.48 470.003 312.232C523.319 268.948 579.869 208.896 634.815 141.786C744.708 7.56412 848.284 -155.013 906.856 -268.482Z"
                    stroke="url(#paint4_linear_1146_121)" stroke-opacity="0.2" stroke-width="2" />
                <path
                    d="M1039.25 -331.574L1039.3 -331.673L1039.33 -331.781C1048.11 -365.589 1050.19 -390.401 1046.35 -408.323C1042.49 -426.333 1032.66 -437.356 1017.82 -443.491C1003.08 -449.59 983.447 -450.841 959.968 -449.553C937.246 -448.306 910.781 -444.67 881.449 -440.639L878.434 -440.225C756.219 -423.441 584.831 -401.009 422.046 -512.912C327.51 -577.9 253.849 -606.308 196.508 -606.746C139.061 -607.185 98.1362 -579.551 69.1699 -532.906C40.2412 -486.321 23.2138 -420.748 13.4069 -345.14C3.59735 -269.512 1.00002 -183.735 1 -96.6728V-96.6427L1.0018 -96.6127C9.79359 49.5443 28.3705 194.909 73.773 303.76C96.4782 358.194 125.917 403.558 164.251 435.317C202.604 467.091 249.814 485.206 307.96 485.206C360.924 485.206 423.919 451.791 490.8 397.494C557.725 343.161 628.717 267.774 697.702 183.517C835.673 15.0012 965.715 -189.117 1039.25 -331.574Z"
                    stroke="url(#paint5_linear_1146_121)" stroke-opacity="0.2" stroke-width="2" />
                <path
                    d="M777.519 -227.649L777.552 -227.724L777.571 -227.803C782.943 -249.496 784.23 -265.462 781.867 -277.025C779.488 -288.671 773.405 -295.844 764.206 -299.833C755.097 -303.784 743.01 -304.58 728.639 -303.753C714.726 -302.952 698.527 -300.619 680.599 -298.036L678.745 -297.768C604.007 -287.007 499.36 -272.656 399.96 -344.302C342.131 -385.984 297.002 -404.26 261.807 -404.542C226.497 -404.824 201.356 -386.999 183.595 -357.01C165.868 -327.078 155.449 -284.979 149.451 -236.488C143.45 -187.977 141.861 -132.964 141.861 -77.1375V-77.1089L141.863 -77.0803C147.239 16.6307 158.111 109.056 185.407 178.077C199.059 212.596 216.843 241.327 240.165 261.434C263.507 281.558 292.347 293 328 293C346.517 293 368.215 285.663 391.751 272.816C415.303 259.96 440.781 241.54 466.882 219.263C519.085 174.706 573.858 114.65 620.798 52.6033C687.102 -35.0413 716.088 -81.361 733.602 -117.678C742.36 -135.838 748.243 -151.482 754.482 -168.503C754.99 -169.887 755.499 -171.28 756.013 -172.685C761.818 -188.551 768.149 -205.853 777.519 -227.649Z"
                    stroke="url(#paint6_linear_1146_121)" stroke-opacity="0.2" stroke-width="2" />
                <defs>
                    <linearGradient id="paint0_linear_1146_121" x1="439.431" y1="-266.545" x2="439.431"
                        y2="145" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#39B992" />
                        <stop offset="0.0001" stop-color="#4CBC9A" />
                        <stop offset="0.484375" stop-color="#4CBC9A" />
                        <stop offset="1" stop-color="var(--secondary)" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_1146_121" x1="426.128" y1="-203.062" x2="426.128"
                        y2="85" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#39B992" />
                        <stop offset="0.0001" stop-color="var(--secondary)" />
                        <stop offset="0.484375" stop-color="var(--secondary)" />
                        <stop offset="1" stop-color="var(--secondary)" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_1146_121" x1="410.81" y1="-131.804" x2="410.81"
                        y2="26" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#39B992" />
                        <stop offset="0.0001" stop-color="var(--secondary)" />
                        <stop offset="0.484375" stop-color="var(--secondary)" />
                        <stop offset="1" stop-color="var(--secondary)" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_1146_121" x1="456.431" y1="-330.545" x2="456.431"
                        y2="215" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#39B992" />
                        <stop offset="0.0001" stop-color="var(--secondary)" />
                        <stop offset="0.484375" stop-color="var(--secondary)" />
                        <stop offset="1" stop-color="var(--secondary)" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_1146_121" x1="496.791" y1="-486.937" x2="496.791"
                        y2="381.134" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#39B992" />
                        <stop offset="0.0001" stop-color="var(--secondary)" />
                        <stop offset="0.484375" stop-color="var(--secondary)" />
                        <stop offset="1" stop-color="var(--secondary)" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_1146_121" x1="524.596" y1="-605.751" x2="524.596"
                        y2="484.206" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#39B992" />
                        <stop offset="0.0001" stop-color="var(--secondary)" />
                        <stop offset="0.484375" stop-color="var(--secondary)" />
                        <stop offset="1" stop-color="var(--secondary)" />
                    </linearGradient>
                    <linearGradient id="paint6_linear_1146_121" x1="462.431" y1="-403.545" x2="462.431"
                        y2="292" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#39B992" />
                        <stop offset="0.0001" stop-color="var(--secondary)" />
                        <stop offset="0.484375" stop-color="var(--secondary)" />
                        <stop offset="1" stop-color="var(--secondary)" />
                    </linearGradient>
                </defs>
            </svg>
            <svg class="red-line" width="1131" height="455" viewBox="0 0 1131 455" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1132 6.00001C1008.33 -8.33332 722 0.399994 566 150C371 337 309 482 1 527M1132 124C1020 112 787 85 659 177C516.839 279.178 430 455 134 527M1132 243C1039.33 220.667 824 177 659 289C457.942 425.476 308 527 213 527M1132 380C1043 354.667 891 278 685 355C509.757 420.504 405 516 297 527"
                    stroke="url(#paint0_linear_1145_531)" stroke-width="2" />
                <defs>
                    <linearGradient id="paint0_linear_1145_531" x1="566.5" y1="1.10791" x2="566.5"
                        y2="527" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="var(--primary)" stop-opacity="0.2" />
                        <stop offset="0.526042" stop-color="var(--primary)" />
                        <stop offset="1" stop-color="var(--primary)" stop-opacity="0.2" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="35" height="35" viewBox="0 0 50 53" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="line-2"
                        d="M0 25C0 20.3801 1.28016 15.8505 3.69839 11.9141C6.11663 7.97761 9.57835 4.78822 13.6993 2.69989C17.8203 0.611568 22.4394 -0.294006 27.0438 0.0836832C31.6483 0.461372 36.058 2.10755 39.7836 4.8395L33.2788 13.7101C31.1925 12.1802 28.723 11.2584 26.1445 11.0469C23.566 10.8354 20.9794 11.3425 18.6716 12.5119C16.3639 13.6814 14.4253 15.4675 13.0711 17.6719C11.7169 19.8763 11 22.4128 11 25H0Z"
                        fill="#374557" />
                    <path class="line-2"
                        d="M50 28C50 34.6304 47.3661 40.9893 42.6777 45.6777C37.9893 50.3661 31.6304 53 25 53C18.3696 53 12.0107 50.3661 7.32233 45.6777C2.63392 40.9893 1.00116e-06 34.6304 0 28L11 28C11 31.713 12.475 35.274 15.1005 37.8995C17.726 40.525 21.287 42 25 42C28.713 42 32.274 40.525 34.8995 37.8995C37.525 35.274 39 31.713 39 28H50Z"
                        fill="var(--primary)" />
                    <path class="line-2" d="M25 28H50L37 47L25 28Z" fill="var(--primary)" />
                </svg>
                <svg class="brand-title" width="304" height="50" viewBox="0 0 282 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="line-3"
                        d="M30.68 20.2C29.92 18.8 28.82 17.74 27.38 17.02C25.98 16.26 24.32 15.88 22.4 15.88C19.08 15.88 16.42 16.98 14.42 19.18C12.42 21.34 11.42 24.24 11.42 27.88C11.42 31.76 12.46 34.8 14.54 37C16.66 39.16 19.56 40.24 23.24 40.24C25.76 40.24 27.88 39.6 29.6 38.32C31.36 37.04 32.64 35.2 33.44 32.8H20.42V25.24H42.74V34.78C41.98 37.34 40.68 39.72 38.84 41.92C37.04 44.12 34.74 45.9 31.94 47.26C29.14 48.62 25.98 49.3 22.46 49.3C18.3 49.3 14.58 48.4 11.3 46.6C8.06 44.76 5.52 42.22 3.68 38.98C1.88 35.74 0.98 32.04 0.98 27.88C0.98 23.72 1.88 20.02 3.68 16.78C5.52 13.5 8.06 10.96 11.3 9.16C14.54 7.32 18.24 6.4 22.4 6.4C27.44 6.4 31.68 7.62 35.12 10.06C38.6 12.5 40.9 15.88 42.02 20.2H30.68ZM79.9831 31.72C79.9831 32.68 79.9231 33.68 79.8031 34.72H56.5831C56.7431 36.8 57.4031 38.4 58.5631 39.52C59.7631 40.6 61.2231 41.14 62.9431 41.14C65.5031 41.14 67.2831 40.06 68.2831 37.9H79.2031C78.6431 40.1 77.6231 42.08 76.1431 43.84C74.7031 45.6 72.8831 46.98 70.6831 47.98C68.4831 48.98 66.0231 49.48 63.3031 49.48C60.0231 49.48 57.1031 48.78 54.5431 47.38C51.9831 45.98 49.9831 43.98 48.5431 41.38C47.1031 38.78 46.3831 35.74 46.3831 32.26C46.3831 28.78 47.0831 25.74 48.4831 23.14C49.9231 20.54 51.9231 18.54 54.4831 17.14C57.0431 15.74 59.9831 15.04 63.3031 15.04C66.5431 15.04 69.4231 15.72 71.9431 17.08C74.4631 18.44 76.4231 20.38 77.8231 22.9C79.2631 25.42 79.9831 28.36 79.9831 31.72ZM69.4831 29.02C69.4831 27.26 68.8831 25.86 67.6831 24.82C66.4831 23.78 64.9831 23.26 63.1831 23.26C61.4631 23.26 60.0031 23.76 58.8031 24.76C57.6431 25.76 56.9231 27.18 56.6431 29.02H69.4831ZM104.056 40.3V49H98.8358C95.1158 49 92.2158 48.1 90.1358 46.3C88.0558 44.46 87.0158 41.48 87.0158 37.36V24.04H82.9358V15.52H87.0158V7.36H97.2758V15.52H103.996V24.04H97.2758V37.48C97.2758 38.48 97.5158 39.2 97.9958 39.64C98.4758 40.08 99.2758 40.3 100.396 40.3H104.056ZM275.118 49.48C273.318 49.48 271.838 48.96 270.678 47.92C269.558 46.84 268.998 45.52 268.998 43.96C268.998 42.36 269.558 41.02 270.678 39.94C271.838 38.86 273.318 38.32 275.118 38.32C276.878 38.32 278.318 38.86 279.438 39.94C280.598 41.02 281.178 42.36 281.178 43.96C281.178 45.52 280.598 46.84 279.438 47.92C278.318 48.96 276.878 49.48 275.118 49.48Z"
                        fill="var(--primary)" />
                    <path class="line-3"
                        d="M125.011 49.42C121.931 49.42 119.171 48.92 116.731 47.92C114.291 46.92 112.331 45.44 110.851 43.48C109.411 41.52 108.651 39.16 108.571 36.4H119.491C119.651 37.96 120.191 39.16 121.111 40C122.031 40.8 123.231 41.2 124.711 41.2C126.231 41.2 127.431 40.86 128.311 40.18C129.191 39.46 129.631 38.48 129.631 37.24C129.631 36.2 129.271 35.34 128.551 34.66C127.871 33.98 127.011 33.42 125.971 32.98C124.971 32.54 123.531 32.04 121.651 31.48C118.931 30.64 116.711 29.8 114.991 28.96C113.271 28.12 111.791 26.88 110.551 25.24C109.311 23.6 108.691 21.46 108.691 18.82C108.691 14.9 110.111 11.84 112.951 9.64C115.791 7.4 119.491 6.28 124.051 6.28C128.691 6.28 132.431 7.4 135.271 9.64C138.111 11.84 139.631 14.92 139.831 18.88H128.731C128.651 17.52 128.151 16.46 127.231 15.7C126.311 14.9 125.131 14.5 123.691 14.5C122.451 14.5 121.451 14.84 120.691 15.52C119.931 16.16 119.551 17.1 119.551 18.34C119.551 19.7 120.191 20.76 121.471 21.52C122.751 22.28 124.751 23.1 127.471 23.98C130.191 24.9 132.391 25.78 134.071 26.62C135.791 27.46 137.271 28.68 138.511 30.28C139.751 31.88 140.371 33.94 140.371 36.46C140.371 38.86 139.751 41.04 138.511 43C137.311 44.96 135.551 46.52 133.231 47.68C130.911 48.84 128.171 49.42 125.011 49.42ZM167.145 49L156.945 34.96V49H146.685V4.6H156.945V29.14L167.085 15.52H179.745L165.825 32.32L179.865 49H167.145ZM188.935 12.04C187.135 12.04 185.655 11.52 184.495 10.48C183.375 9.4 182.815 8.08 182.815 6.52C182.815 4.92 183.375 3.6 184.495 2.56C185.655 1.48 187.135 0.939996 188.935 0.939996C190.695 0.939996 192.135 1.48 193.255 2.56C194.415 3.6 194.995 4.92 194.995 6.52C194.995 8.08 194.415 9.4 193.255 10.48C192.135 11.52 190.695 12.04 188.935 12.04ZM194.035 15.52V49H183.775V15.52H194.035ZM211.73 4.6V49H201.47V4.6H211.73ZM229.425 4.6V49H219.165V4.6H229.425ZM250.481 49.48C247.561 49.48 244.961 48.98 242.681 47.98C240.401 46.98 238.601 45.62 237.281 43.9C235.961 42.14 235.221 40.18 235.061 38.02H245.201C245.321 39.18 245.861 40.12 246.821 40.84C247.781 41.56 248.961 41.92 250.361 41.92C251.641 41.92 252.621 41.68 253.301 41.2C254.021 40.68 254.381 40.02 254.381 39.22C254.381 38.26 253.881 37.56 252.881 37.12C251.881 36.64 250.261 36.12 248.021 35.56C245.621 35 243.621 34.42 242.021 33.82C240.421 33.18 239.041 32.2 237.881 30.88C236.721 29.52 236.141 27.7 236.141 25.42C236.141 23.5 236.661 21.76 237.701 20.2C238.781 18.6 240.341 17.34 242.381 16.42C244.461 15.5 246.921 15.04 249.761 15.04C253.961 15.04 257.261 16.08 259.661 18.16C262.101 20.24 263.501 23 263.861 26.44H254.381C254.221 25.28 253.701 24.36 252.821 23.68C251.981 23 250.861 22.66 249.461 22.66C248.261 22.66 247.341 22.9 246.701 23.38C246.061 23.82 245.741 24.44 245.741 25.24C245.741 26.2 246.241 26.92 247.241 27.4C248.281 27.88 249.881 28.36 252.041 28.84C254.521 29.48 256.541 30.12 258.101 30.76C259.661 31.36 261.021 32.36 262.181 33.76C263.381 35.12 264.001 36.96 264.041 39.28C264.041 41.24 263.481 43 262.361 44.56C261.281 46.08 259.701 47.28 257.621 48.16C255.581 49.04 253.201 49.48 250.481 49.48Z"
                        fill="#374557" />
                </svg>





            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16"
                                                height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2"
                                                rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/3.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/4.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/5.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/3.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/4.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{asset('images/avatar/5.jpg')}}" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dlab-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);" class="dlab-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10"
                                                rx="1" />
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12"
                                                    r="2" />
                                                <circle fill="#000000" cx="12" cy="12"
                                                    r="2" />
                                                <circle fill="#000000" cx="19" cy="12"
                                                    r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i>
                                            View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to
                                            btn-close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to
                                            group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/3.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src={{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="{{asset('images/avatar/1.jpg')}}" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i
                                                class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU</div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU</div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO</div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16"
                                                height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2"
                                                rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <div class="navbar-nav header-right">
                            <div class="nav-item d-flex align-items-center">
                                <div class="input-group search-area">
                                    <span class="input-group-text"><a href="javascript:void(0)"><svg width="24"
                                                height="24" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z"
                                                    fill="var(--secondary)" />
                                            </svg>
                                        </a></span>
                                    <input type="text" class="form-control" placeholder="Search here...">
                                </div>
                            </div>
                            <div class="dlab-side-menu">
                                <div class="search-coundry d-flex align-items-center" >
                                    <label for="locale">
                                        <img src="{{asset('images/13.webp')}}" alt="" style="width: 35px; border-radius:50%" >
                                    </label>
                                    <select class="default-select dashboard-select image-select" id="locale" >
                                        <option value="en" @ @if (session()->get('lang') == 'en') selected @endif>Eng

                                        </option>
                                        <option value="ru" @if (session()->get('lang') == 'ru') selected @endif>Ru
                                        </option>
                                        <option value="uz" @if (session()->get('lang') == 'uz') selected @endif>Uz
                                        </option>
                                    </select>
                                </div>
                                <div class="sidebar-social-link ">
                                    <ul>
                                        <li class="nav-item dropdown notification_dropdown">
                                            <a class="nav-link " href="javascript:void(0);"
                                                data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M20.4023 13.4798C20.7599 13.6577 21.0359 13.9387 21.23 14.2197C21.6082 14.8003 21.5775 15.5121 21.2096 16.1395L20.4942 17.2634C20.1161 17.8627 19.411 18.2373 18.6854 18.2373C18.3277 18.2373 17.9291 18.1437 17.6021 17.9564C17.3364 17.7972 17.0298 17.741 16.7028 17.741C15.691 17.741 14.8428 18.5183 14.8121 19.4455C14.8121 20.5225 13.8719 21.3653 12.6967 21.3653H11.3068C10.1214 21.3653 9.18116 20.5225 9.18116 19.4455C9.16072 18.5183 8.3125 17.741 7.30076 17.741C6.96351 17.741 6.65693 17.7972 6.40144 17.9564C6.07441 18.1437 5.66563 18.2373 5.31816 18.2373C4.58235 18.2373 3.8772 17.8627 3.49908 17.2634L2.79393 16.1395C2.4158 15.5308 2.39536 14.8003 2.77349 14.2197C2.937 13.9387 3.24359 13.6577 3.59106 13.4798C3.8772 13.3487 4.06116 13.1333 4.23489 12.8804C4.74587 12.075 4.43928 11.0167 3.57062 10.5391C2.55888 10.0053 2.23185 8.81591 2.81437 7.88875L3.49908 6.78366C4.09181 5.8565 5.35904 5.52871 6.381 6.0719C7.2701 6.52143 8.42491 6.22174 8.94611 5.4257C9.10962 5.16347 9.2016 4.88251 9.18116 4.60156C9.16072 4.23631 9.27314 3.8898 9.46731 3.60884C9.84543 3.0282 10.5301 2.65359 11.2762 2.63486H12.7171C13.4734 2.63486 14.1581 3.0282 14.5362 3.60884C14.7202 3.8898 14.8428 4.23631 14.8121 4.60156C14.7917 4.88251 14.8837 5.16347 15.0472 5.4257C15.5684 6.22174 16.7232 6.52143 17.6225 6.0719C18.6343 5.52871 19.9117 5.8565 20.4942 6.78366L21.1789 7.88875C21.7717 8.81591 21.4447 10.0053 20.4227 10.5391C19.554 11.0167 19.2474 12.075 19.7686 12.8804C19.9322 13.1333 20.1161 13.3487 20.4023 13.4798ZM9.10962 12.0095C9.10962 13.4798 10.4075 14.6505 12.012 14.6505C13.6165 14.6505 14.8837 13.4798 14.8837 12.0095C14.8837 10.5391 13.6165 9.3591 12.012 9.3591C10.4075 9.3591 9.10962 10.5391 9.10962 12.0095Z"
                                                        fill="#130F26" />
                                                </svg>

                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div id="DZ_W_TimeLine02"
                                                    class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
                                                    <h4 class="text-center border-bottom pb-2">Notications</h4>
                                                    <ul class="timeline">
                                                        <li>
                                                            <div class="timeline-badge primary"></div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>10 minutes ago</span>
                                                                <h6 class="mb-0">Youtube, a video-sharing website,
                                                                    goes live <strong
                                                                        class="text-primary">$500</strong>.</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge info">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">New order placed <strong
                                                                        class="text-info">#XF-2356.</strong></h6>
                                                                <p class="mb-0">Quisque a consequat ante Sit amet
                                                                    magna at volutapt...</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>30 minutes ago</span>
                                                                <h6 class="mb-0">john just buy your product <strong
                                                                        class="text-warning">Sell $250</strong></h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge success">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>15 minutes ago</span>
                                                                <h6 class="mb-0">StumbleUpon is acquired by eBay.
                                                                </h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge warning">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">Mashable, a news website and blog,
                                                                    goes live.</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge ">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">Mashable, a news website and blog,
                                                                    goes live.</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge primary"></div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>10 minutes ago</span>
                                                                <h6 class="mb-0">Youtube, a video-sharing website,
                                                                    goes live <strong
                                                                        class="text-primary">$500</strong>.</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge info">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">New order placed <strong
                                                                        class="text-info">#XF-2356.</strong></h6>
                                                                <p class="mb-0">Quisque a consequat ante Sit amet
                                                                    magna at volutapt...</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>30 minutes ago</span>
                                                                <h6 class="mb-0">john just buy your product <strong
                                                                        class="text-warning">Sell $250</strong></h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge success">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>15 minutes ago</span>
                                                                <h6 class="mb-0">StumbleUpon is acquired by eBay.
                                                                </h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge warning">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">Mashable, a news website and blog,
                                                                    goes live.</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge ">
                                                            </div>
                                                            <a class="timeline-panel text-muted"
                                                                href="javascript:void(0);">
                                                                <span>20 minutes ago</span>
                                                                <h6 class="mb-0">Mashable, a news website and blog,
                                                                    goes live.</h6>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="all-notification" href="javascript:void(0);">See all
                                                    notifications <i class="ti-arrow-end"></i></a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown notification_dropdown">
                                            <a class="nav-link bell-link " href="javascript:void(0);">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M16.9394 3.57129C18.2804 3.57129 19.5704 4.06765 20.5194 4.95828C21.4694 5.84704 22.0004 7.04579 22.0004 8.30073V15.6993C22.0004 18.3122 19.7304 20.4287 16.9394 20.4287H7.0604C4.2694 20.4287 2.0004 18.3122 2.0004 15.6993V8.30073C2.0004 5.68783 4.2594 3.57129 7.0604 3.57129H16.9394ZM18.5304 9.69615L18.6104 9.62123C18.8494 9.34964 18.8494 8.9563 18.5994 8.68471C18.4604 8.54517 18.2694 8.45994 18.0704 8.44121C17.8604 8.43091 17.6604 8.4974 17.5094 8.62852L13.0004 12C12.4204 12.4505 11.5894 12.4505 11.0004 12L6.5004 8.62852C6.1894 8.41312 5.7594 8.44121 5.5004 8.69407C5.2304 8.94693 5.2004 9.34964 5.4294 9.6306L5.5604 9.75234L10.1104 13.077C10.6704 13.4891 11.3494 13.7138 12.0604 13.7138C12.7694 13.7138 13.4604 13.4891 14.0194 13.077L18.5304 9.69615Z"
                                                        fill="#130F26" />
                                                </svg>

                                            </a>
                                        </li>
                                        <li class="nav-item dropdown notification_dropdown">
                                            <a class="nav-link" href="javascript:void(0);" role="button"
                                                data-bs-toggle="dropdown">
                                                <svg width="24" height="23" viewBox="0 0 24 23"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M18.7071 8.56414C18.7071 9.74035 19.039 10.4336 19.7695 11.2325C20.3231 11.8211 20.5 12.5766 20.5 13.3963C20.5 14.215 20.2128 14.9923 19.6373 15.6233C18.884 16.3798 17.8215 16.8627 16.7372 16.9466C15.1659 17.0721 13.5937 17.1777 12.0005 17.1777C10.4063 17.1777 8.83505 17.1145 7.26375 16.9466C6.17846 16.8627 5.11602 16.3798 4.36367 15.6233C3.78822 14.9923 3.5 14.215 3.5 13.3963C3.5 12.5766 3.6779 11.8211 4.23049 11.2325C4.98384 10.4336 5.29392 9.74035 5.29392 8.56414V8.16515C5.29392 6.58996 5.71333 5.55995 6.577 4.55164C7.86106 3.08114 9.91935 2.19922 11.9558 2.19922H12.0452C14.1254 2.19922 16.2502 3.12359 17.5125 4.65728C18.3314 5.64484 18.7071 6.63146 18.7071 8.16515V8.56414ZM9.07367 19.1136C9.07367 18.642 9.53582 18.426 9.96318 18.3336C10.4631 18.2345 13.5093 18.2345 14.0092 18.3336C14.4366 18.426 14.8987 18.642 14.8987 19.1136C14.8738 19.5626 14.5926 19.9606 14.204 20.2134C13.7001 20.5813 13.1088 20.8143 12.4906 20.8982C12.1487 20.9397 11.8128 20.9407 11.4828 20.8982C10.8636 20.8143 10.2723 20.5813 9.76938 20.2125C9.37978 19.9606 9.09852 19.5626 9.07367 19.1136Z"
                                                        fill="#130F26" />
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3"
                                                    style="height:380px;">
                                                    <ul class="timeline">
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50"
                                                                        src="{{asset('images/avatar/1.jpg')}}">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-info">
                                                                    KG
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Resport created successfully
                                                                    </h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-success">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50"
                                                                        src="{{asset('images/avatar/1.jpg')}}">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-danger">
                                                                    KG
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Resport created successfully
                                                                    </h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-primary">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50"
                                                                        src="{{asset('images/avatar/1.jpg')}}">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-info">
                                                                    KG
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Resport created successfully
                                                                    </h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-success">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50"
                                                                        src="{{asset('images/avatar/1.jpg')}}">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-danger">
                                                                    KG
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Resport created successfully
                                                                    </h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2 media-primary">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                    <small class="d-block">29 July 2020 - 02:26
                                                                        PM</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="all-notification" href="javascript:void(0);">See all
                                                    notifications <i class="ti-arrow-end"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul>
                                    <li class="nav-item dropdown header-profile">
                                        <a class="nav-link" href="javascript:void(0);" role="button"
                                            data-bs-toggle="dropdown">
                                            <img src="{{asset('images/profile/pic1.jpg')}}" width="20" alt="" />
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="./app-profile.html" class="dropdown-item ai-icon">
                                                <svg id="icon-user2" xmlns="http://www.w3.org/2000/svg"
                                                    class="text-primary" width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <span class="ms-2">Profile </span>
                                            </a>
                                            <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                                <svg id="icon-inbox1" xmlns="http://www.w3.org/2000/svg"
                                                    class="text-success" width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                    </path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                                <span class="ms-2">Inbox </span>
                                            </a>
                                            <a class="dropdown-item ai-icon" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                             width="18" height="18" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                             <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                             <polyline points="16 17 21 12 16 7"></polyline>
                                             <line x1="21" y1="12" x2="9"
                                                 y2="12"></line>
                                         </svg>
                                         <span class="ms-2">                                             {{ __('Logout') }}
                                        </span>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                         </a>






                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <i class="bi bi-grid"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.html">Dashboard Light</a></li>
                            <li><a href="index-2.html">Dashboard Dark</a></li>
                            <li><a href="schedule.html">schedule</a></li>
                            <li><a href="instructors.html">Instructors</a></li>
                            <li><a href="message.html">Message</a></li>
                            <li><a href="activity.html">Activity</a></li>
                            <li><a href="profile.html">Profile</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <i class="bi bi-book"></i>

                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/admin/teacher') }}">Teacher</a></li>
                            <li><a href="{{ url('/admin/user') }}">Student</a></li>

                        </ul>

                    </li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <i class="bi bi-book"></i>

                            <span class="nav-text">Kafedra</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url("/admin/kafedra") }}">Kafedra</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <i class="bi bi-book"></i>

                            <span class="nav-text">Group</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/admin/group') }}">Groups</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <i class="bi bi-book"></i>

                            <span class="nav-text">Rools & Language</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/admin/rolls') }}">Rools</a></li>
                            <li><a href="{{ url('/admin/lang') }}">Language</a></li>

                        </ul>

                    </li>


                </ul>

                <div class="copyright">
                    <p><strong>GetSkills Online Learning Admin</strong> © 2022 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by HugeBinarys</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed by <a href="https://themeforest.net/user/hugebinary"
                        target="_blank">HugeBinary</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('./vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('./vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('./vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('./vendor/apexchart/apexchart.js') }}"></script>

    <script src="{{ asset('./vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('./vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('./vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('./js/plugins-init/datatables.init.js') }}"></script>

    <script src="{{ asset('./vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('./js/plugins-init/sweetalert.init.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('./js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('./js/custom.js') }}"></script>
    <script src="{{ asset('./js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('./js/demo.js') }}"></script>
    <script src="{{ asset('./js/styleSwitcher.js') }}"></script>
    <script>
                      $(function() {
            var url = "/kafedra";
            $('#locale').change(function() {
                a = $(this).val();
                console.log(a);
                window.location.href = url + "/" + a;
            })
        })

                     $(function() {
                    $('#datetimepicker').datetimepicker({
                        inline: true,
                    });
                });

                $(document).ready(function() {
                    $(".booking-calender .fa.fa-clock-o").removeClass(this);
                    $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
                });


    </script>
    @yield('script')
</body>

</html>
