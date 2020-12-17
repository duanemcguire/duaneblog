<template>
<div>
  <div class="container">
    <BR />
    In 1966, Raymond High School Marching Band acquired new uniforms!
    <BR />
    <img src="/images/not-a-recent-photo.jpg" />
    <BR />
    <h2>Santa Claus Parade</h2>
    <h3>(1966)</h3>
    <a href="/images/santa-claus-parade.jpg"><img src="/images/santa-claus-parade.resized.jpg" /></a>
    <BR />
    This photo, from Tom Mattson's photo archive, is the Raymond, Washington Santa Claus parade of 1966.
    I'm near the back, in the clarinet section. When this photo first appeared on Facebook, it was of particular interest to me because it captures my Dad, Harvey McGuire, among the spectators. He was a lover of music: a big fan of the band, high
    school theater, and local musical productions.
    <BR />
    <img src="/images/harvey-in-the-crowd.png" />
    <img src="/images/duane-in-the-band.png" />
    <BR /><BR />
    And that's the way it was!
    <BR /><BR />

    <iframe :src="'/hyvor.html?/not-a-recent-photo'  " width="100%" height="1000">
    </iframe>

  </div>
</div>
</template>
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

  div {
    max-width: 324px;
  }

}
</style>
