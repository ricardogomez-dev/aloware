<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cryptonauts
            </h2>
        </template>
        <div class="px-5 md:px-20 py-20 max-w-7xl mx-auto">
			<h2 class="text-gray-800 text-4xl font-semibold mb-10">
				{{ article.title }}
			</h2>
			<img :src="`/${article.image}`" class="w-4/6 rounded-lg">
			<div v-html="article.full_description" class="text-gray-500 text-xl mt-10"></div>
		</div>
    </app-layout>
</template>

<script>
	import AppLayout from '@/Layouts/AppLayout'

	export default {
		props: ['article'],
		components: {
			AppLayout,
		}
	}
</script>