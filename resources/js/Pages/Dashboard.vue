<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cryptonauts
            </h2>
        </template>

        <div class="py-12 px-5 md:px-10 max-w-7xl mx-auto">
            <inertia-link :href="route('articles.show', newer_article)">
                <div class="grid grid-cols-2 gap-10 px-5 md:px-20 bg-white p-10 rounded-lg shadow-lg">
                    <div class="col-span-2 lg:col-span-1">
                        <img src="images/bitcoin_01.jpg" class="w-full rounded-md max-h-96">
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col justify-center">
                        <h2 class="text-gray-800 text-2xl font-semibold">{{ newer_article.title }}</h2>
                        <p class="mt-5 text-gray-500">
                            {{ newer_article.short_description }}
                        </p>
                    </div>
                </div>
            </inertia-link>
            <div class="grid grid-cols-6 my-12 gap-10">
                <div v-for="article in articles" :key="article.id" class="col-span-6 md:col-span-3 lg:col-span-2 bg-white p-10 rounded-lg shadow-lg">
                    <inertia-link :href="route('articles.show', article.id)">
                        <img :src="article.image" class="w-full rounded-md max-h-96">
                        <h3 class="mt-5 text-gray-600 font-semibold">
                            {{ article.title }}
                        </h3>
                        <p class="mt-3 text-gray-400">
                            {{ article.short_description }}
                        </p>
                    </inertia-link>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        props: ['articles'],
        components: {
            AppLayout,
        },
        data(){
            return {
                newer_article: {}
            }
        },
        mounted(){
            this.newer_article = this.articles.shift()
        }
    }
</script>
