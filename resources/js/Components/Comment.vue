<template>
	<div class="my-5 p-5 pb-10 bg-white rounded-md">
		<div class="flex items-center">
			<img :src="`https://ui-avatars.com/api/?name=${comment.user.name}&color=80C1E5&background=F1FAFF`" class="rounded-full w-12 h-12">
			<h3 class="text-gray-700 text-lg font-semibold ml-5">
				{{ comment.user.name }}
			</h3>
		</div>
		<p class="px-5 mt-3 text-gray-500 mb-5">
			{{ comment.comment }}
			<span @click="replyComment = true" class="ml-5 text-sm text-blue-500 hover:text-blue-700 cursor-pointer">
				Reply
			</span>
		</p>
		<form v-if="replyComment" @submit.prevent="createComment">
			<input id="comment_input" v-model="form.comment" type="text" class="w-full pl-5 pr-10 py-3 border border-gray-200 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition-colors" placeholder="Write a new comment...">
		</form>
		<div v-for="nested_comment in comment.nested_comments">
			<NestedComment :comment="nested_comment" />
		</div>
	</div>
</template>

<script>
	import NestedComment from '@/Components/NestedComment'

	export default {
		props: ['comment'],
		components: {
			NestedComment
		},
		data(){
			return {
				form: {
					comment_id: this.comment.id,
					user_id: this.$page.props.user.id
				},
				replyComment: false
			}
		},
		methods: {
			createComment(){
				axios.post(route('nested_comments.store'), this.form)
					.then(res => console.log(res.data))
			}
		}
	}
</script>