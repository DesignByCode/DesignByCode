<x-main-layout class="pt-48">
    <div class="wrapper my-24">
        <h1 class="heading-1 mb-4 max-w-2xl">Random Password Generator</h1>

        <div class="bg-white text-gray-700 dark:bg-gray-800 dark:text-gray-200 p-4 flex justify-between items-center rounded-lg space-x-4">
            <label class="sr-only" for="password-generator">Password Generator</label>
            <input id="password-generator" class="focus:ring-transparent bg-transparent border-transparent font-semibold tracking-wider focus:border-transparent focus:outline-transparent flex-1" type="text">
            <button disabled id="copy-password" class="bg-primary-500 rounded-md h-12 p-4 min-w-[3rem] flex items-center justify-center text-white disabled:bg-primary-500/50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75"/>
                </svg>
            </button>
        </div>

        <button id="generatePasswordButton" type="button" class="cta my-4 flex space-x-2">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                </svg>
            </span>
            <span>Generate Password</span>
        </button>

    </div>

</x-main-layout>
