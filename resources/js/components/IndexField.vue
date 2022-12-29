<template>
  <tooltip :value="field.value" :text="fieldValue" :asHtml="field.asHtml" :trigger="field.trigger"></tooltip>
</template>

<script>
import Tooltip from './Tooltip';
export default {

  props: ['resourceName', 'field'],

  components: { Tooltip },

  computed: {
    fieldValue() {
      return this.field.displayedAs || this.field.value
    },
  }
}
</script>
