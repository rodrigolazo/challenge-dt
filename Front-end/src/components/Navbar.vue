<template>
  <div>
    <b-navbar type="light" variant="light">
      <b-container>
        <b-navbar-nav>
          <b-nav-item :class="$style.logo">
            <h6>Challenge-it</h6>
          </b-nav-item>

          <b-nav-item>
            <router-link :class="$style.link" to="/">
              <b-icon icon="house-door-fill" aria-hidden="true" :class="$style.icon"></b-icon>
              Home
            </router-link>
          </b-nav-item>
          <b-nav-item>
            <router-link :class="$style.link" to="/search"
              ><b-icon icon="search" aria-hidden="true" :class="$style.icon"></b-icon
              >Search</router-link
            >
          </b-nav-item>
        </b-navbar-nav>
      </b-container>
    </b-navbar>
  </div>
</template>

<style module>
.link {
  color: rgb(41, 41, 41);
  text-decoration: none;
  align-items: center;
  font-size: 16px;
  margin-left: 2rem;
}

.link:hover {
  color: #129BEB;
}
.logo {
  border: solid #015079 1px;
  border-radius: 40px;
}
.icon{
  margin-right: .4rem;
 
}
h6{
  color: #015079;
}
</style>
