<header class="bg-transparent absolute top-0 left-0 w-full flex z-10 transition duration-100">
        <div class="container py-3 lg:py-5">
            <div class="flex items-center justify-beetwen relative">
                <div class="px-3 lg:mx-10">
                    <a href="#home" class="flex">
                        <img class="my-auto h-5 lg:h-10" src="img/navbar/logo2.png" alt="">
                        <h1 class="text-[12px] font-semibold text-aqua-300 my-auto lg:text-lg">OCEAN<span class="text-Primary-300">INSIGHTS</span></h1>
                    </a>
                </div>
                <div class="flex items-center">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-lb transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute rounded-md py-5 px-5 right-4 bg-Dark-700 shadow-md  max-w-[250px] w-full top-[32px] lg:top-[60px] lg:right-0 lg:rounded-none nav-menu lg:rounded-bl-lg">
                        <ul>
                            <li class="mb-2 flex gap-4 group transition-all duration-500 py-2 px-3 rounded-full hover:bg-Dark-600">
                                <svg class="w-5 h-5 text-sky-50 hidden group-hover:block dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                <svg class="w-5 h-5 group-hover:hidden text-sky-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9"/>
                                </svg>
                                <a href="#home" class="text-sky-50 font-semibold">Home</a>
                            </li>
                            <li class="mb-2 flex gap-4 group py-2 px-3 rounded-full hover:bg-Dark-600">
                                <svg class="w-5 h-5 text-sky-50 hidden group-hover:block dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M9 1.334C7.06.594 1.646-.84.293.653a1.158 1.158 0 0 0-.293.77v13.973c0 .193.046.383.134.55.088.167.214.306.366.403a.932.932 0 0 0 .5.147c.176 0 .348-.05.5-.147 1.059-.32 6.265.851 7.5 1.65V1.334ZM19.707.653C18.353-.84 12.94.593 11 1.333V18c1.234-.799 6.436-1.968 7.5-1.65a.931.931 0 0 0 .5.147.931.931 0 0 0 .5-.148c.152-.096.279-.235.366-.403.088-.167.134-.357.134-.55V1.423a1.158 1.158 0 0 0-.293-.77Z"/>
                                  </svg>
                                <svg class="w-5 h-5 text-sky-50 group-hover:hidden dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 16.5c0-1-8-2.7-9-2V1.8c1-1 9 .707 9 1.706M10 16.5V3.506M10 16.5c0-1 8-2.7 9-2V1.8c-1-1-9 .707-9 1.706"/>
                                  </svg>
                                <a href="#topik" class="text-sky-50 font-semibold">Topic</a>
                            </li>
                            <li class="mb-2 py-2 px-3 flex gap-3 group rounded-full hover:bg-Dark-600">
                                <img class="h-6 w-6 group-hover:hidden" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAB70lEQVR4nN2VX2oUQRDG18CKgZBrCIJ3EPKUPISsyF7BoCGBiAeQhRC8hjHgIXzxzwE0ojEmeUgkIMhW76441RvwJzX0LL2dmdnRxzQ0zEx3fd9XX1fXtFrXegA3nacryr54Dp3yy6Y9i/LS1mzPf4GLct95TpyHuimeY1E6/6J6znmeRwDf+srWQLkN3DqD+QmB8iEi27XYmQQFuCiXBhwIX5eoPwNuuDEPnfK7IGlii4GPJWMpIk3Bvw+UlUlcxj1RshC7VnegueeiPE2ywmZt5mPWC0uBdpk13UhhN2T0PlZeR5BbqXwMAh+U2bM/OVjl0jZN2aK8qSPIRWZshPi9qwSer2HxVUHSRHk8hsqdYNPhVXZlZIs/YVE8z5paE49JCSujVjqcMrTFH7Bg7+LpzbpkTnlbQTCstMjSjL71ZpE0tij0FuygEuJeUNWfyriEQJTtcH4vqstUOUivvCsBS/rRRV9ZdZ7TyjK1i2aNKw8a8ygBO099F+XdFEmoOvEclV60ENQJm7O4VQyUZes9VVUVkfyxTErBo827BYnLeBzblRKYUlGeRFbt1IKHoLmCJFjyaaBs9j13i295tWRsiOdzodzAG7XryK41a1wNfjhHM22pyaZtFWG9RTxf8tuujEy5laKtVR7otRl/ASrHpPzjq9pyAAAAAElFTkSuQmCC">
                                <img class="h-6 w-6 hidden group-hover:block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABpUlEQVR4nN2Uz04UQRDGFyMkJsKDaHwHE70ZCSRkXwGjxCtXuJh9D/+8j6CwAkbjzQDbtS4wVXvYn6mhh0x2Zmd690glfZip7u+r/urr6nTudQAPh8qroHwR5UAUEeUqGP2gfBajC6wsBC4ZL8X4JQZNKxhnQdmcD9zoBWXSBi7K19J3D3jQCh6M/VZgu13AkozZFuWmIGkEHyivU8HF4K6ojOdByXLJlI1acGBZjN8pgHUhY97Enpw6VnWD0U2tuC5c/9xpt7fYqmyItluYwEMydiLBp850iPEzJitEncT4pzyJMvWrBMq1Jy9gTZTdRQj+wKNo31EdwciTf+Fx/N6dV7JzWI0EwwpBMH540q9Z+rc3D8Gl8XSmRHfaZ+xMEe+lEgyV97GPH2fbVDmcfvKSQOBngvF9pk19Kvrgyg+PeZtCIOVVWNQ4qX1oUabNWEEWMl7MQ5CfUSYDZb0WvATWKw5IxruyXK0kxodG8ELLgiT25Js3b2A8a6h+4uBJ47ok14YProSqT1plabjNsjvCZ0swjvPHqIyCceRW9NzMht6b+A+17OG/ltGIygAAAABJRU5ErkJggg==">
                                <a href="#eksplorasi" class="text-sky-50 font-semibold">Exploration</a>
                            </li>
                            <li class="mb-2 py-2 gap-3 px-4 flex group rounded-full hover:bg-Dark-600">
                                <svg class="w-5 h-5 group-hover:block hidden text-sky-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z"/>
                                    <path d="M6 5H5v1h1V5Z"/>
                                  </svg>
                                <svg class="w-5 h-5 group-hover:hidden text-sky-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 5h1v12a2 2 0 0 1-2 2m0 0a2 2 0 0 1-2-2V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v15a2 2 0 0 0 2 2h14ZM10 4h2m-2 3h2m-8 3h8m-8 3h8m-8 3h8M4 4h3v3H4V4Z"/>
                                  </svg>
                                <a href="#artikel" class="text-sky-50 font-semibold">Article</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>