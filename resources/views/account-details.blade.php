<x-app-layout>
    @section('title', 'Compte - Sogebanking')
    @section('pageTitle', $account_id)
    <div class="container mx-auto p-4 overflow-scroll h-dvh">
        <!-- first part -->
        <div class="flex gap-4 md:gap-0 justify-between flex-wrap">
            <div class="flex justify-between w-[100%] md:w-[49%]">
                <div class="pb-2 xl:pt-1 w-[48%] xl:h-[120px] h-[90px] rounded-2xl bg-white">
                    <div class="p-5 flex items-center justify-around">
                        <div class="  xl:w-[70px] xl:h-[70px]  md:w-[50px] md:h-[50px] w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#FFF5D9] ">
                            <svg class="w-[20px] lg:w-[30px]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_152_646)">
                                    <path d="M6.65996 3.75H13.34L14.7816 2.59667C15.2725 2.205 15.4558 1.56917 15.2483 0.975833C15.0408 0.3825 14.5016 0 13.875 0H6.12496C5.49829 0 4.95913 0.383333 4.75163 0.975833C4.54413 1.56833 4.72746 2.205 5.21746 2.59583L6.65996 3.75Z" fill="#FFBB38"/>
                                    <path d="M13.4542 5H6.54583C4.27 7.23417 2.5 11.1542 2.5 14.375C2.5 17.1742 3.98167 20 7.29167 20H12.9167C15.7442 20 17.5 17.8442 17.5 14.375C17.5 11.1542 15.73 7.23417 13.4542 5ZM9.68333 11.875H10.3167C11.2908 11.875 12.0833 12.6675 12.0833 13.6417C12.0833 14.5175 11.4517 15.2383 10.625 15.385V16.0408C10.625 16.3858 10.345 16.6658 10 16.6658C9.655 16.6658 9.375 16.3858 9.375 16.0408V15.4167H8.54167C8.19667 15.4167 7.91667 15.1367 7.91667 14.7917C7.91667 14.4467 8.19667 14.1667 8.54167 14.1667H10.3167C10.6017 14.1667 10.8333 13.935 10.8333 13.65C10.8333 13.3567 10.6017 13.125 10.3167 13.125H9.68333C8.70917 13.125 7.91667 12.3325 7.91667 11.3583C7.91667 10.4825 8.54833 9.76167 9.375 9.615V8.95833C9.375 8.61333 9.655 8.33333 10 8.33333C10.345 8.33333 10.625 8.61333 10.625 8.95833V9.58333H11.4583C11.8033 9.58333 12.0833 9.86333 12.0833 10.2083C12.0833 10.5533 11.8033 10.8333 11.4583 10.8333H9.68333C9.39833 10.8333 9.16667 11.065 9.16667 11.35C9.16667 11.6433 9.39833 11.875 9.68333 11.875Z" fill="#FFBB38"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_152_646">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[#718EBF] xl:text-[14px] text-[12px] font-normal">My Balance</span><br>
                            <span class="text-[#232323] xl:text-[25px] text-[16px] font-semibold"> $12,250</span>
                        </div>
                    </div>
                </div>

                <div class="pb-2 xl:pt-1 w-[48%] xl:h-[120px] h-[90px] rounded-2xl bg-white">
                    <div class="p-5 flex items-center justify-around">
                        <div class=" xl:w-[70px] xl:h-[70px] md:w-[50px] md:h-[50px] w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#E7EDFF] ">
                            <svg class="w-[20px] lg:w-[30px]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.7915 9.89534C14.5197 9.89534 16.7388 7.67581 16.7388 4.94767C16.7388 2.21954 14.5197 0 11.7915 0C9.06341 0 6.84387 2.21954 6.84387 4.94767C6.84387 7.67581 9.06341 9.89534 11.7915 9.89534ZM11.2056 2.03946V1.90508C11.2056 1.58125 11.4677 1.31914 11.7915 1.31914C12.115 1.31914 12.3775 1.58125 12.3775 1.90508V2.04024C13.0748 2.18985 13.5994 2.81095 13.5994 3.55236C13.5994 3.87579 13.3369 4.13829 13.0134 4.13829C12.6896 4.13829 12.4275 3.87579 12.4275 3.55236C12.4275 3.34571 12.2591 3.17735 12.0525 3.17735H11.5271C11.3204 3.17735 11.1521 3.34571 11.1521 3.55236C11.1521 3.67071 11.2087 3.78322 11.304 3.85353L11.7915 4.21447L12.9759 5.09103C13.365 5.37892 13.5994 5.83947 13.6025 6.32385V6.32932C13.6052 6.7426 13.447 7.13244 13.1564 7.42659C12.9408 7.64495 12.6712 7.79143 12.3775 7.85315V7.99026C12.3775 8.31409 12.115 8.5762 11.7915 8.5762C11.4677 8.5762 11.2056 8.31409 11.2056 7.99026V7.8551C10.9197 7.79417 10.6568 7.65354 10.4443 7.44338C10.1501 7.15315 9.98685 6.76565 9.98451 6.35236C9.98255 6.02892 10.2431 5.76486 10.5665 5.76291H10.5704C10.8923 5.76291 11.1544 6.02307 11.1564 6.34533C11.1572 6.54756 11.3199 6.71799 11.5333 6.71799C11.8571 6.71604 11.7365 6.71674 12.058 6.71486C12.2659 6.71322 12.4322 6.54443 12.4306 6.33713V6.33166C12.4298 6.21447 12.3732 6.10275 12.2787 6.03283L11.7915 5.67228L10.6068 4.79572C10.2146 4.50509 9.98021 4.04025 9.98021 3.55236C9.98021 2.80938 10.5064 2.1879 11.2056 2.03946Z" fill="#396AFF"/>
                                <path d="M3.775 12.7108C3.62481 12.4504 3.29117 12.3598 3.02918 12.511L0.273001 14.102C0.012024 14.2531 -0.0775075 14.5868 0.073157 14.8482L2.89012 19.7272C3.0409 19.9881 3.3745 20.0777 3.63594 19.927L6.39212 18.3356C6.65349 18.1849 6.74267 17.8511 6.59197 17.5898L3.775 12.7108Z" fill="#396AFF"/>
                                <path d="M19.5677 11.7367C19.3025 11.3684 18.7892 11.2852 18.4212 11.5504C17.3048 12.3547 15.161 13.8992 14.9907 14.0223C14.9122 14.0891 14.8298 14.1496 14.7439 14.2031C14.4067 14.4152 14.0157 14.5285 13.6075 14.5285H10.8009C10.4774 14.5285 10.2149 14.2664 10.2149 13.9426C10.2149 13.6184 10.4778 13.3566 10.8009 13.3566H13.8024C14.2435 13.3566 14.5966 12.9895 14.5782 12.5477C14.561 12.1285 14.2032 11.8035 13.7837 11.8035H11.4989C11.3442 11.6398 11.1747 11.4898 10.9931 11.3559C10.3684 10.8953 9.59657 10.623 8.76102 10.623C7.27547 10.623 5.79734 11.559 5.18445 12.8082L7.58133 16.9594H12.0774C12.9603 16.9594 13.8298 16.7336 14.595 16.2934C14.8603 16.141 15.1442 15.9578 15.4521 15.7367C16.7419 14.8102 19.379 12.8852 19.381 12.884C19.7497 12.6191 19.8333 12.1051 19.5677 11.7367Z" fill="#396AFF"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[#718EBF] xl:text-[14px] text-[12px] font-normal">Income</span><br>
                            <span class="text-[#232323] xl:text-[25px] text-[16px] font-semibold"> $5,600 </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex mt-2 md:mt-0 justify-between w-[100%] md:w-[49%]">
                <div class=" pb-2 w-[48%] xl:pt-1 xl:h-[120px] h-[90px] rounded-2xl bg-white">
                    <div class="p-5 flex items-center justify-around">
                        <div class=" xl:w-[70px] xl:h-[70px] md:w-[50px] md:h-[50px] w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#FFE0EB] ">
                            <svg class="w-[20px] lg:w-[30px]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.7549 0C15.6109 0 14.6836 0.927344 14.6836 2.07129V8.25156H18.2402C18.5638 8.25156 18.8262 7.98922 18.8262 7.66563V2.07129C18.8262 0.927344 17.8988 0 16.7549 0V0Z" fill="#FF82AC"/>
                                <path d="M7.08441 14.7266C7.08441 11.187 9.96375 8.27176 13.5507 8.28152V2.32367C13.5507 1.43238 13.8862 0.618086 14.4373 0H4.10273C2.48789 0 1.17383 1.31406 1.17383 2.92891V19.4035C1.17383 19.9306 1.81863 20.1896 2.1832 19.8086L2.93281 19.0258L3.72461 19.818C3.95312 20.0465 4.32422 20.0465 4.55312 19.818L5.30352 19.068L6.06133 19.8195C6.28984 20.0461 6.6582 20.0461 6.88672 19.8195L7.65664 19.0562L8.42695 19.8195C8.65508 20.0461 9.02305 20.0461 9.25156 19.8199L9.40078 19.6723C7.94797 18.4576 7.08441 16.6616 7.08441 14.7266ZM5.91391 4.72656H7.07031V3.57016C7.07031 3.24656 7.33266 2.98422 7.65625 2.98422C7.97984 2.98422 8.24219 3.24656 8.24219 3.57016V4.72656H9.39859C9.72219 4.72656 9.98453 4.98891 9.98453 5.3125C9.98453 5.63609 9.72219 5.89844 9.39859 5.89844H8.24219V7.05484C8.24219 7.37844 7.97984 7.64078 7.65625 7.64078C7.33266 7.64078 7.07031 7.37844 7.07031 7.05484V5.89844H5.91391C5.59031 5.89844 5.32797 5.63609 5.32797 5.3125C5.32797 4.98891 5.59031 4.72656 5.91391 4.72656ZM4.14059 8.83008H8.08594C8.40953 8.83008 8.67188 9.09242 8.67188 9.41602C8.67188 9.73961 8.40953 10.002 8.08594 10.002H4.14059C3.81699 10.002 3.55465 9.73961 3.55465 9.41602C3.55465 9.09242 3.81699 8.83008 4.14059 8.83008ZM6.09566 14.6855H4.13668C3.81309 14.6855 3.55074 14.4232 3.55074 14.0996C3.55074 13.776 3.81309 13.5137 4.13668 13.5137H6.09566C6.41926 13.5137 6.6816 13.776 6.6816 14.0996C6.6816 14.4232 6.41926 14.6855 6.09566 14.6855ZM6.48633 12.3457H4.13859C3.815 12.3457 3.55266 12.0834 3.55266 11.7598C3.55266 11.4362 3.815 11.1738 4.13859 11.1738H6.48633C6.80992 11.1738 7.07227 11.4362 7.07227 11.7598C7.07227 12.0834 6.80992 12.3457 6.48633 12.3457Z" fill="#FF82AC"/>
                                <path d="M13.5298 9.45312C10.622 9.45312 8.25635 11.8188 8.25635 14.7266C8.25635 17.6343 10.622 20 13.5298 20C16.4376 20 18.8032 17.6343 18.8032 14.7266C18.8032 11.8188 16.4376 9.45312 13.5298 9.45312ZM14.1176 16.9832V17.0389C14.1176 17.3625 13.8552 17.6248 13.5316 17.6248C13.208 17.6248 12.9457 17.3625 12.9457 17.0389V17.0289C12.6832 16.9664 12.4397 16.863 12.2466 16.7367C11.9758 16.5595 11.8999 16.1964 12.0771 15.9255C12.2542 15.6547 12.6174 15.5788 12.8882 15.756C13.128 15.9129 13.5233 15.9725 13.7176 15.8811C13.8435 15.8218 13.9409 15.6954 13.9545 15.5736C13.9835 15.3141 13.577 15.1694 13.3343 15.0735C12.9671 14.9285 12.5099 14.7479 12.2446 14.2689C11.8663 13.5861 12.1976 12.6858 12.9457 12.3779V12.3484C12.9457 12.0248 13.208 11.7625 13.5316 11.7625C13.852 11.7625 14.112 12.0198 14.1171 12.3389C14.328 12.4048 14.5223 12.5103 14.6778 12.6538C14.9157 12.8732 14.9307 13.2439 14.7113 13.4818C14.4919 13.7197 14.1212 13.7346 13.8833 13.5152C13.7869 13.4263 13.4899 13.3904 13.3608 13.4771C13.274 13.5354 13.2399 13.6473 13.2697 13.7009C13.3934 13.9243 14.0415 14.0009 14.5319 14.3831C15.5338 15.1638 15.1852 16.5736 14.1176 16.9832Z" fill="#FF82AC"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[#718EBF] xl:text-[14px] text-[12px] font-normal">Expense</span><br>
                            <span class="text-[#232323] xl:text-[25px] text-[16px] font-semibold"> $3,460</span>
                        </div>
                    </div>
                </div>

                <div class=" pb-2 w-[48%] xl:pt-1 xl:h-[120px] h-[90px] rounded-2xl bg-white">
                    <div class="p-5 flex items-center justify-around">
                        <div class=" xl:w-[70px] xl:h-[70px] md:w-[50px] md:h-[50px] w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#DCFAF8] ">
                            <svg class="w-[20px] lg:w-[30px]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_152_763)">
                                    <path d="M18.6545 9.57696H17.465C17.1942 8.81946 16.7579 8.14125 16.1994 7.58684L18.0339 6.77699C18.296 6.66129 18.4395 6.37215 18.365 6.09558C18.1438 5.2746 17.397 4.67065 16.5098 4.67065H14.9968C14.1267 4.67065 13.392 5.25179 13.1553 6.04871H11.5573C10.9571 8.26579 8.9297 9.90153 6.52751 9.90153C5.06113 9.90153 3.73453 9.29188 2.78683 8.31278C2.51991 8.6936 2.30128 9.11102 2.14015 9.55622C1.66151 9.45149 1.26796 9.0729 1.15792 8.57985C1.08745 8.26399 0.774048 8.06489 0.458422 8.13563C0.142601 8.20614 -0.0563065 8.5193 0.0142016 8.83512C0.134046 9.37212 0.435649 9.8597 0.863424 10.2079C1.1562 10.4463 1.50046 10.6122 1.86522 10.6954C1.83683 10.9188 1.82214 11.1464 1.82214 11.3774V11.9456C1.82214 14.0989 3.09347 15.9536 4.92305 16.7941V18.0853C4.92305 18.7881 5.49278 19.3578 6.19555 19.3578C6.89833 19.3578 7.46806 18.7881 7.46806 18.0853V17.2743H12.235V18.0853C12.235 18.7881 12.8047 19.3578 13.5075 19.3578C14.2102 19.3578 14.78 18.7881 14.78 18.0853V16.7444C16.1177 16.0937 17.1422 14.895 17.5645 13.4385H18.6544C19.3976 13.4385 20.0001 12.8333 20.0001 12.0866V10.9288C20.0001 10.1822 19.3977 9.57696 18.6545 9.57696ZM14.3309 9.91524C14.0085 9.91524 13.7471 9.65388 13.7471 9.33141C13.7471 9.00895 14.0085 8.74758 14.3309 8.74758C14.6534 8.74758 14.9148 9.00895 14.9148 9.33141C14.9148 9.65388 14.6534 9.91524 14.3309 9.91524Z" fill="#16DBCC"/>
                                    <path d="M6.5275 0.642334C4.3005 0.642334 2.48877 2.45633 2.48877 4.68598C2.48877 6.91568 4.30054 8.72967 6.5275 8.72967C8.75446 8.72967 10.5662 6.91568 10.5662 4.68598C10.5662 2.45625 8.75438 0.642334 6.5275 0.642334ZM6.15246 4.06813H6.90254C7.74864 4.06813 8.43696 4.75696 8.43696 5.60364C8.43696 6.37865 7.86004 7.02103 7.11344 7.12423V7.34431C7.11344 7.66791 6.85109 7.93025 6.5275 7.93025C6.2039 7.93025 5.94156 7.66791 5.94156 7.34431V7.13908H5.79207C5.14472 7.13908 4.618 6.61212 4.618 5.96439C4.618 5.64079 4.88034 5.37845 5.20394 5.37845C5.52753 5.37845 5.78988 5.64079 5.78988 5.96439L6.9025 5.9672C7.10242 5.9672 7.26504 5.80407 7.26504 5.6036C7.26504 5.40313 7.10242 5.24001 6.9025 5.24001H6.15242C5.30632 5.24001 4.618 4.55122 4.618 3.70453C4.618 2.92949 5.19491 2.28711 5.94156 2.1839V2.02769C5.94156 1.7041 6.2039 1.44175 6.5275 1.44175C6.85109 1.44175 7.11344 1.7041 7.11344 2.02769V2.16902H7.26289C7.91024 2.16902 8.43696 2.69601 8.43696 3.34375C8.43696 3.66735 8.17462 3.92969 7.85102 3.92969C7.52743 3.92969 7.26508 3.66735 7.26508 3.34375C7.26508 3.34281 7.265 3.34242 7.265 3.34242L6.15246 3.3409C5.95254 3.3409 5.78992 3.50402 5.78992 3.70453C5.78992 3.905 5.95254 4.06813 6.15246 4.06813Z" fill="#16DBCC"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_152_763">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[#718EBF] xl:text-[14px] text-[12px] font-normal">Total Saving</span><br>
                            <span class="text-[#232323] xl:text-[25px] text-[16px] font-semibold">$7,920</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Last Transaction  -->
        <div class="flex justify-between flex-wrap py-4 md:gap-[3%]">

            <div class="w-[100%] md:w-[62%]">
                <h2 class="font-semibold xl:text-[22px] md:text-[18px] text-[16px] text-[#333B69]">Last Transaction</h2>
                <div class=" bg-white rounded-[25px] py-2 mt-4 h-[250px] overflow-y-scroll">
                    <table class=" w-[100%]">
                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#DCFAF8] ">
                                    <img src="{{'/assets/icons/renew-1.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Spotify Subscription</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">Shopping</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">pending</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#FE5C73]">-$150</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#E7EDFF] ">
                                    <img src="{{'/assets/icons/account-setting-icon.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl-text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Mobile Service</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">Service</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">completed</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#FE5C73]">-$440</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFE0EB] ">
                                    <img src="{{'/assets/icons/account-user-icon.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Emilie Wilson</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">transfert</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">completed</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#16DBAA]">$780</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#E7EDFF] ">
                                    <img src="{{'/assets/icons/account-setting-icon.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl-text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Mobile Service</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">Service</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">completed</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#FE5C73]">-$440</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFE0EB] ">
                                    <img src="{{'/assets/icons/account-user-icon.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Emilie Wilson</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">transfert</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">completed</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#16DBAA]">$780</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="w-[100%] md:w-[35%]">
                <div class="mt-4 md:mt-0 flex justify-between">
                    <h2 class="font-semibold xl:text-[22px] lg:text-[18px] text-[16px] text-[#333B69]">My Card</h2>
                    <h2 class="font-semibold xl:text-[17px] lg:text-[15px] text-[15px] text-[#333B69] cursor-pointer ">See All</h2>
                </div>
                <!-- card - edshy -->
            </div>
        </div>

        <!-- Debit & Credit overview & Invoices Sent-->
        <div class="flex justify-between flex-wrap py-2 md:gap-[3%] mb-[100px]">

            <!-- Debit & Credit overview -->
            <div class="w-[100%] md:w-[62%]">
                <h2 class="font-semibold xl:text-[22px] md:text-[18px] text-[16px] text-[#333B69]">Debit & Credit Overview</h2>

                <!-- Entete & Histogramme -->
                <div class="mt-3">
                    <div class="bg-white rounded-[25px] h-[364px] p-5">
                        <!-- En tete -->
                        <div class="flex md:justify-between justify-end">
                            <div class="hidden md:block relative bottom-[5px] font-normal xl:text-[16px] md:text-[12px]">
                                <span>$7550 </span><span class="text-[#718EBF]">Debited & </span><span>$5,420 </span><span class="text-[#718EBF]">Credited in this week</span>
                            </div>
                            <div class="flex">
                                <div class="mx-2 flex">
                                    <div class="xl:w-[15px] xl:h-[15px] w-[12px] h-[12px] rounded-[30%] bg-[#4C78FF]"></div>
                                    <div class="mx-3 relative xl:bottom-[5px] bottom-[3px] font-normal xl:text-[16px] text-[12px] text-[#718EBF]">Debit</div>
                                </div>
                                <div class="mx-2 flex">
                                    <div class="xl:w-[15px] xl:h-[15px] w-[12px] h-[12px] rounded-[30%] bg-[#FF82AC]"></div>
                                    <div class="ms-2 relative xl:bottom-[5px] bottom-[3px] font-normal xl:text-[16px] text-[12px] text-[#718EBF]">Credit</div>
                                </div>
                            </div>
                        </div>

                        <!-- Histogramme -->
                        <div class="w-[100%] h-[95%] flex gap-[1%]">

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[90%] relative top-[10%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[100%] relative top-[0%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Sat
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[20%] relative top-[80%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[30%] relative top-[70%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Sun
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[100%] relative top-[0%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[40%] relative top-[60%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Mon
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[20%] relative top-[80%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[100%] relative top-[0%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Tue
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[70%] relative top-[30%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[60%] relative top-[40%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Wed
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[90%] relative top-[10%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[50%] relative top-[50%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Thu
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[80%] relative top-[20%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[100%] relative top-[0%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Fri
                                </div>
                            </div>
                        </div>
                        <!-- Fin histogramme -->
                    </div>
                </div>
            </div>

            <!-- Invoices Sent -->
            <div class="w-[100%] md:w-[35%] mt-3 md:mt-0">
                <h2 class="font-semibold xl:text-[22px] lg:text-[18px] text-[16px] text-[#333B69]">Invoices Sent</h2>

                <div class="mt-3 p-1 bg-white rounded-[25px] h-[360px] overflow-y-scroll">
                    <table class="w-[100%]">

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#DCFAF8] ">
                                    <img src="{{'/assets/icons/apple.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Apple store</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">5h ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$450</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFF5D9] ">
                                    <img src="{{'/assets/icons/user-1.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Michael</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">2 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$150</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#E7EDFF] ">
                                    <img src="{{'/assets/icons/playstation.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Playstation</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">5 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$1085</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFE0EB] ">
                                    <img src="{{'/assets/icons/user-2.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">William</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">10 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$90</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFF5D9] ">
                                    <img src="{{'/assets/icons/user-1.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Michael</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">2 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$150</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#E7EDFF] ">
                                    <img src="{{'/assets/icons/playstation.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Playstation</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">5 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$1085</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFE0EB] ">
                                    <img src="{{'/assets/icons/user-2.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">William</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">10 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$90</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- Fin Invoices Sent -->

        </div>
    </div>
</x-app-layout>
