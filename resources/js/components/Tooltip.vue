<template>
  <span class="cursor-pointer text-70 hover:text-primary mr-3" ref="tooltip" v-if="!text">
    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="22" height="18" viewBox="0 0 22 22"
      :aria-labelledby="type" role="presentation">
      <path
        d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 9a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </svg>
  </span>

  <Popper hover="true" content="This is the Popper content" arrow="true" placement="auto" :class="theme"
    @open:popper="detectTheme()">
    <button v-if="!trigger">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="22" height="18" viewBox="0 0 22 22"
        :aria-labelledby="type" role="presentation">
        <path
          d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 9a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
      </svg>
    </button>
    <button v-else v-html="trigger"></button>
    <template #content>

      <div v-if="asHtml" v-html="text"></div>
      <div v-else>{{ text }}</div>
    </template>
  </Popper>
</template>

<script>
// import Tooltip from 'tooltip.js';


import Popper from "vue3-popper";
export default {

  components: {
    Popper,
  },

  props: ['value', 'text', 'asHtml', 'trigger'],

  mounted() {
    this.detectTheme();
  },
  methods: {
    detectTheme: function () {
      // detect in html attribute has the dark class
      const dark = document.documentElement.classList.contains('dark');
      this.theme = dark ? 'dark' : 'light';
      console.log(this.theme)
    }
  },
  data() {
    return {
      theme: 'light',
    }
  }
}
</script>

<style>
div.popper {
  white-space: wrap;
  max-width: 600px;
}


.light {
  --popper-theme-background-color: #ffffff;
  --popper-theme-background-color-hover: #ffffff;
  --popper-theme-text-color: #333333;
  --popper-theme-border-width: 1px;
  --popper-theme-border-style: solid;
  --popper-theme-border-color: #eeeeee;
  --popper-theme-border-radius: 6px;
  --popper-theme-padding: 32px;
  --popper-theme-box-shadow: 0 6px 30px -6px rgba(0, 0, 0, 0.25);
}

.dark {
  --popper-theme-background-color: #333333;
  --popper-theme-background-color-hover: #333333;
  --popper-theme-text-color: white;
  --popper-theme-border-width: 0px;
  --popper-theme-border-radius: 6px;
  --popper-theme-padding: 32px;
  --popper-theme-box-shadow: 0 6px 30px -6px rgba(0, 0, 0, 0.25);
}
</style>
