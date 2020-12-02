<!-- ~/components/Comments.vue -->
<template>
<div>
  <vue-disqus shortname="blogduanemcguirecom" :identifier="`duaneblog-${blog.slug}`" :url="`https://blog.duanemcguire.com/blog/${blog.slug}`"></vue-disqus>
</div>
</template>
<script>
export default {
  props: {
    blog: {
      type: Object,
      required: true
    }
  }
}
</script>
