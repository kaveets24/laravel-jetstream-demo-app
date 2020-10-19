<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Articles
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <ul class="p-6">
                        <li class="border-b border-gray-200 p-4" v-for="article in $page.articles" :key="article.title">
                            <a class="block font-bold mb-2" :href="'/articles/' + article.id">{{ article.title }}</a>
                            <p class="font-thin mb-2">{{ article.excerpt }}</p>
                            <a class="block underline mb-2" :href="'/articles/' + article.id">Read More</a>
                        </li>
                    </ul>
                </div>
                <a href="/articles/create" class="block bg-blue-500 hover:bg-blue-700 text-white text-center font-bold my-6 max-w-xs mx-auto py-2 px-4 rounded">Create new article</a>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'

    export default {
        components: {
            AppLayout
        }
    }
</script>
