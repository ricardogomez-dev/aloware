<template>
	<div class="my-5 p-5 pb-10 bg-white rounded-md">
		<div class="flex items-center">
			<img :src="`https://ui-avatars.com/api/?name=${comment.user.name}&color=80C1E5&background=F1FAFF`" class="rounded-full w-12 h-12">
			<h3 class="text-gray-700 text-lg font-semibold ml-5">
				{{ comment.user.name }}
			</h3>
		</div>
		<p class="px-5 mt-3 text-gray-500">{{ comment.comment }}</p>
	</div>
</template>

<script>
	import NestedComment from '@/Components/NestedComment'

	export default {
		props: ['comment'],
		components: {
			NestedComment
		}
	}
</script>