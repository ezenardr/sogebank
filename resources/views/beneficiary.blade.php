<x-app-layout>
    @section('title', 'Bénéficiaire - Sogebanking')
    @section('pageTitle', 'Bénéficiaire')
    <div class="flex flex-col flex-wrap lg:flex-row items-center gap-8">
        <a href="/beneficiary/new-beneficiary" class="lg:hidden bg-white p-4 rounded-[12px] flex items-center gap-4 w-full justify-center">
            <svg width="30" height="30" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.75 9.75H4.25V8.25H8.75V3.75H10.25V8.25H14.75V9.75H10.25V14.25H8.75V9.75Z"
                      fill="#718EBF"/>
            </svg>
            <span class="font-medium text-[16px]">Nouveau Bénéficiare</span>
        </a>
        <div class="bg-white rounded-[12px] flex flex-col  gap-3 p-4 ">
            <div class="grid grid-cols-2">
                <div class="flex flex-col gap-3">
                    <p class="font-medium text-[16px]">Samantha Tran (Sam)</p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.99935 15.3334C3.63268 15.3334 3.31879 15.2029 3.05768 14.9417C2.79657 14.6806 2.66602 14.3667 2.66602 14.0001V2.00008C2.66602 1.63341 2.79657 1.31953 3.05768 1.05841C3.31879 0.797304 3.63268 0.666748 3.99935 0.666748H10.666C11.0327 0.666748 11.3466 0.797304 11.6077 1.05841C11.8688 1.31953 11.9993 1.63341 11.9993 2.00008V4.66675H10.666V4.00008H3.99935V12.0001H10.666V11.3334H11.9993V14.0001C11.9993 14.3667 11.8688 14.6806 11.6077 14.9417C11.3466 15.2029 11.0327 15.3334 10.666 15.3334H3.99935ZM3.99935 13.3334V14.0001H10.666V13.3334H3.99935ZM9.96602 10.6667L7.13268 7.83341L8.06602 6.90008L9.96602 8.80008L13.7327 5.03341L14.666 5.96675L9.96602 10.6667ZM3.99935 2.66675H10.666V2.00008H3.99935V2.66675Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">+1 335 246 3546</span></p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.66732 13.3334C2.30065 13.3334 1.98676 13.2029 1.72565 12.9417C1.46454 12.6806 1.33398 12.3667 1.33398 12.0001V4.00008C1.33398 3.63341 1.46454 3.31953 1.72565 3.05841C1.98676 2.7973 2.30065 2.66675 2.66732 2.66675H13.334C13.7007 2.66675 14.0145 2.7973 14.2757 3.05841C14.5368 3.31953 14.6673 3.63341 14.6673 4.00008V12.0001C14.6673 12.3667 14.5368 12.6806 14.2757 12.9417C14.0145 13.2029 13.7007 13.3334 13.334 13.3334H2.66732ZM8.00065 8.66675L2.66732 5.33341V12.0001H13.334V5.33341L8.00065 8.66675ZM8.00065 7.33341L13.334 4.00008H2.66732L8.00065 7.33341ZM2.66732 5.33341V4.00008V12.0001V5.33341Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">john.doe.@gmail.com</span></p>
                </div>
                <div
                        class="w-[60px] h-[60px] justify-self-end rounded-full bg-[#F5F7FA] flex items-center justify-center text-[28px] font-semibold text-primary-2 select-none">
                    JD
                </div>
            </div>
           <div class="bg-[#fbfbfb] p-2 font-medium text-[12px] text-[#757678]">
                Acc Num : <span class="text-[#20191f]">XXXX XX 99</span>
            </div>
        </div>
        <div class="bg-white rounded-[12px] flex flex-col gap-3 p-4 ">
            <div class="grid grid-cols-2">
                <div class="flex flex-col gap-3">
                    <p class="font-medium text-[16px]">Samantha Tran (Sam)</p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.99935 15.3334C3.63268 15.3334 3.31879 15.2029 3.05768 14.9417C2.79657 14.6806 2.66602 14.3667 2.66602 14.0001V2.00008C2.66602 1.63341 2.79657 1.31953 3.05768 1.05841C3.31879 0.797304 3.63268 0.666748 3.99935 0.666748H10.666C11.0327 0.666748 11.3466 0.797304 11.6077 1.05841C11.8688 1.31953 11.9993 1.63341 11.9993 2.00008V4.66675H10.666V4.00008H3.99935V12.0001H10.666V11.3334H11.9993V14.0001C11.9993 14.3667 11.8688 14.6806 11.6077 14.9417C11.3466 15.2029 11.0327 15.3334 10.666 15.3334H3.99935ZM3.99935 13.3334V14.0001H10.666V13.3334H3.99935ZM9.96602 10.6667L7.13268 7.83341L8.06602 6.90008L9.96602 8.80008L13.7327 5.03341L14.666 5.96675L9.96602 10.6667ZM3.99935 2.66675H10.666V2.00008H3.99935V2.66675Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">+1 335 246 3546</span></p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.66732 13.3334C2.30065 13.3334 1.98676 13.2029 1.72565 12.9417C1.46454 12.6806 1.33398 12.3667 1.33398 12.0001V4.00008C1.33398 3.63341 1.46454 3.31953 1.72565 3.05841C1.98676 2.7973 2.30065 2.66675 2.66732 2.66675H13.334C13.7007 2.66675 14.0145 2.7973 14.2757 3.05841C14.5368 3.31953 14.6673 3.63341 14.6673 4.00008V12.0001C14.6673 12.3667 14.5368 12.6806 14.2757 12.9417C14.0145 13.2029 13.7007 13.3334 13.334 13.3334H2.66732ZM8.00065 8.66675L2.66732 5.33341V12.0001H13.334V5.33341L8.00065 8.66675ZM8.00065 7.33341L13.334 4.00008H2.66732L8.00065 7.33341ZM2.66732 5.33341V4.00008V12.0001V5.33341Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">john.doe.@gmail.com</span></p>
                </div>
                <div
                        class="w-[60px] h-[60px] justify-self-end rounded-full bg-[#F5F7FA] flex items-center justify-center text-[28px] font-semibold text-primary-2 select-none">
                    JD
                </div>
            </div>
            <div class="bg-[#fbfbfb] p-2 font-medium text-[12px] text-[#757678]">
                Acc Num : <span class="text-[#20191f]">XXXX XX 99</span>
            </div>
        </div>
        <div class="bg-white rounded-[12px] flex flex-col gap-3 p-4 ">
            <div class="grid grid-cols-2">
                <div class="flex flex-col gap-3">
                    <p class="font-medium text-[16px]">Samantha Tran (Sam)</p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.99935 15.3334C3.63268 15.3334 3.31879 15.2029 3.05768 14.9417C2.79657 14.6806 2.66602 14.3667 2.66602 14.0001V2.00008C2.66602 1.63341 2.79657 1.31953 3.05768 1.05841C3.31879 0.797304 3.63268 0.666748 3.99935 0.666748H10.666C11.0327 0.666748 11.3466 0.797304 11.6077 1.05841C11.8688 1.31953 11.9993 1.63341 11.9993 2.00008V4.66675H10.666V4.00008H3.99935V12.0001H10.666V11.3334H11.9993V14.0001C11.9993 14.3667 11.8688 14.6806 11.6077 14.9417C11.3466 15.2029 11.0327 15.3334 10.666 15.3334H3.99935ZM3.99935 13.3334V14.0001H10.666V13.3334H3.99935ZM9.96602 10.6667L7.13268 7.83341L8.06602 6.90008L9.96602 8.80008L13.7327 5.03341L14.666 5.96675L9.96602 10.6667ZM3.99935 2.66675H10.666V2.00008H3.99935V2.66675Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">+1 335 246 3546</span></p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.66732 13.3334C2.30065 13.3334 1.98676 13.2029 1.72565 12.9417C1.46454 12.6806 1.33398 12.3667 1.33398 12.0001V4.00008C1.33398 3.63341 1.46454 3.31953 1.72565 3.05841C1.98676 2.7973 2.30065 2.66675 2.66732 2.66675H13.334C13.7007 2.66675 14.0145 2.7973 14.2757 3.05841C14.5368 3.31953 14.6673 3.63341 14.6673 4.00008V12.0001C14.6673 12.3667 14.5368 12.6806 14.2757 12.9417C14.0145 13.2029 13.7007 13.3334 13.334 13.3334H2.66732ZM8.00065 8.66675L2.66732 5.33341V12.0001H13.334V5.33341L8.00065 8.66675ZM8.00065 7.33341L13.334 4.00008H2.66732L8.00065 7.33341ZM2.66732 5.33341V4.00008V12.0001V5.33341Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">john.doe.@gmail.com</span></p>
                </div>
                <div
                        class="w-[60px] h-[60px] justify-self-end rounded-full bg-[#F5F7FA] flex items-center justify-center text-[28px] font-semibold text-primary-2 select-none">
                    JD
                </div>
            </div>
            <div class="bg-[#fbfbfb] p-2 font-medium text-[12px] text-[#757678]">
                Acc Num : <span class="text-[#20191f]">XXXX XX 99</span>
            </div>
        </div>
        <div class="bg-white rounded-[12px] flex flex-col gap-3 p-4 ">
            <div class="grid grid-cols-2">
                <div class="flex flex-col gap-3">
                    <p class="font-medium text-[16px]">Samantha Tran (Sam)</p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.99935 15.3334C3.63268 15.3334 3.31879 15.2029 3.05768 14.9417C2.79657 14.6806 2.66602 14.3667 2.66602 14.0001V2.00008C2.66602 1.63341 2.79657 1.31953 3.05768 1.05841C3.31879 0.797304 3.63268 0.666748 3.99935 0.666748H10.666C11.0327 0.666748 11.3466 0.797304 11.6077 1.05841C11.8688 1.31953 11.9993 1.63341 11.9993 2.00008V4.66675H10.666V4.00008H3.99935V12.0001H10.666V11.3334H11.9993V14.0001C11.9993 14.3667 11.8688 14.6806 11.6077 14.9417C11.3466 15.2029 11.0327 15.3334 10.666 15.3334H3.99935ZM3.99935 13.3334V14.0001H10.666V13.3334H3.99935ZM9.96602 10.6667L7.13268 7.83341L8.06602 6.90008L9.96602 8.80008L13.7327 5.03341L14.666 5.96675L9.96602 10.6667ZM3.99935 2.66675H10.666V2.00008H3.99935V2.66675Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">+1 335 246 3546</span></p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.66732 13.3334C2.30065 13.3334 1.98676 13.2029 1.72565 12.9417C1.46454 12.6806 1.33398 12.3667 1.33398 12.0001V4.00008C1.33398 3.63341 1.46454 3.31953 1.72565 3.05841C1.98676 2.7973 2.30065 2.66675 2.66732 2.66675H13.334C13.7007 2.66675 14.0145 2.7973 14.2757 3.05841C14.5368 3.31953 14.6673 3.63341 14.6673 4.00008V12.0001C14.6673 12.3667 14.5368 12.6806 14.2757 12.9417C14.0145 13.2029 13.7007 13.3334 13.334 13.3334H2.66732ZM8.00065 8.66675L2.66732 5.33341V12.0001H13.334V5.33341L8.00065 8.66675ZM8.00065 7.33341L13.334 4.00008H2.66732L8.00065 7.33341ZM2.66732 5.33341V4.00008V12.0001V5.33341Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">john.doe.@gmail.com</span></p>
                </div>
                <div
                        class="w-[60px] h-[60px] justify-self-end rounded-full bg-[#F5F7FA] flex items-center justify-center text-[28px] font-semibold text-primary-2 select-none">
                    JD
                </div>
            </div>
            <div class="bg-[#fbfbfb] p-2 font-medium text-[12px] text-[#757678]">
                Acc Num : <span class="text-[#20191f]">XXXX XX 99</span>
            </div>
        </div>
        <div class="bg-white rounded-[12px] flex flex-col gap-3 p-4 ">
            <div class="grid grid-cols-2">
                <div class="flex flex-col gap-3">
                    <p class="font-medium text-[16px]">Samantha Tran (Sam)</p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.99935 15.3334C3.63268 15.3334 3.31879 15.2029 3.05768 14.9417C2.79657 14.6806 2.66602 14.3667 2.66602 14.0001V2.00008C2.66602 1.63341 2.79657 1.31953 3.05768 1.05841C3.31879 0.797304 3.63268 0.666748 3.99935 0.666748H10.666C11.0327 0.666748 11.3466 0.797304 11.6077 1.05841C11.8688 1.31953 11.9993 1.63341 11.9993 2.00008V4.66675H10.666V4.00008H3.99935V12.0001H10.666V11.3334H11.9993V14.0001C11.9993 14.3667 11.8688 14.6806 11.6077 14.9417C11.3466 15.2029 11.0327 15.3334 10.666 15.3334H3.99935ZM3.99935 13.3334V14.0001H10.666V13.3334H3.99935ZM9.96602 10.6667L7.13268 7.83341L8.06602 6.90008L9.96602 8.80008L13.7327 5.03341L14.666 5.96675L9.96602 10.6667ZM3.99935 2.66675H10.666V2.00008H3.99935V2.66675Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">+1 335 246 3546</span></p>
                    <p class="flex items-center gap-4">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.66732 13.3334C2.30065 13.3334 1.98676 13.2029 1.72565 12.9417C1.46454 12.6806 1.33398 12.3667 1.33398 12.0001V4.00008C1.33398 3.63341 1.46454 3.31953 1.72565 3.05841C1.98676 2.7973 2.30065 2.66675 2.66732 2.66675H13.334C13.7007 2.66675 14.0145 2.7973 14.2757 3.05841C14.5368 3.31953 14.6673 3.63341 14.6673 4.00008V12.0001C14.6673 12.3667 14.5368 12.6806 14.2757 12.9417C14.0145 13.2029 13.7007 13.3334 13.334 13.3334H2.66732ZM8.00065 8.66675L2.66732 5.33341V12.0001H13.334V5.33341L8.00065 8.66675ZM8.00065 7.33341L13.334 4.00008H2.66732L8.00065 7.33341ZM2.66732 5.33341V4.00008V12.0001V5.33341Z"
                                  fill="#79747E"/>
                        </svg>
                        <span class="font-medium text-[12px] text-[#76797a]">john.doe.@gmail.com</span></p>
                </div>
                <div
                        class="w-[60px] h-[60px] justify-self-end rounded-full bg-[#F5F7FA] flex items-center justify-center text-[28px] font-semibold text-primary-2 select-none">
                    JD
                </div>
            </div>
            <div class="bg-[#fbfbfb] p-2 font-medium text-[12px] text-[#757678]">
                Acc Num : <span class="text-[#20191f]">XXXX XX 99</span>
            </div>
        </div>

    </div>
</x-app-layout>
