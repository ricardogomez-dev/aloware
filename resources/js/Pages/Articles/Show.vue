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

		<div class="pb-20 px-5 md:px-20 max-w-7xl mx-auto">
			<h2 class="text-gray-700 text-2xl mb-10">Comments</h2>
			<Comment />
			<div class="mt-8">
				<form @submit.prevent="createComment">
					<input v-model="form.comment" type="text" class="w-full pl-5 pr-10 py-3 border border-gray-200 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition-colors" placeholder="Write a new comment...">
				</form>
			</div>
		</div>
    </app-layout>
</template>

<script>
	import AppLayout from '@/Layouts/AppLayout'
	import Comment from '@/Components/Comment'

	export default {
		props: ['article'],
		components: {
			AppLayout,
			Comment,
		},
		data(){
			return {
				form: {
					article_id: this.article.id,
					user_id: this.$page.props.user.id
				},
				comments: this.article.comments
					? this.article.comments
					: []
			}
		},
		methods: {
			createComment(){
				axios.post(route('comments.store'), this.form)
					.then(res => console.log(res.data))
			}
		}
	}
</script>