<template>
  <div class="contaniner">
    <ValidationProvider slim rules="required" v-slot="{ errors }" name="test">
        <input type="text" name="test[name]">
        <span>{{ errors[0] }}</span>
    </ValidationProvider>
    <input type="text" name="test[address]" />
    <input type="text" v-model="mains" name="aaa" />
       <div v-for="(i, id) in getCount" :key="id">
       {{ id }}
        <li>{{ tests['dataa'][id][0] }}</li>
        <li>{{ tests['datab'][id]['a'] }}</li>
   
    </div>
  </div>
</template>

<script>

import { ValidationProvider, ValidationObserver } from 'vee-validate';
import { extend } from 'vee-validate';

import appendExtendRules from '../validate_rules';
appendExtendRules();

export default {
  components: {
    ValidationProvider,
    ValidationObserver,
  },
  props: {
    test: {
      type: Object,
    },
    value: {
   
    }
  },
  data() {
    return {
      tests: this.test,
      count: this.test.dataa.length,
      mains: this.value
    }
  },
  computed: {
    getCount: function() {
      return this.test.dataa.length;
    }
  }
};

</script>
