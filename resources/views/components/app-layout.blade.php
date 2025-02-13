<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sogebank</title>
    <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white h-dvh flex overflow-hidden ">
{{--Navigation--}}
<nav class="w-[300px] bg-white h-full hidden lg:flex flex-col gap-10 py-6 border-r">
    <div class="w-full flex items-center justify-center">

        <img src="{{'/assets/images/logo-wide.jpg'}}" width="183" class="" alt="Logo sogebank wide"/>
    </div>
    <ul class="w-full flex flex-col gap-6">
        <li>
            <a href="/"
               class=" text-[18px] group py-2 font-medium hover:text-primary-3 border-l-[6px] border-transparent transition-all duration-300 flex items-center  {{Request::is('/') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                <svg width="25" height="25" viewBox="0 0 25 25" class="mr-5 ml-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_105_76)">
                        <path d="M24.3254 10.8738C24.3248 10.8732 24.3243 10.8727 24.3237 10.8721L14.1257 0.674438C13.691 0.239563 13.1131 0 12.4983 0C11.8836 0 11.3057 0.239372 10.8708 0.674248L0.678111 10.8667C0.674678 10.8702 0.671244 10.8738 0.667811 10.8772C-0.224828 11.775 -0.223302 13.2317 0.672198 14.1272C1.08132 14.5365 1.62168 14.7736 2.19941 14.7984C2.22287 14.8006 2.24652 14.8018 2.27037 14.8018H2.67682V22.3066C2.67682 23.7917 3.88513 25 5.37057 25H9.36036C9.76472 25 10.0928 24.6721 10.0928 24.2676V18.3838C10.0928 17.7061 10.644 17.1549 11.3217 17.1549H13.675C14.3527 17.1549 14.9039 17.7061 14.9039 18.3838V24.2676C14.9039 24.6721 15.2318 25 15.6363 25H19.6261C21.1115 25 22.3198 23.7917 22.3198 22.3066V14.8018H22.6967C23.3113 14.8018 23.8892 14.5624 24.3243 14.1275C25.2207 13.2305 25.2211 11.7714 24.3254 10.8738Z" />
                    </g>
                    <defs>
                        <clipPath id="clip0_105_76">
                            <rect width="25" height="25" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                Dashboard</a>
        </li>
        <li>
            <a href="/transactions"
               class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('transactions') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                <svg width="25" height="25" viewBox="0 0 25 25" class="mr-5 ml-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_78_393)">
                        <path d="M5.20831 22.9167C5.20897 23.469 5.42867 23.9986 5.81923 24.3891C6.20979 24.7797 6.73931 24.9994 7.29165 25H17.7083C18.2606 24.9994 18.7902 24.7797 19.1807 24.3891C19.5713 23.9986 19.791 23.469 19.7916 22.9167V22.0052H5.20831V22.9167Z" fill="currentColor"/>
                        <path d="M19.7916 2.08333C19.791 1.531 19.5713 1.00148 19.1807 0.610917C18.7902 0.220358 18.2606 0.00065473 17.7083 0L7.29165 0C6.73931 0.00065473 6.20979 0.220358 5.81923 0.610917C5.42867 1.00148 5.20897 1.531 5.20831 2.08333V3.125H19.7916V2.08333Z" fill="currentColor"/>
                        <path d="M24.7097 6.70052L21.5847 3.44531L20.0819 4.88802L21.3893 6.25H19.7916V8.33333H21.5017L20.1126 9.66459L21.554 11.1688L24.679 8.17396C24.7778 8.07926 24.857 7.96602 24.912 7.8407C24.9671 7.71538 24.9968 7.58045 24.9997 7.44361C25.0026 7.30677 24.9784 7.17071 24.9287 7.04321C24.8789 6.91571 24.8045 6.79926 24.7097 6.70052Z" fill="currentColor"/>
                        <path d="M16.6666 6.24996H19.7916V4.16663H5.20831V16.6666H8.33331V18.75H5.20831V20.8333H19.7916V8.33329H16.6666V6.24996ZM15.625 10.4166H11.9791C11.841 10.4166 11.7085 10.4715 11.6109 10.5692C11.5132 10.6669 11.4583 10.7993 11.4583 10.9375C11.4583 11.0756 11.5132 11.2081 11.6109 11.3057C11.7085 11.4034 11.841 11.4583 11.9791 11.4583H13.0208C13.6666 11.4576 14.2896 11.697 14.7689 12.1298C15.2482 12.5627 15.5495 13.1582 15.6144 13.8007C15.6793 14.4433 15.5032 15.087 15.1201 15.607C14.7371 16.1269 14.1745 16.486 13.5416 16.6145V17.7083H11.4583V16.6666H9.37498V14.5833H13.0208C13.1589 14.5833 13.2914 14.5284 13.3891 14.4307C13.4868 14.3331 13.5416 14.2006 13.5416 14.0625C13.5416 13.9243 13.4868 13.7919 13.3891 13.6942C13.2914 13.5965 13.1589 13.5416 13.0208 13.5416H11.9791C11.3333 13.5423 10.7103 13.3029 10.2311 12.8701C9.75179 12.4372 9.45045 11.8417 9.38555 11.1992C9.32064 10.5566 9.4968 9.9129 9.87983 9.39294C10.2629 8.87298 10.8254 8.51389 11.4583 8.38538V7.29163H13.5416V8.33329H15.625V10.4166Z" fill="currentColor"/>
                        <path d="M3.49828 16.6667L4.88734 15.3355L3.44593 13.8313L0.320931 16.8261C0.222115 16.9208 0.142929 17.034 0.0879011 17.1594C0.0328728 17.2847 0.00308028 17.4196 0.000226477 17.5564C-0.00262733 17.6933 0.0215135 17.8293 0.0712692 17.9568C0.121025 18.0843 0.19542 18.2008 0.290202 18.2995L3.4152 21.5547L4.91807 20.112L3.61064 18.75H5.2083V16.6667H3.49828Z" fill="currentColor"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_105_76">
                            <rect width="25" height="25" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                Transactions</a>
        </li>
        <li>
            <a href="/account"
               class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                <svg width="25" height="25" viewBox="0 0 25 25" class="mr-5 ml-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_78_414)">
                        <path d="M12.3219 12.0426C13.9763 12.0426 15.4089 11.4492 16.5794 10.2785C17.75 9.10793 18.3434 7.67571 18.3434 6.02109C18.3434 4.36705 17.75 2.93463 16.5792 1.76372C15.4085 0.593374 13.9761 0 12.3219 0C10.6672 0 9.235 0.593374 8.06446 1.76391C6.89392 2.93444 6.30035 4.36686 6.30035 6.02109C6.30035 7.67571 6.89392 9.10813 8.06465 10.2787C9.23538 11.449 10.6678 12.0426 12.3219 12.0426Z" />
                        <path d="M22.8579 19.2237C22.8241 18.7366 22.7558 18.2052 22.6553 17.644C22.5538 17.0787 22.4232 16.5443 22.2668 16.0558C22.1052 15.5509 21.8855 15.0523 21.6139 14.5745C21.332 14.0786 21.0009 13.6468 20.6293 13.2915C20.2408 12.9197 19.7651 12.6209 19.215 12.4028C18.6668 12.186 18.0593 12.0761 17.4095 12.0761C17.1543 12.0761 16.9075 12.1808 16.4309 12.4912C16.1375 12.6825 15.7944 12.9037 15.4114 13.1484C15.0839 13.3571 14.6402 13.5526 14.0923 13.7296C13.5576 13.9026 13.0148 13.9903 12.479 13.9903C11.9432 13.9903 11.4006 13.9026 10.8654 13.7296C10.318 13.5528 9.87434 13.3573 9.54723 13.1486C9.16786 12.9062 8.82454 12.6849 8.5268 12.491C8.05073 12.1806 7.80373 12.0759 7.54852 12.0759C6.8985 12.0759 6.2912 12.186 5.74322 12.403C5.19352 12.6207 4.71764 12.9195 4.32873 13.2917C3.95737 13.6472 3.62606 14.0788 3.34454 14.5745C3.07312 15.0523 2.85339 15.5507 2.69165 16.056C2.53544 16.5444 2.40479 17.0787 2.30331 17.644C2.2028 18.2044 2.13451 18.736 2.10075 19.2243C2.06757 19.7026 2.05078 20.1991 2.05078 20.7005C2.05078 22.0055 2.46563 23.062 3.28369 23.8412C4.09164 24.61 5.16071 25.0001 6.46076 25.0001H18.4984C19.7985 25.0001 20.8672 24.6102 21.6753 23.8412C22.4936 23.0626 22.9084 22.0059 22.9084 20.7003C22.9082 20.1966 22.8912 19.6998 22.8579 19.2237Z" />
                    </g>
                    <defs>
                        <clipPath id="clip0_105_76">
                            <rect width="25" height="25" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                Compte</a>
        </li>
        <li>
            <a href="/settings"
               class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('settings') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                <svg width="25" height="25" viewBox="0 0 25 25" class="mr-5 ml-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_78_374)">
                        <path d="M22.6985 9.41406H22.1678C21.9954 8.87451 21.7778 8.35039 21.5172 7.84683L21.8931 7.47095C22.8045 6.56055 22.7801 5.10156 21.8934 4.21582L20.7845 3.10693C19.8993 2.22056 18.44 2.19487 17.5293 3.10659L17.1532 3.48276C16.6496 3.22222 16.1254 3.00464 15.5859 2.83223V2.30142C15.5859 1.03242 14.5535 0 13.2845 0H11.7155C10.4465 0 9.41406 1.03242 9.41406 2.30142V2.83223C8.87456 3.00459 8.35039 3.22217 7.84683 3.48276L7.471 3.10693C6.56216 2.19702 5.10293 2.21836 4.21592 3.10664L3.10688 4.21558C2.22056 5.10093 2.19492 6.56001 3.10659 7.4707L3.48276 7.84687C3.22217 8.35044 3.00464 8.87451 2.83223 9.41411H2.30146C1.03247 9.41406 0 10.4465 0 11.7155V13.2845C0 14.5535 1.03247 15.5859 2.30146 15.5859H2.83223C3.00464 16.1255 3.22217 16.6496 3.48276 17.1532L3.10688 17.5291C2.19551 18.4395 2.21992 19.8984 3.10659 20.7842L4.21553 21.8931C5.10073 22.7794 6.56001 22.8051 7.47065 21.8934L7.84683 21.5172C8.35039 21.7778 8.87456 21.9954 9.41406 22.1678V22.6986C9.41406 23.9676 10.4465 25 11.7155 25H13.2845C14.5535 25 15.586 23.9676 15.586 22.6986V22.1678C16.1255 21.9954 16.6497 21.7778 17.1532 21.5172L17.5291 21.8931C18.4379 22.803 19.8971 22.7816 20.7841 21.8934L21.8932 20.7844C22.7795 19.899 22.8051 18.4399 21.8935 17.5292L21.5173 17.1531C21.7779 16.6495 21.9954 16.1254 22.1678 15.5858H22.6986C23.9676 15.5858 25 14.5534 25 13.2844V11.7154C25 10.4465 23.9675 9.41406 22.6985 9.41406ZM12.5 17.9395C9.50064 17.9395 7.06055 15.4993 7.06055 12.5C7.06055 9.50068 9.50064 7.06055 12.5 7.06055C15.4994 7.06055 17.9395 9.50068 17.9395 12.5C17.9395 15.4993 15.4994 17.9395 12.5 17.9395Z"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_105_76">
                            <rect width="25" height="25" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                Paramètres</a>
        </li>
    </ul>
</nav>
<div class=" bg-[#f6f7fb] h-full w-full">
    {{--Top bar--}}
    <div class="bg-white py-4 px-4 flex items-center justify-between">
        <div class="lg:hidden cursor-pointer" id="nav-menu-open">
            <img src="{{'assets/icons/menu.svg'}}" class="btn-menu-open w-[24px]" alt="menu icon">
            <img src="{{'assets/icons/close.svg'}}" class="btn-menu-close hidden" alt="close icon">
        </div>
        <p class="text-primary-2 font-semibold text-[28px]">Aperçu</p>
        <div class="flex items-center  gap-10">
            <div class="bg-[#F5F7FA] p-4 hidden lg:flex gap-3 rounded-full">
                <img src="{{'assets/icons/search.svg'}}" alt="search icon">
                <p class="text-[#718EBF]">Recherchez quelques chose...</p>
            </div>
            <a href="/settings"
               class="w-[60px] h-[60px] rounded-full bg-[#F5F7FA] hidden lg:flex items-center justify-center font-semibold text-[#718EBF]">
                <img src="{{'assets/icons/settings2.svg'}}" alt="settings icon">
            </a>
            <a href="/account"
               class="w-[60px] h-[60px] rounded-full bg-[#F5F7FA] flex items-center justify-center text-[28px] font-semibold text-primary-2">
                JD
            </a>
        </div>
    </div>
    <nav class="w-[250px] overflow-hidden lg:hidden mobile-nav max-w-[250px] bg-white h-full absolute -translate-x-full transition-all duration-300 flex flex-col gap-10 py-6 border-r">
        <ul class="w-full flex flex-col gap-6">
            <li>
                <a href="/"
                   class=" text-[18px] group py-2 font-medium hover:text-primary-3 border-l-[6px] border-transparent transition-all duration-300 flex items-center  {{Request::is('/') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                    <svg width="25" height="25" viewBox="0 0 25 25" class="mr-5 ml-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_105_76)">
                            <path d="M24.3254 10.8738C24.3248 10.8732 24.3243 10.8727 24.3237 10.8721L14.1257 0.674438C13.691 0.239563 13.1131 0 12.4983 0C11.8836 0 11.3057 0.239372 10.8708 0.674248L0.678111 10.8667C0.674678 10.8702 0.671244 10.8738 0.667811 10.8772C-0.224828 11.775 -0.223302 13.2317 0.672198 14.1272C1.08132 14.5365 1.62168 14.7736 2.19941 14.7984C2.22287 14.8006 2.24652 14.8018 2.27037 14.8018H2.67682V22.3066C2.67682 23.7917 3.88513 25 5.37057 25H9.36036C9.76472 25 10.0928 24.6721 10.0928 24.2676V18.3838C10.0928 17.7061 10.644 17.1549 11.3217 17.1549H13.675C14.3527 17.1549 14.9039 17.7061 14.9039 18.3838V24.2676C14.9039 24.6721 15.2318 25 15.6363 25H19.6261C21.1115 25 22.3198 23.7917 22.3198 22.3066V14.8018H22.6967C23.3113 14.8018 23.8892 14.5624 24.3243 14.1275C25.2207 13.2305 25.2211 11.7714 24.3254 10.8738Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_105_76">
                                <rect width="25" height="25" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Dashboard</a>
            </li>
            <li>
                <a href="/transactions"
                   class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('transactions') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                    <svg width="25" height="25" viewBox="0 0 25 25" class="mr-5 ml-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_78_393)">
                            <path d="M5.20831 22.9167C5.20897 23.469 5.42867 23.9986 5.81923 24.3891C6.20979 24.7797 6.73931 24.9994 7.29165 25H17.7083C18.2606 24.9994 18.7902 24.7797 19.1807 24.3891C19.5713 23.9986 19.791 23.469 19.7916 22.9167V22.0052H5.20831V22.9167Z" fill="currentColor"/>
                            <path d="M19.7916 2.08333C19.791 1.531 19.5713 1.00148 19.1807 0.610917C18.7902 0.220358 18.2606 0.00065473 17.7083 0L7.29165 0C6.73931 0.00065473 6.20979 0.220358 5.81923 0.610917C5.42867 1.00148 5.20897 1.531 5.20831 2.08333V3.125H19.7916V2.08333Z" fill="currentColor"/>
                            <path d="M24.7097 6.70052L21.5847 3.44531L20.0819 4.88802L21.3893 6.25H19.7916V8.33333H21.5017L20.1126 9.66459L21.554 11.1688L24.679 8.17396C24.7778 8.07926 24.857 7.96602 24.912 7.8407C24.9671 7.71538 24.9968 7.58045 24.9997 7.44361C25.0026 7.30677 24.9784 7.17071 24.9287 7.04321C24.8789 6.91571 24.8045 6.79926 24.7097 6.70052Z" fill="currentColor"/>
                            <path d="M16.6666 6.24996H19.7916V4.16663H5.20831V16.6666H8.33331V18.75H5.20831V20.8333H19.7916V8.33329H16.6666V6.24996ZM15.625 10.4166H11.9791C11.841 10.4166 11.7085 10.4715 11.6109 10.5692C11.5132 10.6669 11.4583 10.7993 11.4583 10.9375C11.4583 11.0756 11.5132 11.2081 11.6109 11.3057C11.7085 11.4034 11.841 11.4583 11.9791 11.4583H13.0208C13.6666 11.4576 14.2896 11.697 14.7689 12.1298C15.2482 12.5627 15.5495 13.1582 15.6144 13.8007C15.6793 14.4433 15.5032 15.087 15.1201 15.607C14.7371 16.1269 14.1745 16.486 13.5416 16.6145V17.7083H11.4583V16.6666H9.37498V14.5833H13.0208C13.1589 14.5833 13.2914 14.5284 13.3891 14.4307C13.4868 14.3331 13.5416 14.2006 13.5416 14.0625C13.5416 13.9243 13.4868 13.7919 13.3891 13.6942C13.2914 13.5965 13.1589 13.5416 13.0208 13.5416H11.9791C11.3333 13.5423 10.7103 13.3029 10.2311 12.8701C9.75179 12.4372 9.45045 11.8417 9.38555 11.1992C9.32064 10.5566 9.4968 9.9129 9.87983 9.39294C10.2629 8.87298 10.8254 8.51389 11.4583 8.38538V7.29163H13.5416V8.33329H15.625V10.4166Z" fill="currentColor"/>
                            <path d="M3.49828 16.6667L4.88734 15.3355L3.44593 13.8313L0.320931 16.8261C0.222115 16.9208 0.142929 17.034 0.0879011 17.1594C0.0328728 17.2847 0.00308028 17.4196 0.000226477 17.5564C-0.00262733 17.6933 0.0215135 17.8293 0.0712692 17.9568C0.121025 18.0843 0.19542 18.2008 0.290202 18.2995L3.4152 21.5547L4.91807 20.112L3.61064 18.75H5.2083V16.6667H3.49828Z" fill="currentColor"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_105_76">
                                <rect width="25" height="25" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Transactions</a>
            </li>
            <li>
                <a href="/account"
                   class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                    <svg width="25" height="25" viewBox="0 0 25 25" class="mr-5 ml-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_78_414)">
                            <path d="M12.3219 12.0426C13.9763 12.0426 15.4089 11.4492 16.5794 10.2785C17.75 9.10793 18.3434 7.67571 18.3434 6.02109C18.3434 4.36705 17.75 2.93463 16.5792 1.76372C15.4085 0.593374 13.9761 0 12.3219 0C10.6672 0 9.235 0.593374 8.06446 1.76391C6.89392 2.93444 6.30035 4.36686 6.30035 6.02109C6.30035 7.67571 6.89392 9.10813 8.06465 10.2787C9.23538 11.449 10.6678 12.0426 12.3219 12.0426Z" />
                            <path d="M22.8579 19.2237C22.8241 18.7366 22.7558 18.2052 22.6553 17.644C22.5538 17.0787 22.4232 16.5443 22.2668 16.0558C22.1052 15.5509 21.8855 15.0523 21.6139 14.5745C21.332 14.0786 21.0009 13.6468 20.6293 13.2915C20.2408 12.9197 19.7651 12.6209 19.215 12.4028C18.6668 12.186 18.0593 12.0761 17.4095 12.0761C17.1543 12.0761 16.9075 12.1808 16.4309 12.4912C16.1375 12.6825 15.7944 12.9037 15.4114 13.1484C15.0839 13.3571 14.6402 13.5526 14.0923 13.7296C13.5576 13.9026 13.0148 13.9903 12.479 13.9903C11.9432 13.9903 11.4006 13.9026 10.8654 13.7296C10.318 13.5528 9.87434 13.3573 9.54723 13.1486C9.16786 12.9062 8.82454 12.6849 8.5268 12.491C8.05073 12.1806 7.80373 12.0759 7.54852 12.0759C6.8985 12.0759 6.2912 12.186 5.74322 12.403C5.19352 12.6207 4.71764 12.9195 4.32873 13.2917C3.95737 13.6472 3.62606 14.0788 3.34454 14.5745C3.07312 15.0523 2.85339 15.5507 2.69165 16.056C2.53544 16.5444 2.40479 17.0787 2.30331 17.644C2.2028 18.2044 2.13451 18.736 2.10075 19.2243C2.06757 19.7026 2.05078 20.1991 2.05078 20.7005C2.05078 22.0055 2.46563 23.062 3.28369 23.8412C4.09164 24.61 5.16071 25.0001 6.46076 25.0001H18.4984C19.7985 25.0001 20.8672 24.6102 21.6753 23.8412C22.4936 23.0626 22.9084 22.0059 22.9084 20.7003C22.9082 20.1966 22.8912 19.6998 22.8579 19.2237Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_105_76">
                                <rect width="25" height="25" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Compte</a>
            </li>
            <li>
                <a href="/settings"
                   class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('settings') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                    <svg width="25" height="25" viewBox="0 0 25 25" class="mr-5 ml-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_78_374)">
                            <path d="M22.6985 9.41406H22.1678C21.9954 8.87451 21.7778 8.35039 21.5172 7.84683L21.8931 7.47095C22.8045 6.56055 22.7801 5.10156 21.8934 4.21582L20.7845 3.10693C19.8993 2.22056 18.44 2.19487 17.5293 3.10659L17.1532 3.48276C16.6496 3.22222 16.1254 3.00464 15.5859 2.83223V2.30142C15.5859 1.03242 14.5535 0 13.2845 0H11.7155C10.4465 0 9.41406 1.03242 9.41406 2.30142V2.83223C8.87456 3.00459 8.35039 3.22217 7.84683 3.48276L7.471 3.10693C6.56216 2.19702 5.10293 2.21836 4.21592 3.10664L3.10688 4.21558C2.22056 5.10093 2.19492 6.56001 3.10659 7.4707L3.48276 7.84687C3.22217 8.35044 3.00464 8.87451 2.83223 9.41411H2.30146C1.03247 9.41406 0 10.4465 0 11.7155V13.2845C0 14.5535 1.03247 15.5859 2.30146 15.5859H2.83223C3.00464 16.1255 3.22217 16.6496 3.48276 17.1532L3.10688 17.5291C2.19551 18.4395 2.21992 19.8984 3.10659 20.7842L4.21553 21.8931C5.10073 22.7794 6.56001 22.8051 7.47065 21.8934L7.84683 21.5172C8.35039 21.7778 8.87456 21.9954 9.41406 22.1678V22.6986C9.41406 23.9676 10.4465 25 11.7155 25H13.2845C14.5535 25 15.586 23.9676 15.586 22.6986V22.1678C16.1255 21.9954 16.6497 21.7778 17.1532 21.5172L17.5291 21.8931C18.4379 22.803 19.8971 22.7816 20.7841 21.8934L21.8932 20.7844C22.7795 19.899 22.8051 18.4399 21.8935 17.5292L21.5173 17.1531C21.7779 16.6495 21.9954 16.1254 22.1678 15.5858H22.6986C23.9676 15.5858 25 14.5534 25 13.2844V11.7154C25 10.4465 23.9675 9.41406 22.6985 9.41406ZM12.5 17.9395C9.50064 17.9395 7.06055 15.4993 7.06055 12.5C7.06055 9.50068 9.50064 7.06055 12.5 7.06055C15.4994 7.06055 17.9395 9.50068 17.9395 12.5C17.9395 15.4993 15.4994 17.9395 12.5 17.9395Z"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_105_76">
                                <rect width="25" height="25" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Paramètres</a>
            </li>
        </ul>
    </nav>

    {{--    children--}}
    <main class="p-4">
        {{ $slot }}
    </main>
</div>
</body>
</html>
