<template>
<div style="background-color: black" class="container align-items-stretch">
  <div class="d-flex bd-highlight align-items-end">
    <div style="float:left">
      <a href="/not-a-recent-photo"><img src="/images/not-a-recent-photo.resized.jpg" /></a>
    </div>
    <div class="p-2 flex-fill bd-highlight">
      <a style="color:white; text-decoration:none;" href="/">
        <h1>Duane McGuire Blog</h1>
      </a>
      <div style="color:white" class="p-1"><i>I've been thinking about things for quite a long while. </i></div>
    </div>

    <div id="not-mobile-topnav" style="color: white" class=" flex-fill bd-highlight">
      <topnav />
    </div>

  </div>
  <topnav id="mobile-topnav" />

</div>
</template>
<style>
#mobile-topnav {
  display: none
}

@media screen and (max-width: 800px) {

  #not-mobile-topnav {
    display: none
  }

  #mobile-topnav {
    display: block
  }
}
</style>
