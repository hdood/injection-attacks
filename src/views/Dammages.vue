<script setup>

import Layout from "../layouts/index.vue"; 
</script>

<template>
    <section data-index="8">

        <div class="">
            <div class="p-5 rounded-xl  bg-gradient-to-r from-blue-600 to-blue-800  flex flex-col gap-9 ">

                <div class="text-3xl ">Use of Least Privilege Principle</div>
                <div class="fragment text-3xl w-full fade-in-then-out">
                    Limit the permissions and access levels of database accounts, web application components, and users
                    to the minimum necessary for their functionality. Adopt the principle of least privilege to reduce
                    the potential impact of a successful injection attack.</div>
                <div class="fragment text-3xl fade-in-then-out">
                    Avoid using overly permissive database accounts with unrestricted access. Instead, create specific
                    accounts with the minimum privileges required for their intended tasks, such as read-only or
                    write-only access.
                </div>
                <div class="fragment text-3xl fade-in-then-out">
                    Regularly review and update permissions to ensure they align with the current needs of the
                    application, and revoke unnecessary privileges.
                </div>

            </div>
        </div>

    </section>
</template>