<template>
<div>
  <div class="container d-md-flex align-items-stretch mt-3">
    <div>
      <h1 style="font-size: 1.9em"> {{ blog.title }}</h1>
      <!--<prev-next :prev="prev" :next="next" />
      <BR />-->
      <div><time class="pubdate" :datetime="blog.date">{{blog.date}}</time></div>
      <div> Category:
        <ul class="comma-list">
          <li v-for="cat of catArray">
            <NuxtLink :to="'/category/' + cat[0]">{{ cat[1] }}</NuxtLink>
          </li>
        </ul>
      </div>
      <BR />
      <nuxt-content :document="blog" />
      <div v-if="mediaPresent">
        <lb :media="blog.media" />
      </div>
      <div v-if="'tags' in blog">
        Related posts tagged as:
        <p class="tcloud" v-for="tag in blog.tags">
          <a :href="'/tag/' + tag">{{tag}}</a>
        </p>
      </div>
    </div>
    <!--<sidebar />-->
  </div>
</div>
</template>

<script>
export default {
  async asyncData({
    $content,
    params
  }) {
    const blog = await $content('blog', params.slug).fetch()
    const categories = await $content('categories').fetch()

    // build excerpt
    var str = ""
    if (typeof(blog.excerpt) == 'undefined') {
      str = blog.body.children[0].children[0].value
    } else {
      str = blog.excerpt
    }
    var maxChar = 150
    if (str) {
      str = str.trim()
      if (str.length > maxChar) {
        str = str.substr(0, maxChar - 1)
        str = str.split("").reverse().join("")
        str = str.substring(str.indexOf(" "), str.length)
        str = str.split("").reverse().join("")
      }
    }
    blog.excerpt = str
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    var d = new Date(blog.date + " 12:00:00")
    blog.displayDate = days[d.getDay()] + ', ' + d.getDate().toString() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear().toString()

    // Category extract
    var catName = ""
    var catNames = []
    var catArray = []
    if (blog.hasOwnProperty('category')) {
      blog.category.forEach((cat) => {
        catName = categories
          .filter(item => item.slug === cat)
          .map(item => item.name)[0]
        catNames.push(catName)
        catArray.push([cat, catName])
      })
    }
    catNames = catNames.toString().replace(",", ", ")
    if (catNames == '') catNames = "Uncategorized"

    // check for media
    var mediaPresent = false
    mediaPresent = blog.hasOwnProperty('media')

    // establish previous and next
    const [prev, next] = await $content('blog')
      .only(['title', 'slug'])
      .sortBy('date', 'desc')
      .surround(params.slug)
      .fetch()

    return {
      blog,
      mediaPresent,
      prev,
      next,
      catNames,
      catArray,
      categories
    }
  },
  head() {
    return {
      title: this.blog.title,
      meta: [
        // hid is used as unique identifier. Do not use `vmid` for it as it will not work
        {
          hid: 'description',
          name: 'description',
          content: this.blog.excerpt
        }
      ]
    }
  },
}
</script>
<style scoped>
.comma-list {
  display: inline;
  list-style: none;
  padding: 0px;
}

.comma-list li {
  display: inline;
}

.comma-list li::after {
  content: ", ";
}

.comma-list li:last-child::after {
  content: "";
}


.tcloud a {
  line-height: 0.8;
  font-size: 0.7em;
  padding: 10px 20px;
  text-transform: uppercase;
  color: #595959;
  border: 1px solid rgba(0, 0, 0, 0.1);
  display: inline-block;
  margin: 5px;
}

.tcloud p {
  display: inline-block;
  margin-bottom: 0px;
}

figure {
  max-width: 600px;
}

.nuxt-content h2 {
  font-weight: bold;
  font-size: 28px;
}

.nuxt-content h3 {
  font-weight: bold;
  font-size: 22px;
}

.nuxt-content p {
  margin-bottom: 20px;
}

img {
  max-width: 600px;
  margin: 0 auto;

}

@media screen and (max-width: 800px) {
  img {
    max-width: 320px;
  }

}
</style>
