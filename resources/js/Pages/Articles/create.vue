<template>
    <app-layout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Articles - Create
            </h1>
        </template>

        <div id="page" class="max-w-lg mx-auto py-12">
            <form
                action="/articles"
                method="POST"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
            >
                <div class="mb-4">
                    <label
                        for="title"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Title</label
                    >
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text"
                        id="title"
                        name="title"
                        placeholder="Enter a title..."
                    />
                </div>

                <div class="mb-4">
                    <label
                        for="excerpt"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Excerpt</label
                    >
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="excerpt"
                        id="excerpt"
                        cols="30"
                        rows="10"
                        placeholder="Enter an excerpt..."
                    ></textarea>
                </div>

                <div class="mb-4">
                    <label
                        for="body"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Body</label
                    >
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="body"
                        id="body"
                        cols="30"
                        rows="10"
                        placeholder="Write your article here..."
                    ></textarea>
                </div>

                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Submit
                </button>
            </form>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./../../Layouts/AppLayout";

export default {
    components: {
        AppLayout
    }
};
</script>
