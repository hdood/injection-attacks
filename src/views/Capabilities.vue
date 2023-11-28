<script setup>

import Layout from "../layouts/index.vue"; 
</script>

<template>
    <section data-index="6">
        <div class="">
            <div class="p-4 rounded-xl  bg-gradient-to-r from-blue-600 to-blue-800  flex flex-col gap-9">

                <div class="flex justify-center gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M7.843 3.802C9.872 2.601 10.886 2 12 2c1.114 0 2.128.6 4.157 1.802l.686.406c2.029 1.202 3.043 1.803 3.6 2.792c.557.99.557 2.19.557 4.594v.812c0 2.403 0 3.605-.557 4.594c-.557.99-1.571 1.59-3.6 2.791l-.686.407C14.128 21.399 13.114 22 12 22c-1.114 0-2.128-.6-4.157-1.802l-.686-.407c-2.029-1.2-3.043-1.802-3.6-2.791C3 16.01 3 14.81 3 12.406v-.812C3 9.19 3 7.989 3.557 7c.557-.99 1.571-1.59 3.6-2.792l.686-.406ZM13 16a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm-1-9.75a.75.75 0 0 1 .75.75v6a.75.75 0 0 1-1.5 0V7a.75.75 0 0 1 .75-.75Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div>Dammages</div>
                </div>

                <ul class="max-w-xl space-y-1 text-xl list-disc list-inside  mt-10">
                    <li class="text-3xl">
                        Authentication bypass
                    </li>
                    <li class="fragment text-3xl">
                        Information disclosure
                    </li>
                    <li class="fragment text-3xl">
                        Data loss </li>
                    <li class="fragment text-3xl">
                        Sensitive data theft </li>
                    <li class="fragment text-3xl">
                        Loss of data integrity
                    </li>

                    <li class="fragment text-3xl">
                        Denial of service
                    </li>

                    <li class="fragment text-3xl">
                        Full system compromise.
                    </li>
                </ul>

            </div>
        </div>
    </section>
    <section data-index="7">
        <div class="">
            <div class="p-5 rounded-xl  bg-gradient-to-r from-blue-600 to-blue-800  flex flex-col gap-9 ">

                <div class="flex justify-center gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 22q-3.475-.875-5.738-3.988T4 11.1V5l8-3l8 3v6.1q0 3.8-2.262 6.913T12 22Z" />
                    </svg>
                    <div>Prevention</div>
                </div>


                <div class="text-3xl fragment">Input Validation and Sanitization</div>
                <div class="fragment text-3xl w-full  fade-in-then-out">
                    Implement strict input validation to ensure that user inputs adhere to expected formats and
                    patterns. Validate both client-side and server-side inputs to ensure consistency and security. </div>
                <div class="fragment text-3xl fade-in-then-out">
                    Use parameterized queries and prepared statements in database interactions to separate user input
                    from the actual SQL or other command structure. This helps to prevent attackers from injecting
                    malicious code into queries.
                </div>
                <div class="fragment text-3xl fade-in-then-out">
                    Apply input sanitization techniques to filter out potentially harmful characters or escape special
                    characters. For example, replacing single quotes with double quotes or using libraries that
                    automatically handle input sanitization can be effective.
                </div>

            </div>
        </div>
</section></template>