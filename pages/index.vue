<template>
<div>
  <div class="container d-md-flex align-items-stretch mt-3">
    <div class="pt-2">
      Hello
    </div>
    <sidebar />
  </div>
</div>
</template>
<script>
export default {
  head() {
    return {
      title: 'McGuire Piano',
      meta: [
        // hid is used as unique identifier. Do not use `vmid` for it as it will not work
        {
          hid: 'top',
          name: 'description',
          content: 'Piano Sales and Restoration byDuane McGuire, RPT'
        }
      ]
    }
  },
}
</script>
