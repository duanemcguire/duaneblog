<!-- ~/components/Comments.vue -->
<template>
<vue-disqus shortname="blogduanemcguirecom" :identifier="`botinabox-${blog.title}`" :url="`https://blog.duanemcguire.com/blog/${blog.slug}`"></vue-disqus>
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
