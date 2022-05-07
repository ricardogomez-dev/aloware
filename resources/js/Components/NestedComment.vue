<template>
	<div class="ml-10 mt-5 pl-3 border-l-4 border-blue-300 ">
		<div class="flex items-center">
			<img :src="`https://ui-avatars.com/api/?name=${comment.user.name}&color=80C1E5&background=F1FAFF`" class="rounded-full w-10 h-10">
			<h3 class="text-gray-700 text-lg font-semibold ml-5">
				{{ comment.user.name }}
				<span class="text-gray-400 text-sm ml-2">{{ comment.timestamp }}</span>
			</h3>
		</div>
		<p class="px-5 mt-3 text-gray-500">{{ comment.comment }}</p>
	</div>
</template>

<script>
	export default {
		props: ['comment']
	}
</script>