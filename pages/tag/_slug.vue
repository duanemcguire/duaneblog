<template>
<div>
  <div class="container d-md-flex align-items-stretch mt-3">
    <div>
      <h1 style="font-size: 1.9em">Tag: {{ tagname }}</h1>
      <blog-cards :blogs="blogs" />
    </div>
  </div>
</div>
</template>

<script>
export default {

  async asyncData({
    $content,
    params
  }) {
    var blogs = await $content('blog')
      .sortBy('date', 'desc')
      .fetch()
    blogs = blogs
      .filter(blog => blog.hasOwnProperty('tags'))
      .filter(blog => blog.tags.includes(params.slug))

    String.prototype.toProperCase = function() {
      return this.replace(/\w\S*/g, function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      });
    };
    const tagname = params.slug.toProperCase()
    return {
      params,
      tagname,
      blogs,
    }
  },
  head() {
    return {
      title: 'Blog tag: ' + this.tagname,
      meta: [
        // hid is used as unique identifier. Do not use `vmid` for it as it will not work
        {
          hid: 'tag-collection',
          name: 'description',
          content: 'Collection of piano blog posts tagged as ' + this.tagname
        }
      ],
      link: [{
        rel: 'canonical',
        href: 'https://blog.duanemcguire.com/tag/' + this.params.slug
      }, ]
    }
  },
}
</script>
